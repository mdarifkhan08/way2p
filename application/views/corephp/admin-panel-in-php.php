<div class="alert alert-success">

</div>

<h3></h3><hr/>
<pre class="prettyprint">
&lt;?php
$DB_HOST="localhost";
$DB_USER="root";
$DB_PASSWORD="";
$DB_NAME="abcd";
try{
	  $DB_CON=new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASSWORD);
	  $DB_CON->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
        echo $e->getMessage();
}
</pre>




<h3></h3><hr/>
<pre class="prettyprint">
&lt;?php
class Admin {
	private $db;
	function __construct($DB_CON){
         $this->db=$DB_CON;
	}
	public function adminLogin($email,$password){
		try{
			$stmt = $this->db->prepare ( "SELECT * FROM admin WHERE email=:email and password=:password LIMIT 1" );
			$stmt->bindparam ( ':email', $email );
			$stmt->bindparam ( ':password', $password );
			$stmt->execute ();
			$adminRow = $stmt->fetch ( PDO::FETCH_ASSOC );
			if ($stmt->rowCount () > 0) {
				if ($password == $adminRow ['password']) {
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
</pre>



<h3></h3><hr/>
<pre class="prettyprint">
&lt;?php
require_once('dbconfig.php');
require_once('class.admin.php');

$admin=new Admin($DB_CON);

if ($admin->is_loggedin () != "") {
	$admin->redirect ( 'admin-home.php' );
}

if(isset($_POST['submit'])){
	$email=trim($_POST['email']);
	$password=trim($_POST['password']);
    if($admin->adminLogin($email,$password)){
    	$admin->redirect('admin-home.php');
    }
    else{
    	$loginError = "&lt;div class='alert alert-danger'>Wrong Details!Please Check Your Email And Password!&lt;/div>";
    }
}
?>
</pre>




<h3></h3><hr/>
<pre class="prettyprint">
&lt;?php
session_start();
require_once('dbconfig.php');
require_once('class.admin.php');

$admin=new Admin($DB_CON);
if(! $admin->is_loggedin()){
   header('Location: admin-index.php');
}

$admin_id = $_SESSION ['admin_session'];
$stmt = $DB_CON->prepare ( "SELECT * FROM admin WHERE id=:admin_id" );
$stmt->execute ( array (
		":admin_id" => $admin_id 
));

$admin_row1 = $stmt->fetch (PDO::FETCH_ASSOC);
?>
</pre>


<h3></h3><hr/>
<pre class="prettyprint">
&lt;?php
session_start();
require_once('dbconfig.php');
require_once('class.admin.php');

$admin=new Admin($DB_CON);
if(! $admin->is_loggedin()){
   header('Location: admin-index.php');
}

$admin_id = $_SESSION ['admin_session'];
$stmt = $DB_CON->prepare ( "SELECT * FROM admin WHERE id=:admin_id" );
$stmt->execute ( array (
		":admin_id" => $admin_id 
));

$admin_row1 = $stmt->fetch (PDO::FETCH_ASSOC);
?>
</pre>


<h3></h3><hr/>
<pre class="prettyprint">

</pre>

