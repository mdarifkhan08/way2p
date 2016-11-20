<div class="panel panel-primary">
<div class="panel panel-heading">
Spring Basic Application
</div>
<div class="panel panel-body">
<h3>web.xml</h3>
			<pre class="prettyprint">
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;web-app xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
				xmlns="http://xmlns.jcp.org/xml/ns/javaee"
				xsi:schemaLocation="http://xmlns.jcp.org/xml/ns/javaee http://xmlns.jcp.org/xml/ns/javaee/web-app_3_1.xsd"
				id="WebApp_ID" version="3.1">

	&lt;display-name>Archetype Created Web Application&lt;/display-name>


	&lt;!-- The front controller of this Spring Web application, responsible for 
		handling all application requests -->
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
&lt;/web-app>     
            </pre>

            <h3>servlet-config.xml</h3>
			<pre class="prettyprint">
	&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;beans xmlns="http://www.springframework.org/schema/beans"
				xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
				xmlns:context="http://www.springframework.org/schema/context"
				xmlns:mvc="http://www.springframework.org/schema/mvc"
				xmlns:p="http://www.springframework.org/schema/p"
				xsi:schemaLocation="http://www.springframework.org/schema/beans http://www.springframework.org/schema/beans/spring-beans.xsd
		http://www.springframework.org/schema/context http://www.springframework.org/schema/context/spring-context-3.2.xsd
		http://www.springframework.org/schema/mvc http://www.springframework.org/schema/mvc/spring-mvc-3.2.xsd">

&lt;mvc:annotation-driven />
&lt;context:component-scan base-package="com.cil.controller" />
&lt;bean id="viewResolver"
				class="org.springframework.web.servlet.view.InternalResourceViewResolver">
&lt;property name="prefix" value="/WEB-INF/jsp/" />
&lt;property name="suffix" value=".jsp" />
&lt;/bean>
&lt;/beans>
            </pre>


<h3>HelloController.java</h3>
			<pre class="prettyprint">
package com.aags.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;

@Controller
public class HelloController {
	@RequestMapping(value="/show",method=RequestMethod.GET)
	public String showPage(){
		return "Hello";
	}

}
            </pre>

			
			
			
			<h3>hello.jsp</h3>
			<pre class="prettyprint">
&lt;html>
&lt;head>
&lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
&lt;title>Insert title here&lt;/title>
&lt;/head>
&lt;body>
Hi
&lt;/body>
&lt;/html>		
			</pre>
</div>
</div>




			

			
			

			
			
			
			
			
			
			
