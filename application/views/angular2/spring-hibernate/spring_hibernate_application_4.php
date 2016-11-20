<div class="alert alert-info">It is not industry level app but it is having some wrong and correct concept that  will use to make industry level apps.</div>
			
			<h3>pom.xml</h3>
			<pre class="prettyprint">
&lt;project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
   xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 http://maven.apache.org/maven-v4_0_0.xsd">
   &lt;modelVersion>4.0.0&lt;/modelVersion>
   &lt;groupId>compneyName&lt;/groupId>
   &lt;artifactId>ProjectName2&lt;/artifactId>
   &lt;packaging>war&lt;/packaging>
   &lt;version>0.0.1-SNAPSHOT&lt;/version>
   &lt;name>ProjectName2 Maven Webapp&lt;/name>
   &lt;url>http://maven.apache.org&lt;/url>
   &lt;dependencies>
      &lt;dependency>
         &lt;groupId>junit&lt;/groupId>
         &lt;artifactId>junit&lt;/artifactId>
         &lt;version>3.8.1&lt;/version>
         &lt;scope>test&lt;/scope>
      &lt;/dependency>
      &lt;dependency>
         &lt;groupId>org.apache.maven.plugins&lt;/groupId>
         &lt;artifactId>maven-compiler-plugin&lt;/artifactId>
         &lt;version>3.2&lt;/version>
         &lt;type>maven-plugin&lt;/type>
      &lt;/dependency>
      &lt;dependency>
         &lt;groupId>org.springframework&lt;/groupId>
         &lt;artifactId>spring-context&lt;/artifactId>
         &lt;version>4.0.3.RELEASE&lt;/version>
      &lt;/dependency>
      &lt;dependency>
         &lt;groupId>org.springframework&lt;/groupId>
         &lt;artifactId>spring-tx&lt;/artifactId>
         &lt;version>4.0.3.RELEASE&lt;/version>
      &lt;/dependency>
      &lt;dependency>
         &lt;groupId>org.codehaus.jackson&lt;/groupId>
         &lt;artifactId>jackson-mapper-asl&lt;/artifactId>
         &lt;version>1.7.1&lt;/version>
      &lt;/dependency>
      &lt;dependency>
         &lt;groupId>org.springframework&lt;/groupId>
         &lt;artifactId>spring-orm&lt;/artifactId>
         &lt;version>4.0.3.RELEASE&lt;/version>
      &lt;/dependency>
      &lt;dependency>
         &lt;groupId>org.springframework&lt;/groupId>
         &lt;artifactId>spring-webmvc&lt;/artifactId>
         &lt;version>4.0.3.RELEASE&lt;/version>
      &lt;/dependency>
      &lt;dependency>
         &lt;groupId>org.slf4j&lt;/groupId>
         &lt;artifactId>slf4j-api&lt;/artifactId>
         &lt;version>1.7.5&lt;/version>
      &lt;/dependency>
      &lt;dependency>
         &lt;groupId>ch.qos.logback&lt;/groupId>
         &lt;artifactId>logback-classic&lt;/artifactId>
         &lt;version>1.0.13&lt;/version>
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
         &lt;groupId>commons-dbcp&lt;/groupId>
         &lt;artifactId>commons-dbcp&lt;/artifactId>
         &lt;version>1.4&lt;/version>
      &lt;/dependency>
      &lt;dependency>
         &lt;groupId>javax.servlet&lt;/groupId>
         &lt;artifactId>servlet-api&lt;/artifactId>
         &lt;version>2.5&lt;/version>
      &lt;/dependency>
      &lt;dependency>
         &lt;groupId>mysql&lt;/groupId>
         &lt;artifactId>mysql-connector-java&lt;/artifactId>
         &lt;version>5.1.35&lt;/version>
      &lt;/dependency>
      &lt;dependency>
         &lt;groupId>javax.servlet&lt;/groupId>
         &lt;artifactId>jstl&lt;/artifactId>
         &lt;version>1.2&lt;/version>
      &lt;/dependency>
      &lt;dependency>
         &lt;groupId>org.hibernate&lt;/groupId>
         &lt;artifactId>hibernate-validator&lt;/artifactId>
         &lt;version>5.1.3.Final&lt;/version>
      &lt;/dependency>
   &lt;/dependencies>
   &lt;build>
      &lt;finalName>ProjectName2&lt;/finalName>
   &lt;/build>
