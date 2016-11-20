<?php
include_once 'dbconfig.php';
require_once ('class.admin.php');

$admin = new Admin ( $DB_con );
if ($admin->is_loggedin () == "") {
	$admin->redirect ( 'admin.php' );
}

require_once 'class.getData.php';
$get = new GetData ( $DB_con );
$name_id = $get->get_account_holder_name_id ();

if (isset ( $_GET ["page"] )) {
	$page = $_GET ["page"];
} else {
	$page = 1;
}

if(isset($_POST['per_page'])){
	$per_page=$_POST['per_page'];
	header('Location: get_info_of_account.php?account_name='.$_GET ['account_name'].'&page='.$page.'&per_page='.$per_page);
}
else if(isset($_GET['per_page'])){
	$per_page = $_GET['per_page'];
}
else{
	$per_page = 10;
}

$start_from = ($page - 1) * $per_page;

$data = $get->getAccountInfo ($_GET['account_name'],$start_from,$per_page );

/* $data = $get->getAccountInfo_pagination($_GET ['account_name'],$_GET ['account_name'],$_GET ['account_name'] ); */

$get_sum = $get->get_sum_of_abstract_data_for_same_name ( $_GET ['account_name'] );


if (isset ( $_POST ['xyz'] )) {
	$randnum = rand ( 1111111111, 9999999999 );
	if (isset ( $data [0] )) {
		$fp = fopen ( "Csvfiles/file_$randnum.csv", "w" );
		$head = array (
				"Order Id",
				"Customer",
				"Status",
				"Total",
				"Date Added",
				"Date Modified",
		);
		fputcsv ( $fp, $head );
		foreach ( $data as $values ) {
			fputcsv ( $fp, $values );
		}
		$sum = array (
				"-",
				"-",
				"-",
				"SUM",
				$get_sum ['debit'],
				$get_sum ['credit'],
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
<script type="text/javascript">
$(document).ready(function(){
	$('.select1').change(function(){
         $('.myForm').trigger('submit');
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
			</div>
		</nav>
	</div>
	<div class="container">
		<div class="col-sm-2"></div>
		<div class="col-sm-10">
		<div class="col-md-8" id="padd">
			<form action="" method="">
						<input type="text" name="" placeholder="Search Voucher"
							onkeyup="showResult(this.value)" class="form-control" />
				<div id="livesearch"></div>
				<br/><br/>
			</form>
		</div>
		
			<form action="" method="POST" class="myForm" style="float: right;">
			<div class="form-group">
			<label>Show Records</label>
			<select name="per_page" class="select1">
				<option value="15" <?php if (isset($_GET['per_page'])){ if($_GET['per_page']==15){echo 'selected';};}?>>15</option>
				<option value="25" <?php if (isset($_GET['per_page'])){ if($_GET['per_page']==25){echo 'selected';};}?>>25</option>
				<option value="50" <?php if (isset($_GET['per_page'])){if($_GET['per_page']==50){echo 'selected';};} ?>>50</option>
				<option value="75" <?php if (isset($_GET['per_page'])){ if($_GET['per_page']==75){echo 'selected';};} ?>>75</option>
				<option value="100" <?php if(isset($_GET['per_page'])){if($_GET['per_page']==100){echo 'selected';};} ?>>100</option>
			</select>
			</div>
			
			</form>
			<table class="table table-bordered" class="table1">
				<tr class="row">
				<td>Voucher No</td>
					<td>Date</td>
					<td>Name</td>
					<td>Particulars</td>
					<td>Product Name</td>
					<td>Debit Balance</td>
					<td>Credit Balance</td>
					
				</tr>
		  <?php foreach ($data as $d){?>
		      <tr class="row">
					<td><?= $d['voucher_number']?></td>
					<td><?= $d['date']?></td>
					<td><?= $d['account_name']?></td>
					<td><?= $d['remark']?></td>
					<td><?= $d['product_name']?></td>
					<td><?= $d['debit_balance']?></td>
					<td><?= $d['credit_balance']?></td>
				</tr>
		  <?php } ?>
		  <tr class="row">
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>SUM</td>
					<td><?= $get_sum['debit']?></td>
					<td><?= $get_sum['credit']?></td>
				</tr>
			</table>
		</div>
	</div>
	<div class="container">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<br/><br/>
			<form action="" method="POST">
				<input type="submit" name="xyz" value="Download CSV" class="btn btn-success" />
			
			</form>
			
			<div class='bs-example' data-example-id='simple-pagination'
				align="center">
				<nav>
					<ul class='pagination'>
	 <?php
		
		$stmt123 = $DB_con->prepare ( "select SQL_CALC_FOUND_ROWS * from abstract where account_name=:account_name and voucher_number is not null LIMIT "."$start_from".",$per_page");
		$stmt123->bindparam ( ':account_name', $_GET ['account_name'] );
		$stmt123->execute ();
		$stmt123 = $DB_con->prepare ( "SELECT FOUND_ROWS()" );
		$stmt123->execute ();
		$total_records = $stmt123->fetchColumn();
		$total_pages = ceil ( $total_records / $per_page );
		$getAccountInfo = $stmt123->fetchAll ( PDO::FETCH_ASSOC );
?>

<?php
for($i = 1; $i <= $total_pages; $i ++) 
{
?>
<li><a href="<?php echo 'get_info_of_account.php?account_name='.$_GET ['account_name'].'&page='.$i.'&per_page='.$per_page?>"><?php echo $i?></a></li>
<?php
}
?>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<br />
	<br />

	
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


</body>
</html>

