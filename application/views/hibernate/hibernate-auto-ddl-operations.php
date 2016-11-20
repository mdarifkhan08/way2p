			<h3>DDL Operations</h3>
			<pre class="prettyprint">
 <strong>
Create Table
Alter Table
Drop Table
Truncate Table
Rename Table
</strong>     
            </pre>

			
			
			
			<h3>Structure</h3>
			<pre class="prettyprint">
<img src="images/hibernate-auto-ddl-operations.png" class="img-responsive">
            </pre>

			

<h3>pom.xml</h3>
			<pre class="prettyprint">
&lt;project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 http://maven.apache.org/maven-v4_0_0.xsd">
  &lt;modelVersion>4.0.0&lt;/modelVersion>
  &lt;groupId>com.aags&lt;/groupId>
  &lt;artifactId>Hibernate1&lt;/artifactId>
  &lt;packaging>war&lt;/packaging>
  &lt;version>0.0.1-SNAPSHOT&lt;/version>
  &lt;name>Hibernate1 Maven Webapp&lt;/name>
  &lt;url>http://maven.apache.org&lt;/url>
  &lt;dependencies>
    &lt;dependency>
      &lt;groupId>junit&lt;/groupId>
      &lt;artifactId>junit&lt;/artifactId>
      &lt;version>3.8.1&lt;/version>
      &lt;scope>test&lt;/scope>
    &lt;/dependency>
    
    
    &lt;dependency>
        &lt;groupId>org.springframework&lt;/groupId>
        &lt;artifactId>spring-orm&lt;/artifactId>
        &lt;version>4.0.3.RELEASE&lt;/version>
    &lt;/dependency>


    &lt;dependency>
        &lt;groupId>org.hibernate&lt;/groupId>
        &lt;artifactId>hibernate-entitymanager&lt;/artifactId>
        &lt;version>3.6.9.Final&lt;/version>
    &lt;/dependency>

    &lt;dependency>
        &lt;groupId>org.hibernate&lt;/groupId>
        &lt;artifactId>hibernate-core&lt;/artifactId>
        &lt;version>3.6.9.Final&lt;/version>
    &lt;/dependency>


    &lt;dependency>
        &lt;groupId>org.hibernate&lt;/groupId>
        &lt;artifactId>hibernate-validator&lt;/artifactId>
        &lt;version>5.1.3.Final&lt;/version>
    &lt;/dependency>

     &lt;dependency>
        &lt;groupId>org.springframework&lt;/groupId>
        &lt;artifactId>spring-tx&lt;/artifactId>
        &lt;version>4.0.3.RELEASE&lt;/version>
    &lt;/dependency>
    
    
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
     
      &lt;dependency>
         &lt;groupId>mysql&lt;/groupId>
         &lt;artifactId>mysql-connector-java&lt;/artifactId>
         &lt;version>5.1.6&lt;/version>
     &lt;/dependency>
  &lt;/dependencies>
  &lt;build>
    &lt;finalName>Hibernate1&lt;/finalName>
  &lt;/build>
&lt;/project>

            </pre>
			
			<h3>Student.java</h3>
			<pre class="prettyprint">
package com.aags.beans;

public class Student {
	private int id;
	private String name;
	private String email;
	private int marks;
	
	public Student(){
		
	}


	public int getId() {
		return id;
	}


	public void setId(int id) {
		this.id = id;
	}


	public String getName() {
		return name;
	}


	public void setName(String name) {
		this.name = name;
	}


	public String getEmail() {
		return email;
	}


	public void setEmail(String email) {
		this.email = email;
	}


	public int getMarks() {
		return marks;
	}


	public void setMarks(int marks) {
		this.marks = marks;
	}
	
}

            </pre>

			
			
			
			<h3>hibernate.cfg.xml</h3>
			<pre class="prettyprint">
&lt;?xml version="1.0" encoding="utf-8"?>
&lt;!DOCTYPE hibernate-configuration SYSTEM 
"http://www.hibernate.org/dtd/hibernate-configuration-3.0.dtd">

