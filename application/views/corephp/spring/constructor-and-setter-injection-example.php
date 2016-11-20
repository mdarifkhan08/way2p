<div class="panel panel-primary">
<div class="panel panel-heading">

</div>
<div class="panel panel-body">
<img src="static/images/di-using-spring-boot.png">
<h3>AppConfig.java</h3>
<pre class="prettyprint">
package com.way2p.config;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.ApplicationContext;
import org.springframework.context.annotation.ComponentScan;

import com.way2p.injection.InjectedByConstructorService;
import com.way2p.injection.InjectedBySetterService;

@SpringBootApplication
@ComponentScan("com.way2p")
public class AppConfig {
	
	public static void main(String args[]){
		ApplicationContext ctx=SpringApplication.run(AppConfig.class,args);
		InjectedByConstructorService injectedByConstructorService=(InjectedByConstructorService)ctx.getBean("injectedByConstructorService");
		injectedByConstructorService.getMessage();
		
		
		InjectedBySetterService injectedBySetterService=(InjectedBySetterService)ctx.getBean("injectedBySetterService");
		injectedBySetterService.getMessage();
	}

}
	
</pre>



<h3>StudentService.java</h3>
<pre class="prettyprint">
package com.way2p.service;

public interface StudentService {
	
	public String getMessage();

}
	
</pre>



<h3>StudentServiceImpl.java</h3>
<pre class="prettyprint">
package com.way2p.service;

import org.springframework.stereotype.Component;

@Component
public class StudentServiceImpl implements StudentService{

	public String getMessage() {
		return "Hello World";
	}
	

}
	
</pre>



<h3>InjectedByConstructorService.java</h3>
<pre class="prettyprint">
package com.way2p.injection;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.way2p.service.StudentService;

@Component
public class InjectedByConstructorService {
	
	private StudentService studentService;
	
	@Autowired
	public InjectedByConstructorService(StudentService studentService){
		this.studentService=studentService;
	}
	
	public void getMessage(){
		String data=studentService.getMessage();
		System.out.println(data);
	}

}
	
</pre>



<h3>InjectedBySetterService.java</h3>
<pre class="prettyprint">
package com.way2p.injection;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import com.way2p.service.StudentService;

@Component
public class InjectedBySetterService {
	
	private StudentService studentService;
	
	@Autowired
	public void setStudentService(StudentService studentService){
		this.studentService=studentService;
	}
	
	public void getMessage(){
		String data=studentService.getMessage();
		System.out.println(data);
	}

}
	
</pre>



<h3>application.properties</h3>
<pre class="prettyprint">
server.port=8087	
</pre>




</div>
</div>



<div class="panel panel-primary">
<div class="panel panel-heading">
Some important points
</div>
<div class="panel panel-body">
<table class="table table-bordered">
	<tr><td>@SpringBootApplication annotation is a convenience annotation that add all the following:<br/>
    @Configuration <br>
    @EnableAutoConfiguration <br>
    @ComponentScan <br><br>

    @Configuration:-this annotation declare a class as spring configuration class which
    can contain @Bean annotated method(bean definitions) and all bean managed by application context.<br><br>

    @EnableAutoConfiguration:- tells spring boot to start adding beans based on class path setting, other beans and various property setting.<br><br>

    Normally you would add @EnableWebMvc for a Spring MVC app, but Spring Boot adds it automatically when it sees spring-webmvc on the classpath. This flags the application as a web application and activates key behaviors such as setting up a DispatcherServlet.<br><br>

    @ComponentScan tells Spring to look for other components, configurations, and services but it will scan only those component that available in same package not in other package.<br><br>
	</td></tr>
	<tr><td>@ComponentScan can be used in various ways <br><br>
    1. @ComponentScan<br>
    2. @ComponentScan(basePackages={"com.xyz","com.abc"})<br>
    3. @ComponentScan(basePackages="com.xyz")<br>
    4. @ComponentScan(@ComponentScan(basePackageClasses={StudentServiceImpl.class,InjectedBySetterService.class})
)<br><br>

first way of using the @ComponentScan demonstrate that we are searching/scanning component inside the same package.<br/><br/>


second way of using the @ComponentScan demonstrate that we are searching/scanning component inside multiple packages.<br/><br/>


third way of using the @ComponentScan demonstrate that we are searching/scanning component inside single package.<br/><br/>

fourth way of using the @ComponentScan demonstrate that we are searching/scanning component inside multiple classes.<br/><br/>


	</td></tr>
	<tr><td>This example clearly demonstrate that we are using both setter and constructor injection to achieve dependecy injection<br/><br/>
    This example not only demonstrate the dependency injection using setter and constructor but it also demonstrate that how we use interface to achieve dependency injection either by constructor or setter.
	</td></tr>
	<tr><td>
		@Repository is equivalent to @Component but it is convention to use @Repository at DAO lavel.<br/>
		@Repository is used at DAO(Data Access Object) <br/>
		@Repository should be used inside the concreate classes. <br>
		@Repository should not used inside the interface, why becuause interface can't be instantiated. <br>
		@Repository is used at implementation of dao interface. <br>
	</td></tr>
	<tr><td>
		@Service is equivalent to @Component but it is a convention to use @Service at the service lavel.
		@Service should be used at implementation of service.
		@Service is a component for ApplicationContext, it means bean of @Service annotated class is available to ApplicationContext

	</td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>

</table>
</div>
</div>
