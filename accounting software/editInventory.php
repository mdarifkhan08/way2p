<?php
include_once 'dbconfig.php';
require_once('class.admin.php');

$admin=new Admin($DB_con);
if ($admin->is_loggedin () == "") {
	$admin->redirect ( 'admin.php' );
}

require_once 'class.postrequest.php';

$post_request=new PostRequest($DB_con);

require_once 'class.getData.php';

$get=new GetData($DB_con);
$name_id=$get->get_account_holder_name_id();

$data_from_inventory=$get->get_data_for_edit_inventory($_GET['id']);

if(isset($_POST['update'])){
	
	$pid=trim($_POST['product_id']);
	$pname=trim($_POST['product_name']);
    $opening_stock=trim($_POST['opening_stock']);
	$pquantity=trim($_POST['product_quantity']);
	$pcost=trim($_POST['product_cost']);
	$id=trim($_POST['i_d']);
	
	$post_request->edit_inventory($pid,$pname,$pquantity,$pcost,$id,$opening_stock);

    /*logActivity */
        $request_type_1='edit_user';
        $operation_table_1='inventory';
        $operation_page='editInventory.php';
        $operation_data_1='product_id:'.$pid.' product_name:'.$pname.' Openning Stock:'.$opening_stock.' product_quantity:'.$pquantity.' product_cost:'.$pcost.' where product_id is:'.$id;
        $operation_ip_1=$_SERVER['REMOTE_ADDR'];
        $operation_time=date("Y-m-d h:i:s");
        $post_request->log_activity($request_type_1,$operation_table_1,$operation_page,$operation_data_1, $operation_ip_1,$operation_time);




	
	header('Location: editInventory.php?id='.$id.'&report=success');	
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
<script src="js/pie-chart.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(
			function() {
				$('#demo-pie-1').pieChart(
						{
							barColor : '#3bb2d0',
							trackColor : '#eee',
							lineCap : 'round',
							lineWidth : 8,
							onStep : function(from, to, percent) {
								$(this.element).find('.pie-value').text(
										Math.round(percent) + '%');
							}
						});
				$('#demo-pie-2').pieChart(
						{
							barColor : '#fbb03b',
							trackColor : '#eee',
							lineCap : 'butt',
							lineWidth : 8,
							onStep : function(from, to, percent) {
								$(this.element).find('.pie-value').text(
										Math.round(percent) + '%');
							}
						});
				$('#demo-pie-3').pieChart(
						{
							barColor : '#ed6498',
							trackColor : '#eee',
							lineCap : 'square',
							lineWidth : 8,
							onStep : function(from, to, percent) {
								$(this.element).find('.pie-value').text(
										Math.round(percent) + '%');
							}
			});
});
</script>
<script src="js/skycons.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#datepicker" ).datepicker({dateFormat: 'dd-mm-yy',
    	constrainInput: false});
    
  });
</script>
<script type="text/javascript">
$(document).ready(function(){
	$('#submit_post_request').keyup(function(){
		$.ajax({
			type:'POST',
			url:'ajaxFunctions.php',
			data:$('#send-post-request-form').serialize(),
			cache:false,
			success:function(result){
				$('#bal').empty().append('<p id = "response">' + result + '</p>');
			}
		  });
	});

	$('#submit_post_request1').keyup(function(){
		$.ajax({
			type:'POST',
			url:'ajaxFunctions2.php',
			data:$('#send-post-request-form').serialize(),
			cache:false,
			success:function(result){
				$('#bal').empty().append('<p id = "response">' + result + '</p>');
			}
		  });
	});
});
</script>

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
		
		<div class="col-sm-2"></div>
		<div class="col-sm-10">

<?php if(isset($_GET['report'])){if($_GET['report']=='success'){?>
<div class="alert alert-success alert-dismissible fade in" role=alert> <button type=button class=close data-dismiss=alert aria-label=Close><span aria-hidden=true>&times;</span></button> <h4>Data Update Successfully!</h4> </div>
<?php } }?>

			<table class="table table-bordered">
			<form action="" method="POST">
			  <tr><th>Product Id</th><td><input type="text" name="product_id" value="<?= $data_from_inventory['p_id']?>" class="form-control"/></td></tr>
			  <tr><th>Product Name</th><td><input type="text" name="product_name" value="<?= $data_from_inventory['p_name']?>" class="form-control"/></td></tr>
			 <tr><th>Opening Stock</th><td><input type="text" name="opening_stock" value="<?= $data_from_inventory['p_quantity_opening_stock']?>" class="form-control"/></td></tr>
			  <tr><th>Product Quantity</th><td><input type="text" name="product_quantity" value="<?= $data_from_inventory['p_quantity']?>" class="form-control"/></td></tr>
			  <tr><th>Product Cost</th><td><input type="text" name="product_cost" value="<?= $data_from_inventory['p_cost']?>" class="form-control"/></td></tr>
			   <input type="hidden" name="i_d" value="<?= $_GET['id']?>"/>
			  <tr><th></th><td><input type="submit" name="update" value="Update" class="btn btn-success"/></td></tr>
			  </form>
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
</body>
</html>