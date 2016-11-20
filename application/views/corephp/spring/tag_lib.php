			<h3>JSTL</h3>
			<pre class="prettyprint">
&lt;%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>


&lt;%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt" %>


&lt;%@ taglib prefix="sql" uri="http://java.sun.com/jsp/jstl/sql" %>



&lt;%@ taglib prefix="x"  uri="http://java.sun.com/jsp/jstl/xml" %>



&lt;%@ taglib prefix="fn" uri="http://java.sun.com/jsp/jstl/functions" >
            </pre>

			
			
			
			<h3>Spring</h3>
			<pre class="prettyprint">
&lt;%@ taglib uri="http://www.springframework.org/tags/form" prefix="form">




&lt;%@ taglib prefix="spring" uri="http://www.springframework.org/tags"%>	
            </pre>

			
			
			<h3>Example Of Uses</h3>
			<pre class="prettyprint">
&lt;spring:message code="maven.link1" />   //we can also use except this tag library that is
                                           //jstl tag library
                                           


//To show the error by using JSR                                       
&lt;form:errors path="emp.sid" cssClass="errorBlock"/>




//One Form by use spring form lib

&lt;form:form action="signup" method="post" commandName="ok">
               &lt;p style="color:red;">
                  &lt;form:errors path="*" />
               &lt;/p>
               
               &lt;table>
                    &lt;tr>
                       &lt;td>First Name:&lt;/td>
                       &lt;td>
                          &lt;form:input path="firstname" />
                       &lt;/td>
                    &lt;/tr>
                    
                     &lt;tr>
                       &lt;td>Last Name:&lt;/td>
                       &lt;td>
                          &lt;form:input path="lastname" />
                       &lt;/td>
                    &lt;/tr>
                    
                    &lt;tr>
                       &lt;td>User Name:&lt;/td>
                       &lt;td>
                          &lt;form:input path="username" />
                       &lt;/td>
                    &lt;/tr>
                    
                    &lt;tr>
                       &lt;td>email:&lt;/td>
                       &lt;td>
                          &lt;form:input path="email" />
                       &lt;/td>
                    &lt;/tr>
                    
                    &lt;tr>
                       &lt;td>phone:&lt;/td>
                       &lt;td>
                          &lt;form:input path="phone" />
                       &lt;/td>
                    &lt;/tr>
                    
                    &lt;tr>
                       &lt;td>password:&lt;/td>
                       &lt;td>
                          &lt;form:password path="password" />
                       &lt;/td>
                    &lt;/tr>
                    
                    &lt;tr>
                       &lt;td>
                          &lt;input type="submit" value="Login" />
                       &lt;/td>
                    &lt;/tr>
               &lt;/table>
&lt;/form:form>
            </pre>
