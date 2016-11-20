<div class="jumbotron">
					<h1>Steps</h1>
					<div class="alert alert-success" role="alert">1.I am using
						ubuntu operating system.</div>
					<div class="alert alert-success" role="alert">
						2.Open your terminal and type command
						<hr>
						<div class="alert alert-info" role="alert">
							>cd Desktop<br> //we have changed directory to Desktop
							<hr>
							>mkdir nodejs<br> //now we have created a new directory
							nodejs,in which we will save all project
							<hr>
							>cd nodejs<br> //now we navigate to the directory
							nodejs,here we want our first project
							<hr>
							>mkdir project1<br> //we have created the directory project1
							inside nodejs directory
							<hr>
							>cd project1<br> //now we are moving to directory project1
							by using change directory command
							<hr>
							>npm init<br> //this command we use for initialize the node
							project,it will ask you about your project,you need to provide by
							command line
							<hr>
							>touch index.js<br> //touch command is use to create file,we
							want index.js default js file that we have provide while npm init
							command
							<hr>
							now we are inside the directory of project1 and we want to
							provide index.html to the nodejs app for this we need to use
							static files for this follow some more command >mkdir public<br>
							//this folder will contain all static files
							<hr>
							>cd public
							<hr>
							>mkdir controllers
							<hr>
							>cd controllers
							<hr>
							>touch controller.js<br> //in this js file we will do our
							html related angularjs work
							<hr>
							>cd ..
							<hr>
							>cd ..
							<hr>
							now we are inside the project1 folder and prepare your index.js,
							index.html and controller.js for your application



						</div>
					</div>
				</div>

<div class="jumbotron">
					<h1>index.js</h1>
					<pre class="prettyprint">
var express=require('express');
var app=express();

app.use(express.static(__dirname+'/public'));

app.listen(3000,function(){
    console.log('App is running on 3000 port');
});				
					</pre>
				</div>

<div class="jumbotron">
					<h1>index.html</h1>
					<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html ng-app="APP">
&lt;head>
&lt;title>Home Page&lt;/title>
&lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
&lt;/head>
&lt;body>

    &lt;div class="container" ng-controller="myCont">
    &lt;h1>Contact App application&lt;/h1>
    &lt;table class="table">
&lt;thead>
    &lt;tr>
&lt;th>name&lt;/th>
&lt;th>email&lt;/th>
&lt;th>number&lt;/th>
&lt;/thead>
&lt;/tr>
&lt;tbody>
    &lt;tr ng-repeat="contact in contactList">

&lt;td>{{contact.name}}&lt;/td>
&lt;td>{{contact.email}}&lt;/td>
&lt;td>{{contact.number}}&lt;/td>
&lt;/tr>
&lt;/tbody>
    &lt;/table>
&lt;/div>

&lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">&lt;/script>
  &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js">&lt;/script>
  &lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js">&lt;/script>
  &lt;script type="text/javascript" src="controllers/controller.js">&lt;/script>

&lt;/body>
&lt;/html>				
					</pre>
				</div>



<div class="jumbotron">
					<h1>controller.js</h1>
					<pre class="prettyprint">
var app=angular.module('APP',[]);

app.controller('myCont',function($scope){
    console.log('our controller is in running condition');

    person1={

        name:'Arif',
        email:'ak.khan188@gmail.com',
        number:'7869368377'
    };

    person2={
        name:'Arif Khan',
        email:'tech.arifkhan@gmail.com',
        number:'8867204938'
    };

    var contactList=[person1,person2];

    $scope.contactList=contactList;


});				
					</pre>
				</div>


				<div class="jumbotron">
					<h1>We will update soon</h1>
					<pre class="prettyprint">
				
					</pre>
				</div>