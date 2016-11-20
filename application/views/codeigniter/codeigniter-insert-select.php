<h3>route.php</h3><hr/>
<pre class="prettyprint">
$route['student']='StudentController';
$route['student/register']='StudentController/registerStudent';	
</pre>

<h3>views/student.php</h3><hr/>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>Student Home Page&lt;/title>
	&lt;link rel="stylesheet" type="text/css" href="&lt;?php echo base_url(); ?>static/css/bootstrap.min.css" />
&lt;/head>
&lt;body>
&lt;div class="container">
    &lt;div class="row">
    	
    	&lt;div class="col-md-3">
    		
    	&lt;/div>
    	&lt;div class="col-md-6">
    	    &lt;?php if(isset($successRegister)){echo $successRegister;}?>
    	    &lt;?php if(isset($new)){var_dump($new);}?>
    		&lt;div class="panel panel-primary">
		          &lt;div class="panel panel-heading">
			          Test Register
		          &lt;/div>
		          &lt;div class="panel panel-body">
		          &lt;?php echo form_open(base_url().'student/register');?>
			          &lt;div class="form-group">
				          &lt;input type="text" name="name" class="form-control" placeholder="Enter Name">
			          &lt;/div>
			          &lt;div class="form-group">
				          &lt;input type="text" name="email" class="form-control" placeholder="Enter Email">
			          &lt;/div>
			          &lt;div class="form-group">
				          &lt;input type="submit" name="submit" class="btn btn-primary">
			          &lt;/div>
			      &lt;?php echo form_close();?>
		          &lt;/div>
	        &lt;/div>
    	&lt;/div>
    	&lt;div class="col-md-3">
    	&lt;/div>
    &lt;/div>
&lt;/div>
&lt;/body>
&lt;/html>
</pre>


<h3>config/autoload.php</h3><hr/>
<pre class="prettyprint">
defined('BASEPATH') OR exit('No direct script access allowed');
$autoload['packages'] = array();
$autoload['libraries'] = array('database', 'email', 'session');
$autoload['drivers'] = array();
$autoload['helper'] = array('url', 'file','form');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array();
</pre>


<h3>db.sql</h3><hr/>
<pre class="prettyprint">
create table student(
id int(11) not null auto_increment,
name varchar(255) not null,
email varchar(255) not null,
primary key(id)
);
</pre>


<h3>StudentController.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');
class StudentController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('StudentModel');
    }
    
    public function index()
    {
        $this->load->view('student/student');
        
    }
    
    
    public function registerStudent()
    {
        $data   = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email')
        );
        $record = $this->StudentModel->getStudentByEmail($data['email']);
        if ($record) {
            $data['successRegister'] = '&lt;div class="alert alert-danger">Email Id Already Exists!&lt;/div>';
        } else {
            $this->StudentModel->registerStudent($data);
            $data['successRegister'] = '&lt;div class="alert alert-success">Register Successfully!&lt;/div>';
        }
        $this->load->view('student/student', $data);
    }
    
    
}
</pre>

<h3>StudentModel.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class StudentModel extends CI_Model
{

          public function registerStudent($data){
 	         $this->db->insert('student',$data);
 	         if ($this->db->affected_rows() > 0) {
                 return true;
             }else{
    	         return false;
             }
          }


          public function getStudents(){
          	$this->db->select('name,email');
          	$this->db->from('student');
          	$query=$this->db->get();
          	$data=$query->result();
          	return $data;
          }


          public function getStudentByEmail($email){
             $this->db->select('name,email');
             $this->db->from('student');
             $this->db->where('email',$email);
             $query=$this->db->get();
             if ( $query->num_rows() > 0 )
              {
                 return true;
              }
          	 else{
                 return false;
          	 }
          }
}
</pre>
