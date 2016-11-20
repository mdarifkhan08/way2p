			<div class="alert alert-info">It is not industry level app but it is having some wrong and correct concept that  will use to make industry level apps.</div>
			<h3>pom.xml</h3>
			<pre class="prettyprint">
 &lt;project xmlns=&quot;http://maven.apache.org/POM/4.0.0&quot; xmlns:xsi=&quot;http://www.w3.org/2001/XMLSchema-instance&quot;
  xsi:schemaLocation=&quot;http://maven.apache.org/POM/4.0.0 http://maven.apache.org/maven-v4_0_0.xsd&quot;&gt;
  &lt;modelVersion&gt;4.0.0&lt;/modelVersion&gt;
  &lt;groupId&gt;com.itm&lt;/groupId&gt;
  &lt;artifactId&gt;SpringMVC-Hibernate&lt;/artifactId&gt;
  &lt;packaging&gt;war&lt;/packaging&gt;
  &lt;version&gt;0.0.1-SNAPSHOT&lt;/version&gt;
  &lt;name&gt;SpringMVC-Hibernate Maven Webapp&lt;/name&gt;
  &lt;url&gt;http://maven.apache.org&lt;/url&gt;
  &lt;dependencies&gt;
    &lt;dependency&gt;
      &lt;groupId&gt;junit&lt;/groupId&gt;
      &lt;artifactId&gt;junit&lt;/artifactId&gt;
      &lt;version&gt;3.8.1&lt;/version&gt;
      &lt;scope&gt;test&lt;/scope&gt;
    &lt;/dependency&gt;
    &lt;dependency&gt;
  &lt;groupId&gt;org.apache.maven.plugins&lt;/groupId&gt;
  &lt;artifactId&gt;maven-compiler-plugin&lt;/artifactId&gt;
  &lt;version&gt;3.2&lt;/version&gt;
  &lt;type&gt;maven-plugin&lt;/type&gt;
&lt;/dependency&gt;
    &lt;dependency&gt;
    	&lt;groupId&gt;org.springframework&lt;/groupId&gt;
    	&lt;artifactId&gt;spring-context&lt;/artifactId&gt;
    	&lt;version&gt;4.0.3.RELEASE&lt;/version&gt;
    &lt;/dependency&gt;
    &lt;dependency&gt;
    	&lt;groupId&gt;org.springframework&lt;/groupId&gt;
    	&lt;artifactId&gt;spring-tx&lt;/artifactId&gt;
    	&lt;version&gt;4.0.3.RELEASE&lt;/version&gt;
    &lt;/dependency&gt;
     &lt;dependency&gt;
   &lt;groupId&gt;org.codehaus.jackson&lt;/groupId&gt;
   &lt;artifactId&gt;jackson-mapper-asl&lt;/artifactId&gt;
   &lt;version&gt;1.7.1&lt;/version&gt;
  &lt;/dependency&gt;
    &lt;dependency&gt;
    	&lt;groupId&gt;org.springframework&lt;/groupId&gt;
    	&lt;artifactId&gt;spring-orm&lt;/artifactId&gt;
    	&lt;version&gt;4.0.3.RELEASE&lt;/version&gt;
    &lt;/dependency&gt;
    &lt;dependency&gt;
    	&lt;groupId&gt;org.springframework&lt;/groupId&gt;
    	&lt;artifactId&gt;spring-webmvc&lt;/artifactId&gt;
    	&lt;version&gt;4.0.3.RELEASE&lt;/version&gt;
    &lt;/dependency&gt;
    &lt;dependency&gt;
    	&lt;groupId&gt;org.slf4j&lt;/groupId&gt;
    	&lt;artifactId&gt;slf4j-api&lt;/artifactId&gt;
    	&lt;version&gt;1.7.5&lt;/version&gt;
    &lt;/dependency&gt;
    &lt;dependency&gt;
    	&lt;groupId&gt;ch.qos.logback&lt;/groupId&gt;
    	&lt;artifactId&gt;logback-classic&lt;/artifactId&gt;
    	&lt;version&gt;1.0.13&lt;/version&gt;
    &lt;/dependency&gt;
    &lt;dependency&gt;
    	&lt;groupId&gt;org.hibernate&lt;/groupId&gt;
    	&lt;artifactId&gt;hibernate-entitymanager&lt;/artifactId&gt;
    	&lt;version&gt;3.6.9.Final&lt;/version&gt;
    &lt;/dependency&gt;
    &lt;dependency&gt;
    	&lt;groupId&gt;org.hibernate&lt;/groupId&gt;
    	&lt;artifactId&gt;hibernate-core&lt;/artifactId&gt;
    	&lt;version&gt;3.6.9.Final&lt;/version&gt;
    &lt;/dependency&gt;
    &lt;dependency&gt;
    	&lt;groupId&gt;commons-dbcp&lt;/groupId&gt;
    	&lt;artifactId&gt;commons-dbcp&lt;/artifactId&gt;
    	&lt;version&gt;1.4&lt;/version&gt;
    &lt;/dependency&gt;
    &lt;dependency&gt;
    	&lt;groupId&gt;javax.servlet&lt;/groupId&gt;
    	&lt;artifactId&gt;servlet-api&lt;/artifactId&gt;
    	&lt;version&gt;2.5&lt;/version&gt;
    &lt;/dependency&gt;
    &lt;dependency&gt;
    	&lt;groupId&gt;javax.servlet&lt;/groupId&gt;
    	&lt;artifactId&gt;jstl&lt;/artifactId&gt;
    	&lt;version&gt;1.2&lt;/version&gt;
    &lt;/dependency&gt;
    &lt;dependency&gt;
    	&lt;groupId&gt;org.hibernate&lt;/groupId&gt;
    	&lt;artifactId&gt;hibernate-validator&lt;/artifactId&gt;
    	&lt;version&gt;5.1.3.Final&lt;/version&gt;
    &lt;/dependency&gt;
  &lt;/dependencies&gt;
  &lt;build&gt;
    &lt;finalName&gt;SpringMVC-Hibernate&lt;/finalName&gt;
  &lt;/build&gt;
