<div class="panel panel-primary">
<div class="panel panel-heading">
One TO One Mapping Conditions
</div>
<div class="panel panel-body">
1. If each row in table-A is linked to each row in table-B<br/>
2. Number of rows in table-A = Number of rows in Table-B
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
      <tr><th>s_id</th><th>s_name</th></tr>
      <tr><td>1</td><td>XYZ</td></tr>
       <tr><td>2</td><td>ABC</td></tr>
   </table>
</div>
<div class="col-md-6">
 <table class="table table-bordered">
 <caption>StudentDetail</caption>
      <tr><th>s_id</th><th>s_mobile</th></tr>
      <tr><td>1</td><td>1234567890</td></tr>
       <tr><td>2</td><td>9087654321</td></tr>
   </table>
</div>
</div>
Note:- s_id from StudentDetail table have foreign key refrence with s_id in Student table.
</div>
</div>

<div class="panel panel-primary">
<div class="panel panel-heading">
Example
</div>
<div class="panel panel-body">
      
<h3>db.sql</h3>
      <pre class="prettyprint">
CREATE TABLE student (
  `s_id` int(11) NOT NULL auto_increment,
  `s_name` varchar(255) DEFAULT NULL,
  primary key(s_id)
);

CREATE TABLE student_detail (
  s_id int(11) NOT NULL,
  s_mobile varchar(255) DEFAULT NULL,
  primary key(s_id),
foreign key(s_id) references student(s_id) 
);
      </pre>


<h3>pom.xml</h3>
      <pre class="prettyprint">
&lt;project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 http://maven.apache.org/maven-v4_0_0.xsd">
  &lt;modelVersion>4.0.0&lt;/modelVersion>
  &lt;groupId>com.way2p&lt;/groupId>
  &lt;artifactId>otomapping&lt;/artifactId>
  &lt;packaging>war&lt;/packaging>
  &lt;version>0.0.1-SNAPSHOT&lt;/version>
  &lt;name>otomapping Maven Webapp&lt;/name>
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
    &lt;finalName>otomapping&lt;/finalName>
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
    &lt;property name="connection.url"> jdbc:mysql://localhost/oto&lt;/property>
    &lt;property name="connection.username">root&lt;/property>
    &lt;property name="connection.password">&lt;/property>
    &lt;!-- Mysql dialect -->
    &lt;!-- &lt;property name="dialect">org.hibernate.dialect.H2Dialect&lt;/property> -->
    &lt;property name="hibernate.dialect">org.hibernate.dialect.MySQLDialect&lt;/property>
    &lt;property name="show_sql">true&lt;/property>
    
  &lt;/session-factory>
&lt;/hibernate-configuration>
      </pre>



<h3>Student.java</h3>
      <pre class="prettyprint">
package com.way2p;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToOne;
import javax.persistence.Table;

@Entity
@Table(name="student")
public class Student {
  @Id @GeneratedValue(strategy = GenerationType.IDENTITY)
  private int s_id;
  private String s_name;
  @OneToOne(mappedBy = "student")
  private StudentDetail sDetail;
  
  public StudentDetail getsDetail() {
    return sDetail;
  }
  public void setsDetail(StudentDetail sDetail) {
    this.sDetail = sDetail;
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


<h3>StudentDetail.java</h3>
      <pre class="prettyprint">
package com.way2p;

import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;
import javax.persistence.Table;

import org.hibernate.annotations.GenericGenerator;
import org.hibernate.annotations.Parameter;

@Entity
@Table(name="student_detail")
public class StudentDetail {
  
  @Id @GeneratedValue(generator="newGenerator")
  @GenericGenerator(name="newGenerator",strategy="foreign",parameters={@Parameter(value="student",name="property")})
  private int s_id;
  private String s_mobile;
  
  @OneToOne(cascade=CascadeType.ALL)
  @JoinColumn(name="s_id")
  private Student student;
  
  
  public Student getStudent() {
    return student;
  }
  public void setStudent(Student student) {
    this.student = student;
  }
  
  public int getS_id() {
    return s_id;
  }
  public void setS_id(int s_id) {
    this.s_id = s_id;
  }
  public String getS_mobile() {
    return s_mobile;
  }
  public void setS_mobile(String s_mobile) {
    this.s_mobile = s_mobile;
  }
  
  

}

      </pre>


<h3>App.java</h3>
      <pre class="prettyprint">
package com.way2p;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.cfg.Configuration;

public class App {

  public static void main(String args[]){
    
    
    Configuration cfg=new Configuration();
    cfg.configure("com/way2p/hibernate.cfg.xml");
    cfg.addAnnotatedClass(com.way2p.Student.class);
    cfg.addAnnotatedClass(com.way2p.StudentDetail.class);
    
    SessionFactory sf = cfg.buildSessionFactory();
    Session session = sf.openSession();
    
    session.beginTransaction();
    Student student=new Student();
    student.setS_name("ABC");
    
    StudentDetail sDetail=new StudentDetail();
    sDetail.setS_mobile("1234567890");
    
    sDetail.setStudent(student);
    session.save(sDetail);
    
    session.getTransaction().commit();
    session.close();
    sf.close();
    
  }
}

      </pre>


      
</div>
</div>

