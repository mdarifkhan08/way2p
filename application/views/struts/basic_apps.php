<div id="tabs">
				<ul>
					
					<li><a href="#tabs-2">struts.xml</a></li>
					<li><a href="#tabs-3">web.xml</a></li>
					<li><a href="#tabs-4">HelloAction.java</a></li>
					<li><a href="#tabs-5">Struts2HelloWorld.java</a></li>
					<li><a href="#tabs-6">HelloWorld.jsp</a></li>

				</ul>

				

				<div id="tabs-2">
					<pre class="prettyprint linenums">
&lt;?xml version="1.0" encoding="UTF-8" ?>
&lt;!DOCTYPE struts PUBLIC
      "-//Apache Software Foundation//DTD Struts Configuration 2.0//EN"
      "http://struts.apache.org/dtds/struts-2.0.dtd">
&lt;struts>

    &lt;constant name="struts.enable.DynamicMethodInvocation" value="false" />
    &lt;constant name="struts.devMode" value="true" />
    
    &lt;package name="com.itm.gwl" namespace="/" extends="struts-default">
        &lt;action name="hello" class="com.itm.gwl.HelloAction">
            &lt;result>/index.jsp&lt;/result>
        &lt;/action>


        &lt;action name="HelloWorld" class="com.itm.gwl.Struts2HelloWorld">
            &lt;result>/jsp/HelloWorld.jsp&lt;/result>
        &lt;/action>

    &lt;/package>
