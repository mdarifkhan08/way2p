							<h3>web.xml</h3>
							<pre class="prettyprint">
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;web-app xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
   xmlns="http://java.sun.com/xml/ns/javaee" 
   xmlns:web="http://java.sun.com/xml/ns/javaee/web-app_2_5.xsd"
   xsi:schemaLocation="http://java.sun.com/xml/ns/javaee 
   http://java.sun.com/xml/ns/javaee/web-app_2_5.xsd"
   id="WebApp_ID" version="2.5">
   &lt;welcome-file-list>
      &lt;welcome-file>faces/home.xhtml&lt;/welcome-file>
   &lt;/welcome-file-list>
   &lt;!-- 
      FacesServlet is main servlet responsible to handle all request. 
      It acts as central controller.
      This servlet initializes the JSF components before the JSP is displayed.
   -->
   &lt;servlet>
      &lt;servlet-name>Faces Servlet&lt;/servlet-name>
      &lt;servlet-class>javax.faces.webapp.FacesServlet&lt;/servlet-class>
      &lt;load-on-startup>1&lt;/load-on-startup>
   &lt;/servlet>
   &lt;servlet-mapping>
      &lt;servlet-name>Faces Servlet&lt;/servlet-name>
      &lt;url-pattern>/faces/*&lt;/url-pattern>
   &lt;/servlet-mapping>
   &lt;servlet-mapping>
      &lt;servlet-name>Faces Servlet&lt;/servlet-name>
      &lt;url-pattern>*.jsf&lt;/url-pattern>
   &lt;/servlet-mapping>
   &lt;servlet-mapping>
      &lt;servlet-name>Faces Servlet&lt;/servlet-name>
      &lt;url-pattern>*.faces&lt;/url-pattern>
   &lt;/servlet-mapping>
   &lt;servlet-mapping>
      &lt;servlet-name>Faces Servlet&lt;/servlet-name>
      &lt;url-pattern>*.xhtml&lt;/url-pattern>
   &lt;/servlet-mapping>
&lt;/web-app>				
					</pre>

							<h3></h3>
							<pre class="prettyprint">
package com.itm.managedbean;

import javax.faces.bean.ManagedBean;

@ManagedBean(name = "anyName", eager = true)
public class First {

	public First() {

	}

	public String getMessage() {
		return "HelloWorld";
	}

	public String getMessage1() {
		return "hard work and have fun";	
	}
	 
	public String getMessage2(){
		return "hay are you in beginning state of jsf do hard to get into it";
	}
	
	public String getMessage3(){
		return "love to each and every thing in this life then see the difference in you and other.";
	}
	
	public String getMessage4(){
		return "if you are doing the thing don't ever stop it till the end.";
	}
}
				
</pre>
						
							<h3></h3>
							<pre class="prettyprint">
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
&lt;html xmlns="http://www.w3.org/1999/xhtml">
&lt;head>
   &lt;title>JSF Tutorial!&lt;/title>
&lt;/head>
&lt;body>
&lt;div>
  &#35;{anyName.message}
&lt;/div>

&lt;div>
 &#35;{anyName.message1}
&lt;/div>

&lt;div>
&#35;{anyName.message2}
&lt;/div>

&lt;div>
&#35;{anyName.message3}
&lt;/div>

&lt;div>
&#35;{anyName.message4}
&lt;/div>   
&lt;/body>
&lt;/html>					
					</pre>


