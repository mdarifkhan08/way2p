<h2>App-1:Expression in Angularjs</h2>
<pre class="prettyprint">
	<strong>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;/head>
&lt;body>

&lt;h1>Simple expression in Angular js&lt;/h1>
&lt;div ng-app="">
&#123;&#123;2*2}}&lt;br/>

&#123;&#123;2*3-45}}&lt;br/>

&#123;&#123;100/10}}&lt;br/>


&#123;&#123;10010/100}}&lt;br/>

&lt;/div>

&lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>
&lt;/body>
&lt;/html>
	</strong>
</pre>


	<h2>App-2:Two way binding</h2>
	<pre class="prettyprint">
	<strong>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;/head>
&lt;body>

&lt;h1>Two way Binding&lt;/h1>
&lt;div ng-app="">
&lt;input type="text" ng-model="user.message"/>
&lt;br/>
&#123;&#123;user.message}}&lt;br/>&lt;br/>



&lt;input type="text" ng-model="user.message2"/>

&lt;br/>&lt;br/>
&#123;&#123;user.message2 + "World"}}

&lt;/div>

&lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>
&lt;/body>
&lt;/html>

	</strong>
</pre>






<h2>App-3:Binding model from controller to view</h2>
	<pre class="prettyprint">
	<strong>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;/head>
&lt;body>

&lt;h1>Use controller to bind message&lt;/h1>
&lt;div ng-app="app">

  &lt;div ng-controller="cont">
  &#123;&#123;data.message}}&lt;br/>&lt;br/>


  &#123;&#123;nextMessage.newMessage  + "XYZ"}}
  &lt;/div>

&lt;/div>

&lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>
&lt;script type="text/javascript">
var app=angular.module('app',[]);

app.controller('cont',['$scope',function($scope)&#123;
$scope.data=&#123;message:'This message will go from controller to view by using expression'}




$scope.nextMessage=&#123;newMessage:'This is just for practice purpose'}
}]);
&lt;/script>
&lt;/body>
&lt;/html>
	</strong>
</pre>







<h2>App-4:Different scopes of controller</h2>
	<pre class="prettyprint">
	<strong>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;/head>
&lt;body>

&lt;h1>Different scopes of controller/h1>
&lt;div ng-app="app">


&lt;input type="text" ng-model="data.message"/>&lt;br/>
 &#123;&#123;data.message}}


&lt;div ng-controller="cont1">
 &lt;input type="text" ng-model="data.message"/>&lt;br/>
              &#123;&#123;data.message}}
&lt;/div>


&lt;div ng-controller="cont2">
&lt;input type="text" ng-model="data.message"/>&lt;br/>
&#123;&#123;data.message}}
&lt;/div>

&lt;/div>

&lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>

&lt;script type="text/javascript">
var app=angular.module('app',[]);

app.controller('cont1',['$scope',function($scope)&#123;

$scope.data=&#123;message:'Hello'}
}]);



app.controller('cont2',['$scope',function($scope)&#123;

$scope.data=&#123;message:'Hi'}
}]);

&lt;/script>
&lt;/body>
&lt;/html>
	</strong>
</pre>







<h2>App-5:Data from service</h2>
	<pre class="prettyprint">
	<strong>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;/head>
&lt;body>

&lt;h1>Data from service&lt;/h1>
&lt;div ng-app="app">


&lt;input type="text" ng-model="data.message"/>&lt;br/>
 &#123;&#123;data.message}}


&lt;div ng-controller="cont1">
 &lt;input type="text" ng-model="data.message"/>&lt;br/>
              &#123;&#123;data.message}}
&lt;/div>


&lt;div ng-controller="cont2">
&lt;input type="text" ng-model="data.message"/>&lt;br/>
&#123;&#123;data.message}}
&lt;/div>

&lt;/div>

&lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>

&lt;script type="text/javascript">
var app=angular.module('app',[]);


app.factory('Data',function()&#123;
	return &#123;message:'This is a data from service'};
})

app.controller('cont1',['$scope','Data',function($scope,Data)&#123;

$scope.data=Data;
}]);



