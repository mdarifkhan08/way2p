<!-- <a href="run-app-weather-forecast-angularjs" class="btn btn-success" target="_blank">Click Here To See Demo</a> -->

<h3>app.js</h3><hr/>
<pre class="prettyprint">
//Module
var weatherApp=angular.module('weatherApp',['ngRoute','ngResource']);

//route config
weatherApp.config(function($routeProvider){
	$routeProvider
	.when('/',{
           templateUrl:'pages/home.html',
           controller:'homeController'
	})
	.when('/forecast',{
		templateUrl:'pages/forecast.html',
		controller:'forecastController'
	})
	.when('/forecast/:days',{
		templateUrl:'pages/forecast.html',
		controller:'forecastController'
	})
});

//services

weatherApp.service('cityService',function(){
	this.city='Delhi';
});


weatherApp.controller('homeController',['$scope','cityService',function($scope,cityService){
    $scope.city=cityService.city;

    $scope.$watch('city',function(){
    	cityService.city=$scope.city;
    });
}]);

weatherApp.controller('forecastController',['$scope','$resource','cityService','$routeParams',function($scope,$resource,cityService,$routeParams){
    $scope.city=cityService.city;
    $scope.days=$routeParams.days ||2;
    $scope.weatherAPI=$resource("http://api.openweathermap.org/data/2.5/forecast/daily",{callback:"JSON_CALLBACK"},{get:{method:"JSONP"}})
    $scope.weatherResult=$scope.weatherAPI.get({appId: 'a10aa9ecc80e8fa08573508b231c613f',q: $scope.city,cnt: $scope.days});

    $scope.convertToDate=function(date){
       return new Date(date);
    }

}]);	
</pre>

<h3>index.html</h3><hr/>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html ng-app="weatherApp">
&lt;head>
	&lt;title>&lt;/title>
	&lt;link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
      &lt;a class="navbar-brand" href="#">Angularjs Weather Forecast App&lt;/a>
    &lt;/div>

    &lt;!-- Collect the nav links, forms, and other content for toggling -->
    &lt;div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      &lt;ul class="nav navbar-nav">
        &lt;li>&lt;a href="#/">Home &lt;span class="sr-only">(current)&lt;/span>&lt;/a>&lt;/li>
      &lt;/ul>
    &lt;/div>&lt;!-- /.navbar-collapse -->
  &lt;/div>&lt;!-- /.container-fluid -->
&lt;/nav>



&lt;div class="container">
	&lt;div ng-view>&lt;/div>
&lt;/div>


&lt;!-- load angularjs -->
&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.5/angular.min.js">&lt;/script>
&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.5/angular-route.min.js">&lt;/script>
&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.5/angular-resource.min.js">&lt;/script>
&lt;script type="text/javascript" src="app.js">&lt;/script>
&lt;/body>
&lt;/html>	
</pre>

<h3>pages/home.html</h3><hr/>
<pre class="prettyprint">
&lt;div class="row">
	&lt;div class="col-md-6 col-md-offset-3">
		&lt;h4>Forecast By City&lt;/h4>
		&lt;div class="form-group">
			&lt;input type="text" ng-model="city" class="form-control" />
		&lt;/div>
		&lt;a href="#/forecast" class="btn btn-primary">Get Forecast&lt;/a>
	&lt;/div>
&lt;/div>	
</pre>

<h3>pages/forecast.html</h3><hr/>
<pre class="prettyprint">
forecast for &#123;&#123;city}}
&lt;div class="container">
	days:&lt;a href="#/forecast/2">2&lt;/a> | &lt;a href="#/forecast/4">4&lt;/a> | &lt;a href="#/forecast/5">5&lt;/a> | &lt;a href="#/forecast/7">7&lt;/a>
&lt;/div>
&lt;div ng-repeat="w in weatherResult.list">
	&lt;div class="row">
		&lt;div class="col-md-12">
			&lt;div class="panel panel-primary">
				&lt;div class="panel panel-heading">
					&lt;h3 class="panel-title">&#123;&#123;convertToDate(w.dt) | date: 'MMM d,y'}}&lt;/h3>
				&lt;/div>
				&lt;div class="panel-body">
					Daytime temperature: &#123;&#123;w.temp.day}}
				&lt;/div>
			&lt;/div>
		&lt;/div>
	&lt;/div>
&lt;/div>	
</pre>

