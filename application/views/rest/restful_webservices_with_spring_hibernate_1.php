<div class="alert alert-success">
		1.This web application used Spring-Hibernate and JaxRs.<br/>
		2.In this app Spring-Hibernate is used for basic CURD operation and.<br/>
		3.JAX RS is used for restful web service and it used only GET method.<br/>
		4.I think this is not a industry level application but i rarely found on the internet restful web service with database by using hibernate.<br/>
		5.I think this will give you a little bit idea of rest.<br/>
</div>

	<h3><u>project structure</u></h3>
<br/>
	<img src="<?php echo base_url();?>static/images/ice_screenshot_20151113-182913.png" class="img-responsive"><br/>
	<img src="<?php echo base_url();?>static/images/ice_screenshot_20151113-185214.png" class="img-responsive">

<br/><br/>




<h3>EmployeeController.java</h3>
<pre class="prettyprint">

package com.aags.controller;

import java.util.List;

import org.springframework.context.ApplicationContext;
import org.springframework.context.support.ClassPathXmlApplicationContext;
import org.springframework.stereotype.Controller;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;

import com.aags.dao.EmployeeDAOImpl;
import com.aags.dto.Employee;

@Controller
public class EmployeeController &#123;
	
	@RequestMapping(value="insertEmployee",method=RequestMethod.GET)
	public ModelAndView getHomePage()&#123;
		ModelAndView mav=new ModelAndView("insert-employee");
		return mav;
	}
	
	@RequestMapping(value = "processEmployeeForm", method = RequestMethod.POST)
	public ModelAndView processForm(@ModelAttribute Employee emp,
			BindingResult result) &#123;

		ApplicationContext app = new ClassPathXmlApplicationContext(
				"classpath:application-context.xml");
		EmployeeDAOImpl employeeDAO = app.getBean(EmployeeDAOImpl.class);
		employeeDAO.addEmp(emp);

		ModelAndView model = new ModelAndView("insert-employee");
		model.addObject("inserted", "Employee Inserted Successully!");
		return model;
	}
	
	@RequestMapping(value="updateEmployee",method=RequestMethod.GET)
	public ModelAndView getUpdateWEmp()&#123;
		ModelAndView mav=new ModelAndView("update-employee");
		return mav;
	}
	
	@RequestMapping(value = "processEmployeeUpdatationForm", method = RequestMethod.POST)
	public ModelAndView processEmployeeUpdateForm(
			@ModelAttribute Employee emp, BindingResult result) &#123;

		ApplicationContext app = new ClassPathXmlApplicationContext(
				"classpath:application-context.xml");
		EmployeeDAOImpl employeeDAOImpl = app.getBean(EmployeeDAOImpl.class);
		employeeDAOImpl.updateEmp(emp);
		ModelAndView model = new ModelAndView("update-employee");
		model.addObject("inserted", "Employee Updated Successully!");
		return model;
	}
	
	@RequestMapping(value="deleteEmployee",method=RequestMethod.GET)
	public ModelAndView getDeleteEmp()&#123;
		ModelAndView mav=new ModelAndView("delete-employee");
		return mav;
	}
	
	@RequestMapping(value="getEmployee",method=RequestMethod.GET)
	public ModelAndView getEmp()&#123;
		ModelAndView mav=new ModelAndView("get-employee");
		return mav;
	}
	
	@RequestMapping(value="getAllEmployee",method=RequestMethod.GET)
	public ModelAndView getAllEmployee()&#123;
		ModelAndView mav=new ModelAndView("getAll-employee");
		return mav;
	}
	
	
	@RequestMapping(value="restfulAjaxClient",method=RequestMethod.GET)
	public ModelAndView restfulAjaxClient()&#123;
		ModelAndView mav=new ModelAndView("restful-angularjs-client");
		return mav;
	}
	
	@RequestMapping(value = "deleteEmployeeUpdateForm", method = RequestMethod.POST)
	public ModelAndView deleteEmployeeUpdateForm(
			@ModelAttribute Employee emp, BindingResult result) &#123;

		ApplicationContext app = new ClassPathXmlApplicationContext(
				"classpath:application-context.xml");
		EmployeeDAOImpl employeeDAOImpl = app.getBean(EmployeeDAOImpl.class);
		employeeDAOImpl.deleteEmp(emp);
		ModelAndView model = new ModelAndView("delete-employee");
		model.addObject("empBean", "Employee Deleted Successfully!");
		return model;
	}
	
	
	
	@RequestMapping(value = "selectEmpById", method = RequestMethod.POST)
	public ModelAndView selectEmpById(@ModelAttribute Employee emp,
			BindingResult result) &#123;
		ApplicationContext app = new ClassPathXmlApplicationContext(
				"classpath:application-context.xml");
		EmployeeDAOImpl employeeDAOImpl = app.getBean(EmployeeDAOImpl.class);
		Employee empBean = employeeDAOImpl.getEmp(emp.getEmp_id());
		ModelAndView model = new ModelAndView("get-employee");
		model.addObject("empBean", empBean);
		return model;
	}
	
	
	@RequestMapping(value = "selectAllEmp", method = RequestMethod.GET)
	public ModelAndView selectAllEmp(@ModelAttribute Employee emp,
			BindingResult result) &#123;

		ApplicationContext app = new ClassPathXmlApplicationContext(
				"classpath:application-context.xml");
		EmployeeDAOImpl employeeDAOImpl = app.getBean(EmployeeDAOImpl.class);
		List&lt;Employee> e = employeeDAOImpl.getAll();
		ModelAndView model = new ModelAndView("getAll-employee");
		model.addObject("empBean", e);
		return model;
	}

	

}



