<table class="table table-bordered">
	<tr><td>Lazy Loading/Fetch and Eager Loading/Fetch</td></tr>
	<tr><td>This concept is related to the hibernate relationship</td></tr>
	<tr><td>Hibernate Relationships are<br/><br/>OneToOne<br/>OneToMany<br/>ManyToOne<br/>ManyToMany</td></tr>
	<tr><td>when two table in relationship and we are selecting data from database using hibernate we can specify fetch type</td></tr>
	<tr><td>Eager means it will select data from both the tables</td></tr>
	<tr><td>Lazy means it will select data from one table, if we required then we can select data from both the tables.</td></tr>
	<tr><td>Lazy loading/fetch saves the memory.</td></tr>
	<tr><td>If don't specify fetch type then default is<br/>OneToOne:Eager<br/>OneToMany:Lazy<br/>ManyToOne:Eager<br/>ManyToMany:Lazy</td></tr>
</table>
