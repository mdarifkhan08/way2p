<h3>Dependency Injection</h3><hr/>
<div class="alert alert-success">Angularjs works on the principle of dependency injection.what is dependency injection lets work on it.</div>

<div class="alert alert-info">
	Dependency Injection:-
	<blockquote>
		Rather than creating an object inside a function, you pass it to the function. by doing so we can make program loosely couple. 
	</blockquote>
</div>

<h3>Example with out dependency injection</h3>
<pre class="prettyprint">
&lt;script type="text/javascript">
var firstname;
var lastname;

var person=function(firstname,lastname){
	this.firstname=firstname;
	this.lastname=lastname;
}

function logPerson(){
	var arif=new person('Arif','Khan');
	console.log(arif);
}

logPerson();
&lt;/script>
</pre>

<h3>Example with  dependency injection</h3>
<pre class="prettyprint">
&lt;script type="text/javascript">
var firstname;
var lastname;

var person=function(firstname,lastname){
	this.firstname=firstname;
	this.lastname=lastname;
}

function logPerson(person){
	
	console.log(person);
}

var arif=new person('Arif','Khan');
logPerson(arif);
&lt;/script>
</pre>
<div style="border-bottom: 5px solid black;"></div>
<br/>
<br/>
<h3>$scope Service of angularjs</h3><br/>
<div class="alert alert-success">
	Angularjs has lots of services in which one is $scope service. this service is glue for your html view and controller.All angularjs service start with $ sign.
</div>
<h3>Example</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>&lt;/title>
&lt;/head>
&lt;body>

&lt;div ng-app="myApp" ng-controller="mainController">
	
&lt;/div>


&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
&lt;script type="text/javascript">
var app=angular.module('myApp',[]);

app.controller('mainController',function($scope){
   console.log($scope);
});
&lt;/script>
&lt;/body>
&lt;/html>	
</pre>

<div class="alert alert-info">
	when you see you developer console your $scope service object is injected by angularjs by using the technique of dependency injection.
</div>

<h3>binding variable to $scope service</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>&lt;/title>
&lt;/head>
&lt;body>

&lt;div ng-app="myApp" ng-controller="mainController">
	
&lt;/div>


&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
&lt;script type="text/javascript">
var app=angular.module('myApp',[]);

app.controller('mainController',function($scope){
	$scope.firstname='Arif';
	$scope.lastname='Khan';
	$scope.doSomething=function(){
       alert('doSomething');
	}
    console.log($scope);
});
&lt;/script>
&lt;/body>
&lt;/html>	
</pre>

<div class="alert alert-info">If you check your developer console and $scope service has lots of dependency inside it and it also have your custom variable and function.</div>


<div style="border-bottom: 5px solid black;"></div>

<h3>Techniques of angularjs developers of getting your function or variable as dependency. Lets understand in native javascript.</h3>
<pre class="prettyprint">
&lt;script type="text/javascript">
 var person=function(firstname,lastname){
   alert(firstname+ ' ' + lastname);
 }

var person_function=person.toString();

console.log(person_function);
&lt;/script>	
</pre>


<div class="alert alert-info">If you will check your developer console at google chrome or whatever browser you have you will find your function is available as a string. the same technique used by angularjs developers to get your function and used to provide their features with that.</div>


<div style="border-bottom: 5px solid black;"></div>
<br/><br/>

<h3>How does angular do dependency injection.</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>&lt;/title>
&lt;/head>
&lt;body>



&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
&lt;script type="text/javascript">
 var person=function($scope,firstname,lastname){
   alert(firstname+ ' ' + lastname);
 }

console.log(angular.injector().annotate(person));

&lt;/script>
&lt;/body>
&lt;/html>	
</pre>
<div class="alert alert-info">
	If you will check your developer console then you will see one array that hold parameters of your function. If you trying to think what is going here yes i am too , i got the point but i am not able to explain, try to recognize whats going here.
</div>



<div style="border-bottom: 5px solid black;"></div>
<br/><br/>


