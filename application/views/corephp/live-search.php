
<h3></h3><hr/>
<pre class="prettyprint">
&lt;script type="text/javascript">
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
&lt;/script>
</pre>




<h3></h3><hr/>
<pre class="prettyprint">
&lt;form action="" method="">
    &lt;table>
      &lt;tr>
        &lt;td>&lt;input type="text" name="" placeholder="Search Category"
          onkeyup="showResult(this.value)" class="form-control" />&lt;/td>
        &lt;td style="width: 10%">&lt;input type="submit" value="SEARCH"
          class="btn btn-primary " />&lt;/td>
      &lt;/tr>
    &lt;/table>
    &lt;div id="livesearch">&lt;/div>
&lt;/form>
</pre>



<h3></h3><hr/>
<pre class="prettyprint">
&lt;?php
include ('dbconfig.php');

$stmt34 = $DB_CON->prepare ( "select * from services where info LIKE :info" );
$stmt34->bindValue(':info', '%'.$_GET['q'].'%');
$stmt34->execute();

while ( $row = $stmt34->fetchObject() ) {
    echo '&lt;a href="products2.php" >' . $row->info . ' ' . '&lt;/a>&lt;br/>';
}
</pre>



<h3></h3><hr/>
<pre class="prettyprint">
&lt;?php
include ('dbconfig.php');

$stmt34 = $DB_CON->prepare ( "select * from services where info LIKE :info" );
$stmt34->bindValue(':info', '%'.$_GET['q'].'%');
$stmt34->execute();

while ( $row = $stmt34->fetchObject() ) {
    echo '&lt;a href="products2.php" >' . $row->info . ' ' . '&lt;/a>&lt;br/>';
}
</pre>



<h3></h3><hr/>
<pre class="prettyprint">
#livesearch {
	background-color: white;
}

#livesearch a {
	color: black;
	margin: 20px;
	font-size: 18px;
}

#padd {
	padding: 30px;

}

@media ( max-width :320px) {
	#padd {
		padding: 0px;
	}
}

@media ( max-width :480px) {
	#padd {
		padding: 0px;
		margin-right: 5px;
		align: center;
	}
}
</pre>

