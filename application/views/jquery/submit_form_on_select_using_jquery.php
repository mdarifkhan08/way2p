			<h3>index.php</h3>
			<pre class="prettyprint">
&lt;?php
if (isset ( $_GET ['area'] )) {
	echo $_GET ['area'];
}
?>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;script type="text/javascript" src="jquery.min.js">&lt;/script>
&lt;script type="text/javascript">
$(document).ready(function(){
	$('.area').change(function(){
         $('.myForm').trigger('submit');
	});
});
&lt;/script>
&lt;/head>
&lt;body>
	&lt;form method="GET" name="myForm" class="myForm">
		&lt;select name="area" class="area">
			&lt;option value="">- Select Area -&lt;/option>
			&lt;option value="Ashok Vihar">Ashok Vihar&lt;/option>
			&lt;option value="Mahrouli">Mahrouli&lt;/option>
		&lt;/select>
	&lt;/form>
&lt;/body>
&lt;/html>    
            </pre>