<h3>$log service</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>&lt;/title>
&lt;/head>
&lt;body>

&lt;div ng-app="myApp" ng-controller="mainController">
	
&lt;/div>

&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
&lt;script type="text/javascript">
var app=angular.module('myApp',[]);

app.controller('mainController',function($scope,$log){
   $log.log('log service from angularjs');
   $log.info('info');
   $log.warn('warning message');
   $log.debug('some debug information while writing my code');
   $log.error('error message');

});

&lt;/script>
&lt;/body>
&lt;/html>	
</pre>



<div style="border-bottom: 5px solid black;"></div>
<br/><br/>

<h3>$filter service</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>&lt;/title>
&lt;/head>
&lt;body>

&lt;div ng-app="myApp" ng-controller="mainController">
	&#123;{newInfo1}}-&#123;{newInfo2}}
&lt;/div>

&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
&lt;script type="text/javascript">
var app=angular.module('myApp',[]);

app.controller('mainController',function($scope,$log,$filter){
  $scope.info='Some Information';

  $scope.newInfo1= $filter('lowercase')($scope.info);

  $scope.newInfo2= $filter('uppercase')($scope.info);


});

&lt;/script>
&lt;/body>
&lt;/html>
</pre>

<div class="alert alert-info">
	even though we have written some characters in capital and some in small in info variable but after apply filter we are getting only uppercase and lower case characters inside our view.
</div>

<div style="border-bottom: 5px solid black;"></div>
<br/><br/>


<h3>Module In Angularjs</h3>
<div class="alert alert-success">Angularjs has so many module, in which we have message module that is important while validating your web form another module is http module that is important while getting the data using http service from the database similarly we have so many module.</div>
<div class="alert alert-success">
	How to apply module to your angular app.
	<blockquote>
		<ul>
			<li>1. to apply angularjs service we need to inject that service inside the controller function parameters, similarly to apply angularjs module we need to inject inside the module dependency statement,</li>
			<li>var app=angular.module('myApp',['ngMessages'])</li>
			<li>ngMessage is a module that we injected inside the module define statement.</li>
			<li>so far we are not included the angular angular-messages.min.js file for this we need to go website of angularjs that is <a href="http://angularjs.org" target="_blank">angularjs.org</a> and click at develop->download->use 1.5.3 version of angular that has so many files and get your file angular-message.min.js and included after the angularjs main file.</li>

		</ul>
	</blockquote>
</div>

<h3>work with ngMessage Module(Validation)</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>&lt;/title>
&lt;/head>
&lt;body>

&lt;div ng-app="myApp" ng-controller="mainController">
	<mark>&lt;form name="nameForm">
		&lt;input type="text" ng-model="field" name="firstname" required minlength="6" />
		&lt;div ng-messages="nameForm.firstname.$error">
			&lt;div ng-message="required">You did not enter a field&lt;/div>
			&lt;div ng-message="minlength">The value entered is too short&lt;/div>
		&lt;/div>
		
	&lt;/form></mark>
&lt;/div>

&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
<mark>&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular-messages.min.js">&lt;/script></mark>
&lt;script type="text/javascript">
var app=angular.module('myApp',[<mark>'ngMessages'</mark>]);

app.controller('mainController',function($scope,$log,$filter){

});
&lt;/script>
&lt;/body>
&lt;/html>
</pre>

<div style="border-bottom: 5px solid black;"></div>
<br/><br/>

<h3>$resource service</h3>
<div class="alert alert-success">
A factory which creates a resource object that lets you interact with RESTful server-side data sources.<br/>
The returned resource object has action methods which provide high-level behaviors without the need to interact with the low level $http service.
<br/>
Requires the ngResource module to be installed.<br/>
<a class="btn btn-info"href="https://docs.angularjs.org/api/ngResource/service/$resource" target="_blank" >Know More</a>
</div>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>&lt;/title>
&lt;/head>
&lt;body>

&lt;div ng-app="myApp" ng-controller="mainController">

&lt;/div>

