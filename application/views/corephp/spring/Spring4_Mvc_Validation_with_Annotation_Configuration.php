<div class="panel panel-primary">
<div class="panel panel-heading">

</div>
<div class="panel panel-body">
<h3>HelloWorldInitializer.java</h3>
<pre class="prettyprint">
package com.way2p.config;


import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.ServletRegistration;

import org.springframework.web.WebApplicationInitializer;
import org.springframework.web.context.support.AnnotationConfigWebApplicationContext;
import org.springframework.web.servlet.DispatcherServlet;

public class HelloWorldInitializer implements WebApplicationInitializer {

	public void onStartup(ServletContext container) throws ServletException {

		AnnotationConfigWebApplicationContext ctx = new AnnotationConfigWebApplicationContext();
		ctx.register(MvcConfiguration.class);
		ctx.setServletContext(container);

		ServletRegistration.Dynamic servlet = container.addServlet(
				"dispatcher", new DispatcherServlet(ctx));

		servlet.setLoadOnStartup(1);
		servlet.addMapping("/");
	}

}
	
</pre>


<h3>MvcConfiguration.java</h3>
<pre class="prettyprint">
package com.way2p.config;

import org.springframework.context.MessageSource;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.ComponentScan;
import org.springframework.context.annotation.Configuration;
import org.springframework.context.support.ResourceBundleMessageSource;
import org.springframework.web.servlet.ViewResolver;
import org.springframework.web.servlet.config.annotation.EnableWebMvc;
import org.springframework.web.servlet.config.annotation.ResourceHandlerRegistry;
import org.springframework.web.servlet.config.annotation.WebMvcConfigurerAdapter;
import org.springframework.web.servlet.view.InternalResourceViewResolver;
import org.springframework.web.servlet.view.JstlView;
@Configuration
@EnableWebMvc
@ComponentScan(basePackages = "com.way2p")
public class MvcConfiguration extends WebMvcConfigurerAdapter{
	
	
    @Bean
    public ViewResolver viewResolver() {
        InternalResourceViewResolver viewResolver = new InternalResourceViewResolver();
        viewResolver.setViewClass(JstlView.class);
        viewResolver.setPrefix("/WEB-INF/views/");
        viewResolver.setSuffix(".jsp");
        return viewResolver;
    }
 
    
    @Override
    public void addResourceHandlers(ResourceHandlerRegistry registry) {
        registry.addResourceHandler("/static/**").addResourceLocations("/static/");
    }
 
    
 
    @Bean
    public MessageSource messageSource() {
        ResourceBundleMessageSource messageSource = new ResourceBundleMessageSource();
        messageSource.setBasename("messages");
        return messageSource;
    }
 

}
	
</pre>


<h3>MyController.java</h3>
<pre class="prettyprint">
package com.way2p.controller;

import java.util.ArrayList;
import java.util.List;

import javax.validation.Valid;

import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;

import com.way2p.model.Student;

@Controller
@RequestMapping("/")
public class MyController {
	
	@RequestMapping(method = RequestMethod.GET)
	public String newRegistration(ModelMap model) {
		Student student = new Student();
		model.addAttribute("student", student);
		return "student-register";
	}

	
	@RequestMapping(method = RequestMethod.POST)
	public String saveRegistration(@Valid Student student, BindingResult result, ModelMap model) {
		if (result.hasErrors()) {
			return "student-register";
		}
		model.addAttribute("success", "Dear " + student.getFirstName() + " , your Registration completed successfully&lt;br/>FirstName:"+student.getFirstName()+"&lt;br/>LastName:"+student.getLastName()+"&lt;br/>Email:"+student.getEmail()+"&lt;br/>Subject:"+student.getSubjects());
		return "success";
	}

	
	@ModelAttribute("subjects")
	public List&lt;String> initializeSubjects() {
		List&lt;String> subjects = new ArrayList&lt;String>();
		subjects.add("Hindi");
		subjects.add("English");
		subjects.add("Maths");
		return subjects;
	}
	
	
}
	
</pre>


<h3>Student.java</h3>
<pre class="prettyprint">
package com.way2p.model;

import java.io.Serializable;

import javax.validation.constraints.Size;

import org.hibernate.validator.constraints.NotBlank;
import org.hibernate.validator.constraints.NotEmpty;

public class Student implements Serializable{
	@Size(min=3, max=40)
	@NotEmpty
	private String firstName;
	
	@Size(min=3, max=40)
	@NotEmpty
	private String lastName;
	
