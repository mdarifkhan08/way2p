<br/><br/>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
	<h3>Interpolation</h3><hr/>
    <pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>&lt;/title>
&lt;/head>
&lt;body>

&lt;div ng-app="myApp" ng-controller="mainController">
First Name : &#123;&#123;firstname}}&lt;br/>
Last Name :&#123;&#123;lastname}}

&lt;/div>

&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular-messages.min.js">&lt;/script>
&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular-resource.min.js">&lt;/script>
&lt;script type="text/javascript">
var app=angular.module('myApp',[]);
app.controller('mainController',['&dollar;scope','&dollar;timeout',function(&dollar;scope,&dollar;timeout)&#123;
     &dollar;scope.firstname='Arif';
     &dollar;scope.lastname='Khan';
    
    &dollar;timeout(function()&#123;
    	&dollar;scope.firstname='Yashi';
    	&dollar;scope.lastname='Gupta';
    },1000);
    &dollar;timeout(function()&#123;
    	&dollar;scope.firstname='Sudheer';
    	&dollar;scope.lastname='Sharma';
    },2000);
    &dollar;timeout(function()&#123;
    	&dollar;scope.firstname='Yash';
    	&dollar;scope.lastname='Alya';
    },3000);
    &dollar;timeout(function()&#123;
    	&dollar;scope.firstname='Manohar';
    	&dollar;scope.lastname='Sharma';
    },4000);
    for(i=0;i&lt;=4000;i=i+1000)&#123;
       &dollar;timeout(function()&#123;
    	console.log('Arif');
        },i);
    }
}]);
&lt;/script>
&lt;/body>
&lt;/html>	
    </pre>
</div>
</div>

<script src="js/run_prettify.js" type="text/javascript"></script>



