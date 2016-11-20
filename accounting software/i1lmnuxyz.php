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
$inven=$get->view_inventory();
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
	$stmt =$DB_con->prepare("INSERT INTO abstract(voucher_number,date,account_name,remark,whom,product_id,product_name,quantity,cost,debit_balance,credit_balance) VALUES(:voucher_number,:date,:account_name,:remark,:whom,:product_id,:product_name,:quantity,:cost,:debit_balance,:credit_balance)");
	$stmt->bindParam(':voucher_number',$voucher);
		$stmt->bindParam(':date',$date);
		$stmt->bindParam(':account_name',$account_holder);
		$stmt->bindParam(':remark',$particulars);
		$stmt->bindParam(':whom',$whom);
		$stmt->bindParam(':product_id',$product_id);
		$stmt->bindParam(':product_name',$product_name);
		$stmt->bindParam(':quantity',$quantity);
		$stmt->bindParam(':cost',$cost);
		if($particulars=='Sale To'){
			$credit_balance=0;
			$debit_balance=$quantity*$cost;
			$stmt2 =$DB_con->prepare("select * from inventory where p_id=:product_id");
			$stmt2->bindParam(':product_id',$product_id);
			$stmt2->execute();
			$getData=$stmt2->fetch(PDO::FETCH_ASSOC);
			$p_q=$getData['p_quantity'];
			$Remaining_quantity=$p_q-$quantity;
			$stmt1 =$DB_con->prepare("update inventory set p_quantity=:p_quantity where p_id=:product_id");
			$stmt1->bindParam(':p_quantity',$Remaining_quantity);
			$stmt1->bindParam(':product_id',$product_id);
			$stmt1->execute();
		}
		else if($particulars=='Payment'){
			$credit_balance=0;
			$debit_balance=$cost;
		}
		else if($particulars=='Receipt'){
			$debit_balance=0;
			$credit_balance=$cost;
		}
		else{
			$credit_balance=$quantity*$cost;
			$debit_balance=0;
			$stmt2 =$DB_con->prepare("select * from inventory where p_id=:product_id");
			$stmt2->bindParam(':product_id',$product_id);
			$stmt2->execute();
			$getData=$stmt2->fetch(PDO::FETCH_ASSOC);
			$p_q=$getData['p_quantity'];
			$Remaining_quantity=$p_q+$quantity;
			$stmt1 =$DB_con->prepare("update inventory set p_quantity=:p_quantity where p_id=:product_id");
			$stmt1->bindParam(':p_quantity',$Remaining_quantity);
			$stmt1->bindParam(':product_id',$product_id);
			$stmt1->execute();
		}
		$stmt->bindParam(':debit_balance',$debit_balance);
		$stmt->bindParam(':credit_balance',$credit_balance);
		$stmt->execute();
        /*logActivity */
        $request_type_1='Post_user';
        $operation_table_1='abstract';
        
        $operation_page='i1lmnuxyz.php';
        $operation_data_1='voucher_number:'.$voucher.' date:'.$date.' account_name:'.$account_holder.' remark:'.$particulars.' whom:'.$whom.' product_id:'.$product_id.' product_name:'.$product_name.' quantity:'.$quantity.' cost:'.$cost.' debit_balance:'.$debit_balance.' credit_balance'.$credit_balance;
        $operation_ip_1=$_SERVER['REMOTE_ADDR'];
        $operation_time=date("Y-m-d h:i:s");
        $post_request->log_activity($request_type_1,$operation_table_1,$operation_page,$operation_data_1, $operation_ip_1,$operation_time);


        $request_type_2='edit_programming';
        $operation_table_2='inventory';
        $operation_data_2='change_product_quantity:'.$Remaining_quantity.' where_product_id:'.$product_id;
        $operation_ip_2='';
        $post_request->log_activity($request_type_2,$operation_table_2,$operation_page,$operation_data_2, $operation_ip_2,$operation_time);

		header('Location: i1lmnuxyz.php?report=success');
	}

?>
<html ng-app="myApp">

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
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
</head>

<body ng-controller="mainController">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
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
            
            <div class="col-md-6 col-md-offset-3"> <br/> <br/>
