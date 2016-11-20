<?php
class PostRequest{
	private $db;

	function __construct($DB_con)
	{
		$this->db = $DB_con;
	}

	public function redirect($url)
	{
		header("Location: $url");
	}

	public function createAccount($name){
		try
		{
		$stmt = $this->db->prepare("INSERT INTO account(account_name)
		                                               VALUES(:account_name)");
		$stmt->bindparam(":account_name", $name);
		$stmt->execute();
        $var=0.00;
		$stmt1 =$this->db->prepare("INSERT INTO abstract(account_name,debit_balance,credit_balance) VALUES(:account,:debit_balance,:credit_balance)");
		$stmt1->bindParam(':account',$name);
		$stmt1->bindParam(':debit_balance', $var);
		$stmt1->bindParam(':credit_balance', $var);
		$stmt1->execute();
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
	public function addAbstruct($voucher_number,$date,$account_holder,$debit,$credit,$remark){
		try
		{
			$stmt = $this->db->prepare("INSERT INTO abstract(voucher_number,date,account,debit,credit,remark)
		                                               VALUES(:voucher_number,:date,:account,:debit,:credit,:remark)");
			$stmt->bindparam(":voucher_number",$voucher_number);
			$stmt->bindparam(":date",$date);
			$stmt->bindparam(":account",$account_holder);
			$stmt->bindparam(":debit",$debit);
			$stmt->bindparam(":credit",$credit);
			$stmt->bindparam(":credit",$credit);
			$stmt->bindparam(":remark",$remark);
			$stmt->execute();
			return $stmt;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
	
	/* edit account details using post request USED IN PAGE edit_account_holder_details.php */
	
	
	public function edit_account($name,$account_id){
		try
		{
			$stmt1 = $this->db->prepare("select * from account where account_id=:account_id");
			$stmt1->bindparam(":account_id",$account_id);
			$stmt1->execute();
			$data=$stmt1->fetch(PDO::FETCH_ASSOC);
			
			$stmt2 = $this->db->prepare("UPDATE abstract SET account_name=:name where account_name=:account_name");
			$stmt2->bindparam(":account_name",$data['account_name']);
			$stmt2->bindparam(":name",$name);
			$stmt2->execute();
			
			$stmt = $this->db->prepare("UPDATE account SET account_name=:name where account_id=:account_id");
			$stmt->bindparam(":account_id",$account_id);
			$stmt->bindparam(":name",$name);
			$stmt->execute();
			
			return $stmt;
			
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
	public function edit_inventory($pid,$pname,$pquantity,$pcost,$id,$opening_stock){
		try
		{
				
			$stmt = $this->db->prepare("UPDATE inventory SET p_id=:p_id,p_name=:p_name,p_quantity=:p_quantity,p_cost=:p_cost,p_quantity_opening_stock=:p_quantity_opening_stock where id=:id");
			$stmt->bindparam(":p_id",$pid);
			$stmt->bindparam(":p_name",$pname);
            $stmt->bindparam(":p_quantity_opening_stock",$opening_stock);
			$stmt->bindparam(":p_quantity",$pquantity);
			$stmt->bindparam(":p_cost",$pcost);
			$stmt->bindparam(":id",$id);
			$stmt->execute();
				
			return $stmt;
			
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
	
	public function add_inventory($pid,$pname,$pquantity,$pcost,$opening_stock){
		try
		{
			$stmt = $this->db->prepare("INSERT INTO inventory(p_id,p_name,p_quantity,p_cost,p_quantity_opening_stock)
		                                               VALUES(:p_id,:p_name,:p_quantity,:p_cost,:p_quantity_opening_stock)");
			$stmt->bindparam(":p_id",$pid);
			$stmt->bindparam(":p_name",$pname);
			$stmt->bindparam(":p_quantity",$pquantity);
			$stmt->bindparam(":p_cost",$pcost);
			$stmt->bindparam(":p_quantity_opening_stock",$opening_stock);

			$stmt->execute();
			return $stmt;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}



	public function log_activity($request_type,$operation_table,$operation_page,$operation_data,$operation_ip,$operation_time){
      
      $stmt = $this->db->prepare("INSERT INTO log_activity(request_type,operation_table,operation_page,operation_data,operation_ip,operation_time)
		                                               VALUES(:request_type,:operation_table,:operation_page,:operation_data,:operation_ip,:operation_time)");

      $stmt->bindparam(':request_type',$request_type);
      $stmt->bindparam(':operation_table',$operation_table);
      
      $stmt->bindparam(':operation_page',$operation_page);
      $stmt->bindparam(':operation_data',$operation_data);
      $stmt->bindparam(':operation_ip',$operation_ip);
      $stmt->bindparam(':operation_time',$operation_time);
      $stmt->execute();
	}
	
	public function createExpensesAccount($name){
        try
		{
		$stmt = $this->db->prepare("INSERT INTO expenses_account(account_name)
		                                               VALUES(:account_name)");
		$stmt->bindparam(":account_name", $name);
		$stmt->execute();
        $var=0.00;
		$stmt1 =$this->db->prepare("INSERT INTO expenses_abstract(account_name,debit,credit) VALUES(:account,:debit_balance,:credit_balance)");
		$stmt1->bindParam(':account',$name);
		$stmt1->bindParam(':debit_balance', $var);
		$stmt1->bindParam(':credit_balance', $var);
		$stmt1->execute();
		
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}



	public function createLiabilitiesAccount($name){
        try
		{
		$stmt = $this->db->prepare("INSERT INTO liabilities_account(account_name)
		                                               VALUES(:liabilities_name)");
		$stmt->bindparam(":liabilities_name", $name);
		$stmt->execute();
        $var=0.00;
		$stmt1 =$this->db->prepare("INSERT INTO liabilities_abstract(account_name,debit,credit) VALUES(:liabilities_name,:debit_balance,:credit_balance)");
		$stmt1->bindParam(':liabilities_name',$name);
		$stmt1->bindParam(':debit_balance', $var);
		$stmt1->bindParam(':credit_balance', $var);
		$stmt1->execute();
		
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

		public function createAssetsAccount($name){
        try
		{
		$stmt = $this->db->prepare("INSERT INTO assets_account(account_name)
		                                               VALUES(:assets_name)");
		$stmt->bindparam(":assets_name", $name);
		$stmt->execute();
        $var=0.00;
		$stmt1 =$this->db->prepare("INSERT INTO assets_abstract(account_name,debit,credit) VALUES(:assets_name,:debit_balance,:credit_balance)");
		$stmt1->bindParam(':assets_name',$name);
		$stmt1->bindParam(':debit_balance', $var);
		$stmt1->bindParam(':credit_balance', $var);
		$stmt1->execute();
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
}