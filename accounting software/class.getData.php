<?php

class GetData{
	
	private $db;
	
	 public function __construct($DB_con){
		   $this->db = $DB_con;
	 }

	/*============================= get_account_holder_name_id for accounts.php =====================*/
	
	public function get_account_holder_name_id(){
		$stmt =$this->db->prepare("select * from account");
		$stmt->execute();
		$getAccountHolderNameId=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $getAccountHolderNameId;
	}
	
	/*============================= work for dummy_abstract.php =====================*/
	
    public function get_dummy_data($vn){
		$stmt =$this->db->prepare("select * from dummy_abstract where voucher_number=:voucher_number");
		$stmt->bindparam(':voucher_number',$vn);
		$stmt->execute();
		$getFullAccountInfo=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $getFullAccountInfo;
	}
	
	public function get_dummy_data_speific_fields($vn){
		$stmt =$this->db->prepare("select voucher_number,date,account_name,remark,whom from dummy_abstract where voucher_number=:voucher_number");
		$stmt->bindparam(':voucher_number',$vn);
		$stmt->execute();
		$getFullAccountInfo=$stmt->fetch(PDO::FETCH_ASSOC);
		return $getFullAccountInfo;
	}
	
	
	/*=============================view Inventory=====================*/
	
	
	public function view_inventory(){
		$stmt =$this->db->prepare("select id,p_id,p_name,p_quantity_opening_stock,p_quantity,p_cost,(p_cost*p_quantity) as p_t,(p_quantity_opening_stock*p_cost) as opening_bal from inventory");
		$stmt->execute();
		$view_inventory=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $view_inventory;
	}
	
	
	/*=============================for account.php  =====================*/

	public function get_account_data(){
		$stmt=$this->db->prepare("select account_name,sum(debit_balance) as debit,sum(credit_balance) as credit,(sum(credit_balance)-sum(debit_balance))  as remaining from abstract group by account_name");
		$stmt->execute();
		$get_account_data=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $get_account_data;
	}
	
	
	
	
	
	/*abstract.php*/
	
	
	/*voucher number can be null only when we are creating some one account but at the time of passing input it will always have value*/
	
	public function getAbstract(){
		$stmt =$this->db->prepare("select * from abstract  where voucher_number is not null ORDER BY abstract_id DESC");
		$stmt->execute();
		$getAbstractData=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $getAbstractData;
	}
	
	public function get_sum_from_abstract_table(){
		$stmt=$this->db->prepare("select sum(debit_balance) as debit,sum(credit_balance) as credit from abstract");
		$stmt->execute();
		$get_sum=$stmt->fetch(PDO::FETCH_ASSOC);
		return $get_sum;
	}
	
	/*voucher.php*/
	
	public function get_voucher_data(){
		$stmt=$this->db->prepare("select account_name,voucher_number,date,sum(debit_balance) as debit,sum(credit_balance) as credit,remark from abstract where voucher_number is not null group by voucher_number ");
		$stmt->execute();
		$get_voucher_data=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $get_voucher_data;
	}
	
	
	/*get_info_of_account.php*/
	
	public function getAccountInfo($name,$start_from,$per_page){
		$stmt =$this->db->prepare("select voucher_number,date,account_name,remark,debit_balance,product_name,credit_balance from abstract where account_name=:account_name and voucher_number is not null LIMIT "."$start_from".",$per_page");
		$stmt->bindparam(':account_name',$name);
		$stmt->execute();
		$getAccountInfo=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $getAccountInfo;
	}
	
	
	public function get_sum_of_abstract_data_for_same_name($name){
		$stmt =$this->db->prepare("select sum(debit_balance) as debit,sum(credit_balance) as credit from abstract where account_name=:account_name");
		$stmt->bindparam(':account_name',$name);
		$stmt->execute();
		$get_sum_of_abstract_data_for_same_name=$stmt->fetch(PDO::FETCH_ASSOC);
		return $get_sum_of_abstract_data_for_same_name;
	}
	
	
	
	public function get_jan_abstract_balance($name,$year){
		$stmt =$this->db->prepare("select sum(debit_balance) as get_jan_deb_bal,sum(credit_balance) as get_jan_cre_bal from abstract where date >= '20".$year."-01-01' AND date <= '20".$year."-01-31' and account_name=:account_name ");
		$stmt->bindparam(':account_name',$name);
		$stmt->execute();
		$get_jan_abstract_balance=$stmt->fetch(PDO::FETCH_ASSOC);
		return $get_jan_abstract_balance;
	}
	