</pre>






<h3>EmployeeDAO.java</h3>
<pre class="prettyprint">
package com.aags.dao;

import java.util.List;

import com.aags.dto.Employee;

public interface EmployeeDAO &#123;
	public void addEmp(Employee employee);
	public void updateEmp(Employee employee);
	public Employee getEmp(int id);
	public void deleteEmp(Employee emp);
	public List&lt;Employee> getAll();
}

</pre>





<h3>EmployeeDAOImpl.java</h3>
<pre class="prettyprint">

package com.aags.dao;

import java.util.List;

import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;

import com.aags.dto.Employee;

public class EmployeeDAOImpl &#123;
	private SessionFactory sessionFactory;

	public SessionFactory getSessionFactory() &#123;
		return sessionFactory;
	}

	public void setSessionFactory(SessionFactory sessionFactory) &#123;
		this.sessionFactory = sessionFactory;
	}
	
	private Session session;

	public void addEmp(Employee employee) &#123;
		session = this.sessionFactory.openSession();
		Transaction tx = session.beginTransaction();
		session.persist(employee);
		tx.commit();
		session.close();
	}
	
	public void updateEmp(Employee employee)&#123;
		session = this.sessionFactory.openSession();
	    String hql="update Employee set emp_name=:emp_name,emp_designation=:emp_designation,emp_dept=:emp_dept where emp_id=:emp_id";
	    Query query=session.createQuery(hql);
	    query.setParameter("emp_name", employee.getEmp_name());
	    query.setParameter("emp_designation", employee.getEmp_designation());
	    query.setParameter("emp_dept", employee.getEmp_dept());
	    query.setParameter("emp_id", employee.getEmp_id());
	    int result = query.executeUpdate();
	    System.out.println("Rows affected: " + result);
	}
	
	public Employee getEmp(int id)&#123;
		session = this.sessionFactory.openSession();
		Employee employee=(Employee)session.get(Employee.class,id);
		return employee;
	}
	
	
	public List&lt;Employee> getAll()&#123;
		session = this.sessionFactory.openSession();
		String hql = "FROM Employee AS employee";
		Query query = session.createQuery(hql);
		List results = query.list();
	    List&lt;Employee> emp=(List&lt;Employee>)results;
	    return emp;
	}
	
	public void deleteEmp(Employee emp) &#123;
		session  = this.sessionFactory.openSession();
		      
		String hql = "DELETE FROM Employee WHERE emp_id = :employee_id";
		   
		Query query = session.createQuery(hql);
		query.setParameter("employee_id", emp.getEmp_id());
		int result = query.executeUpdate();
		System.out.println("Rows affected: " + result);
	 }
}



</pre>






