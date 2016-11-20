<?php 
include_once 'dbconfig.php';
include_once 'class.postrequest.php';

$post_request=new PostRequest($DB_con);
$name=$_GET['name'];

if(isset($_POST['submit'])){
	$email=trim($_POST['email']);
	$password=trim($_POST['password']);
	
	$stmt = $DB_con->prepare ( "SELECT * FROM admin WHERE email=:email LIMIT 1" );
	$stmt->bindparam ( ':email', $email );
	$stmt->execute ();
	
	$adminRow = $stmt->fetch ( PDO::FETCH_ASSOC );
	
	if ($stmt->rowCount () > 0) {
		if (password_verify($password, $adminRow ['password'])) {
			$stmt =$DB_con->prepare("DELETE  from account where account_name=:account_name");
			$stmt->bindparam(':account_name',$name);
			$stmt->execute();
            
              /*logActivity */
        $request_type_1='delete_user';
        $operation_table_1='account';
        $operation_page='delete_account.php';
        $operation_data_1='account_name:'.$name;
        $operation_ip_1=$_SERVER['REMOTE_ADDR'];
        $operation_time=date("Y-m-d h:i:s");
        $post_request->log_activity($request_type_1,$operation_table_1,$operation_page,$operation_data_1, $operation_ip_1,$operation_time);

          /*logActivity */
        $request_type_2='delete_user';
        $operation_table_2='account';
        $operation_page_2='delete_account.php';
        $operation_data_2='abstract data store in the table on_delete_account_store_abstract';
        $operation_ip_2=$_SERVER['REMOTE_ADDR'];
        $operation_time_2=date("Y-m-d h:i:s");

        
        $stmt12 =$DB_con->prepare("insert into on_delete_account_store_abstract select * from abstract where account_name=:account_name");
		$stmt12->bindParam(':account_name',$name);
		$stmt12->execute();

        $post_request->log_activity($request_type_2,$operation_table_2,$operation_page_2,$operation_data_2, $operation_ip_2,$operation_time_2);

		$stmt123 =$DB_con->prepare("DELETE  from abstract where account_name=:account_name");
		$stmt123->bindparam(':account_name',$name);
		$stmt123->execute();
		header('Location: jklmnabc.php?delete=success');
	} 
	else{
			header('Location: jklmnabc.php?fail=success');
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="modal fade" id="visitor_information" tabindex="-1"
		role="dialog" aria-labelledby="exampleModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="exampleModalLabel">For Security Reasons, Confirm Following Details</h4>
				</div>
				<!-- modal-header -->
				<div class="modal-body">
					<form action="" id="visitor_form" method="POST">
						<div class="form-group">
							<label for="" class="control-label">Email</label>
							<input type="text" name="email" class="form-control" value=""/>
						</div>

						<div class="form-group">
							<label for="" class="control-label">Password</label>
							<input type="password" name="password" class="form-control" value=""/>
						</div>

						<div class="modal-footer">
						   <input type="submit" class="btn btn-primary "   name="submit"/>
						</div>
					</form>
				</div>
				<!-- modal-body -->
			</div>
			<!-- modal-content -->
		</div>
		<!-- modal-dialog -->
	</div>
	<!-- modal fade -->
	<script type="text/javascript">
    $(window).load(function(){
        $('#visitor_information').modal('show');
    });
</script>
</body>
</html>