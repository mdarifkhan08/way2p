<h3>style.css</h3><hr/>
<pre class="prettyprint">
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



/* start registration */
.registration{
	padding: 3% 1%;
}
.registration h2{
	font-size:1.5em;
	color: #00405d;
	text-transform:capitalize;
	margin-bottom: 4%;
}
.reg_fb {
	margin:3% 0;
	display: block;
	background: #3B5998;
	transition: all 0.5s ease-out;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}
.reg_fb img {
	background:#354F88;
	padding: 10px;
	float: left;
}
.reg_fb i {
	color: #ffffff;
	padding: 12px 16px;
	display: inline-block;
	font-size: 1.3em;
	text-transform: capitalize;
	font-style: normal;
}
.reg_fb:hover {
	background:#354F88;
}
.registration_left{
	float: left;
	width: 45.33333%;
	margin-left: 9.333%;
}
.registration_left:first-child{
	margin-left: 0;
}
.registration span{
	color: #777777;
}
.registration_form{
	display: block;
}
.registration_form div{
	padding:10px 0;
}
.sky_form1{
	margin-bottom: -30px;
}
.sky_form1 ul{
	padding:0;
	list-style:none;
}
.sky_form1 ul li{
	float: left;
	margin-left: 20px;
}
.sky_form1 ul li:first-child{
	margin-left: 0;
}
label {
	display: block;
	margin-bottom: 0;
	font-weight: normal;
}
.registration_form input[type="text"],.registration_form input[type="email"],.registration_form input[type="tel"],.registration_form input[type="password"]{
	padding: 8px;
	display: block;
	width:100%;
	outline: none;
	font-family: 'Open Sans', sans-serif;
	font-size: 0.8925em;
	color: #333333;
	-webkit-appearance: none;
	text-transform: capitalize;
	background: #FFFFFF;
	border: 1px solid rgb(231, 231, 231);
	font-weight: normal;
}
.registration_form input[type="submit"]{
	-webkit-appearance: none;
	font-family: 'Open Sans', sans-serif;
	color: #ffffff;
	text-transform: capitalize;
	display: inline-block;
	background:#ff6978;
	padding: 10px 20px;
	transition: 0.5s ease;
	-moz-transition: 0.5s ease;
	-o-transition: 0.5s ease;
	-webkit-transition: 0.5s ease;
	cursor:pointer;
	border:none;
	outline:none;
	font-size:1em;
	margin-bottom: 5px;
}
.registration_form input[type="submit"]:hover{
	color: #ffffff;
	background:#00405d;
}
.terms{
	text-decoration:underline;
	text-transform:capitalize;
	color: #00405d;
}
.terms:hover{
	text-decoration:none;
}
.forget a{
	text-transform: capitalize;
	color: #999999;
	text-decoration: underline;
	font-size: 0.8925em;
}
.forget a:hover{
	text-decoration: none;
}
}


@media (max-width:966px){
  .registration h2 {
	font-size: 1.1em;
   }
}


@media (max-width:480px){
   .registration_left {
	float: none;
	width: 100%;
	margin-left: 0;
  }
}

</pre>




