			<div class="alert alert-info">It is not industry level app but it is having some wrong and correct concept that  will use to make industry level apps.</div>

			
			<h3>web.xml</h3>
			<pre class="prettyprint">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
&lt;web-app xmlns:xsi=&quot;http://www.w3.org/2001/XMLSchema-instance&quot;
				xmlns=&quot;http://java.sun.com/xml/ns/javaee&quot;
				xsi:schemaLocation=&quot;http://java.sun.com/xml/ns/javaee http://java.sun.com/xml/ns/javaee/web-app_2_5.xsd&quot;
				id=&quot;WebApp_ID&quot; version=&quot;2.5&quot;&gt;
  &lt;display-name&gt;FOR&lt;/display-name&gt;
  &lt;welcome-file-list&gt;
    &lt;welcome-file&gt;index.html&lt;/welcome-file&gt;
    &lt;welcome-file&gt;index.htm&lt;/welcome-file&gt;
    &lt;welcome-file&gt;index.jsp&lt;/welcome-file&gt;
    &lt;welcome-file&gt;default.html&lt;/welcome-file&gt;
    &lt;welcome-file&gt;default.htm&lt;/welcome-file&gt;
    &lt;welcome-file&gt;default.jsp&lt;/welcome-file&gt;
  &lt;/welcome-file-list&gt;
  
  &lt;!-- The front controller of this Spring Web application, responsible for handling all application requests --&gt;
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


	&lt;!-- Spring MVC...................................................... --&gt;

	&lt;mvc:annotation-driven /&gt;
	&lt;context:component-scan base-package=&quot;com.cil.controller&quot; /&gt;
	&lt;bean id=&quot;viewResolver&quot;
				class=&quot;org.springframework.web.servlet.view.InternalResourceViewResolver&quot;&gt;
		&lt;property name=&quot;prefix&quot; value=&quot;/WEB-INF/jsp/&quot; /&gt;
		&lt;property name=&quot;suffix&quot; value=&quot;.jsp&quot; /&gt;
	&lt;/bean&gt;

	&lt;!-- Spring MVC...................................................... --&gt;
&lt;/beans&gt;
            </pre>

			
			
			<h3>success.jsp</h3>
			<pre class="prettyprint">
	&lt;html&gt;
&lt;head&gt;
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=ISO-8859-1&quot;&gt;
&lt;title&gt;Submitted Data&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h2 align=&quot;center&quot;&gt;Data Submitted By you:&lt;/h2&gt;
&lt;table align=&quot;center&quot; border=&quot;solid&quot;&gt;
	&lt;tr&gt;
			&lt;td&gt;User Id&lt;/td&gt;
			&lt;td&gt;${emp.id }&lt;/td&gt;
		&lt;tr&gt;
			&lt;td&gt;User Name&lt;/td&gt;
			&lt;td&gt;${emp.name}&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/table&gt;
&lt;/body&gt;
&lt;/html&gt;
            </pre>

			
			
			
			<h3>SignUp.jsp</h3>
			<pre class="prettyprint">
		&lt;html&gt;
&lt;head&gt;
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=ISO-8859-1&quot;&gt;
&lt;title&gt;Sign Up Form&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;table align=&quot;center&quot;&gt;
&lt;h1 align=&quot;center&quot;&gt;Sign Up Form&lt;/h1&gt;
&lt;form action=&quot;/Form5/process&quot; method=&quot;post&quot;&gt;
             &lt;tr&gt;
				&lt;td&gt;userId(should be in numeric)&lt;/td&gt; &lt;td&gt;&lt;input type=&quot;text&quot;
					name=&quot;id&quot;&gt;&lt;/td&gt;
			&lt;/tr&gt;
            
            &lt;tr&gt;
				&lt;td&gt;username&lt;/td&gt;
				&lt;td&gt; &lt;input type=&quot;text&quot; name=&quot;name&quot;&gt;&lt;/td&gt;
           &lt;/tr&gt;
			&lt;tr&gt;
				&lt;td&gt;&lt;/td&gt;
				&lt;td&gt;&lt;input type=&quot;submit&quot; value=&quot;submit&quot; /&gt;&lt;/td&gt;
			&lt;/tr&gt;