app.controller('cont2',['$scope','Data',function($scope,Data)&#123;

$scope.data=Data;
}]);

&lt;/script>
&lt;/body>
&lt;/html>
	</strong>
</pre>








<h2>App-6: Basic Example with ng-init</h2>
	<pre class="prettyprint">
	<strong>
&lt;html ng-app>
&lt;head>
	&lt;title>&lt;/title>
	&lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>
&lt;/head>
&lt;body>
	&lt;div ng-init="names=['Rohit','Neeraj','Pavan']">
		&#123;&#123;names}}
	&lt;/div>
&lt;/body>
&lt;/html>
	</strong>
</pre>







<h2>App-7: Basic ng-init with ng-repeat</h2>
	<pre class="prettyprint">
	<strong>
&lt;html ng-app>
&lt;head>
	&lt;title>&lt;/title>
	&lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>
&lt;/head>
&lt;body>
&lt;div ng-init="names=['XYZ1','XYZ2','XYZ3']">
		&lt;ul>
             &lt;li ng-repeat="name in names">&#123;&#123;name}}&lt;/li>
		&lt;/ul>
&lt;/div>
&lt;/body>
&lt;/html>
	
	</strong>
</pre>








<h2>App-8: Basic ng-init with ng-repeat and pipe(|)</h2>
	<pre class="prettyprint">
	<strong>
&lt;html ng-app>
&lt;head>
	&lt;title>&lt;/title>
	&lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>
&lt;/head>
&lt;body>
&lt;div ng-init="names=['xyz1','xyz2','xyz3']">
		&lt;ul>
             &lt;li ng-repeat="name in names">&#123;&#123;name | uppercase}}&lt;/li>
		&lt;/ul>
&lt;/div>
&lt;/body>
&lt;/html>
	</strong>
</pre>








<h2>App-9: uses of ng-init,ng-repeat,orderBy,uppercase</h2>
	<pre class="prettyprint">
	<strong>
&lt;html ng-app>
&lt;head>
	&lt;title>&lt;/title>
	&lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>
&lt;/head>
&lt;body>
&lt;div ng-init="names=[&#123;name:'Arif',address:'Gwalior'},&#123;name:'Yashi',address:'Indore'},&#123;name:'Aditya',address:'Gwalior'}]">
		&lt;ul>
             &lt;li ng-repeat="name in names | orderBy:'name'">&#123;&#123;name.name | uppercase}}&lt;/li>
		&lt;/ul>

		&lt;ul>
             &lt;li ng-repeat="name in names | orderBy:'name'">&#123;&#123;name.address | uppercase}}&lt;/li>
		&lt;/ul>
&lt;/div>
&lt;/body>
&lt;/html>
	</strong>
</pre>






<h2>App-10:</h2>
	<pre class="prettyprint">
	<strong>
&lt;html ng-app>
&lt;head>
	&lt;title>&lt;/title>
	&lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>
&lt;/head>
&lt;body>

&lt;input type="text" ng-model="nameAddress">

&lt;div ng-init="names=[&#123;name:'Arif',address:'Gwalior'},&#123;name:'Yashi',address:'Indore'},&#123;name:'Aditya',address:'Gwalior'}]">
		&lt;ul>
             &lt;li ng-repeat="name in names | filter:nameAddress ">&#123;&#123;name.name | uppercase}}&lt;/li>
		&lt;/ul>


		&lt;ul>
             &lt;li ng-repeat="name in names | filter:nameAddress ">&#123;&#123;name.address | uppercase}}&lt;/li>
		&lt;/ul>

		
&lt;/div>
&lt;/body>
&lt;/html>
	</strong>
</pre>







<h2>App-11:</h2>
	<pre class="prettyprint">
	<strong>
&lt;html ng-app>
&lt;head>
	&lt;title>&lt;/title>
	&lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>
&lt;/head>
&lt;body>
&lt;LABEL>Filter For Name&lt;/LABEL>
&lt;input type="text" ng-model="name" placeholder="Enter Name">

