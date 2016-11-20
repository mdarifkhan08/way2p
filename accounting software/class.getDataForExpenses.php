<?php
class GetDataForExpenses{

	private $db;

	public function __construct($DB_CON){
         $this->db = $DB_CON;
	}

	/*working for expenses_input.php page*/

	public function getExpensesAccountHolderName(){
        $stmt =$this->db->prepare("select * from expenses_account");
		$stmt->execute();
		$getAccountHolderName=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $getAccountHolderName;
	}

	public function checkAccountNameForExpenses($name){
        $stmt=$this->db->prepare("SELECT * FROM expenses_account WHERE account_name=:account_name");
		$stmt->bindParam(':account_name',$name);
		$stmt->execute();
		$get_account_name=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $get_account_name;
	}


	public function getLiabilitiesAccountHolderName(){
        $stmt =$this->db->prepare("select * from liabilities_account");
		$stmt->execute();
		$getAccountHolderName=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $getAccountHolderName;
	}

	public function checkAccountNameForLiabilities($name){
        $stmt=$this->db->prepare("SELECT * FROM liabilities_account WHERE account_name=:account_name");
		$stmt->bindParam(':account_name',$name);
		$stmt->execute();
		$get_account_name=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $get_account_name;
	}

	public function getAssetsAccountHolderName(){
        $stmt =$this->db->prepare("select * from assets_account");
		$stmt->execute();
		$getAccountHolderName=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $getAccountHolderName;
	}

	public function checkAccountNameForAssets($name){
        $stmt=$this->db->prepare("SELECT * FROM assets_account WHERE account_name=:account_name");
		$stmt->bindParam(':account_name',$name);
		$stmt->execute();
		$get_account_name=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $get_account_name;
	}

}