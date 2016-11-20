var app=angular.module('myApp',[]);

app.controller('mainController',['$scope','$filter','$http','$location',function($scope,$filter,$http,$location){

$scope.abstractData='';
$scope.abstractSumData='';

if($location.host()=='localhost'){
   var arraydata=window.location.pathname.split('/');
   var mypath='/'+arraydata[1];
}
else{
var mypath='';
}


$http.get(mypath+'/angularjs/interface/abstract').success(function(result){
	$scope.abstractData=result;
}).error(function(data,status){
	console.log(status);
});


$http.get(mypath+'/angularjs/interface/abstract/sum').success(function(result){
	$scope.abstractSumData=result;
}).error(function(data,status){
	console.log(status);
});

}]);