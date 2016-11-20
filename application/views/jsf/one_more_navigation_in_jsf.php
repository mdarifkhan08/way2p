<div class="alert alert-success" role="alert" align="center">
				<h4>Navigate to random page</h4>
			</div>


						<h3></h3>
						<pre class="prettyprint">
package com.itm.gwl;

import javax.faces.bean.ManagedBean;

@ManagedBean(name="arif",eager=true)
public class Navigator {
  
  
  public String getPage(){
    if(Math.random()>0.5){
      return "page1";
    }
    else{
      return "page2";
    }
  }

}

				
					</pre>

						<pre class="prettyprint">
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
&lt;html xmlns="http://www.w3.org/1999/xhtml"
  xmlns:f="http://java.sun.com/jsf/core"
  xmlns:h="http://java.sun.com/jsf/html">
&lt;h:head>

&lt;/h:head>
&lt;h:body>
  &lt;h:form>
    &lt;h:commandButton action="&#35;{arif.getPage}" value="command button" />
  &lt;/h:form>
&lt;/h:body>
&lt;/html>				
					</pre>
						<h3></h3>
						<pre class="prettyprint">
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
&lt;html xmlns="http://www.w3.org/1999/xhtml"
  xmlns:f="http://java.sun.com/jsf/core"
  xmlns:h="http://java.sun.com/jsf/html">
&lt;h:head>

&lt;/h:head>
&lt;h:body>
   Page1
   &lt;/h:body>
&lt;/html>				
					</pre>
					<h3></h3>
						<pre class="prettyprint">
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
&lt;html xmlns="http://www.w3.org/1999/xhtml"
  xmlns:f="http://java.sun.com/jsf/core"
  xmlns:h="http://java.sun.com/jsf/html">
&lt;h:head>
&lt;/h:head>
&lt;h:body>
   Page2
   &lt;/h:body>
&lt;/html>			
					</pre>
<h3></h3>
						<pre class="prettyprint">
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;faces-config
    xmlns="http://xmlns.jcp.org/xml/ns/javaee"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://xmlns.jcp.org/xml/ns/javaee http://xmlns.jcp.org/xml/ns/javaee/web-facesconfig_2_2.xsd"
    version="2.2">
  &lt;!--  Empty for now. There are many uses for faces-config.xml, but
        the most common are navigation rules (instead of having
        the return value of the "action" method be the base filename),
        bean declarations (instead of using @ManagedBean), and
        properties files (aka resource bundles).
        
        If you are not using faces-config.xml, it is perfectly legal
        to omit the file entirely. But, most people prefer to have
        a blank one already in their project for later use.
        
        From JSF 2 and PrimeFaces tutorial
        at http://www.coreservlets.com/JSF-Tutorial/jsf2/ -->
&lt;/faces-config>
				
					</pre>
<h3></h3>
						<pre class="prettyprint">
&lt;!DOCTYPE web-app PUBLIC
 "-//Sun Microsystems, Inc.//DTD Web Application 2.3//EN"
 "http://java.sun.com/dtd/web-app_2_3.dtd" >

&lt;web-app>
   &lt;display-name>Archetype Created Web Application&lt;/display-name>

   &lt;context-param>
      &lt;param-name>javax.faces.PROJECT_STAGE&lt;/param-name>
      &lt;param-value>Development&lt;/param-value>
   &lt;/context-param>

   &lt;context-param>
      &lt;param-name>javax.faces.CONFIG_FILES&lt;/param-name>
      &lt;param-value>/WEB-INF/faces-config.xml&lt;/param-value>
   &lt;/context-param>

   &lt;servlet>
      &lt;servlet-name>Faces Servlet&lt;/servlet-name>
      &lt;servlet-class>javax.faces.webapp.FacesServlet&lt;/servlet-class>
   &lt;/servlet>

   &lt;servlet-mapping>
      &lt;servlet-name>Faces Servlet&lt;/servlet-name>
      &lt;url-pattern>*.xhtml&lt;/url-pattern>
   &lt;/servlet-mapping>

   &lt;welcome-file-list>
      &lt;welcome-file>home.xhtml&lt;/welcome-file>
   &lt;/welcome-file-list>
&lt;/web-app>				
					</pre>