&lt;/project&gt;   
            </pre>

			
			
			
			<h3>web.xml</h3>
			<pre class="prettyprint">
 &lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
&lt;web-app xmlns:xsi=&quot;http://www.w3.org/2001/XMLSchema-instance&quot;
	xmlns=&quot;http://java.sun.com/xml/ns/javaee&quot;
	xsi:schemaLocation=&quot;http://java.sun.com/xml/ns/javaee http://java.sun.com/xml/ns/javaee/web-app_2_5.xsd&quot;
	id=&quot;WebApp_ID&quot; version=&quot;2.5&quot;&gt;
	&lt;display-name&gt;Archetype Created Web Application&lt;/display-name&gt;
	&lt;!-- The front controller of this Spring Web application, responsible for 
		handling all application requests --&gt;
	&lt;servlet&gt;
		&lt;servlet-name&gt;springDispatcherServlet&lt;/servlet-name&gt;
		&lt;servlet-class&gt;org.springframework.web.servlet.DispatcherServlet&lt;/servlet-class&gt;
		&lt;init-param&gt;
			&lt;param-name&gt;contextConfigLocation&lt;/param-name&gt;
			&lt;param-value&gt;/WEB-INF/config/servlet-config.xml&lt;/param-value&gt;
		&lt;/init-param&gt;
		&lt;load-on-startup&gt;1&lt;/load-on-startup&gt;
	&lt;/servlet&gt;

	&lt;!-- Map all requests to the DispatcherServlet for handling --&gt;
	&lt;servlet-mapping&gt;
		&lt;servlet-name&gt;springDispatcherServlet&lt;/servlet-name&gt;
		&lt;url-pattern&gt;/&lt;/url-pattern&gt;
	&lt;/servlet-mapping&gt;&lt;!-- needed for ContextLoaderListener --&gt;


	&lt;!-- needed for ContextLoaderListener --&gt;
	&lt;context-param&gt;
		&lt;param-name&gt;contextConfigLocation&lt;/param-name&gt;
		&lt;param-value&gt;/WEB-INF/config/servlet-config.xml&lt;/param-value&gt;
	&lt;/context-param&gt;
&lt;/web-app&gt; 
            </pre>

			
			
			<h3>servlet-config.xml</h3>
			<pre class="prettyprint">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
