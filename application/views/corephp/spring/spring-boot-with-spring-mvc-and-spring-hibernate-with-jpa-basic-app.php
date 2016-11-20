<div class="panel panel-primary">
<div class="panel panel-heading">
Basic App
</div>
<div class="panel panel-body">

<h3>structure</h3>
<img src="<?php echo base_url();?>static/images/spring-boot-and-jpa2-with-hibernate.png">
<hr/>

<h3>pom.xml</h3>
<pre class="prettyprint">
&lt;project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 http://maven.apache.org/maven-v4_0_0.xsd">
	&lt;modelVersion>4.0.0&lt;/modelVersion>
	&lt;groupId>com.way2p&lt;/groupId>
	&lt;artifactId>F1&lt;/artifactId>
	&lt;packaging>war&lt;/packaging>
	&lt;version>0.0.1-SNAPSHOT&lt;/version>
	&lt;name>F1 Maven Webapp&lt;/name>
	&lt;url>http://maven.apache.org&lt;/url>
	&lt;parent>
		&lt;groupId>org.springframework.boot&lt;/groupId>
		&lt;artifactId>spring-boot-starter-parent&lt;/artifactId>
		&lt;version>1.2.5.RELEASE&lt;/version>
	&lt;/parent>
	&lt;dependencies>
		&lt;dependency>
			&lt;groupId>org.apache.tomcat.embed&lt;/groupId>
			&lt;artifactId>tomcat-embed-jasper&lt;/artifactId>
			&lt;scope>provided&lt;/scope>
		&lt;/dependency>
		&lt;dependency>
			&lt;groupId>javax.servlet&lt;/groupId>
			&lt;artifactId>jstl&lt;/artifactId>
		&lt;/dependency>
		&lt;dependency>
			&lt;groupId>org.springframework.boot&lt;/groupId>
			&lt;artifactId>spring-boot-starter-security&lt;/artifactId>
		&lt;/dependency>
		&lt;dependency>
			&lt;groupId>org.springframework.boot&lt;/groupId>
			&lt;artifactId>spring-boot-starter-web&lt;/artifactId>
		&lt;/dependency>
		&lt;dependency>
			&lt;groupId>org.springframework.boot&lt;/groupId>
			&lt;artifactId>spring-boot-starter-data-jpa&lt;/artifactId>
		&lt;/dependency>
		&lt;dependency>
			&lt;groupId>org.apache.tomcat.embed&lt;/groupId>
			&lt;artifactId>tomcat-embed-jasper&lt;/artifactId>
			&lt;scope>provided&lt;/scope>
		&lt;/dependency>
		&lt;dependency>
			&lt;groupId>javax.servlet&lt;/groupId>
			&lt;artifactId>jstl&lt;/artifactId>
		&lt;/dependency>
		&lt;dependency>
			&lt;groupId>mysql&lt;/groupId>
			&lt;artifactId>mysql-connector-java&lt;/artifactId>
		&lt;/dependency>
	&lt;/dependencies>
	&lt;properties>
		&lt;java.version>1.8&lt;/java.version>
	&lt;/properties>
	&lt;build>
		&lt;plugins>
			&lt;plugin>
				&lt;groupId>org.springframework.boot&lt;/groupId>
				&lt;artifactId>spring-boot-maven-plugin&lt;/artifactId>
			&lt;/plugin>
		&lt;/plugins>
	&lt;/build>
&lt;/project>
</pre>


<h3>SpringMvcApp.java</h3>
<pre class="prettyprint">
package com.way2p.config;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

@SpringBootApplication
public class SpringMvcApp {
	
	public static void main(String args[]){
		SpringApplication.run(SpringMvcApp.class, args);
	}

}

</pre>


<h3>AppConfig.java</h3>
<pre class="prettyprint">
package com.way2p.config;