&lt;/project>    
            </pre>

			
			
			
			<h3>EmployeeBean.java</h3>
			<pre class="prettyprint">
package com.itm.bean;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name = "emp")
public class EmployeeBean {
	
	@Id
	@GeneratedValue
	@Column(name = "id")
	private int id;
	
	@Column(name = "name")
	private String name;
	
	@Column(name = "dept")
	private String dept;
	
	@Column(name = "exp")
	private int exp;
	
	

	@Override
	public String toString() {
		return "EmployeeBean [id=" + id + ", name=" + name + ", dept=" + dept
				+ ", exp=" + exp + "]";
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

	public String getDept() {
		return dept;
	}

	public void setDept(String dept) {
		this.dept = dept;
	}

	public int getExp() {
		return exp;
	}

	public void setExp(int exp) {
		this.exp = exp;
	}

	

}
            </pre>

			
			
			<h3>EmployeeDAO.java</h3>
			<pre class="prettyprint">
package com.itm.dao;

import java.util.List;

import com.itm.bean.EmployeeBean;

public interface EmployeeDAO {
	
	public void addEmp(EmployeeBean employeeBean);
	public void updateEmp(EmployeeBean employeeBean);
	public EmployeeBean getEmp(int id);
	public void deleteEmp(EmployeeBean emp);
	public List&lt;EmployeeBean> getAll();
	
}		
            </pre>

			
			
			
			<h3>EmployeeDAOImpl.java</h3>
			<pre class="prettyprint">
package com.itm.dao;

import java.util.List;

import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;

import com.itm.bean.EmployeeBean;



public class EmployeeDAOImpl implements EmployeeDAO{
   
   
   private SessionFactory sessionFactory;

   public SessionFactory getSessionFactory() {
      return sessionFactory;
   }

   public void setSessionFactory(SessionFactory sessionFactory) {
      this.sessionFactory = sessionFactory;
   }
   
   
   public void addEmp(EmployeeBean employeeBean) {
      Session session = this.sessionFactory.openSession();
      Transaction tx = session.beginTransaction();
      session.persist(employeeBean);
      tx.commit();
        session.close();
   }

   public void updateEmp(EmployeeBean employeeBean) {
      Session session = this.sessionFactory.openSession();
      String hql="update EmployeeBean set name=:name "+"where id=:empId";
      Query query=session.createQuery(hql);
      query.setParameter("name", employeeBean.getName());
      query.setParameter("empId", employeeBean.getId());
      int result = query.executeUpdate();
      System.out.println("Rows affected: " + result);
   }

   /*public EmployeeBean getEmp(int id,EmployeeBean employeeBean) {
      Session session = this.sessionFactory.openSession();
      String hql = "SELECT E.id,E.name,E.dept,E.exp FROM EmployeeBean E " +"where id=:id";
      Query query = session.createQuery(hql);
      query.setParameter("id", employeeBean.getId());
      List results = query.list();
      EmployeeBean employeeBean11=(EmployeeBean)results;
      return employeeBean11;
   }*/

   public EmployeeBean getEmp(int id) {
      Session session = this.sessionFactory.openSession();
       EmployeeBean employeeBean=(EmployeeBean)session.get(EmployeeBean.class,id);
      return employeeBean;
   }

   public void deleteEmp(EmployeeBean emp) {
   /* Session session = this.sessionFactory.openSession();
   session.delete(name,EmployeeBean.class);*/
      
   String hql = "DELETE FROM EmployeeBean "  + 
                "WHERE id = :employee_id";
   Session session = this.sessionFactory.openSession();
   Query query = session.createQuery(hql);
   query.setParameter("employee_id", emp.getId());
   int result = query.executeUpdate();
   System.out.println("Rows affected: " + result);
   }

   public List&lt;EmployeeBean> getAll() {
      Session session = this.sessionFactory.openSession();
      String hql = "FROM EmployeeBean AS E";
      Query query = session.createQuery(hql);
      List results = query.list();
      List&lt;EmployeeBean> empBean=(List&lt;EmployeeBean>)results;
      return empBean;
   }

/* public void deleteEmp(int id) {
      Session session = this.sessionFactory.openSession();
      session.createQuery("delete EmployeeBean as eb where eb.id=:id");
      session.close();
      
   }

   public List&lt;EmployeeBean> getEmployee() {
      Session session = this.sessionFactory.openSession();
      List&lt;EmployeeBean> employeeBeans = session.createQuery("from EmployeeBean").list();
      session.close();
      return employeeBeans;
   }
*/
}	
			</pre>

			
			
