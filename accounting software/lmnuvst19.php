<?php
include_once 'dbconfig.php';
require_once('class.admin.php');
$admin=new Admin($DB_con);
if ($admin->is_loggedin () == "") {
	$admin->redirect ( 'admin.php' );
}
require_once 'class.getData.php';
$get=new GetData($DB_con);
$name_id=$get->get_account_holder_name_id();
require 'class.postrequest.php';
$post_data = new PostRequest($DB_con);
if (isset ( $_POST ['create-account'] )) {
	$name = trim ( $_POST ['txt_name']);
	$post_data->createAccount ( $name );
    /*logActivity */
        $request_type_1='Post_user';
        $operation_table_1='account';
        $operation_page='lmnuvst19.php';
        $operation_data_1='account_name:'.$name;
        $operation_ip_1=$_SERVER['REMOTE_ADDR'];
        $operation_time=date("Y-m-d h:i:s");
        $post_data->log_activity($request_type_1,$operation_table_1,$operation_page,$operation_data_1, $operation_ip_1,$operation_time);
	$post_data->redirect ( 'lmnuvst19.php?create=success' );
}
?>
<!DOCTYPE HTML>
<html ng-app="myApp">
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript">
	addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet">
<script src="js/jquery.min.js">
</script>
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
<script>
	$(function() {
		$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

		if (!screenfull.enabled) {
			return false;
		}
		$('#toggle').click(function() {
			screenfull.toggle($('#container')[0]);
		});
	});
</script>
<style type="text/css">
[ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
  display: none !important;
}
</style>
</head>
<body >
	<div id="wrapper">
		<nav class="navbar-default navbar-static-top" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<h1>
					<a class="navbar-brand" href="index.php">ADMIN</a>
				</h1>
			</div>
			<div class="border-bottom">
				<div class="col-md-9">
					<nav class="navbar navbar-inverse">
						  <?php include 'header_menu.php';?>
					</nav>
				</div>
				<div class="clearfix"></div>
				<div class="navbar-default sidebar" role="navigation">
					<div class="sidebar-nav navbar-collapse">
						<?php include 'accounts.php';?>
					</div>
				</div>
				<div class="clearfix"></div>
		</nav>
	</div>
	<div class="container">
		<div class="col-sm-3"></div>
		<div class="col-sm-7"><br/><br/>
		<h1>Create Account</h1><br/><br/>
		<?php if(isset($_GET['create'])){?>
		<div class="alert alert-success">
		   Account Created Successfully!
		</div>
		<?php }?>
		
			<form action="" method="POST">
				<table class="table table-bordered" ng-controller="mainController">
					<tr>
						<td>Name</td>
						<td><input type="text" name="txt_name" ng-model="onType" ng-keyup="onTypeWords()"class="form-control" required/>
                          <div ng-if="repeat.length>0" ng-cloak class="alert alert-danger" ng-cloak>Account Name Already Exists</div>

						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" ng-disabled="disableButton()" name="create-account"  class="btn btn-success"/></td>
					</tr>

				</table>
			</form>
		</div>
	</div>

	<script src="js/bootstrap.min.js">
	</script>
	<script type="text/javascript">
		$('#myTabs a').click(function(e) {
			e.preventDefault()
			$(this).tab('show')
		})
	</script>



<script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js"></script>
<script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular-messages.min.js"></script>
<script type="text/javascript">
var app=angular.module('myApp',[]);

app.controller('mainController',['$scope','$filter','$http','$location',function($scope,$filter,$http,$location){

$scope.repeat='';
$scope.onType='';

if($location.host()=='localhost'){
   var arraydata=window.location.pathname.split('/');
   var mypath='/'+arraydata[1];
}
else{
var mypath='';
}


$scope.onTypeWords=function(){
$http.get(mypath+'/angularjs/interface/accounts/'+$scope.onType)
.success(function(result){$scope.repeat=result;})
.error(function(data,status){console.log(status)});
}

$scope.disableButton=function(){
	if($scope.repeat.length>0){
        return true;
	}
	else{
		return false;
	}
}
}
]);
</script>
</body>
</html>

