<h3>Structure</h3><hr/>
<img src="<?php echo base_url()?>static/images/struts-login-app.png" class="img-responsive"><br/>

<h3>com.way2p.action.Login.java</h3><hr/>
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
		if(username.equals("arif") && password.equals("password"))
		{
			return SUCCESS;
 
		}else
			return ERROR;
	}
	
}
	
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

<h3>index.jsp</h3><hr/>
<pre class="prettyprint">
&lt;%@ taglib prefix="s" uri="/struts-tags" %>
&lt;html>
&lt;body>
&lt;s:form action="verify">
&lt;s:textfield name="username" label="Enter Username" />&lt;br>
&lt;s:password name="password" label="Enter Password" />&lt;br>
&lt;s:submit value="Submit" align="center" />
&lt;/s:form>
&lt;/body>
&lt;/html>		
</pre>

<h3>success.jsp</h3><hr/>
<pre class="prettyprint">
&lt;%@ taglib prefix="s" uri="/struts-tags" %>
Hello <s:property value="uname" />, you have been successfully logged in	
</pre>

<h3>error.jsp</h3><hr/>
<pre class="prettyprint">
&lt;%@ taglib prefix="s" uri="/struts-tags" %>
Login failed...!		
</pre>