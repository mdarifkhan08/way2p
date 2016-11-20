 <h3>.htaccess file for production and development</h3>
<pre class="prettyprint">
&lt;IfModule mod_rewrite.c>
    RewriteEngine On

    RewriteRule ^(.*)$ public/$1 [L]
&lt;/IfModule>
</pre>