&lt;/form&gt;
&lt;/table&gt;
&lt;/body&gt;
&lt;/html&gt;		
			</pre>


						<h3>OurController.java</h3>
			<pre class="prettyprint">
package com.cil.controller;

import org.springframework.context.ApplicationContext;
import org.springframework.context.support.ClassPathXmlApplicationContext;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;

@Controller
public class OurController {

	@RequestMapping(value = "/map", method = RequestMethod.GET)
	public String show() {
		return "jsp";

	}

	@RequestMapping(value = "/process", method = RequestMethod.POST)
	public ModelAndView process(@ModelAttribute("emp") EmployeeBean e) {
		ApplicationContext context = new ClassPathXmlApplicationContext(
				"com/cil/controller/application-context.xml");

		int a = e.getId();
		String n = e.getName();
		EmployeeService ss = context.getBean("s", EmployeeService.class);
		EmployeeBean student = new EmployeeBean();
		student.setId(a);
		student.setName(n);
		ss.insert(student);

		ModelAndView m = new ModelAndView("success");
		m.addObject("emp", e);
		return m;

	}

}		
			</pre>




						<h3>EmployeeBean</h3>
			<pre class="prettyprint">
package com.cil.controller;

public class EmployeeBean {
	private int id;
	private String name;

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

}	
			</pre>





						<h3>EmployeeHLO.java</h3>
			<pre class="prettyprint">
package com.cil.controller;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name = "Employee")
public class EmployeeHLO {
	@Id
	@Column(name = "Eid")
	private int id;
	@Column(name = "Ename")
	private String name;

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

}
	
			</pre>





						<h3>EmployeeDAO.java</h3>
			<pre class="prettyprint">
package com.cil.controller;

import org.springframework.orm.hibernate3.HibernateTemplate;

public class EmployeeDAO {
	private HibernateTemplate hibernateTemplate;

	public EmployeeDAO(HibernateTemplate hibernateTemplate) {
		this.hibernateTemplate = hibernateTemplate;
	}

	public void insert(EmployeeHLO student) {
		hibernateTemplate.save(student);
	}
}
	
			</pre>






						<h3>EmployeeService.java</h3>
			<pre class="prettyprint">
package com.cil.controller;

public class EmployeeService {
	private EmployeeDAO employeeDAO;

	public void setEmployeeDAO(EmployeeDAO employeeDAO) {
		this.employeeDAO = employeeDAO;
	}

	public void insert(EmployeeBean empBean) {
		EmployeeHLO employeeHLO = new EmployeeHLO();
		employeeHLO.setId(empBean.getId());
		employeeHLO.setName(empBean.getName());
		employeeDAO.insert(employeeHLO);
	}

}
		
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
		&lt;property name=&quot;driverClassName&quot;
				value=&quot;oracle.jdbc.driver.OracleDriver&quot; /&gt;
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
				&lt;value&gt;com.cil.controller.EmployeeHLO&lt;/value&gt;
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

	&lt;bean id=&quot;hibernateTemplate&quot;
				class=&quot;org.springframework.orm.hibernate3.HibernateTemplate&quot;&gt;
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
	&lt;bean id=&quot;employeeDAO&quot; class=&quot;com.cil.controller.EmployeeDAO&quot;&gt;
		&lt;constructor-arg ref=&quot;hibernateTemplate&quot; /&gt;
	&lt;/bean&gt;
	&lt;bean id=&quot;s&quot; class=&quot;com.cil.controller.EmployeeService&quot;&gt;
		&lt;property name=&quot;employeeDAO&quot; ref=&quot;employeeDAO&quot; /&gt;
	&lt;/bean&gt;
	&lt;!-- /EXTRA..................................................... --&gt;	
			</pre>





						<h3>Table</h3>
<pre class="prettyprint">
		<strong>create table employee(eid number(10),ename
			varchar2(20));</strong>
	</pre>


							<h3>Output</h3>
<pre class="prettyprint">
	<img src="images/sh1.jpg"><br/> <img
							src="images/sh2.jpg" ><br/> <img
							src="images/sh3.jpg" > <br/><img
							src="images/dfdf.jpg">

	</pre>