import org.springframework.context.MessageSource;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.ComponentScan;
import org.springframework.context.annotation.Import;
import org.springframework.context.support.ResourceBundleMessageSource;
import org.springframework.stereotype.Controller;
import org.springframework.web.servlet.config.annotation.EnableWebMvc;
import org.springframework.web.servlet.config.annotation.ResourceHandlerRegistry;
import org.springframework.web.servlet.config.annotation.ViewResolverRegistry;
import org.springframework.web.servlet.config.annotation.WebMvcConfigurerAdapter;
import org.springframework.web.servlet.view.InternalResourceViewResolver;
import org.springframework.web.servlet.view.JstlView;

@Controller
@Import(JpaConfiguration.class)
@EnableWebMvc
@ComponentScan(basePackages = "com.way2p")
public class AppConfig extends WebMvcConfigurerAdapter{

	/**
	 * Configure ViewResolvers to deliver preferred views.
	 */
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


<h3>JpaConfiguration.java</h3>
<pre class="prettyprint">
package com.way2p.config;

import java.util.Properties;

import javax.naming.NamingException;
import javax.persistence.EntityManagerFactory;
import javax.sql.DataSource;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.context.annotation.PropertySource;
import org.springframework.core.env.Environment;
import org.springframework.jdbc.datasource.DriverManagerDataSource;
import org.springframework.orm.jpa.JpaTransactionManager;
import org.springframework.orm.jpa.JpaVendorAdapter;
import org.springframework.orm.jpa.LocalContainerEntityManagerFactoryBean;
import org.springframework.orm.jpa.vendor.HibernateJpaVendorAdapter;
import org.springframework.transaction.PlatformTransactionManager;
import org.springframework.transaction.annotation.EnableTransactionManagement;

@Configuration
@EnableTransactionManagement
@PropertySource(value = { "classpath:application.properties" })
public class JpaConfiguration {
	
	@Autowired
    private Environment environment;
 
    @Bean
    public DataSource dataSource() {
        DriverManagerDataSource dataSource = new DriverManagerDataSource();
        dataSource.setDriverClassName(environment.getRequiredProperty("jdbc.driverClassName"));
        dataSource.setUrl(environment.getRequiredProperty("jdbc.url"));
        dataSource.setUsername(environment.getRequiredProperty("jdbc.username"));
        dataSource.setPassword(environment.getRequiredProperty("jdbc.password"));
        return dataSource;
    }
 
    @Bean
    public LocalContainerEntityManagerFactoryBean entityManagerFactory() throws NamingException {
        LocalContainerEntityManagerFactoryBean factoryBean = new LocalContainerEntityManagerFactoryBean();
        factoryBean.setDataSource(dataSource());
        factoryBean.setPackagesToScan(new String[] { "com.way2p.model" });
        factoryBean.setJpaVendorAdapter(jpaVendorAdapter());
        factoryBean.setJpaProperties(jpaProperties());
        return factoryBean;
    }
 
    /*
     * Provider specific adapter.
     */
    @Bean
    public JpaVendorAdapter jpaVendorAdapter() {
        HibernateJpaVendorAdapter hibernateJpaVendorAdapter = new HibernateJpaVendorAdapter();
        return hibernateJpaVendorAdapter;
    }
 
    /*
     * Here you can specify any provider specific properties.
     */
    private Properties jpaProperties() {
        Properties properties = new Properties();
        properties.put("hibernate.dialect", environment.getRequiredProperty("hibernate.dialect"));
        // properties.put("hibernate.hbm2ddl.auto", environment.getRequiredProperty("hibernate.hbm2ddl.auto"));
        properties.put("hibernate.show_sql", environment.getRequiredProperty("hibernate.show_sql"));
        properties.put("hibernate.format_sql", environment.getRequiredProperty("hibernate.format_sql"));
        return properties;
    }
 