	public function get_feb_abstract_balance($name,$year){
		$stmt =$this->db->prepare("select sum(debit_balance) as get_feb_deb_bal,sum(credit_balance) as get_feb_cre_bal from abstract where date >= '20".$year."-02-01' AND date <= '20".$year."-2-29' and account_name=:account_name ");
		$stmt->bindparam(':account_name',$name);
		$stmt->execute();
		$get_avg=$stmt->fetch(PDO::FETCH_ASSOC);
		return $get_avg;
	}
	
	public function get_mar_abstract_balance($name,$year){
		$stmt =$this->db->prepare("select sum(debit_balance) as get_mar_deb_bal,sum(credit_balance) as get_mar_cre_bal from abstract where date >= '20".$year."-03-01' AND date <= '20".$year."-03-31' and account_name=:account_name ");
		$stmt->bindparam(':account_name',$name);
		$stmt->execute();
		$get_avg=$stmt->fetch(PDO::FETCH_ASSOC);
		return $get_avg;
	}
	
	public function get_apr_abstract_balance($name,$year){
		$stmt =$this->db->prepare("select sum(debit_balance) as get_apr_deb_bal,sum(credit_balance) as get_apr_cre_bal from abstract where date >= '20".$year."-04-01' AND date <= '20".$year."-04-30' and account_name=:account_name ");
		$stmt->bindparam(':account_name',$name);
		$stmt->execute();
		$get_avg=$stmt->fetch(PDO::FETCH_ASSOC);
		return $get_avg;
	}
	
	public function get_may_abstract_balance($name,$year){
		$stmt =$this->db->prepare("select sum(debit_balance) as get_may_deb_bal,sum(credit_balance) as get_may_cre_bal from abstract where date >= '20".$year."-05-01' AND date <= '20".$year."-05-31' and account_name=:account_name ");
		$stmt->bindparam(':account_name',$name);
		$stmt->execute();
		$get_avg=$stmt->fetch(PDO::FETCH_ASSOC);
		return $get_avg;
	}
	
	public function get_jun_abstract_balance($name,$year){
		$stmt =$this->db->prepare("select sum(debit_balance) as get_jun_deb_bal,sum(credit_balance) as get_jun_cre_bal from abstract where date >= '20".$year."-06-01' AND date <= '20".$year."-06-30' and account_name=:account_name ");
		$stmt->bindparam(':account_name',$name);
		$stmt->execute();
		$get_avg=$stmt->fetch(PDO::FETCH_ASSOC);
		return $get_avg;
	}
	
	public function get_jul_abstract_balance($name,$year){
		$stmt =$this->db->prepare("select sum(debit_balance) as get_jul_deb_bal,sum(credit_balance) as get_jul_cre_bal from abstract where date >= '20".$year."-07-01' AND date <= '20".$year."-07-31' and account_name=:account_name ");
		$stmt->bindparam(':account_name',$name);
		$stmt->execute();
		$get_avg=$stmt->fetch(PDO::FETCH_ASSOC);
		return $get_avg;
	}
	
	public function get_aug_abstract_balance($name,$year){
		$stmt =$this->db->prepare("select sum(debit_balance) as get_aug_deb_bal,sum(credit_balance) as get_aug_cre_bal from abstract where date >= '20".$year."-08-01' AND date <= '20".$year."-01-30' and account_name=:account_name ");
		$stmt->bindparam(':account_name',$name);
		$stmt->execute();
		$get_avg=$stmt->fetch(PDO::FETCH_ASSOC);
		return $get_avg;
	}
	
	public function get_sep_abstract_balance($name,$year){
		$stmt =$this->db->prepare("select sum(debit_balance) as get_sep_deb_bal,sum(credit_balance) as get_sep_cre_bal from abstract where date >= '20".$year."-09-01' AND date <= '20".$year."-09-31' and account_name=:account_name ");
		$stmt->bindparam(':account_name',$name);
		$stmt->execute();
		$get_avg=$stmt->fetch(PDO::FETCH_ASSOC);
		return $get_avg;
	}
	
	public function get_oct_abstract_balance($name,$year){
		$stmt =$this->db->prepare("select sum(debit_balance) as get_oct_deb_bal,sum(credit_balance) as get_oct_cre_bal from abstract where date >= '20".$year."-10-01' AND date <= '20".$year."-10-30' and account_name=:account_name ");
		$stmt->bindparam(':account_name',$name);
		$stmt->execute();
		$get_avg=$stmt->fetch(PDO::FETCH_ASSOC);
		return $get_avg;
	}
	
