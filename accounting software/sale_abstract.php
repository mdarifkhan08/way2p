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
$getSum=$get->getSumForSaleAbstract();
$getAbstract=$get->getSaleAbstract();

$getDistinctYear=$get->getYearForSaleAbstract();
$getDistinctMonth=$get->getMonthForSaleAbstract();


if (isset ( $_POST ['xyz'] )) {
	$randnum = rand ( 1111111111, 9999999999 );
	if (isset ( $getAbstract [0] )) {
		$fp = fopen ( "Csvfiles/file_$randnum.csv", "w" );
		$head = array (
				"DB_ID",
				"Voucher Number",
				"Date",
				"Name",
				"Particulars",
				"Whom",
				"Product Id",
				"Product Name",
				"Quantity",
				"Cost",
				"Debit Balance",
				"Credit Balance"
		);
		fputcsv ( $fp, $head );
		foreach ( $getAbstract as $values ) {
			fputcsv ( $fp, $values );
		}
		$sum = array (
				
				"-",
				"-",
				"-",
				"-",
				"-",
				"-",
				"-",
				"-",
				"-",
				"SUM",
				$getSum['debit'],
				$getSum['credit'],
		);
		fputcsv ( $fp, $sum );
		fclose ( $fp );
	}
	header ( 'Location: download.php?filename=file_' . $randnum . '.csv' );
}
?>
<!DOCTYPE HTML>
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
<body ng-app="myApp">
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
	 <h2 style="text-align: center">Sale History</h2>
	</div>
	<br/><br/>
	
<div class="container">
<div class="col-sm-3"></div>
       <div class="col-md-8" id="padd">
		  <input type="text" name="" placeholder="Search" ng-model="searchFromTable" class="form-control" /><br/><br/>
		</div>
</div>


	<div class="container" style="width:800px;overflow-x:auto;" ng-controller="mainController">
		<div class="col-sm-1"></div>
		<div class="col-sm-9">
		<div align="center">
				<form ng-submit="onSubmitButtonForDatewiseData()">
					<select name="year" ng-model="year">
						<option value="">-- year --</option>
						<?php foreach($getDistinctYear as $getYear){?>
						<option value="<?php echo $getYear['date']?>"><?php echo $getYear['date']?></option>
						<?php } ?>
					</select>
					<select name="month" ng-model="month">
						<option value="">-- month --</option>
						<?php foreach($getDistinctMonth as $getMonth){?>
						<option value="0<?php echo $getMonth['month']?>">0<?php echo $getMonth['month']?></option>
						<?php } ?>
					</select>
					<input type="submit" name="submit" />
				</form>
			</div>
			<br/><br/>
		
		  <table ng-show="hidedata1" border="0" cellspacing="2" cellpadding="0" id="books" class="table table-bordered">
<tr><th>Voucher No.</th><th>Date</th><th>Name</th><th>Particulars</th><th>Whom</th><th>Product Id</th><th>Product Name</th><th>Quantity</th><th>Cost</th><th>Debit Balance</th><th>Credit Balance</th><th>Edit</th><th>Delete</th></tr></tbody>

	<tr ng-repeat="record in saleAbstract | filter:searchFromTable" ng-cloak><td>{{record.voucher_number}}</td><td>{{record.date}}</td><td><a href="get_info_of_account.php?account_name={{record.account_name}}" target="_blank">{{record.account_name}}</a></td><td>{{record.remark}}</td><td>{{record.whom}}</td><td>{{record.product_id}}</td><td>{{record.product_name}}</td><td>{{record.quantity}}</td><td>{{record.cost}}</td><td>{{record.debit_balance}}</td><td>{{record.credit_balance}}</td><td><a href="edit_records.php?id={{record.abstract_id}}" class="btn btn-info">Edit</a></td><td><a  href="delete_record.php?id={{record.abstract_id}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">DELETE</a></td></tr>

<tr><th><form action="" method="POST">
				<input type="submit" name="xyz" value="Download CSV" class="btn btn-success" />
			
			</form></th><th></th><th></th><th></th><th></th><th></th><th> </th><th></th><th></th><th>{{saleSumAbstract.debit}}</th><th>{{saleSumAbstract.credit}}</th><th>SUM</th><th></th></tr></tbody>
		  </table>







		  <table ng-show="hidedata2" border="0" cellspacing="2" cellpadding="0" id="books" class="table table-bordered">
<tr><th>Voucher No.</th><th>Date</th><th>Name</th><th>Particulars</th><th>Whom</th><th>Product Id</th><th>Product Name</th><th>Quantity</th><th>Cost</th><th>Debit Balance</th><th>Credit Balance</th><th>Edit</th><th>Delete</th></tr></tbody>

	<tr ng-repeat="record in getCompData | filter:searchFromTable" ng-cloak><td>{{record.voucher_number}}</td><td>{{record.date}}</td><td><a href="get_info_of_account.php?account_name={{record.account_name}}" target="_blank">{{record.account_name}}</a></td><td>{{record.remark}}</td><td>{{record.whom}}</td><td>{{record.product_id}}</td><td>{{record.product_name}}</td><td>{{record.quantity}}</td><td>{{record.cost}}</td><td>{{record.debit_balance}}</td><td>{{record.credit_balance}}</td><td><a href="edit_records.php?id={{record.abstract_id}}" class="btn btn-info">Edit</a></td><td><a  href="delete_record.php?id={{record.abstract_id}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">DELETE</a></td></tr>

<tr><th></th><th></th><th></th><th></th><th></th><th></th><th> </th><th></th><th></th><th>{{getSumData.db}}</th><th>{{getSumData.cb}}</th><th>SUM</th><th></th></tr></tbody>
		  </table>








		</div>
	</div>

<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/angular.min.js"></script>
<script type="text/javascript" src="js/sale_abstract.js"></script>
</body>
</html>