			<h3>Step:1</h3>
			<pre class="prettyprint">
&lt;!-- Add Bean ResourceBundleMessageSource in the spring bean configuration file. -->

&lt;bean id="messageSource" class="org.springframework.context.support.ResourceBundleMessageSource">
&lt;property name="basename" value="messages"/>
&lt;/bean>

            </pre>

			
			
			
			<h3>step:2(messages.properties)</h3>
			<pre class="prettyprint">
&lt;!-- create messages.properties in the classpath of your project  -->

info.title=Welcome to Tech Inception
info.amazon=hard work and have fun
            </pre>

			
			
			<h3>step:3</h3>
			<pre class="prettyprint">
&lt;!-- Prepare your jsp to take data from properties file. -->

&lt;spring:message code="info.title" / >
&lt;spring:message code="info.amazon" / >

            </pre>

