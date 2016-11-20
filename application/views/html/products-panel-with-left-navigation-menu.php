<h3>style.css</h3><hr/>
<pre class="prettyprint">

/* start women */
.w_sidebar{
	border: 1px solid #EBEBEB;
}
.w_nav1 ul{
	padding:0;
	list-style:none;
}
.w_nav1{
	padding: 20px;
}
.w_nav1 h4{
	text-transform:uppercase;
	color:#ff6978;
	font-size: 1em;
	margin-bottom: 5px;
}
.w_nav1 ul li{
	line-height: 1.5em;
}
.w_nav1 ul li a{
	display: block;
	text-transform:uppercase;
	color: #555555;
	font-size: 0.8725em;
}
.w_nav1 ul li a:hover{
	color:#00405d;
}
.w_nav2{
	padding: 20px;
}
.w_nav2  li{
	line-height: 1.5em;
	display: inline-block;
}
.w_nav2 li a{
	display: block;
	padding: 14px;
}
.w_nav2 li a.color1{
	background:	#0AA5E2;
}
.w_nav2 li a.color2{
	background:	#40E0D0;
}
.w_nav2 li a.color3{
	background:	#B03060;
}
.w_nav2 li a.color4{
	background:	#000080;
}
.w_nav2 li a.color5{
	background:	#E60D41;
}
.w_nav2 li a.color6{
	background:	#45BF55;
}
.w_nav2 li a.color7{
	background:	#FF7F00;
}
.w_nav2 li a.color8{
	background:	#8B4513;
}
.w_nav2 li a.color9{
	background:	#FFD700;
}
.w_nav2 li a.color10{
	background:	#9FA8AB;
}
.w_nav2 li a.color11{
	background:	#C0C0C0;
}
.w_nav2 li a.color12{
	background:	#0AA5E2;
}
.w_nav2 li a.color13{
	background:	#FFCBDB;
}
.w_nav2 li a.color14{
	background:	#B87333;
}
.w_nav2 li a.color15{
	background:	#BFB540;
}
.sky-form .label {
	display: block;
	margin-bottom: 6px;
	line-height: 19px;
}
.w_sidebar h3{
	padding:0 20px 10px;
	font-size: 1em;
	color: #555555;
	text-transform:uppercase;
}
/* radios and checkboxes */
.sky-form {
	margin-top: -10px;
}
.row1{
	outline:none;
	padding: 20px;
	overflow: auto;
	height: 200px;
}
.sky-form.col.col-4 ul {
padding: 0;
list-style: none;
}
.sky-form h4{
	margin-top: 10px;
	background: #ECECEC;
	padding: 10px 20px;
	color: #333333;
	text-transform: uppercase;
	margin-bottom: 0;
	font-size:16px;
}
.sky-form section {
	margin-bottom: 20px;
}
.sky-form .label {
	display: block;
	margin-bottom: 6px;
	line-height: 19px;
}
.sky-form .label.col {
	margin: 0;
	padding-top: 10px;
}
.sky-form .input,
.sky-form .select,
.sky-form .textarea,
.sky-form .radio,
.sky-form .checkbox,
.sky-form .toggle,
.sky-form .button {
	position: relative;
	display: block;
}
/* selects */
.sky-form .select i {
	position: absolute;
	top: 14px;
	right: 14px;
	width: 1px;
	height: 11px;
	background: #fff;
	box-shadow: 0 0 0 12px #fff;
}
.sky-form .select i:after,
.sky-form .select i:before {
	content: '';
	position: absolute;
	right: 0;
	border-right: 4px solid transparent;
	border-left: 4px solid transparent;
}
.sky-form .select i:after {
	bottom: 0;
	border-top: 4px solid #404040;
}
.sky-form .select i:before {
	top: 0;
	border-bottom: 4px solid #404040;
}
.sky-form .select-multiple select {
	height: auto;
}
/* radios and checkboxes */
.sky-form .radio,.sky-form .checkbox {
	outline:none;
	border:none;
	margin-bottom: 4px;
	padding-left: 27px;
	font-size: 13px;
	line-height: 27px;
	color: #555555;
	cursor: pointer;
	text-transform: capitalize;
	font-weight: normal;
	margin-top: 0;
}
.sky-form .radio{
	text-transform: none;
}
.sky-form .radio:last-child,
.sky-form .checkbox:last-child {
	margin-bottom: 0;
}
.sky-form .radio input,
.sky-form .checkbox input {
	position: absolute;
	left: -9999px;
}
.sky-form .radio i,
.sky-form .checkbox i {
	position: absolute;
	top: 5px;
	left: 0;
	display: block;
	width: 17px;
	height: 17px;
	outline: none;
	border-width: 2px;
	border-style: solid;
	background: #fff;
}
.sky-form .radio i {
	border-radius: 50%;
}
.sky-form .radio input + i:after,
.sky-form .checkbox input + i:after {
	position: absolute;
	opacity: 0;
	transition: opacity 0.1s;
	-o-transition: opacity 0.1s;
	-ms-transition: opacity 0.1s;
	-moz-transition: opacity 0.1s;
	-webkit-transition: opacity 0.1s;
}
.sky-form .radio input + i:after {
	content: '';
	top: 4px;
	left: 4px;
	width: 5px;
	height: 5px;
	border-radius: 50%;
}
.sky-form .checkbox input + i:after {
	content: '';
	top: 3px;
	left: 2px;
	width: 10px;
	height: 7px;
	background: url(../images/tick.png) no-repeat;
	text-align: center;
}
.sky-form .radio input:checked + i:after,
.sky-form .checkbox input:checked + i:after {
	opacity: 1;
}
.sky-form .inline-group {
	margin: 0 -30px -4px 0;
}
.sky-form .inline-group:after {
	content: '';
	display: table;
	clear: both;
}
.sky-form .inline-group .radio,
.sky-form .inline-group .checkbox {
	float: left;
	margin-right: 30px;
}
.sky-form .inline-group .radio:last-child,
.sky-form .inline-group .checkbox:last-child {
	margin-bottom: 4px;
}
/* icons */

