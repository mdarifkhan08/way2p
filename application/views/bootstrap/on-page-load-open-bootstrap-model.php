	<h3>index.php</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;link rel="stylesheet" href="bootstrap.min.css">
&lt;script type="text/javascript" src="jquery.min.js">&lt;/script>
&lt;script type="text/javascript" src="bootstrap.min.js">&lt;/script>
&lt;/head>
&lt;body>
	&lt;div class="modal fade" id="visitor_information" tabindex="-1"
		role="dialog" aria-labelledby="exampleModalLabel">
		&lt;div class="modal-dialog" role="document">
			&lt;div class="modal-content">
				&lt;div class="modal-header">
					&lt;button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						&lt;span aria-hidden="true">&times;&lt;/span>
					&lt;/button>
					&lt;h4 class="modal-title" id="exampleModalLabel">Please Enter Your
						Details To Get A Call&lt;/h4>
				&lt;/div>
				&lt;!-- modal-header -->
				&lt;div class="modal-body">
					&lt;form action="" id="visitor_form">


						&lt;div class="form-group">
							&lt;label for="" class="control-label">Name&lt;/label> &lt;input
								type="text" name="name" class="form-control" id="name">
						&lt;/div>



						&lt;div class="form-group">
							&lt;label for="" class="control-label">Mobile Number&lt;/label> &lt;input
								type="text" class="form-control" id="mobile_number"
								name="mobile_number">
							&lt;/textarea>
						&lt;/div>


						&lt;input type="hidden" name="merchant_id" value="XYZ" />

						&lt;div class="modal-footer">
							&lt;input type="submit" class="btn btn-primary "
								data-dismiss="modal" aria-label="Close"
								name="send_visitor_information" id="send_visitor_information"
								value="SUBMIT" />
						&lt;/div>
					&lt;/form>
				&lt;/div>
				&lt;!-- modal-body -->
			&lt;/div>
			&lt;!-- modal-content -->
		&lt;/div>
		&lt;!-- modal-dialog -->
	&lt;/div>
	&lt;!-- modal fade -->
	&lt;script type="text/javascript">
    $(window).load(function(){
        $('#visitor_information').modal('show');
    });
&lt;/script>
&lt;/body>
&lt;/html>
</pre>



<div>
	
Suppose we want to send the data using model then it will load again and again your model to overcome this problem we need to use ajax to send form data by using click function.

</div>




	<h3>index.php(with ajax request)</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;link rel="stylesheet" href="bootstrap.min.css">
&lt;script type="text/javascript" src="jquery.min.js">&lt;/script>
&lt;script type="text/javascript" src="bootstrap.min.js">&lt;/script>
&lt;script type="text/javascript">
$(document).ready(function(){
	$('#send_visitor_information').click(function(){
        $.ajax({
            type:'POST',
            url:'send-form-data.php',
            data:$('#visitor_form').serialize(),
            cahce:false,
            success:function(result){
                $('.container').append('&lt;div>'+result+'&lt;/div>');
               }
            });
		});
});
&lt;/script>
&lt;/head>
&lt;body>
&lt;div class="container">&lt;/div>

	&lt;div class="modal fade" id="visitor_information" tabindex="-1"
		role="dialog" aria-labelledby="exampleModalLabel">
		&lt;div class="modal-dialog" role="document">
			&lt;div class="modal-content">
				&lt;div class="modal-header">
					&lt;button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						&lt;span aria-hidden="true">&times;&lt;/span>
					&lt;/button>
					&lt;h4 class="modal-title" id="exampleModalLabel">Please Enter Your
						Details To Get A Call&lt;/h4>
				&lt;/div>
				&lt;!-- modal-header -->
				&lt;div class="modal-body">
					&lt;form action="" id="visitor_form">


						&lt;div class="form-group">
							&lt;label for="" class="control-label">Name&lt;/label> &lt;input
								type="text" name="name" class="form-control" id="name">
						&lt;/div>



						&lt;div class="form-group">
							&lt;label for="" class="control-label">Mobile Number&lt;/label> &lt;input
								type="text" class="form-control" id="mobile_number"
								name="mobile_number">
							&lt;/textarea>
						&lt;/div>


						&lt;input type="hidden" name="merchant_id" value="XYZ" />

						&lt;div class="modal-footer">
							&lt;input type="submit" class="btn btn-primary "
								data-dismiss="modal" aria-label="Close"
								name="send_visitor_information" id="send_visitor_information"
								value="SUBMIT" />
						&lt;/div>
					&lt;/form>
				&lt;/div>
				&lt;!-- modal-body -->
			&lt;/div>
			&lt;!-- modal-content -->
		&lt;/div>
		&lt;!-- modal-dialog -->
	&lt;/div>
	&lt;!-- modal fade -->
	&lt;script type="text/javascript">
    $(window).load(function(){
        $('#visitor_information').modal('show');
    });
&lt;/script>
&lt;/body>
&lt;/html>
</pre>




	<h3>send-form-data.php</h3>
<pre class="prettyprint">
&lt;?php
$name=$_POST['name'];
$mobile_number=$_POST['mobile_number'];



echo $name." ".$mobile_number;
</pre>