    @Bean
    @Autowired
    public PlatformTransactionManager transactionManager(EntityManagerFactory emf) {
        JpaTransactionManager txManager = new JpaTransactionManager();
        txManager.setEntityManagerFactory(emf);
        return txManager;
    }

}
	
</pre>


<h3>PageController.java</h3>
<pre class="prettyprint">
package com.way2p.controller;

import java.util.List;

import javax.validation.Valid;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;

import com.way2p.model.Student;
import com.way2p.service.StudentService;

@Controller
public class PageController {
	
	@Autowired
	StudentService studentService;
	
	@RequestMapping("/")
	public String index(ModelMap model){
		List&lt;Student> students=studentService.findAllStudents();
		model.addAttribute("students", students);
		model.addAttribute("student", new Student());
		return "index";
	}
	
	@RequestMapping(value = { "/student" }, method = RequestMethod.POST)
    public String saveStudent(ModelMap model,@ModelAttribute("student")@Valid Student student,BindingResult result) {
		studentService.save(student);
		List&lt;Student> students=studentService.findAllStudents();
		model.addAttribute("students", students);
        model.addAttribute("success", "Student " + student.getName()  + " registered successfully");
        return "index";
    }
	
	@RequestMapping("/student-{id}")
	public String getStudent(@PathVariable int id,ModelMap model){
		Student student=studentService.findById(id);
		model.addAttribute("student", student);
		return "getStudent";
	}
	
	
	@RequestMapping("/student/{name}")
	public String getStudentByName(@PathVariable String name,ModelMap model){
		Student student=studentService.findByName(name);
		model.addAttribute("student", student);
		return "getStudent";
	}
	
	@RequestMapping("/student/mobileNumber-{mn}")
	public String getStudentByEmail(@PathVariable String mn,ModelMap model){
		Student student=studentService.findByMobileNumber(mn);
		model.addAttribute("student", student);
		return "getStudent";
	}
	
	
	@RequestMapping("/delete/student/{id}")
	public String deleteById(@PathVariable int id,ModelMap model){
		studentService.deleteById(id);
		return "getStudent";
	}
}
</pre>

<h3>AbstractDao.java</h3>
<pre class="prettyprint">
package com.way2p.dao;

import java.io.Serializable;
import java.lang.reflect.ParameterizedType;

import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;

public abstract class AbstractDao&lt;PK extends Serializable, T> {
    
    private final Class&lt;T> persistentClass;
     
    @SuppressWarnings("unchecked")
    public AbstractDao(){
        this.persistentClass =(Class&lt;T>) ((ParameterizedType) this.getClass().getGenericSuperclass()).getActualTypeArguments()[1];
    }
     
    @PersistenceContext
    EntityManager entityManager;
     
    protected EntityManager getEntityManager(){
        return this.entityManager;
    }
 
    protected T getByKey(PK key) {
        return (T) entityManager.find(persistentClass, key);
    }
 
    protected void persist(T entity) {
        entityManager.persist(entity);
    }
     
    protected void update(T entity) {
        entityManager.merge(entity);
    }
 
    protected void delete(T entity) {
        entityManager.remove(entity);
    }
 
}
</pre>


<h3>StudentDao.java</h3>
<pre class="prettyprint">
package com.way2p.dao;

import java.util.List;

import com.way2p.model.Student;

public interface StudentDao {
	
	List&lt;Student> findAllStudents();
	
	Student findById(int id);
	
	Student findByName(String name);
	
	Student findByMobileNumber(String number);
	
	void save(Student s);
	
	void deleteById(int id);
	

}

</pre>

<h3>StudentDaoImpl.java</h3>
<pre class="prettyprint">
package com.way2p.dao;

import java.util.List;

import javax.persistence.NoResultException;

import org.springframework.stereotype.Repository;

import com.way2p.model.Student;

@Repository("studentDao")
public class StudentDaoImpl extends AbstractDao&lt;Integer, Student> implements StudentDao {

