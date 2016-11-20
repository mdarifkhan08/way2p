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
<div class="col-sm-3"></div>
       <div class="col-md-8" id="padd"><br/><br/>
       <h1>Abstract</h1><br/><br/>
		  <input type="text"  placeholder="Voucher Search" ng-model="searchFromTable" class="form-control" /><br/><br/>
		  <input type="text"  placeholder="Account Name Search" ng-model="searchAccountTable" class="form-control" /><br/><br/>
		   <input type="text"  placeholder="whom Search" ng-model="searchWhomFromAccountTable" class="form-control" /><br/><br/>
		</div>
</div>
	<div class="container" style="width:800px;overflow-x:auto;" ng-controller="mainController">
		<div class="col-sm-1"></div>
		<div class="col-sm-9">
		

		 <table border="0" cellspacing="0" cellpadding="0" id="books" class="table table-bordered">
 <thead>                
      <tr ><th>Voucher No.</th><th>Date</th><th>Name</th><th>Particulars</th><th>Whom</th><th>Product Id</th><th>Product Name</th><th>Quantity</th><th>Cost</th><th>Debit Balance</th><th>Credit Balance</th><th>Edit</th><th>Delete</th></tr>  
    </thead>


</tbody>
	<tr  ng-repeat="record in abstractData | filter:{voucher_number: searchFromTable,account_name:searchAccountTable,whom:searchWhomFromAccountTable}" ng-cloak><td>{{record.voucher_number}}</td><td>{{record.date}}</td><td><a href="view_account.php?name={{record.account_name}}" target="_blank">{{record.account_name}}</a></td><td>{{record.remark}}</td><td>{{record.whom}}</td><td>{{record.product_id}}</td><td>{{record.product_name}}</td><td>{{record.quantity}}</td><td>{{record.cost}}</td><td class="count-me">{{record.debit_balance}}</td><td>{{record.credit_balance}}</td><td><a href="edit_records.php?id={{record.abstract_id}}" class="btn btn-info">Edit</a></td><td><a  href="delete_record.php?id={{record.abstract_id}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">DELETE</a></td></tr>

<tr><th></th><th></th><th></th><th></th><th></th><th></th><th> </th><th></th><th></th><th>{{abstractSumData.debit}}</th><th>{{abstractSumData.credit}}</th><th>SUM</th><th></th></tr></tbody>
		  </table>
		</div>
	</div>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/angular.min.js"></script>
<script type="text/javascript" src="js/a123123lxcv.js"></script>
</body>
</html>

