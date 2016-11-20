<div class="alert alert-primary">

The Window.location read-only property returns a 
Location object with information about the current location of the document.<br/><br/>

Though Window.location is a read-only Location object, you can also assign a DOMString to it. This means that you can work with location as if it were a string in most cases: location = 'http://www.example.com' is a synonym of location.href = 'http://www.example.com'.<br/><br/>

<a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/API/Window/location">Click Here To Read From DEVELOPER.MOZILLA.COM</a>
</div>



<h3></h3>
<pre class="prettyprint">
&lt;script>
alert(location);

location.assign("http://www.mozilla.org");


location = "http://www.mozilla.org";

location.reload(true);
&lt;/script>
</pre>