	@Override
	public List&lt;Student> findAllStudents() {
		List&lt;Student> students = getEntityManager()
                .createQuery("SELECT s FROM Student s  ORDER BY s.name ASC")
                .getResultList();
        return students;
		
	}

	@Override
	public Student findById(int id) {
		Student student = getByKey(id);
        return student;
	}

	@Override
	public Student findByName(String name) {
		try{
            Student student = (Student) getEntityManager()
                    .createQuery("SELECT s FROM Student s WHERE s.name LIKE :name")
                    .setParameter("name", name)
                    .getSingleResult();
            return student; 
        }catch(NoResultException ex){
            return null;
        }
	}


	@Override
	public Student findByMobileNumber(String number) {
		try{
            Student student = (Student) getEntityManager()
                    .createQuery("SELECT s FROM Student s WHERE s.mobileNumber LIKE :mn")
                    .setParameter("mn", number)
                    .getSingleResult();
            return student; 
        }catch(NoResultException ex){
            return null;
        }
	}

	@Override
	public void save(Student s) {
		 persist(s);
		
	}

	@Override
	public void deleteById(int id) {
		Student student = (Student) getEntityManager()
                .createQuery("SELECT s FROM Student s WHERE s.id LIKE :id")
                .setParameter("id", id)
                .getSingleResult();
        delete(student);
	}
}
</pre>

<h3>Student.java</h3>
<pre class="prettyprint">
package com.way2p.model;

import java.io.Serializable;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name="student")
public class Student implements Serializable{
	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	@Column(name="id")
	private Integer id;
	
	@Column(name="name")
	private String name;
	
	@Column(name="email")
	private String email;
	
	@Column(name="mobileNumber")
	private String mobileNumber;

	public Integer getId() {
		return id;
	}

	public void setId(Integer id) {
		this.id = id;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	public String getMobileNumber() {
		return mobileNumber;
	}

	public void setMobileNumber(String mobileNumber) {
		this.mobileNumber = mobileNumber;
	}
	
}
	
</pre>


<h3>StudentService.java</h3>
<pre class="prettyprint">
package com.way2p.service;

import java.util.List;

import com.way2p.model.Student;

public interface StudentService {
	List<Student> findAllStudents();

	Student findById(int id);

	Student findByName(String name);

	Student findByMobileNumber(String number);

	void save(Student s);

	void deleteById(int id);

	
}

</pre>


<h3>StudentServiceImpl.java</h3>
<pre class="prettyprint">
package com.way2p.service;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.way2p.dao.StudentDao;
import com.way2p.model.Student;

@Service("studentService")
@Transactional
public class StudentServiceImpl implements StudentService {
	
	@Autowired
	private StudentDao dao;

	@Override
	public List&lt;Student> findAllStudents() {
		List&lt;Student> students=dao.findAllStudents();
		return students;
	}

	@Override
	public Student findById(int id) {
		return dao.findById(id);
	}

	@Override
	public Student findByName(String name) {
		return dao.findByName(name);
	}



	@Override
	public Student findByMobileNumber(String number) {
		return dao.findByMobileNumber(number);
	}

	@Override
	public void save(Student s) {
		dao.save(s);
		
	}

