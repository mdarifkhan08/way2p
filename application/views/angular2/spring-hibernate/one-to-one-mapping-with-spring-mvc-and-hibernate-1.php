			<h3>schema.sql</h3>
			<pre class="prettyprint">
create table employee(
emp_id int(10) not null auto_increment,
first_name varchar(40) not null,
last_name varchar(40) not null,
cell_phone varchar(15) not null,
primary key(emp_id)
)AUTO_INCREMENT=1;


create table employeeaddress(
emp_id int(10) not null auto_increment,
street varchar(40) null default null,
city varchar(40) null default null,
state varchar(40) null default null,
country varchar(40) null default null,
primary key(emp_id),
constraint fk_emp foreign key (emp_id) references employee(emp_id)
)AUTO_INCREMENT=1;	     
            </pre>

			
			
			
			<h3>PageOrFormController.java</h3>
			<pre class="prettyprint">
package com.itm.controller;

import java.util.List;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.springframework.stereotype.Controller;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;
import com.itm.model.Employee;
import com.itm.model.EmployeeAddress;
import com.itm.utils.HibernateUtils;

@Controller
public class PageOrFormController {
	
	@RequestMapping(value="signUp",method=RequestMethod.GET)
	public String showJsp(){
		return "signUp";
	}
	@RequestMapping(value = "process", method = RequestMethod.POST)
	public ModelAndView processSignUp(
			 @ModelAttribute("employee") Employee employee,
			BindingResult result,
			 @ModelAttribute("employeeAddress") EmployeeAddress employeeAddress,
			BindingResult result1) {
		SessionFactory sf = HibernateUtils.getInstance();
		Session session = sf.openSession();
		session.beginTransaction();
		employee.setEmployeeAddress(employeeAddress);
		employeeAddress.setEmployee(employee);
		session.save(employee);
		session.getTransaction().commit();
		List&lt;Employee> employees = session.createQuery("from Employee").list();
		ModelAndView m = new ModelAndView("signUpSuccess");
		m.addObject("ok",employees);
		return m;
	}
}
            </pre>

			
			
			<h3>Employee.java</h3>
			<pre class="prettyprint">
package com.itm.model;

import java.sql.Date;

import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.OneToOne;
import javax.persistence.Table;

@Entity
@Table(name="employee")
public class Employee {
	@Id
	@GeneratedValue
	@Column(name="emp_id")
	private int emp_id;
	
	@Column(name="first_name")
	private String first_name;
	
	@Column(name="last_name")
	private String last_name;
	
	
	@Column(name="cell_phone")
	private String cell_phone;
	
	@OneToOne(mappedBy="employee",cascade=CascadeType.ALL)
	private EmployeeAddress employeeAddress;
	public int getEmp_id() {
		return emp_id;
	}
	public void setEmp_id(int emp_id) {
		this.emp_id = emp_id;
	}
	public String getFirst_name() {
		return first_name;
	}
	public void setFirst_name(String first_name) {
		this.first_name = first_name;
	}
	public String getLast_name() {
		return last_name;
	}
	public void setLast_name(String last_name) {
		this.last_name = last_name;
	}
	
	public String getCell_phone() {
		return cell_phone;
	}
	public void setCell_phone(String cell_phone) {
		this.cell_phone = cell_phone;
	}
	public EmployeeAddress getEmployeeAddress() {
		return employeeAddress;
	}
	public void setEmployeeAddress(EmployeeAddress employeeAddress) {
		this.employeeAddress = employeeAddress;
	}
}	
            </pre>

			
			
			
			<h3>EmployeeAddress.java</h3>
			<pre class="prettyprint">
package com.itm.model;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.OneToOne;
import javax.persistence.PrimaryKeyJoinColumn;
import javax.persistence.Table;

import org.hibernate.annotations.GenericGenerator;
import org.hibernate.annotations.Parameter;

@Entity
@Table(name = "employeeaddress")
public class EmployeeAddress {
	@Id
	@Column(name = "emp_id")
	@GeneratedValue(generator = "myGen")
	@GenericGenerator(name = "myGen", strategy = "foreign", parameters = @Parameter(name = "property", value = "employee"))
	private int emp_id;

	@Column(name = "street")
	private String street;

	@Column(name = "city")
	private String city;

	@Column(name = "state")
	private String state;

	@Column(name = "country")
	private String country;
	@OneToOne
	@PrimaryKeyJoinColumn
	private Employee employee;

	public Employee getEmployee() {
		return employee;
	}

	public void setEmployee(Employee employee) {
		this.employee = employee;
	}

	public int getEmp_id() {
		return emp_id;
	}

	public void setEmp_id(int emp_id) {
		this.emp_id = emp_id;
	}

	public String getStreet() {
		return street;
	}

	public void setStreet(String street) {
		this.street = street;
	}

	public String getCity() {
		return city;
	}

	public void setCity(String city) {
		this.city = city;
	}

	public String getState() {
		return state;
	}

	public void setState(String state) {
		this.state = state;
	}

	public String getCountry() {
		return country;
	}

