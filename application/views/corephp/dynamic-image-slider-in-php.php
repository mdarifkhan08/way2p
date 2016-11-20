<div class="alert alert-success">

</div>

<h3></h3><hr/>
<pre class="prettyprint">
&lt;?php
$DB_HOST="localhost";
$DB_USER="root";
$DB_PASSWORD="";
$DB_NAME="abcd";
try{
	$DB_CON=new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASSWORD);
	$DB_CON->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $e->getMessage();
}
</pre>




<h3></h3><hr/>
<pre class="prettyprint">
&lt;?php 
require 'dbconfig.php';
if (isset ( $_POST ['upload'] )) {
	$fileName = $_FILES ["uploaded_file"] ["name"];
	
	$target_path = "uploads/";
	
	$target_path = $target_path . basename ( $_FILES ['uploaded_file'] ['name'] );
	
	if (move_uploaded_file ( $_FILES ['uploaded_file'] ['tmp_name'], $target_path )) {
		$stmt12 = $DB_CON->prepare ( "SELECT * FROM slider" );
		$stmt12->execute ();
		
		if ($stmt12->rowCount () == 5) {
			$set_var1 = "";
			$_SESSION ['info'] = '&lt;div class="alert alert-danger" style="text-align:center;">&lt;b>We can not upload more than 5 images!&lt;/b>&lt;/div>';
		} else {
			$stmt12 = $DB_CON->prepare ( "INSERT INTO slider(image_path) VALUES (:image_path)" );
			$stmt12->bindParam ( ":image_path", $target_path );
			$stmt12->execute ();
			$_SESSION ['info'] = '&lt;div class="alert alert-success" style="text-align:center;">&lt;b>Image uploaded successfully!&lt;/b>&lt;/div>';
			
		}
	} else {
		echo "There was an error uploading the file, please try again!";
	}
}
?>
&lt;form enctype="multipart/form-data" method="post" action="" id="upload">
						&lt;tr>
							&lt;td>Select Image&lt;/td>
							&lt;td>&lt;input name="uploaded_file" type="file" />&lt;/td>
						&lt;/tr>
						&lt;tr>
							&lt;td>&lt;/td>
							&lt;td>&lt;input type="submit" value="Upload" name="upload" />&lt;/td>
						&lt;/tr>
&lt;/form>
</pre>



<h3></h3><hr/>
<pre class="prettyprint">
&lt;?php 
require 'dbconfig.php';

$stmt11 = $DB_CON->prepare ( "SELECT * FROM slider" );
$stmt11->execute ();
$get = $stmt11->fetchAll ();

?>
&lt;!Doctype html>
&lt;html>
&lt;head>
&lt;meta name="viewport" content="width=device-width, initial-scale=1">
&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
&lt;script type="text/javascript" src="js/jquery.min.js">&lt;/script>
&lt;link rel="stylesheet" href="css/bootstrap.min.css"/>
&lt;link rel="stylesheet" href="css/nivo-slider.css"/>
&lt;link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />
&lt;/head>
&lt;body>
&lt;script type="text/javascript"
		src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">&lt;/script>
&lt;div id="">
          &lt;div class="slider-wrapper theme-default">
            &lt;div id="slider" class="nivoSlider">
&lt;?php
foreach ( $get as $new_get ) {
?>
                &lt;img src="&lt;?php echo $new_get['image_path']?>" data-thumb="&lt;?php echo $new_get['image_path']?>" alt="" />
&lt;?php
}
?>
            &lt;/div>
          &lt;/div>
&lt;/div>

&lt;script type="text/javascript" src="js/bootstrap.min.js">&lt;/script>
&lt;script type="text/javascript" src="js/jquery.nivo.slider.js">&lt;/script>
&lt;script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
&lt;/script>

&lt;/body>
&lt;/html>
</pre>


<h3></h3><hr/>
<pre class="prettyprint">
create table slider(
id int(11) not null auto_increment,
image_path varchar(255) not null,
primary key(id)
);
</pre>
