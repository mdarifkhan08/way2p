<html>
<head>
<link href='<?php echo base_url();?>static/css/bootstrap.css'' rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>static/css/style.css" rel='stylesheet' type='text/css' />
<script src="<?php echo base_url();?>static/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url();?>static/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script>
$(function() {
    $( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd',
    	constrainInput: false});
});
</script>
</head>
<body>
<div>
<br/><br/><br/><br/><br/><br/>
<form action="<?php echo base_url();?>getPageViews" method="post"><p align="center">
Date: <input type="text" id="datepicker" name="created_at" required>
<input type="submit" name="submit" value="submit"/></p>
</form>
</div>
   <table class="table table-bordered">
       <tr><th>Ip Address</th><th>URL</th><th>Date-Time</th></tr>
       <?php if(isset($records)){
       foreach ($records as $record){
       ?>
         <tr><td><a href="http://whatismyipaddress.com/ip/<?= $record['ip_address'];?>" target="_blank"><?php echo $record['ip_address']?></a></td><td><a href="<?php echo $record['page_link']?>" target="_blank"><?php echo $record['page_link']?></a></td><td><?php echo $record['created_at']?></td></tr>
       <?php } ?>
    <tr><td>Total Record: <?php echo $count;?></td><td></td><td></td></tr>
    <?php } ?>
   </table>
</body>
</html>