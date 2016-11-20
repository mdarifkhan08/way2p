<?php
include_once 'dbconfig.php';
$stmt34 = $DB_con->prepare ( "select p_quantity from inventory where p_id LIKE :p_id" );
$stmt34->bindValue(":p_id", "%".$_GET["q"]."%");
$stmt34->execute();
$df=$stmt34->fetch(PDO::FETCH_ASSOC);

$f=$df['p_quantity']-$_GET["l"];

if($f<0){
	echo true;
}