.sky-form [class^="icon-"] {
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  -webkit-font-smoothing: antialiased;
}
/* normal state */
.sky-form .input input,
.sky-form .select select,
.sky-form .textarea textarea,
.sky-form .radio i,
.sky-form .checkbox i,
.sky-form .toggle i,
.sky-form .icon-append,
.sky-form .icon-prepend {
	border-color: #e5e5e5;
	transition: border-color 0.3s;
	-o-transition: border-color 0.3s;
	-ms-transition: border-color 0.3s;
	-moz-transition: border-color 0.3s;
	-webkit-transition: border-color 0.3s;
}
.sky-form .toggle i:before {
	background-color: #2da5da;	
}
/* hover state */
.sky-form .input:hover input,
.sky-form .select:hover select,
.sky-form .textarea:hover textarea,
.sky-form .radio:hover i,
.sky-form .checkbox:hover i,
.sky-form .toggle:hover i {
	border-color: #8dc9e5;
}
.sky-form .button:hover {
	opacity: 1;
}
/* focus state */
.sky-form .input input:focus,
.sky-form .select select:focus,
.sky-form .textarea textarea:focus,
.sky-form .radio input:focus + i,
.sky-form .checkbox input:focus + i,
.sky-form .toggle input:focus + i {
	border-color: #2da5da;
}
/* checked state */
.sky-form .radio input + i:after {
	background-color: #ff6978;	
}
.sky-form .checkbox input + i:after {
	color: #2da5da;
}
.sky-form .radio input:checked + i,
.sky-form .checkbox input:checked + i,
.sky-form .toggle input:checked + i {
	border-color: #ff6978;	
}
/* error state */
.sky-form .state-error input,
.sky-form .state-error select,
.sky-form .state-error textarea,
.sky-form .radio.state-error i,
.sky-form .checkbox.state-error i,
.sky-form .toggle.state-error i {
	background: #fff0f0;
}
/* success state */
.sky-form .state-success input,
.sky-form .state-success select,
.sky-form .state-success textarea,
.sky-form .radio.state-success i,
.sky-form .checkbox.state-success i,
.sky-form .toggle.state-success i {
	background: #f0fff0;
}
/* disabled state */
.sky-form .input.state-disabled input,
.sky-form .select.state-disabled,
.sky-form .textarea.state-disabled,
.sky-form .radio.state-disabled,
.sky-form .checkbox.state-disabled,
.sky-form .toggle.state-disabled,
.sky-form .button.state-disabled {
	cursor: default;
	opacity: 0.5;
}
.sky-form .input.state-disabled:hover input,
.sky-form .select.state-disabled:hover select,
.sky-form .textarea.state-disabled:hover textarea,
.sky-form .radio.state-disabled:hover i,
.sky-form .checkbox.state-disabled:hover i,
.sky-form .toggle.state-disabled:hover i {
	border-color: #e5e5e5;
}

