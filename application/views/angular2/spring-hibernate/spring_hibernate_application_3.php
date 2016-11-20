<div class="alert alert-info">It is not industry level app but it is having some wrong and correct concept that  will use to make industry level apps.</div>            <h3>pom.xml</h3>
			<pre class="prettyprint">
    &lt;project xmlns=&quot;http://maven.apache.org/POM/4.0.0&quot; xmlns:xsi=&quot;http://www.w3.org/2001/XMLSchema-instance&quot;
  xsi:schemaLocation=&quot;http://maven.apache.org/POM/4.0.0 http://maven.apache.org/maven-v4_0_0.xsd&quot;&gt;
  &lt;modelVersion&gt;4.0.0&lt;/modelVersion&gt;
  &lt;groupId&gt;com.itm&lt;/groupId&gt;
  &lt;artifactId&gt;Spring_Hibernate_jjj_new&lt;/artifactId&gt;
  &lt;packaging&gt;war&lt;/packaging&gt;
  &lt;version&gt;0.0.1-SNAPSHOT&lt;/version&gt;
  &lt;name&gt;Spring_Hibernate_jjj_new Maven Webapp&lt;/name&gt;
  &lt;url&gt;http://maven.apache.org&lt;/url&gt;
  &lt;properties&gt;
 
        &lt;!-- Generic properties --&gt;
        &lt;java.version&gt;1.6&lt;/java.version&gt;
        &lt;project.build.sourceEncoding&gt;UTF-8&lt;/project.build.sourceEncoding&gt;
        &lt;project.reporting.outputEncoding&gt;UTF-8&lt;/project.reporting.outputEncoding&gt;
 
        &lt;!-- Spring --&gt;
        &lt;spring-framework.version&gt;4.0.3.RELEASE&lt;/spring-framework.version&gt;
 
        &lt;!-- Hibernate / JPA --&gt;
        &lt;!-- &lt;hibernate.version&gt;4.3.5.Final&lt;/hibernate.version&gt; --&gt;
        &lt;hibernate.version&gt;3.6.9.Final&lt;/hibernate.version&gt;
 
        &lt;!-- Logging --&gt;
        &lt;logback.version&gt;1.0.13&lt;/logback.version&gt;
        &lt;slf4j.version&gt;1.7.5&lt;/slf4j.version&gt;
 
    &lt;/properties&gt;
  &lt;dependencies&gt;
    &lt;dependency&gt;
      &lt;groupId&gt;junit&lt;/groupId&gt;
      &lt;artifactId&gt;junit&lt;/artifactId&gt;
      &lt;version&gt;3.8.1&lt;/version&gt;
      &lt;scope&gt;test&lt;/scope&gt;
    &lt;/dependency&gt;
    &lt;!-- Spring and Transactions --&gt;
        &lt;dependency&gt;
            &lt;groupId&gt;org.springframework&lt;/groupId&gt;
            &lt;artifactId&gt;spring-context&lt;/artifactId&gt;
            &lt;version&gt;${spring-framework.version}&lt;/version&gt;
        &lt;/dependency&gt;
        &lt;dependency&gt;
            &lt;groupId&gt;org.springframework&lt;/groupId&gt;
            &lt;artifactId&gt;spring-tx&lt;/artifactId&gt;
            &lt;version&gt;${spring-framework.version}&lt;/version&gt;
        &lt;/dependency&gt;
 
        &lt;!-- Spring ORM support --&gt;
        &lt;dependency&gt;
            &lt;groupId&gt;org.springframework&lt;/groupId&gt;
            &lt;artifactId&gt;spring-orm&lt;/artifactId&gt;
            &lt;version&gt;${spring-framework.version}&lt;/version&gt;
        &lt;/dependency&gt;
 
        &lt;!-- Logging with SLF4J &amp; LogBack --&gt;
        &lt;dependency&gt;
            &lt;groupId&gt;org.slf4j&lt;/groupId&gt;
            &lt;artifactId&gt;slf4j-api&lt;/artifactId&gt;
            &lt;version&gt;${slf4j.version}&lt;/version&gt;
            &lt;scope&gt;compile&lt;/scope&gt;
        &lt;/dependency&gt;
        &lt;dependency&gt;
            &lt;groupId&gt;ch.qos.logback&lt;/groupId&gt;
            &lt;artifactId&gt;logback-classic&lt;/artifactId&gt;
            &lt;version&gt;${logback.version}&lt;/version&gt;
            &lt;scope&gt;runtime&lt;/scope&gt;
        &lt;/dependency&gt;
 
        &lt;!-- Hibernate --&gt;
        &lt;dependency&gt;
            &lt;groupId&gt;org.hibernate&lt;/groupId&gt;
            &lt;artifactId&gt;hibernate-entitymanager&lt;/artifactId&gt;
            &lt;version&gt;${hibernate.version}&lt;/version&gt;
        &lt;/dependency&gt;
        &lt;dependency&gt;
            &lt;groupId&gt;org.hibernate&lt;/groupId&gt;
            &lt;artifactId&gt;hibernate-core&lt;/artifactId&gt;
            &lt;version&gt;${hibernate.version}&lt;/version&gt;
        &lt;/dependency&gt;
 
        &lt;dependency&gt;
            &lt;groupId&gt;mysql&lt;/groupId&gt;
            &lt;artifactId&gt;mysql-connector-java&lt;/artifactId&gt;
            &lt;version&gt;5.1.9&lt;/version&gt;
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
            &lt;groupId&gt;org.springframework&lt;/groupId&gt;
            &lt;artifactId&gt;spring-webmvc&lt;/artifactId&gt;
            &lt;version&gt;${spring-framework.version}&lt;/version&gt;
        &lt;/dependency&gt;
  &lt;/dependencies&gt;
  &lt;build&gt;
    &lt;finalName&gt;Spring_Hibernate_jjj_new&lt;/finalName&gt;
  &lt;/build&gt;