&lt;LABEL>Filter For Address&lt;/LABEL>
&lt;input type="text" ng-model="address" placeholder="Enter Address">

&lt;div ng-init="names=[&#123;name:'Arif',address:'Gwalior'},&#123;name:'Yashi',address:'Indore'},&#123;name:'Aditya',address:'Gwalior'}]">
		&lt;ul>
             &lt;li ng-repeat="name in names | filter:name ">&#123;&#123;name.name | uppercase}}&lt;/li>
		&lt;/ul>


		&lt;ul>
             &lt;li ng-repeat="name in names | filter:address ">&#123;&#123;name.address | uppercase}}&lt;/li>
		&lt;/ul>

		
&lt;/div>
&lt;/body>
&lt;/html>
	</strong>
</pre>







<h2>App-12:</h2>
	<pre class="prettyprint">
	<strong>
&lt;html ng-app>
&lt;head>
	&lt;title>&lt;/title>
	&lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>
&lt;/head>
&lt;body>


&lt;div ng-init="names=[&#123;name:'Arif',address:'Gwalior'},&#123;name:'Yashi',address:'Indore'},&#123;name:'Aditya',address:'Gwalior'}]">
		&lt;ul>
             &lt;li ng-repeat="name in names">&#123;&#123;name.name}} - &#123;&#123;name.address}}&lt;/li>
		&lt;/ul>

&lt;/div>
&lt;/body>
&lt;/html>
	</strong>
</pre>







<h2>App-13:</h2>
	<pre class="prettyprint">
	<strong>
&lt;html ng-app="demoApp">
&lt;head>
	&lt;title>&lt;/title>
	&lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>
	&lt;script type="text/javascript">
     var demoApp=angular.module('demoApp',[]);

     demoApp.controller('SimpleController',function($scope)&#123;
$scope.members=[
      &#123;name:'Arif Khan',address:'Gwalior',occupation:'Web App Developer'},
      &#123;name:'Kirti Parmar',address:'Agra',occupation:'Govt Employee'},
      &#123;name:'Aditya Raj',address:'Gwalior',occupation:'L3 Desktop'}
      ];
     });
	&lt;/script>
&lt;/head>
&lt;body>


&lt;div ng-controller="SimpleController">
		&lt;ul>
             &lt;li ng-repeat="member in members">&#123;&#123;member.name}} - &#123;&#123;member.address}} - &#123;&#123;member.occupation}}&lt;/li>
		&lt;/ul>

&lt;/div>
&lt;/body>
&lt;/html>a
	</strong>
</pre>







<h2>App-14:</h2>
	<pre class="prettyprint">
	<strong>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;/head>
&lt;body>

&lt;!-- Each and every Module and Controller has its scope -->

&lt;!-- In this example we have two controller in one module so each and every controller will have different scope to each other
 -->
  
  
  &lt;div ng-app="module1">
    &lt;div ng-controller="cont1">&#123;&#123;data.message}} | &#123;&#123;data.extra_info}}&lt;/div>

    &lt;div ng-controller="cont2">&#123;&#123;data.message}} | &#123;&#123;data.extra_info}}&lt;/div>
  &lt;/div>




  &lt;script type="text/javascript" src="angular.min.js">&lt;/script>
  &lt;script type="text/javascript">

var module1=angular.module('module1',[]);

module1.controller('cont1',function($scope)&#123;
  $scope.data=&#123;message:'This is a sample message from the controller',extra_info:'You can pass more info here'}
});


module1.controller('cont2',function($scope)&#123;
  $scope.data=&#123;message:'This is a sample message from the second controller',extra_info:'You can pass more info from the second controller'}
});


  &lt;/script>
&lt;/body>
&lt;/html>
	</strong>
</pre>








<h2>App-15:</h2>
	<pre class="prettyprint">
	<strong>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;/head>
&lt;body>