&lt;beans xmlns=&quot;http://www.springframework.org/schema/beans&quot;
	xmlns:xsi=&quot;http://www.w3.org/2001/XMLSchema-instance&quot;
	xmlns:context=&quot;http://www.springframework.org/schema/context&quot;
	xmlns:mvc=&quot;http://www.springframework.org/schema/mvc&quot;
	xsi:schemaLocation=&quot;http://www.springframework.org/schema/beans http://www.springframework.org/schema/beans/spring-beans.xsd
		http://www.springframework.org/schema/context http://www.springframework.org/schema/context/spring-context-4.0.xsd
		http://www.springframework.org/schema/mvc http://www.springframework.org/schema/mvc/spring-mvc-4.0.xsd&quot;&gt;
&lt;mvc:annotation-driven/&gt;
&lt;mvc:resources location=&quot;/resources/&quot; mapping=&quot;/resources/**&quot; /&gt;
&lt;context:component-scan base-package=&quot;com.cil.controller&quot;/&gt;
&lt;bean id=&quot;viewResolver&quot; class=&quot;org.springframework.web.servlet.view.InternalResourceViewResolver&quot;&gt;
&lt;property name=&quot;prefix&quot; value=&quot;/WEB-INF/jsp/&quot;/&gt;
&lt;property name=&quot;suffix&quot; value=&quot;.jsp&quot;&gt;&lt;/property&gt;
&lt;/bean&gt;

&lt;/beans&gt;
            </pre>

			
			
			
			<h3>application-context.xml</h3>
			<pre class="prettyprint">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
&lt;beans xmlns=&quot;http://www.springframework.org/schema/beans&quot;
	xmlns:xsi=&quot;http://www.w3.org/2001/XMLSchema-instance&quot;
	xmlns:context=&quot;http://www.springframework.org/schema/context&quot;
	xmlns:jdbc=&quot;http://www.springframework.org/schema/jdbc&quot;
	xmlns:tx=&quot;http://www.springframework.org/schema/tx&quot;
	xsi:schemaLocation=&quot;http://www.springframework.org/schema/beans http://www.springframework.org/schema/beans/spring-beans.xsd
		http://www.springframework.org/schema/context http://www.springframework.org/schema/context/spring-context-4.0.xsd
		http://www.springframework.org/schema/jdbc http://www.springframework.org/schema/jdbc/spring-jdbc-4.0.xsd
		http://www.springframework.org/schema/tx http://www.springframework.org/schema/tx/spring-tx-4.0.xsd&quot;&gt;

&lt;!-- DriverManagerDataSource.......................................................................... --&gt;

	&lt;bean id=&quot;dataSource&quot;
		class=&quot;org.springframework.jdbc.datasource.DriverManagerDataSource&quot;&gt;
		&lt;property name=&quot;driverClassName&quot; value=&quot;oracle.jdbc.driver.OracleDriver&quot; /&gt;
		&lt;property name=&quot;url&quot; value=&quot;jdbc:oracle:thin:@//localhost:1521/xe&quot; /&gt;
		&lt;property name=&quot;username&quot; value=&quot;system&quot; /&gt;
		&lt;property name=&quot;password&quot; value=&quot;inception&quot; /&gt;
	&lt;/bean&gt;

	&lt;!-- /DriverManagerDataSource.......................................................................... --&gt;

	&lt;!-- AnnotationSessionFactoryBean for hibernateSessionFactory.......................................................................... --&gt;

	&lt;bean id=&quot;hibernateSessionFactory&quot;
		class=&quot;org.springframework.orm.hibernate3.annotation.AnnotationSessionFactoryBean&quot;&gt;
		&lt;property name=&quot;dataSource&quot; ref=&quot;dataSource&quot; /&gt;
		&lt;property name=&quot;annotatedClasses&quot;&gt;
			&lt;list&gt;
				&lt;value&gt;com.cil.controller.StudentHLO&lt;/value&gt;
			&lt;/list&gt;
		&lt;/property&gt;
		&lt;property name=&quot;hibernateProperties&quot;&gt;
			&lt;props&gt;
				&lt;prop key=&quot;hibernate.dialect&quot;&gt;org.hibernate.dialect.OracleDialect&lt;/prop&gt;
			&lt;/props&gt;
		&lt;/property&gt;
	&lt;/bean&gt;

	&lt;!-- /AnnotationSessionFactoryBean for hibernateSessionFactory.......................................................................... --&gt;

	&lt;!-- HibernateTemplate.......................................................................... --&gt;

	&lt;bean id=&quot;hibernateTemplate&quot; class=&quot;org.springframework.orm.hibernate3.HibernateTemplate&quot;&gt;
		&lt;property name=&quot;sessionFactory&quot; ref=&quot;hibernateSessionFactory&quot; /&gt;
	&lt;/bean&gt;

	&lt;!-- /HibernateTemplate.......................................................................... --&gt;

	&lt;!-- HibernateTransactionManager.......................................................................... --&gt;

	&lt;bean id=&quot;transactionManager&quot;
		class=&quot;org.springframework.orm.hibernate3.HibernateTransactionManager&quot;&gt;
		&lt;property name=&quot;sessionFactory&quot; ref=&quot;hibernateSessionFactory&quot; /&gt;
	&lt;/bean&gt;

	&lt;!-- /HibernateTransactionManager.......................................................................... --&gt;

	&lt;!-- EXTRA...................................................... --&gt;
	&lt;bean id=&quot;studentDAO&quot; class=&quot;com.cil.controller.StudentDAO&quot;&gt;
		&lt;constructor-arg ref=&quot;hibernateTemplate&quot; /&gt;
	&lt;/bean&gt;
	&lt;bean id=&quot;s&quot; class=&quot;com.cil.controller.StudentService&quot;&gt;
		&lt;property name=&quot;studentDAO&quot; ref=&quot;studentDAO&quot; /&gt;
	&lt;/bean&gt;
	&lt;!-- /EXTRA..................................................... --&gt;

&lt;/beans&gt;	
			</pre>

			
			
			<h3>SimpleController.java</h3>
			<pre class="prettyprint">
package com.cil.controller;

import javax.validation.Valid;

import org.springframework.context.ApplicationContext;
import org.springframework.context.support.ClassPathXmlApplicationContext;
import org.springframework.stereotype.Controller;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;

@Controller
public class SimpleController {
	
	@RequestMapping(value = "map1", method = RequestMethod.GET)
	public String showForm5() {
		return "loginForm";
	}


	@RequestMapping(value = "process1", method = RequestMethod.POST)
	public ModelAndView process(@Valid @ModelAttribute("emp") StudentBean emp,
			BindingResult result) {
	
		if (result.hasErrors()) {
			ModelAndView model = new ModelAndView("loginForm");
			model.addObject("emp", emp);
			return model;
		}

		ApplicationContext context = new ClassPathXmlApplicationContext(
				"com/cil/controller/application-context.xml");
		StudentService ss = context.getBean("s", StudentService.class);
		
	
		ss.insert(emp);
		ModelAndView m = new ModelAndView("success");
		return m;

	}

	@RequestMapping(value = "map2", method = RequestMethod.GET)
	public String showForm56() {
		return "findById";
	}

	@RequestMapping(value = "process2", method = RequestMethod.POST)
	public ModelAndView show1(@ModelAttribute("emp") StudentBean e,BindingResult result) {
		ApplicationContext context = new ClassPathXmlApplicationContext(
				"com/cil/controller/application-context.xml");
		int id = e.getSid();
		StudentService ss = context.getBean("s", StudentService.class);
		StudentBean s = ss.findStudent(id);
		int ssss=s.getSid();
		e.setSid(s.getSid());
		e.setSname(s.getSname());
		e.setAdd(s.getAdd());
		e.setEmail(s.getEmail());
		System.out.println(s);
		ModelAndView m = new ModelAndView("showById");
		if(ssss==id){

        if(result.hasErrors()){
        	ModelAndView model = new ModelAndView("findByUser");
			model.addObject("emp", e);
			model.addObject("mag","ok");
			return model;
        }
			
		}
		return m;

	}
	

}		
			</pre>


			
			
			<h3>StudentBean.java</h3>
			<pre class="prettyprint">
package com.cil.controller;

import javax.validation.constraints.NotNull;
import javax.validation.constraints.Size;

import org.hibernate.validator.constraints.Email;
import org.hibernate.validator.constraints.NotBlank;

public class StudentBean {

	private int sid;
	@NotNull(message="Field can not be null")
	@NotBlank(message="Field can not be blank")
	@Size(min=2,max=20,message="please enter a value more than 2 characters and less than 20 char")
	private String sname;
	private String add;
	@Email(message="Email address is not in a valid format")
	private String email;
	public int getSid() {
		return sid;
	}
	public void setSid(int sid) {
		this.sid = sid;
	}
	public String getSname() {
		return sname;
	}
	public void setSname(String sname) {
		this.sname = sname;
	}
	public String getAdd() {
		return add;
	}
	public void setAdd(String add) {
		this.add = add;
	}
	public String getEmail() {
		return email;
	}
	public void setEmail(String email) {
		this.email = email;
	}
	@Override
	public String toString() {
		return "StudentBean [sid=" + sid + ", sname=" + sname + ", add=" + add
				+ ", email=" + email + "]";
	}

}
             </pre>




			<h3>StudentDAO.java</h3>
			<pre class="prettyprint">
package com.cil.controller;

import org.springframework.orm.hibernate3.HibernateTemplate;

public class StudentDAO {
	private HibernateTemplate hibernateTemplate;
	
	public StudentDAO(HibernateTemplate hibernateTemplate){
		this.hibernateTemplate=hibernateTemplate;
	}
	
	public void insert(StudentHLO studentHLO){
		hibernateTemplate.save(studentHLO);
		
	}
	public StudentHLO findStudent(int sid) {
		return hibernateTemplate.get(StudentHLO.class, sid);
	}
}
            </pre>

<h3>StudentHLO.java</h3>
<pre class="prettyprint">
	package com.cil.controller;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name="student")
public class StudentHLO {
	@Id
	@Column(name="sid")
	private int sid;
	@Column(name="sname")
	private String sname;
	@Column(name="add1")
	private String add;
	@Column(name="email")
	private String email;
	public int getSid() {
		return sid;
	}
	public void setSid(int sid) {
		this.sid = sid;
	}
	public String getSname() {
		return sname;
	}
	public void setSname(String sname) {
		this.sname = sname;
	}
	public String getAdd() {
		return add;
	}
	public void setAdd(String add) {
		this.add = add;
	}
	public String getEmail() {
		return email;
	}
	public void setEmail(String email) {
		this.email = email;
	}
	@Override
	public String toString() {
		return "StudentHLO [sid=" + sid + ", sname=" + sname + ", add=" + add
				+ ", email=" + email + "]";
	}
	

}
</pre>

            <h3>StudentService.java</h3>
			<pre class="prettyprint">
package com.cil.controller;

public class StudentService {
	private StudentDAO studentDAO;

	public void setStudentDAO(StudentDAO studentDAO) {
		this.studentDAO = studentDAO;
	}
	
	public void insert(StudentBean studentBean){
		StudentHLO studentHLO=new StudentHLO();
		studentHLO.setSid( studentBean.getSid());
		studentHLO.setSname( studentBean.getSname());
		studentHLO.setAdd( studentBean.getAdd());
		studentHLO.setEmail( studentBean.getEmail());
		studentDAO.insert(studentHLO);
	}
	public StudentBean findStudent(int sid) {
		StudentHLO studentHLO = studentDAO.findStudent(sid);
		StudentBean student = new StudentBean();
		student.setSid(studentHLO.getSid());
		student.setSname(studentHLO.getSname());
		student.setAdd(studentHLO.getAdd());
		student.setEmail(studentHLO.getEmail());
		return student;
	}

}
            </pre>




             <h3>findById.jsp</h3>
			<pre class="prettyprint">
&lt;%@ page language=&quot;java&quot; contentType=&quot;text/html; charset=ISO-8859-1&quot;
pageEncoding=&quot;ISO-8859-1&quot;%&gt;
&lt;%@ taglib prefix=&quot;form&quot; uri=&quot;http://www.springframework.org/tags/form&quot;%&gt;
&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD HTML 4.01 Transitional//EN&quot; &quot;http://www.w3.org/TR/html4/loose.dtd&quot;&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=ISO-8859-1&quot;&gt;
&lt;title&gt;Search Form&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;table align=&quot;center&quot;&gt;
&lt;form action=&quot;/SpringMVC-Hibernate/process2&quot; method=&quot;post&quot;&gt;
&lt;h2 align=&quot;center&quot;&gt;Provide Student Id and get the info&lt;/h2&gt;
&lt;tr&gt;&lt;td&gt;student id&lt;/td&gt;&lt;td&gt; &lt;input type=&quot;text&quot; name=&quot;sid&quot;&gt;&lt;/td&gt;&lt;td&gt;&lt;form:errors path=&quot;emp.sid&quot; cssClass=&quot;errorBlock&quot;/&gt;&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;submit&quot; value=&quot;submit&quot;&gt;&lt;/td&gt;&lt;/tr&gt;
&lt;/table&gt;
&lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;
            </pre>





             <h3>loginform.jsp</h3>
			<pre class="prettyprint">
&lt;%@ page language=&quot;java&quot; contentType=&quot;text/html; charset=ISO-8859-1&quot;
pageEncoding=&quot;ISO-8859-1&quot;%&gt;
&lt;%@ taglib prefix=&quot;form&quot; uri=&quot;http://www.springframework.org/tags/form&quot;%&gt;
&lt;%@ page import=&quot;java.io.*,java.sql.*&quot; %&gt;
&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD HTML 4.01 Transitional//EN&quot; &quot;http://www.w3.org/TR/html4/loose.dtd&quot;&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=ISO-8859-1&quot;&gt;
&lt;title&gt;Our SignUp Form&lt;/title&gt;
&lt;style type=&quot;text/css&quot;&gt;
.errorBlock{
color:#FF0000;
}
&lt;/style&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
function loadXMLDoc()
{
var xmlhttp;
var k=document.getElementById(&quot;id2&quot;).value;
var urls=&quot;pass.jsp?ver=&quot;+k;
 
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject(&quot;Microsoft.XMLHTTP&quot;);
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4)
    {
        //document.getElementById(&quot;err&quot;).style.color=&quot;red&quot;;
        document.getElementById(&quot;err&quot;).innerHTML=xmlhttp.responseText;
 
    }
  }
xmlhttp.open(&quot;GET&quot;,urls,true);
xmlhttp.send();
}
&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;h2 align=&quot;center&quot;&gt;Sign Up Form&lt;/h2&gt;
&lt;table align=&quot;center&quot;&gt;
&lt;form action=&quot;/SpringMVC-Hibernate/process1&quot; method=&quot;post&quot;&gt;
&lt;tr&gt;&lt;td&gt;student id&lt;/td&gt;&lt;td&gt; &lt;input type=&quot;text&quot; name=&quot;sid&quot;&gt;&lt;/td&gt;&lt;td&gt;&lt;form:errors path=&quot;emp.sid&quot; cssClass=&quot;errorBlock&quot;/&gt;&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;student name&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;sname&quot; id=&quot;id2&quot; onkeyup=&quot;loadXMLDoc()&quot;&gt;&lt;/td&gt;&lt;td&gt;&lt;span id=&quot;err&quot;&gt;&lt;/span&gt;&lt;/td&gt;&lt;td&gt;&lt;form:errors path=&quot;emp.sname&quot; cssClass=&quot;errorBlock&quot;/&gt;&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;student address&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;add&quot;&gt;&lt;/td&gt;&lt;td&gt;&lt;form:errors path=&quot;emp.add&quot; cssClass=&quot;errorBlock&quot;/&gt;&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;student email&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;email&quot;&gt;&lt;/td&gt;&lt;td&gt;&lt;form:errors path=&quot;emp.email&quot; cssClass=&quot;errorBlock&quot;/&gt;&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;submit&quot; value=&quot;submit&quot;&gt;&lt;/td&gt;&lt;/tr&gt;
&lt;/form&gt;
&lt;/table&gt;
&lt;/body&gt;
&lt;/html&gt;
            </pre>




             <h3>showById.jsp</h3>
			<pre class="prettyprint">
&lt;%@ page language=&quot;java&quot; contentType=&quot;text/html; charset=ISO-8859-1&quot;
pageEncoding=&quot;ISO-8859-1&quot;%&gt;
&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD HTML 4.01 Transitional//EN&quot; &quot;http://www.w3.org/TR/html4/loose.dtd&quot;&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=ISO-8859-1&quot;&gt;
&lt;title&gt;Insert title here&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;table align=&quot;center&quot;&gt;
&lt;h2 align=&quot;center&quot;&gt;You Have Entered Student Id:&#36;{emp.sid} &lt;/h2&gt;
&lt;tr&gt;&lt;td&gt;student name:&lt;/td&gt;&lt;td&gt;&#36;{emp.sname}&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;student address:&lt;/td&gt;&lt;td&gt;&#36;{emp.add}&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;student email:&lt;/td&gt;&lt;td&gt;&#36;{emp.email}&lt;/td&gt;&lt;/tr&gt;

&lt;/table&gt;
&lt;/body&gt;
&lt;/html&gt;
            </pre>





             <h3>success.jsp</h3>
			<pre class="prettyprint">
&lt;%@ page language=&quot;java&quot; contentType=&quot;text/html; charset=ISO-8859-1&quot;
pageEncoding=&quot;ISO-8859-1&quot;%&gt;
&lt;%@ taglib prefix=&quot;form&quot; uri=&quot;http://www.springframework.org/tags/form&quot;%&gt;
&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD HTML 4.01 Transitional//EN&quot; &quot;http://www.w3.org/TR/html4/loose.dtd&quot;&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=ISO-8859-1&quot;&gt;
&lt;title&gt;Submitted data&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;table align=&quot;center&quot;&gt;
&lt;h2 align=&quot;center&quot;&gt;Submitted Data:&lt;/h2&gt;
&lt;tr&gt;&lt;td&gt;student id:&lt;/td&gt;&lt;td&gt;&#36;{emp.sid}&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;student name:&lt;/td&gt;&lt;td&gt;&#36;{emp.sname}&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;student address:&lt;/td&gt;&lt;td&gt;&#36;{emp.add}&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;student email:&lt;/td&gt;&lt;td&gt;&#36;{emp.email}&lt;/td&gt;&lt;/tr&gt;
&lt;/table&gt;&#36;{hhh}
&lt;/body&gt;
&lt;/html&gt;
            </pre>





             <h3>index.jsp</h3>
			<pre class="prettyprint">
&lt;html&gt;
&lt;body&gt;
&lt;a href=&quot;map1&quot;&gt;Sign Up&lt;/a&gt;&lt;br&gt;
&lt;a href=&quot;map2&quot;&gt;Get Student Info By ID&lt;/a&gt;
&lt;/body&gt;
&lt;/html&gt;
            </pre>





             <h3>pass.jsp</h3>
			<pre class="prettyprint">
&lt;%@ page language=&quot;java&quot; contentType=&quot;text/html; charset=ISO-8859-1&quot;
pageEncoding=&quot;ISO-8859-1&quot;%&gt;
&lt;%@ page import=&quot;java.io.*,java.sql.*&quot; %&gt;
&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD HTML 4.01 Transitional//EN&quot; &quot;http://www.w3.org/TR/html4/loose.dtd&quot;&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=ISO-8859-1&quot;&gt;
&lt;title&gt;Insert title here&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;%
 
            String sn=request.getParameter(&quot;ver&quot;);
 
                    Class.forName(&quot;oracle.jdbc.driver.OracleDriver&quot;);
                    Connection con =DriverManager.getConnection(&quot;jdbc:oracle:thin:@localhost:1521:xe&quot;,&quot;system&quot;,&quot;inception&quot;);
                    Statement st=con.createStatement();
                    //ResultSet rs = st.executeQuery(&quot;select * from emp where empno=&quot;+sn);
                    ResultSet rs = st.executeQuery(&quot;select * from student where sname=&#39;&quot;+sn+&quot;&#39;&quot;);  // this is for name
                    if(rs.next())
                    {    
                        out.println(&quot;&lt;font color=red&gt;&quot;);
                        out.println(&quot;Name already taken&quot;);
                        out.println(&quot;&lt;/font&gt;&quot;);
 
                    }else {
 
                        out.println(&quot;&lt;font color=green&gt;&quot;);
                        out.println(&quot;Available&quot;);
                        out.println(&quot;&lt;/font&gt;&quot;);
 
                    }
 
rs.close();
st.close();
con.close();
 
%&gt;
&lt;/body&gt;
&lt;/html&gt;
            </pre>