	@NotEmpty
	private String email;
	
	@NotEmpty
	private String subjects;
	
	public String getSubjects() {
		return subjects;
	}
	public void setSubjects(String subjects) {
		this.subjects = subjects;
	}
	public String getFirstName() {
		return firstName;
	}
	public void setFirstName(String firstName) {
		this.firstName = firstName;
	}
	public String getLastName() {
		return lastName;
	}
	public void setLastName(String lastName) {
		this.lastName = lastName;
	}
	public String getEmail() {
		return email;
	}
	public void setEmail(String email) {
		this.email = email;
	}
	
	

}
	
</pre>


<h3>messages.properties</h3>
<pre class="prettyprint">
Size.student.firstName=First Name must be between {2} and {1} characters long
Size.student.lastName=Last Name must be between {2} and {1} characters long
Email.student.email=Please provide a valid Email address
NotEmpty.student.email=Email can not be blank
NotEmpty.student.subjects=Please select at least one subject
</pre>


<h3>student-register.jsp</h3>
<pre class="prettyprint">
&lt;%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
&lt;%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
&lt;%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
&lt;html>
&lt;head>
&lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
&lt;title>&lt;/title>
&lt;link href="&lt;c:url value='/static/css/bootstrap.min.css' />" rel="stylesheet">&lt;/link>
&lt;style>
.help-inline{
color:red;
}
&lt;/style>
&lt;/head>
&lt;body>
&lt;div class="container">

  &lt;div class="form-container">
		&lt;h1>Registration Form&lt;/h1>&lt;hr/>
		&lt;form:form method="POST" modelAttribute="student"
			class="form-horizontal">
			&lt;div class="row">
				&lt;div class="form-group col-md-12">
					&lt;label class="col-md-3 control-lable" for="firstName">First
						Name&lt;/label>
					&lt;div class="col-md-7">
						&lt;form:input type="text" path="firstName" id="firstName"
							class="form-control input-sm" />
						&lt;div class="has-error">
							&lt;form:errors path="firstName" class="help-inline" />
						&lt;/div>
					&lt;/div>
				&lt;/div>
			&lt;/div>

			&lt;div class="row">
				&lt;div class="form-group col-md-12">
					&lt;label class="col-md-3 control-lable" for="lastName">Last
						Name&lt;/label>
					&lt;div class="col-md-7">
						&lt;form:input type="text" path="lastName" id="lastName"
							class="form-control input-sm" />
						&lt;div class="has-error">
							&lt;form:errors path="lastName" class="help-inline" />
						&lt;/div>
					&lt;/div>
				&lt;/div>
			&lt;/div>





			&lt;div class="row">
				&lt;div class="form-group col-md-12">
					&lt;label class="col-md-3 control-lable" for="email">Email&lt;/label>
					&lt;div class="col-md-7">
						&lt;form:input type="text" path="email" id="email"
							class="form-control input-sm" />
						&lt;div class="has-error">
							&lt;form:errors path="email" class="help-inline" />
						&lt;/div>
					&lt;/div>
				&lt;/div>
			&lt;/div>



			&lt;div class="row">
				&lt;div class="form-group col-md-12">
				&lt;label class="col-md-3 control-lable" for="email">Subjects&lt;/label>
					&lt;div class="col-md-7">

						&lt;form:select path="subjects" class="form-control">
							&lt;form:option value=""> --SELECT--&lt;/form:option>
							&lt;form:options items="${subjects}">&lt;/form:options>
						&lt;/form:select>
						&lt;form:errors path="subjects" class="help-inline" />
					&lt;/div>
				&lt;/div>
			&lt;/div>

			&lt;div class="row">
				&lt;div class="form-actions floatRight">
					&lt;input type="submit" value="Register"
						class="btn btn-primary btn-sm">
				&lt;/div>
			&lt;/div>
		&lt;/form:form>
	&lt;/div>

&lt;/div>
&lt;/body>
&lt;/html>
</pre>

<h3>success.jsp</h3>
<pre class="prettyprint">
&lt;%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
&lt;%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
&lt;html>
&lt;head>
    &lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    &lt;title>Student Enrollment Detail Confirmation&lt;/title>
    &lt;link href="&lt;c:url value='/static/css/custom.css' />" rel="stylesheet">&lt;/link>
&lt;/head>
&lt;body>
    &lt;div class="success">
        Confirmation message : ${success}
        
    &lt;/div>
&lt;/body>
&lt;/html>
</pre>
</div>
</div>