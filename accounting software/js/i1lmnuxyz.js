var app=angular.module('myApp',[]);

app.controller('mainController',['$scope','$http','$location',function($scope,$http,'$location'){
        
       $scope.pid='';
      
       $scope.pq='';
       $scope.quantityInfo='';
       $scope.particulars='';

       $scope.quan='';
       $scope.onType='';
       $scope.remainQuantity='';

	   $scope.productname='';

       $scope.errInNotSelectParticulars='';


       if($location.host()=='localhost'){
   var arraydata=window.location.pathname.split('/');
   var mypath='/'+arraydata[1];
}
else{
var mypath='';
}


       $scope.onChangeProductId=function(){
        	$scope.productId=$scope.pid;
        	if($scope.productId==''){
               $scope.errorProductId='please select product id first';
        	}
        	else{
        		$scope.errorProductId='';
        	}
        }
       $scope.onKeyUpQuantityCheckParticulars=function(){
        	$scope.particularsInfo=$scope.particulars;
        	if($scope.particularsInfo==''){
               $scope.errorparticularsInfo='please select particular section first';
        	}
        	else{
        		$scope.errorparticularsInfo='';
        	}
        }
       $scope.onFocusQuantity=function(){
        	$scope.onChangeProductId();
        	$scope.onKeyUpQuantityCheckParticulars();
        }
       $scope.keyUpOnQuantity=function(){

        	if($scope.particulars=='Sale To'){
                $http.get(mypath+'/angularjs/interface/get/quantity/'+$scope.pid)
                .success(function(result){
          	     $scope.quan=result;
                })
                .error(function(data,status){console.log(status)});
        	}
        $scope.remainQuantity=$scope.quan.p_quantity-$scope.pq;
        }




		$scope.onSelectProductId=function(){
		 $http.get(mypath+'/angularjs/interface/get/productname/'+$scope.pid).success(function(result){$scope.productname=result;}).error(function(data,status){console.log(status)});
        console.log($scope.productname);console.log($scope.pid);
		}


       $scope.productCost='';

       $scope.onkeyUpQuantityAndCost=function(){
		   console.log('sd');
            
			if($scope.particulars=='Sale To'){
               $scope.mul1= $scope.productCost*$scope.pq;
				$scope.mul2='';

			}else if($scope.particulars=='Purchase From'){
$scope.mul2= $scope.productCost* $scope.pq;
$scope.mul1='';



			}else if($scope.particulars=='Payment'){
$scope.mul1= $scope.productCost* $scope.pq;
$scope.mul2='';

			}
			else if($scope.particulars=='Receipt'){
$scope.mul2= $scope.productCost* $scope.pq;
$scope.mul1='';

			}
	   }

}]);