&lt;!-- To add multiple module in one html we need use bootstrap method to bootstrap the second app -->
  
  
  &lt;div ng-app="module1">
    &lt;div ng-controller="cont1">&#123;&#123;data.message}} | &#123;&#123;data.extra_info}}&lt;/div>

    &lt;div ng-controller="cont2">&#123;&#123;data.message}} | &#123;&#123;data.extra_info}}&lt;/div>
  &lt;/div>
  
  
  
  &lt;div ng-app="module2" id="module2">
    &lt;div ng-controller="cont1">&#123;&#123;data.message}}&lt;/div>
  &lt;/div>




  &lt;script type="text/javascript" src="angular.min.js">&lt;/script>
  &lt;script type="text/javascript">
var module1=angular.module('module1',[]);

module1.controller('cont1',function($scope)&#123;
  $scope.data=&#123;message:'This is a sample message from the controller',extra_info:'You can pass more info here'}
});


module1.controller('cont2',function($scope)&#123;
  $scope.data=&#123;message:'This is a sample message from the second controller',extra_info:'You can pass more info from the second controller'}
});



var module2=angular.module('module2',[]);

module2.controller('cont1',function($scope)&#123;
  $scope.data=&#123;message:'first controller inside the second module'};
});


/*To add multiple module in one html we need use bootstrap method to bootstrap the second app*/

angular.bootstrap(document.getElementById("module2"),['module2']);
  &lt;/script>
&lt;/body>
&lt;/html>
	</strong>
</pre>







<h2>App-16:</h2>
	<pre class="prettyprint">
	<strong>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;/head>
&lt;body>
&lt;div ng-app="module1">
&lt;div ng-controller="cont1">
&lt;div ng-repeat="data in data1">
                  &#123;&#123;data.name}} - &#123;&#123;data.message}}
&lt;/div>
&lt;/div>
&lt;/div>
  &lt;script type="text/javascript" src="angular.min.js">&lt;/script>
  &lt;script type="text/javascript">

var module1=angular.module('module1',[]);


module1.controller('cont1',function($scope)&#123;
  $scope.data1=[&#123;message:'Sample Message from cont1',name:'Arif Khan'},
               &#123;message:'second message from cont1',name:'Yashi Gupta'}
               ];
});

  &lt;/script>
&lt;/body>
&lt;/html>

	</strong>
</pre>








<h2>App-17:</h2>
	<pre class="prettyprint">
	<strong>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;/head>
&lt;body>
&lt;div ng-app="module1">
&lt;div ng-controller="mycont">
&lt;div mydirective1>&lt;/div>
&lt;div mydirective2>&lt;/div>
&lt;div mydirective3>&lt;/div>
&lt;/div>
&lt;/div>
  &lt;script type="text/javascript" src="angular.min.js">&lt;/script>
  &lt;script type="text/javascript">
var module1=angular.module('module1',[]);



module1.directive('mydirective1',function()&#123;
  return&#123;
    restrict:'A',
    link:function()&#123;
      alert('mydirective1 is working');
    },
    template:'
Message from the directive:mydirective1',
  }
});


module1.directive('mydirective2',function()&#123;
  return&#123;
    restrict:'A',
    link:function()&#123;
      alert('mydirective2 is working');
    },
    template:'
Message from the directive:mydirective2',
  }
});


module1.directive('mydirective3',function()&#123;
  return&#123;
    restrict:'A',
    link:function()&#123;
      alert('mydirective3 is working');
    },
    template:'
Message from the directive:mydirective3',
  }
});



module1.controller('mycont',['$scope', function($scope) &#123;
}]);
  &lt;/script>
&lt;/body>
&lt;/html>
	</strong>
</pre>









<h2>App-18:</h2>
	<pre class="prettyprint">
	<strong>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;/head>
&lt;body>
&lt;div ng-app="module1">
&lt;div ng-controller="mycont">
&lt;mydirective1>&lt;/mydirective1>
&lt;div mydirective2>&lt;/div>
&lt;div class="mydirective3">&lt;/div>
&lt;/div>
&lt;/div>
  &lt;script type="text/javascript" src="angular.min.js">&lt;/script>
  &lt;script type="text/javascript" >

var module1=angular.module('module1',[]);


