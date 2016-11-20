<h3>welcome.blade.php(direct use in file)</h3><hr/>
<pre class="prettyprint">
&lt;?php	

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

<h3>core php in controller</h3><hr/>
<pre class="prettyprint">
	public function index(){
        $ip=$_SERVER['REMOTE_ADDR'];
		return view('welcome')->with('ip',$ip);
	}
</pre>

<h3>welcome.blade.php()</h3><hr/>
<pre class="prettyprint">
&#123;{$ip}}	
</pre>
