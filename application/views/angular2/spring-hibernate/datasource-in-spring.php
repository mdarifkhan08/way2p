<div class="panel panel-primary">
<div class="panel panel-heading">
DriverManager
</div>
<div class="panel panel-body">
<pre class="prettyprint">
1. hampers the application performance as the connections are created/closed in java classes.<br/><br/>
2. does not support connection pooling.<br/><br/>
</pre>
</div>
</div>


<div class="panel panel-primary">
<div class="panel panel-heading">
DataSource
</div>
<div class="panel panel-body">
<pre class="prettyprint">
1. improves application performance as connections are not created/closed within a class, they are managed by the application server and can be fetched while at runtime.<br/><br/>
2. it provides a facility creating a pool of connections.<br/><br/>
3. helpful for enterprise applications.<br/><br/>
</pre>
</div>
</div>