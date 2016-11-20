<div class="panel panel-primary">
<div class="panel panel-heading">
Some Hibernate Annotations
</div>
<div class="panel panel-body">
1. @Entity<br/>
2. @Id<br/>
3. @Column(name="xyz",nullable="false")<br/>
4. @Transient<br/>
5. @Temporal(TemporalType.DATE),Temporal(TemporalType.TIME),Temporal(TemporalType.TIMESTAMP)<br/>
</div>
</div>



<div class="panel panel-primary">
<div class="panel panel-heading">
@Entity(use at the class level)
</div>
<div class="panel panel-body">
Using @Entity annotation java pojo class can communicate with relational database.
or we can say hibernate can determine this class will we in communication with database.
</div>
</div>



<div class="panel panel-primary">
<div class="panel panel-heading">
@Id(use at the property level)
</div>
<div class="panel panel-body">
@Id it refer to the primary key of the table<br/>
with out @Id hibernate produce runtime exception.
</div>
</div>


<div class="panel panel-primary">
<div class="panel panel-heading">
@Column(name="xyz",nullable="false")(use at the property level)
</div>
<div class="panel panel-body">
@Column(name="xyz") it refer to the name of the column in the database and nullable="false" means column can not be null.It is similar to sql query <b>not null</b>
</div>
</div>


<div class="panel panel-primary">
<div class="panel panel-heading">
@Transient(use at the property level)
</div>
<div class="panel panel-body">
It will ignore the column while interacting with databases.
</div>
</div>




<div class="panel panel-primary">
<div class="panel panel-heading">
@Temporal(TemporalType.TIME),@Temporal(TemporalType.DATE),@Temporal(TemporalType.TIMESTAMP)
</div>
<div class="panel panel-body">
when we are working with date in hibernate, or we can say if we want to insert date and time in database then we need to use date data type from java.util package.<br/><br/>


and temporal annotation will decide which data type should use in database using temporal annotation. 
</div>
</div>