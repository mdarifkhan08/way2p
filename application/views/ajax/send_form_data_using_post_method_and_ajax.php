			<h3>index.php</h3>
			<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;link rel="stylesheet" href="bootstrap.min.css">
&lt;script type="text/javascript" src="jquery.min.js">&lt;/script>
&lt;script type="text/javascript">
$(document).ready(function(){
	$('#submit_post_request').click(function(){
		$.ajax({
			type:'POST',
			url:'send-post-request-with-ajax.php',
			data:$('#send-post-request-form').serialize(),
			cache:false,
			success:function(result){
                alert("Your Data Sent Successfully!");
			}
		  });
	});
});
&lt;/script>
&lt;/head>
&lt;body>
	&lt;br />
	&lt;br />
	&lt;div class="container">
		&lt;form action="" id="send-post-request-form">
		
		&lt;input type="text" name="name" placeholder="Enter Your Name"/>
		
		&lt;div  id="submit_post_request" class="btn btn-success">SUBMIT&lt;/div>
		&lt;/form>
	&lt;/div>
&lt;/body>
&lt;/html>
            </pre>


			
			
			
			<h3>dbconfig.php</h3>
			<pre class="prettyprint">
&lt;?php
$DB_HOST="localhost";
$DB_USER="root";
$DB_PASSWORD="inception";
$DB_NAME="send_post_request_using_ajax";

try{
	$DB_CON=new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASSWORD);
	$DB_CON->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $e->getMessage();
}
            </pre>

			
			
			<h3>schema.sql</h3>
			<pre class="prettyprint">
create table send_post_request_using_ajax(name varchar(100) not null);
            </pre>

			
			
			
			<h3>send-post-request-with-ajax.php</h3>
			<pre class="prettyprint">
&lt;?php

include 'dbconfig.php';

if(isset($_POST['name'])){
	$name=trim($_POST['name']);
	
	$stmt=$DB_CON->prepare("INSERT INTO send_post_request_using_ajax(name) VALUES(:name)");
	$stmt->bindParam(':name', $name);
	$stmt->execute();
}	
			</pre>



