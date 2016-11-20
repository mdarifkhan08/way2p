<?php
include_once 'dbconfig.php';
require_once('class.admin.php');
$admin=new Admin($DB_con);
if ($admin->is_loggedin () == "") {
	$admin->redirect ( 'admin.php' );
}
require_once 'class.postrequest.php';
require_once 'class.getData.php';
require_once 'class.getDataForExpenses.php';
$get2=new GetDataForExpenses($DB_con);
$get=new GetData($DB_con);
$name_id=$get->get_account_holder_name_id();


$account_names=$get2->getExpensesAccountHolderName();

$post_request=new PostRequest($DB_con);
if(isset($_POST['input_submit'])){
	$account_name=trim($_POST['account_name']);
	$date=trim($_POST['date']);
    $whom=trim($_POST['whom']);
	$particulars=trim($_POST['remark']);
	$cost=trim($_POST['cost']);
	$stmt =$DB_con->prepare("INSERT INTO expenses_abstract(account_name,date,whom,remark,debit,credit) VALUES(:account_name,:date,:whom,:remark,:debit,:credit)");
	    $stmt->bindParam(':account_name',$account_name);
		$stmt->bindParam(':date',$date);
		$stmt->bindParam(':whom',$whom);
		$stmt->bindParam(':remark',$particulars);
        if($particulars=='Debit'){
            $cost1=0.00;
            $cost2=$cost;
        $stmt->bindParam(':debit',$cost2);
        $stmt->bindParam(':credit', $cost1);
        }else{
          $cost1=0.00;
            $cost2=$cost;
        $stmt->bindParam(':debit',$cost1);
        $stmt->bindParam(':credit', $cost2);
        }
		
		$stmt->execute();
        
        /*logActivity */
        $request_type_1='Post_user';
        $operation_table_1='expenses_abstract';
        $operation_page='expenses_input.php';
        $operation_data_1='account_name:'.$account_name.' date:'.$date.' whom:'.$whom.' remark:'.$particulars.' cost:'.$cost;
        $operation_ip_1=$_SERVER['REMOTE_ADDR'];
        $operation_time=date("Y-m-d h:i:s");
        $post_request->log_activity($request_type_1,$operation_table_1,$operation_page,$operation_data_1, $operation_ip_1,$operation_time);

	}
?>
<html>
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

<body>
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
            <div class="col-md-6 col-md-offset-3"><br/><br/>
           <h1>Assets Input</h1><br/><br/>
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
                                <th>Name</th>
                                <th>Date</th>
                                <th>Whom</th>
                                <th>Particulars</th>
                           </tr>
							<tr>
							     <td>
                                    <select name="account_name" required="required">
                                       <option value="">--select--</option>
                                       <?php foreach($account_names as $names){ ?>
                                       <option value="<?php echo $names['account_name'] ?>"><?php echo $names['account_name'] ?></option>
                                       <?php }?>
                                    </select>
                                 </td>
							     <td align="center">
                                    <input type="text" id="datepicker" placeholder="yyyy-mm-dd" name="date" required>
                                </td>
								<td>
                                    <input type="text" name="whom" />
                                </td>
								<td>
                                <select name="remark" required>
                                    <option value="">--select--</option>
                                    <option value="Debit">Debit</option>
                                    <option value="Credit">Credit</option>
                                </select>

                                <br/><br/>
                                    <input type="number" name="cost" />
                                </td>
								</tr>
								<tr>
								<td>
                                    <input type="submit" value="SUBMIT" class="btn btn-success" name="input_submit">
                                </td>
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
</body>
</html>