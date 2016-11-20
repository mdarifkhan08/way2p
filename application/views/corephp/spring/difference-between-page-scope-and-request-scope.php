<div class="panel panel-primary">
<div class="panel panel-heading">

</div>
<div class="panel panel-body">
<table class="table table-bordered">
	<tr><td>Page scope is the smallest object of PageContext class.</td></tr>
	<tr><td>Page scope is the default scope of jsp.</td></tr>
	<tr><td>object in the page scope can not be accessible to other jsp.</td></tr>
	<tr><td>we can understand like this page scope is valid upto we are on one page if we will use redirect functionality to go other page then it will comes under request scope.
</td></tr>
</table>
</div>
</div>




<div class="panel panel-primary">
<div class="panel panel-heading">

</div>
<div class="panel panel-body">
<table class="table table-bordered">
	<tr><td>Request scope is the next smallest scope.</td></tr>
	<tr><td>if I have a JSP that forwards to another page, and that second page includes a third JSP page, then all three pages are in the same request, and can share objects through the request scope</td></tr>
	<tr><td>response.redirect(), will create a new request, unlike forwards and includes</td></tr>
	<tr><td>Also note, a new request is made every time the user gets a new page, be it by clicking a link, a button, or some JavaScript call.</td></tr>
	
</table>

</div>
</div>



<div class="panel panel-primary">
<div class="panel panel-heading">

</div>
<div class="panel panel-body">
<table class="table table-bordered">
	<tr><td>if we think little bit another
 way then we will grab good approach to get idea behind that</td></tr>
	<tr><td> if jsp share object only in jsp it is done by Page scope</td></tr>
	<tr><td> if jsp share object between multiple jsp it is done by request,session  or application scope and</td></tr>
    <tr><td>scope is a lifetime of an object.</td></tr>
</table>

</div>
</div>







 