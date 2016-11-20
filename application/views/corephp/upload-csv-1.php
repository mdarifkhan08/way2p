<div>before start working on this app first we need to create a directory/folder where we will keep or save our csv file. I am using folder/directory <mark>csv_container</mark>.</div>

<h3>index.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
session_start();
require_once('dbconfig.php');
require_once('class.admin.php');
$admin=new Admin($DB_CON);
if(! $admin->is_loggedin()){
	header('Location: admin.php');
}
$admin_id = $_SESSION ['admin_session'];
$stmt = $DB_CON->prepare ( "SELECT * FROM admin WHERE id=:admin_id" );
$stmt->execute ( array (
		":admin_id" => $admin_id
));
$admin_row1 = $stmt->fetch (PDO::FETCH_ASSOC);
$stmt12 = $DB_CON->prepare ( "SELECT * FROM stay_in_touch" );
$stmt12->execute();


if (isset ( $_POST ['upd'] )) {
	$target_dir = "csv_container/";
	$target_file = $target_dir . basename ( $_FILES ["fileToUpload"] ["name"] );
	$imageFileType = pathinfo ( $target_file, PATHINFO_EXTENSION );
	$fileTmpLoc = $_FILES ["fileToUpload"] ["tmp_name"];
	if ($imageFileType != "csv") {
		header('Location: upload-csv.php?report=file_format' );
	} 
	else {
		move_uploaded_file($fileTmpLoc,$target_file);
		$name=$_FILES["fileToUpload"]["name"];
		$file=fopen('csv_container/'.$name,'r');
		while(!feof($file)){
			$array=fgetcsv($file);
			echo $array[0].'&lt;br/>';
			$email = 'info@aagstechno.com';
			$to = $array[0];
			$subject = $_POST['subject'];
			$message = "
			&lt;html>
			&lt;head>
			&lt;title>HTML email&lt;/title>
			&lt;/head>
			&lt;body>
			&lt;div>".$_POST['msg']."&lt;/div>
			&lt;/body>
			&lt;/html>
			";
			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// More headers
			$headers .= 'From: &lt;info@aagstechno.com>' . "\r\n";
			mail ( $to, $subject, $message, $headers );
			header('Location: upload-csv.php?mail=success');
		}
	}
}
?>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
&lt;link rel="stylesheet" type="text/css" href="css/style.css">
&lt;link rel="stylesheet" type="text/css" href="css/style_aags.css">
&lt;link rel="stylesheet" type="text/css" href="css/extra_work.css">
&lt;script type="text/javascript" src="js/jquery.min.js">&lt;/script>
&lt;script type="text/javascript" src="js/bootstrap.min.js">&lt;/script>
&lt;script type="text/javascript" src="jquery.validate.min.js">&lt;/script>
&lt;script type="text/javascript">
$(document).ready(function() {
    $("#videoUpload").validate({
        rules: {
        	fileToUpload:{required: true},
        },
        messages: {
        	fileToUpload:"Please Select File To Upload",
        },
        submitHandler: function(form) { // &lt;- pass 'form' argument in
            form.submit(); // &lt;- use 'form' argument here.
        }
    });
});
&lt;/script>
&lt;/head>
&lt;body>
&lt;?php include_once 'admin-header.php';?>
	&lt;div class="container">
   &lt;div class="col-sm-2">
   &lt;/div>
   &lt;div class="col-sm-8">
 &lt;br/>&lt;br/>&lt;br/> 
&lt;?php if(isset($_GET['report'])){?>
&lt;div class="container">
&lt;div class="col-sm-8">
  &lt;div class="alert alert-danger">
     .csv extension is allowed only
  &lt;/div>
&lt;/div>
&lt;/div>
&lt;?php }?>

&lt;?php if(isset($_GET['mail'])){?>
&lt;div class="container">
&lt;div class="col-sm-8">
  &lt;div class="alert alert-success">
    Email Send Successfully
  &lt;/div>
&lt;/div>
&lt;/div>
&lt;?php }?>
&lt;h1 style="text-align: center;">Promotion&lt;/h1>
&lt;table class="table table-bordered">
	&lt;form action="" method="POST" id="videoUpload" enctype="multipart/form-data" style="padding: 25px;">
		&lt;tr>&lt;td>&lt;/td>&lt;td>&lt;input type="file" name="fileToUpload" class="form-control" id="upload" />&lt;/td>&lt;/tr>
		&lt;tr>&lt;td>&lt;/td>&lt;td>&lt;input type="text" name="subject" placeholder="subject"/>	&lt;/td>&lt;/tr>
		&lt;tr>&lt;td>&lt;/td>&lt;td>&lt;textarea rows="5" cols="60" name="msg" placeholder="message">&lt;/textarea>&lt;/td>&lt;/tr>
		&lt;tr>&lt;td>&lt;/td>&lt;td>&lt;input type="submit" value="SEND MAIL" name="upd" class="btn"/>&lt;/td>&lt;/tr>
	&lt;/form>
&lt;/table>
&lt;/div>
&lt;/div>
&lt;/body>
&lt;/html>	
</pre>
