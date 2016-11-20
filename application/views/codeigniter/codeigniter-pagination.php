<h3>.htaccess in root directory</h3><hr/>
<pre class="prettyprint">
RewriteEngine on
RewriteCond $1 !^(index\.php|resources|robots\.txt)
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L,QSA]
</pre>



<h3>db.sql</h3><hr/>
<pre class="prettyprint">create table studentss(
id int(11)unsigned not null auto_increment,
name varchar(255) not null,
email varchar(255) not null,
address varchar(255) not null,
primary key(id)
);

insert into students(name,email,address) values('ABC1','XYZ1','LMN1');
insert into students(name,email,address) values('ABC2','XYZ2','LMN2');
insert into students(name,email,address) values('ABC3','XYZ3','LMN3');
insert into students(name,email,address) values('ABC4','XYZ4','LMN4');
insert into students(name,email,address) values('ABC5','XYZ5','LMN5');
insert into students(name,email,address) values('ABC6','XYZ6','LMN6');
insert into students(name,email,address) values('ABC7','XYZ7','LMN7');
insert into students(name,email,address) values('ABC8','XYZ8','LMN8');
insert into students(name,email,address) values('ABC9','XYZ9','LMN9');
insert into students(name,email,address) values('ABC10','XYZ10','LMN10');
insert into students(name,email,address) values('ABC1','XYZ11','LMN11');
insert into students(name,email,address) values('ABC12','XYZ12','LMN12');
insert into students(name,email,address) values('ABC13','XYZ13','LMN13');
insert into students(name,email,address) values('ABC14','XYZ14','LMN14');
insert into students(name,email,address) values('ABC15','XYZ15','LMN15');
insert into students(name,email,address) values('ABC16','XYZ16','LMN16');
insert into students(name,email,address) values('ABC17','XYZ17','LMN17');
insert into students(name,email,address) values('ABC18','XYZ18','LMN18');
insert into students(name,email,address) values('ABC19','XYZ19','LMN19');
insert into students(name,email,address) values('ABC20','XYZ20','LMN20');
</pre>


<h3>StudentController.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('StudentModel');
		$this->load->helper('url');
	}

	public function getStudents(){
		$config['base_url']=base_url().'students';
		$config['total_rows']=$this->StudentModel->countAllStudents();
		$config['per_page']=5;
                $config['full_tag_open'] = '&lt;ul class="pagination">';
                $config['full_tag_close'] = '&lt;/ul>';
                $config['first_link'] = false;
                $config['last_link'] = false;
                $config['first_tag_open'] = '&lt;li>';
                $config['first_tag_close'] = '&lt;/li>';
                $config['prev_link'] = '&laquo';
                $config['prev_tag_open'] = '&lt;li class="prev">';
                $config['prev_tag_close'] = '&lt;/li>';
                $config['next_link'] = '&raquo';
                $config['next_tag_open'] = '&lt;li>';
                $config['next_tag_close'] = '&lt;/li>';
                $config['last_tag_open'] = '&lt;li>';
                $config['last_tag_close'] = '&lt;/li>';
                $config['cur_tag_open'] = '&lt;li class="active">&lt;a href="#">';
                $config['cur_tag_close'] = '&lt;/a>&lt;/li>';
                $config['num_tag_open'] = '&lt;li>';
                $config['num_tag_close'] = '&lt;/li>';
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['result']=$this->StudentModel->getStudents($config['per_page'],$this->uri->segment(2));
		$this->load->view('students', $data);  
	}
}	
</pre>

<h3>StudentModel.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentModel extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function countAllStudents(){
		return $this->db->count_all_results('students');
	}

	public function getStudents($limit,$offset){
		$results=$this->db->get('students',$limit,$offset);
		return $results->result_array();
	}
}
</pre>

<h3>views/students.php</h3><hr/>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>&lt;/title>
	&lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
&lt;/head>
&lt;body>
&lt;div class="container">
	&lt;div class="panel panel-success">
		&lt;div class="panel panel-heading">
			&lt;h3>Students List&lt;/h3>
		&lt;/div>
		&lt;div class="panel panel-body">
			&lt;table class="table table-bordered">
				&lt;tr>&lt;th>Name&lt;/th>&lt;th>Email&lt;/th>&lt;th>Address&lt;/th>&lt;/tr>
				&lt;?php if(count($result)>0){ foreach($result as $data){?>
                &lt;tr>&lt;th>&lt;?php echo $data['name']?>&lt;/th>&lt;th>&lt;?php echo $data['email']?>&lt;/th>&lt;th>&lt;?php echo $data['address']?>&lt;/th>&lt;/tr>
				&lt;?php }?>
			&lt;/table>
			&lt;div align="center"> &lt;?php echo $pagination; ?>&lt;/div>
                &lt;?php } ?>
		&lt;/div>
	&lt;/div>
&lt;/div>
&lt;/body>
&lt;/html>
</pre>

<h3>.htaccess in root directory</h3><hr/>
<pre class="prettyprint">
RewriteEngine on
RewriteCond $1 !^(index\.php|resources|robots\.txt)
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L,QSA]
</pre>



<h3>autoload.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');
$autoload['packages'] = array(APPPATH.'third_party');
$autoload['libraries'] = array('database', 'email', 'session');
$autoload['drivers'] = array();
$autoload['helper'] = array('url', 'file');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array();
</pre>

<h3>database.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');
$active_group = 'default';
$query_builder = TRUE;
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'c12',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'development'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
</pre>

<h3>output</h3><hr/>
<img src="<?php echo base_url();?>static/images/pagination-codeigniter.png" class="img-resposnive">