module1.directive('mydirective1',function()&#123;
  return&#123;
    restrict:'E',
    link:function()&#123;
      alert('mydirective1 is working as per expectation');
    },
    template:'
Message from the mydirective1 and we need to use this directive as a element!',
  }
});


module1.directive('mydirective2',function()&#123;
  return&#123;
    restrict:'A',
    link:function()&#123;
      alert('mydirective2 is working as per expectation');
    },
    template:'
Message from the mydirective2 and we need to use this directive as a Attribute!',
  }
});



module1.directive('mydirective3',function()&#123;
  return&#123;
    restrict:'C',
    link:function()&#123;
      alert('mydirective3 is working as per expectation');
    },
    template:'
Message from the mydirective3 and we need to use this directive as a Class!',
  }
});

module1.controller('mycont',['$scope', function($scope) &#123;
}]);

  &lt;/script>
&lt;/body>
&lt;/html>
	</strong>
</pre>









<h2>App-19:Services in Angularjs</h2>
	<pre class="prettyprint">
	<strong>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;/head>
&lt;body>

&lt;h1>Service in Angularjs&lt;/h1>
&lt;div ng-app="myModule">
&lt;div ng-controller="CalculatorController">
&lt;input type="number" ng-model="number"/>
&lt;button ng-click="doSquare()">X&lt;sup>2&lt;/sup>&lt;/button>
&lt;button ng-click="doCube()">X&lt;sup>3&lt;/sup>&lt;/button>
Answer:&#123;&#123;answer}}
&lt;/div>
&lt;/div>

&lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>

&lt;script type="text/javascript">
	
var myModule=angular.module('myModule',[]);

myModule.service('MathService',function()&#123;

	this.add=function(a,b)&#123;return a+b};

	this.subtract=function(a,b)&#123;return a-b};

	this.multiply=function(a,b)&#123;return a*b};

	this.divide=function(a,b)&#123;return a/b};

});

myModule.service('calculateService',function(MathService)&#123;
	this.square=function(a)&#123;return MathService.multiply(a,a)};

	this.cube=function(a)&#123;return a*MathService.multiply(a,a)};
});

myModule.controller('CalculatorController',['$scope','calculateService',function($scope,calculateService)&#123;
	$scope.doSquare=function()&#123;
		$scope.answer=calculateService.square($scope.number);
	}

	$scope.doCube=function()&#123;
		$scope.answer=calculateService.cube($scope.number);
	}
}]);
&lt;/script>
&lt;/body>
&lt;/html>
	</strong>
</pre>










<h2>App-20: Add Service</h2>
	<pre class="prettyprint">
	<strong>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;/head>
&lt;body>

&lt;div ng-app="myModule">
	
&lt;div ng-controller="AddController">
	
	&lt;input type="number" ng-model="number1"/>

	&lt;input type="number" ng-model="number2"/>

	&lt;button ng-click="doAdd()">Add&lt;/button>
 &#123;&#123;answer}}
&lt;/div>

&lt;/div>

&lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>

&lt;script type="text/javascript">
	
var myModule=angular.module('myModule',[]);

myModule.service('AddService',function()&#123;
	this.add=function(a,b)&#123;return a+b};
});


myModule.service('ProvideService',function(AddService)&#123;
	this.provide=function(a,b)&#123;return AddService.add(a,b)};
});

myModule.controller('AddController',['$scope','ProvideService',function($scope,ProvideService)&#123;
  $scope.doAdd=function()&#123;
  	return $scope.answer=ProvideService.provide($scope.number1,$scope.number2);
  }
  }]);
&lt;/script>
&lt;/body>
&lt;/html>
	</strong>
</pre>














<h2>App-21:Subtract Service</h2>
	<pre class="prettyprint">
	<strong>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;/head>
&lt;body>
&lt;div ng-app="myModule">&lt;div ng-controller="myController">
	
	&lt;input type="number" ng-model="number1"/>

	&lt;input type="number" ng-model="number2"/>

	&lt;button ng-click="doSubtract()">Subtract&lt;/button>

	Answer:&#123;&#123;answer}}
