<?php
include_once 'dbconfig.php';
require_once('class.admin.php');

$admin=new Admin($DB_con);

/* if ($admin->is_loggedin () != "") {
	$admin->redirect ( 'admin.php' );
} */


if(isset($_POST['submit'])){
	$email=trim($_POST['email']);
	$password=trim($_POST['password']);
    if($admin->adminLogin($email,$password)){
    	$admin->redirect('admin-home.php');
    }
    else{
    	$admin->redirect('abcsasad1.php');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/extra_work.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
<div class="col-sm-3"></div>
<div class="col-sm-5">
<br/>
<br/>
<?php if(isset($loginError)) echo $loginError;?>
<div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title">Admin Login</h3></div><div class="panel-body">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
         <table class="table table-bordered">
         	<tr><th>Email</th><td><input type="text" name="email" class="form-control"></td></tr>
         	<tr><th>Password</th><td><input type="password" name="password" class="form-control"></td></tr>
         	<tr><th></th><td><input type="submit" name="submit" value="SUBMIT" class="btn btn-primary"></td></tr>
         </table>
	</form>
</div></div>
	
</div>

</div>
<br/><br/>

</body>
</html>