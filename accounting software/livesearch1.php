<?php
include_once 'dbconfig.php';
$stmt34 = $DB_con->prepare ("select * from abstract where voucher_number LIKE :voucher_number");
$stmt34->bindValue(':voucher_number', '%'.$_GET['q'].'%');
$stmt34->execute();
$get_data=$stmt34->fetchAll(PDO::FETCH_ASSOC);


foreach($get_data as $data){
?>
<a href="get_voucher_details.php?voucher_number=<?php echo $data['voucher_number']?>"><?php echo $data['voucher_number']?></a><br/>
<?php 
}
?>