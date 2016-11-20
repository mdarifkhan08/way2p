
	<h3>.htaccess file</h3>
<pre class="prettyprint">
	<strong>
RewriteEngine On
RewriteBase /
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ /index.php/$1 [L]
	</strong>
</pre>



	<h3>change the $config['base_url'] path in application folder,config.php</h3>
<pre class="prettyprint">
	<strong>
$config['base_url'] = 'http://'.$_SERVER['HTTP_HOST'];
	</strong>
</pre>