	public function get_nov_abstract_balance($name,$year){
		$stmt =$this->db->prepare("select sum(debit_balance) as get_nov_deb_bal,sum(credit_balance) as get_nov_cre_bal from abstract where date >= '20".$year."-11-01' AND date <= '20".$year."-11-31' and account_name=:account_name ");
		$stmt->bindparam(':account_name',$name);
		$stmt->execute();
		$get_avg=$stmt->fetch(PDO::FETCH_ASSOC);
		return $get_avg;
	}
	
	public function get_dec_abstract_balance($name,$year){
		$stmt =$this->db->prepare("select sum(debit_balance) as get_dec_deb_bal, sum(credit_balance) as get_dec_cre_bal from abstract where date >= '20".$year."-12-01' AND date <= '20".$year."-12-30' and account_name=:account_name ");
		$stmt->bindparam(':account_name',$name);
		$stmt->execute();
		$get_avg=$stmt->fetch(PDO::FETCH_ASSOC);
		return $get_avg;
	}
	
	
	/*edit_account_holder_details.php*/
	
	public function get_account_holder_name_id_using_id($id){
		$stmt =$this->db->prepare("select * from account where account_id=:account_id");
		$stmt->bindparam(':account_id',$id);
		$stmt->execute();
		$getAccountHolderNameId=$stmt->fetch(PDO::FETCH_ASSOC);
		return $getAccountHolderNameId;
	}
	
	
	
	/*view_account.php*/
	
	
	public function get_info_of_account_balance($name){
		$stmt =$this->db->prepare("select SUM(debit_balance) as debit_balance,SUM(credit_balance) as credit_balance from abstract where account_name=:name");
		$stmt->bindparam(':name',$name);
		$stmt->execute();
		$getFullAccountInfo=$stmt->fetch(PDO::FETCH_ASSOC);
		return $getFullAccountInfo;
	}
	
	
	
	public function view_account_using_id($name){
		$stmt =$this->db->prepare("select * from abstract where account_name=:account_name and voucher_number is not null");
		$stmt->bindparam(':account_name',$name);
		$stmt->execute();
		$get_account_info=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $get_account_info;
	}
	
	
	/*editInventory.php*/
	
	public function get_data_for_edit_inventory($id){
		$stmt =$this->db->prepare("select * from inventory where id=:id");
		$stmt->bindparam(':id',$id);
		$stmt->execute();
		$get_account_info=$stmt->fetch(PDO::FETCH_ASSOC);
		return $get_account_info;
	}
	
	
	/*get_voucher_details.php*/
	public function get_voucher_details($voucher_number){
		$stmt =$this->db->prepare("select * from abstract where voucher_number=:voucher_number");
		$stmt->bindparam(':voucher_number',$voucher_number);
		$stmt->execute();
		$getFullAccountInfo=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $getFullAccountInfo;
	}
	
	
	/*viewInventory.php*/
	public function get_sum_for_inventory(){
		$stmt =$this->db->prepare("select sum(p_quantity*p_cost) as pq_sum from inventory");
		$stmt->execute();
		$get_sum_for_inventory=$stmt->fetch(PDO::FETCH_ASSOC);
		return $get_sum_for_inventory;
	}
	
	
	/*edit_record.php*/
	public function get_record_of_voucher_number($vn){
		$stmt =$this->db->prepare("select * from abstract where abstract_id=:abstract_id");
		$stmt->bindparam(':abstract_id',$vn);
		$stmt->execute();
		$get_record_of_voucher_number=$stmt->fetch(PDO::FETCH_ASSOC);
		return $get_record_of_voucher_number;
	}
	
	
	
