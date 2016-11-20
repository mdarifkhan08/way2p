<?php 
include_once 'dbconfig.php';
require_once 'class.admin.php';
$admin=new Admin($DB_CON);
if($_SESSION['admin_session']!=""){
	$admin->redirect('admin-home.php');
}
if(isset($_GET['logout']) && $_GET['logout']=="true")
{   
	$admin->logout();
	$admin->redirect('admin.php');
}
if(!isset($_SESSION['admin_session']))
{
	$admin->redirect('admin.php');
}
?>