<div class="panel panel-primary">
<div class="panel panel-heading">

</div>
<div class="panel panel-body">
Hibernate is an Object-Relational mapping framework for java language.<br/><br/>

Real meaning of hibernate is sleep mode.
</div>
</div>


<div class="panel panel-primary">
<div class="panel panel-heading">
Problem With Jdbc
</div>
<div class="panel panel-body">
Before learning hibernate you should know what is the problem with JDBC(Java Database Connectivity)<br/>
<br/>
1.JDBC is Database dependent::If you purchase Oracle database for 1 year of aggrement with the company
then after one year if your company can not afford for oracle database then you need to migrate your database 
into mysql or any other, It is not possible in JDBC but with the help of hibernate we can do this with the support of Query Language Support.<br/>
<br/>
2.JDBC is not able to provide cache support for your application,you know cache can increase your application performances by increase the speed of the application by reducing database call between application and database. This is a great of feature of Hibernate.Hibernate having a great support of cache support.Hibernate have two types of cache support.
(i)First Level Cache <br/>
(ii)Second Level Cache<br/>
<br/>
3.JDBC having the issue with the security,Hibernate provide high level security.<br/>
<br/>
4.JDBC is not having good support for transaction,Hibernate Provide high level Transaction capability to your application.by using transaction support we can achive rollback operation and many more operation.
rollback operation means if any failure occure in your transaction the it won't proceed anything.it will rollback the process as earlier.

<br/><br/>
Many disadvantage  JDBC have , we will cover many more introduction topic then we will cover .
</div>
</div>


<div class="panel panel-primary">
<div class="panel panel-heading">
When we should use hibernate
</div>
<div class="panel panel-body">
1.	Hibernate is designed for enterprises applications.Enterprises application mean bussiness application.<br/>
<br/>
2.It is best suitable for application like snapdeal,flipkart(flipkart is running on PHP framework).i am just pointing to application like online marketing.<br/>
<br/>
3.applicaion like banking where daily users is millions and users information will not update frequently so hibernate cache can increase the performance with the using of cache support,if any users will login second times.<br/>
<br/>
4.Hibernate is also designed for all kind of application because it can run on any web server but EJB require Application Server(Web logic,Jboss,Glassfish), so that hibernate designed for all kind of application.<br/>
</div>



</div>



<div class="panel panel-primary">
<div class="panel panel-heading">
Hibernate Features
</div>
<div class="panel panel-body">
1. Auto DDL<br/>
2. HQL(database independent)<br/>
3. Cache Support<br/>
4. Primary Key Generators<br/>
...
</div>
</div>
