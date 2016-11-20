<div class="panel panel-primary">
<div class="panel panel-heading">
Scope In Jsp(All Scope is an object of PageContext class)
</div>
<div class="panel panel-body">
<table class="table table-bordered">
	<tr><td>1.page - only in the particular jsp</td></tr>
	<tr><td>2.request- only in the jsp to which you forward your request object</td></tr>
	<tr><td>3.session- it is available until the session is invalidate(you can access it from any jsp)</td></tr>
	<tr><td>4.application-it is available until the web application or server shutdown(you can access it from any jsp).available through whole application
</td></tr>
</table>
</div>
</div>
