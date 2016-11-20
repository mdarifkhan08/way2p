<pre class="prettyprint">
&lt;dependency>
   &lt;groupId>com.sun.faces&lt;/groupId>
   &lt;artifactId>jsf-api&lt;/artifactId>
   &lt;version>2.1.7&lt;/version>
&lt;/dependency>

&lt;dependency>
   &lt;groupId>com.sun.faces&lt;/groupId>
   &lt;artifactId>jsf-impl&lt;/artifactId>
   &lt;version>2.1.7&lt;/version>
&lt;/dependency> 
</pre>



<pre class="prettyprint">
xmlns="http://www.w3.org/1999/xhtml"

xmlns:ui="http://java.sun.com/jsf/facelets"

xmlns:h="http://java.sun.com/jsf/html"

xmlns:f="http://java.sun.com/jsf/core"
</pre>



<div class="alert alert-info">Spring and jsf integration is
						possible but still i am feeling its a bad practice.</div>
<div class="alert alert-danger">
						issues: 1.we can not use jsp and jsf file in one project because
						of spring can contain one view resolver class with suffix .jsp<br>
						<br> 2.second issue we need to remember we have converted
						.xhtml into .jsf by web.xml so suffix in spring mvc will be .jsf
						for .xhtml file<br>
						<br> 3.some time component of jsf is not working.<br>
						<br>


					</div>

<div class="alert alert-success">If i will find integration
						success then i will update soon.</div>
