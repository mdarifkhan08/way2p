<div class="alert alert-success">

</div>

<h3>in the root directory(config.php)</h3><hr/>
<pre class="prettyprint">
&lt;?php
// HTTP
define('HTTP_SERVER', 'http://amazesmoke.com/');

// HTTPS
define('HTTPS_SERVER', 'https://amazesmoke.com/');

// DIR
define('DIR_APPLICATION', '/home/xyz/public_html/amazesmoke.com/catalog/');
define('DIR_SYSTEM', '/home/xyz/public_html/amazesmoke.com/system/');
define('DIR_LANGUAGE', '/home/xyz/public_html/amazesmoke.com/catalog/language/');
define('DIR_TEMPLATE', '/home/xyz/public_html/amazesmoke.com/catalog/view/theme/');
define('DIR_CONFIG', '/home/xyz/public_html/amazesmoke.com/system/config/');
define('DIR_IMAGE', '/home/xyz/public_html/amazesmoke.com/image/');
define('DIR_CACHE', '/home/xyz/public_html/amazesmoke.com/system/storage/cache/');
define('DIR_DOWNLOAD', '/home/xyz/public_html/amazesmoke.com/system/storage/download/');
define('DIR_LOGS', '/home/xyz/public_html/amazesmoke.com/system/storage/logs/');
define('DIR_MODIFICATION', '/home/xyz/public_html/amazesmoke.com/system/storage/modification/');
define('DIR_UPLOAD', '/home/xyz/public_html/amazesmoke.com/system/storage/upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_DATABASE', '');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

</pre>




<h3></h3><hr/>
<pre class="prettyprint">
	after install opencart project in localhost and export the sql file to go daddy server.
</pre>



<h3>admin/config.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
// HTTP
define('HTTP_SERVER', 'http://amazesmoke.com/admin/');
define('HTTP_CATALOG', 'http://amazesmoke.com/');

// HTTPS
define('HTTPS_SERVER', 'https://amazesmoke.com/admin/');
define('HTTPS_CATALOG', 'https://amazesmoke.com/');

// DIR
define('DIR_APPLICATION', '/home/xyz/public_html/amazesmoke.com/admin/');
define('DIR_SYSTEM', '/home/xyz/public_html/amazesmoke.com/system/');
define('DIR_LANGUAGE', '/home/xyz/public_html/amazesmoke.com/admin/language/');
define('DIR_TEMPLATE', '/home/xyz/public_html/amazesmoke.com/admin/view/template/');
define('DIR_CONFIG', '/home/xyz/public_html/amazesmoke.com/system/config/');
define('DIR_IMAGE', '/home/xyz/public_html/amazesmoke.com/image/');
define('DIR_CACHE', '/home/xyz/public_html/amazesmoke.com/system/storage/cache/');
define('DIR_DOWNLOAD', '/home/xyz/public_html/amazesmoke.com/system/storage/download/');
define('DIR_LOGS', '/home/xyz/public_html/amazesmoke.com/system/storage/logs/');
define('DIR_MODIFICATION', '/home/xyz/public_html/amazesmoke.com/system/storage/modification/');
define('DIR_UPLOAD', '/home/xyz/public_html/amazesmoke.com/system/storage/upload/');
define('DIR_CATALOG', '/home/xyz/public_html/amazesmoke.com/catalog/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'amazesmoke');
define('DB_PASSWORD', 'amazesmoke');
define('DB_DATABASE', 'amazesmoke');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

</pre>
