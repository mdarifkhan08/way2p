<h3>dbconfig.php</h3><hr/>
<pre class="prettyprint">
	&lt;?php
$DB_HOST="localhost";
$DB_USER="test";
$DB_PASSWORD="inception";
$DB_NAME="way2p";

try{
	$DB_CON=new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASSWORD);
	$DB_CON->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e){
	
	echo $e->getMessage();
	
}
</pre>