&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular-messages.min.js">&lt;/script>
<mark>&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular-resource.min.js">&lt;/script></mark>
&lt;script type="text/javascript">
var app=angular.module('myApp',['ngMessages',<mark>'ngResource'</mark>]);

app.controller('mainController',function($scope,$log,$filter,<mark>$resource</mark>){
      $log.log($resource);
});
&lt;/script>
&lt;/body>
&lt;/html>
</pre>

<div style="border-bottom: 5px solid black;"></div>
<br/><br/>

<h3>Minification</h3>
<div class="alert alert-success">
Minification:-
<blockquote>
	shrinking the size of file for faster download. we normally add '.min' to the name of the file so filename.js becomes filename.min.js so we can see file as a minification.
</blockquote>
<br/><br/>
<blockquote>
	<ul>
		<li>For minify the javascript file we can use website <a class="btn btn-info"href="http://refresh-sf.com/" target="_blank">http://refresh-sf.com/</a></li>
	</ul>
</blockquote>
</div>
<h3>Script File Without Minification</h3>
<pre class="prettyprint">
var app=angular.module('myApp',['ngMessages','ngResource']);

app.controller('mainController',function($scope,$log,$filter,$resource){
      $log.log($resource);
      $scope.name='Arif Khan';
});
</pre>

<h3>Script File After Minification</h3>
<pre class="prettyprint">
var app=angular.module("myApp",["ngMessages","ngResource"]);app.controller("mainController",function(n,a,e,o){a.log(o),n.name="Arif Khan"});	
</pre>

<div class="alert alert-danger">
	<mark>In angularjs minification can produce wrong result so we should always use all the services inside the square brackets.</mark>
</div>

<h3>How to make angularjs file as a minified file, see below code</h3>
<h3>File Without Minification</h3>
<pre class="prettyprint">
var app=angular.module('myApp',['ngMessages','ngResource']);

app.controller('mainController',['$scope','$log','$filter','$resource',function($scope,$log,$filter,$resource){
      $log.log($resource);
      $scope.name='Arif Khan';
}]);	
</pre>
<h3>File With Minification(Produce Correct Result Or Equivalent to above file)</h3>

<pre class="prettyprint">
var app=angular.module("myApp",["ngMessages","ngResource"]);app.controller("mainController",["$scope","$log","$filter","$resource",function(e,o,r,n){o.log(n),e.name="Arif Khan"}]);	
</pre>

<div class="alert alert-info">
	<mark>under the square bracket $scope,$log,$filter,$resource have order same order should require inside the function, means $scope=e,$log=o,$filter=r and $resource=n, don't forget order if you change order it will cause a error.</mark>
</div>

<div style="border-bottom: 5px solid black;"></div>
<br/><br/>

<h3>First App In Angularjs(Interpolation)</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>&lt;/title>
&lt;/head>
&lt;body>

&lt;div ng-app="myApp" ng-controller="mainController">
First Name : &#123;{firstname}}&lt;br/>
Last Name :&#123;{lastname}}

&lt;/div>

&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular-messages.min.js">&lt;/script>
&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular-resource.min.js">&lt;/script>
&lt;script type="text/javascript">
var app=angular.module('myApp',[]);

app.controller('mainController',['$scope','$timeout',function($scope,$timeout){
     $scope.firstname='Arif';
     $scope.lastname='Khan';
    
    $timeout(function(){
    	$scope.firstname='Yashi';
    	$scope.lastname='Gupta';
    },1000);

    $timeout(function(){
    	$scope.firstname='Sudheer';
    	$scope.lastname='Sharma';
    },2000);

    $timeout(function(){
    	$scope.firstname='Yash';
    	$scope.lastname='Alya';
    },3000);


    $timeout(function(){
    	$scope.firstname='Manohar';
    	$scope.lastname='Sharma';
    },4000);



    for(i=0;i&lt;=4000;i=i+1000){
       $timeout(function(){
    	console.log('Arif');
        },i);
    }
}]);
&lt;/script>


