<h3>Jquery Date Picker Default</h3><hr/>
<pre class="prettyprint">
&lt;!doctype html>
&lt;html lang="en">
&lt;head>
  &lt;meta charset="utf-8">
  &lt;title>jQuery UI Datepicker - Default functionality&lt;/title>
  &lt;link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  &lt;script src="//code.jquery.com/jquery-1.10.2.js">&lt;/script>
  &lt;script src="//code.jquery.com/ui/1.11.4/jquery-ui.js">&lt;/script>
  &lt;link rel="stylesheet" href="/resources/demos/style.css">
  &lt;script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  &lt;/script>
&lt;/head>
&lt;body>
 
&lt;p>Date: &lt;input type="text" id="datepicker">&lt;/p>
 
&lt;/body>
&lt;/html>	
</pre>

<h3>Jquery Date Picker With Different Format</h3><hr/>
<pre class="prettyprint">
&lt;script>
	$(function() {
    $( "#datepicker" ).datepicker({dateFormat: 'dd-mm-yy',
    	constrainInput: false});
  });
&lt;/script>
</pre>