			<h3>EmployeeController.java</h3>
			<pre class="prettyprint">
package com.itm.controller;

import java.util.List;

import org.springframework.context.ApplicationContext;
import org.springframework.context.support.ClassPathXmlApplicationContext;
import org.springframework.stereotype.Controller;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;

import com.itm.bean.EmployeeBean;
import com.itm.dao.EmployeeDAO;

@Controller
public class EmployeeController {

	@RequestMapping(value = "InsertEmployee", method = RequestMethod.GET)
	public ModelAndView InsertEmployee() {
		ModelAndView model = new ModelAndView("InsertEmployee");
		return model;
	}

	@RequestMapping(value = "processEmployeeForm", method = RequestMethod.POST)
	public ModelAndView processForm(@ModelAttribute EmployeeBean emp,
			BindingResult result) {

		ApplicationContext app = new ClassPathXmlApplicationContext(
				"com/itm/xml/application-context.xml");
		EmployeeDAO employeeDAO = app.getBean(EmployeeDAO.class);
		employeeDAO.addEmp(emp);

		ModelAndView model = new ModelAndView("InsertEmpSuccessfully");
		model.addObject("inserted", "Employee Inserted Successully!");
		return model;
	}

	@RequestMapping(value = "updateEmp", method = RequestMethod.GET)
	public ModelAndView ShowUpdateEmp() {
		ModelAndView model = new ModelAndView("UpdateEmp");
		return model;
	}

	@RequestMapping(value = "processEmployeeUpdateForm", method = RequestMethod.POST)
	public ModelAndView processEmployeeUpdateForm(
			@ModelAttribute EmployeeBean emp, BindingResult result) {

		ApplicationContext app = new ClassPathXmlApplicationContext(
				"com/itm/xml/application-context.xml");
		EmployeeDAO employeeDAO = app.getBean(EmployeeDAO.class);
		employeeDAO.updateEmp(emp);
		ModelAndView model = new ModelAndView("InsertEmpSuccessfully");
		model.addObject("inserted", "Employee Inserted Successully!");
		return model;
	}

	@RequestMapping(value = "selectEmp", method = RequestMethod.GET)
	public ModelAndView selectEmp() {
		ModelAndView model = new ModelAndView("selectEmpById");
		return model;
	}

	@RequestMapping(value = "selectEmpById", method = RequestMethod.POST)
	public ModelAndView selectEmpById(@ModelAttribute EmployeeBean emp,
			BindingResult result) {

		ApplicationContext app = new ClassPathXmlApplicationContext(
				"com/itm/xml/application-context.xml");
		EmployeeDAO employeeDAO = app.getBean(EmployeeDAO.class);

		EmployeeBean empBean = employeeDAO.getEmp(emp.getId());
		ModelAndView model = new ModelAndView("returnSelectEmpById");
		model.addObject("empBean", empBean);

		return model;
	}

	@RequestMapping(value = "deleteEmp", method = RequestMethod.GET)
	public ModelAndView deleteEmp() {
		ModelAndView model = new ModelAndView("deleteEmpByName");
		return model;
	}

	@RequestMapping(value = "deleteEmployeeUpdateForm", method = RequestMethod.POST)
	public ModelAndView deleteEmployeeUpdateForm(
			@ModelAttribute EmployeeBean emp, BindingResult result) {

		ApplicationContext app = new ClassPathXmlApplicationContext(
				"com/itm/xml/application-context.xml");
		EmployeeDAO employeeDAO = app.getBean(EmployeeDAO.class);
		employeeDAO.deleteEmp(emp);
		ModelAndView model = new ModelAndView("returnSelectEmpById");
		model.addObject("empBean", "ok");
		return model;
	}

	@RequestMapping(value = "selectAll", method = RequestMethod.GET)
	public ModelAndView selectAll() {
		ModelAndView model = new ModelAndView("showAllRecord");
		return model;
	}

