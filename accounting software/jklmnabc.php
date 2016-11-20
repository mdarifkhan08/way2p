<?php
include_once 'dbconfig.php';
require_once('class.admin.php');

$admin=new Admin($DB_con);
if ($admin->is_loggedin () == "") {
	$admin->redirect ( 'admin.php' );
}

require_once 'class.postrequest.php';

$post_request=new PostRequest($DB_con);

require_once 'class.getData.php';

$get=new GetData($DB_con);
$name_id=$get->get_account_holder_name_id();
$data=$get->get_account_data();

?>
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript">
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet">
<script src="js/jquery.min.js">
</script>
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
<script>
	$(function() {
		$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

		if (!screenfull.enabled) {
			return false;
		}
		$('#toggle').click(function() {
			screenfull.toggle($('#container')[0]);
		});
	});
</script>
<script src="js/pie-chart.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(
			function() {
				$('#demo-pie-1').pieChart(
						{
							barColor : '#3bb2d0',
							trackColor : '#eee',
							lineCap : 'round',
							lineWidth : 8,
							onStep : function(from, to, percent) {
								$(this.element).find('.pie-value').text(
										Math.round(percent) + '%');
							}
						});
				$('#demo-pie-2').pieChart(
						{
							barColor : '#fbb03b',
							trackColor : '#eee',
							lineCap : 'butt',
							lineWidth : 8,
							onStep : function(from, to, percent) {
								$(this.element).find('.pie-value').text(
										Math.round(percent) + '%');
							}
						});
				$('#demo-pie-3').pieChart(
						{
							barColor : '#ed6498',
							trackColor : '#eee',
							lineCap : 'square',
							lineWidth : 8,
							onStep : function(from, to, percent) {
								$(this.element).find('.pie-value').text(
										Math.round(percent) + '%');
							}
						});
			});
</script>
<script src="js/skycons.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#datepicker" ).datepicker({dateFormat: 'dd-mm-yy',
    	constrainInput: false});
    
  });
</script>
<script type="text/javascript">
$(document).ready(function(){
	$('#submit_post_request').keyup(function(){
		$.ajax({
			type:'POST',
			url:'ajaxFunctions.php',
			data:$('#send-post-request-form').serialize(),
			cache:false,
			success:function(result){
				$('#bal').empty().append('<p id = "response">' + result + '</p>');
			}
		  });
	});



	$('#submit_post_request1').keyup(function(){
		$.ajax({
			type:'POST',
			url:'ajaxFunctions2.php',
			data:$('#send-post-request-form').serialize(),
			cache:false,
			success:function(result){
				$('#bal').empty().append('<p id = "response">' + result + '</p>');
			}
		  });
	});
});
</script>

<script src="books.js"></script>
</head>
<body>
	<div id="wrapper">
		<nav class="navbar-default navbar-static-top" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<h1>
					<a class="navbar-brand" href="index.php">ADMIN</a>
				</h1>
			</div>
			<div class="border-bottom">
				<div class="col-md-9">
					<nav class="navbar navbar-inverse">
						<?php include 'header_menu.php';?>
					</nav>
				</div>
				<div class="clearfix"></div>
				<div class="navbar-default sidebar" role="navigation">
					<div class="sidebar-nav navbar-collapse">
					   <?php include 'accounts.php';?>
					</div>
				</div>
				<div class="clearfix"></div>
		</nav>
	</div>
	<div class="container">
		<div class="col-sm-3"></div>
		<div class="col-sm-9">
		<br/><br/>
		<h1>View Account</h1><br/><br/>
			<table class="table table-bordered">
			   <tr><th>Account Name</th><th>Debit Balance</th><th>Credit Balance</th><th>Remaining Balance</th></tr>
			    <?php foreach($data as $getFullAccountInfo){?>
			        <tr>
			        <td><a href="get_info_of_account.php?account_name=<?= $getFullAccountInfo['account_name']?>" target="_blank"><?= $getFullAccountInfo['account_name']?></a></td>
			        <td><?= $getFullAccountInfo['debit'] ?></td>
			        <td><?= $getFullAccountInfo['credit']?></td>
			        <td><?= $getFullAccountInfo['remaining']?></td>
			        </tr>
			   <?php } ?>
			</table>
		</div>
	</div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	$('#myTabs a').click(function(e) {
		e.preventDefault()
	    $(this).tab('show')
	})
</script>

</body>
</html>

