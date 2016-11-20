
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <style type="text/css">
[ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
  display: none !important;
}
	</style>
   </head>
   <body>
      <br/>
      <div ng-app="myApp" ng-controller="mainController">
         <div class="container">
          <ul>
             <li ng-repeat="name in names">{{name.name}}-{{name.email}}</li>
          </ul>
         </div>
      </div>
      <script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js"></script>
      <script type="text/javascript">
         var app=angular.module('myApp',[]);
         
         app.controller('mainController',['$scope','$filter','$http',function($scope,$filter,$http){
            

            $http.get('/rest1/api/name').success(function(result){$scope.names=result;}).error(function(data,status){console.log(data)})

         }]);
      </script>
   </body>
</html>	