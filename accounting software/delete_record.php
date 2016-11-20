<?php 
include_once 'dbconfig.php';
include_once 'class.postrequest.php';

$post_request=new PostRequest($DB_con);
$id=$_GET[id];


/*logActivity */
        $request_type_1='delete_user';
        $operation_table_1='abstract';
        $stmt1 =$DB_con->prepare("Insert into on_delete_abstract_store_abstract select * from abstract where abstract_id=:id");
        $stmt1->bindparam(':id',$id);
        $stmt1->execute();
       

        $operation_page='a123123lxcv.php';
        $operation_data_1='data store in the table on_delete_abstract_store_abstract';
        $operation_ip_1=$_SERVER['REMOTE_ADDR'];
        $operation_time=date("Y-m-d h:i:s");
        $post_request->log_activity($request_type_1,$operation_table_1,$operation_page,$operation_data_1, $operation_ip_1,$operation_time);





$stmt =$DB_con->prepare("delete from abstract where abstract_id=:abstract_id");
$stmt->bindparam(':abstract_id',$id);
$stmt->execute();

header('Location: a123123lxcv.php?delete=success');
?>