&lt;/body>
&lt;/html>	
</pre>

<div style="border-bottom: 5px solid black;"></div>
<br/><br/>



<h3>Directive and Two way Databinding</h3>
<div class="alert alert-success">
	Directive:-
	<blockquote>
		Directive is an instruction to angularjs to manipulate a piece of DOM.<br/><br/>
		this could be hide a class, add a class, create a class etc.
	</blockquote>

	<ul>
		<li>ng-app is a directive,that bind to DOM/HTML file to angularjs application</li>
		<li>ng-controller is a directive that is useful to bind your html controller to angularjs controller(or you can find correct explanation)</li>
		<li>Now the time to learn new directive that is ng-model</li>
		<li>that bind your view data to controller data.</li>
	</ul>
</div>

<h3>ng-model Directive Example</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>&lt;/title>
&lt;/head>
&lt;body>

&lt;div ng-app="myApp" ng-controller="mainController">
&lt;input type="text" ng-model="firstname"/>
Name of the employee:&#123;&#123;firstname}}

&#123;&#123;thisFunctionCallByViewWhenFirstnameChanged()}}
&lt;/div>

&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
&lt;script type="text/javascript">
var app=angular.module('myApp',[]);

app.controller('mainController',['$scope',function($scope)&#123;
    $scope.firstname='';
    $scope.thisFunctionCallByViewWhenFirstnameChanged=function()&#123;
    	console.log($scope.firstname);
    }
}]);
&lt;/script>

&lt;/body>
&lt;/html>	
</pre>


<h3>ng-model Directive Example</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>&lt;/title>
&lt;/head>
&lt;body>

&lt;div ng-app="myApp" ng-controller="mainController">
&lt;input type="text" ng-model="firstname"/>
Name of the employee:&#123;&#123;thisFunctionCallByViewWhenFirstnameChanged()}}


&lt;/div>

&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
&lt;script type="text/javascript">
var app=angular.module('myApp',[]);

app.controller('mainController',['$scope',function($scope)&#123;
    $scope.firstname='';
    $scope.thisFunctionCallByViewWhenFirstnameChanged=function()&#123;
    	console.log($scope.firstname);
    	return $scope.firstname;
    }
}]);
&lt;/script>


&lt;/body>
&lt;/html>	
</pre>



<h3>ng-model Directive Example</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>&lt;/title>
&lt;/head>
&lt;body>

&lt;div ng-app="myApp" ng-controller="mainController">
&lt;input type="text" ng-model="firstname"/>
Name of the employee:&#123;&#123;changeTextInUpperCase()}}


&lt;/div>

&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
&lt;script type="text/javascript">
var app=angular.module('myApp',[]);

app.controller('mainController',['$scope','$filter',function($scope,$filter)&#123;
    $scope.firstname='';
    $scope.changeTextInUpperCase=function()&#123;
    	return $filter('uppercase')($scope.firstname);
    }
}]);
&lt;/script>


&lt;/body>
&lt;/html>	
</pre>



<h3>ng-model Directive Example</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
   &lt;head>
      &lt;title>&lt;/title>
   &lt;/head>
   &lt;body>
      &lt;div ng-app="myApp" ng-controller="mainController">
         &lt;input type="text" ng-model="firstname"/>
         Name of the employee:&#123;&#123;changeTextInLowerCase()}}
      &lt;/div>
      &lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
      &lt;script type="text/javascript">
         var app=angular.module('myApp',[]);
         
         app.controller('mainController',['$scope','$filter',function($scope,$filter)&#123;
             $scope.firstname='';
             $scope.changeTextInLowerCase=function()&#123;
             	return $filter('lowercase')($scope.firstname);
             }
         }]);
      &lt;/script>
   &lt;/body>
&lt;/html>
</pre>



