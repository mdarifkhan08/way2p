<?php require('stay_in_touch.php');
require_once 'class.ip.php';
$url='http://'.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI];
$ip=$_SERVER['REMOTE_ADDR'];
$date_time=date('y-m-d h:i:s');
$object=new IpAddress($ip,$url,$DB_CON);
$object->insertIntoDb();
if(isset($_POST['Enquiry'])){
	$email=trim($_POST['email']);
	$stmt = $DB_CON->prepare( "INSERT INTO stay_in_touch(email) VALUES(:email)" );
	$stmt->bindParam(':email', $email );
	$stmt->execute();
	header('Location: contact.php?report=success1');
}
?>
<!DOCTYPE html>
<html >
<head>
<meta charset="ISO-8859-1">
<title>AAGS Techno Pvt. Ltd.</title>
<link rel="shortcut icon" href="images/shortcut.jpg" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript">
	 addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<!-- ...............................both is requied to compelete stylesheet..................... -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/extra_work.css" />
<!-- =========================================================================================== -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css/responsiveslides.css">
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/new-style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="js/jquery.bxSlider.js"></script>
		<script type="text/javascript">
  		$(document).ready(function(){
     		$('#slider').bxSlider({
    		ticker: true,
    		tickerSpeed: 5000,
			tickerHover: true
  		});
  		});
		</script>
</head>
<body>
<?php require_once('header.php');?>
	<div id="wrapper">
		<div class="callbacks_container" style="margin-top: -5px;">
			<ul class="rslides" id="slider4">
				<li><img src="images/one.jpg" alt="">
				<li><img src="images/two.jpg" alt=""></li>
				<li><img src="images/three.jpg" alt=""></li>
				<li><img src="images/four.jpg" alt=""></li>
				<li><img src="images/five.jpg" alt=""></li>
				<li><img src="images/six.jpg" alt=""></li>
				<li><img src="images/7.jpg" alt=""></li>
				<li><img src="images/8.jpg" alt=""></li>
			</ul>
		</div>
	</div>
	<div class="how bck-img">
		
		<div class="container">
			<div class="how-top-grids">
				<div class="col-md-7 how-left">
					<br><br><br>
					<h3>About Us</h3>
					<div class="im">
						<img src="images/EMT.jpg" alt="" class="img-responsive" />
					</div>
					<div id="small-dialog" class="mfp-hide">
						
					</div>
					<br> <br> <br> <br> <br>
					<h4>AAGS Techno Pvt. Ltd. is an IT cum Educational provider	company.</h4>
					<p>
						We are a bunch of young, passionate and dedicated IT professionals,
						are desperate to associate with you. We always make our
						clients satisfied in all services we provide. <br>As of
						now, we make several <a href="http://aagstechno.com/recent-projects.php">number of clients</a> happy with the services provided
						to them and OUR ONLY MISSION is to always make our clients happy.
					</p>
				</div>
				<div class="col-md-5 how-right">
				<br><br><br>
				<h3>Services</h3>
					<div style="overflow: scroll; height: 400px;">
					<div class="tournament">
						<div class="how-right-left">
							<img src="images/s3.jpg" alt="" />
						</div>
						<div class="how-right-right">
							<h4>Website Development</h4>
							<P>We offer customized Web Development services of each and every
								kind of website including static, dynamic, eCommerce websites, 
								Matrimony, Local Search Engines etc.</p>
							<div class="more">
								<a href="webDevelopment.php">MORE</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="tournament t-middle">
						<div class="how-right-left">
							<img src="images/seminar.jpg" alt="" />
						</div>
						<div class="how-right-right">
							<h4>Training</h4>
							<P>Our Software developers provide training to students as well
							   as professionals and corporates by enlightening their hidden
							   talent in the several different programming and scripting languages.</p>
							<div class="more">
								<a href="phptraining.php">MORE</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="tournament t-middle">
						<div class="how-right-left">
							<img src="images/s3.jpg" alt="" />
						</div>
						<div class="how-right-right">
							<h4>Website Designs</h4>
							<P>We use latest technologies and attractive UI(User Interface) in making
							   ready-to-use websites at reasonable rates by always remembering
							   clients' satisfaction</p>
							<div class="more">
								<a href="website_design.php">MORE</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="tournament t-middle">
						<div class="how-right-left">
							<img src="images/s4.jpg" alt="" />
						</div>
						<div class="how-right-right">
							<h4>Digital Marketing</h4>
							<P>We offers digital strategy, planning, and creativity, in order
							   to fully manage highly successful online marketing campaigns</p>
							<div class="more">
								<a href="digital_marketing.php">MORE</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="tournament t-middle">
						<div class="how-right-left">
							<img src="images/s5.jpg" alt="" />
						</div>
						<div class="how-right-right">
							<h4>Web Hosting</h4>
							<P>We provide affordable Web Hosting services for individuals,
							   small business organizations as well as large corporate houses
							   to get the maximum out of online bussiness</p>
							<div class="more">
								<a href="web_hosting.php">MORE</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="tournament t-middle">
						<div class="how-right-left">
							<img src="images/s8.jpg" alt="" />
						</div>
						<div class="how-right-right">
							<h4>Android App Development</h4>
							<P>We offer variety of options for clients to get android
							   applications developed, having creative and attractive UI</p>
							<div class="more">
								<a href="android_app_development.php">MORE</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
		<!-- //container -->

	</div>
	</div>

	<div class="container">
		<div class="slider-container">
				<ul id="slider">
						<li><a href="#"><img class="img-responsive"  src="images/aags-techno-client-1.jpg"></a></li>
				        <li><a href="#"><img class="img-responsive"  src="images/aags-techno-client-2.jpg"></a></li>
				        <li><a href="#"><img class="img-responsive"  src="images/aags-techno-client-3.jpg"></a></li>
				        <li><a href="#"><img class="img-responsive"  src="images/aags-techno-client-4.jpg"></a></li>
				        <li><a href="#"><img class="img-responsive"  src="images/aags-techno-client-5.jpg"></a></li>
				        <li><a href="#"><img class="img-responsive"  src="images/aags-techno-client-6.jpg"></a></li>
				        <li><a href="#"><img class="img-responsive"  src="images/aags-techno-client-7.jpg"></a></li>
				        <li><a href="#"><img class="img-responsive"  src="images/aags-techno-client-8.jpg"></a></li>
				        <li><a href="#"><img class="img-responsive"  src="images/aags-techno-client-9.jpg"></a></li>
				        <li><a href="#"><img class="img-responsive"  src="images/aags-techno-client-10.jpg"></a></li>
				        <li><a href="#"><img class="img-responsive"  src="images/aags-techno-client-11.jpg"></a></li>
        
				</ul>
		</div>
	</div>
	
	
    <!-- ......................................footer............................................... -->
     <?php include 'footer.php';?>
	<!-- //footer -->
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"></span></a>
<script src="js/responsiveslides.min.js"></script>
<script type="text/javascript" src="js/modernizr.custom.min.js"></script>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>