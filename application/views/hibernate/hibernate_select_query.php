<h3>structure</h3><hr/>
<img src="<?php echo base_url() ?>static/images/ice_screenshot_20160531-024227.png" class="img-responsive"><br/>

<h3>AppConfig.java</h3><hr/>
<pre class="prettyprint">
package com.way2p.config;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.cfg.Configuration;

import com.way2p.pojo.Student;
public class AppConfig {
	public static void main(String args[]){
		 Configuration configuration = new Configuration().configure("com/way2p/config/hibernate.cfg.xml");
	        SessionFactory factory=configuration.buildSessionFactory();
	        Session session = factory.openSession();
	        Object object= session.load(Student.class,2);
	        Student s=(Student)object;
	        System.out.println("Name:"+s.getName()+"|"+" Email:"+s.getEmail());
	       session.close();
	       factory.close();
	}
}
	
</pre>


<h3>hibernate.cfg.xml</h3><hr/>
<pre class="prettyprint">
&lt;?xml version="1.0" encoding="utf-8"?>
&lt;!DOCTYPE hibernate-configuration SYSTEM 
"http://www.hibernate.org/dtd/hibernate-configuration-3.0.dtd">

&lt;hibernate-configuration>
   &lt;session-factory>
   &lt;!-- Database connection settings -->
   &lt;property name="connection.driver_class">com.mysql.jdbc.Driver&lt;/property>
   &lt;property name="connection.url"> jdbc:mysql://localhost/hibernate&lt;/property>
   &lt;property name="connection.username">root&lt;/property>
   &lt;property name="connection.password"> &lt;/property>
   
   
   &lt;!-- JDBC connection pool (use the built-in) -->
   &lt;property name="connection.pool_size">1&lt;/property>
   
   &lt;!-- SQL dialect -->
   &lt;!-- &lt;property name="dialect">org.hibernate.dialect.H2Dialect&lt;/property> -->
   &lt;property name="hibernate.dialect">org.hibernate.dialect.MySQLDialect&lt;/property>
   
   &lt;!-- Disable the second-level cache -->
   &lt;property name="cache.provider_class">org.hibernate.cache.internal.NoCacheProvider&lt;/property>
   
   &lt;!-- Echo all executed SQL to stdout -->
   &lt;property name="show_sql">true&lt;/property>
   
   &lt;!-- Drop and re-create the database schema on startup -->
   &lt;!-- &lt;property name="hbm2ddl.auto">create&lt;/property> -->

   &lt;!-- List of XML mapping files -->
   &lt;mapping class="com.way2p.pojo.Student"/>
   
   
   &lt;!--&lt;mapping resource="hibernate_example/hbm/Book.hbm.xml"/>-->

   &lt;/session-factory>
&lt;/hibernate-configuration>	
			
</pre>



<h3>AppConfig.java</h3><hr/>
<pre class="prettyprint">
package com.way2p.pojo;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name="student")
public class Student {
	@Id
	@GeneratedValue
	private int id;
	private String name;
	private String email;
	private String address;
	
	public Student() {
		super();
	}
	
	public Student( String name, String email, String address) {
		super();
		
		this.name = name;
		this.email = email;
		this.address = address;
	}
	
	/**
	 * @param name the name to set
	 */
	public void setName(String name) {
		this.name = name;
	}
	/**
	 * @return the name
	 */
	public String getName() {
		return name;
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
