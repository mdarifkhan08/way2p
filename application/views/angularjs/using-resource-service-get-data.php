<div id="tabs">
  <ul>
    <li><a href="#tabs-1">api/index.php </a></li>
    <li><a href="#tabs-2">index.php</a></li>
    <li><a href="#tabs-3">class.getData.php</a></li>
    <li><a href="#tabs-4">dbconfig.php</a></li>
    <li><a href="#tabs-5">db.sql</a></li>
  </ul>
  <div id="tabs-1">
      <h3></h3><hr/>
      <pre class="prettyprint">
&lt;?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new Slim\App();

$app->get('/employee',function(Request $request,Response $response){
    require '../dbconfig.php';
    require '../class.getData.php';
    $get=new GetData($DB_CON);
    $getList=$get->getEmployeeDetails();
    $records= json_encode($getList);
    return $records;
});

$app->run();
      </pre>
  </div>
  <div id="tabs-2">
    <h3></h3><hr/>
      <pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html ng-app="myApp">
&lt;head>
    &lt;title>Get Data with Angularjs $resource Service&lt;/title>
    &lt;link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
&lt;/head>
&lt;body ng-controller="mainController as ctrl">
    &lt;div class="container">
        &lt;table class="table table-bordered">
            &lt;tr>
                &lt;th>Id&lt;/th>
                &lt;th>Name&lt;/th>
                &lt;th>Email&lt;/th>
            &lt;/tr>
            &lt;tr ng-repeat="e in ctrl.emps">
                &lt;td ng-bind="e.id">&lt;/td>
                &lt;td ng-bind="e.name">&lt;/td>
                &lt;td ng-bind="e.email">&lt;/td>
            &lt;/tr>
        &lt;/table>
    &lt;/div>
    &lt;script type="text/javascript" src="js/angular.min.js">&lt;/script>
    &lt;script type="text/javascript" src="js/angular-resource.js">&lt;/script>
    &lt;script type="text/javascript">
        'use strict';
        var app = angular.module('myApp', ['ngResource']);
        app.factory('Employee', ['$resource', function($resource) &#123;
            return $resource('http://localhost/resourceAPI/api/employee/');
        }]);
        app.controller('mainController', ['$scope', 'Employee', function($scope, Employee) &#123;
            var self = this;
            self.emp = new Employee();
            self.emps = [];
            self.fetchAllEmployees = function() &#123;
                self.emps = Employee.query();

            };
            self.fetchAllEmployees();
        }]);
    &lt;/script>
&lt;/body>
&lt;/html>
      </pre>
  </div>
  <div id="tabs-3">
   <h3></h3><hr/>
      <pre class="prettyprint">
&lt;?php 
class getData{
  private $db;

  public function __construct($DB_CON){
         $this->db=$DB_CON;
  }

  public function getEmployeeDetails(){
    $stmt=$this->db->prepare('select * from emp');
    $stmt->execute();
    $records=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $records;
  }

  public function getEmployee($id){
        $stmt=$this->db->prepare('select * from emp where id=:id');
        $stmt->bindParam(':id',$id);
    $stmt->execute();
    $records=$stmt->fetch(PDO::FETCH_ASSOC);
    return $records;
  }

  public function postEmployee($name,$email){
        $stmt=$this->db->prepare('insert into emp(name,email) values(:name,:email)');
        $stmt->bindParam(':name',$name);
        $stmt->bindParam(':email',$email);
    $stmt->execute();
    
  }

  public function putEmployee($name,$email,$id){
    $stmt=$this->db->prepare('update emp set name=:name,email=:email where id=:id');
        $stmt->bindParam(':name',$name);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':id',$id);
    $stmt->execute();
  }
}
?>
      </pre>
  </div>
  <div id="tabs-4">
   <h3></h3><hr/>
      <pre class="prettyprint">
&lt;?php
$DB_HOST='localhost';
$DB_NAME='resource';
$DB_USER='root';
$DB_PASS='';
try{

	$DB_CON=new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
	$DB_CON->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
   $e->getMessage();
}	
      </pre>
  </div>
  <div id="tabs-5">
   <h3></h3><hr/>
      <pre class="prettyprint">
create database resource;
use resource;
create table emp(
	id int(11) not null auto_increment,
    name varchar(255) not null,
    email varchar(255) not null,
    primary key(id)
);

insert into emp(name,email) values('xyz1','xyz1@gmail.com');
insert into emp(name,email) values('xyz2','xyz2@gmail.com');
insert into emp(name,email) values('xyz2','xyz2@gmail.com');	
      </pre>
  </div>
  
</div>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  });
  </script>

