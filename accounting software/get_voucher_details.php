<?php
include_once 'dbconfig.php';
require_once('class.admin.php');

$admin=new Admin($DB_con);
if ($admin->is_loggedin () == "") {
	$admin->redirect ( 'admin.php' );
}
require_once('class.getData.php');

$get=new GetData($DB_con);
$get = new GetData ( $DB_con );
$name_id = $get->get_account_holder_name_id ();

$d=$get->get_voucher_details($_GET['voucher_number']);
?>
<!DOCTYPE HTML>
<html  ng-app="">
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

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="books.js"></script>
</head>
<body>
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
					<a class="navbar-brand" href="index.php">Admin</a>
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
		<div class="col-sm-2"></div>
		<div class="col-sm-10">
		<table class="table table-bordered">
		<tr><td>Voucher Number</td><td>Date</td><td>Name</td><td>Debit Bal</td><td>Credit Bal</td><td>Remark</td></tr>
		 <?php foreach ($d as $data){?>
		 <tr><td><?php echo $data['voucher_number']?></td><td><?php echo $data['date']?></td><td><?php echo $data['account_name']?></td><td><?php echo $data['debit_balance']?></td><td><?php echo $data['credit_balance']?></td><td><?php echo $data['remark']?></td></tr>
		<?php }?>
		</table>
		</div>
	</div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<script src="js/bootstrap.min.js">
</script>
<script type="text/javascript">
	$('#myTabs a').click(function(e) {
		e.preventDefault()
	    $(this).tab('show')
	})
</script>
<script>
  $(function() {
    $( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd',
    	constrainInput: false});
    
  });
</script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>
</body>
</html>