<h3>index.php</h3><hr/>
<pre class="prettyprint">
&lt;!DOCTYPE HTML>
&lt;html>
&lt;head>
&lt;title>&lt;/title>
&lt;link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
&lt;script type='text/javascript' src="js/jquery-1.11.1.min.js">&lt;/script>
&lt;link href="css/style.css" rel='stylesheet' type='text/css' />
&lt;meta name="viewport" content="width=device-width, initial-scale=1">
&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
&lt;meta name="keywords" content="" />
&lt;script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } &lt;/script>
&lt;link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
&lt;link href='//fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
&lt;/head>
&lt;body>
&lt;div class="container">
&lt;div class="main">
	
	&lt;div class="registration">
		&lt;div class="registration_left">
		&lt;h2>new user? &lt;span> create an account &lt;/span>&lt;/h2>
		&lt;!-- [if IE] 
		    &lt; link rel='stylesheet' type='text/css' href='ie.css'/>  
		 [endif] -->  
		  
		&lt;!-- [if lt IE 7]>  
		    &lt; link rel='stylesheet' type='text/css' href='ie6.css'/>  
		&lt;! [endif] -->  
		&lt;script>
			(function() {
		
			// Create input element for testing
			var inputs = document.createElement('input');
			
			// Create the supports object
			var supports = {};
			
			supports.autofocus   = 'autofocus' in inputs;
			supports.required    = 'required' in inputs;
			supports.placeholder = 'placeholder' in inputs;
		
			// Fallback for autofocus attribute
			if(!supports.autofocus) {
				
			}
			
			// Fallback for required attribute
			if(!supports.required) {
				
			}
		
			// Fallback for placeholder attribute
			if(!supports.placeholder) {
				
			}
			
			// Change text inside send button on submit
			var send = document.getElementById('register-submit');
			if(send) {
				send.onclick = function () {
					this.innerHTML = '...Sending';
				}
			}
		
		})();
		&lt;/script>
		 &lt;div class="registration_form">
		 &lt;!-- Form -->
			&lt;form id="registration_form" action="contact.php" method="post">
				&lt;div>
					&lt;label>
						&lt;input placeholder="first name:" type="text" tabindex="1" required autofocus>
					&lt;/label>
				&lt;/div>
				&lt;div>
					&lt;label>
						&lt;input placeholder="last name:" type="text" tabindex="2" required autofocus>
					&lt;/label>
				&lt;/div>
				&lt;div>
					&lt;label>
						&lt;input placeholder="email address:" type="email" tabindex="3" required>
					&lt;/label>
				&lt;/div>
				&lt;div class="sky-form">
					&lt;div class="sky_form1">
						&lt;ul>
							&lt;li>&lt;label class="radio left">&lt;input type="radio" name="radio" checked="">&lt;i>&lt;/i>Male&lt;/label>&lt;/li>
							&lt;li>&lt;label class="radio">&lt;input type="radio" name="radio">&lt;i>&lt;/i>Female&lt;/label>&lt;/li>
							&lt;div class="clearfix">&lt;/div>
						&lt;/ul>
					&lt;/div>
				&lt;/div>
				&lt;div>
					&lt;label>
						&lt;input placeholder="password" type="password" tabindex="4" required>
					&lt;/label>
				&lt;/div>						
				&lt;div>
					&lt;label>
						&lt;input placeholder="retype password" type="password" tabindex="4" required>
					&lt;/label>
				&lt;/div>	
				&lt;div>
					&lt;input type="submit" value="create an account" id="register-submit">
				&lt;/div>
				&lt;div class="sky-form">
					&lt;label class="checkbox">&lt;input type="checkbox" name="checkbox" >&lt;i>&lt;/i>i agree to shoppe.com &nbsp;&lt;a class="terms" href="#"> terms of service&lt;/a> &lt;/label>
				&lt;/div>
			&lt;/form>
			&lt;!-- /Form -->
		&lt;/div>
	&lt;/div>
	&lt;div class="registration_left">
		&lt;h2>existing user&lt;/h2>
		 &lt;div class="registration_form">
		 &lt;!-- Form -->
			&lt;form id="registration_form" action="contact.php" method="post">
				&lt;div>
					&lt;label>
						&lt;input placeholder="email:" type="email" tabindex="3" required>
					&lt;/label>
				&lt;/div>
				&lt;div>
					&lt;label>
						&lt;input placeholder="password" type="password" tabindex="4" required>
					&lt;/label>
				&lt;/div>						
				&lt;div>
					&lt;input type="submit" value="sign in" id="register-submit">
				&lt;/div>
				&lt;div class="forget">
					&lt;a href="#">forgot your password&lt;/a>
				&lt;/div>
			&lt;/form>
			&lt;/div>
	&lt;/div>
	&lt;div class="clearfix">&lt;/div>
	&lt;/div>
&lt;/div>
&lt;/div>
&lt;/body>
&lt;/html>	
</pre>
