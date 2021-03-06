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

$app->get('/employee',function(Request $request,Response $response)&#123;
    require '../dbconfig.php';
    require '../class.getData.php';
    $get=new GetData($DB_CON);
    $getList=$get->getEmployeeDetails();
    $records= json_encode($getList);
    return $records;
});

$app->get('/employee/&#123;id}',function(Request $request,Response $response)&#123;
    require '../dbconfig.php';
    require '../class.getData.php';
    $get=new GetData($DB_CON);
    $id=$request->getAttribute('id');
    $getList=$get->getEmployee($id);
    $records= json_encode($getList);
    return $records;
});

$app->post('/employee',function(Request $request,Response $response)&#123;
         require '../dbconfig.php';
         require '../class.getData.php';
         $get=new GetData($DB_CON);
         $data = $request->getParsedBody();
         $receive_data = [];
         $receive_data['name'] = filter_var($data['name'], FILTER_SANITIZE_STRING);
         $receive_data['email'] = filter_var($data['email'], FILTER_SANITIZE_STRING);
         $get->postEmployee($receive_data['name'],$receive_data['email']);
        
});


$app->put('/employee/&#123;id}',function(Request $request,Response $response)&#123;
         require '../dbconfig.php';
         require '../class.getData.php';
         $get=new GetData($DB_CON);
         $data = $request->getParsedBody();
         $receive_data = [];
         $id=$request->getAttribute('id');
         $receive_data['name'] = filter_var($data['name'], FILTER_SANITIZE_STRING);
         $receive_data['email'] = filter_var($data['email'], FILTER_SANITIZE_STRING);
         $get->putEmployee($receive_data['name'],$receive_data['email'],$id);
        
});


$app->delete('/employee/&#123;id}',function(Request $request,Response $response)&#123;
         require '../dbconfig.php';
         require '../class.getData.php';
         $get=new GetData($DB_CON);
         $id=$request->getAttribute('id');
         $get->deleteEmployee($id);
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
&lt;br/>&lt;br/>&lt;br/>
    &lt;div class="container">
      &lt;div class="row">
          &lt;div class="col-sm-3">&lt;/div>
          &lt;div class="col-sm-6">
               &lt;form ng-submit="ctrl.submit()" name="myForm">
                  &lt;input type="hidden" ng-model="ctrl.emp.id"/>
                  &lt;div class="form-group">
                      &lt;input type="text" placeholder="Enter Name" class="form-control" ng-model="ctrl.emp.name"/>
                  &lt;/div>
                  &lt;div class="form-group">
                      &lt;input type="text" placeholder="Enter Email" class="form-control" ng-model="ctrl.emp.email"/>
                  &lt;/div>
                  &lt;div class="form-group">
                      &lt;input type="submit" class="btn btn-primary" value="&#123;&#123;!ctrl.emp.id ? 'Add' : 'Update'}}"/>
                  &lt;/div>
              &lt;/form>
          &lt;/div>
          &lt;div class="col-sm-3">&lt;/div>
      &lt;/div>
    &lt;/div>
    &lt;div class="container">
        &lt;table class="table table-bordered">
            &lt;tr>
                &lt;th>Id&lt;/th>
                &lt;th>Name&lt;/th>
                &lt;th>Email&lt;/th>
                &lt;th>&lt;/th>
            &lt;/tr>
            &lt;tr ng-repeat="e in ctrl.emps">
                &lt;td ng-bind="e.id">&lt;/td>
                &lt;td ng-bind="e.name">&lt;/td>
                &lt;td ng-bind="e.email">&lt;/td>
                &lt;td>&nbsp;&nbsp;&lt;button type="button" ng-click="ctrl.edit(e.id)" class="btn btn-success custom-width">Edit&lt;/button>&nbsp;&nbsp;&lt;button type="button" ng-click="ctrl.remove(e.id)" class="btn btn-danger custom-width">Delete&lt;/button>&lt;/td>
            &lt;/tr>
        &lt;/table>
    &lt;/div>
    &lt;script type="text/javascript" src="js/angular.min.js">&lt;/script>
    &lt;script type="text/javascript" src="js/angular-resource.js">&lt;/script>
    &lt;script type="text/javascript">
        'use strict';
        var app = angular.module('myApp', ['ngResource']);
        app.factory('Employee', ['$resource', function($resource) &#123;
            return $resource('http://localhost/resourceAPI/api/employee/:id',
            &#123;id:'@id'},
            &#123;update:&#123;method:'PUT'}}
            );
        }]);
        app.controller('mainController', ['$scope', 'Employee', function($scope, Employee) &#123;
            var self = this;
            self.emp = new Employee();
            self.emps = [];
            self.fetchAllEmployees = function() &#123;
                self.emps = Employee.query();
            };
            self.fetchAllEmployees();
            self.createEmployee=function()&#123;
                self.emp.$save(function()&#123;
                      self.fetchAllEmployees();
                });
            }
            self.updateEmployee = function()&#123;
              self.emp.$update(function()&#123;
                  self.fetchAllEmployees();
              });
            };
            self.deleteUser = function(identity)&#123;
             var emp = Employee.get(&#123;id:identity}, function() &#123;
              emp.$delete(function()&#123;
                self.fetchAllEmployees();
              });
             });
            };
            self.remove = function(id)&#123;
              if(self.emp.id === id) &#123;
                 self.reset();
              }
              self.deleteUser(id);
            };
            self.reset = function()&#123;
              self.emp= new Employee();
              $scope.myForm.$setPristine(); 
            };
            self.submit=function()&#123;
              if(self.emp.id==null)&#123;
                  self.createEmployee();
              }else&#123;
                  self.updateEmployee();
              }
              self.reset();
            }
            self.edit = function(id)&#123;
              for(var i = 0; i &lt; self.emps.length; i++)&#123;
                  if(self.emps[i].id === id) &#123;
                     self.emp = angular.copy(self.emps[i]);
                     break;
                  }
              }
          };
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
class getData&#123;
	private $db;

	public function __construct($DB_CON)&#123;
         $this->db=$DB_CON;
	}

	public function getEmployeeDetails()&#123;
		$stmt=$this->db->prepare('select * from emp');
		$stmt->execute();
		$records=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $records;
	}

	public function getEmployee($id)&#123;
        $stmt=$this->db->prepare('select * from emp where id=:id');
        $stmt->bindParam(':id',$id);
		$stmt->execute();
		$records=$stmt->fetch(PDO::FETCH_ASSOC);
		return $records;
	}

	public function postEmployee($name,$email)&#123;
        $stmt=$this->db->prepare('insert into emp(name,email) values(:name,:email)');
        $stmt->bindParam(':name',$name);
        $stmt->bindParam(':email',$email);
		$stmt->execute();
		
	}

	public function putEmployee($name,$email,$id)&#123;
		$stmt=$this->db->prepare('update emp set name=:name,email=:email where id=:id');
        $stmt->bindParam(':name',$name);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':id',$id);
		$stmt->execute();
	}


	public function deleteEmployee($id)&#123;
		$stmt=$this->db->prepare('delete from emp where id=:id');
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