&lt;/struts>
		</pre>

				</div>





				<div id="tabs-3">
					<pre class="prettyprint linenums">
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;web-app id="WebApp_9" version="2.4" xmlns="http://java.sun.com/xml/ns/j2ee" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://java.sun.com/xml/ns/j2ee http://java.sun.com/xml/ns/j2ee/web-app_2_4.xsd">

    &lt;display-name>Struts Blank&lt;/display-name>

    &lt;filter>
        &lt;filter-name>struts2&lt;/filter-name>
        &lt;filter-class>org.apache.struts2.dispatcher.FilterDispatcher&lt;/filter-class>
    &lt;/filter>



    &lt;filter-mapping>
        &lt;filter-name>struts2&lt;/filter-name>
        &lt;url-pattern>/*&lt;/url-pattern>
    &lt;/filter-mapping>

    &lt;welcome-file-list>
        &lt;welcome-file>index.html&lt;/welcome-file>
    &lt;/welcome-file-list>

&lt;/web-app>

		</pre>

				</div>


				<div id="tabs-4">
					<pre class="prettyprint linenums">
package com.itm.gwl;

import com.opensymphony.xwork2.ActionSupport;

public class HelloAction extends ActionSupport{
	public static final String MESSAGE = "Hello Dosto !!!";
	  private String message;
	  public String execute()
	  {
	      setMessage(MESSAGE);
	      return SUCCESS;
	  }
	  public String getMessage() {
	      return message;
	  }
	  public void setMessage(String message) {
	      this.message = message;
	  }

}

</pre>

				</div>


				<div id="tabs-5">
					<pre class="prettyprint linenums">
package com.itm.gwl;

import java.util.Date;

import com.opensymphony.xwork2.ActionSupport;

public class Struts2HelloWorld extends ActionSupport {

	public static final String MESSAGE = "Struts 2 First App!";

	private String message;

	public void setMessage(String message) {
		this.message = message;
	}

	public String getMessage() {
		return message;
	}

	public String getCurrentTime() {
		return new Date().toString();
	}

	public String execute() throws Exception {
		setMessage(MESSAGE);
		return SUCCESS;
	}
	

}
	
</pre>
				</div>


				<div id="tabs-6">
					<pre class="prettyprint linenums">
&lt;%@ taglib prefix="s" uri="/struts-tags" %>
&lt;html>
    &lt;head>
        &lt;title>Struts 2 Hello World Application!&lt;/title>
    &lt;/head>
    &lt;body>
        &lt;h2>&lt;s:property value="message" />&lt;/h2>
        &lt;p>Current date and time is: &lt;b>&lt;s:property value="currentTime" />&lt;/b>
    &lt;/body>
&lt;/html>	
		</pre>

				</div>


				<!-- <div id="tabs-7">
				<pre class="prettyprint linenums">
	
		</pre> 

			</div>-->
			</div>



<div>
<hr>
<h3>Application-2</h3><hr>


  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#1" aria-controls="home" role="tab" data-toggle="tab">struts.xml</a></li>
    <li role="presentation"><a href="#2" aria-controls="profile" role="tab" data-toggle="tab">web.xml</a></li>
    <li role="presentation"><a href="#3" aria-controls="messages" role="tab" data-toggle="tab">Login.java</a></li>
    <li role="presentation"><a href="#4" aria-controls="settings" role="tab" data-toggle="tab">Login-validation.xml</a></li>
    <li role="presentation"><a href="#5" aria-controls="settings" role="tab" data-toggle="tab">login.jsp</a></li>
    <li role="presentation"><a href="#6" aria-controls="settings" role="tab" data-toggle="tab">loginSuccess.jsp</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="1"><pre class="prettyprint linenums">
&lt;?xml version="1.0" encoding="UTF-8" ?>
&lt;!DOCTYPE struts PUBLIC
      "-//Apache Software Foundation//DTD Struts Configuration 2.0//EN"
      "http://struts.apache.org/dtds/struts-2.0.dtd">
&lt;struts>

    &lt;constant name="struts.enable.DynamicMethodInvocation" value="false" />
    &lt;constant name="struts.devMode" value="true" />
    
    &lt;package name="com" namespace="/" extends="struts-default">
        
        &lt;action name="login">
            &lt;result>/jsp/login.jsp&lt;/result>
        &lt;/action>
        
        &lt;action name="doLogin" class="com.Login">
            &lt;result name="input">/jsp/login.jsp&lt;/result>
            &lt;result name="error">/jsp/login.jsp&lt;/result>
            &lt;result>/jsp/loginSuccess.jsp&lt;/result>
        &lt;/action>
        
    &lt;/package>
    
&lt;/struts>		
		</pre>
</div>
    <div role="tabpanel" class="tab-pane" id="2"><pre class="prettyprint linenums">
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;web-app id="WebApp_9" version="2.4"
    xmlns="http://java.sun.com/xml/ns/j2ee"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://java.sun.com/xml/ns/j2ee http://java.sun.com/xml/ns/j2ee/web-app_2_4.xsd">

    &lt;display-name>Struts2 Application&lt;/display-name>
    &lt;filter>
        &lt;filter-name>struts2&lt;/filter-name>
        &lt;filter-class>
            org.apache.struts2.dispatcher.FilterDispatcher
        &lt;/filter-class>
    &lt;/filter>
    &lt;filter-mapping>
        &lt;filter-name>struts2&lt;/filter-name>
        &lt;url-pattern>/*&lt;/url-pattern>
    &lt;/filter-mapping>
    &lt;welcome-file-list>
        &lt;welcome-file>Login.jsp&lt;/welcome-file>
    &lt;/welcome-file-list>

&lt;/web-app>
		
		</pre></div>
    <div role="tabpanel" class="tab-pane" id="3"><pre class="prettyprint linenums">
package com;

import com.opensymphony.xwork2.ActionSupport;


public class Login extends ActionSupport {

	public String execute() throws Exception {
		System.out.println("validating login");
		if (!getUsername().equals("Admin") || !getPassword().equals("Admin")) {
			addActionError("Invalid user name or password! Please try again!");
			return ERROR;
		} else {
			return SUCCESS;
		}
	}

	private String username = null;

	private String password = null;

	public String getUsername() {
		return username;
	}

	public void setUsername(String username) {
		this.username = username;
	}

	public String getPassword() {
		return password;
	}

	public void setPassword(String password) {
		this.password = password;
	}

}
</pre></div>
    <div role="tabpanel" class="tab-pane" id="4"><pre class="prettyprint linenums">
&lt;?xml version="1.0" encoding="UTF-8"?>
        &lt;!DOCTYPE validators PUBLIC 
        "-//OpenSymphony Group//XWork Validator 1.0.2//EN" 
        "http://www.opensymphony.com/xwork/xwork-validator-1.0.2.dtd">

&lt;validators>
    &lt;field name="username">
        &lt;field-validator type="requiredstring">
            &lt;param name="trim">true&lt;/param>
            &lt;message>Login name is required&lt;/message>
        &lt;/field-validator>
    &lt;/field>
    &lt;field name="password">
        &lt;field-validator type="requiredstring">
            &lt;param name="trim">true&lt;/param>
            &lt;message>Password is required&lt;/message>
        &lt;/field-validator>
    &lt;/field>
&lt;/validators>	
</pre></div>
    <div role="tabpanel" class="tab-pane" id="5"><pre class="prettyprint linenums">
&lt;%@ taglib prefix="s" uri="/struts-tags"%>
&lt;html>
&lt;head>
&lt;title>Struts 2 Login Application!&lt;/title>



&lt;/head>
&lt;body>
    &lt;s:form action="doLogin" method="POST">
        &lt;tr>
            &lt;td colspan="2">Login&lt;/td>

        &lt;/tr>

        &lt;tr>
            &lt;td colspan="2">&lt;s:actionerror /> &lt;s:fielderror />&lt;/td>
        &lt;/tr>

        &lt;s:textfield name="username" label="Login name" />
        &lt;s:password name="password" label="Password" />
        &lt;s:submit value="Login" align="center" />

    &lt;/s:form>

&lt;/body>

&lt;/html>		
		</pre></div>
    <div role="tabpanel" class="tab-pane" id="6"><pre class="prettyprint linenums">
&lt;html>

&lt;head>
&lt;title>Login Success&lt;/title>
&lt;/head>

&lt;body>
    &lt;p align="center">
        &lt;font color="#000080" size="5">Login Successful&lt;/font>
    &lt;/p>
&lt;/body>

&lt;/html>		
		</pre></div>
  </div>

</div>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  });
</script>




