<div class="panel panel-primary">
<div class="panel panel-heading">

</div>
<div class="panel panel-body">
1. assigned(default)<br/>
2. increment<br/>
3. sequence<br/>
4. identity<br/>
5. native<br/>
6. hilo<br/>
7. foreign	<br/>
</div>
</div>


<div class="panel panel-primary">
<div class="panel panel-heading">
assigned(default)
</div>
<div class="panel panel-body">
assigned is a default generator<br/>
1.in the assigned case user need to create primary key<br/><br/>

2.in the case of increment hibernate increament in the order of i++	
</div>
</div>
			


<h3>Example Of Assigned and Increment Primary Key Auto Generators</h3>
<hr/>
<h3>BookTicket.java</h3>
<pre class="prettyprint">
package beans;

public class BookTicket {
	private int id;
	private String movie;
	private String showTime;
	private int seatNo;
	public int getId() {
		return id;
	}
	public void setId(int id) {
		this.id = id;
	}
	public String getMovie() {
		return movie;
	}
	public void setMovie(String movie) {
		this.movie = movie;
	}
	public String getShowTime() {
		return showTime;
	}
	public void setShowTime(String showTime) {
		this.showTime = showTime;
	}
	public int getSeatNo() {
		return seatNo;
	}
	public void setSeatNo(int seatNo) {
		this.seatNo = seatNo;
	}
}
	
</pre>


<h3>bookTicket.hbm.xml</h3>
<pre class="prettyprint">
&lt;?xml version="1.0" encoding="utf-8"?>
&lt;!DOCTYPE hibernate-mapping PUBLIC 
 "-//Hibernate/Hibernate Mapping DTD//EN"
 "http://www.hibernate.org/dtd/hibernate-mapping-3.0.dtd"> 
&lt;hibernate-mapping>
        &lt;class name="beans.BookTicket" table="book_ticket">
            &lt;meta attribute="class-description">
               here we are working with assigned primary key generators,
               it is by default configured with hibernate.in the case of assigned 
               increment operator we wish to get the primary from the user side.But i would say
               it is not good idea while working with project.
            &lt;/meta>
            &lt;id name="id" >
               &lt;generator class="assigned"/>
            &lt;/id>
            &lt;property name="movie" />
            &lt;property name="showTime" />
            &lt;property name="seatNo" />
        &lt;/class>
&lt;/hibernate-mapping>
</pre>




<h3>hibernate-cfg.xml</h3>
<pre class="prettyprint">
&lt;?xml version="1.0" encoding="utf-8"?>
&lt;!DOCTYPE hibernate-configuration SYSTEM 
"http://www.hibernate.org/dtd/hibernate-configuration-3.0.dtd">

&lt;hibernate-configuration>
   &lt;session-factory>
   
   &lt;property name="connection.driver_class">com.mysql.jdbc.Driver&lt;/property>
   &lt;!-- Assume test is the database name -->
   &lt;property name="connection.url"> jdbc:mysql://localhost/test&lt;/property>
   &lt;property name="connection.username">root&lt;/property>
   &lt;property name="connection.password"> &lt;/property>
   
   
   &lt;property name="hibernate.dialect">org.hibernate.dialect.MySQLDialect&lt;/property>
   
   &lt;property name="hbm2ddl.auto">create&lt;/property>

   &lt;!-- List of XML mapping files -->
   &lt;mapping resource="resources/bookTicket.hbm.xml"/>
   
&lt;/session-factory>
&lt;/hibernate-configuration>
</pre>




<h3>TestAssignGenerator.java</h3>
<pre class="prettyprint">
package test;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.cfg.Configuration;

import beans.BookTicket;

public class TestAssignGenerator {
	
	public static void main(String args[]){
		Configuration cfg=new Configuration();
		cfg.configure("resources/hibernate.cfg.xml");
		SessionFactory sf=cfg.buildSessionFactory();
		Session s=sf.openSession();
		Transaction t=s.beginTransaction();
		
		BookTicket bt=new BookTicket();
		bt.setId(123);
		bt.setMovie("Avengers");
		bt.setShowTime("09 pm");
		bt.setSeatNo(234);
		
		int pk=(Integer)s.save(bt);
		t.commit();
		sf.close();
		s.close();
		System.out.println("Insert Data Successfully");
	}

}
</pre>
