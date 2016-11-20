<h3>Index Array</h3><hr/>
<pre class="prettyprint">
$product_id=array("pid1","pid2","pid3","pid4","pid5","pid6","pid7");

echo $product_id[0]."&lt;br/>";
echo $product_id[1]."&lt;br/>";
echo $product_id[2]."&lt;br/>";
echo $product_id[3]."&lt;br/>";
echo $product_id[4]."&lt;br/>";
echo $product_id[5]."&lt;br/>";
echo $product_id[6]."&lt;br/>";
</pre>




<h3>Index Array</h3><hr/>
<pre class="prettyprint">
$product_id=array("pid1","pid2","pid3","pid4","pid5","pid6","pid7");

foreach ($product_id as $product){
	echo $product."&lt;br/>";
}	
</pre>



<h3>Index Array</h3><hr/>
<pre class="prettyprint">
$product_id=array("pid1","pid2","pid3","pid4","pid5","pid6","pid7");
$pid = count($product_id);
echo $pid."&lt;br/>";
for($x = 0; $x &lt; $pid; $x++) {
	echo $product_id[$x];
	echo "&lt;br>";
}
</pre>





<h3>Associative  Array</h3><hr/>
<pre class="prettyprint">
$roll_num = array("Arif"=>"EC001", "Aditya"=>"EC002");
echo $roll_num['Arif']."&lt;br/>";
echo $roll_num['Aditya'];
</pre>

<h3>Associative  Array</h3><hr/>
<pre class="prettyprint">
$roll_num = array("Arif"=>"EC001", "Aditya"=>"EC002");
foreach ($roll_num as $key=>$value){
	echo $key."=>".$value."&lt;br/>";
}
</pre>



<h3>Associative  Array</h3><hr/>
<pre class="prettyprint">
$roll_num = array("Arif"=>"EC001", "Aditya"=>"EC002");
foreach ($roll_num as $roll_n){
	echo $roll_n."&lt;br/>";
}

</pre>


<h3>Associative  Array</h3><hr/>
<pre class="prettyprint">
$roll_num = array("Arif"=>"EC001", "Aditya"=>"EC002");
foreach ($roll_num as $roll_n){
	echo $roll_n."&lt;br/>";
}
</pre>





<h3>Two-Dimensional Arrays</h3>
<pre class="prettyprint">
$actors_name_movie = array
(
		array("Name"=>"Hrithik","Movie"=>"kaho na pyar h"),
		array("Name"=>"Salman","Movie"=>"ham dil de chuke sanam"),
		array("Name"=>"Ranvir","Movie"=>"wake up sid")
);

$total=count($actors_name_movie);
echo $total;

foreach ($actors_name_movie as $actor_name_movie){
	foreach ($actor_name_movie as $key=>$value){
		echo $key."="."$value"."&lt;br/>";
	}
}

</pre>

<h3>Two-Dimensional Arrays</h3>
<pre class="prettyprint">
$actors_name_movie = array
(
		array("Hrithik","kaho na pyar h"),
		array("Salman","ham dil de chuke sanam"),
		array("Ranvir","wake up sid")
);

$total=count($actors_name_movie);
echo $total."<br/>";

echo $actors_name_movie[0][0]."&lt;br/>";
echo $actors_name_movie[0][1]."&lt;br/>";
echo $actors_name_movie[1][0]."&lt;br/>";
echo $actors_name_movie[1][1]."&lt;br/>";
echo $actors_name_movie[2][0]."&lt;br/>";
echo $actors_name_movie[2][1]."&lt;br/>";
</pre>


<h3>Two-Dimensional Arrays</h3>
<pre class="prettyprint">
$actors_name_movie = array
(
		array("Hrithik","kaho na pyar h"),
		array("Salman","ham dil de chuke sanam"),
		array("Ranvir","wake up sid")
);

$total=count($actors_name_movie);
echo $total."&lt;br/>";

foreach ($actors_name_movie as $new){
	foreach ($new as $new2){
		echo $new2."&lt;br/>";
	}
}

</pre>