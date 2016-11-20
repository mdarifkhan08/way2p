<?php
class Admin {
	private $db;
	function __construct($DB_CON){
         $this->db=$DB_CON;
	}
	
	public function register($email,$password){
		try{
			$new_password = password_hash($password, PASSWORD_DEFAULT);
			$stmt = $this->db->prepare ( "insert into admin(email,password) values(:email,:password)" );
			$stmt->bindparam ( ':email', $email );
			$stmt->bindparam ( ':password', $new_password );
			$stmt->execute ();
		  }
		catch (PDOException $e) {
			echo $e->getMessage ();
		}
	}
	
	
	
	public function adminLogin($email,$password){
		try{
			$stmt = $this->db->prepare ( "SELECT * FROM admin WHERE email=:email  LIMIT 1" );
			$stmt->bindparam ( ':email', $email );
			$stmt->execute ();
			$adminRow = $stmt->fetch ( PDO::FETCH_ASSOC );
			if ($stmt->rowCount () > 0) {
				if (password_verify($password, $adminRow['password'])) {
					session_start();
					$_SESSION ['admin_session'] = $adminRow ['id'];
					return true;
				} else {
					return false;
				}
			}
		}
		catch (PDOException $e) {
			echo $e->getMessage ();
	  }
	}
	public function redirect($url){
        header('Location: '.$url);
	}
   public function is_loggedin(){
   	if(isset($_SESSION['admin_session'])){
          return true;
   	}
   }
    public function logout(){
   		session_destroy ();
		unset ( $_SESSION ['admin_session'] );
		return true;
   	}
}