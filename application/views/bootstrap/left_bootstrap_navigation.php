			<h3>index.php</h3>
			<pre class="prettyprint">
&lt;html>
&lt;head>
	&lt;title>Left Bootstrap navigation menu responsive&lt;/title>
	&lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	&lt;link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" >
	&lt;style type="text/css">
 @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600);
/* ----------------------------------------------------------------------------------- */
/* CSS Reset & Clear
/*----------------------------------------------------------------------------------- */
 @font-face {
	font-family: 'Glyphicons Halflings';
	src: url(../fonts/glyphicons-halflings-regular.eot);
	src: url(../fonts/glyphicons-halflings-regulard41d.eot?#iefix)
		format('embedded-opentype'),
		url(../fonts/glyphicons-halflings-regular.woff) format('woff'),
		url(../fonts/glyphicons-halflings-regular.ttf) format('truetype'),
		url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular)
		format('svg')
}
 table tbody tr:nth-child(even) { background:none;
 }
 
 
 body{
font-family: Verdana, Geneva, sans-serif;
 }
 
 .btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle)
 {border-bottom-right-radius:4px!important;
  border-bottom-left-radius:4px;
  border-top-right-radius:4px !important;
  border-top-left-radius:4px ;
 }
 .btn-group>.btn:last-child:not(:first-child),.btn-group>.dropdown-toggle:not(:first-child)
 {border-bottom-right-radius:0;
  border-bottom-left-radius:0;
  border-top-right-radius:0;
  border-top-left-radius:0;}
 
  .butt-on {
	
	padding:5px 8px;
	
	margin-top: 19px !important;
	text-transform: uppercase;
	text-align:center;
	
	border-bottom-right-radius:0 !important;
	border-bottom-left-radius:0 !important;
	border-top-right-radius:0 !important;
	border-top-left-radius:0 !important;
}
.pink2-btn {
	color: #FBA043 !important;
	border: solid 2px #FBA043 !important;
}
.pink2-btn:hover, .pink2-btn:focus {
	color: #fff !important;
	border: solid 2px #FBA043 !important;
	background: #FBA043 !important;
}
.rose2-btn {
	border: solid 2px #FBA043 !important;
	color: #fff !important;
	
}
.rose2-btn:hover,.rose2-btn:focus {
	border: solid 2px #FBA043 !important;
	color: #fff !important;
	background: #FBA043 !important;
}


 
 




a, button {
	text-decoration: none!important;
	-webkit-transition: color 300ms, background-color 300ms;
	transition: color 300ms, background-color 300ms;
}
.btn-main {
	text-decoration: none;
	-webkit-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
	background: #fff;
	border-radius: 0px;
	z-index: 1;
	font-weight: 700;
	font-size: 16px;
	line-height: 16px;
	padding: 18px 20px !important;
	/*height: 44px;*/
	text-transform: uppercase;
	margin-top: 60px;
	background: #333;
	color: #fff;
	border: 1px solid#333;
}

/*Profile
==========================================*/