	@RequestMapping(value = "selectAllEmp", method = RequestMethod.POST)
	public ModelAndView selectAllEmp(@ModelAttribute EmployeeBean emp,
			BindingResult result) {

		ApplicationContext app = new ClassPathXmlApplicationContext(
				"com/itm/xml/application-context.xml");
		EmployeeDAO employeeDAO = app.getBean(EmployeeDAO.class);
		List<EmployeeBean> e = employeeDAO.getAll();
		ModelAndView model = new ModelAndView("SelectAllEmp");
		model.addObject("empBean", e);
		return model;
	}

}
			</pre>


			
			
			<h3>InsertEmployee.jsp</h3>
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
            &lt;td>&lt;label name="name">name&lt;/label>&lt;/td>
            &lt;td>&lt;input type="text" name="name">&lt;/td>
         &lt;/tr>
         &lt;tr>
            &lt;td>&lt;label name="dept">dept&lt;/label>&lt;/td>
            &lt;td>&lt;input type="text" name="dept">&lt;/td>
         &lt;/tr>
         &lt;tr>
            &lt;td>&lt;label name="exp">exp&lt;/label>&lt;/td>
            &lt;td>&lt;input type="text" name="exp">&lt;/td>
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




			<h3>InsertEmployeeSuccessfully.jsp</h3>
			<pre class="prettyprint">
&lt;div>
${inserted}
&lt;/div>
&lt;a href="InsertEmployee"> go back&lt;/a>
            </pre>



            <h3>SelectEmpById.jsp</h3>
			<pre class="prettyprint">
&lt;%@ page language="java" contentType="text/html; charset=ISO-8859-1"
   pageEncoding="ISO-8859-1"%>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
&lt;html>
&lt;head>
&lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
&lt;title>Employee Updation&lt;/title>
&lt;/head>
&lt;body>
   &lt;h1 align="center">Employee Updation Page&lt;/h1>

   &lt;form action="selectEmpById" method="post"
      name="employeeUpdateForm">
      &lt;table align="center">
         &lt;tr>
            &lt;td>&lt;label name="id">id&lt;/label>&lt;/td>
            &lt;td>&lt;input type="text" name="id">&lt;/td>
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





            <h3>returnSelectEmpById.jsp</h3>
			<pre class="prettyprint">
&lt;div>&#36;{empBean }&lt;/div>
            </pre>

              <h3>SelectAllRecord.jsp</h3>
			<pre class="prettyprint">

&lt;form action="selectAllEmp" method="post">
&lt;input type="submit" value="show all record"/>
&lt;/form>	
            </pre>



              <h3>SelectAllRecord.jsp</h3>
			<pre class="prettyprint">
&lt;form action="selectAllEmp" method="post">
&lt;input type="submit" value="show all record"/>
&lt;/form>	
            </pre>

             <h3>ShowAllEmp.jsp</h3>
			<pre class="prettyprint">
&lt;%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
&lt;c:forEach items="${empBean}" var="i">
   &lt;tr>
      &lt;td>&lt;c:out value="${i.id}" />&lt;/td>|
      &lt;td>&lt;c:out value="${i.name}" />&lt;/td>|
      &lt;td>&lt;c:out value="${i.dept}" />&lt;/td>|
   &lt;/tr>
   &lt;br />

&lt;/c:forEach>		
            </pre>
            


             <h3>Database Table</h3>
			<pre class="prettyprint">
create table emp(id int(10) auto_increment,name varchar(30),dept varchar(30),exp int(2),primary key(id));
            </pre>



            <h3>Output</h3>
			<pre class="prettyprint">
<img src="<?php echo base_url();?>static/images/New Picture (1).jpg" /><br/> <img
						src="<?php echo base_url();?>static/images/New Picture (2).jpg" /><br/> <img
						src="<?php echo base_url();?>static/images/New Picture (3).jpg" /><br/> <img
						src="<?php echo base_url();?>static/images/New Picture (4).jpg" /><br/> <img
						src="<?php echo base_url();?>static/images/New Picture (5).jpg" /><br/> <img
						src="<?php echo base_url();?>static/images/New Picture (6).jpg" /><br/> <img
						src="<?php echo base_url();?>static/images/New Picture (7).jpg" /><br/> <img
						src="<?php echo base_url();?>static/images/New Picture (8).jpg" />
            </pre>