	/*edit_record.php*/
	public function return_back_privious_data($abstract_id,$p_id){
		
		$stmt2 =$this->db->prepare("select * from abstract where abstract_id=:abstract_id");
		$stmt2->bindParam(':abstract_id',$abstract_id);
		$stmt2->execute();
		$get_abstract_data=$stmt2->fetch(PDO::FETCH_ASSOC);
		
		
		$stmt1 =$this->db->prepare("select * from inventory where p_id=:product_id");
		$stmt1->bindParam(':product_id',$p_id);
		$stmt1->execute();
		$get_inventory_data=$stmt1->fetch(PDO::FETCH_ASSOC);
		
		$quantity_1=$get_abstract_data['quantity'];
		$remark_1=$get_abstract_data['remark'];
		$p_quantity=$get_inventory_data['p_quantity'];
		
		
		if($remark_1=='Sale To'){
			$qu=$quantity_1+$p_quantity;
			$stmt3 =$this->db->prepare("update inventory set p_quantity=:p_quantity where p_id=:product_id");
			$stmt3->bindParam(':p_quantity',$qu);
			$stmt3->bindParam(':product_id',$p_id);
			$stmt3->execute();
             require_once 'class.postrequest.php';
            $post_request=new PostRequest($this->db);
           /*logActivity */
        $request_type_1='edit_programming';
        $operation_table_1='inventory';
        
        $operation_page='edit_records.php';
        $operation_data_1='product_quantity:'.$qu.' where product_id'.$p_id;
        $operation_ip_1=$_SERVER['REMOTE_ADDR'];
        $operation_time=date("Y-m-d h:i:s");
        $post_request->log_activity($request_type_1,$operation_table_1,$operation_page,$operation_data_1, $operation_ip_1,$operation_time);







		}else if($remark_1=='Purchase From'){
			$stmt3 =$this->db->prepare("update inventory set p_quantity=:p_quantity where P_id=:product_id");
			$qu=$p_quantity-$quantity_1;
			$stmt3->bindParam(':p_quantity',$qu);
			$stmt3->bindParam(':product_id',$p_id);
			$stmt3->execute();

			require_once 'class.postrequest.php';
        $post_request=new PostRequest($this->db);

   /*logActivity */
        $request_type_1='edit_programming';
        $operation_table_1='inventory';
        
        $operation_page='edit_records.php';
        $operation_data_1='product_quantity:'.$qu.' where product_id'.$p_id;
        $operation_ip_1=$_SERVER['REMOTE_ADDR'];
        $operation_time=date("Y-m-d h:i:s");
        $post_request->log_activity($request_type_1,$operation_table_1,$operation_page,$operation_data_1, $operation_ip_1,$operation_time);
        

		}
		
	}
	
	
	public function update_current_data_in_inventory($current_remark,$current_quantity,$p_id){
		$stmt1 =$this->db->prepare("select * from inventory where p_id=:product_id");
		$stmt1->bindParam(':product_id',$p_id);
		$stmt1->execute();
		$get_inventory_data=$stmt1->fetch(PDO::FETCH_ASSOC);
		
		$quantity1=$get_inventory_data['p_quantity'];
		
		if($current_remark=='Sale To'){
			$new_quntity=$quantity1-$current_quantity;
			$stmt3 =$this->db->prepare("update inventory set p_quantity=:p_quantity where P_id=:product_id");
			$stmt3->bindParam(':p_quantity',$new_quntity);
			$stmt3->bindParam(':product_id',$p_id);
			$stmt3->execute();

			require_once 'class.postrequest.php';
            $post_request=new PostRequest($this->db);


         /*logActivity */
        $request_type_1='edit_programming';
        $operation_table_1='inventory';
        
        $operation_page='edit_records.php';
        $operation_data_1='product_quantity:'.$new_quntity.' where product_id'.$p_id;
        $operation_ip_1=$_SERVER['REMOTE_ADDR'];
        $operation_time=date("Y-m-d h:i:s");
        $post_request->log_activity($request_type_1,$operation_table_1,$operation_page,$operation_data_1, $operation_ip_1,$operation_time);


		}
		else if($current_remark=='Purchase From'){
			$new_quntity=$quantity1+$current_quantity;
			$stmt3 =$this->db->prepare("update inventory set p_quantity=:p_quantity where P_id=:product_id");
			$stmt3->bindParam(':p_quantity',$new_quntity);
			$stmt3->bindParam(':product_id',$p_id);
			$stmt3->execute();

        require_once 'class.postrequest.php';
        $post_request=new PostRequest($this->db);


          /*logActivity */
        $request_type_1='edit_programming';
        $operation_table_1='inventory';
        
        $operation_page='edit_records.php';
        $operation_data_1='product_quantity:'.$new_quntity.' where product_id'.$p_id;
        $operation_ip_1=$_SERVER['REMOTE_ADDR'];
        $operation_time=date("Y-m-d h:i:s");
        $post_request->log_activity($request_type_1,$operation_table_1,$operation_page,$operation_data_1, $operation_ip_1,$operation_time);

		}
	}
	
