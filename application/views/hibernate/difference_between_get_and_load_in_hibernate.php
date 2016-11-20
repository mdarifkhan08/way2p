<table class="table table-bordered">
	<tr><td>hibernate uses get() and load() to get data from the database.</td></tr>
	<tr><td>get() return null if object not found while load() return ObjectNotFound Exception.</td></tr>
	<tr><td>get() always hit the database but load() method check based on the type of loading</td></tr>
	<tr><td>get() return real object not proxy while load return proxy object</td></tr>
	<tr><td>get() should used only when we are not sure about existance of instance but load() should be used if we are sure that instance exists.</td></tr>
</table>


