var app=angular.module('myApp',[]);

app.controller('mainController',['$scope','$filter','$http','$location',function($scope,$filter,$http,$location){

    $scope.saleAbstract='';
    $scope.saleSumAbstract='';

    $scope.year='';
    $scope.month='';

    $scope.hidedata1=true;
     $scope.hidedata2=false;

              if($location.host()=='localhost'){
   var arraydata=window.location.pathname.split('/');
   var mypath='/'+arraydata[1];
}
else{
var mypath='';
}

    $http.get(mypath+'/angularjs/interface/sale/abstract')
    .success(function(result){return $scope.saleAbstract=result;})
    .error(function(data,status){console.log(status)});


    $http.get(mypath+'/angularjs/interface/sale/abstract/sum')
    .success(function(result){return $scope.saleSumAbstract=result;})
    .error(function(data,status){console.log(status)});


$scope.onSubmitButtonForDatewiseData=function(){
     $scope.hidedata1=false;
     $scope.hidedata2=true;

if($scope.year!='' && $scope.month==''){
    $http.get(mypath+'/angularjs/interface/get/sale/data/'+$scope.year)
    .success(function(result){return $scope.getCompData=result;})
    .error(function(data,status){console.log(status)});


    $http.get(mypath+'/angularjs/interface/sale/abstract/sum/'+$scope.year)
    .success(function(result){return $scope.getSumData=result;})
    .error(function(data,status){console.log(status)});


}
else if($scope.year!='' && $scope.month!=''){
    $http.get(mypath+'/angularjs/interface/get/sale/data/'+$scope.year+'/'+$scope.month)
    .success(function(result){return $scope.getCompData=result;})
    .error(function(data,status){console.log(status)});

 $http.get(mypath+'/angularjs/interface/sale/abstract/sum/'+$scope.year+'/'+$scope.month)
    .success(function(result){return $scope.getSumData=result;})
    .error(function(data,status){console.log(status)});
}

}





}]);