&lt;hibernate-configuration>
   &lt;session-factory>
   
   &lt;property name="connection.driver_class">com.mysql.jdbc.Driver&lt;/property>
   &lt;!-- Assume test is the database name -->
   &lt;property name="connection.url">jdbc:mysql://localhost/test&lt;/property>
   &lt;property name="connection.username">root&lt;/property>
   &lt;property name="connection.password">&lt;/property>
   
   
   &lt;property name="hibernate.dialect">org.hibernate.dialect.MySQLDialect&lt;/property>
   
   &lt;property name="hbm2ddl.auto">create&lt;/property>

   &lt;!-- List of XML mapping files -->
   &lt;mapping resource="com/aags/resources/student.hbm.xml"/>

&lt;/session-factory>
&lt;/hibernate-configuration>	
			</pre>

			
			
			<h3>student.hbm.xml</h3>
			<pre class="prettyprint">
&lt;?xml version="1.0" encoding="utf-8"?>
&lt;!DOCTYPE hibernate-mapping PUBLIC 
 "-//Hibernate/Hibernate Mapping DTD//EN"
 "http://www.hibernate.org/dtd/hibernate-mapping-3.0.dtd"> 
 &lt;hibernate-mapping>
   &lt;class name="com.aags.beans.Student" table="student">
      &lt;meta attribute="class-description">
         This class contains the student detail. 
      &lt;/meta>
      &lt;id name="id" />
      &lt;property name="name" />
      &lt;property name="email"/>
      &lt;property name="marks"/>
   &lt;/class>
&lt;/hibernate-mapping>
			</pre>


			
			
			<h3>(student.hbm.xml) If you want class  property  name different with database column name then you need this file</h3>
			<pre class="prettyprint">
&lt;?xml version="1.0" encoding="utf-8"?>
&lt;!DOCTYPE hibernate-mapping PUBLIC 
 "-//Hibernate/Hibernate Mapping DTD//EN"
 "http://www.hibernate.org/dtd/hibernate-mapping-3.0.dtd"> 
 &lt;hibernate-mapping>
   &lt;class name="com.aags.beans.Student" table="student">
      &lt;meta attribute="class-description">
         This class contains the student detail. 
      &lt;/meta>
      &lt;id name="id" column="sid"/>
      &lt;property name="name" column="sname"/>
      &lt;property name="email" column="semail"/>
      &lt;property name="marks" column="smarks"/>
   &lt;/class>
&lt;/hibernate-mapping>
             </pre>




			<h3>Test.java</h3>
			<pre class="prettyprint">
package com.aags.test;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.cfg.Configuration;

import com.aags.beans.Student;

public class Test {
	
	public static void main(String args[]){
		
		Student st=new Student();
		st.setId(111);
		st.setName("Arif Khan");
		st.setEmail("tech.arifkhan08@gmail.com");
		st.setMarks(123);
		//Student Object State Is Transient at this point of time
		
		Configuration cfg =new Configuration();
		cfg.configure("com/aags/resources/hibernate.cfg.xml");
		SessionFactory sf=cfg.buildSessionFactory();
		Session s=sf.openSession();
		s.save(st);
		//Student Object State Is Persistent at this point of time
		
		s.beginTransaction().commit();
		//Student Object State Is Database State(It means data is saved inside database)
		
		s.evict(st);
		//Student Object State Is Detached at this point of time
		//then gc can collect your student object
	}

}

            </pre>






            <h3>About Auto DDL Operations</h3>
			<pre class="prettyprint">
From the community documentation:

hibernate.hbm2ddl.auto Automatically validates or exports schema DDL to the database when the SessionFactory is created. With create-drop, the database schema will be dropped when the SessionFactory is closed explicitly.

e.g. validate | update | create | create-drop
So the list of possible options are,

validate: validate the schema, makes no changes to the database.
update: update the schema.
create: creates the schema, destroying previous data.
create-drop: drop the schema at the end of the session.
These options seem intended to be developers tools and not to facilitate any production level databases, you may want to have a look at the following question;<a href="http://stackoverflow.com/questions/221379/hibernate-hbm2ddl-auto-update-in-production" class="btn btn-success">Hibernate: hbm2ddl.auto=update in production?</a>
            </pre>