&lt;/project&gt;
            </pre>

			
			<h3>schema.sql</h3>
			<pre class="prettyprint">
		CREATE TABLE `Person` (<br>
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,<br>
  `name` varchar(20) NOT NULL DEFAULT '',<br>
  `country` varchar(20) DEFAULT NULL,<br>
  PRIMARY KEY (`id`)<br>
)<br>	    
            </pre>

			
			
			
			<h3>web.xml</h3>
			<pre class="prettyprint">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
&lt;web-app xmlns:xsi=&quot;http://www.w3.org/2001/XMLSchema-instance&quot;
	xmlns=&quot;http://xmlns.jcp.org/xml/ns/javaee&quot;
	xsi:schemaLocation=&quot;http://xmlns.jcp.org/xml/ns/javaee http://xmlns.jcp.org/xml/ns/javaee/web-app_3_1.xsd&quot;
	id=&quot;WebApp_ID&quot; version=&quot;3.1&quot;&gt;


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
	&lt;/servlet-mapping&gt;

	&lt;!-- needed for ContextLoaderListener 
	&lt;context-param&gt;
		&lt;param-name&gt;contextConfigLocation&lt;/param-name&gt;
		&lt;param-value&gt;/WEB-INF/config/security-config.xml&lt;/param-value&gt;
		
	&lt;/context-param&gt;


	&lt;listener&gt;
		&lt;listener-class&gt;org.springframework.web.context.ContextLoaderListener&lt;/listener-class&gt;
	&lt;/listener&gt;

	&lt;filter&gt;
		&lt;filter-name&gt;springSecurityFilterChain&lt;/filter-name&gt;
		&lt;filter-class&gt;org.springframework.web.filter.DelegatingFilterProxy&lt;/filter-class&gt;
	&lt;/filter&gt;

	&lt;filter-mapping&gt;
		&lt;filter-name&gt;springSecurityFilterChain&lt;/filter-name&gt;
		&lt;url-pattern&gt;/*&lt;/url-pattern&gt;
	&lt;/filter-mapping&gt;                                                   --&gt;   

	&lt;welcome-file-list&gt;   
		&lt;welcome-file&gt;index.jsp&lt;/welcome-file&gt;   
	&lt;/welcome-file-list&gt;   
&lt;/web-app&gt; 
            </pre>

			
			
			<h3>spring.xml</h3>
			<pre class="prettyprint">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
&lt;beans xmlns=&quot;http://www.springframework.org/schema/beans&quot;
	xmlns:xsi=&quot;http://www.w3.org/2001/XMLSchema-instance&quot;
	xmlns:tx=&quot;http://www.springframework.org/schema/tx&quot;
	xsi:schemaLocation=&quot;http://www.springframework.org/schema/beans http://www.springframework.org/schema/beans/spring-beans-3.2.xsd
		http://www.springframework.org/schema/tx http://www.springframework.org/schema/tx/spring-tx-4.0.xsd&quot;&gt;

 &lt;bean id=&quot;dataSource&quot; class=&quot;org.apache.commons.dbcp.BasicDataSource&quot;
        destroy-method=&quot;close&quot;&gt;
        &lt;property name=&quot;driverClassName&quot; value=&quot;com.mysql.jdbc.Driver&quot; /&gt;
        &lt;property name=&quot;url&quot; value=&quot;jdbc:mysql://localhost:3306/arif&quot; /&gt;
        &lt;property name=&quot;username&quot; value=&quot;root&quot; /&gt;
        &lt;property name=&quot;password&quot; value=&quot;inception&quot; /&gt;
    &lt;/bean&gt;
 
&lt;!-- Hibernate 3 XML SessionFactory Bean definition--&gt;
&lt;!--     &lt;bean id=&quot;hibernate3SessionFactory&quot;
        class=&quot;org.springframework.orm.hibernate3.LocalSessionFactoryBean&quot;&gt;
        &lt;property name=&quot;dataSource&quot; ref=&quot;dataSource&quot; /&gt;
        &lt;property name=&quot;mappingResources&quot;&gt;
            &lt;list&gt;
                &lt;value&gt;person.hbm.xml&lt;/value&gt;
            &lt;/list&gt;
        &lt;/property&gt;
        &lt;property name=&quot;hibernateProperties&quot;&gt;
            &lt;value&gt;
                hibernate.dialect=org.hibernate.dialect.MySQLDialect
            &lt;/value&gt;
        &lt;/property&gt;
    &lt;/bean&gt; --&gt;
 
&lt;!-- Hibernate 3 Annotation SessionFactory Bean definition--&gt;
    &lt;bean id=&quot;hibernate3AnnotatedSessionFactory&quot;
        class=&quot;org.springframework.orm.hibernate3.annotation.AnnotationSessionFactoryBean&quot;&gt;
        &lt;property name=&quot;dataSource&quot; ref=&quot;dataSource&quot; /&gt;
        &lt;property name=&quot;annotatedClasses&quot;&gt;
            &lt;list&gt;
                &lt;value&gt;com.itm.model.Person&lt;/value&gt;
            &lt;/list&gt;
        &lt;/property&gt;
        &lt;property name=&quot;hibernateProperties&quot;&gt;
            &lt;props&gt;
                &lt;prop key=&quot;hibernate.dialect&quot;&gt;org.hibernate.dialect.MySQLDialect&lt;/prop&gt;
                &lt;prop key=&quot;hibernate.current_session_context_class&quot;&gt;thread&lt;/prop&gt;
                &lt;prop key=&quot;hibernate.show_sql&quot;&gt;false&lt;/prop&gt;
            &lt;/props&gt;
        &lt;/property&gt;
    &lt;/bean&gt;
     
    &lt;bean id=&quot;personDAO&quot; class=&quot;com.itm.dao.PersonDAOImpl&quot;&gt;
        &lt;property name=&quot;sessionFactory&quot; ref=&quot;hibernate3AnnotatedSessionFactory&quot; /&gt;
    &lt;/bean&gt;
&lt;/beans&gt;	
            </pre>

			
			
			
			<h3>servlet-config.xml</h3>
			<pre class="prettyprint">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
&lt;beans xmlns=&quot;http://www.springframework.org/schema/beans&quot;
	xmlns:xsi=&quot;http://www.w3.org/2001/XMLSchema-instance&quot;
	xmlns:context=&quot;http://www.springframework.org/schema/context&quot;
	xmlns:mvc=&quot;http://www.springframework.org/schema/mvc&quot;
	xsi:schemaLocation=&quot;http://www.springframework.org/schema/beans http://www.springframework.org/schema/beans/spring-beans-3.2.xsd
		http://www.springframework.org/schema/context http://www.springframework.org/schema/context/spring-context-4.0.xsd
		http://www.springframework.org/schema/mvc http://www.springframework.org/schema/mvc/spring-mvc-4.0.xsd&quot;&gt;

&lt;mvc:annotation-driven/&gt;
&lt;context:component-scan base-package=&quot;com.itm.controller&quot;/&gt;
&lt;bean id=&quot;viewResolver&quot; class=&quot;org.springframework.web.servlet.view.InternalResourceViewResolver&quot;&gt;
&lt;property name=&quot;prefix&quot; value=&quot;/WEB-INF/jsp/&quot;/&gt;
&lt;property name=&quot;suffix&quot; value=&quot;.jsp&quot;/&gt;
&lt;/bean&gt;
&lt;/beans&gt;	
			</pre>

			
			
			<h3>MyController.java</h3>
			<pre class="prettyprint">
package com.itm.controller;

import java.util.List;

import org.springframework.context.support.ClassPathXmlApplicationContext;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;

import com.itm.dao.PersonDAO;
import com.itm.model.Person;

@Controller
public class MyController {

	@RequestMapping(value = "signUp", method = RequestMethod.GET)
	public String showSignUp(ModelMap model) {
		return "signUp";
	}

	@RequestMapping(value = "process", method = RequestMethod.POST)
	public ModelAndView processLogin(@ModelAttribute("p") Person p) {

		ClassPathXmlApplicationContext context = new ClassPathXmlApplicationContext(
				"spring.xml");

		PersonDAO personDAO = context.getBean(PersonDAO.class);
		personDAO.save(p);
		List&lt;Person> list = personDAO.list();

		ModelAndView m = new ModelAndView("signUpSuccess");
		m.addObject("ok", list);
		context.close();
		return m;
	}
}	
			</pre>


			
			
			<h3>PersonDAO.java</h3>
			<pre class="prettyprint">
package com.itm.dao;

import java.util.List;

import com.itm.model.Person;

public interface PersonDAO {
	public void save(Person p);

	public List&lt;Person> list();
}
             </pre>




			<h3>PersonDAOImpl.java</h3>
			<pre class="prettyprint">
package com.itm.dao;

import java.util.List;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;

import com.itm.model.Person;

	public class PersonDAOImpl implements PersonDAO {
		 
	    private SessionFactory sessionFactory;
	 
	    public void setSessionFactory(SessionFactory sessionFactory) {
	        this.sessionFactory = sessionFactory;
	    }

		public void save(Person p) {
		    Session session = this.sessionFactory.openSession();
	        Transaction tx = session.beginTransaction();
	        session.persist(p);
	        tx.commit();
	        session.close();
		}

		public List&lt;Person> list() {
			  Session session = this.sessionFactory.openSession();
		        List&lt;Person> personList = session.createQuery("from Person").list();
		        session.close();
		        return personList;
		}
}
            </pre>



			<h3>Person.java</h3>
			<pre class="prettyprint">
package com.itm.model;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;


	@Entity
	@Table(name="Person")
	public class Person {
	 
	    @Id
	    @Column(name="id")
	    @GeneratedValue(strategy=GenerationType.IDENTITY)
	    private int id;
	     
	    private String name;
	     
	    private String country;
	 
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
	 
	    public String getCountry() {
	        return country;
	    }
	 
	    public void setCountry(String country) {
	        this.country = country;
	    }
	     
	    @Override
	    public String toString(){
	        return "id="+id+", name="+name+", country="+country;
	    }

}
            </pre>




			<h3>signUp.jsp</h3>
			<pre class="prettyprint">
&lt;%@ page language=&quot;java&quot; contentType=&quot;text/html; charset=ISO-8859-1&quot;
    pageEncoding=&quot;ISO-8859-1&quot;%&gt;
&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD HTML 4.01 Transitional//EN&quot; &quot;http://www.w3.org/TR/html4/loose.dtd&quot;&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=ISO-8859-1&quot;&gt;
&lt;title&gt;Register Page&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1 align=&quot;center&quot;&gt;Registration Page&lt;/h1&gt;

&lt;form action=&quot;/Spring_Hibernate_jjj_new_Sc/process&quot;  method=&quot;post&quot; name=&quot;form2&quot;&gt;
&lt;table align=&quot;center&quot;&gt;
&lt;tr&gt;&lt;td&gt;&lt;label name=&quot;name&quot;&gt;name&lt;/label&gt;&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;name&quot;&gt;&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;&lt;label name=&quot;country&quot;&gt;country&lt;/label&gt;&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;country&quot;&gt;&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;&lt;input type=&quot;submit&quot; name=&quot;submit&quot;&gt;&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;reset&quot; name=&quot;reset&quot;&gt;&lt;/td&gt;&lt;/tr&gt;
&lt;/table&gt;
&lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;
            </pre>




			<h3>signUpSuccess.jsp</h3>
			<pre class="prettyprint">
&lt;%@ page language=&quot;java&quot; contentType=&quot;text/html; charset=ISO-8859-1&quot;
	pageEncoding=&quot;ISO-8859-1&quot;%&gt;
&lt;%@ taglib prefix=&quot;c&quot; uri=&quot;http://java.sun.com/jsp/jstl/core&quot;%&gt;
&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD HTML 4.01 Transitional//EN&quot; &quot;http://www.w3.org/TR/html4/loose.dtd&quot;&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=ISO-8859-1&quot;&gt;
&lt;title&gt;Retreving Data From MySql&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
	&lt;p align=&quot;center&quot;&gt;Last One Is Your Information&lt;/p&gt;
	&lt;table align=&quot;center&quot; style=&quot;border-style: solid; border-width: 1px;&quot;&gt;
		&lt;tr&gt;
			&lt;th
				style=&quot;border-right: 1px solid black; border-bottom: 1px solid black;&quot;&gt;Id&lt;/th&gt;
			&lt;th
				style=&quot;border-right: 1px solid black; border-bottom: 1px solid black;&quot;&gt;Name&lt;/th&gt;
			&lt;th style=&quot;border-bottom: 1px solid black;&quot;&gt;Country&lt;/th&gt;
		&lt;/tr&gt;
		&lt;c:forEach items=&quot;&#36;{ok}&quot; var=&quot;i&quot;&gt;
			&lt;tr&gt;
				&lt;td
					style=&quot;border-right: 1px solid black; border-bottom: 1px solid black;&quot;&gt;
					&lt;c:out value=&quot;&#36;{i.id}&quot; /&gt;
				&lt;/td&gt;
				&lt;td
					style=&quot;border-right: 1px solid black; border-bottom: 1px solid black;&quot;&gt;
					&lt;c:out value=&quot;&#36;{i.name}&quot; /&gt;
				&lt;/td&gt;
				&lt;td style=&quot;border-bottom: 1px solid black;&quot;&gt;&lt;c:out
						value=&quot;&#36;{i.country}&quot; /&gt;&lt;/td&gt;
			&lt;/tr&gt;
		&lt;/c:forEach&gt;
	&lt;/table&gt;
&lt;/body&gt;
&lt;/html&gt;
            </pre>





			<h3>index.jsp</h3>
			<pre class="prettyprint">
&lt;html&gt;   
&lt;body&gt;   
&lt;br/&gt;   
&lt;br/&gt;   
&lt;br/&gt;   
&lt;p align=&quot;center&quot;&gt;&lt;a href=&quot;signUp&quot;&gt;Sign Up&lt;/a&gt;&lt;/p&gt;   
&lt;br/&gt;   
&lt;/body&gt;   
&lt;/html&gt;
            </pre>