<h3>ng-if Directive Example</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
   &lt;head>
      &lt;title>&lt;/title>
      &lt;link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   &lt;/head>
   &lt;body>
      &lt;br/>
      &lt;div ng-app="myApp" ng-controller="mainController">
         &lt;div class="container">
            &lt;input type="text" ng-model="firstname"/>&lt;br/>&lt;br/>
            &lt;div class="col-md-6">
               &lt;div ng-if="firstname.length&lt;characters" class="alert alert-danger">firstname can not be less that 5 characters&lt;/div>
               &lt;div ng-if="firstname.length===5" class="alert alert-success">Correct Input&lt;/div>
               &lt;div ng-if="firstname.length>characters" class="alert alert-danger">irstname can not be more that 5 characters&lt;/div>
            &lt;/div>
         &lt;/div>
      &lt;/div>
      &lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
      &lt;script type="text/javascript">
         var app=angular.module('myApp',[]);
         
         app.controller('mainController',['$scope','$filter',function($scope,$filter){
             $scope.firstname='';
             $scope.characters=5;
             
         }]);
      &lt;/script>
   &lt;/body>
&lt;/html>
</pre>

<h3>ng-show Directive Example</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
   &lt;head>
      &lt;title>&lt;/title>
      &lt;link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   &lt;/head>
   &lt;body>
      &lt;br/>
      &lt;div ng-app="myApp" ng-controller="mainController">
         &lt;div class="container">
            &lt;input type="text" ng-model="firstname"/>&lt;br/>&lt;br/>
            &lt;div class="col-md-6">
               &lt;div ng-show="firstname.length&lt;characters" class="alert alert-danger">firstname can not be less that 5 characters&lt;/div>
               &lt;div ng-show="firstname.length===5" class="alert alert-success">Correct Input&lt;/div>
               &lt;div ng-show="firstname.length>characters" class="alert alert-danger">irstname can not be more that 5 characters&lt;/div>
            &lt;/div>
         &lt;/div>
      &lt;/div>
      &lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
      &lt;script type="text/javascript">
         var app=angular.module('myApp',[]);
         
         app.controller('mainController',['$scope','$filter',function($scope,$filter)&#123;
             $scope.firstname='';
             $scope.characters=5;
             
         }]);
      &lt;/script>
   &lt;/body>
&lt;/html>
</pre>

<h3>ng-hide Directive Example</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
   &lt;head>
      &lt;title>&lt;/title>
      &lt;link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   &lt;/head>
   &lt;body>
      &lt;br/>
      &lt;div ng-app="myApp" ng-controller="mainController">
         &lt;div class="container">
            &lt;input type="text" ng-model="firstname"/>&lt;br/>&lt;br/>
            &lt;div class="col-md-6">
               &lt;div ng-hide="firstname.length===5" class="alert alert-danger">must be 5 characters&lt;/div>
            &lt;/div>
         &lt;/div>
      &lt;/div>
      &lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
      &lt;script type="text/javascript">
         var app=angular.module('myApp',[]);
         
         app.controller('mainController',['$scope','$filter',function($scope,$filter)&#123;
             $scope.firstname='';
             $scope.characters=5;
             
         }]);
      &lt;/script>
   &lt;/body>
&lt;/html>	
</pre>


<h3>ng-class Directive Example</h3>
<pre>
&lt;!DOCTYPE html>
&lt;html>
   &lt;head>
      &lt;title>&lt;/title>
      &lt;link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   &lt;/head>
   &lt;body>
      &lt;br/>
      &lt;div ng-app="myApp" ng-controller="mainController">
         &lt;div class="container">
            &lt;input type="text" ng-model="firstname"/>&lt;br/>&lt;br/>
            &lt;div class="col-md-6">
               &lt;div ng-hide="firstname.length===5" ng-class="&#123;'alert-warning':firstname.length&lt;5,'alert-danger':firstname.length>5}" class="alert">must be 5 characters&lt;/div>
            &lt;/div>
         &lt;/div>
      &lt;/div>
      &lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
      &lt;script type="text/javascript">
         var app=angular.module('myApp',[]);
         
         app.controller('mainController',['$scope','$filter',function($scope,$filter)&#123;
             $scope.firstname='';
             $scope.characters=5;
             
         }]);
      &lt;/script>
   &lt;/body>
