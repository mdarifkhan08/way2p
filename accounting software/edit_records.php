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
$inven=$get->view_inventory();
$name_id=$get->get_account_holder_name_id();

$g_id=$_GET['id'];
$get_record=$get->get_record_of_voucher_number($g_id);

$post_request=new PostRequest($DB_con);

if(isset($_POST['input_submit'])){
	$voucher=trim($_POST['voucher']);
	$date=trim($_POST['date']);
	$account_holder=trim($_POST['account_holder']);
	$particulars=trim($_POST['particulars']);
	$whom=trim($_POST['whom']);
	$product_id=trim($_POST['product_id']);
	$product_name=trim($_POST['product_name']);
	$quantity=trim($_POST['quantity']);
	$cost=trim($_POST['cost']);
     

    /*logActivity */
    $request_type_2='edit_user';
    $operation_table_2='abstract';
        
    $operation_page='edit_records.php';
    $operation_data_2='voucher_number:'.$voucher.' date:'.$date.' Account Holder:'.$account_holder.' Particulars:'.$particulars.' whom:'.$whom.' product_id:'.$product_id.' product_name:'.$product_name.' quantity:'.$quantity.' cost:'.$cost;
    $operation_ip_2=$_SERVER['REMOTE_ADDR'];
    $operation_time=date("Y-m-d h:i:s");
    $post_request->log_activity($request_type_2,$operation_table_2,$operation_page,$operation_data_2, $operation_ip_2,$operation_time);





	$get->return_back_privious_data($g_id,$product_id);
	$get->update_current_data_in_inventory($particulars,$quantity,$product_id);
	$get->update_current_data_in_abstract($g_id,$voucher,$date,$account_holder,$particulars,$whom,$product_id,$product_name,$quantity,$cost);


     
     
    



	
	header('Location: edit_records.php?id='.$g_id.'&report=success');
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
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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
<script type="text/javascript">
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
      $("#livesearch").val( xmlhttp.responseText );
    }
  }
  xmlhttp.open("GET","search_id.php?q="+str,true);
  xmlhttp.send();
}
</script>
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
		<div class="col-sm-1"></div>
		<div class="col-sm-9">
		
<?php if(isset($_GET['report'])){if($_GET['report']=='success'){?>
<div class="alert alert-success alert-dismissible fade in" role=alert> <button type=button class=close data-dismiss=alert aria-label=Close><span aria-hidden=true>&times;</span></button> <h4>Data Updated Successfully!</h4> </div>
<?php } }?>
		
		
		
		
		<h3>Editing Record Of Voucher Number: <span style="background-color:#449D44;color:white;"><?php echo $get_record['voucher_number']?></span></h3><br/><br/><br/>
			<form method="POST" action="" id="input_form">
<table border="0" cellspacing="2" cellpadding="0" id="books" class="table table-bordered">
<tbody>
<tr><th>Voucher No.</th><th>Date</th><th>Name</th><th>Particulars</th><th>Whom</th><th>Product Id</th><th>Product Name</th><th>Quantity</th><th>Cost</th><th>Debit Balance</th><th>Credit Balance</th></tr></tbody>
<tbody>
<tr class="odd">
<td nowrap><input type="text" name="voucher" id="v_n"  size="10" value="<?php echo $get_record['voucher_number']?>"></td>
<td align="center"><input type="text"  id="datepicker" name="date"  size="9" value="<?php echo $get_record['date']?>"></td>
<td><select name="account_holder"><option value="">-- select --</option><?php foreach ($name_id as $name){?><option value="<?= $name['account_name']?>" <?php if($get_record['account_name']==$name['account_name'])echo "selected";?>><?= $name['account_name']?></option><?php } ?></select></td>
<td><select name="particulars"><option value="">-- select --</option><option value="Payment" <?php if($get_record['remark']=='Payment')echo "selected";?>>Payment</option><option value="Receipt" <?php if($get_record['remark']=='Receipt')echo "selected";?>>Receipt</option><option value="Sale To" <?php if($get_record['remark']=='Sale To')echo "selected";?>>Sale To</option><option value="Purchase From" <?php if($get_record['remark']=='Purchase From')echo "selected";?>>Purchase From</option></select></td>
<td><input type="text" name="whom" value="<?php echo $get_record['whom']?>"/></td>
<td><select name="product_id" id="product_id" onchange="showResult(this.value)">
<option value="">-- select --</option>
<?php foreach ($inven as $get_inven){?>
<option name="<?php echo $get_inven['p_id']?>" <?php if($get_record['product_id']==$get_inven['p_id'])echo "selected";?>><?php echo $get_inven['p_id']?></option>
<?php } ?>
</select></td>
<td><input type="text" name="product_name" id="livesearch" value="<?php echo $get_record['product_name']?>" onchange="showQuantity(this.value)" readonly onclick="info()"/></td>
<td ><input type="text" name="quantity" id="quantity" size="6" value="<?php echo $get_record['quantity']?>" onKeyUp="oku_q(this);"/></td>
<td><input type="text" name="cost" value="<?php echo $get_record['cost']?>" onKeyUp="opc(this)"/></td>
<td class="n" nowrap><?php echo $get_record['debit_balance']?></td>
<td class="n" nowrap><?php echo $get_record['credit_balance']?></td>
</tr>
<tr><td><input type="submit" value="SUBMIT" class="btn btn-success" name="input_submit"></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</tbody>
</table>
</form>
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
	});
