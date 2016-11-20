<h3>Structure</h3><hr/>
<img src="<?php echo base_url();?>static/images/ice_screenshot_20160530-190529.png"><br/>


<h3>pom.xml</h3><hr/>
<pre class="prettyprint">
&lt;project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 http://maven.apache.org/maven-v4_0_0.xsd">
  &lt;modelVersion>4.0.0&lt;/modelVersion>
  &lt;groupId>com.way2programming&lt;/groupId>
  &lt;artifactId>HibernateJune2&lt;/artifactId>
  &lt;packaging>war&lt;/packaging>
  &lt;version>0.0.1-SNAPSHOT&lt;/version>
  &lt;name>HibernateJune2 Maven Webapp&lt;/name>
  &lt;url>http://maven.apache.org&lt;/url>
  &lt;dependencies>
      &lt;!-- Junit Dependency -->
    &lt;dependency>
      &lt;groupId>junit&lt;/groupId>
      &lt;artifactId>junit&lt;/artifactId>
      &lt;version>3.8.1&lt;/version>
      &lt;scope>test&lt;/scope>
    &lt;/dependency>
    
    &lt;!-- Mysql -->
    &lt;dependency>
         &lt;groupId>mysql&lt;/groupId>
         &lt;artifactId>mysql-connector-java&lt;/artifactId>
         &lt;version>5.1.6&lt;/version>
     &lt;/dependency>
     
     &lt;!-- Servlet/Jsp/EL/JSTL -->
     
     &lt;dependency>
            &lt;groupId>javax.servlet&lt;/groupId>
            &lt;artifactId>javax.servlet-api&lt;/artifactId>
            &lt;version>3.0.1&lt;/version>
            &lt;scope>provided&lt;/scope>
     &lt;/dependency>
        
     &lt;dependency>
            &lt;groupId>javax.servlet.jsp&lt;/groupId>
            &lt;artifactId>jsp-api&lt;/artifactId>
            &lt;version>2.2&lt;/version>
            &lt;scope>provided&lt;/scope>
     &lt;/dependency>
        
     &lt;dependency>
            &lt;groupId>javax.el&lt;/groupId>
            &lt;artifactId>javax.el-api&lt;/artifactId>
            &lt;version>2.2.4&lt;/version>
            &lt;scope>provided&lt;/scope>
     &lt;/dependency>   

     &lt;dependency>
            &lt;groupId>javax.servlet&lt;/groupId>
            &lt;artifactId>jstl&lt;/artifactId>
            &lt;version>1.2&lt;/version>
     &lt;/dependency>
     
     &lt;!-- Hibernate -->
     
    &lt;dependency>
        &lt;groupId>org.hibernate&lt;/groupId>
        &lt;artifactId>hibernate-entitymanager&lt;/artifactId>
        &lt;version>5.1.0.Final&lt;/version>
    &lt;/dependency>

    &lt;dependency>
        &lt;groupId>org.hibernate&lt;/groupId>
        &lt;artifactId>hibernate-core&lt;/artifactId>
        &lt;version>5.1.0.Final&lt;/version>
    &lt;/dependency>


    &lt;dependency>
        &lt;groupId>org.hibernate&lt;/groupId>
        &lt;artifactId>hibernate-validator&lt;/artifactId>
        &lt;version>5.1.3.Final&lt;/version>
    &lt;/dependency>
    
  &lt;/dependencies>
  &lt;build>
    &lt;finalName>HibernateJune2&lt;/finalName>
  &lt;/build>
&lt;/project>
	
</pre>






<h3>com/way2p/config/hibernate.cfg.xml</h3><hr/>
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
   &lt;property name="connection.password">&lt;/property>
   
   
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
   &lt;property name="hbm2ddl.auto">create&lt;/property>

   &lt;!-- List of XML mapping files -->
   &lt;mapping class="com.way2p.pojo.Student"/>
   
   &lt;!--&lt;mapping resource="hibernate_example/hbm/Book.hbm.xml"/>-->

   &lt;/session-factory>
&lt;/hibernate-configuration>  
      	
</pre>

<h3>com/way2p/pojo/Student.java</h3><hr/>
<pre class="prettyprint">
package com.way2p.pojo;

import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name="student")
public class Student {
	@Id
	private int id;
	private String name;
	private String email;
	private String address;
	

	public Student() {
		super();
		// TODO Auto-generated constructor stub
	}


	public Student(int id, String name, String email, String address) {
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


<h3>com.way2p.config.AppConfig.java</h3><hr/>
<pre class="prettyprint">
package com.way2p.config;


import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.cfg.Configuration;

import com.way2p.pojo.Student;

public class AppConfig {
 
   public static void main(String[] args) {
       final Configuration configuration = new Configuration().configure("com/way2p/config/hibernate.cfg.xml");
       final SessionFactory factory=configuration.buildSessionFactory();
       final Session session = factory.openSession();
       Student student = new Student();
       student.setId(1);
       student.setName("Arif Khan");
       student.setEmail("arifkhan.tech@gmail.com");
       student.setAddress("Gwalior MP");
       session.beginTransaction();
       session.save(student);
       session.getTransaction().commit();
       session.close();
       factory.close();
   }
}	
</pre>