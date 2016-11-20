<h1>First Example</h1>
<h3>index.php</h3>
			<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;script type = "text/javascript" src = "http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">&lt;/script>
&lt;script type="text/javascript">
$(function(){
	$('#send_request').bind('click', function(e) {           
		  var url = $(this).attr('href'); //no need of this line

		  e.preventDefault(); // stop the browser from following the link

		  //make ajax call
		  $.ajax({
		   'url' : 'send-get-request-with-anchor-tag-and-ajax.php' ,
		   'type' : 'GET',
		   'success' : function(data) {
			   $('#container').append('&lt;p id = "response">' + data + '&lt;/p>');
		   }
		   });
		});
 });
&lt;/script>
&lt;/head>
&lt;body>
&lt;div id="container">


&lt;/div>

&lt;a href="#" id="send_request">Click Here&lt;/a>
&lt;/body>
&lt;/html>    
            </pre>

			
			
			

			<h3>send-get-request-with-anchor-tag-and-ajax.php</h3>
			<pre class="prettyprint">
&lt;?php

echo "Whatever the text produces by this page will send to the parent page(page that calling this page)";
            </pre>




<h1>Second Example</h1>
<h3>index.php</h3>
			<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;script type = "text/javascript" src = "http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">&lt;/script>
&lt;script type="text/javascript">
$(function(){
	$('#send_request').bind('click', function(e) {           
		  e.preventDefault(); // stop the browser from following the link
		  //make ajax call
		  $.ajax({
		   'url' : 'abc.php' ,
		   'type' : 'GET',
		    beforeSend: function ( xhr ) {    
                     $("#container").append("&lt;caption>Loading...&lt;/caption>");
                },
		   'success' : function(data) {
		   	var obj=JSON.parse(data);
		   	$('#container').empty();
		   	$('#container tr:last').remove();
            for(i=0;i&lt;obj.length;i++){
            	$('#container').append('&lt;tr>&lt;td>'+obj[i].student_id+'&lt;/td>&lt;td>'+obj[i].student_name+'&lt;/td>&lt;td>'+obj[i].student_address+'&lt;/td>&lt;/tr>');
            }
		   }
		   });
		});
 });
&lt;/script>
&lt;/head>
&lt;body>
&lt;table class="table table-bordered" id="container">
	
&lt;/table>
&lt;a href="#" id="send_request">Get Data/Refresh&lt;/a>
&lt;/body>
&lt;/html>   
            </pre>

<h3>db.sql</h3>
			<pre class="prettyprint">
create database stu;

use stu;

create table student(
student_id int(11) unsigned not null auto_increment,
student_name varchar(100) not null,
student_address varchar(100) not null,
primary key(student_id)
);

insert into student(student_name,student_address) values('XYZ1','XYZ2');
insert into student(student_name,student_address) values('LMN1','LMN2');
insert into student(student_name,student_address) values('PQR1','PQR2');   
            </pre>
<h3>abc.php</h3>
			<pre class="prettyprint">
 &lt;?php
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "stu";
try {
	$DB_CON = new PDO ( "mysql:host={$DB_host};dbname={$DB_name}", $DB_user, $DB_pass );
	$DB_CON->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch ( PDOException $e ) {
	echo $e->getMessage ();
}
$data=$DB_CON->prepare('select * from student');
$data->execute();
$data1=$data->fetchAll(PDO::FETCH_ASSOC);
$e=json_encode($data1);
echo $e;
?>
            </pre>

