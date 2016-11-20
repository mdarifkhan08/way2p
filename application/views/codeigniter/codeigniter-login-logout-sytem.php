<h3>.htaccess</h3><hr/>
<pre class="prettyprint">
RewriteEngine on
RewriteCond $1 !^(index\.php|resources|robots\.txt)
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L,QSA]
</pre>


<h3>db.sql</h3><hr/>
<pre class="prettyprint">
CREATE TABLE user_login(
  id int(11) NOT NULL,
  user_name varchar(255) NOT NULL,
  user_email varchar(255) NOT NULL,
  user_password varchar(255) NOT NULL
);
</pre>

<h3>application/config/autoload.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');
$autoload['packages'] = array(APPPATH.'third_party');
$autoload['libraries'] = array('database', 'email', 'session','form_validation');
$autoload['drivers'] = array();
$autoload['helper'] = array('url', 'file','security');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array();
</pre>



<h3>application/config/config.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');
$config['base_url'] = 'http://localhost/codeigniter/c2';
$config['index_page'] = 'index.php';
$config['uri_protocol'] = 'REQUEST_URI';
$config['url_suffix'] = '';
$config['language'] = 'english';
$config['charset'] = 'UTF-8';
$config['enable_hooks'] = TRUE;
$config['subclass_prefix'] = 'MY_';
$config['composer_autoload'] = FALSE;
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';
$config['allow_get_array'] = TRUE;
$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';
$config['log_threshold'] = 0;
$config['log_path'] = '';
$config['log_file_extension'] = '';
$config['log_file_permissions'] = 0644;
$config['log_date_format'] = 'Y-m-d H:i:s';
$config['error_views_path'] = '';
$config['cache_path'] = '';
$config['cache_query_string'] = FALSE;
$config['encryption_key'] = '';
$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'ci_session';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = NULL;
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = FALSE;
$config['cookie_prefix']    = '';
$config['cookie_domain']    = '';
$config['cookie_path']      = '/';
$config['cookie_secure']    = FALSE;
$config['cookie_httponly']  = FALSE;
$config['standardize_newlines'] = FALSE;
$config['global_xss_filtering'] = FALSE;
$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = TRUE;
$config['csrf_exclude_uris'] = array();
$config['compress_output'] = FALSE;
$config['time_reference'] = 'local';
$config['rewrite_short_tags'] = FALSE;
$config['proxy_ips'] = '';
</pre>


<h3>application/controllers/User_Auth.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class User_Auth extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_database');
    }
    
    
    public function index()
    {
        $this->load->view('login_form');
    }
    
  
    public function registrationPage()
    {
        $this->load->view('registration_form');
    }
    
   
    public function registrationRequest()
    {
        
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('registration_form');
        } else {
            $data   = array(
                'user_name' => $this->input->post('username'),
                'user_email' => $this->input->post('email_value'),
                'user_password' => $this->input->post('password')
            );
            $result = $this->login_database->registration_insert($data);
            if ($result == TRUE) {
                $data['message_display'] = 'Registration Successfully !';
                $this->load->view('login_form', $data);
            } else {
                $data['message_display'] = 'Username already exist!';
                $this->load->view('registration_form', $data);
            }
        }
    }
    
  
    public function userLogin()
    {
        
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        
        if ($this->form_validation->run() == FALSE) {
            if (isset($this->session->userdata['logged_in'])) {
                $this->load->view('admin_page');
            } else {
                $this->load->view('login_form');
            }
        } else {
            $data   = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $result = $this->login_database->login($data);
            if ($result == TRUE) {
                
                $username = $this->input->post('username');
                $result   = $this->login_database->read_user_information($username);
                if ($result != false) {
                    $session_data = array(
                        'username' => $result[0]->user_name,
                        'email' => $result[0]->user_email
                    );
                    // Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    $this->load->view('admin_page');
                }
            } else {
                $data = array(
                    'error_message' => 'Invalid Username or Password'
                );
                $this->load->view('login_form', $data);
            }
        }
    }
    
    
    public function logout()
    {
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        $this->load->view('login_form', $data);
    }
}

?>	
</pre>


