			<h3>Step:1 create properties file</h3>
			<pre class="prettyprint">
&lt;!-- create properties file with name messages_en and messages_in the class of your project. 

warning: here in the name of properties file _ (underscore) is must.because by using only we can achive by spring.  -->      
           
&lt;!-- messages_en.properties -->

info.title=Welcome to Tech Inception
info.amazon=hard work and have fun


&lt;!-- messages_in.properties to make this file paste english line in google translate and the paste it to your properties file. -->


info.title=\u091F\u0947\u0915 \u0938\u094D\u0925\u093E\u092A\u0928\u093E \u0915\u0930\u0928\u0947 \u0915\u0947 \u0932\u093F\u090F \u0906\u092A\u0915\u093E \u0938\u094D\u0935\u093E\u0917\u0924 \u0939\u0948
info.amazon=\u0915\u0921\u093C\u0940 \u092E\u0947\u0939\u0928\u0924 \u0914\u0930 \u092E\u091C\u093E
            </pre>

			
			
			
			<h3>Step:2 Prepare front controller</h3>
			<pre class="prettyprint">
&lt;!-- prepare our front controller(spring bean configuration file). -->


&lt;bean id="messageSource" class="org.springframework.context.support.ResourceBundleMessageSource">
&lt;property name="basename" value="messages"/>
&lt;/bean>
&lt;mvc:interceptors>
&lt;bean class="org.springframework.web.servlet.i18n.LocaleChangeInterceptor">
&lt;property name="paramName" value="lang"/>
&lt;/bean>
&lt;/mvc:interceptors>
&lt;bean id="localeResolver"
class="org.springframework.web.servlet.i18n.CookieLocaleResolver">
&lt;property name="defaultLocale" value="en" />
&lt;property name="cookieName" value="myAppLocaleCookie">&lt;/property>
&lt;property name="cookieMaxAge" value="3600">&lt;/property>
&lt;/bean>
&lt;/beans>
            </pre>

			
			
			<h3>Prepare Jsp</h3>
			<pre class="prettyprint">

&lt;%@ page contentType="text/html;charset=UTF-8" %>
&lt;%@taglib uri="http://www.springframework.org/tags" prefix="spring"%>
&lt;body>
Internationalization
&lt;a href="?lang=en">English&lt;/a>|&lt;a href="?lang=hi">Hindi&lt;/a>

&lt;spring:message code="info.title"/>&lt;/br>
&lt;spring:message code="info.amazon"/>&lt;/br>

&lt;/body>
            </pre>

			
			
			
			<h3>Output</h3>
			<pre class="prettyprint">
<img src="<?php echo base_url();?>static/images/internationalization1.jpg"/>
<img src="<?php echo base_url();?>static/images/internationalization2.jpg"/>
			</pre>