	public function update_current_data_in_abstract($abstract_id,$voucher_number,$date,$account_name,$remark,$whom,$product_id,$product_name,$quantity,$cost){
		$stmt =$this->db->prepare("UPDATE abstract SET voucher_number=:voucher_number,date=:date,account_name=:account_name,remark=:remark,whom=:whom,product_id=:product_id,product_name=:product_name,quantity=:quantity,cost=:cost,debit_balance=:debit_balance,credit_balance=:credit_balance where abstract_id=:abstract_id");
		$stmt->bindParam(':abstract_id',$abstract_id);
		$stmt->bindParam(':voucher_number',$voucher_number);
		$stmt->bindParam(':date',$date);
		$stmt->bindParam(':account_name',$account_name);
		$stmt->bindParam(':remark',$remark);
		$stmt->bindParam(':whom',$whom);
		$stmt->bindParam(':product_id',$product_id);
		$stmt->bindParam(':product_name',$product_name);
		$stmt->bindParam(':quantity',$quantity);
		$stmt->bindParam(':cost',$cost);
		if($remark=='Sale To'){
			$credit_balance=0;
			$debit_balance=$quantity*$cost;
		}
		else if($remark=='Payment'){
			$credit_balance=0;
			$debit_balance=$cost;
		}
		else if($remark=='Purchase From'){
			$credit_balance=$cost*$quantity;
			$debit_balance=0;
		}
		else{
			$credit_balance=$cost;
			$debit_balance=0;
		}
		$stmt->bindParam(':debit_balance',$debit_balance);
		$stmt->bindParam(':credit_balance',$credit_balance);
		$stmt->execute();

require_once 'class.postrequest.php';
$post_request=new PostRequest($this->db);

        /*logActivity */
        $request_type_1='edit_programming';
        $operation_table_1='abstract';
        
        $operation_page='edit_records.php';
         $operation_data_1='voucher_number:'.$voucher_number.' date:'.$date.' account_name:'.$account_name.' remark:'.$remark.' whom:'.$whom.' product_id:'.$product_id.' product_name:'.$product_name.' quantity:'.$quantity.' cost:'.$cost.' debit_balance:'.$debit_balance.' credit_balance'.$credit_balance;
        $operation_ip_1=$_SERVER['REMOTE_ADDR'];
        $operation_time=date("Y-m-d h:i:s");
        $post_request->log_activity($request_type_1,$operation_table_1,$operation_page,$operation_data_1, $operation_ip_1,$operation_time);

	}
	
	/*  getDataOnClickInveId.php  */
	
	public function getDataForTheInventory($pid){
		$stmt1 =$this->db->prepare("select * from abstract where product_id=:product_id");
		$stmt1->bindParam(':product_id',$pid);
		$stmt1->execute();
		$get_inventory_data=$stmt1->fetchAll(PDO::FETCH_ASSOC);
		return $get_inventory_data;
	}
	
	
	public function getSumDataForTheInventory($pid){
		$stmt1 =$this->db->prepare("select sum(debit_balance) as debit_bal, sum(credit_balance) as credit_bal from abstract where product_id=:product_id");
		$stmt1->bindParam(':product_id',$pid);
		$stmt1->execute();
		$get_sum_inventory_data=$stmt1->fetch(PDO::FETCH_ASSOC);
		return $get_sum_inventory_data;
	}
	
	
	
	
	/* get sale abstract */
	
	
	public function getSaleAbstract(){
		$stmt =$this->db->prepare("select * from abstract  where voucher_number is not null and remark='Sale To' ORDER BY abstract_id DESC");
		$stmt->execute();
		$getAbstractData=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $getAbstractData;
	}
	
	
	public function getSumForSaleAbstract(){
		$stmt=$this->db->prepare("select sum(debit_balance) as debit,sum(credit_balance) as credit from abstract where remark='Sale To'");
		$stmt->execute();
		$get_sum=$stmt->fetch(PDO::FETCH_ASSOC);
		return $get_sum;
	}
	
	
	/* get purchase abstract */
	
	public function getPurchaseAbstract(){
		$stmt =$this->db->prepare("select * from abstract  where voucher_number is not null and remark='Purchase From' ORDER BY abstract_id DESC");
		$stmt->execute();
		$getAbstractData=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $getAbstractData;
	}
	
	public function getSumForPurchaseAbstract(){
		$stmt=$this->db->prepare("select sum(debit_balance) as debit,sum(credit_balance) as credit from abstract where remark='Purchase From'");
		$stmt->execute();
		$get_sum=$stmt->fetch(PDO::FETCH_ASSOC);
		return $get_sum;
	}
	
	
	/* check for i297uxyz.php duplicate entry */

	public function checkDuplicateEntry(){
		$stmt=$this->db->prepare("SELECT * FROM inventory WHERE p_id IN (SELECT p_id FROM inventory GROUP BY p_id HAVING COUNT(p_id) > 1)");
		$stmt->execute();
		$get_sum=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $get_sum;
	}

	public function checkDuplicate($pid){
		$stmt=$this->db->prepare("SELECT * FROM inventory WHERE p_id=:p_id");
		$stmt->bindParam(':p_id',$pid);
		$stmt->execute();
		$get_sum=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $get_sum;
	}