	@Override
	public void deleteById(int id) {
		dao.deleteById(id);
		
	}
}
</pre>


<h3>application.properties</h3>
<pre class="prettyprint">
server.port=8089
security.basic.enabled=false



jdbc.driverClassName = com.mysql.jdbc.Driver
jdbc.url = jdbc:mysql://localhost:3306/myAbc
jdbc.username = root
jdbc.password = 
hibernate.dialect = org.hibernate.dialect.MySQL5Dialect
hibernate.hbm2ddl.auto=create-drop
hibernate.show_sql = true
hibernate.format_sql = true
</pre>

<h3>db.sql</h3>
<pre class="prettyprint">
create table student(
id int(11)unsigned not null auto_increment,
name varchar(255) not null,
email varchar(255) not null,
mobileNumber varchar(20) not null,
primary key(id)
)
</pre>




<h3>index.jsp</h3>
<pre class="prettyprint">
&lt;%@ page language="java" contentType="text/html; charset=ISO-8859-1" pageEncoding="ISO-8859-1"%>
&lt;%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
&lt;%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
 
&lt;html>
 
&lt;head>
    &lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    &lt;title>&lt;/title>
    &lt;link href="&lt;c:url value='/static/css/bootstrap.min.css' />" rel="stylesheet">&lt;/link>
    &lt;script type="text/javascript" src="&lt;c:url value='/static/js/bootstrap.min.js' />">&lt;/script>
&lt;/head>
 
&lt;body>

&lt;div class="container">
  &lt;div>
  &lt;/div>
&lt;/div>
 ${success}
    
    &lt;div>Student Registration Form&lt;/div>
    &lt;form:form method="POST"  action="student" modelAttribute="student" >
    &lt;form:errors path="name"/>
    &lt;form:input type="text" path="name" id="name"/>
    &lt;form:errors path="email"/>          
    &lt;form:input type="text" path="email" id="email"  />
    &lt;form:errors path="mobileNumber"/>
    &lt;form:input type="text" path="mobileNumber" id="mobileNumber"  />
    &lt;input type="submit" value="Register"/>
    &lt;/form:form>
    &lt;br/>&lt;br/>
    &lt;h1>List of students&lt;/h1>
    &lt;table class="table table-bordered">
    &lt;tr>&lt;th>Name&lt;/th>&lt;th>Email&lt;/th>&lt;th>Mobile Number&lt;/th>&lt;/tr>
    &lt;c:forEach  items="${students}"  var="i" >
  &lt;tr>&lt;td>&lt;c:out value="${i.name}"/>&lt;/td>&lt;td>&lt;c:out value="${i.email}"/>&lt;/td>&lt;td>&lt;c:out value="${i.mobileNumber}"/> &lt;/td>&lt;/tr>
&lt;/c:forEach>
    
    &lt;/table>
    
    
&lt;/body>
&lt;/html>
</pre>

<h3>getStudent.jsp</h3>
<pre class="prettyprint">
&lt;%@ page language="java" contentType="text/html; charset=ISO-8859-1" pageEncoding="ISO-8859-1"%>
&lt;%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
&lt;%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
 
&lt;html>
 
&lt;head>
    &lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    &lt;title>&lt;/title>
    &lt;link href="&lt;c:url value='/static/css/bootstrap.min.css' />" rel="stylesheet">&lt;/link>
    &lt;script type="text/javascript" src="&lt;c:url value='/static/js/bootstrap.min.js' />">&lt;/script>
&lt;/head>
 
&lt;body>

&lt;div class="container">
 &lt;table class="table table-bordered">
 &lt;tr>&lt;th>Name&lt;/th>&lt;td>${student.name }&lt;/td>&lt;/tr>
 &lt;tr>&lt;th>Email&lt;/th>&lt;td>${student.email }&lt;/td>&lt;/tr>
 &lt;tr>&lt;th>Mobile Number&lt;/th>&lt;td>${student.mobileNumber }&lt;/td>&lt;/tr>
 &lt;/table>
&lt;/div>
    
&lt;/body>
&lt;/html>	
</pre>






</div>
</div>


<div class="panel panel-primary">
<div class="panel panel-heading">
Instruction to run app:-
</div>
<div class="panel panel-body">
to run this web application we need to run SpringMvcApp.java file.<br/>
we can use shortcut key Alt+Shift+x then j
</div>
</div>




<div class="panel panel-primary">
<div class="panel panel-heading">
sometime we need to stop the embedded tomcat server in spring boot
</div>
<div class="panel panel-body">
<img src="<?php echo base_url();?>static/images/spring-boot-embedded-tomcat-stop.png">
</div>
</div>

