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
$data=$get->getDataForReceiptAbstract();
$data1=$get->getDataForReceiptAndAbstractOrWhomSearch();


if(isset($_POST['submit'])){
	$whom=trim($_POST['whom']);
	$data=$get->getDataForReceiptWhomSearch($whom);
	$data1=$get->getSumDataForReceiptAbstractOrWhomSearch($whom);
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
    <div class="col-sm-3"></div>
         <div class="col-md-8" id="padd"><br/><br/>
              <h1>Receipt Abstract</h1><br/><br/>
            <table class="table table-bordered">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <tr><td> <input type="text" name="whom" class="form-control" placeholder="whom search" ></td><td><input type="submit" name="submit" class="btn btn-primary"></td></tr>
                </form>
            </table>
	     </div>
    </div>
    <br/><br/> <br/><br/>
	<div class="container" style="width:800px;overflow-x:auto;" ng-controller="mainController">
		<div class="col-sm-1"></div>
		<div class="col-sm-9">
	           <table border="0" cellspacing="0" cellpadding="0" id="books" class="table table-bordered">
                  <thead>                
                     <tr ><th>Voucher No.</th><th>Date</th><th>Name</th><th>Particulars</th><th>Whom</th><th>Product Id</th><th>Product Name</th><th>Quantity</th><th>Cost</th><th>Debit Balance</th><th>Credit Balance</th><th>Edit</th><th>Delete</th></tr>  
                 </thead>
                 </tbody>
	                 <?php foreach($data as $datas){?>
                     <tr><th><?= $datas['voucher_number']?></th><th><?= $datas['date']?></th><th><?= $datas['account_name']?></th><th><?= $datas['remark']?></th><th><?= $datas['whom']?></th><th><?= $datas['product_id']?></th><th><?= $datas['product_name']?></th><th><?= $datas['quantity']?></th><th><?= $datas['cost']?></th><th><?= $datas['debit_balance']?></th><th><?= $datas['credit_balance']?></th><th><a href="edit_records.php?id=<?= $datas['abstract_id']?>" class="btn btn-info">Edit</a></th><th><a  href="delete_record.php?id=<?= $datas['abstract_id']?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">DELETE</a></th></tr>
                     <?php }?>
                  </tbody>
                  <tfoot>
                  	 <tr><th></th><th></th><th></th><th></th><th></th><th></th><th> </th><th></th><th></th><th><?= $data1['db']?></th><th><?= $data1['cb']?></th><th>SUM</th><th></th></tr>
                  </tfoot>
	           </table>
		</div>
	</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

