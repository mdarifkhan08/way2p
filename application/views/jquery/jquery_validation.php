<h3>index.php</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;/head>
&lt;body>
&lt;form action="" method="GET" id="addressForm">
&lt;input type="text" name="name"/>
&lt;input type="text" name="address"/>
&lt;input type="submit" name="submit" value="Submit"/>
&lt;/form>
&lt;script type="text/javascript" src="http://www.way2programming.com/js/jquery.min.js">&lt;/script>
&lt;script type="text/javascript" src="http://www.way2programming.com/js/jquery.validate.min.js">&lt;/script>
&lt;script type="text/javascript">
$(function() {
    // Setup form validation on the #addressForm element
    $("#addressForm").validate({
        // Specify the validation rules
        rules: {
        	name: "required",
        	address:"required",
        },
        // Specify the validation error messages
        messages: {
        	name: "&lt;div >&lt;h5 style='color:red;'>&lt;b>name field can not be empty&lt;/b>&lt;/h5>&lt;/div>",
        	address: "&lt;div >&lt;h5 style='color:red;'>&lt;b>address field can not be empty&lt;/b>&lt;/h5>&lt;/div>",
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});
&lt;/script>
&lt;/body>
&lt;/html>   
 </pre>

				
			
<h3>index.php</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;/head>
&lt;body>
&lt;form action="" method="GET" id="addressForm">
&lt;input type="text" name="name" placeholder="Name"/>
&lt;input type="email" name="email" placeholder="Email"/>
&lt;input type="submit" name="submit" value="Submit"/>
&lt;/form>
&lt;script type="text/javascript" src="http://www.way2programming.com/js/jquery.min.js">&lt;/script>
&lt;script type="text/javascript" src="http://www.way2programming.com/js/jquery.validate.min.js">&lt;/script>
&lt;script type="text/javascript">
$(function() {
    // Setup form validation on the #addressForm element
    $("#addressForm").validate({
        // Specify the validation rules
        rules: {
        	email:{required:true,email:true},
        	name:"required",
        },
        // Specify the validation error messages
        messages: {
        	email: {required:"&lt;div >&lt;h5 style='color:red;'>&lt;b>email field can not be empty&lt;/b>&lt;/h5>&lt;/div>",email:"&lt;div >&lt;h5 style='color:red;'>&lt;b>please enter correct email address&lt;/b>&lt;/h5>&lt;/div>"},
        	name: "&lt;div >&lt;h5 style='color:red;'>&lt;b>Name field can not be empty&lt;/b>&lt;/h5>&lt;/div>",
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});
&lt;/script>
&lt;/body>
&lt;/html>
</pre>
