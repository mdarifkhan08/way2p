<h3>structure</h3><hr/>
<img src="<?php echo base_url()?>static/images/struts-first-app.png" class="img-responsive"><hr/>

<h3>pom.xml</h3><hr/>
<pre class="prettyprint">
&lt;project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 http://maven.apache.org/maven-v4_0_0.xsd">
  &lt;modelVersion>4.0.0&lt;/modelVersion>
  &lt;groupId>com.way2programming&lt;/groupId>
  &lt;artifactId>StrutsJune4&lt;/artifactId>
  &lt;packaging>war&lt;/packaging>
  &lt;version>0.0.1-SNAPSHOT&lt;/version>
  &lt;name>StrutsJune4 Maven Webapp&lt;/name>
  &lt;url>http://maven.apache.org&lt;/url>
  &lt;dependencies>
       &lt;!-- Junit Dependency -->
		&lt;dependency>
			&lt;groupId>junit&lt;/groupId>
			&lt;artifactId>junit&lt;/artifactId>
			&lt;version>3.8.1&lt;/version>
			&lt;scope>test&lt;/scope>
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

		&lt;!-- http://mvnrepository.com/artifact/org.apache.struts/struts2-core -->
		&lt;dependency>
			&lt;groupId>org.apache.struts&lt;/groupId>
			&lt;artifactId>struts2-core&lt;/artifactId>
			&lt;version>2.5&lt;/version>
		&lt;/dependency>

		&lt;!-- http://mvnrepository.com/artifact/commons-logging/commons-logging -->
		&lt;dependency>
			&lt;groupId>commons-logging&lt;/groupId>
			&lt;artifactId>commons-logging&lt;/artifactId>
			&lt;version>1.1.1&lt;/version>
		&lt;/dependency>
  &lt;/dependencies>
  &lt;build>
    &lt;finalName>StrutsJune4&lt;/finalName>
  &lt;/build>
&lt;/project>
	
</pre>

<h3>web.xml</h3><hr/>
<pre class="prettyprint">
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;web-app xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xmlns="http://java.sun.com/xml/ns/javaee" xmlns:web="http://java.sun.com/xml/ns/javaee/web-app_2_5.xsd"
	xsi:schemaLocation="http://java.sun.com/xml/ns/javaee http://java.sun.com/xml/ns/javaee/web-app_2_5.xsd"
	id="WebApp_ID" version="2.5">
	&lt;filter>
		&lt;filter-name>struts2&lt;/filter-name>
		&lt;filter-class>org.apache.struts2.dispatcher.filter.StrutsPrepareAndExecuteFilter&lt;/filter-class>
	&lt;/filter>
	&lt;filter-mapping>
		&lt;filter-name>struts2&lt;/filter-name>
		&lt;url-pattern>/*&lt;/url-pattern>
	&lt;/filter-mapping>
	&lt;welcome-file-list>
		&lt;welcome-file>/jsp/index.jsp&lt;/welcome-file>
	&lt;/welcome-file-list>
&lt;/web-app>
	
</pre>

<h3>struts.xml</h3><hr/>
<pre class="prettyprint">
&lt;?xml version="1.0" encoding="UTF-8"?>
 &lt;!DOCTYPE struts PUBLIC
"-//Apache Software Foundation//DTD Struts Configuration 2.0//EN"
"http://struts.apache.org/dtds/struts-2.0.dtd">
 
&lt;struts>
   &lt;include file="struts-default.xml"/>
   &lt;package name="com.way2p.action" extends="struts-default">
      &lt;action name="verify" class="com.way2p.action.Login">
         &lt;result name="success">/jsp/success.jsp&lt;/result>
         &lt;result name="error">/jsp/error.jsp&lt;/result>
      &lt;/action>
   &lt;/package>
&lt;/struts>	
</pre>

<h3>Login.java</h3><hr/>
<pre class="prettyprint">
package com.way2p.action;

import com.opensymphony.xwork2.ActionSupport;

public class Login extends ActionSupport{
	
	private String username;
	private String password;
	/**
	 * @return the username
	 */
	public String getUsername() {
		return username;
	}
	/**
	 * @param username the username to set
	 */
	public void setUsername(String username) {
		this.username = username;
	}
	/**
	 * @return the password
	 */
	public String getPassword() {
		return password;
	}
	/**
	 * @param password the password to set
	 */
	public void setPassword(String password) {
		this.password = password;
	}
	
	public String execute() throws Exception{
		if(username.equals("abcd") && password.equals("abcd")){
			return SUCCESS;
		}
		else{
			return ERROR;
		}
		
	}

}
	
</pre>

<h3>jsp/index.jsp</h3><hr/>
<pre class="prettyprint">
&lt;%@ taglib prefix="s" uri="/struts-tags" %>
&lt;html>
&lt;body>
 
&lt;s:form action="verify">
 
&lt;s:textfield name="username" label="Enter Username" />&lt;br>
&lt;s:textfield name="password" label="Enter Password" />&lt;br>
&lt;s:submit value="Click" align="center" />
 
&lt;/s:form>
&lt;/body>
&lt;/html>	
</pre>

<h3>jsp/success.jsp</h3><hr/>
<pre class="prettyprint">
&lt;%@ taglib prefix="s" uri="/struts-tags" %>
Successfully logged in!	
</pre>

<h3>jsp/error.jsp</h3><hr/>
<pre class="prettyprint">
&lt;%@ taglib prefix="s" uri="/struts-tags" %>
Fail to login please check username and password.	
</pre>