<h3>Employee</h3>
<pre class="prettyprint">
package com.aags.dto;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name="employee")
public class Employee &#123;
	@Id
	@GeneratedValue
	@Column(name="emp_id")
	private int emp_id;
	@Column(name="emp_name")
	private String emp_name;
	@Column(name="emp_designation")
	private String emp_designation;
	@Column(name="emp_dept")
	private String emp_dept;
	
	
	public Employee()&#123;
		super();
	}


	public Employee(int emp_id, String emp_name, String emp_designation,
			String emp_dept) &#123;
		super();
		this.emp_id = emp_id;
		this.emp_name = emp_name;
		this.emp_designation = emp_designation;
		this.emp_dept = emp_dept;
	}


	public int getEmp_id() &#123;
		return emp_id;
	}


	public void setEmp_id(int emp_id) &#123;
		this.emp_id = emp_id;
	}


	public String getEmp_name() &#123;
		return emp_name;
	}


	public void setEmp_name(String emp_name) &#123;
		this.emp_name = emp_name;
	}


	public String getEmp_designation() &#123;
		return emp_designation;
	}


	public void setEmp_designation(String emp_designation) &#123;
		this.emp_designation = emp_designation;
	}


	public String getEmp_dept() &#123;
		return emp_dept;
	}


	public void setEmp_dept(String emp_dept) &#123;
		this.emp_dept = emp_dept;
	}


	@Override
	public String toString() &#123;
		return "Employee [emp_id=" + emp_id + ", emp_name=" + emp_name
				+ ", emp_designation=" + emp_designation + ", emp_dept="
				+ emp_dept +"]";
	}
	
	
	
	

}

</pre>







<h3>Rest.java</h3>
<pre class="prettyprint">
package com.aags.webservice;

import java.util.List;

import javax.ws.rs.GET;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;

import org.springframework.context.ApplicationContext;
import org.springframework.context.support.ClassPathXmlApplicationContext;

import com.aags.dao.EmployeeDAOImpl;
import com.aags.dto.Employee;
import com.google.gson.Gson;

@Path("/rest")
public class Rest &#123;
	
	
	@GET
	@Path("/GetAllEmployee")
	@Produces("application/json")
	public String feed() &#123;
		String feeds = null;
		try &#123;
			List&lt;Employee> emps = null;
			Gson gson = new Gson();
			ApplicationContext app = new ClassPathXmlApplicationContext(
					"classpath:application-context.xml");	
			
			EmployeeDAOImpl employeeDAOImpl = app.getBean(EmployeeDAOImpl.class);
			 emps = employeeDAOImpl.getAll();
			
			
			feeds = gson.toJson(emps);
		}

		catch (Exception e) &#123;
			System.out.println("Exception Error"); 
		}
		return feeds;
	}

}




</pre>






<h3>application-context.xml</h3>
<pre class="prettyprint">
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;beans xmlns="http://www.springframework.org/schema/beans"
	xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation="http://www.springframework.org/schema/beans http://www.springframework.org/schema/beans/spring-beans.xsd">

	&lt;bean id="dataSource"
		class="org.springframework.jdbc.datasource.DriverManagerDataSource">
		&lt;property name="driverClassName" value="com.mysql.jdbc.Driver" />
		&lt;property name="url" value="jdbc:mysql://localhost/test" />
		&lt;property name="username" value="root" />
		&lt;property name="password" value="inception" />
	&lt;/bean>

	&lt;bean id="hibernateSessionFactory"
		class="org.springframework.orm.hibernate3.annotation.AnnotationSessionFactoryBean">
		&lt;property name="dataSource" ref="dataSource" />
		&lt;property name="annotatedClasses">
			&lt;list>
				&lt;value>com.aags.dto.Employee&lt;/value>
			&lt;/list>
		&lt;/property>
		&lt;property name="hibernateProperties">
			&lt;props>
				&lt;prop key="hibernate.dialect">org.hibernate.dialect.MySQLDialect&lt;/prop>
			&lt;/props>
		&lt;/property>
	&lt;/bean>


	&lt;bean id="hibernateTemplate" class="org.springframework.orm.hibernate3.HibernateTemplate">
		&lt;property name="sessionFactory" ref="hibernateSessionFactory" />
	&lt;/bean>

	&lt;bean id="transactionManager"
		class="org.springframework.orm.hibernate3.HibernateTransactionManager">
		&lt;property name="sessionFactory" ref="hibernateSessionFactory" />
	&lt;/bean>


	&lt;bean id="employeeDaoImpl" class="com.aags.dao.EmployeeDAOImpl">
	&lt;property name="sessionFactory" ref="hibernateSessionFactory"/>
	&lt;/bean>
	
	
