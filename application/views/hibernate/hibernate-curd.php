<div class="alert alert-info">
	1.When ever you call a method commit() then it will insert data into the database<br/>
	2.commit method available inside predefined class called Transaction<br/>
	3.we can call a method of class using the object of the class, it is very basic concept<br/>
	4.In Hibernate first we need to have a Configuration class Object<br/>
	5.If we have Configuration class object then we can call to configure() method<br/>
	6.configure method is required to read your hibernate configuration xml file(hibernate.cfg.xml)<br/>
	7.we already know hibernate.cfg.xml internally connect with the mapping files<br/>
	8.After creating object of Configuration Class we need SessionFactory Object<br/>
	9.To get the session factory object Configuration class provide the method buildSessionFactory().<br/>
	10.we already know that method can return null,or some value,or Refrence object of any class depending on how you define your method or what is your requirements.<br/>
</div>

<h2>For Inserting the record</h2><br/>
<div class="alert alert-success">
	To save the data we have three methods<br/><br/>
	1.save(save method returns primary key, and the primary can we any type, it can be string, int, float)<br/>
	2.persist(void or return nothing)<br/>
	3.saveOrUpdate(void or return nothing)<br/>
</div>

<h3>save()</h3><br/>
<div class="alert alert-success">
	save method is used to save or insert the data into the database, save method after inserting the data into the database it will return us a primary key of that inserted object.
	and it can return any kind of primary key, it can we a int, float and string.
</div>


<h3>persist()</h3><br/>
<div class="alert alert-success">
	persist method is also used to insert the data into the database but it does not return any thing, return type of persist method is void.
</div>

<h3>saveOrUpdate()</h3><br/>
<div class="alert alert-success">
	saveOrUpdate method first try to check data is available or not,if available then it will select the data from the database, and check new data and database data is same or different, if same then it will not perform any operation, else it will insert new data and remove previous data.
</div>

<h2>For Update the record</h2><br/>

<h3>update()</h3><br/>
<div class="alert alert-success">
	update method is used to update the record but some time update method execution may not work(that we will cover in hibernate cache topic.)
</div>

<h3>merge()</h3><br/>
<div class="alert alert-success">
	merge method will always execute.
</div>


<h2>For Delete the record</h2><br/>
<h3>delete()</h3>
<div class="alert alert-success">
	delete method is used to delete the record.
</div>



			<h3></h3>
			<pre class="prettyprint">
 <strong>


</strong>     
            </pre>

			
			
			
			<h3></h3>
			<pre class="prettyprint">
<strong>


</strong>
            </pre>

			
			
			<h3></h3>
			<pre class="prettyprint">
<strong>


</strong>
            </pre>

			
			
			
			<h3></h3>
			<pre class="prettyprint">
<strong>


</strong>	
			</pre>

			
			
			<h3></h3>
			<pre class="prettyprint">
<strong>


</strong>
			</pre>


			
			
			<h3></h3>
			<pre class="prettyprint">
<strong>


</strong>
             </pre>




			<h3></h3>
			<pre class="prettyprint">
<strong>


</strong>
            </pre>