	public void setCountry(String country) {
		this.country = country;
	}
}
			</pre>

			
			
			<h3>HibernateUtils.java</h3>
			<pre class="prettyprint">
package com.itm.utils;

import org.hibernate.SessionFactory;
import org.hibernate.cfg.AnnotationConfiguration;

public class HibernateUtils {

	private static class LazyHolder {
		private static final SessionFactory sessionFactory = buildSessionFactory();

		private static SessionFactory buildSessionFactory() {
			try {

				return new AnnotationConfiguration().configure()
						.buildSessionFactory();
			} catch (Throwable ex) {
				System.err.println("Initial SessionFactory creation failed."
						+ ex);
				throw new ExceptionInInitializerError(ex);
			}
		}

	}

	public static SessionFactory getInstance() {
		return LazyHolder.sessionFactory;
	}

}
			</pre>


			
			
			<h3>hibernate.cfg.xml</h3>
			<pre class="prettyprint">
&lt;?xml version='1.0' encoding='utf-8'?>
&lt;!DOCTYPE hibernate-configuration PUBLIC
        "-//Hibernate/Hibernate Configuration DTD 3.0//EN"
        "http://hibernate.sourceforge.net/hibernate-configuration-3.0.dtd">
 
&lt;hibernate-configuration>
    &lt;session-factory>
        <!-- Database connection settings -->
        &lt;property name="connection.driver_class">com.mysql.jdbc.Driver&lt;/property>
       &lt;property name="connection.url">jdbc:mysql://localhost:3306/yashi&lt;/property>
        &lt;property name="connection.username">root&lt;/property>
        &lt;property name="connection.password">inception&lt;/property>
        
        &lt;property name="connection.pool_size">1&lt;/property>
        &lt;property name="dialect">org.hibernate.dialect.MySQLDialect&lt;/property>
        &lt;property name="current_session_context_class">thread&lt;/property>
        &lt;property name="cache.provider_class">org.hibernate.cache.NoCacheProvider&lt;/property>
        &lt;property name="show_sql">true&lt;/property>
        &lt;property name="hbm2ddl.auto">validate&lt;/property>
 
 		&lt;mapping class="com.itm.model.EmployeeAddress" />
 		&lt;mapping class="com.itm.model.Employee" />
 		 
    &lt;/session-factory>
&lt;/hibernate-configuration>	
             </pre>




			<h3></h3>
			<pre class="prettyprint">
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;beans xmlns="http://www.springframework.org/schema/beans"
				xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
				xmlns:tx="http://www.springframework.org/schema/tx"
				xsi:schemaLocation="http://www.springframework.org/schema/beans 
				http://www.springframework.org/schema/beans/spring-beans-3.2.xsd
		http://www.springframework.org/schema/tx http://www.springframework.org/schema/tx/spring-tx-4.0.xsd">

	&lt;bean id="dataSource" class="org.apache.commons.dbcp.BasicDataSource"
				destroy-method="close">
		&lt;property name="driverClassName" value="com.mysql.jdbc.Driver" />
		&lt;property name="url" value="jdbc:mysql://localhost:3306/yashi" />
		&lt;property name="username" value="root" />
		&lt;property name="password" value="inception" />
	&lt;/bean>

	&lt;bean id="hibernate3AnnotatedSessionFactory"
				class="org.springframework.orm.hibernate3.annotation.AnnotationSessionFactoryBean">
		&lt;property name="dataSource" ref="dataSource" />
		&lt;property name="annotatedClasses">
			&lt;list>
				&lt;value>com.itm.model.Employee&lt;/value>
				&lt;value>com.itm.model.EmployeeAddress&lt;/value>
			&lt;/list>
		&lt;/property>

	&lt;/bean>
	&lt;bean id="hibernateTemplate"
				class="org.springframework.orm.hibernate3.HibernateTemplate">
		&lt;property name="sessionFactory"
				ref="hibernate3AnnotatedSessionFactory" />
	&lt;/bean>
	&lt;bean id="transactionManager"
				class="org.springframework.orm.hibernate3.HibernateTransactionManager">
		&lt;property name="sessionFactory"
				ref="hibernate3AnnotatedSessionFactory" />
	&lt;/bean>
	&lt;bean id="ok" class="com.itm.controller.PageOrFormController">
		&lt;property name="sessionFactory"
				ref="hibernate3AnnotatedSessionFactory" />
	&lt;/bean>

&lt;/beans>		
            </pre>




            <h3></h3>
			<pre class="prettyprint">
&lt;html>
&lt;head>
&lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
&lt;title>Register Page&lt;/title>
&lt;style type="text/css">
.errorBlock {
	color: #FF0000;
}
&lt;/style>

&lt;/head>
&lt;body>
&lt;h1 align="center">Registration Page&lt;/h1>
&lt;form action="/One_To_One_Dasu_Example/process" method="post"
		name="form2">
