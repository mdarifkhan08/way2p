<h3>index.php</h3><hr/>
<pre class="prettyprint">
&lt;html>
&lt;head>
&lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
&lt;script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">&lt;/script>
&lt;/head>
&lt;body>
&lt;div class="buttons">
  &lt;div class="pull-right">
      I have read and agree to the &lt;b>&lt;a href="http://snaponshop.com/index.php?route=common/termsandcondition" target="_blank">Terms and Conditions&lt;/a>&lt;/b>
     &lt;input type="checkbox" name="agree" value="1" onchange="xyz()"  />
     &nbsp;
     &lt;input type="button"  value="Continue" id="button-payment-method"/>
  &lt;/div>
&lt;/div>
&lt;script>
document.getElementById("button-payment-method").className = "btn btn-primary disabled";
function xyz() {
    var x = document.getElementById("button-payment-method").getAttribute("class");
    if (x == 'btn btn-primary disabled') {
        document.getElementById("button-payment-method").className = "btn btn-primary";
    } else {
        document.getElementById("button-payment-method").className = "btn btn-primary disabled";
    }
}
&lt;/script>
&lt;/body>
&lt;/html>
</pre>


<div class="buttons">
  <div class="pull-right">
      I have read and agree to the <b><a href="http://snaponshop.com/index.php?route=common/termsandcondition" target="_blank">Terms and Conditions</a></b>
     <input type="checkbox" name="agree" value="1" onchange="xyz()"  />
     &nbsp;
     <input type="button"  value="Continue" id="button-payment-method"   />
  </div>
</div>
<script>
document.getElementById("button-payment-method").className = "btn btn-success disabled";
function xyz() {
    var x = document.getElementById("button-payment-method").getAttribute("class");
    if (x == 'btn btn-success disabled') {
        document.getElementById("button-payment-method").className = "btn btn-success";
    } else {
        document.getElementById("button-payment-method").className = "btn btn-success disabled";
    }
}
</script>