</script>
<script>
  $(function() {
    $( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd',
    	constrainInput: false});
  });
</script>
<script type="text/javascript">

function info(){
	alert("For Product Name Please Select Product Id!");
}

var dg = document.getElementById('books');

function opc(e)
{
  if(dg)
  {
    var opc_r = e.parentNode.parentNode.rowIndex;

    if(dg.rows[opc_r].cells[3].childNodes[0].value==''){
        alert('Please Select Particulars Section First');
    }

    else if(dg.rows[opc_r].cells[3].childNodes[0].value=='Sale To'){
    	dg.rows[opc_r].cells[9].innerHTML = 0.00;
    	dg.rows[opc_r].cells[10].innerHTML = 0.00;
        
    	    if('' == dg.rows[opc_r].cells[7].childNodes[0].value || '.' == dg.rows[opc_r].cells[7].childNodes[0].value)
            var ee = 0;
          else
            var ee = parseFloat(dg.rows[opc_r].cells[7].childNodes[0].value);
          if('' == dg.rows[opc_r].cells[8].childNodes[0].value || '.' == dg.rows[opc_r].cells[8].childNodes[0].value)
            var pp = 0;
          else
            var pp = parseFloat(dg.rows[opc_r].cells[8].childNodes[0].value);

          b = ee*pp;
          
          dg.rows[opc_r].cells[9].innerHTML = b;
        
    }
    else if(dg.rows[opc_r].cells[3].childNodes[0].value=='Payment'){
    	dg.rows[opc_r].cells[7].innerHTML = '';

    	if('' == dg.rows[opc_r].cells[8].childNodes[0].value || '.' == dg.rows[opc_r].cells[8].childNodes[0].value)
        var pp = 0;
    	else
    	var pp = parseFloat(dg.rows[opc_r].cells[8].childNodes[0].value);
    	dg.rows[opc_r].cells[9].innerHTML = pp;
 
    	
    }
    else if(dg.rows[opc_r].cells[3].childNodes[0].value=='Receipt'){
    	dg.rows[opc_r].cells[7].innerHTML = '';

    	if('' == dg.rows[opc_r].cells[8].childNodes[0].value || '.' == dg.rows[opc_r].cells[8].childNodes[0].value)
        var pp = 0;
    	else
    	var pp = parseFloat(dg.rows[opc_r].cells[8].childNodes[0].value);
    	dg.rows[opc_r].cells[10].innerHTML = pp;
    }
    else{

    	dg.rows[opc_r].cells[9].innerHTML = 0.00;
    	dg.rows[opc_r].cells[10].innerHTML = 0.00;
    	 if('' == dg.rows[opc_r].cells[7].childNodes[0].value || '.' == dg.rows[opc_r].cells[7].childNodes[0].value)
             var ee = 0;
           else
             var ee = parseFloat(dg.rows[opc_r].cells[7].childNodes[0].value);
           if('' == dg.rows[opc_r].cells[8].childNodes[0].value || '.' == dg.rows[opc_r].cells[8].childNodes[0].value)
             var pp = 0;
           else
             var pp = parseFloat(dg.rows[opc_r].cells[8].childNodes[0].value);

           b = ee*pp;
           
           dg.rows[opc_r].cells[10].innerHTML = b;
    }
  }
}



function oku_q(e){
	if(dg)
	  {
	    var opc_r = e.parentNode.parentNode.rowIndex;

	    if(dg.rows[opc_r].cells[5].childNodes[0].value==''){
	        alert('Please Select Product Id First');
	    }
	    
	    else if(dg.rows[opc_r].cells[3].childNodes[0].value=='Sale To'){
	    	if (window.XMLHttpRequest) {
		        // code for IE7+, Firefox, Chrome, Opera, Safari
		        xmlhttp=new XMLHttpRequest();
		      } else {  // code for IE6, IE5
		        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		      }
		      xmlhttp.onreadystatechange=function() {
		        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		          if(xmlhttp.responseText==true){
		               alert('Quantity Can not more than available quantity');
		          }
		        }
		      }
		      var pid=dg.rows[opc_r].cells[5].childNodes[0].value;
		      var sid=dg.rows[opc_r].cells[7].childNodes[0].value;
		      xmlhttp.open("GET","get_quantity.php?q="+pid+"&l="+sid,true);
		      xmlhttp.send();
		  }
        }
}
</script>


</body>
</html>