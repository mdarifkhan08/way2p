var module1=angular.module('module1',[]);


module1.directive('mydirective1',function(){
	return{
		restrict:'E',
		link:function(){
			alert('mydirective1 is working as per expectation');
		},
		template:'
Message from the mydirective1 and we need to use this directive as a element!',
	}
});


module1.directive('mydirective2',function(){
	return{
		restrict:'A',
		link:function(){
			alert('mydirective2 is working as per expectation');
		},
		template:'
Message from the mydirective2 and we need to use this directive as a Attribute!',
	}
});



module1.directive('mydirective3',function(){
	return{
		restrict:'C',
		link:function(){
			alert('mydirective3 is working as per expectation');
		},
		template:'
Message from the mydirective3 and we need to use this directive as a Class!',
	}
});

module1.controller('mycont',['$scope', function($scope) {
}]);
