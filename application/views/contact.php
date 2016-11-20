<div class="container">
<div class="row">
<div class="col-sm-3">

</div>
<div class="col-sm-6">
  <?php if(isset($mess)){echo $mess;}?>
  <div class="panel panel-danger">
     <div class="panel panel-heading">
     Contact Us (tech.aarifkhan@gmail.com)
     </div>
     <div class="panel panel-body">
         <form action="<?php echo base_url();?>contactRequest" method="post">
         <table class="table table-bordered">
            <tr><td><input type="email" name="email" class="form-control" placeholder="Your Email" required/></td></tr>
            <tr><td><textarea class="form-control" name="message" placeholder="Your Message"></textarea></td></tr>
            <tr><td><input type="submit" class=" btn btn-danger form-control" required/></td></tr>
         </table>
         </form>
     </div>
  </div>
</div>
<div class="col-sm-3">

</div>
</div>
</div>