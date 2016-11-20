<br/><br/>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
	<h3>$filter Service</h3><hr/>
    <pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>&lt;/title>
&lt;/head>
&lt;body>
&lt;div ng-app="myApp" ng-controller="mainController">
	&#123;&#123;newInfo1}}-&#123;&#123;newInfo2}}
&lt;/div>
&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
&lt;script type="text/javascript">
var app=angular.module('myApp',[]);
app.controller('mainController',function(&dollar;scope,&dollar;log,&dollar;filter)&#123;
  &dollar;scope.info='Some Information';
  &dollar;scope.newInfo1= &dollar;filter('lowercase')(&dollar;scope.info);
  &dollar;scope.newInfo2= &dollar;filter('uppercase')(&dollar;scope.info);
});
&lt;/script>
&lt;/body>
&lt;/html>
    </pre>
</div>
</div>
<script src="js/run_prettify.js" type="text/javascript"></script>


