var app=angular.module('myApp',[]);

app.controller('mainController',['$scope','$filter','$http','$location',function($scope,$filter,$http,$location){
    
    $scope.purchaseAbstract='';
    $scope.purchaseSumAbstract='';

    $scope.hidedata1=true;
    $scope.hidedata2=false;

    $scope.year='';
    $scope.month='';

          if($location.host()=='localhost'){
   var arraydata=window.location.pathname.split('/');
   var mypath='/'+arraydata[1];
}
else{
var mypath='';
}

   $http.get(mypath+'/angularjs/interface/sale/purchase')
   .success(function(result){$scope.purchaseAbstract=result})
   .error(function(data,status){console.log(status)});

   $http.get(mypath+'/angularjs/interface/sale/purchase/sum')
   .success(function(result){$scope.purchaseSumAbstract=result})
   .error(function(data,status){console.log(status)});


   $scope.onSubmitButtonForDatewiseData=function(){
     $scope.hidedata1=false;
     $scope.hidedata2=true;

    if($scope.year!='' && $scope.month==''){
     $http.get(mypath+'/angularjs/interface/get/purchase/data/'+$scope.year)
     .success(function(result){return $scope.getCompData=result;})
     .error(function(data,status){console.log(status)});


     $http.get(mypath+'/angularjs/interface/purchase/abstract/sum/'+$scope.year)
     .success(function(result){return $scope.getSumData=result;})
     .error(function(data,status){console.log(status)});

}
else if($scope.year!='' && $scope.month!=''){
    $http.get(mypath+'/angularjs/interface/get/purchase/data/'+$scope.year+'/'+$scope.month)
    .success(function(result){return $scope.getCompData=result;})
    .error(function(data,status){console.log(status)});

 $http.get(mypath+'/angularjs/interface/purchase/abstract/sum/'+$scope.year+'/'+$scope.month)
    .success(function(result){return $scope.getSumData=result;})
    .error(function(data,status){console.log(status)});
}
}

}]);