	public function checkAccountName($name){
        $stmt=$this->db->prepare("SELECT * FROM account WHERE account_name=:account_name");
		$stmt->bindParam(':account_name',$name);
		$stmt->execute();
		$get_account_name=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $get_account_name;
	}


	public function getQun($pid){
        $stmt = $this->db->prepare ("select p_quantity from inventory where p_id=:p_id" );
        $stmt->bindParam(":p_id",$pid);
        $stmt->execute();
        $data=$stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
	}



	public function getProductName($pid){
        $stmt = $this->db->prepare ("select p_name from inventory where p_id=:p_id" );
        $stmt->bindParam(":p_id",$pid);
        $stmt->execute();
        $data=$stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
	}


	public function getSumOfOpeningBalance(){
		$stmt = $this->db->prepare ("select sum(p_quantity_opening_stock*p_cost) as opening_sum from inventory" );
        $stmt->execute();
        $data=$stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
	}

	public function getYearForGetDataOnClickInveIdPage($pid){
		$stmt = $this->db->prepare ("select DISTINCT EXTRACT(YEAR FROM date) as date from abstract where product_id=:product_id" );
        $stmt->bindParam(':product_id',$pid);
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
	}

	public function getMonthForGetDataOnClickInveIdPage($pid){
		$stmt = $this->db->prepare ("select DISTINCT EXTRACT(MONTH FROM date) as month from abstract where product_id=:product_id" );
        $stmt->bindParam(':product_id',$pid);
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
	}


	public function getDataForTheInventoryWithLikeQuery($year,$month,$pid){
		
if($month==''){
 $stmt1 =$this->db->prepare("select * from abstract where DATE_FORMAT(date, '%Y') = '".$year."' and product_id=:product_id ");
}else{
	 $stmt1 =$this->db->prepare("select * from abstract where DATE_FORMAT(date, '%Y-%m') = '".$year."-".$month."' and product_id=:product_id ");
}
       

		$stmt1->bindParam(':product_id',$pid);
		$stmt1->execute();
		$get_inventory_data=$stmt1->fetchAll(PDO::FETCH_ASSOC);
		return $get_inventory_data;
	}


	public function getDataForCalculationPurpose1($year,$month,$pid){

if($month==''){
 $stmt1 =$this->db->prepare("select sum(quantity) as q1 from abstract where product_id=:product_id and DATE_FORMAT(date, '%Y') = '".$year."' and remark='Purchase From'");
}else{
	 $stmt1 =$this->db->prepare("select sum(quantity) as q1 from abstract where product_id=:product_id and DATE_FORMAT(date, '%Y-%m') = '".$year."-".$month."' and remark='Purchase From'");
}


		
		$stmt1->bindParam(':product_id',$pid);
		$stmt1->execute();
		$get_inventory_data=$stmt1->fetch(PDO::FETCH_ASSOC);
		return $get_inventory_data;
	}
	public function getDataForCalculationPurpose2($year,$month,$pid){


		if($month==''){
 $stmt1 =$this->db->prepare("select sum(quantity) as q2 from abstract where product_id=:product_id and DATE_FORMAT(date, '%Y') = '".$year."' and remark='Sale To'");
}else{
	 $stmt1 =$this->db->prepare("select sum(quantity) as q2 from abstract where product_id=:product_id and DATE_FORMAT(date, '%Y-%m') = '".$year."-".$month."' and remark='Sale To'");
}


		
		$stmt1->bindParam(':product_id',$pid);
		$stmt1->execute();
		$get_inventory_data=$stmt1->fetch(PDO::FETCH_ASSOC);
		return $get_inventory_data;
	}


	public function getDataForCalculationPurposeForCost1($year,$month,$pid){

		if($month==''){
 $stmt1 =$this->db->prepare("select sum(cost) as c1 from abstract where product_id=:product_id and DATE_FORMAT(date, '%Y') = '".$year."' and remark='Purchase From'");
}else{
	 $stmt1 =$this->db->prepare("select sum(cost) as c1 from abstract where product_id=:product_id and DATE_FORMAT(date, '%Y-%m') = '".$year."-".$month."' and remark='Purchase From'");
}
		
		$stmt1->bindParam(':product_id',$pid);
		$stmt1->execute();
		$get_inventory_data=$stmt1->fetch(PDO::FETCH_ASSOC);
		return $get_inventory_data;
	}

