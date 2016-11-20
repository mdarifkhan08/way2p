<h3>student-insert.php</h3><hr/>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
   &lt;head>
      &lt;title>&lt;/title>
      &lt;link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   &lt;/head>
   &lt;body ng-app="ServiceApp">
      &lt;br/>&lt;br/>
      &lt;div class="container" ng-controller="serviceController">
         &lt;h2>Student Registration&lt;/h2>
         &lt;input type="text" class="form-control" ng-model="name"  placeholder="Enter Name" required />&lt;br/>
         &lt;input type="text" class="form-control" ng-model="address" placeholder="Enter Address" required/>&lt;br/>
         &lt;button class="btn btn-success" ng-click="onClickDivInsertStudent()" >Insert&lt;/button>
         &lt;br/>
         &lt;h2>All Students&lt;/h2>
         &lt;table class="table table-bordered">
            &lt;tr>
               &lt;th>Name&lt;/th>
               &lt;th>Address&lt;/th>
            &lt;/tr>
            &lt;tr ng-repeat="record in student">
               &lt;td>&#123;&#123;record.student_name}}&lt;/td>
               &lt;td>&#123;&#123;record.student_address}}&lt;/td>
            &lt;/tr>
         &lt;/table>
      &lt;/div>
      &lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
      &lt;script type="text/javascript">
         var app=angular.module('ServiceApp',[]);
         app.controller('serviceController',['$scope','$http','$filter','$log',function($scope,$http,$filter,$log)&#123;
         
              $scope.name='';
              $scope.address='';
              $scope.student='';
         
         
               $http.get('/student/api/student/select')
               .success(function(result)&#123;$scope.student=result;})
               .error(function(data,status)&#123;console.log(status)});
         
                $scope.onClickDivInsertStudent=function()&#123;
                  $http.post('/student/api/student/insert',&#123;name:$scope.name,address:$scope.address})
                  .success(function(result)&#123;
                          $scope.student=result;
                          $scope.name='';
                          $scope.address='';
                          console.log(result);
                  })
                  .error(function(data,status)&#123;
                      console.log(data);
                  });
                }
         }]);
      &lt;/script>
   &lt;/body>
&lt;/html>	
</pre>

<h3>Slim Framework Api File</h3>
<pre class="prettyprint">
&lt;?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new Slim\App();

$app->post('/student/insert',function($request, $response, $args){
    require '../dbconfig.php';
    $data = $request->getParsedBody();
    $stmt=$DB_con->prepare('insert into student(student_name,student_address) values(:name,:address)');
    $stmt->bindParam(':name',$data['name']);
    $stmt->bindParam(':address',$data['address']);
    $stmt->execute();
    $stmt=$DB_con->prepare('select * from student Order by student_id DESC');
    $stmt->execute();
    $students=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return json_encode($students);
});


$app->get('/student/select',function($request, $response, $args){
    require '../dbconfig.php';
    $stmt=$DB_con->prepare('select * from student Order by student_id DESC');
    $stmt->execute();
    $students=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return json_encode($students);
});



$app->run();
	
</pre>


<h3>output</h3>
<pre>
<img src="<?php echo base_url();?>static/images/angularjs-with-slim.png" class="img-responsive">  
</pre>



