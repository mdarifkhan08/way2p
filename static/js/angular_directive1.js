var module1=angular.module('module1',[]);



module1.directive('mydirective1',function(){
	return{
		restrict:'A',
		link:function(){
			alert('mydirective1 is working');
		},
		template:'Message from the directive:mydirective1',
	}
});


module1.directive('mydirective2',function(){
	return{
		restrict:'A',
		link:function(){
			alert('mydirective2 is working');
		},
		template:'Message from the directive:mydirective2',
	}
});


module1.directive('mydirective3',function(){
	return{
		restrict:'A',
		link:function(){
			alert('mydirective3 is working');
		},
		template:'Message from the directive:mydirective3',
	}
});



module1.controller('mycont',['$scope', function($scope) {
}]);