&lt;/beans>
		
</pre>






<h3>schema.sql</h3>
<pre class="prettyprint">

create table employee(emp_id int not null auto_increment primary key,emp_name varchar(255) not null,emp_designation varchar(255) not null,emp_dept varchar(255) not null);


</pre>






<h3>servlet-config.xml</h3>
<pre class="prettyprint">
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;beans xmlns="http://www.springframework.org/schema/beans"
	xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:context="http://www.springframework.org/schema/context"
	xmlns:mvc="http://www.springframework.org/schema/mvc"
	xsi:schemaLocation="http://www.springframework.org/schema/beans http://www.springframework.org/schema/beans/spring-beans.xsd
		http://www.springframework.org/schema/context http://www.springframework.org/schema/context/spring-context-4.0.xsd
		http://www.springframework.org/schema/mvc http://www.springframework.org/schema/mvc/spring-mvc-4.0.xsd">
	&lt;mvc:annotation-driven />

	&lt;context:component-scan base-package="com.aags.controller" />
	&lt;bean id="viewResolver"
		class="org.springframework.web.servlet.view.InternalResourceViewResolver">
		&lt;property name="prefix" value="/WEB-INF/jsp/" />
		&lt;property name="suffix" value=".jsp">&lt;/property>
	&lt;/bean>

&lt;/beans>
</pre>






<h3>delete-employee.jsp</h3>
<pre class="prettyprint">

&lt;%@ page language="java" contentType="text/html; charset=ISO-8859-1"
   pageEncoding="ISO-8859-1"%>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
&lt;html>
&lt;head>
&lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
&lt;title>Delete Employee&lt;/title>
&lt;/head>
&lt;body>
   &lt;h1 align="center">Delete Employee&lt;/h1>

   &lt;form action="deleteEmployeeUpdateForm" method="post">
      &lt;table align="center">
         &lt;tr>
            &lt;td>&lt;label>ID&lt;/label>&lt;/td>
            &lt;td>&lt;input type="text" name="emp_id">&lt;/td>
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






<h3>getAllEmployee.jsp</h3>
<pre class="prettyprint">
&lt;%@ page language="java" contentType="text/html; charset=ISO-8859-1"
   pageEncoding="ISO-8859-1"%>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
&lt;html>
&lt;head>
&lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
&lt;title>Get All Employee&lt;/title>
&lt;link rel="stylesheet"
   href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

&lt;/head>
&lt;body>
&lt;br/>
   &lt;%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
   &lt;div class="container">
      &lt;a href="selectAllEmp" class="btn btn-success">selectAllEmp&lt;/a>&lt;br />
      &lt;br />
      &lt;table class="table table-bordered">
            &lt;thead>
               &lt;tr>
                  &lt;th>Id&lt;/th>
                  &lt;th>Name&lt;/th>
                  &lt;th>Designation&lt;/th>
                  &lt;th>Dept&lt;/th>
               &lt;/tr>
            &lt;/thead>
      &lt;c:forEach items="$&#123;empBean}" var="i">
         
            &lt;tr>
               &lt;td>&lt;c:out value="$&#123;i.emp_id}" />&lt;/td>
               &lt;td>&lt;c:out value="$&#123;i.emp_name}" />&lt;/td>
               &lt;td>&lt;c:out value="$&#123;i.emp_designation}" />&lt;/td>
               &lt;td>&lt;c:out value="$&#123;i.emp_dept}" />&lt;/td>
            &lt;/tr>
      
      &lt;/c:forEach>
         &lt;/table>
      
   &lt;/div>
&lt;/body>
&lt;/html>
</pre>






<h3>getEmployee.jsp</h3>
<pre class="prettyprint">

&lt;%@ page language="java" contentType="text/html; charset=ISO-8859-1"
   pageEncoding="ISO-8859-1"%>
