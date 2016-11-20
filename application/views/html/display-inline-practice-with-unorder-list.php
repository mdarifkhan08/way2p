
<style>
.nav{
background-color:purple;
}
.nav li{
display:inline-block;
text-align:center;
width:150px;
height:30px;
background-color:purple;
}
.nav li:hover{
background-color:orange;
}
.nav li a{
text-decoration:none;
color:white;
display:block;
width: 100%;
height: 100%;
padding:6px 0 0 0;
}
</style>



<h3>index.html</h3><hr/>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html lang="en">
 &lt;head>
  &lt;title>Document&lt;/title>
  &lt;style>
.nav{
background-color:purple;
}
.nav li{
display:inline-block;
text-align:center;
width:150px;
height:30px;
background-color:purple;
}
.nav li:hover{
background-color:orange;
}
.nav li a{
text-decoration:none;
color:white;
display:block;
width: 100%;
height: 100%;
padding:6px 0 0 0;
}
  &lt;/style>
 &lt;/head>
 &lt;body>
  &lt;ul class="nav">
    &lt;li>&lt;a href="#">HTML5&lt;/a>&lt;/li>
	&lt;li>&lt;a href="#">CSS&lt;/a>&lt;/li>
	&lt;li>&lt;a href="#">JAVA SCRIPT&lt;/a>&lt;/li>
	&lt;li>&lt;a href="#">JQUERY&lt;/a>&lt;/li>
	&lt;li>&lt;a href="#">PHP&lt;/a>&lt;/li>
	&lt;li>&lt;a href="#">MYSQL&lt;/a>&lt;/li>
	&lt;li>&lt;a href="#">Laravel&lt;/a>&lt;/li>
  &lt;/ul>
 &lt;/body>
&lt;/html>
	
</pre>

<h3>Output: Without Bootstrap</h3>

<div class="container">
  <ul class="nav container">
    <li><a href="#">HTML5</a></li>
	<li><a href="#">CSS</a></li>
	<li><a href="#">JAVA SCRIPT</a></li>
	<li><a href="#">JQUERY</a></li>
	<li><a href="#">PHP</a></li>
	<li><a href="#">MYSQL</a></li>
	<li><a href="#">Laravel</a></li>
  </ul>
 </div>
