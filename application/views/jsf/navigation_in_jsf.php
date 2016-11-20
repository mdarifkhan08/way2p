					<h4>Navigation Controller in jsf</h4>
			





					<h3></h3>
					<pre class="prettyprint">
package com.itm.gwl;

import javax.faces.bean.ManagedBean;
import javax.faces.bean.ManagedProperty;

@ManagedBean(name="navController")
public class NavigationController1 {
	@ManagedProperty(value="&#35;{param.pageId}")
	private String pageId;

	public String getPageId() {
		return pageId;
	}

	public void setPageId(String pageId) {
		this.pageId = pageId;
	}
	
	public String showPage(){
		if(pageId==null){
			return "home";
		}
		else if(pageId.equals("page1")){
			return "Page1";
		}
		else if(pageId.equals("page2")){
			return "Page2";
		}
		else if(pageId.equals("page3")){
			return "Page3";
		}
		else if(pageId.equals("page4")){
			return "Page4";
		}
		return "home";
	}

}
				
					</pre>
					<h3></h3>
					<pre class="prettyprint">
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
&lt;html xmlns="http://www.w3.org/1999/xhtml"
   xmlns:f="http://java.sun.com/jsf/core"
   xmlns:h="http://java.sun.com/jsf/html">
&lt;h:form>
   &lt;h:commandLink action="&#35;{navController.showPage}" value="page1">
      &lt;f:param name="pageId" value="page1" />
   &lt;/h:commandLink>
   &lt;br/>
   &lt;h:commandLink action="&#35;{navController.showPage}" value="page2">
      &lt;f:param name="pageId" value="page2" />
   &lt;/h:commandLink>
   &lt;br/>
   &lt;h:commandLink action="&#35;{navController.showPage}" value="page3">
      &lt;f:param name="pageId" value="page3" />
   &lt;/h:commandLink>
   &lt;br/>
   &lt;h:commandLink action="&#35;{navController.showPage}" value="page4">
      &lt;f:param name="pageId" value="page4" />
   &lt;/h:commandLink>
&lt;/h:form>

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
   &lt;h:body>
   Page2
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
   &lt;h:body>
   Page3
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
   &lt;h:body>
   Page4
   &lt;/h:body>
   &lt;/html>				
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