<h3>application/models/login_database.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Login_Database extends CI_Model
{
    public function registration_insert($data)
    {
        $condition = "user_name =" . "'" . $data['user_name'] . "'";
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            
            // Query to insert data in database
            $this->db->insert('user_login', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
        } else {
            return false;
        }
    }
    
    public function login($data)
    {
        
        $condition = "user_name =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
    
    public function read_user_information($username)
    {
        
        $condition = "user_name =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}

?>
</pre>


<h3>application/config/routes.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
$route['default_controller'] = 'User_Auth/index';
$route['login'] = 'User_Auth/index';
$route['register'] = 'User_Auth/registrationPage';
$route['register/userdata'] = 'User_Auth/registrationRequest';
$route['login/user'] = 'User_Auth/userLogin';
$route['logout'] = 'User_Auth/logout';

$route['product/:num'] = 'catalog/product_lookup';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
?>
</pre>



<h3>application/views/registration_form.php</h3><hr/>
<pre class="prettyprint">
&lt;html>
&lt;?php
if (isset($this->session->userdata['logged_in'])) {
    header("location: http://localhost/codeigniter/c2/login/user");
}
?>
&lt;head>
&lt;title>Registration Form&lt;/title>
&lt;link rel="stylesheet" type="text/css" href="&lt;?php
echo base_url();
?>css/style.css">
&lt;link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
&lt;/head>
&lt;body>
&lt;div id="main">
&lt;div id="login">
&lt;h2>Registration Form&lt;/h2>
&lt;hr/>
&lt;?php
echo "&lt;div class='error_msg'>";
echo validation_errors();
echo "&lt;/div>";
echo form_open(base_url().'register/userdata');

echo form_label('Create Username : ');
echo "&lt;br/>";
echo form_input('username');
echo "&lt;div class='error_msg'>";
if (isset($message_display)) {
    echo $message_display;
}
echo "&lt;/div>";
echo "&lt;br/>";
echo form_label('Email : ');
echo "&lt;br/>";
$data = array(
    'type' => 'email',
    'name' => 'email_value'
);
echo form_input($data);
echo "&lt;br/>";
echo "&lt;br/>";
echo form_label('Password : ');
echo "&lt;br/>";
echo form_password('password');
echo "&lt;br/>";
echo "&lt;br/>";
echo form_submit('submit', 'Sign Up');
echo form_close();
?>
&lt;a href="&lt;?php
echo base_url();
?> ">For Login Click Here&lt;/a>
&lt;/div>
&lt;/div>
&lt;/body>
&lt;/html>
</pre>


<h3>application/views/admin_page.php</h3><hr/>
<pre class="prettyprint">
&lt;html>
&lt;?php
if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
    $email    = ($this->session->userdata['logged_in']['email']);
} else {
    header("location: login");
}
?>
&lt;head>
&lt;title>Admin Page&lt;/title>
&lt;link rel="stylesheet" type="text/css" href="&lt;?php
echo base_url();
?>css/style.css">
&lt;link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
&lt;/head>
&lt;body>
&lt;div id="profile">
&lt;?php
echo "Hello &lt;b id='welcome'>&lt;i>" . $username . "&lt;/i> !&lt;/b>";
echo "&lt;br/>";
echo "&lt;br/>";
echo "Welcome to Admin Page";
echo "&lt;br/>";
echo "&lt;br/>";
echo "Your Username is " . $username;
echo "&lt;br/>";
echo "Your Email is " . $email;
echo "&lt;br/>";
?>
&lt;b id="logout">&lt;a href="&lt;?php echo base_url();?>logout">Logout&lt;/a>&lt;/b>
&lt;/div>
&lt;br/>
&lt;/body>
&lt;/html>
</pre>



<h3>application/views/login_form.php</h3><hr/>
<pre class="prettyprint">
&lt;html>
&lt;?php
if (isset($this->session->userdata['logged_in'])) {
    header("location: http://localhost/codeigniter/c2/login/user");
}
?>
&lt;head>
&lt;title>Login Form&lt;/title>
&lt;link rel="stylesheet" type="text/css" href="&lt;?php
echo base_url();
?>css/style.css">
&lt;link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
&lt;/head>
&lt;body>
&lt;?php
if (isset($logout_message)) {
    echo "&lt;div class='message'>";
    echo $logout_message;
    echo "&lt;/div>";
}
?>
&lt;?php
if (isset($message_display)) {
    echo "&lt;div class='message'>";
    echo $message_display;
    echo "&lt;/div>";
}
?>
&lt;div id="main">
&lt;div id="login">
&lt;h2>Login Form&lt;/h2>
&lt;hr/>
&lt;?php
echo form_open(base_url().'login/user');
?>
&lt;?php
echo "&lt;div class='error_msg'>";
if (isset($error_message)) {
    echo $error_message;
}
echo validation_errors();
echo "&lt;/div>";
?>
&lt;label>UserName :&lt;/label>
&lt;input type="text" name="username" id="name" placeholder="username"/>&lt;br />&lt;br />
&lt;label>Password :&lt;/label>
&lt;input type="password" name="password" id="password" placeholder="**********"/>&lt;br/>&lt;br />
&lt;input type="submit" value=" Login " name="submit"/>&lt;br />
&lt;a href="&lt;?php
echo base_url();
?>register">To SignUp Click Here&lt;/a>
&lt;?php
echo form_close();
?>
&lt;/div>
&lt;/div>
&lt;/body>
&lt;/html>
</pre>