&lt;/div>&lt;/div>


&lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>

&lt;script type="text/javascript">
	 var myModule=angular.module('myModule',[]);

	 myModule.service('subtractService',function()&#123;
	 	this.subtract=function(a,b)&#123; return a-b};
	 });


	 myModule.service('serviceProvider',function(subtractService)&#123;
	 	this.provideService=function(a,b)&#123;return subtractService.subtract(a,b)}
	 });


	 myModule.controller('myController',['$scope','serviceProvider',function($scope,serviceProvider)&#123;
	 	$scope.doSubtract=function()&#123;
	 		$scope.answer=serviceProvider.provideService($scope.number1,$scope.number2);
	 	}
	 	
	 }]);

&lt;/script>
&lt;/body>
&lt;/html>
	</strong>
</pre>











<h2>App-22 : Multiply Service</h2>
	<pre class="prettyprint">
	<strong>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;/head>
&lt;body>
&lt;div ng-app="myModule">&lt;div ng-controller="myController">
	&lt;input type="number" ng-model="number1"/>
	&lt;input type="number" ng-model="number2"/>
	&lt;button ng-click="doMultiply()">Multiply&lt;/button>
	Answer:&#123;&#123;answer}}
&lt;/div>&lt;/div>

&lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>

&lt;script type="text/javascript">
var myModule=angular.module('myModule',[]);

myModule.service('mutiplyService',function()&#123;
	this.multiply=function(a,b)&#123;return a*b};
});

myModule.service('provideService',function(mutiplyService)&#123;
	this.provideService=function(a,b)&#123;return mutiplyService.multiply(a,b)}
});

myModule.controller('myController',['$scope','provideService',function($scope,provideService)&#123;
$scope.doMultiply=function()&#123;
	$scope.answer=provideService.provideService($scope.number1,$scope.number2);
}
}]);



&lt;/script>
&lt;/body>
&lt;/html>
	</strong>
</pre>














<h2>App-23:Devide Service</h2>
	<pre class="prettyprint">
	<strong>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;/head>
&lt;body>
&lt;div ng-app="myModule">&lt;div ng-controller="myController">
	
	&lt;input type="number" ng-model="number1"/>

	&lt;input type="number" ng-model="number2"/>

	&lt;button ng-click="doDevide()">Devide Operation&lt;/button>


	Answer:&#123;&#123;answer}}
&lt;/div>&lt;/div>


&lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>

&lt;script type="text/javascript">
var myModule=angular.module('myModule',[]);

myModule.service('devideService',function()&#123;
	this.devide=function(a,b)&#123;return a/b};
});


myModule.service('provideService',function(devideService)&#123;
	this.provide=function(a,b)&#123;return devideService.devide(a,b)}
})

myModule.controller('myController',['$scope','provideService',function($scope,provideService)&#123;
	$scope.doDevide=function()&#123;
		$scope.answer=provideService.provide($scope.number1,$scope.number2);
		console.log('ok');
	}
}]);
&lt;/script>
&lt;/body>
&lt;/html>
	</strong>
</pre>













<h2>App-24:Simple Service</h2>
	<pre class="prettyprint">
	<strong>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;/head>
&lt;body>
&lt;div ng-app="myModule">&lt;div ng-controller="myController">

&lt;button ng-click="do()">sdd&lt;/button>
&#123;&#123;xyz}}
&lt;/div>&lt;/div>

&lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>

&lt;script type="text/javascript">
var myModule=angular.module('myModule',[]);

myModule.service('Message',function()&#123;
	this.xyzs=function()&#123;return "This is a message from service"};
});

myModule.service('Message2',function(Message)&#123;
	this.s=function()&#123;return Message.xyzs()};
});

myModule.controller('myController',['$scope','Message2',function($scope,Message2)&#123;

$scope.do=function()&#123;
	$scope.xyz=Message2.s();
	
}
}]);
&lt;/script>
&lt;/body>
&lt;/html>
	</strong>
</pre>
