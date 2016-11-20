<pre class="prettyprint">
<div class="alert alert-success">
	static file should be inside public directory in the laravel
</div>

&lt;h3>Edit - resources/views/base.blade.php&lt;/h3>
&lt;pre class="prettyprint">
&lt;link href="&lt;?php echo asset('css/style.css')?>" rel='stylesheet' type='text/css' />
&lt;script src="&lt;?php echo asset('js/jquery-1.11.1.min.js')?>">&lt;/script>
</pre>
