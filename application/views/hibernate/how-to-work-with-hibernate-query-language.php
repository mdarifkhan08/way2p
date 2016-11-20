<h2>Insert Operation</h2><hr/>
<div class="alert alert-success">
	By using Hql we can not insert Data directly through user,only data insert is possible from one table to another.
	<br/><br/>
	why hql does not allow to  insert user data directly through user? answer is because it is not required it...see below code
	<pre class="prettyprint">
package com.aags.beans;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.cfg.Configuration;



public class InsertDataInOldStudent {
	
	public static void main(String args[]){
		
		OldStudent ost=new OldStudent();
		ost.setId(333);
		ost.setName("LMN");
		ost.setEmail("LMN@gmail.com");
		ost.setAddress("LMN");
		//Student Object State Is Transient at this point of time
		
		Configuration cfg =new Configuration();
		cfg.configure("com/aags/resources/mysql.cfg.xml");
		SessionFactory sf=cfg.buildSessionFactory();
		Session s=sf.openSession();
		s.save(ost);
		//Student Object State Is Persistent at this point of time
		
		s.beginTransaction().commit();
		//Student Object State Is Database State(It means data is saved inside database)
		
		s.evict(ost);
		//Student Object State Is Detached at this point of time
		//then gc() can collect your student object and remove all variables from the ram memory
	}

}
		
	</pre>
</div>
<h3>OldStudent.java</h3><hr/>
<pre class="prettyprint">
package com.aags.beans;

public class OldStudent {
	private int id;
	private String name;
	private String email;
	private String address;
	
	public OldStudent(){
		
	}

	public OldStudent(int id, String name, String email, String address) {
		super();
		this.id = id;
		this.name = name;
		this.email = email;
		this.address = address;
	}

	/**
	 * @return the id
	 */
	public int getId() {
		return id;
	}

	/**
	 * @param id the id to set
	 */
	public void setId(int id) {
		this.id = id;
	}

	/**
	 * @return the name
	 */
	public String getName() {
		return name;
	}

	/**
	 * @param name the name to set
	 */
	public void setName(String name) {
		this.name = name;
	}

	/**
	 * @return the email
	 */
	public String getEmail() {
		return email;
	}

	/**
	 * @param email the email to set
	 */
	public void setEmail(String email) {
		this.email = email;
	}

	/**
	 * @return the address
	 */
	public String getAddress() {
		return address;
	}

	/**
	 * @param address the address to set
	 */
	public void setAddress(String address) {
		this.address = address;
	}

}
</pre>


<h3>NewStudent.java</h3><hr/>
<pre class="prettyprint">
	package com.aags.beans;

public class NewStudent {
	private int id;
	private String name;
	private String email;
	private String address;
	
	public NewStudent(){
		
	}

	public NewStudent(int id, String name, String email, String address) {
		super();
		this.id = id;
		this.name = name;
		this.email = email;
		this.address = address;
	}

	/**
	 * @return the id
	 */
	public int getId() {
		return id;
	}

	/**
	 * @param id the id to set
	 */
	public void setId(int id) {
		this.id = id;
	}

	/**
	 * @return the name
	 */
	public String getName() {
		return name;
	}

	/**
	 * @param name the name to set
	 */
	public void setName(String name) {
		this.name = name;
	}

	/**
	 * @return the email
	 */
	public String getEmail() {
		return email;
	}

	/**
	 * @param email the email to set
	 */
	public void setEmail(String email) {
		this.email = email;
	}

	/**
	 * @return the address
	 */
	public String getAddress() {
		return address;
	}

	/**
	 * @param address the address to set
	 */
	public void setAddress(String address) {
		this.address = address;
	}
	
}

</pre>


<h3>mysql.cfg.xml</h3><hr/>
<pre>
&lt;?xml version="1.0" encoding="utf-8"?>
&lt;!DOCTYPE hibernate-configuration SYSTEM 
"http://www.hibernate.org/dtd/hibernate-configuration-3.0.dtd">

&lt;hibernate-configuration>
   &lt;session-factory>
     &lt;property name="connection.driver_class">com.mysql.jdbc.Driver&lt;/property>
     &lt;!-- Assume test is the database name -->
     &lt;property name="connection.url">jdbc:mysql://localhost/hibernate&lt;/property>
     &lt;property name="connection.username">root&lt;/property>
     &lt;property name="connection.password"> &lt;/property>
     &lt;property name="hibernate.dialect">org.hibernate.dialect.MySQLDialect&lt;/property>
    
     &lt;!-- List of XML mapping files -->
     &lt;mapping resource="com/aags/resources/oldstudent.hbm.xml"/>
     &lt;mapping resource="com/aags/resources/newstudent.hbm.xml"/>
   &lt;/session-factory>
&lt;/hibernate-configuration>	
</pre>