&lt;table align="center">
&lt;tr>
&lt;td>&lt;label name="first_name">first_name&lt;/label>&lt;/td>
&lt;td>&lt;input type="text" name="first_name">&lt;/td>
&lt;/tr>
&lt;tr>
&lt;td>&lt;label name="last_name">last_name&lt;/label>&lt;/td>
&lt;td>&lt;input type="text" name="last_name">&lt;/td>
&lt;/tr>
&lt;tr>
&lt;td>&lt;label name="cell_phone">cell_phone&lt;/label>&lt;/td>
&lt;td>&lt;input type="text" name="cell_phone">&lt;/td>
&lt;/tr>
&lt;tr>
&lt;td>&lt;label name="street">street&lt;/label>&lt;/td>
&lt;td>&lt;input type="text" name="street">&lt;/td>
&lt;/tr>
&lt;tr>
&lt;td>&lt;label name="city">city&lt;/label>&lt;/td>
&lt;td>&lt;input type="text" name="city">&lt;/td>
&lt;/tr>
&lt;tr>
&lt;td>&lt;label name="state">state&lt;/label>&lt;/td>
&lt;td>&lt;input type="text" name="state">&lt;/td>
&lt;/tr>
&lt;tr>
&lt;td>&lt;label name="country">country&lt;/label>&lt;/td>
&lt;td>&lt;input type="text" name="country">&lt;/td>
&lt;/tr>
&lt;tr>
&lt;td>&lt;input type="submit" name="submit">&lt;/td>
&lt;td>&lt;input type="reset" name="reset">&lt;/td>
&lt;/tr>

&lt;/table>
&lt;/form>
&lt;/body>
&lt;/html>		
            </pre>

            <h3></h3>
			<pre class="prettyprint">
&lt;html>
&lt;head>
&lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
&lt;title>retreive&lt;/title>
&lt;/head>
&lt;body>
	
&lt;p>Data inserted successfully.data available in database are	&lt;/p>
	
	
	&lt;br>
	&lt;table align="center" border="groove">
	&lt;tr>
			&lt;th
				style="border-right: 1px solid black; border-bottom: 1px solid black;">Id&lt;/th>
			&lt;th
				style="border-right: 1px solid black; border-bottom: 1px solid black;">First Name&lt;/th>
			&lt;th style="border-bottom: 1px solid black;">Last name&lt;/th>
			&lt;th style="border-bottom: 1px solid black;">cell number&lt;/th>
		&lt;/tr>
	&lt;c:forEach items="${ok}" var="i">
	
			&lt;tr>
				&lt;td
					style="border-right: 1px solid black; border-bottom: 1px solid black;">
					&lt;c:out value="${i.emp_id}" />
				&lt;/td>
				
				
				&lt;td
					style="border-right: 1px solid black; border-bottom: 1px solid black;">
					&lt;c:out value="${i.first_name}" />
				&lt;/td>
				
				&lt;td
					style="border-right: 1px solid black; border-bottom: 1px solid black;">
					&lt;c:out value="${i.last_name}" />
				&lt;/td>
				&lt;td
					style="border-right: 1px solid black; border-bottom: 1px solid black;">
					&lt;c:out value="${i.cell_phone}" />
				&lt;/td>
				
				
			&lt;/tr>
		&lt;/c:forEach>
		
	&lt;/table>
&lt;/body>
&lt;/html>				
            </pre>

            <h3>web.xml</h3>
			<pre class="prettyprint">
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;web-app xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
				xmlns="http://xmlns.jcp.org/xml/ns/javaee"
				xsi:schemaLocation="http://xmlns.jcp.org/xml/ns/javaee 
				http://xmlns.jcp.org/xml/ns/javaee/web-app_3_1.xsd"
				id="WebApp_ID" version="3.1">
  &lt;display-name>Archetype Created Web Application&lt;/display-name>
  &lt;servlet>
		&lt;servlet-name>springDispatcherServlet&lt;/servlet-name>
		&lt;servlet-class>org.springframework.web.servlet.DispatcherServlet&lt;/servlet-class>
	&lt;init-param>
			&lt;param-name>contextConfigLocation&lt;/param-name>
			&lt;param-value>/WEB-INF/config/servlet-config.xml&lt;/param-value>
		&lt;/init-param>
		&lt;load-on-startup>1&lt;/load-on-startup>
	&lt;/servlet>

	&lt;!-- Map all requests to the DispatcherServlet for handling -->
	&lt;servlet-mapping>
		&lt;servlet-name>springDispatcherServlet&lt;/servlet-name>
		&lt;url-pattern>/&lt;/url-pattern>
	&lt;/servlet-mapping>

	&lt;welcome-file-list>
		&lt;welcome-file>index.jsp&lt;/welcome-file>
	&lt;/welcome-file-list>
&lt;/web-app>		
            </pre>

            <h3>output</h3>
			<pre class="prettyprint">
		<img src="<?php echo base_url();?>static/images/oto1.jpg" />
		<img src="<?php echo base_url();?>static/images/oto4.jpg" /><br> <br>
						<img src="<?php echo base_url();?>static/images/oto3.jpg" /><br> <br>
						<img src="<?php echo base_url();?>static/images/oto2.jpg" /><br> <br>
						<img src="<?php echo base_url();?>static/images/oto5.jpg" />
            </pre>