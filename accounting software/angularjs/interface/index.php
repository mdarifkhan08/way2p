<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
require '../vendor/autoload.php';

$app = new Slim\App();

$app->get('/accounts/{name}',function(Request $request, Response $response){
    require '../../dbconfig.php';
    require '../../class.getData.php';
    $get=new GetData($DB_con);
    $name = $request->getAttribute('name');
    $getSum=$get->checkAccountName($name);
    $records= json_encode($getSum);
    return $records;
});




$app->get('/abstract',function(){
    require '../../dbconfig.php';
    require '../../class.getData.php';
    $get=new GetData($DB_con);
    $getAbstract=$get->getAbstract();
    $records= json_encode( $getAbstract);
	return $records;
});





$app->get('/abstract/sum',function(){
    require '../../dbconfig.php';
    require '../../class.getData.php';
    $get=new GetData($DB_con);
    $getSum=$get->get_sum_from_abstract_table();
    $records= json_encode( $getSum);
	return $records;
});

$app->get('/sale/abstract',function(){
    require '../../dbconfig.php';
    require '../../class.getData.php';
    $get=new GetData($DB_con);
    $getAbstract=$get->getSaleAbstract();
    $records= json_encode( $getAbstract);
	return $records;
});

$app->get('/sale/abstract/sum',function(){
    require '../../dbconfig.php';
    require '../../class.getData.php';
    $get=new GetData($DB_con);
    $getSum=$get->getSumForSaleAbstract();
    $records= json_encode( $getSum);
	return $records;
});

$app->get('/sale/purchase',function(){
    require '../../dbconfig.php';
    require '../../class.getData.php';
    $get=new GetData($DB_con);
    $getAbstract=$get->getPurchaseAbstract();
    $records= json_encode( $getAbstract);
    return $records;
});

$app->get('/sale/purchase/sum',function(){
    require '../../dbconfig.php';
    require '../../class.getData.php';
    $get=new GetData($DB_con);
    $getSum=$get->getSumForPurchaseAbstract();
    $records= json_encode($getSum);
    return $records;
});

$app->get('/check/repetation/{name}',function(Request $request, Response $response){
    require '../../dbconfig.php';
    require '../../class.getData.php';
    $get=new GetData($DB_con);
    $name = $request->getAttribute('name');
    $getSum=$get->checkDuplicate($name);
    $records= json_encode($getSum);
    return $records;
});

$app->get('/get/quantity/{pid}',function(Request $request, Response $response){
    require '../../dbconfig.php';
    require '../../class.getData.php';
    $get=new GetData($DB_con);
    $pid = $request->getAttribute('pid');
    $getSum=$get->getQun($pid);
    $records= json_encode($getSum);
    return $records;
});

$app->get('/get/productname/{pid}',function(Request $request, Response $response){
    require '../../dbconfig.php';
    require '../../class.getData.php';
    $get=new GetData($DB_con);
    $pid = $request->getAttribute('pid');
    $getSum=$get->getProductName($pid);
    $records= json_encode($getSum);
    return $records;
});

$app->get('/get/abstractdata/{year}/{month}',function(Request $request, Response $response){
    require '../../dbconfig.php';
    require '../../class.getData.php';
    $get=new GetData($DB_con);
    $year = $request->getAttribute('year');
    $month = $request->getAttribute('month');
    $getSum=$get->getDataForTheInventoryWithLikeQuery($year,$month,$pid);
    $records= json_encode($getSum);
    return $records;
});

/* for expenses_input */
$app->get('/expenses/accounts/{name}',function(Request $request, Response $response){
    require '../../dbconfig.php';
    require '../../class.getDataForExpenses.php';
    $get=new GetDataForExpenses($DB_con);
    $name = $request->getAttribute('name');
    $getSum=$get->checkAccountNameForExpenses($name);
    $records= json_encode($getSum);
    return $records;
});



