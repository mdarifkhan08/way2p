<?php
include_once 'dbconfig.php';
require_once('class.admin.php');

$admin=new Admin($DB_con);

if(isset($_POST['submit'])){
	$email=trim($_POST['email']);
	$password=trim($_POST['password']);
	$admin->register($email,$password);
	$report = "<div class='alert alert-submit'>Admin Created!</div>";
}
?>
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php if(isset($report))echo $report;?>
<form action="" method="POST">
<input type="text" name="email" placeholder="Enter Email"/>
<input type="password" name="password" placeholder="Enter Password"/>
<input type="submit" name="submit">
</form>
</body>
</html>