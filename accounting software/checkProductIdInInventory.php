<?php
include_once 'dbconfig.php';
$stmt34=$DB_con->prepare("select * from inventory where p_id=:p_id");
$stmt34->bindValue(":p_id", "%".$_GET["q"]."%");
$stmt34->execute();
while ( $row = $stmt34->fetchObject() ) {
	echo $row->p_name;
}
