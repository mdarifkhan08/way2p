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
$getAbstract=$get->getDataForTheInventory($_GET['pid']);

$getyear=$get->getYearForGetDataOnClickInveIdPage($_GET['pid']);
$getmonth=$get->getMonthForGetDataOnClickInveIdPage($_GET['pid']);

if(isset($_POST['submit'])){
	$year=trim($_POST['year']);
	$month=trim($_POST['month']);


$getD=$get->getDataForTheInventoryWithLikeQuery($year,$month,$_GET['pid']);
$getQ1=$get->getDataForCalculationPurpose1($year,$month,$_GET['pid']);
$getQ2=$get->getDataForCalculationPurpose2($year,$month,$_GET['pid']);
$getC1=$get->getDataForCalculationPurposeForCost1($year,$month,$_GET['pid']);
$getC2=$get->getDataForCalculationPurposeForCost2($year,$month,$_GET['pid']);
$getDC=$get->getDataForCalculationPurposeForDebitOrCreditBal($year,$month,$_GET['pid']);
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

	function showResult(str) {
		  if (str.length==0) { 
		    document.getElementById("livesearch").innerHTML="";
		    document.getElementById("livesearch").style.border="0px";
		    return;
		  }
		  if (window.XMLHttpRequest) {
		    // code for IE7+, Firefox, Chrome, Opera, Safari
		    xmlhttp=new XMLHttpRequest();
		  } else {  // code for IE6, IE5
		    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  xmlhttp.onreadystatechange=function() {
		    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
		      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
		    }
		  }
		  xmlhttp.open("GET","livesearch1.php?q="+str,true);
		  xmlhttp.send();
		}
</script>
</head>

<body ng-controller="mainController">
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

	<div class="container" style="width:800px;overflow-x:auto;">
		<div class="col-sm-1"></div>
		<div class="col-sm-9">
		<div class="col-md-8 col-sm-8 col-xs-8" id="padd">

		<!-- 	<form action="" method="">
						<input type="text" name="" placeholder="Search Voucher"
							onkeyup="showResult(this.value)" class="form-control" />
				<div id="livesearch"></div>
				<br/><br/>
			</form> -->

			<div align="center">
				<form action="" method="POST">
					<select name="year">
						<option value="">-- year --</option>
						<?php foreach($getyear as $getYear){?>
						<option value="<?php echo $getYear['date']?>"><?php echo $getYear['date']?></option>
						<?php } ?>
					</select>
					<select name="month">
						<option value="">-- month --</option>
						<?php foreach($getmonth as $getMonth){?>
						<option value="0<?php echo $getMonth['month']?>">0<?php echo $getMonth['month']?></option>
						<?php } ?>
					</select>
					<input type="submit" name="submit"/>
				</form>
			</div>
			<br/><br/>
		</div>
		  <table border="0" cellspacing="2" cellpadding="0" id="books" class="table table-bordered">
<tr><th>Voucher No.</th><th>Date</th><th>Name</th><th>Particulars</th><th>Whom</th><th>Product Id</th><th>Product Name</th><th>Quantity</th><th>Cost</th><th>Debit Balance</th><th>Credit Balance</th><th>Edit</th><th>Delete</th></tr></tbody>
<?php 
if(isset($_POST['submit'])){
foreach ($getD as $get)
{
?>
	<tr><td><?= $get['voucher_number']?></td><td><?= $get['date']?></td><td><a href="get_info_of_account.php?account_name=<?= $get['account_name']?>" target="_blank"><?= $get['account_name']?></a></td><td><?= $get['remark']?></td><td><?= $get['whom']?></td><td><?= $get['product_id']?></td><td><?= $get['product_name']?></td><td><?= $get['quantity']?></td><td><?= $get['cost']?></td><td><?= $get['debit_balance']?></td><td><?= $get['credit_balance']?></td><td><a href="edit_records.php?id=<?= $get['abstract_id']?>" class="btn btn-info">Edit</a></td><td><a  href="delete_record.php?id=<?= $get['abstract_id']?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">DELETE</a></td></tr>
<?php 
}
?>
<tr><th></th><th></th><th></th><th></th><th></th><th></th><th> </th><th><?php echo $getQ1['q1']-$getQ2['q2']?></th><th><?php echo $getC1['c1']-$getC2['c2']?></th><th><?= $getDC['db']?></th><th><?= $getDC['cb']?></th><th>SUM</th><th></th></tr></tbody>
<?php }?>
		  </table>
		</div>
	</div>

<script src="js/bootstrap.min.js"></script>
<script src="js/angular.min.js"></script>
<script type="text/javascript">
	var app=angular.module('myApp',[]);

	app.controller('mainController',['$scope','$location','$log','$http',function($scope,$location,$log,$http){


		$log.info('hi');





       

	}]);
</script>
</body>
</html>