&lt;%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
&lt;html>
&lt;head>
&lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
&lt;title>Get Employee&lt;/title>
&lt;/head>
&lt;body>
   &lt;h1 align="center">Get Employee&lt;/h1>

   &lt;form action="selectEmpById" method="post">
      &lt;table align="center">
         &lt;tr>
            &lt;td>&lt;label>ID&lt;/label>&lt;/td>
            &lt;td>&lt;input type="text" name="emp_id">&lt;/td>
         &lt;/tr>
         &lt;tr>
            &lt;td>&lt;input type="submit" name="submit">&lt;/td>
            &lt;td>&lt;input type="reset" name="reset">&lt;/td>
         &lt;/tr>
      &lt;/table>
   &lt;/form>
   
   
   $&#123;empBean}
&lt;/body>
&lt;/html>  


</pre>






<h3>insert-employee.jsp</h3>
<pre class="prettyprint">
&lt;%@ page language="java" contentType="text/html; charset=ISO-8859-1"
   pageEncoding="ISO-8859-1"%>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
&lt;html>
&lt;head>
&lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
&lt;title>Employee Registration&lt;/title>
&lt;/head>
&lt;body>
   &lt;h1 align="center">Employee Registration Page&lt;/h1>

   &lt;form action="processEmployeeForm" method="post" name="employeeForm">
      &lt;table align="center">
         &lt;tr>
            &lt;td>&lt;label name="name">Name&lt;/label>&lt;/td>
            &lt;td>&lt;input type="text" name="emp_name">&lt;/td>
         &lt;/tr>
         &lt;tr>
            &lt;td>&lt;label name="emp_designation">Designation&lt;/label>&lt;/td>
            &lt;td>&lt;input type="text" name="emp_designation">&lt;/td>
         &lt;/tr>
         &lt;tr>
            &lt;td>&lt;label name="emp_dept">Dept&lt;/label>&lt;/td>
            &lt;td>&lt;input type="text" name="emp_dept">&lt;/td>
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






<h3>restful-angularjs-client.jsp(restful-angularjs-client.php,restful-angularjs-client.html)</h3>
<pre class="prettyprint">

&lt;!DOCTYPE html>
&lt;html>
&lt;head>
&lt;link rel="stylesheet"
   href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
&lt;/head>
&lt;body>

&lt;br/>
   &lt;div ng-app="myapps">
      &lt;div ng-controller="productController">
         &lt;div class="container">
            &lt;table class="table table-bordered">
               &lt;tr>
                  &lt;th>Employee Id&lt;/th>
                  &lt;th>Employee Name&lt;/th>
                  &lt;th>Employee Designation&lt;/th>
                  &lt;th>Employee Department&lt;/th>
                  
               &lt;/tr>
               &lt;tr ng-repeat="emp in listEmployee">
               &lt;td>&#123;&#123;emp.emp_id}}&lt;/td>
                  &lt;td>&#123;&#123;emp.emp_name}}&lt;/td>
                  &lt;td>&#123;&#123;emp.emp_designation}}&lt;/td>
                  &lt;td>&#123;&#123;emp.emp_dept}}&lt;/td>
               &lt;/tr>
            &lt;/table>
         &lt;/div>
      &lt;/div>
   &lt;/div>


   &lt;script type="text/javascript"
      src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>
   &lt;script type="text/javascript">
      var myapp = angular.module('myapps', []);

      myapp.controller('productController', function($scope, $http) &#123;
         $http.get('http://localhost:6060/EmployeeAppWithRestfulWebservices/REST/rest/GetAllEmployee')
               .success(function(response) &#123;
                  $scope.listEmployee = response;
               });
      });
   &lt;/script>
&lt;/body>
&lt;/html>



</pre>






<h3>update-Employee.jsp</h3>
<pre class="prettyprint">
&lt;%@ page language="java" contentType="text/html; charset=ISO-8859-1"
   pageEncoding="ISO-8859-1"%>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
