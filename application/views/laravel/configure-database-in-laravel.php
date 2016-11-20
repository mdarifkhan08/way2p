
<h3>Edit - config/database.php</h3>
<pre class="prettyprint">
'default' => env('DB_CONNECTION', 'mysql'),
</pre>

<h3>Edit Again - config/database.php</h3>
<pre class="prettyprint">
'mysql' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', 'localhost'),
            'database'  => env('DB_DATABASE', 'way2programming'),
            'username'  => env('DB_USERNAME', 'way2programming'),
            'password'  => env('DB_PASSWORD', 'way2programming.com'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
</pre>

<h3>Edit  - .env file</h3>
<pre class="prettyprint">
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dbname
DB_USERNAME=root
DB_PASSWORD=

</pre>