<h1>Account Input</h1> <br/> <br/>
                <?php if(isset($_GET[ 'report'])){if($_GET[ 'report']=='success' ){?>
                <div class="alert alert-success alert-dismissible fade in" role=alert>
                    <button type=button class=close data-dismiss=alert aria-label=Close><span aria-hidden=true>&times;</span>
                    </button>
                    <h4>Data Inserted Successfully!</h4> </div>
                <?php } }?>

                <form method="POST" action="" id="input_form" name="myForm">
                    <table border="0" cellspacing="2" cellpadding="0" id="books" style="padding:5px;" class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Voucher No.</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Particulars</th>
                                <th>Whom</th>
                                <th>Product Id</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Cost</th>
                                <th>Debit Balance</th>
                                <th>Credit Balance</th>
                           </tr>
							<tr>
							     <td>
                                    <input type="text" name="voucher" required>
                                 </td>
							     <td align="center">
                                    <input type="text" id="datepicker" placeholder="yyyy-mm-dd" name="date" required>
                                </td>
								<td>
                                    <select name="account_holder" required>
                                        <option value="">-- select --</option>
										<?php foreach ($name_id as $name){?>
                                        <option value="<?= $name['account_name']?>">
                                        <?=$name[ 'account_name']?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </td>
								 <td>
                                    <select name="particulars" ng-model="particulars" ng-change="doOperation(particulars)" required>
                                        <option value="">-- select --</option>
                                        <option value="Payment">Payment</option>
                                        <option value="Receipt">Receipt</option>
                                        <option value="Sale To">Sale To</option>
                                        <option value="Purchase From">Purchase From</option>
                                    </select>
                                </td>
								<td>
                                    <input type="text" name="whom" />
                                </td>
								<td>
                                    <select name="product_id" ng-model="product_id" ng-change="showResult(product_id)" >
                                        <option value="">-- select --</option>
                                        <?php foreach ($inven as $get_inven){?>
                                        <option name="<?php echo $get_inven['p_id']?>"><?php echo $get_inven['p_id']?></option>
                                        <?php } ?>
                                    </select>
                                </td>
								 <td>
                                    <input type="text" name="product_name" ng-model="product_name" id="livesearch" readonly />
                                </td>
								<td>
                                    <input type="text" name="quantity" ng-model="quantity" autocomplete="off" ng-keyup="keyUpOnCost()" ng-disabled="disableQuantity" required/>
									<div class="alert" ng-show="operationName=='Sale To'" ng-class="{'alert-success':availableQuantity.p_quantity-quantity>=0,'alert-danger':availableQuantity.p_quantity-quantity<0}">Available Quantity: {{availableQuantity.p_quantity-quantity}}</div>
                                </td>
								<td>
                                    <input type="text" name="cost" ng-model="cost" ng-keyup="keyUpOnCost()" autocomplete="off" />
                                </td>
								<td>{{db}}</td>
								 <td>{{cb}}</td>
								</tr>
								<tr>
								<td>
                                    <input type="submit" value="SUBMIT" class="btn btn-success" name="input_submit" ng-disabled="availableQuantity.p_quantity-quantity<0">
                                </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								</tr>
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
            });
        </script>
        <script>
            $(function() {
                $("#datepicker").datepicker({
                    dateFormat: 'yy-mm-dd',
                    constrainInput: false
                });
            });
        </script>
		
        <script type="text/javascript" src="js/angular.min.js"></script>
		<script type="text/javascript" src="https://code.angularjs.org/1.5.5/angular-messages.min.js"></script>
        <script type="text/javascript">
	var app = angular.module('myApp', []);

    app.controller('mainController', ['$scope','$http','$location', function($scope,$http,$location) {

if($location.host()=='localhost'){
   var arraydata=window.location.pathname.split('/');
   var mypath='/'+arraydata[1];
}
else{
var mypath='';
}
    



	$scope.showResult = function(str) {
		if (str.length == 0) {
			document.getElementById("livesearch").innerHTML = "";
			document.getElementById("livesearch").style.border = "0px";
			return;
		}
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else { // code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {

			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				$("#livesearch").val(xmlhttp.responseText);
			}
		}
		xmlhttp.open("GET", "search_id.php?q=" + str, true);
		xmlhttp.send();
	}


	$scope.operationName = '';

	$scope.doOperation = function(str) {
		if (str == 'Payment') {
			$scope.operationName = 'Payment';
			$scope.disableQuantity = true;
			$scope.quantity = '';
		} else if (str == 'Sale To') {
			$scope.operationName = 'Sale To';
			$scope.disableQuantity = false;
            $scope.availableQuantity={p_quantity:0};
		} else if (str == 'Purchase From') {
			$scope.operationName = 'Purchase From';
			$scope.disableQuantity = false;
            $scope.availableQuantity={p_quantity:1000000000000000000000};
		} else {
			$scope.operationName = 'Receipt';
			$scope.disableQuantity = true;
			$scope.quantity = '';
		}
	}

	$scope.keyUpOnCost = function() {
		if ($scope.operationName == '') {} else {
			if ($scope.operationName == 'Payment') {
				$scope.db = $scope.cost;
				$scope.cb = '';
				$scope.disableQuantity = true;
			} else if ($scope.operationName == 'Receipt') {
				$scope.cb = $scope.cost;
				$scope.db = '';
				$scope.disableQuantity = true;
			} else if ($scope.operationName == 'Sale To') {
				$scope.db = $scope.quantity * $scope.cost;
				$scope.cb = '';
                $scope.availableQuantity={p_quantity:0};
                $http.get(mypath+'/angularjs/interface/get/quantity/'+$scope.product_id)
                .success(function(result){
          	     $scope.availableQuantity=result;
                 console.log($scope.availableQuantity);

                })
                .error(function(data,status){console.log(status)});

			} else {
				$scope.cb = $scope.quantity * $scope.cost;
				$scope.db = '';
                $scope.availableQuantity={p_quantity:1000000000000000000000};
			}
		}
	}
}]);
		</script>
</body>
</html>