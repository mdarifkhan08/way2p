<style>
#data-for-view-show{
	display: none;
}
.viewDemo{
	width:100px;
	height:30px;
	background-color:lightgreen;
	padding: 5px 0 0 5px;
	transition: width 1s,height 1s,font 1s;

}
.viewDemo:hover{
	width:200px;
	height:60px;
	font-size: 25px;
}
</style>
<script type="text/javascript">
function dis(){
	document.getElementById('data-for-view-show').style.display='block';
}
</script>

<h3>slide div over the div vertically</h3><hr/>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;style>
.back_div {
    background: #808080;
  }
.back_div img {
	width: 100%;
}
.slider {
    opacity: 0;
    top: 0%;
    position: absolute;
    background-color: rgba(255, 255, 255, 0.37);
    width: 100%;
    text-align: center;
	transition: 0.5s all ease;
	-webkit-transition: 0.5s all ease;
	-moz-transition: 0.5s all ease;
	-o-transition: 0.5s all ease;
	-ms-transition: 0.5s all ease;
}
.back_div:hover .slider{
	display:block;
	top: 50%;
	opacity:1;
}
.slider ul li{
	list-style-type:none;
	display:inline-block;
}
.col_md_3{
  position: relative;
}
&lt;/style>
&lt;/head>
&lt;body>
			&lt;div class="col_md_3 back_div">
				&lt;img src="images/430919.jpg" alt=""/>
				&lt;div class="slider">
						&lt;ul>
							&lt;li>SOME TEXT&lt;/li>
						&lt;/ul>
				&lt;/div>
			&lt;/div>
&lt;/body>
&lt;/html>	
</pre>

<div>
	<p onclick="dis()" class="viewDemo">View Demo</p>
	<div id="data-for-view-show">
<style>
.back_div {
    background: #808080;
  }
.back_div img {
	width: 100%;
}
.slider {
    opacity: 0;
    top: 0%;
    position: absolute;
    background-color: rgba(255, 255, 255, 0.37);
    width: 100%;
    text-align: center;
	transition: 0.5s all ease;
	-webkit-transition: 0.5s all ease;
	-moz-transition: 0.5s all ease;
	-o-transition: 0.5s all ease;
	-ms-transition: 0.5s all ease;
}
.back_div:hover .slider{
	display:block;
	top: 50%;
	opacity:1;
}
.slider ul li{
	list-style-type:none;
	display:inline-block;
}
.col_md_3{
  position: relative;
}
</style>


    <div class="col_md_3 back_div">
				<img src="<?php echo base_url();?>static/images/430919.jpg" alt=""/>
				<div class="slider">
						<ul>
							<li>SOME TEXT</li>
						</ul>
				</div>
			</div>

	</div>
</div>
