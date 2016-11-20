<br/><br/>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
	<h3>ng-show</h3><hr/>
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
         
         app.controller('mainController',['&dollar;scope','&dollar;filter',function(&dollar;scope,&dollar;filter)&#123;
             &dollar;scope.firstname='';
             &dollar;scope.characters=5;
             
         }]);
      &lt;/script>
   &lt;/body>
&lt;/html>
    </pre>
</div>
</div>
<script src="js/run_prettify.js" type="text/javascript"></script>
