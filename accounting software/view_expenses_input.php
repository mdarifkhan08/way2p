<?php
include_once 'dbconfig.php';
require_once('class.admin.php');
$admin=new Admin($DB_con);
if ($admin->is_loggedin () == "") {
	$admin->redirect ( 'admin.php' );
}
require_once  'class.getData.php';
$get=new GetData($DB_con);
$name_id=$get->get_account_holder_name_id();
$data=$get->getDataForExpensesInput();
?>
<!DOCTYPE Html>
<html>
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
<script src="js/skycons.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>
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
</div>
	<div class="container" style="width:800px;overflow-x:auto;" >
		<div class="col-sm-1"></div>
		<div class="col-sm-9"><br/><br/>
		<h1>View Expenses Input</h1><br/><br/>
		  <table border="0" cellspacing="0" cellpadding="0" id="books" class="table table-bordered">
<tr><th>Account Name</th><th>Date</th><th>Whom</th><th>Remark</th><th>Debit</th><th>Credit</th></tr>
<?php foreach($data as $d){?>
<tr><td><?= $d['account_name'] ?></td><td><?= $d['date'] ?></td><td><?= $d['whom'] ?></td><td><?= $d['remark'] ?></td><td><?= $d['debit'] ?></td><td><?= $d['credit'] ?></td></tr>
<?php }?>
		  </table>
		</div>
	</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

