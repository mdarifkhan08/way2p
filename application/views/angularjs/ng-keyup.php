<br/><br/>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
	<h3>ng-keyup</h3><hr/>
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
            &lt;input ng-keyup="onKeyUp()" />
         &lt;/div>
      &lt;/div>
      &lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
      &lt;script type="text/javascript">
         var app=angular.module('myApp',[]);
         app.controller('mainController',['&dollar;scope','&dollar;filter',function(&dollar;scope,&dollar;filter)&#123;
            &dollar;scope.onKeyUp=function()&#123;
               console.log('on keyup ');
            }
         }]);
      &lt;/script>
   &lt;/body>
&lt;/html>  
    </pre>
</div>
</div>
<script src="js/run_prettify.js" type="text/javascript"></script>