<h3>newstudent.hbm.xml</h3><hr/>
<pre class="prettyprint">
&lt;?xml version="1.0" encoding="utf-8"?>
&lt;!DOCTYPE hibernate-mapping PUBLIC 
 "-//Hibernate/Hibernate Mapping DTD//EN"
 "http://www.hibernate.org/dtd/hibernate-mapping-3.0.dtd"> 
 &lt;hibernate-mapping>
   &lt;class name="com.aags.beans.NewStudent" table="newstudent">
      &lt;meta attribute="class-description">
         This class contains the new student detail. 
      &lt;/meta>
      &lt;id name="id" />
      &lt;property name="name" />
      &lt;property name="email"/>
      &lt;property name="address"/>
   &lt;/class>
&lt;/hibernate-mapping>	
</pre>


<h3>oldstudent.hbm.xml</h3><hr/>
<pre class="prettyprint">
&lt;?xml version="1.0" encoding="utf-8"?>
&lt;!DOCTYPE hibernate-mapping PUBLIC 
 "-//Hibernate/Hibernate Mapping DTD//EN"
 "http://www.hibernate.org/dtd/hibernate-mapping-3.0.dtd"> 
 &lt;hibernate-mapping>
   &lt;class name="com.aags.beans.OldStudent" table="oldstudent">
      &lt;meta attribute="class-description">
         This class contains the old student detail. 
      &lt;/meta>
      &lt;id name="id" />
      &lt;property name="name" />
      &lt;property name="email"/>
      &lt;property name="address"/>
   &lt;/class>
&lt;/hibernate-mapping>	
</pre>


<h3>HqlDumpDataFromOneTableToAnother.java</h3><hr/>
<pre class="prettyprint">
package com.aags.beans;

import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.cfg.Configuration;

public class HqlDumpDataFromOneTableToAnother {
	
	public static void main(String args[]){
		
		Configuration cfg=new Configuration();
		cfg.configure("com/aags/resources/mysql.cfg.xml");
		SessionFactory sf=cfg.buildSessionFactory();
		Session s=sf.openSession();
		Transaction t=s.beginTransaction();
		
		/*don't forget while working with HQL class name will come at the place of table name and at attribute/field come at the place of column name*/
		String hql="insert into NewStudent(id,name,email,address) select s.id,s.name,s.email,s.address from OldStudent s";
		
		Query q=s.createQuery(hql);
		int i=q.executeUpdate();
		System.out.println(i+" rows transfered");
		
		s.beginTransaction().commit();
	}
}
</pre>



<h2>HQL Select</h2><hr/>


<h3>HqlSelectQuery.java</h3><hr/>
<pre class="prettyprint">
package com.aags.beans;

import java.util.Iterator;
import java.util.List;

import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.cfg.Configuration;

public class HqlSelectQuery {
	
	public static void main(String args[]){
		/*
		 * First Way
		 * 
		 * Configuration cfg=new Configuration();
		cfg.configure("com/aags/resources/mysql.cfg.xml");
		SessionFactory sf=cfg.buildSessionFactory();
		Session s=sf.openSession();
		Transaction t=s.beginTransaction();
		String hql="from OldStudent os";
		Query query=s.createQuery(hql);
		List&lt;OldStudent> l=query.list();
		System.out.println("Total Records "+l.size());
		Iterator&lt;OldStudent> i=l.iterator();
		while(i.hasNext()){
			Object o=(Object)i.next();
			OldStudent os=(OldStudent)o;
			System.out.println("id:"+os.getId()+" Name:"+os.getName()+" Email:"+os.getEmail()+" Address:"+os.getAddress());
		}
		t.commit();*/
		
		
		/*
		 * 
		 * Second Way
		 * 
		 * Configuration cfg=new Configuration();
		cfg.configure("com/aags/resources/mysql.cfg.xml");
		SessionFactory sf=cfg.buildSessionFactory();
		Session s=sf.openSession();
		Transaction t=s.beginTransaction();
		String hql="select os.id, os.name, os.email, os.address from OldStudent os";
		Query query=s.createQuery(hql);
		List l=query.list();
		System.out.println("Total Records "+l.size());
		Iterator i=l.iterator();
		while(i.hasNext()){
			Object o[] = (Object[])i.next();
			System.out.println("id:"+o[0]+" Name:"+o[0]+" Email:"+o[0]+" Address:"+o[0]);
		}
		t.commit();*/
	}
}
	
</pre>


<h2>HQL Runtime Select</h2><hr/>
<h3>HqlPassRuntimeValue.java</h3><hr/>
<pre class="prettyprint">
package com.aags.beans;

import java.util.Iterator;
import java.util.List;

import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.cfg.Configuration;


public class HqlPassRuntimeValue {
	public static void main(String args[]){
		Configuration cfg=new Configuration();
		cfg.configure("com/aags/resources/mysql.cfg.xml");
		SessionFactory sf=cfg.buildSessionFactory();
		Session s=sf.openSession();
		Transaction t=s.beginTransaction();
		String hql="from OldStudent os where os.id=:id";
		Query query=s.createQuery(hql);
		query.setParameter("id", 222);
		List&lt;OldStudent> l=query.list();
		System.out.println("Total Records "+l.size());
		Iterator&lt;OldStudent> i=l.iterator();
		while(i.hasNext()){
			Object o=(Object)i.next();
			OldStudent os=(OldStudent)o;
			System.out.println("id:"+os.getId()+" Name:"+os.getName()+" Email:"+os.getEmail()+" Address:"+os.getAddress());
		}
		t.commit();
	}
}