h3.panel-title{line-height:20px; font-weight:600; padding:5px;}
.img-thumbnail, .profile-search-list-box .thumbnail, .thumbnail{border-radius:0 !important;}
.table-user-information{margin-bottom:0}
.table-user-information span{display:inline-block !important; margin-right:10px;}
.table-user-information td{padding-left:0 !important}
.table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {border:none !important}
.profile-sumup{margin-bottom:25px}
.profile-user-name{margin-bottom:10px;}
.profile-user-name a{font-size:20px; color:#933833}
.profile-search-result{border:solid 1px #ddd; margin-top:20px; margin-bottom:20px; background:#fafafa}
.profile-search-list-box{padding:15px 15px 8px 15px !important;}
.profile-img-gallery button i{margin: 0 0 0 5px !important}
.profile-img-gallery .img-thumbnail{margin-bottom:5px}
.profile-img-gallery{margin-bottom:20px;}
.remove-top-padding{padding-top:0;}
.action-box{margin-bottom: 0px;
padding: 10px 6px 4px 10px;
overflow:hidden !important
}
.panel{ padding: 0 !important;}
.panel-caption {
float: left;
display: inline-block;
font-size: 18px;
line-height: 18px;
font-weight: 400;
margin: 0;
padding: 0;
margin-bottom: 8px;
}
.panel-tools {
display: inline-block;
padding: 0;
margin: 0;
margin-top:-2px;
float: right;
}
.profile-subhead{ margin-bottom:30px}
.profile-subhead h3{font-weight: 400;
color: #FBA043;
font-size: 18px;
border-bottom: solid 1px #ccc;
margin: 0px 0 18px 0;
padding: 0;
line-height: 34px;}

/*Panel Color
==========================================*/
.panel{border-radius:0 !important; border:0 !important;-webkit-box-shadow: none !important;
box-shadow: none !important;}
.panel-body{border: 1px solid #ddd !important; border-top:none !important;}
.light-pink>.panel-heading {
color: #fff !important;
background-color: #CC0000;
border-color: #933833 !important;
border-radius:0 !important;}
.remove-padding{padding:0 !important}
.inside-panel{padding:10px 0 0 0;}
.inside-panel h6{font-size:16px !important;}
.remove-border{border:0 !important}



 Side Quick MenuText
=======================
.nav-side-menu .brand {
background-color: #933833;color: #fff;
padding: 11px 15px; font-size:18px; font-weight:300;
}
.nav-side-menu .toggle-btn {
  display: none;
}

.nav-side-menu li:hover {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}

@media (max-width: 767px) {
	
  .nav-side-menu {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
  }
  .nav-side-menu .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top:20px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }
  .brand {
    text-align: left !important;
    font-size: 22px;
    padding-left: 20px;
    line-height: 50px !important;
  }
 .collapse.in{
	  display: block !important;
  visibility: visible!important;}
  
}
@media (min-width: 767px) {
  .nav-side-menu .menu-list .menu-content {
    display: block;
  }
 .collapse {
  display: block !important;
 visibility: visible !important;
  /*visibility: hidden; */
}
}

.nav-side-menu .brand {
  background-color: #CC0000;
  color: #fff!important;
  padding: 11px 15px!important;
  font-size: 18px!important;
  font-weight: 300!important;
}

/* Footer Area
==========================================*/
#footer {
	background: #000;
	
}

/* Back To Top Button 
======================================*/

#back-top{
    position:fixed;
    right:30px;
    bottom:50px;
    z-index:9999;
}
    
#back-top a{
    opacity:0.5;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}
   
#back-top .btn-primary{
    background: #4c145f;
    border-color: #4c145f;
    padding: 0px;
    font-size: 18px;
    width: 36px;
    height: 36px;
	border-radius:0;}
  
#back-top a:hover{
    background: #4c145f;
    opacity: 1;
}
#back-top button i{margin:0}



	&lt;/style>
&lt;/head>
&lt;body>
	            &lt;div class="col-sm-4 col-md-3 col-lg-3">
					&lt;div class="nav-side-menu">
						&lt;div class="brand">My Account&lt;/div>&lt;!-- brand -->
						&lt;i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse"
							data-target=".list-group">&lt;/i>
						&lt;div class="list-group collapse">
							&lt;a href="" class="list-group-item   ">Home&lt;/a>
							 &lt;a href="" class=" list-group-item">Change Password &lt;/a>
							&lt;a href="" class="list-group-item   ">Edit Profile&lt;/a>
							&lt;a href="" class=" list-group-item">Upload Profile Photo&lt;/a>
						&lt;/div>&lt;!-- /.list-group collapse -->
					&lt;/div>&lt;!-- /.nav-side-menu -->
				&lt;/div>&lt;!-- /.col-sm-4 col-md-3 col-lg-3 -->


	&lt;script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js">&lt;/script>
&lt;script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">&lt;/script>				
&lt;script type="text/javascript">
		$(document).ready(function() {
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
&lt;/script>		
&lt;/body>
&lt;/html>      
            </pre>

			
			
			
			<h3>output for laptop/desktop media</h3>
			<pre class="prettyprint">
<img src="<?php echo base_url();?>static/images/ice_screenshot_20151022-174201.png"/>
            </pre>


            <h3>output for mobile media</h3>
			<pre class="prettyprint">
<img src="<?php echo base_url();?>static/images/ice_screenshot_20151022-175346.png"/>
            </pre>