&lt;html>
&lt;head>
&lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
&lt;title>Employee Update Page&lt;/title>
&lt;/head>
&lt;body>
   &lt;h1 align="center">Employee Update Page&lt;/h1>

   &lt;form action="processEmployeeUpdatationForm" method="post" name="employeeForm">
      &lt;table align="center">
         &lt;tr>
            &lt;td>&lt;label name="id">id&lt;/label>&lt;/td>
            &lt;td>&lt;input type="text" name="emp_id">&lt;/td>
         &lt;/tr>
          &lt;tr>
            &lt;td>&lt;label name="name">name&lt;/label>&lt;/td>
            &lt;td>&lt;input type="text" name="emp_name">&lt;/td>
         &lt;/tr>
         &lt;tr>
            &lt;td>&lt;label name="emp_designation">Designation&lt;/label>&lt;/td>
            &lt;td>&lt;input type="text" name="emp_designation">&lt;/td>
         &lt;/tr>
         &lt;tr>
            &lt;td>&lt;label name="emp_dept">Dept&lt;/label>&lt;/td>
            &lt;td>&lt;input type="text" name="emp_dept">&lt;/td>
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






<h3>web.xml</h3>
<pre class="prettyprint">

&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;web-app xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
   xmlns="http://java.sun.com/xml/ns/javaee"
   xsi:schemaLocation="http://java.sun.com/xml/ns/javaee http://java.sun.com/xml/ns/javaee/web-app_2_5.xsd"
   id="WebApp_ID" version="2.5">
   &lt;display-name>Archetype Created Web Application&lt;/display-name>
   &lt;!-- The front controller of this Spring Web application, responsible for 
      handling all application requests -->
   &lt;servlet>
      &lt;servlet-name>springDispatcherServlet&lt;/servlet-name>
      &lt;servlet-class>org.springframework.web.servlet.DispatcherServlet&lt;/servlet-class>
      &lt;init-param>
         &lt;param-name>contextConfigLocation&lt;/param-name>
         &lt;param-value>classpath:servlet-config.xml&lt;/param-value>
      &lt;/init-param>
      &lt;load-on-startup>1&lt;/load-on-startup>
   &lt;/servlet>

   &lt;!-- Map all requests to the DispatcherServlet for handling -->
   &lt;servlet-mapping>
      &lt;servlet-name>springDispatcherServlet&lt;/servlet-name>
      &lt;url-pattern>/&lt;/url-pattern>
   &lt;/servlet-mapping>&lt;!-- needed for ContextLoaderListener -->
   
   
   
   &lt;servlet>
      &lt;servlet-name>ServletAdaptor&lt;/servlet-name>
      &lt;servlet-class>
         com.sun.jersey.server.impl.container.servlet.ServletAdaptor&lt;/servlet-class>
      &lt;load-on-startup>1&lt;/load-on-startup>
   &lt;/servlet>
   &lt;servlet-mapping>
      &lt;servlet-name>ServletAdaptor&lt;/servlet-name>
      &lt;url-pattern>/REST/*&lt;/url-pattern>
   &lt;/servlet-mapping>

&lt;/web-app> 


</pre>






<h3>pom.xml</h3>
<pre class="prettyprint">
&lt;project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
   xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 http://maven.apache.org/maven-v4_0_0.xsd">
   &lt;modelVersion>4.0.0&lt;/modelVersion>
   &lt;groupId>com.aags&lt;/groupId>
   &lt;artifactId>EmployeeAddWithRestfulWebservices&lt;/artifactId>
   &lt;packaging>war&lt;/packaging>
   &lt;version>0.0.1-SNAPSHOT&lt;/version>
   &lt;name>EmployeeAddWithRestfulWebservices Maven Webapp&lt;/name>
   &lt;url>http://maven.apache.org&lt;/url>
   &lt;dependencies>
      &lt;dependency>
         &lt;groupId>junit&lt;/groupId>
         &lt;artifactId>junit&lt;/artifactId>
         &lt;version>3.8.1&lt;/version>
         &lt;scope>test&lt;/scope>
      &lt;/dependency>

      &lt;!-- Spring MVC -->

      &lt;dependency>
         &lt;groupId>org.springframework&lt;/groupId>
         &lt;artifactId>spring-context&lt;/artifactId>
         &lt;version>4.0.3.RELEASE&lt;/version>
      &lt;/dependency>

      &lt;dependency>
         &lt;groupId>org.springframework&lt;/groupId>
         &lt;artifactId>spring-webmvc&lt;/artifactId>
         &lt;version>4.0.3.RELEASE&lt;/version>
      &lt;/dependency>

      &lt;!-- Spring Hibernate -->

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


      &lt;!-- Jax-RS and Jersey -->

      &lt;dependency>
         &lt;groupId>com.sun.jersey&lt;/groupId>
         &lt;artifactId>jersey-server&lt;/artifactId>
         &lt;version>1.19&lt;/version>
      &lt;/dependency>

      &lt;dependency>
         &lt;groupId>com.sun.jersey&lt;/groupId>
         &lt;artifactId>jersey-client&lt;/artifactId>
         &lt;version>1.19&lt;/version>
      &lt;/dependency>

      &lt;dependency>
         &lt;groupId>com.sun.jersey&lt;/groupId>
         &lt;artifactId>jersey-core&lt;/artifactId>
         &lt;version>1.19&lt;/version>
      &lt;/dependency>

      &lt;dependency>
         &lt;groupId>com.sun.jersey&lt;/groupId>
         &lt;artifactId>jersey-json&lt;/artifactId>
         &lt;version>1.19&lt;/version>
      &lt;/dependency>

      &lt;dependency>
         &lt;groupId>com.sun.jersey&lt;/groupId>
         &lt;artifactId>jersey-servlet&lt;/artifactId>
         &lt;version>1.19&lt;/version>
      &lt;/dependency>


      &lt;!-- Servlet and Jsp -->
      
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

      &lt;!-- mysql -->
      
      &lt;dependency>
         &lt;groupId>mysql&lt;/groupId>
         &lt;artifactId>mysql-connector-java&lt;/artifactId>
         &lt;version>5.1.6&lt;/version>
      &lt;/dependency>
      
      &lt;!-- Google Gson -->
      
      &lt;dependency>
         &lt;groupId>com.google.code.gson&lt;/groupId>
         &lt;artifactId>gson&lt;/artifactId>
         &lt;version>2.4&lt;/version>
      &lt;/dependency>

   &lt;/dependencies>
   &lt;build>
      &lt;finalName>EmployeeAppWithRestfulWebservices&lt;/finalName>
   &lt;/build>
&lt;/project>

</pre>




<h3>output</h3>

<div class="alert alert-info">
	Simple CURD operation with spring hibernate<br/><br/><br/>


	http://localhost:6060/EmployeeAppWithRestfulWebservices/insertEmployee   (used for add Employee)<br/>


	<img src="<?php echo base_url();?>static/images/ice_screenshot_20151113-190814.png" class="img-responsive"><br/><br/>


	http://localhost:6060/EmployeeAppWithRestfulWebservices/updateEmployee  (used for update Employee)<br/>


	<img src="<?php echo base_url();?>static/images/ice_screenshot_20151113-191348.png" class="img-responsive"><br/><br/>


	http://localhost:6060/EmployeeAppWithRestfulWebservices/deleteEmployee  (used for delete Employee)<br/>


	<img src="<?php echo base_url();?>static/images/ice_screenshot_20151113-191429.png" class="img-responsive"><br/><br/>


	http://localhost:6060/EmployeeAppWithRestfulWebservices/getEmployee  (used for get one Employee)<br/>


	<img src="<?php echo base_url();?>static/images/ice_screenshot_20151113-191632.png" class="img-responsive"><br/><br/>

	http://localhost:6060/EmployeeAppWithRestfulWebservices/getAllEmployee  (used for get All Employee)<br/>


	<img src="<?php echo base_url();?>static/images/ice_screenshot_20151113-191810.png" class="img-responsive"><br/><br/>

</div>
<div class="alert alert-danger">
	
By using angular js client and restful web services we can get data from the one database system to another <br/><br/>




http://localhost:6060/EmployeeAppWithRestfulWebservices/REST/rest/GetAllEmployee  (this will give json response)<br/><br/>


<img src="<?php echo base_url();?>static/images/ice_screenshot_20151113-192751.png" class="img-responsive"><br/><br/>




and for user friendly way we use angular js client <br/>



http://localhost:6060/EmployeeAppWithRestfulWebservices/restfulAjaxClient (this will give json response with user friendly message)


<img src="<?php echo base_url();?>static/images/ice_screenshot_20151113-191810.png" class="img-responsive"><br/><br/>
<br/><br/>