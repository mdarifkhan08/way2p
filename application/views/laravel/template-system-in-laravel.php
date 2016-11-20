 <div class="alert alert-success">
 	1. Naming conventions for views file xyz.blade.php required
 	<br/> resources/views/laravel/template-system-in-laravel.blade.php<br/><br/>

 	2. we can create base.blade.php file that has layout of all the html file, by using laravel dynamically we will add view part to layout.
 </div>


 <h3>Layout file(base.blade.php/main.blade.php)</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>Main Layout of all html file</title>
	&lt;link href="&lt;?php echo asset('css/style.css')?>" rel='stylesheet' type='text/css' />
&lt;/head>
&lt;body>
&#64;yield('content')
&lt;/body>
&lt;/html>
</pre>


<h3>Any View File(home.blade.php)</h3>
<pre class="prettyprint">
&#64;extends('base')
&#64;section('content')
This content will go to content field of base.blade.php file 
&#64;stop
</pre>