/*-- start w_content --*/
.women_main{
	padding:2em 0;
}
.women{
	text-align: left;
	border-bottom: 1px solid #ebebeb;
}
.women h4{
	float:left;
	font-size:1em;
	text-transform:uppercase;
	color: #333333;
}
.women h4{
	color:#555555;
}
.w_nav {
	float:right;
	color:#555555;
	font-size:0.8125em;
	padding:0;
	list-style:none;
}
.w_nav li{
	display: inline-block;
}
.w_nav li a{
	display: block;
	color:#555555;
	text-transform:capitalize;
}
.w_nav li a:hover{
	color: #00405d;
}
.grids_of_4{
	display:block;
	margin: 2% 0;
}
.grid1_of_4{
	float: left;
	width: 30.22222%;
	margin-left: 2.33333%;
	text-align:center;
}
.grid1_of_4:first-child{
	margin-left: 0;
	text-align:center;
}
.grid1_of_4 h4 {
	font-size:16px;
	margin-top:5px;
}
.grid1_of_4 h4 a{
	text-transform:uppercase;
	color:#000000;
	text-decoration:none;
}
.grid1_of_4 h4 a:hover{
	color:#ff6978;
}
.grid1_of_4 p{
	font-size: 0.8125em;
	color:#3f3d3d;
	line-height: 1.8em;
	margin-bottom: 10px;
}
.content_box-grid {
	margin-top: 1em;
}



.item_add {
  border: none;
  color: #3f3d3d;
  padding: 10px 20px;
  font-size: 0.85em;
  border: none;
  text-align: center;
}
.item_add:hover{
}	


.item_add  a{
  background: rgb(9, 209, 182);
  border: none;
  color: #fff;
  padding: 10px 20px;
  font-size: 0.85em;
  border: none;
}




span.item_price {
  color: #3f3d3d;
  font-size: 1.2em;
  font-weight: 400;
  text-align: center;
}

@media (max-width:640px){
.grid1_of_4 {
	width: 47.22222%;
}
}


@media (max-width:667px){
.item_add a {
    padding: 7px 9px; 
}
}

@media (max-width:600px){
.item_add a {
    padding: 7px 8px;
}
}

@media (max-width:568px){
.item_add a {
    padding: 7px 3px;
    font-size: 0.8125em;
}
}

@media (max-width:320px){
.item_add a {
  padding: 7px 10px;
  font-size: 0.8125em;
}
}	
</pre>




