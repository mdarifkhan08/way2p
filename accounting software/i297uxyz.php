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
$post_request=new PostRequest($DB_con);
if(isset($_POST['inventory_submit'])){
	$pid=trim($_POST['p_id']);
	$pname=trim($_POST['p_name']);
  $opening_stock=trim($_POST['opening_stock']);
	$pquantity=trim($_POST['p_quantity']);
	$pcost=trim($_POST['p_cost']);
	$stmt=$post_request->add_inventory($pid,$pname,$pquantity,$pcost,$opening_stock);
	if($stmt->rowCount()>0){
		$report="<div class='alert alert-success'>Added Successfully!</div>";
	}
  /*logActivity */
        $request_type_1='Post_user';
        $operation_table_1='inventory';
        
        $operation_page='i297uxyz.php';
        $operation_data_1='product_id:'.$pid.' product_name:'.$pname.' Openning Stock:'.$opening_stock.' product_quantity:'.$pquantity.' product_cost:'.$pcost;
        $operation_ip_1=$_SERVER['REMOTE_ADDR'];
        $operation_time=date("Y-m-d h:i:s");
        $post_request->log_activity($request_type_1,$operation_table_1,$operation_page,$operation_data_1, $operation_ip_1,$operation_time);
}
?>
<!DOCTYPE html>
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
	   $("#INVENTORY").validate({
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
<style type="text/css">
[ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
  display: none !important;
}
  </style>
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
	<div class="container" style="width:800px;overflow-x:auto;">
		<div class="col-sm-2"></div>
		<div class="col-sm-10" ng-app="myApp" ng-controller="mainController">
<br/><br/>
    <h1>Create Inventory</h1><br/><br/>
<?php if(isset($report))echo $report?>
<form method="POST" action="" id="INVENTORY" name="inventory">
<table border="0" cellspacing="2" cellpadding="0" id="books" class="table table-bordered">
<tbody>
<tr><th>Product Id</th><th>Product Name</th><th>Opening Stock</th><th>Product Quantity</th><th>Product Cost</th><th>Total Cost</th></tr></tbody>
<tbody>
<tr>
<td><input type="text" name="p_id" value="" ng-model="onType" ng-keyup="onTypeWords()" required>
<div ng-if="repeat.length>0" class="alert alert-danger" ng-cloak>Product Id Exists</div>

</td>
<td><input type="text" name="p_name" ng-model="p_name"></td>
<td><input type="text" name="opening_stock" ></td>
<td><input type="text" name="p_quantity" onKeyUp="opc(this)" ng-model="p_quantity"></td>
<td><input type="text" name="p_cost" onKeyUp="opc(this)" ng-model="p_cost"></td>
<td>
</td>
</tr>
<tr><td><input type="submit" value="SUBMIT" ng-disabled="disableButton()" class="btn btn-success" name="inventory_submit"></td><td></td><td></td><td></td><td></td><td></td></tr>
</tbody>
</table>
</form>
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

<script type="text/javascript">
var dg = document.getElementById('books');
function opc(e)
{
  if(dg)
  {
      var opc_r = e.parentNode.parentNode.rowIndex;
      if('' == dg.rows[opc_r].cells[3].childNodes[0].value || '.' == dg.rows[opc_r].cells[3].childNodes[0].value)
        var ee = 0;
      else
        var ee = parseFloat(dg.rows[opc_r].cells[3].childNodes[0].value);
      if('' == dg.rows[opc_r].cells[4].childNodes[0].value || '.' == dg.rows[opc_r].cells[4].childNodes[0].value)
        var pp =0;
      else
        var pp = parseFloat(dg.rows[opc_r].cells[4].childNodes[0].value);
      b=ee*pp;
      dg.rows[opc_r].cells[5].innerHTML=b;
  }
}
</script>
<script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular.min.js"></script>
<script type="text/javascript" src="https://code.angularjs.org/1.5.3/angular-messages.min.js"></script>
<script type="text/javascript" src="js/i297uxyz.js"></script>

</body>
</html>

