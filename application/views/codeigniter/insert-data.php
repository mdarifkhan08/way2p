<h3>application/config/config.php</h3><hr/>
<pre class="prettyprint">
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'c2',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
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


<h3>controllers/StudentController.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');
class StudentController extends CI_Controller
{
    public function index()
    {
    	$this->load->model('StudentModel');
    	$data['rowCount']=$this->StudentModel->getRowCount();
        $data['completeData']=$this->StudentModel->getAllRecords();
        $this->load->view('student/student',$data);
    }
    public function insertRecord()
    {
        $this->load->model('StudentModel');
        $fname   = $this->input->post('fname');
        $lname   = $this->input->post('lname');
        $email   = $this->input->post('email');
        $address = $this->input->post('address');
        $this->StudentModel->insertRecord($fname, $lname, $email, $address);
        $data['successInsert']='&lt;div class="alert alert-success">Student Registered Successfully!&lt;/div>';
        $data['rowCount']=$this->StudentModel->getRowCount();
        $data['completeData']=$this->StudentModel->getAllRecords();
        $this->load->view('student/student',$data);
    }
}

</pre>


<h3>models/StudentModel.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');
class StudentModel extends CI_Model
{
    private $table = 'student';
    
    public function __construct(){
        /* Call the Model constructor */
        parent::__construct();
    }
    
    public function insertRecord($fname, $lname, $email, $address){
        $this->fname   = $fname;
        $this->lname   = $lname;
        $this->email   = $email;
        $this->address = $address;
        $this->db->insert($this->table, $this);
    }


    public function getLastRecord(){
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get($this->table, 1);
        return $query->result();
    }

    public function getRowCount(){
        return $this->db->count_all($this->table);
    }

    public function getAllRecords(){
      $this->db->select('fname,lname,email,address');
      $this->db->from($this->table);
      $query = $this->db->get();
      $data=$query->result();
      return $data;
    }
}
</pre>



<h3>student/student.php</h3><hr/>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html ng-app="myApp">
&lt;head>
&lt;title>asda&lt;/title>
&lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
&lt;style type="text/css">
.submitted .ng-invalid{
        border: 1px solid red;
}	
[ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
  display: none !important;
}
.clrred{
	color:red;
}
&lt;/style>
&lt;/head>
&lt;body>
&lt;br/>&lt;br/>
&lt;div class="container ng-cloak" ng-controller="mainController">
&lt;div class="row">
	&lt;div class="col-md-3 ">
	&lt;/div>
	&lt;div class="col-md-6">
      &lt;?php if(isset($successInsert)){echo $successInsert;}?>
      
	&lt;div class="panel panel-primary">
		&lt;div class="panel panel-heading">
			&lt;h2>Student Registration Form&lt;/h2>
		&lt;/div>
		&lt;div class="panel panel-body">
			&lt;form action="&lt;?= site_url('StudentController/insertRecord') ?>" method="post" name="nameForm" ng-class="{'submitted': submitted}">
		&lt;div class="form-group">
			&lt;input type="text" ng-model="fname" name="fname" required minlength="2" class="form-control" placeholder="Enter Firstname" />
			&lt;div ng-messages="nameForm.fname.$error">
              &lt;div ng-message="minlength" class="clrred">Entered name is too short&lt;/div>
            &lt;/div>
		&lt;/div>
		&lt;div class="form-group">
			&lt;input type="text" name="lname" ng-model="lname" class="form-control" placeholder="Enter Lastname" required="required" />
			
		&lt;/div>
		&lt;div class="form-group">
			&lt;input type="email" name="email" ng-model="email" class="form-control" placeholder="Enter Email" required="required" />
		&lt;/div>
		&lt;div class="form-group">
			&lt;textarea name="address" class="form-control" ng-model="address" placeholder="Enter Address" required="required">&lt;/textarea>
		&lt;/div>
        &lt;div class="form-group">
         &lt;input type="submit" value="Submit" ng-click="submitted= true;" class="form-control btn btn-primary" />
        &lt;/div>
        &lt;/form>
		&lt;/div>
	&lt;/div>
	&lt;div>
	&lt;span align="right">Total Student:&lt;?php if(isset($rowCount)){echo $rowCount;}?>&lt;/span>
     &lt;table class="table table-bordered">
     	 &lt;tr>&lt;td>First Name&lt;/td>&lt;td>Last Name&lt;/td>&lt;td>Email&lt;/td>&lt;td>Address&lt;/td>&lt;/tr>
     	 &lt;?php foreach($completeData as $data){?>
         &lt;tr>&lt;td>&lt;?= $data->fname?>&lt;/td>&lt;td>&lt;?= $data->lname?>&lt;/td>&lt;td>&lt;?= $data->email?>&lt;/td>&lt;td>&lt;?= $data->address?>&lt;/td>&lt;/tr>  
     	 &lt;?php } ?>
     &lt;/table>
	&lt;/div>
		
	&lt;/div>
	&lt;div class="col-md-3">
		
	&lt;/div>
&lt;/div>
&lt;/div>
&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.6/angular.min.js">&lt;/script>
&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.6/angular-messages.min.js">&lt;/script>
&lt;script type="text/javascript">
	var app=angular.module('myApp',['ngMessages']);
	app.controller('mainController',function($scope,$log,$filter){
    });
&lt;/script>
&lt;/body>
&lt;/html>
</pre>

