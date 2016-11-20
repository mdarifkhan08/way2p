<div class="panel panel-primary">
	<div class="panel panel-heading">
		Validation In Angularjs
	</div>
	<div class="panel panel-body">
	<h3>ngMessage Module(Validation)</h3><hr/>
    <pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>&lt;/title>
&lt;/head>
&lt;body>

&lt;div ng-app="myApp" ng-controller="mainController">
	&lt;form name="nameForm">
		&lt;input type="text" ng-model="field" name="firstname" required minlength="6" />
		&lt;div ng-messages="nameForm.firstname.&dollar;error">
			&lt;div ng-message="required">You did not enter a field&lt;/div>
			&lt;div ng-message="minlength">The value entered is too short&lt;/div>
		&lt;/div>
		
	&lt;/form>
&lt;/div>

&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js">&lt;/script>
&lt;script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular-messages.min.js">&lt;/script>
&lt;script type="text/javascript">
var app=angular.module('myApp',['ngMessages']);

app.controller('mainController',function(&dollar;scope,&dollar;log,&dollar;filter)&#123;

});
&lt;/script>
&lt;/body>
&lt;/html>
    </pre>		
	</div>
</div>