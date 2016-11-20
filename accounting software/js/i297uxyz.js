var app=angular.module('myApp',[]);

app.controller('mainController',['$scope','$filter','$http','$location',function($scope,$filter,$http,$location){

$scope.repeat='';
$scope.onType='';


       if($location.host()=='localhost'){
   var arraydata=window.location.pathname.split('/');
   var mypath='/'+arraydata[1];
}
else{
var mypath='';
}

$scope.onTypeWords=function(){
	
$http.get(mypath+'/angularjs/interface/check/repetation/'+$scope.onType)
.success(function(result){$scope.repeat=result;})
.error(function(data,status){console.log(status)});
}


$scope.disableButton=function(){
	if($scope.repeat.length>0){
        return true;
	}
	else{
		return false;
	}
}
}
]);