<div class="panel panel-primary">
<div class="panel panel-heading">
Table-A has Many to One relationship with Table-B
</div>
<div class="panel panel-body">
If many record in Table-A can be linked with single record in Table-B
</div>
</div>


<div class="panel panel-primary">
<div class="panel panel-heading">
Table-B has One to Many relationship with Table-A
</div>
<div class="panel panel-body">
If single record in Table-B can be linked with 0,1 or many record in Table-B
</div>
</div>


<div class="panel panel-primary">
<div class="panel panel-heading">
i am using hbm2ddl.auto tool with create, so it will drop table and recreate it, the structure create in database is
</div>
<div class="panel panel-body">
<pre class="prettyprint">
CREATE TABLE `student` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(255) DEFAULT NULL,
  `student_address_add_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `student` (`s_id`, `s_name`, `student_address_add_id`) VALUES
(1, 'ABC', 1),
(2, 'LMN', 1);


CREATE TABLE `student_address` (
  `add_id` int(11) NOT NULL,
  `add_detail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `student_address` (`add_id`, `add_detail`) VALUES
(1, 'Delhi,India');

ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `FKph7hude0p2earvqmhs3ye3vja` (`student_address_add_id`);


ALTER TABLE `student_address`
  ADD PRIMARY KEY (`add_id`);


ALTER TABLE `student`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `student_address`
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;



ALTER TABLE `student`
  ADD CONSTRAINT `FKph7hude0p2earvqmhs3ye3vja` FOREIGN KEY (`student_address_add_id`) REFERENCES `student_address` (`add_id`);
</pre>
</div>
</div>


<div class="panel panel-primary">
<div class="panel panel-heading">
Example
</div>
<div class="panel panel-body">
<div class="row">
<div class="col-md-6">
   <table class="table table-bordered">
   <caption>Student</caption>
      <tr><th>s_id</th><th>s_name</th><th>s_add_id</th></tr>
      <tr><td>1</td><td>XYZ</td><td>1</td></tr>
      <tr><td>2</td><td>ABC</td><td>1</td></tr>
      <tr><td>3</td><td>LMN</td><td>2</td></tr>
   </table>
</div>
<div class="col-md-6">
 <table class="table table-bordered">
 <caption>StudentAddress</caption>
      <tr><th>add_id</th><th>add_detail</th></tr>
      <tr><td>1</td><td>Delhi, India</td></tr>
       <tr><td>2</td><td>Hyderabad, India</td></tr>
   </table>
</div>
</div>
Note:- Student table has many to one relationship with StudentAddress table.<br/>
StudentAddress table has one to many relationship with student table.

</div>
</div>




<div class="panel panel-primary">
<div class="panel panel-heading">
Example
</div>
<div class="panel panel-body">

<h3>pom.xml</h3>
<pre class="prettyprint">
&lt;project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 http://maven.apache.org/maven-v4_0_0.xsd">
  &lt;modelVersion>4.0.0&lt;/modelVersion>
  &lt;groupId>com.way2p&lt;/groupId>
  &lt;artifactId>mtomapping&lt;/artifactId>
  &lt;packaging>war&lt;/packaging>
  &lt;version>0.0.1-SNAPSHOT&lt;/version>
  &lt;name>mtomapping Maven Webapp&lt;/name>
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
    &lt;finalName>mtomapping&lt;/finalName>
  &lt;/build>
&lt;/project>
	
</pre>


<h3>hibernate.cfg.xml</h3>
<pre class="prettyprint">
&lt;?xml version="1.0" encoding="utf-8"?>
&lt;!DOCTYPE hibernate-configuration SYSTEM 
"http://www.hibernate.org/dtd/hibernate-configuration-3.0.dtd">

&lt;hibernate-configuration>
  &lt;session-factory>
    &lt;property name="connection.driver_class">com.mysql.jdbc.Driver&lt;/property>
    &lt;property name="connection.url"> jdbc:mysql://localhost/mto&lt;/property>
    &lt;property name="connection.username">root&lt;/property>
    &lt;property name="connection.password">&lt;/property>
    &lt;property name="connection.pool_size">1&lt;/property>
    
    &lt;!-- Mysql dialect -->
    &lt;!-- &lt;property name="dialect">org.hibernate.dialect.H2Dialect&lt;/property> -->
    &lt;property name="hibernate.dialect">org.hibernate.dialect.MySQLDialect&lt;/property>
    &lt;property name="show_sql">true&lt;/property>
    &lt;property name="cache.provider_class">org.hibernate.cache.NoCacheProvider&lt;/property>
    &lt;property name="hbm2ddl.auto">create&lt;/property>
  &lt;/session-factory>
&lt;/hibernate-configuration>	
</pre>


<h3>App.java</h3>
<pre class="prettyprint">
package com.way2p;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.cfg.Configuration;

public class App {
	
	public static void main(String args[]){
		
		StudentAddress sa=new StudentAddress();
		sa.setAdd_detail("Delhi,India");
	
		Student s1=new Student();
		s1.setS_name("ABC");
		s1.setStudent_address(sa);
		
		
		Student s2=new Student();
		s2.setS_name("LMN");
		s2.setStudent_address(sa);
		
		
		Configuration cfg=new Configuration();
	    cfg.configure("com/way2p/hibernate.cfg.xml");
	    cfg.addAnnotatedClass(com.way2p.Student.class);
	    cfg.addAnnotatedClass(com.way2p.StudentAddress.class);
	    
	    SessionFactory sf = cfg.buildSessionFactory();
	    Session session = sf.openSession();
	    
	    session.beginTransaction();
	    
	    session.save(s1);
	    session.save(s2);
	    
	    
	    session.getTransaction().commit();
	    session.close();
	    sf.close();
	}

}
	
</pre>


<h3>Student.java</h3>
<pre class="prettyprint">
package com.way2p;

import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.ManyToOne;
import javax.persistence.Table;

@Entity
@Table(name="student")
public class Student {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private int s_id;
	private String s_name;

	@ManyToOne(cascade=CascadeType.ALL)
	private StudentAddress student_address;
	
	public StudentAddress getStudent_address() {
		return student_address;
	}
	public void setStudent_address(StudentAddress student_address) {
		this.student_address = student_address;
	}
	public int getS_id() {
		return s_id;
	}
	public void setS_id(int s_id) {
		this.s_id = s_id;
	}
	public String getS_name() {
		return s_name;
	}
	public void setS_name(String s_name) {
		this.s_name = s_name;
	}

}
	
</pre>


<h3>StudentAddress.java</h3>
<pre class="prettyprint">
package com.way2p;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name="student_address")
public class StudentAddress {
     @Id
     @GeneratedValue(strategy = GenerationType.IDENTITY)
	private int add_id;
	private String add_detail;
	public int getAdd_id() {
		return add_id;
	}
	public void setAdd_id(int add_id) {
		this.add_id = add_id;
	}
	public String getAdd_detail() {
		return add_detail;
	}
	public void setAdd_detail(String add_detail) {
		this.add_detail = add_detail;
	}
	
	
	
}
	
</pre>




</div>
</div>

