<div class="panel panel-primary">
<div class="panel panel-heading">
hbm2ddl.auto operations
</div>
<div class="panel panel-body">
1. create<br/>
2. create-drop<br/>
3. update<br/>
4. validate<br/>
</div>
</div>


<div class="panel panel-primary">
<div class="panel panel-heading">
where we should use hbm2ddl.auto
</div>
<div class="panel panel-body">
1. hbm2ddl.auto operations should not use for production purpose.<br/>
2. knowledge required and useful for development purpose.<br/>
</div>
</div>


<div class="panel panel-primary">
<div class="panel panel-heading">
&lt;property  name="hbm2ddl.auto">create&lt;/property>
</div>
<div class="panel panel-body">
If schema(table) exists, it will first drop the table and create the fresh table.<br/><br/>

If table not exists, it will create only fresh table.
</div>
</div>


<div class="panel panel-primary">
<div class="panel panel-heading">
&lt;property  name="hbm2ddl.auto">create-drop&lt;/property>
</div>
<div class="panel panel-body">
If we did not close SessionFactory explicitly then it will work as create operation.<br/><br/>

If we close Session factory explicitly then it will drop table at the end of session.
</div>
</div>



<div class="panel panel-primary">
<div class="panel panel-heading">
&lt;property  name="hbm2ddl.auto">update&lt;/property>
</div>
<div class="panel panel-body">
it update the schema
</div>
</div>


<div class="panel panel-primary">
<div class="panel panel-heading">
&lt;property  name="hbm2ddl.auto">validate&lt;/property>
</div>
<div class="panel panel-body">
it validate the schema with your java pojo classes.If it found error then it will produce run time exception.
</div>
</div>