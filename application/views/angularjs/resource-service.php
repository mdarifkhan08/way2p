<br/><br/>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<h3>Resource Service</h3><hr/>
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
&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular-resource.min.js">&lt;/script>
&lt;script type="text/javascript">
var app=angular.module('myApp',['ngMessages','ngResource']);

app.controller('mainController',function(&dollar;scope,&dollar;log,&dollar;filter,&dollar;resource)&#123;
      &dollar;log.log(&dollar;resource);
});
&lt;/script>
&lt;/body>
&lt;/html>
  </pre>
</div>
</div>
<script src="js/run_prettify.js" type="text/javascript"></script>