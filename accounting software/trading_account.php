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
$get_opening_sum=$get->getSumOfOpeningBalance();
$d=$get->getPurchaseSum();
$d1=$get->getSumOfTotalCostFromInventory();
$getSum=$get->getSumForSaleAbstract();
$cost1=$get->getTotalCostFromExpensesForDebit();
$cost2=$get->getTotalCostFromExpensesForCredit();
$p1=$get_opening_sum['opening_sum']+$d['cb'];
$s1=$d1['tc']+$getSum['debit'];
$gp=$s1-$p1;
$expenses=$cost1['cost1']-$cost2['cost2'];
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
		<div class="col-sm-9">
		<h2 align="center">Trading Account</h2><br/>
	    <table class="table table-bordered">
	    	<tr><th>Opening Stock</th><td><?php echo $get_opening_sum['opening_sum'] ?></td></tr>
	    	<tr><th>Purchase</th><td><?php echo $d['cb']?></td></tr>
	    	<tr><th>Closing Stock</th><td><?php echo $d1['tc']?></td></tr>
	    	<tr><th>Sale</th><td><?php echo $getSum['debit']?></td></tr>
	    	<tr><th>Expenses</th><td><?php echo $cost1['cost1']-$cost2['cost2']?></td></tr>
	    	<tr><th>Gross Profit</th><td><?php  if($gp>=0){echo $gp;}else{echo '0';} ?></td></tr>
	    	<tr><th>Gross Loss</th><td><?php if($gp<=0){echo -1*$gp;}else{echo '0';} ?></td></tr>
	    	<tr><th>Net Profit</th><td><?php if($gp>=0) echo $gp-$expenses; else echo  '0';?></td></tr>
	    	<tr><th>Net Loss</th><td><?php if($gp<=0) echo  -1*$gp+$expenses; else echo '0';?></td></tr>
	    </table>
		</div>
	</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

