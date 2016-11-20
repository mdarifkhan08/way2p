<div class="alert alert-success">

</div>

<h3></h3><hr/>
<pre class="prettyprint">
&lt;?php
if(isset($_POST['submit'])){
	$names1=implode(', ', $_POST['name']);
	$names2=implode('-', $_POST['name']);
	$names3=implode('/', $_POST['name']);
	echo $names1;
	echo '&lt;br/>'.$names2;
	echo '&lt;br/>'.$names3;
}
?>

&lt;form action="" method="POST">
&lt;input type="text" name="name[]" />
&lt;input type="text" name="name[]" />
&lt;input type="text" name="name[]" />
&lt;input type="submit" name="submit"/>
&lt;/form>
</pre>

<h3></h3><hr/>
<pre class="prettyprint">
	
</pre>

<h3></h3><hr/>
<pre class="prettyprint">
	
</pre>

