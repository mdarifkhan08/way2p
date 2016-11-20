			<h3>index.php</h3>
			<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html lang="en">
&lt;head>
&lt;meta charset="utf-8">
&lt;title>Left Navigation Menu&lt;/title>
&lt;meta name="viewport" content="width=device-width, initial-scale=1">
&lt;link
	href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
	rel="stylesheet" id="bootstrap-css">
&lt;link
	href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
	rel="stylesheet">
&lt;style type="text/css">
.left_menu {
	margin: 20px 0;
}

.left_menu-sidebar {
	padding: 20px 0 10px 0;
	background: #fff;
}

.left_menu-userpic img {
	float: none;
	margin: 0 auto;
	width: 50%;
	height: 50%;
	-webkit-border-radius: 50% !important;
	-moz-border-radius: 50% !important;
	border-radius: 50% !important;
}

.left_menu-usertitle {
	text-align: center;
	margin-top: 20px;
}

.left_menu-usertitle-name {
	color: #5a7391;
	font-size: 16px;
	font-weight: 600;
	margin-bottom: 7px;
}

.left_menu-usertitle-job {
	text-transform: uppercase;
	color: #d5443f;
	font-size: 12px;
	font-weight: 600;
	margin-bottom: 15px;
}

.left_menu-userbuttons {
	text-align: center;
	margin-top: 10px;
}

.left_menu-userbuttons .btn {
	text-transform: uppercase;
	font-size: 11px;
	font-weight: 600;
	padding: 6px 15px;
	margin-right: 5px;
}

.left_menu-userbuttons .btn:last-child {
	margin-right: 0px;
}

.left_menu-usermenu {
	margin-top: 30px;
}

.left_menu-usermenu ul li {
	border-bottom: 1px solid #f0f4f7;
	list-style: none;
}

.left_menu-usermenu ul li:last-child {
	border-bottom: none;
}

.left_menu-usermenu ul li a {
	color: #d5443f;
	font-size: 14px;
	font-weight: 400;
	text-decoration: none;
}

.left_menu-usermenu ul li a i {
	margin-right: 8px;
	font-size: 14px;
}

.left_menu-usermenu ul li a:hover {
	background-color: #459a9a;
	color: #fff;
}

.left_menu-usermenu ul li.active {
	border-bottom: none;
}

.left_menu-usermenu ul li.active a {
	color: #bb3b36;
	background-color: #ffaa55;
	border-left: 2px solid #ff7a75;
	margin-left: -2px;
}

.left_menu-content {
	padding: 20px;
	background: #fff;
	min-height: 460px;
}

.search-form .form-group {
	float: right !important;
	transition: all 0.35s, border-radius 0s;
	width: 32px;
	height: 32px;
	background-color: #fff;
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
	border-radius: 25px;
	border: 1px solid #ccc;
}

.search-form .form-group input.form-control {
	padding-right: 20px;
	border: 0 none;
	background: transparent;
	box-shadow: none;
	display: block;
}

.search-form .form-group input.form-control::-webkit-input-placeholder {
	display: none;
}

.search-form .form-group input.form-control:-moz-placeholder {
	display: none;
}

.search-form .form-group input.form-control::-moz-placeholder {
	display: none;
}

.search-form .form-group input.form-control:-ms-input-placeholder {
	display: none;
}

.search-form .form-group:hover, .search-form .form-group.hover {
	width: 100%;
	border-radius: 4px 25px 25px 4px;
}

.search-form .form-group span.form-control-feedback {
	position: absolute;
	top: -1px;
	right: -2px;
	z-index: 2;
	display: block;
	width: 34px;
	height: 34px;
	line-height: 34px;
	text-align: center;
	color: #3596e0;
	left: initial;
	font-size: 14px;
}

.group-account {
	text-align: center;
}
&lt;/style>

