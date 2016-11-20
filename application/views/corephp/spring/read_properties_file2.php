			<h3></h3>
			<pre class="prettyprint">
&lt;!-- To read Properties File in jsp first we need to configure Front Controller(DispatcherServlet). --> 


&lt;bean id="messageSource"
        class="org.springframework.context.support.ResourceBundleMessageSource">
        &lt;property name="basenames">
            &lt;list>
                 &lt;value>message/messages&lt;/value>
                &lt;value>message/links&lt;/value> 
                &lt;value>db/xyz&lt;/value>
                &lt;value>message/restful_webservices_link_and_message&lt;/value>
                &lt;value>message/mvc_link_and_message&lt;/value>
            &lt;/list>
        &lt;/property>
&lt;/bean>	


&lt;!-- Now we can read properties file in jsp.

First way By using String tag library. -->


&lt;%@taglib prefix="spring" uri="http://www.springframework.org/tags"%>

&lt;spring:message code="maven.link1" />	

&lt;!-- Second way By using JSTL tag library. -->

&lt;%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt"%>
					
&lt;fmt:message key="mvc_link1"/>
            </pre>
