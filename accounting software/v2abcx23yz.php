<?php
include_once 'dbconfig.php';
require_once('class.admin.php');
$admin=new Admin($DB_con);
if ($admin->is_loggedin () == "") {
	$admin->redirect ( 'admin.php' );
}
require_once 'class.postrequest.php';
require_once 'class.getData.php';
$get=new GetData($DB_con);
$name_id=$get->get_account_holder_name_id();
/*view Inventory*/
$inventory=$get->view_inventory();
$get_sum_in=$get->get_sum_for_inventory();
$get_opening_sum=$get->getSumOfOpeningBalance();
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
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
   $("#input_form").validate({
      rules: {
         "voucher": {
             required: true,
             number: true
           },
         "date": {
             required: true,
             date: true
           },
         "account_holder": "required",
         "particulars": "required",
         "whom": "required",
         "product_id": "required",
         "product_name": "required",
         "quantity":  {
             required: true,
             number: true
           },
         "cost": {
             required: true,
             number: true
           },
         "debit": {
             required: true,
             number: true
           },
         "credit": {
             required: true,
             number: true
           },
        },
      messages: {
    	  "voucher": {
              required: "<span style='color:red'>field required</span>",
              number: "<span style='color:red'>number only</span>"
            },
          "date": {
              required: "<span style='color:red'>field required</span>",
              date: "<span style='color:red'>date only</span>"
            },
          "account_holder": "<span style='color:red'>field required</span>",
          "particulars": "<span style='color:red'>field required</span>",
          "whom": "<span style='color:red'>field required</span>",
          "product_id": "<span style='color:red'>field required</span>",
          "product_name": "<span style='color:red'>field required</span>",
          "quantity": {
              required: "<span style='color:red'>field required</span>",
              number: "<span style='color:red'>number only</span>"
            },
          "cost": {
              required: "<span style='color:red'>field required</span>",
              number: "<span style='color:red'>number only</span>"
            },
          "debit": {
              required: "<span style='color:red'>field required</span>",
              number: "<span style='color:red'>number only</span>"
            },
          "credit": {
              required: "<span style='color:red'>field required</span>",
              number: "<span style='color:red'>number only</span>"
            },
        }
   });
});
</script>
<script src="main2.js"></script>
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
	<div class="container" >
		<div class="col-sm-3"></div>
		<div class="col-sm-9">
    <br/> <br/>
			<h1>View Inventory</h1> <br/> <br/>
<table border="0" cellspacing="2" cellpadding="0" id="books" class="table table-bordered">
<tbody>
<tr><th>Product Id</th><th>Product Name</th><th>Opening Stock</th><th>Product Quantity</th><th>Product Cost</th><th>Total Cost</th><th>Opening Balance</th><th>EDIT</th><th>DELETE</th></tr></tbody>
<tbody>
<?php foreach ($inventory as $get_value) {?>
<tr>
<td><a target="_blank" href="getDataOnClickInveId.php?pid=<?php echo $get_value['p_id']?>"><?php echo $get_value['p_id']?></a></td>
<td><?php echo $get_value['p_name']?></td>
<td><?php echo $get_value['p_quantity_opening_stock']?></td>
<td><?php echo $get_value['p_quantity']?></td>
<td><?php echo $get_value['p_cost']?></td>
<td><?php echo $get_value['p_t']?></td>
<td><?php echo $get_value['opening_bal']?></td>
<td><a  href="editInventory.php?id=<?php echo $get_value['id']?>" class="btn btn-info">EDIT</a></td>
<td><a  href="deleteInventory.php?id=<?php echo $get_value['id']?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">DELETE</a></td>
</tr>
<?php }?>
<tr><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td><?= $get_sum_in['pq_sum']?></td><td><?= $get_opening_sum['opening_sum']?></td><td>SUM</td><td>-</td></tr>
</tbody>
</table>
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
</body>
</html>