</pre>


<h3>Hql Select One Column</h3><hr/>
<pre class="prettyprint">
package com.aags.beans;

import java.util.Iterator;
import java.util.List;

import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.cfg.Configuration;


public class HqlSelectOneColumn {
	public static void main(String args[]){
		Configuration cfg=new Configuration();
		cfg.configure("com/aags/resources/mysql.cfg.xml");
		SessionFactory sf=cfg.buildSessionFactory();
		Session s=sf.openSession();
		Transaction t=s.beginTransaction();
		String hql="select email from OldStudent os";
		Query query=s.createQuery(hql);
		List&lt;String> l=query.list();
		System.out.println("Total Records "+l.size());
		Iterator&lt;String> i=l.iterator();
		while(i.hasNext()){
			String o=(String)i.next();
			System.out.println("Email:"+o);
		}
		t.commit();
	}
}
	
</pre>



<h3>Hql Select Multiple Column</h3><br/>
<pre class="prettyprint">
package com.aags.beans;

import java.util.Iterator;
import java.util.List;

import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.cfg.Configuration;


public class HqlSelectMultipleColumn {
	public static void main(String args[]){
		Configuration cfg=new Configuration();
		cfg.configure("com/aags/resources/mysql.cfg.xml");
		SessionFactory sf=cfg.buildSessionFactory();
		Session s=sf.openSession();
		Transaction t=s.beginTransaction();
		String hql="select email,address from OldStudent os";
		Query query=s.createQuery(hql);
		List&lt;Object> l=query.list();
		System.out.println("Total Records "+l.size());
		Iterator&lt;Object> i=l.iterator();
		while(i.hasNext()){
			Object o[]=(Object[])i.next();
			System.out.println("Email:"+o[0]+" Address:"+o[1]);
		}
		t.commit();
	}
}
	
</pre>
<h2>Hql Delete</h2><hr/>
<h3>HqlDmlDeleteOperation.java</h3><hr/>
<pre class="prettyprint">
	package com.aags.beans;

import java.util.Iterator;
import java.util.List;

import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.cfg.Configuration;


public class HqlDmlDeleteOperation {
	public static void main(String args[]){
		Configuration cfg=new Configuration();
		cfg.configure("com/aags/resources/mysql.cfg.xml");
		SessionFactory sf=cfg.buildSessionFactory();
		Session s=sf.openSession();
		Transaction t=s.beginTransaction();
		String hql="delete from OldStudent os where os.id=:id";
		Query query=s.createQuery(hql);
		query.setParameter("id", 222);
		int rows=query.executeUpdate();
		System.out.println("Delete Row:"+rows);
		t.commit();
	}
}




</pre>

<h2>Hql Update</h2><hr/>
<h3>HqlDmlUpdateOperation.java</h3><hr/>
<pre class="prettyprint">
	package com.aags.beans;

import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.cfg.Configuration;

public class HqlDmlUpdateOperation {
	public static void main(String args[]){
		Configuration cfg=new Configuration();
		cfg.configure("com/aags/resources/mysql.cfg.xml");
		SessionFactory sf=cfg.buildSessionFactory();
		Session s=sf.openSession();
		Transaction t=s.beginTransaction();
		String hql="update OldStudent os set os.id=:set_id  where os.id=:id";
		Query query=s.createQuery(hql);
		query.setParameter("id", 333);
		query.setParameter("set_id", 333333);
		int rows=query.executeUpdate();
		System.out.println("Update Row:"+rows);
		t.commit();
	}
}

</pre>



<div class="alert alert-info">
CURD Operation
<blockquote>
	select,update,delete,insert
</blockquote>
if you leave select operation only then it will called DML(Data Manipulation Language) operation.It is mandatory to use executeUpdate() to exequte a HQL query.
<br/><br/>
DML operation
<blockquote>
	update,delete,insert
</blockquote>
</div>

<div class="alert alert-success">
	To select only row(One Object) then we can use uniqueResult() method but if record is not available then it will give NULL POINTER EXCEPTION.<br/>
	<br/>
	Example:
	<pre class="prettyprint">
package com.aags.beans;

import java.util.Iterator;
import java.util.List;

import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.cfg.Configuration;


public class HqlPassRuntimeValue {
	public static void main(String args[]){
		Configuration cfg=new Configuration();
		cfg.configure("com/aags/resources/mysql.cfg.xml");
		SessionFactory sf=cfg.buildSessionFactory();
		Session s=sf.openSession();
		Transaction t=s.beginTransaction();
		String hql="from OldStudent os where os.id=:id";
		Query query=s.createQuery(hql);
		query.setParameter("id", 111);
		Object o=query.uniqueResult();
		OldStudent os=(OldStudent)o;
		System.out.println("id:"+os.getId()+" Name:"+os.getName()+" Email:"+os.getEmail()+" Address:"+os.getAddress());
		
		t.commit();
	}
}
		
	</pre>
</div>

