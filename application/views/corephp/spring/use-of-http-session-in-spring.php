<div class="panel panel-primary">
<div class="panel panel-heading">
Spring Session basic uses
</div>
<div class="panel panel-body">
<h3>AppConfig.java</h3>
<pre class="">
package com.way2p.config;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.ApplicationContext;
import org.springframework.context.annotation.ComponentScan;

@SpringBootApplication
@ComponentScan("com.way2p")
public class AppConfig {
	
	public static void main(String args[]){
		SpringApplication.run(AppConfig.class, args);
	}

}
</pre>


<h3>SpringMvcApp.java</h3>
<pre class="">
package com.way2p.config;

import org.springframework.context.MessageSource;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.ComponentScan;
import org.springframework.context.support.ResourceBundleMessageSource;
import org.springframework.stereotype.Component;
import org.springframework.web.servlet.config.annotation.EnableWebMvc;
import org.springframework.web.servlet.config.annotation.ResourceHandlerRegistry;
import org.springframework.web.servlet.config.annotation.ViewResolverRegistry;
import org.springframework.web.servlet.config.annotation.WebMvcConfigurerAdapter;
import org.springframework.web.servlet.view.InternalResourceViewResolver;
import org.springframework.web.servlet.view.JstlView;

@Component
@EnableWebMvc
@ComponentScan(basePackages = "com.way2p")
public class SpringMvcApp extends WebMvcConfigurerAdapter{
	
	@Override
	public void configureViewResolvers(ViewResolverRegistry registry) {

		InternalResourceViewResolver viewResolver = new InternalResourceViewResolver();
		viewResolver.setViewClass(JstlView.class);
		viewResolver.setPrefix("/WEB-INF/views/");
		viewResolver.setSuffix(".jsp");
		registry.viewResolver(viewResolver);
	}

	/**
	 * Configure ResourceHandlers to serve static resources like css/javascript/images
	 * etc...
	 */
	@Override
	public void addResourceHandlers(ResourceHandlerRegistry registry) {
		registry.addResourceHandler("/static/**").addResourceLocations("/static/");
	}

	/**
	 * Configure MessageSource to lookup any validation/error message in
	 * internationalized property files
	 */
	@Bean
	public MessageSource messageSource() {
		ResourceBundleMessageSource messageSource = new ResourceBundleMessageSource();
		messageSource.setBasename("messages");
		return messageSource;
	}

}

</pre>


<h3>Controller1.java</h3>
<pre class="">
package com.way2p.controller;

import javax.servlet.http.HttpSession;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.RequestMapping;

import com.way2p.service.Student;

@Controller
public class Controller1 {
	private Student student;
	
	@Autowired
	public void setStudent(Student student) {
		this.student = student;
	}

	@RequestMapping("/")
	public String getPage(ModelMap model,HttpSession session){
		session.setAttribute("user", "ArifKhan");
		System.out.println(student.getName());
		return "page";
	}
	
	@RequestMapping("/abc")
	public String getPageAbc(ModelMap model){
		System.out.println(student.getName());
		return "page2";
	}
	
	@RequestMapping("/logout")
	public String logout(ModelMap model,HttpSession session){
		/*session.invalidate();*/
		session.removeAttribute("user");
		return "logout";
	}
	
	
}

</pre>

<h3>application.properries</h3>
<pre class="">
server.port=4545

</pre>


<h3>Student.java</h3>
<pre class="">
package com.way2p.service;

public interface Student {
	
	public String getName();

}

</pre>


<h3>StudentImpl.java</h3>
<pre class="">
package com.way2p.service;

import org.springframework.stereotype.Component;

@Component
public class StudentImpl implements Student{

	public String getName() {
		return "Arif Khan";
	}

}

</pre>


<h3>logout.jsp</h3>
<pre class="">
logged out
</pre>


<h3>page.jsp</h3>
<pre class="">
&lt;%
if(session.getAttribute("user")!=null)
{
    Object usser=session.getAttribute("user");
    out.print(usser.toString());
}
else 
{
   out.print("Log in please");

}
%>

</pre>

<h3>page2.jsp</h3>
<pre class="">
&lt;%
if(session.getAttribute("user")!=null)
{
    Object usser=session.getAttribute("user");
    out.print(usser.toString());
}
else 
{
   out.print("Log in please");

}
%>

</pre>



<h3>url</h3>
<pre class="">
localhost:4545         -> session created
localhost:4545/abc     -> if session on then it will show session value other wise tell please login
localhost:4545/logout  ->it will destoy perticular session
</pre>

</div>
</div>