	public function getDataForCalculationPurposeForCost2($year,$month,$pid){
				if($month==''){
 $stmt1 =$this->db->prepare("select sum(cost) as c2 from abstract where product_id=:product_id and DATE_FORMAT(date, '%Y') = '".$year."' and remark='Sale To'");
}else{
	 $stmt1 =$this->db->prepare("select sum(cost) as c2 from abstract where product_id=:product_id and DATE_FORMAT(date, '%Y-%m') = '".$year."-".$month."' and remark='Sale To'");
}
	
		$stmt1->bindParam(':product_id',$pid);
		$stmt1->execute();
		$get_inventory_data=$stmt1->fetch(PDO::FETCH_ASSOC);
		return $get_inventory_data;
	}


	public function getDataForCalculationPurposeForDebitOrCreditBal($year,$month,$pid){
						if($month==''){
 $stmt1 =$this->db->prepare("select sum(debit_balance) as db,sum(credit_balance) 
			as cb from abstract where product_id=:product_id and DATE_FORMAT(date, '%Y') = '".$year."'");
}else{
	 $stmt1 =$this->db->prepare("select sum(debit_balance) as db,sum(credit_balance) 
			as cb from abstract where product_id=:product_id and DATE_FORMAT(date, '%Y-%m') = '".$year."-".$month."'");
}
		
		$stmt1->bindParam(':product_id',$pid);
		$stmt1->execute();
		$get_inventory_data=$stmt1->fetch(PDO::FETCH_ASSOC);
		return $get_inventory_data;
	}

	public function getYearForSaleAbstract(){
        $stmt = $this->db->prepare ("select DISTINCT EXTRACT(YEAR FROM date) as date from abstract where remark='Sale To'" );
        $stmt->bindParam(':product_id',$pid);
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
	}

	public function getMonthForSaleAbstract(){
        $stmt = $this->db->prepare ("select DISTINCT EXTRACT(MONTH FROM date) as month from abstract where remark='Sale To'" );
        $stmt->bindParam(':product_id',$pid);
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
	}

	public function getYearForPurchaseAbstract(){
        $stmt = $this->db->prepare ("select DISTINCT EXTRACT(YEAR FROM date) as date from abstract where remark='Purchase From'" );
        $stmt->bindParam(':product_id',$pid);
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
	}


	public function getMonthForPurchaseAbstract(){
        $stmt = $this->db->prepare ("select DISTINCT EXTRACT(MONTH FROM date) as month from abstract where remark='Purchase From'" );
        $stmt->bindParam(':product_id',$pid);
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
	}



	public function getSumForSaleAbstractWithYearAndMonth($year,$month){
		if($month==''){
            $stmt1 =$this->db->prepare("select sum(debit_balance) as db,sum(credit_balance) 
			as cb from abstract where remark='Sale To' and DATE_FORMAT(date, '%Y') = '".$year."'");
        }else{
	    $stmt1 =$this->db->prepare("select sum(debit_balance) as db,sum(credit_balance) 
			as cb from abstract where remark='Sale To' and DATE_FORMAT(date, '%Y-%m') = '".$year."-".$month."'");
        }
        $stmt1->execute();
        $data=$stmt1->fetch(PDO::FETCH_ASSOC);
        return $data;
	}

	public function getSumForPurchaseAbstractWithYearAndMonth($year,$month){

	    if($month==''){
        $stmt1 =$this->db->prepare("select sum(debit_balance) as db,sum(credit_balance) 
			as cb from abstract where remark='Purchase From' and DATE_FORMAT(date, '%Y') = '".$year."'");
        }else{
	    $stmt1 =$this->db->prepare("select sum(debit_balance) as db,sum(credit_balance) 
			as cb from abstract where remark='Purchase From' and DATE_FORMAT(date, '%Y-%m') = '".$year."-".$month."'");
        }
        $stmt1->execute();
        $data=$stmt1->fetch(PDO::FETCH_ASSOC);
        return $data;
	}


	public function getRecordForSaleAbstractWithYearAndMonth($year,$month){
		if($month==''){
            $stmt1 =$this->db->prepare("select * from abstract where remark='Sale To' and DATE_FORMAT(date, '%Y') = '".$year."'");
        }else{
	    $stmt1 =$this->db->prepare("select * from abstract where remark='Sale To' and DATE_FORMAT(date, '%Y-%m') = '".$year."-".$month."'");
        }
        $stmt1->execute();
        $data=$stmt1->fetchAll(PDO::FETCH_ASSOC);
        return $data;
	}


	public function getRecordForPurchaseAbstractWithYearAndMonth($year,$month){

	    if($month==''){
        $stmt1 =$this->db->prepare("select * from abstract where remark='Purchase From' and DATE_FORMAT(date, '%Y') = '".$year."'");
        }else{
	    $stmt1 =$this->db->prepare("select * from abstract where remark='Purchase From' and DATE_FORMAT(date, '%Y-%m') = '".$year."-".$month."'");
        }
        $stmt1->execute();
        $data=$stmt1->fetchAll(PDO::FETCH_ASSOC);
        return $data;
	}


	public function getDataForExpensesInput(){
		$stmt = $this->db->prepare ("select * from expenses_abstract where remark is not null" );
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
	}

	public function getPurchaseSum(){
		$stmt=$this->db->prepare("select sum(credit_balance) as cb from abstract where remark='Purchase From'" );
        $stmt->execute();
        $data=$stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
	}

	public function getSumOfTotalCostFromInventory(){
		$stmt=$this->db->prepare("select sum(p_quantity*p_cost) as tc from inventory" );
        $stmt->execute();
        $data=$stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
	}

	public function getTotalCostFromExpensesForDebit(){
		$stmt=$this->db->prepare("select sum(debit) as cost1 from expenses_abstract where remark='Debit'" );
        $stmt->execute();
        $data=$stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
	}

    public function getTotalCostFromExpensesForCredit(){
		$stmt=$this->db->prepare("select sum(credit) as cost2 from expenses_abstract where remark='Credit'" );
        $stmt->execute();
        $data=$stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
	}

	public function getExpensesAccountRecords(){
		$stmt=$this->db->prepare("select account_name,sum(debit) as d,sum(credit) as c from expenses_abstract group by(account_name)" );
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
	}


	public function getLiabilitiesAccountRecords(){
		$stmt=$this->db->prepare("select account_name,sum(debit) as d,sum(credit) as c from liabilities_abstract group by(account_name)" );
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
	}

	public function getAssetsAccountRecords(){
		$stmt=$this->db->prepare("select account_name,sum(debit) as d,sum(credit) as c from assets_abstract group by(account_name)" );
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
	}


	public function getDataForLiabilitiesInput(){
		$stmt = $this->db->prepare ("select * from liabilities_abstract where remark is not null" );
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
	}
	public function getDataForAssetsInput(){
		$stmt = $this->db->prepare ("select * from assets_abstract where remark is not null" );
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
	}

	public function getDataForPaymentAbstract(){
		$stmt = $this->db->prepare("select * from abstract where remark is not null and remark='Payment'" );
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;

	}

	public function getDataForPaymentWhomSearch($whom){
		$stmt = $this->db->prepare("select SQL_CALC_FOUND_ROWS *  from abstract where remark='Payment' and whom like ?" );
        $stmt->bindValue(1,"%{$whom}%",PDO::PARAM_STR);
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
	}

	public function getDataForPayAndAbstractOrWhomSearch(){
		   $stmt = $this->db->prepare("select sum(debit_balance) as db,sum(credit_balance) as cb from abstract where remark='Payment'" );
           $stmt->execute();
           $data=$stmt->fetch(PDO::FETCH_ASSOC);
           return $data;
	}

	public function getSumDataForPaymentAbstractOrWhomSearch($whom){
           $stmt = $this->db->prepare("select sum(debit_balance) as db, sum(credit_balance) as cb from abstract where remark='Payment' and whom like ?" );
           $stmt->bindValue(1,"%{$whom}%",PDO::PARAM_STR);
           $stmt->execute();
           $data=$stmt->fetch(PDO::FETCH_ASSOC);
           return $data;
	}

	public function getDataForReceiptAbstract(){
		$stmt = $this->db->prepare("select * from abstract where remark is not null and remark='Receipt'" );
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;

	}


	public function getDataForReceiptAndAbstractOrWhomSearch(){
		   $stmt = $this->db->prepare("select sum(debit_balance) as db,sum(credit_balance) as cb from abstract where remark='Receipt'" );
           $stmt->execute();
           $data=$stmt->fetch(PDO::FETCH_ASSOC);
           return $data;
	}

	public function getDataForReceiptWhomSearch($whom){
		$stmt = $this->db->prepare("select SQL_CALC_FOUND_ROWS *  from abstract where remark='Receipt' and whom like ?" );
        $stmt->bindValue(1,"%{$whom}%",PDO::PARAM_STR);
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
	}

	public function getSumDataForReceiptAbstractOrWhomSearch($whom){
        $stmt = $this->db->prepare("select sum(debit_balance) as db, sum(credit_balance) as cb from abstract where remark='Receipt' and whom like ?" );
        $stmt->bindValue(1,"%{$whom}%",PDO::PARAM_STR);
        $stmt->execute();
        $data=$stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
	}
}