&lt;/head>
&lt;body>

	&lt;div class="container">
		&lt;div class="row left_menu">
			&lt;div class="col-md-3">
				&lt;div class="left_menu-sidebar">

					&lt;div class="left_menu-userpic">
						&lt;img src="" class="img-responsive" alt="">
					&lt;/div>

					&lt;div class="left_menu-usertitle">
						&lt;div class="left_menu-usertitle-name">Arif Khan&lt;/div>
						&lt;div class="left_menu-usertitle-job">Gwalior&lt;/div>
					&lt;/div>

					&lt;div class="left_menu-usermenu">
						&lt;ul class="nav">
							&lt;li class="active">&lt;a href="#"> &lt;i class="fa fa-home">&lt;/i> Home
							&lt;/a>&lt;/li>

							&lt;li data-toggle="collapse" data-target="#profile"
								class="collapsed">&lt;a href="#">&lt;i class="fa fa-user">&lt;/i> Profile &lt;i class="fa fa-chevron-down " style="float: right;" >&lt;/i>
									&lt;span class="glyphicon glyphicon-menu-down">&lt;/span>&lt;/a>&lt;/li>
							&lt;ul class="sub-menu collapse" id="profile">
								&lt;li>&lt;a href="#">&lt;i class="fa fa-long-arrow-right">&lt;/i> View&lt;/a>&lt;/li>
								&lt;li>&lt;a href="#">&lt;i class="fa fa-long-arrow-right">&lt;/i> Edit&lt;/a>&lt;/li>
							&lt;/ul>

							&lt;li data-toggle="collapse" data-target="#uploads"
								class="collapsed">&lt;a href="#">&lt;i class="fa fa-upload">&lt;/i>
									Upload &lt;i class="fa fa-chevron-down " style="float: right;" >&lt;/i>&lt;span class="glyphicon glyphicon-menu-down">&lt;/span>&lt;/a>
							&lt;/li>
							&lt;ul class="sub-menu collapse" id="uploads">
								&lt;li>&lt;a href="#">&lt;i class="fa fa-long-arrow-right">&lt;/i> Logo
										Image&lt;/a>&lt;/li>
								&lt;li>&lt;a href="#">&lt;i class="fa fa-long-arrow-right">&lt;/i> Images&lt;/a>&lt;/li>
								&lt;li>&lt;a href="#">&lt;i class="fa fa-long-arrow-right">&lt;/i> Video&lt;/a>&lt;/li>
							&lt;/ul>


							&lt;li data-toggle="collapse" data-target="#view-edit"
								class="collapsed">&lt;a href="#">&lt;i class="fa fa-pencil-square-o">&lt;/i>
									View/Edit &lt;i class="fa fa-chevron-down " style="float: right;" >&lt;/i> &lt;span class="glyphicon glyphicon-menu-down">&lt;/span>&lt;/a>
							&lt;/li>
							&lt;ul class="sub-menu collapse" id="view-edit">
								&lt;li>&lt;a href="#">&lt;i class="fa fa-long-arrow-right">&lt;/i> Logo
										Image&lt;/a>&lt;/li>
								&lt;li>&lt;a href="#">&lt;i class="fa fa-long-arrow-right">&lt;/i> Images&lt;/a>&lt;/li>
								&lt;li>&lt;a href="#">&lt;i class="fa fa-long-arrow-right">&lt;/i> Video&lt;/a>&lt;/li>
							&lt;/ul>

							&lt;li>&lt;a href="#"> &lt;i class="fa fa-flag">&lt;/i> Help
							&lt;/a>&lt;/li>

							&lt;li>&lt;a href="#"> &lt;i class="fa fa-sign-out">&lt;/i> Log Out
							&lt;/a>&lt;/li>

						&lt;/ul>
					&lt;/div>

				&lt;/div>
			&lt;/div>
			&lt;div class="col-md-9">
				&lt;form action="">
					&lt;div class="form-group has-feedback">
						&lt;label for="search" class="sr-only">Search&lt;/label> &lt;input
							type="text" class="form-control" name="search" id="search"
							placeholder="search">
					&lt;/div>
				&lt;/form>
			&lt;/div>
			&lt;div class="col-md-9">
				&lt;div class="left_menu-content">
					&lt;p>XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ
						XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ
						XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ XYZ&lt;/p>
					&lt;div>&lt;/div>
				&lt;/div>
			&lt;/div>
		&lt;/div>
	&lt;/div>

	&lt;script src="//code.jquery.com/jquery-1.10.2.min.js">&lt;/script>
	&lt;script
		src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js">&lt;/script>
&lt;/body>
&lt;/html>
            </pre>

			
			
			
			<h3>output</h3>
			<pre class="prettyprint">
<img src="<?php echo base_url();?>static/images/ice_screenshot_20151024-120435.png"/>
            </pre>