&lt;/html>	
</pre>

<h3>ng-repeat Directive Example</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
   &lt;head>
      &lt;title>&lt;/title>
      &lt;link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   &lt;/head>
   &lt;body>
      &lt;br/>
      &lt;div ng-app="myApp" ng-controller="mainController">
         &lt;div class="container">
            &lt;input type="text" ng-model="firstname"/>&lt;br/>&lt;br/>
            &lt;div class="col-md-6">
              &lt;ul>
              	&lt;li ng-repeat="name in names">&#123;&#123;name.firstname}} - &#123;&#123;name.lastname}}&lt;/li>
              &lt;/ul>
            &lt;/div>
         &lt;/div>
      &lt;/div>
      &lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
      &lt;script type="text/javascript">
         var app=angular.module('myApp',[]);
         
         app.controller('mainController',['$scope','$filter',function($scope,$filter)&#123;
             $scope.firstname='';
             $scope.characters=5;
             $scope.names=[&#123;firstname:'Arif',lastname:'Khan'},&#123;firstname:'ITM',lastname:'Universe'},&#123;firstname:'Rohit',lastname:'Jain'}];
         }]);
      &lt;/script>
   &lt;/body>
&lt;/html>	
</pre>


<h3>ng-click Directive</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
   &lt;head>
      &lt;title>&lt;/title>
      &lt;link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   &lt;/head>
   &lt;body>
      &lt;br/>
      &lt;div ng-app="myApp" ng-controller="mainController">
         &lt;div class="container">
            &lt;div ng-click="clickOnDiv()" class="btn btn-success">Click Me&lt;/div>
         &lt;/div>
      &lt;/div>
      &lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
      &lt;script type="text/javascript">
         var app=angular.module('myApp',[]);
         
         app.controller('mainController',['$scope','$filter',function($scope,$filter)&#123;
            $scope.clickOnDiv=function()&#123;
            	alert('on Click Div');
            }
         }]);
      &lt;/script>
   &lt;/body>
&lt;/html>
</pre>

<h3>ng-keyup Example</h3>
<pre>
&lt;!DOCTYPE html>
&lt;html>
   &lt;head>
      &lt;title>&lt;/title>
      &lt;link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   &lt;/head>
   &lt;body>
      &lt;br/>
      &lt;div ng-app="myApp" ng-controller="mainController">
         &lt;div class="container">
            &lt;input ng-keyup="onKeyUp()" />
         &lt;/div>
      &lt;/div>
      &lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
      &lt;script type="text/javascript">
         var app=angular.module('myApp',[]);
         
         app.controller('mainController',['$scope','$filter',function($scope,$filter){
            $scope.onKeyUp=function(){
            	console.log('on keyup ');
            }
         }]);
      &lt;/script>
   &lt;/body>
&lt;/html>	
</pre>

<h3>ng-cloak</h3>
<div class="alert alert-success">ng-cloak hide your interpolation codemuntil your angularjs not worked. so that user won't see unnecessary code of angularjs</div>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
   &lt;head>
      &lt;title>&lt;/title>
      &lt;link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 &lt;style type="text/css">
[ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak &#123;
  display: none !important;
}
	&lt;/style>
   &lt;/head>
   &lt;body>
      &lt;br/>
      &lt;div ng-app="myApp" ng-controller="mainController">
         &lt;div class="container">
         &lt;div ng-cloak>&#123;&#123;firstname}}&lt;/div>
         &lt;/div>
      &lt;/div>
      &lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
      &lt;script type="text/javascript">
         var app=angular.module('myApp',[]);
         
         app.controller('mainController',['$scope','$filter',function($scope,$filter)&#123;
            $scope.firstname='Arif';
         }]);
      &lt;/script>
   &lt;/body>
&lt;/html>	
</pre>
<div class="alert alert-danger">Don't Forget to put style for ng-cloak otherwise it won't work.</div>