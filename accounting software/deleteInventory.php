<?php 
include_once 'dbconfig.php';
include_once 'class.postrequest.php';

$post_request=new PostRequest($DB_con);
$id=$_GET[id];

 /*logActivity */
        $request_type_1='delete_user';
        $operation_table_1='inventory';
        $stmt1 =$DB_con->prepare("insert into on_delete_inventory_store_inventory select * from inventory where id=:id");
        $stmt1->bindparam(':id',$id);
        $stmt1->execute();
        

        $operation_page='deleteInventory.php';
        $operation_data_1='data stored in the table on_delete_inventory_store_inventory';
        $operation_ip_1=$_SERVER['REMOTE_ADDR'];
        $operation_time=date("Y-m-d h:i:s");
        $post_request->log_activity($request_type_1,$operation_table_1,$operation_page,$operation_data_1, $operation_ip_1,$operation_time);


$stmt =$DB_con->prepare("delete from inventory where id=:id");
$stmt->bindparam(':id',$id);
$stmt->execute();






header('Location: v2abcx23yz.php?delete=success');
?>