<h3></h3><hr/>
<pre class="prettyprint">
&lt;!DOCTYPE HTML>
&lt;html>
&lt;head>
&lt;title>&lt;/title>
&lt;link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
&lt;link href="css/style.css" rel='stylesheet' type='text/css' />
&lt;meta name="viewport" content="width=device-width, initial-scale=1">
&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
&lt;meta name="keywords" content="" />
&lt;script type="application/x-javascript">addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } &lt;/script>
&lt;link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
&lt;link href='//fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
&lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
&lt;/head>
&lt;body>
&lt;div class="container">
&lt;div class="women_main">
	&lt;div class="col-md-3 s-d">
	  &lt;div class="w_sidebar">
		&lt;div class="w_nav1">
			&lt;h4>All&lt;/h4>
			&lt;ul>
				&lt;li>&lt;a href="">Xyz1&lt;/a>&lt;/li>
				&lt;li>&lt;a href="#">Xyz2&lt;/a>&lt;/li>
				&lt;li>&lt;a href="#">Xyz3&lt;/a>&lt;/li>
				&lt;li>&lt;a href="#">Xyz4&lt;/a>&lt;/li>
				&lt;li>&lt;a href="#">Xyz5&lt;/a>&lt;/li>
				&lt;li>&lt;a href="#">Xyz6&lt;/a>&lt;/li>
			&lt;/ul>	
		&lt;/div>
		&lt;h3>filter by&lt;/h3>
		&lt;section  class="sky-form">
					&lt;h4>categories&lt;/h4>
						&lt;div class="row1 scroll-pane">
							&lt;div class="col col-4">
								&lt;label class="checkbox">&lt;input type="checkbox" name="checkbox" checked="">&lt;i>&lt;/i>Xyz&lt;/label>
							&lt;/div>
							&lt;div class="col col-4">
								&lt;label class="checkbox">&lt;input type="checkbox" name="checkbox">&lt;i>&lt;/i>Xyz&lt;/label>
								&lt;label class="checkbox">&lt;input type="checkbox" name="checkbox">&lt;i>&lt;/i>Xyz&lt;/label>
								&lt;label class="checkbox">&lt;input type="checkbox" name="checkbox">&lt;i>&lt;/i>Xyz&lt;/label>
								&lt;label class="checkbox">&lt;input type="checkbox" name="checkbox">&lt;i>&lt;/i>Xyz&lt;/label>
								&lt;label class="checkbox">&lt;input type="checkbox" name="checkbox" >&lt;i>&lt;/i>Xyz&lt;/label>
								&lt;label class="checkbox">&lt;input type="checkbox" name="checkbox">&lt;i>&lt;/i>Xyz&lt;/label>
								&lt;label class="checkbox">&lt;input type="checkbox" name="checkbox">&lt;i>&lt;/i>Xyz&lt;/label>
							&lt;/div>
						&lt;/div>
		&lt;/section>
	&lt;/div>
   &lt;/div>
	&lt;!-- start content -->
	&lt;div class="col-md-9 w_content">
		&lt;div class="women">
			&lt;a href="#">&lt;h4>Xyz - &lt;span>451 items&lt;/span> &lt;/h4>&lt;/a>
			&lt;ul class="w_nav">
						&lt;li>Sort : &lt;/li>
		     			&lt;li>&lt;a class="active" href="#">popular&lt;/a>&lt;/li> |
		     			&lt;li>&lt;a href="#">new &lt;/a>&lt;/li> |
		     			&lt;li>&lt;a href="#">discount&lt;/a>&lt;/li> |
		     			&lt;li>&lt;a href="#">price: Low High &lt;/a>&lt;/li> 
		     			&lt;div class="clear">&lt;/div>	
		     &lt;/ul>
		     &lt;div class="clearfix">&lt;/div>	
		&lt;/div>
		&lt;!-- grids_of_4 -->
		&lt;div class="grids_of_4">
		  &lt;div class="grid1_of_4">
				&lt;div class="content_box">&lt;a href="details.html">
			   	   	 &lt;img src="images/w1.jpg" class="img-responsive" alt=""/>
				   	  &lt;/a>
				    &lt;h4>&lt;a href="details.html">XYZ&lt;/a>&lt;/h4>
				     &lt;p>XYZ Information&lt;/p>
					 &lt;div class="grid_1 simpleCart_shelfItem">
				    
					 &lt;div class="item_add">&lt;span class="item_price">&lt;h6>ONLY &lt;i class="fa fa-inr">&lt;/i>99.00&lt;/h6>&lt;/span>&lt;/div>
					&lt;div class="item_add">&lt;span class="item_price">&lt;a href="#">add to cart&lt;/a>&lt;/span>&lt;/div>
					 &lt;/div>
			   	&lt;/div>
			&lt;/div>
			&lt;div class="grid1_of_4">
				&lt;div class="content_box">&lt;a href="details.html">
			   	   	 &lt;img src="images/w2.jpg" class="img-responsive" alt=""/>
				   	  &lt;/a>
				    &lt;h4>&lt;a href="details.html">XYZ&lt;/a>&lt;/h4>
				     &lt;p>XYZ Information&lt;/p>
					 &lt;div class="grid_1 simpleCart_shelfItem">
				    
					 &lt;div class="item_add">&lt;span class="item_price">&lt;h6>ONLY &lt;i class="fa fa-inr">&lt;/i>76.00&lt;/h6>&lt;/span>&lt;/div>
					&lt;div class="item_add">&lt;span class="item_price">&lt;a href="#">add to cart&lt;/a>&lt;/span>&lt;/div>
					 &lt;/div>
			   	&lt;/div>
			&lt;/div>
			&lt;div class="grid1_of_4">
				&lt;div class="content_box">&lt;a href="details.html">
			   	   	 &lt;img src="images/w3.jpg" class="img-responsive" alt=""/>
				   	  &lt;/a>
				    &lt;h4>&lt;a href="details.html">XYZ&lt;/a>&lt;/h4>
				     &lt;p>XYZ Information&lt;/p>
					 &lt;div class="grid_1 simpleCart_shelfItem">
				    
					 &lt;div class="item_add">&lt;span class="item_price">&lt;h6>ONLY &lt;i class="fa fa-inr">&lt;/i>58.00&lt;/h6>&lt;/span>&lt;/div>
					&lt;div class="item_add">&lt;span class="item_price">&lt;a href="#">add to cart&lt;/a>&lt;/span>&lt;/div>
					 &lt;/div>
			   	&lt;/div>
			&lt;/div>
			
			&lt;div class="clearfix">&lt;/div>
		&lt;/div>
		&lt;div class="grids_of_4">
		 &lt;div class="grid1_of_4">
				&lt;div class="content_box">&lt;a href="details.html">
			   	   	 &lt;img src="images/w5.jpg" class="img-responsive" alt=""/>
				   	  &lt;/a>
				    &lt;h4>&lt;a href="details.html">XYZ&lt;/a>&lt;/h4>
				     &lt;p>XYZ Information&lt;/p>
					 &lt;div class="grid_1 simpleCart_shelfItem">
				    
					 &lt;div class="item_add">&lt;span class="item_price">&lt;h6>ONLY &lt;i class="fa fa-inr">&lt;/i>1090.00&lt;/h6>&lt;/span>&lt;/div>
					&lt;div class="item_add">&lt;span class="item_price">&lt;a href="#">add to cart&lt;/a>&lt;/span>&lt;/div>
					 &lt;/div>
			   	&lt;/div>
			&lt;/div>
			&lt;div class="grid1_of_4">
				&lt;div class="content_box">&lt;a href="details.html">
			   	   	 &lt;img src="images/w6.jpg" class="img-responsive" alt=""/>
				   	  &lt;/a>
				    &lt;h4>&lt;a href="details.html">XYZ&lt;/a>&lt;/h4>
				     &lt;p>XYZ Information&lt;/p>
					 &lt;div class="grid_1 simpleCart_shelfItem">
				    
					 &lt;div class="item_add">&lt;span class="item_price">&lt;h6>ONLY &lt;i class="fa fa-inr">&lt;/i>950.00&lt;/h6>&lt;/span>&lt;/div>
					&lt;div class="item_add">&lt;span class="item_price">&lt;a href="#">add to cart&lt;/a>&lt;/span>&lt;/div>
					 &lt;/div>
			   	&lt;/div>
			&lt;/div>
			&lt;div class="grid1_of_4">
				&lt;div class="content_box">&lt;a href="details.html">
			   	   	 &lt;img src="images/w7.jpg" class="img-responsive" alt=""/>
				   	  &lt;/a>
				    &lt;h4>&lt;a href="details.html">XYZ&lt;/a>&lt;/h4>
				     &lt;p>XYZ Information&lt;/p>
					 &lt;div class="grid_1 simpleCart_shelfItem">
				    
					 &lt;div class="item_add">&lt;span class="item_price">&lt;h6>ONLY &lt;i class="fa fa-inr">&lt;/i>680.00&lt;/h6>&lt;/span>&lt;/div>
					&lt;div class="item_add">&lt;span class="item_price">&lt;a href="#">add to cart&lt;/a>&lt;/span>&lt;/div>
					 &lt;/div>
			   	&lt;/div>
			&lt;/div>
			&lt;div class="clearfix">&lt;/div>
		&lt;/div>
		&lt;div class="grids_of_4">
		  &lt;div class="grid1_of_4">
				&lt;div class="content_box">&lt;a href="details.html">
			   	   	 &lt;img src="images/w9.jpg" class="img-responsive" alt=""/>
				   	  &lt;/a>
				    &lt;h4>&lt;a href="details.html">XYZ&lt;/a>&lt;/h4>
				     &lt;p>XYZ Information&lt;/p>
					 &lt;div class="grid_1 simpleCart_shelfItem">
				    
					 &lt;div class="item_add">&lt;span class="item_price">&lt;h6>ONLY &lt;i class="fa fa-inr">&lt;/i>800.00&lt;/h6>&lt;/span>&lt;/div>
					&lt;div class="item_add">&lt;span class="item_price">&lt;a href="#">add to cart&lt;/a>&lt;/span>&lt;/div>
					 &lt;/div>
			   	&lt;/div>
			&lt;/div>
			&lt;div class="grid1_of_4">
				&lt;div class="content_box">&lt;a href="details.html">
			   	   	 &lt;img src="images/w10.jpg" class="img-responsive" alt=""/>
				   	  &lt;/a>
				    &lt;h4>&lt;a href="details.html">XYZ&lt;/a>&lt;/h4>
				     &lt;p>XYZ Information&lt;/p>
					 &lt;div class="grid_1 simpleCart_shelfItem">
				    
					 &lt;div class="item_add">&lt;span class="item_price">&lt;h6>ONLY &lt;i class="fa fa-inr">&lt;/i>650.00&lt;/h6>&lt;/span>&lt;/div>
					&lt;div class="item_add">&lt;span class="item_price">&lt;a href="#">add to cart&lt;/a>&lt;/span>&lt;/div>
					 &lt;/div>
			   	&lt;/div>
			&lt;/div>
			&lt;div class="grid1_of_4">
				&lt;div class="content_box">&lt;a href="details.html">
			   	   	 &lt;img src="images/w11.jpg" class="img-responsive" alt=""/>
				   	  &lt;/a>
				    &lt;h4>&lt;a href="details.html">XYZ&lt;/a>&lt;/h4>
				     &lt;p>XYZ Information&lt;/p>
					 &lt;div class="grid_1 simpleCart_shelfItem">
				    
					 &lt;div class="item_add">&lt;span class="item_price">&lt;h6>ONLY &lt;i class="fa fa-inr">&lt;/i>900.00&lt;/h6>&lt;/span>&lt;/div>
					&lt;div class="item_add">&lt;span class="item_price">&lt;a href="#">add to cart&lt;/a>&lt;/span>&lt;/div>
					 &lt;/div>
			   	&lt;/div>
			&lt;/div>
			&lt;/div>
			&lt;div class="clearfix">&lt;/div>
		&lt;/div>
		&lt;!-- end grids_of_4 -->
	&lt;/div>
	&lt;div class="clearfix">&lt;/div>
	&lt;!-- end content -->
&lt;/div>
&lt;/div>
&lt;/body>
&lt;/html>	
</pre>
