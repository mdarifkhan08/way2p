<h3>index.php</h3><hr/>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html ng-app="myApp">
&lt;head>
	&lt;title>&lt;/title>
	&lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
&lt;/head>
&lt;body>
&lt;nav class="navbar navbar-default">
  &lt;div class="container-fluid">
    &lt;!-- Brand and toggle get grouped for better mobile display -->
    &lt;div class="navbar-header">
      &lt;button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        &lt;span class="sr-only">Toggle navigation&lt;/span>
        &lt;span class="icon-bar">&lt;/span>
        &lt;span class="icon-bar">&lt;/span>
        &lt;span class="icon-bar">&lt;/span>
      &lt;/button>
      &lt;a class="navbar-brand" href="#">Brand&lt;/a>
    &lt;/div>

    &lt;!-- Collect the nav links, forms, and other content for toggling -->
    &lt;div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      &lt;ul class="nav navbar-nav">
       
        &lt;li>&lt;a href="#/">Home&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#/about">About Us&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#/services">Services&lt;/a>&lt;/li>
        &lt;li>&lt;a href="#/contact-us">Contact Us&lt;/a>&lt;/li>
      &lt;/ul>
      
    &lt;/div>&lt;!-- /.navbar-collapse -->
  &lt;/div>&lt;!-- /.container-fluid -->
&lt;/nav>

&lt;div ng-view>&lt;/div>

&lt;script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js">&lt;/script>
&lt;script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">&lt;/script>
&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.4/angular.min.js">&lt;/script>
&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.4/angular-route.min.js">&lt;/script>
&lt;script type="text/javascript" src="js/app.js">&lt;/script>
&lt;/body>
&lt;/html>	
</pre>


<h3>app.js</h3>
<pre class="prettyprint">
var app=angular.module('myApp',['ngRoute']);

app.config(function($routeProvider){
   $routeProvider
   .when('/',{
   	templateUrl:'templates/home.php',
   	controller:'homeController'
   })
   .when('/about',{
   	templateUrl:'templates/about.php',
   	controller:'aboutController'
   })
   .when('/services',{
   	templateUrl:'templates/services.php',
   	controller:'servicesController'
   })
   .when('/contact-us',{
   	templateUrl:'templates/contact.php',
   	controller:'contactUsController'
   })
});

app.controller('homeController',['$scope','$log',function($scope,$log){

}]);

app.controller('aboutController',['$scope','$log',function($scope,$log){

}]);

app.controller('servicesController',['$scope','$log',function($scope,$log){

}]);


app.controller('contactUsController',['$scope','$log',function($scope,$log){

}]);

	
</pre>


<div class="alert alert-info">
	create directory templates and inside the directoy we need to create the 
	about.php,services.php,home.php and services.php file so that we can work with route config system of angularjs.
</div>
