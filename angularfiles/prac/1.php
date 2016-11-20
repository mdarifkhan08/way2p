<!DOCTYPE html>
<html ng-app="myApp">
<head>
	<title></title>
</head>
<body ng-controller="mainController">
<input type="text" ng-model="name"/>
{{fun()}}

<script type="text/javascript" src="https://code.angularjs.org/1.5.5/angular.min.js"></script>
<script type="text/javascript">
	var app=angular.module('myApp',[]);
	app.controller('mainController',['$scope',function($scope){
        $scope.fun=function(){
          console.log($scope.name);
        }
	}]);
</script>
</body>
</html>