$app->get('/liabilities/accounts/{name}',function(Request $request, Response $response){
    require '../../dbconfig.php';
    require '../../class.getDataForExpenses.php';
    $get=new GetDataForExpenses($DB_con);
    $name = $request->getAttribute('name');
    $getSum=$get->checkAccountNameForLiabilities($name);
    $records= json_encode($getSum);
    return $records;
});

$app->get('/assets/accounts/{name}',function(Request $request, Response $response){
    require '../../dbconfig.php';
    require '../../class.getDataForExpenses.php';
    $get=new GetDataForExpenses($DB_con);
    $name = $request->getAttribute('name');
    $getSum=$get->checkAccountNameForAssets($name);
    $records= json_encode($getSum);
    return $records;
});

$app->get('/sale/abstract/sum/{year}',function(Request $request,Response $response){
    require '../../dbconfig.php';
    require '../../class.getData.php';
     $get=new GetData($DB_con);
    $year = $request->getAttribute('year');
    $month = '';
    $getSum=$get->getSumForSaleAbstractWithYearAndMonth($year,$month);
    $records= json_encode($getSum);
    return $records;
});

$app->get('/sale/abstract/sum/{year}/{month}',function(Request $request,Response $response){
    require '../../dbconfig.php';
    require '../../class.getData.php';
     $get=new GetData($DB_con);
    $year = $request->getAttribute('year');
    $month = $request->getAttribute('month');
    $getSum=$get->getSumForSaleAbstractWithYearAndMonth($year,$month);
    $records= json_encode($getSum);
    return $records;
});

$app->get('/get/sale/data/{year}/{month}',function(Request $request,Response $response){
    require '../../dbconfig.php';
    require '../../class.getData.php';
     $get=new GetData($DB_con);
    $year = $request->getAttribute('year');
    $month = $request->getAttribute('month');
    $getSum=$get->getRecordForSaleAbstractWithYearAndMonth($year,$month);
    $records= json_encode($getSum);
    return $records;
});

$app->get('/get/sale/data/{year}',function(Request $request,Response $response){
    require '../../dbconfig.php';
    require '../../class.getData.php';
     $get=new GetData($DB_con);
    $year = $request->getAttribute('year');
    $month = '';
    $getSum=$get->getRecordForSaleAbstractWithYearAndMonth($year,$month);
    $records= json_encode($getSum);
    return $records;
});

$app->get('/purchase/abstract/sum/{year}/{month}',function(Request $request,Response $response){
    require '../../dbconfig.php';
    require '../../class.getData.php';
     $get=new GetData($DB_con);
    $year = $request->getAttribute('year');
    $month = $request->getAttribute('month');
    $getSum=$get->getSumForPurchaseAbstractWithYearAndMonth($year,$month);
    $records= json_encode($getSum);
    return $records;
});

$app->get('/get/purchase/data/{year}/{month}',function(Request $request,Response $response){
    require '../../dbconfig.php';
    require '../../class.getData.php';
     $get=new GetData($DB_con);
    $year = $request->getAttribute('year');
    $month = $request->getAttribute('month');
    $getSum=$get->getRecordForPurchaseAbstractWithYearAndMonth($year,$month);
    $records= json_encode($getSum);
    return $records;
});

$app->get('/get/purchase/data/{year}',function(Request $request,Response $response){
    require '../../dbconfig.php';
    require '../../class.getData.php';
     $get=new GetData($DB_con);
    $year = $request->getAttribute('year');
    $month = '';
    $getSum=$get->getRecordForPurchaseAbstractWithYearAndMonth($year,$month);
    $records= json_encode($getSum);
    return $records;
});

$app->get('/purchase/abstract/sum/{year}',function(Request $request,Response $response){
    require '../../dbconfig.php';
    require '../../class.getData.php';
    $get=new GetData($DB_con);
    $year = $request->getAttribute('year');
    $month = '';
    $getSum=$get->getSumForPurchaseAbstractWithYearAndMonth($year,$month);
    $records= json_encode($getSum);
    return $records;
});



$app->run();
