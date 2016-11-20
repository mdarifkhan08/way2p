			<h3></h3>
			<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;/head>
&lt;body>
&lt;form action="" method="GET" id="addressForm">
&lt;input type="text" name="address"/>
&lt;input type="checkbox" name="terms"/>
&lt;input type="submit" name="submit" value="Submit"/>
&lt;/form>
&lt;script type="text/javascript">
document.getElementById('addressForm').onsubmit = function() {
    var terms = this.elements['terms'];
    if ( !terms.checked ) { 
        alert( 'Please signify your agreement with our terms.' );
        return false; 
    }
    return true;
};
&lt;/script>
&lt;/body>
&lt;/html>   
            </pre>
