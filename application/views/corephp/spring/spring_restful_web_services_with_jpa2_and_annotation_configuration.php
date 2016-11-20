<div class="panel panel-primary">
<div class="panel panel-heading">

</div>
<div class="panel panel-body">

<h3>pom.xml</h3>
<pre class="prettyprint">
&lt;project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 http://maven.apache.org/maven-v4_0_0.xsd">
	&lt;modelVersion>4.0.0&lt;/modelVersion>
	&lt;groupId>com.way2p&lt;/groupId>
	&lt;artifactId>A&lt;/artifactId>
	&lt;packaging>war&lt;/packaging>
	&lt;version>0.0.1-SNAPSHOT&lt;/version>
	&lt;name>A Maven Webapp&lt;/name>
	&lt;url>http://maven.apache.org&lt;/url>
	&lt;properties>
		&lt;springframework.version>4.3.0.RELEASE&lt;/springframework.version>
		&lt;hibernate.version>4.3.10.Final&lt;/hibernate.version>
		&lt;mysql.connector.version>5.1.31&lt;/mysql.connector.version>
	&lt;/properties>

	&lt;dependencies>

		&lt;!-- Spring -->
		&lt;dependency>
			&lt;groupId>org.springframework&lt;/groupId>
			&lt;artifactId>spring-core&lt;/artifactId>
			&lt;version>${springframework.version}&lt;/version>
		&lt;/dependency>
		&lt;dependency>
			&lt;groupId>org.springframework&lt;/groupId>
			&lt;artifactId>spring-web&lt;/artifactId>
			&lt;version>${springframework.version}&lt;/version>
		&lt;/dependency>
		&lt;dependency>
			&lt;groupId>org.springframework&lt;/groupId>
			&lt;artifactId>spring-webmvc&lt;/artifactId>
			&lt;version>${springframework.version}&lt;/version>
		&lt;/dependency>
		&lt;dependency>
			&lt;groupId>org.springframework&lt;/groupId>
			&lt;artifactId>spring-tx&lt;/artifactId>
			&lt;version>${springframework.version}&lt;/version>
		&lt;/dependency>
		&lt;dependency>
			&lt;groupId>org.springframework&lt;/groupId>
			&lt;artifactId>spring-orm&lt;/artifactId>
			&lt;version>${springframework.version}&lt;/version>
		&lt;/dependency>

		&lt;!-- Hibernate -->
		&lt;dependency>
			&lt;groupId>org.hibernate&lt;/groupId>
			&lt;artifactId>hibernate-core&lt;/artifactId>
			&lt;version>${hibernate.version}&lt;/version>
		&lt;/dependency>
		&lt;dependency>
			&lt;groupId>org.hibernate&lt;/groupId>
			&lt;artifactId>hibernate-entitymanager&lt;/artifactId>
			&lt;version>${hibernate.version}&lt;/version>
		&lt;/dependency>

		&lt;!-- jsr303 validation -->
		&lt;dependency>
			&lt;groupId>javax.validation&lt;/groupId>
			&lt;artifactId>validation-api&lt;/artifactId>
			&lt;version>1.1.0.Final&lt;/version>
		&lt;/dependency>


		&lt;dependency>
			&lt;groupId>org.hibernate&lt;/groupId>
			&lt;artifactId>hibernate-validator&lt;/artifactId>
			&lt;version>5.1.3.Final&lt;/version>
		&lt;/dependency>

		&lt;!-- MySQL -->
		&lt;dependency>
			&lt;groupId>mysql&lt;/groupId>
			&lt;artifactId>mysql-connector-java&lt;/artifactId>
			&lt;version>${mysql.connector.version}&lt;/version>
		&lt;/dependency>

		&lt;!-- Servlet+JSP+JSTL -->
		&lt;dependency>
			&lt;groupId>javax.servlet&lt;/groupId>
			&lt;artifactId>javax.servlet-api&lt;/artifactId>
			&lt;version>3.1.0&lt;/version>
		&lt;/dependency>

		&lt;dependency>
			&lt;groupId>javax.servlet.jsp&lt;/groupId>
			&lt;artifactId>javax.servlet.jsp-api&lt;/artifactId>
			&lt;version>2.3.1&lt;/version>
		&lt;/dependency>

		&lt;dependency>
			&lt;groupId>javax.servlet&lt;/groupId>
			&lt;artifactId>jstl&lt;/artifactId>
			&lt;version>1.2&lt;/version>
		&lt;/dependency>
		
		&lt;dependency>
			&lt;groupId>com.fasterxml.jackson.core&lt;/groupId>
			&lt;artifactId>jackson-databind&lt;/artifactId>
			&lt;version>2.8.2&lt;/version>
		&lt;/dependency>

	&lt;/dependencies>
	&lt;build>
		&lt;finalName>A&lt;/finalName>
	&lt;/build>
&lt;/project>	
</pre>

<h3>AppConfig.java</h3>
<pre class="prettyprint">
package com.way2p.config;

import org.springframework.context.MessageSource;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.ComponentScan;
import org.springframework.context.annotation.Configuration;
import org.springframework.context.annotation.Import;
import org.springframework.context.support.ResourceBundleMessageSource;
import org.springframework.format.FormatterRegistry;
import org.springframework.web.servlet.config.annotation.EnableWebMvc;
import org.springframework.web.servlet.config.annotation.PathMatchConfigurer;
import org.springframework.web.servlet.config.annotation.ResourceHandlerRegistry;
import org.springframework.web.servlet.config.annotation.ViewResolverRegistry;
import org.springframework.web.servlet.config.annotation.WebMvcConfigurerAdapter;
import org.springframework.web.servlet.view.InternalResourceViewResolver;
import org.springframework.web.servlet.view.JstlView;

@Configuration
@Import(JpaConfig.class)
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
     * Configure ResourceHandlers to serve static resources like CSS/ Javascript etc...
     */
    @Override
    public void addResourceHandlers(ResourceHandlerRegistry registry) {
        registry.addResourceHandler("/static/**").addResourceLocations("/static/");
    }
     
   
     
 
    /**
     * Configure MessageSource to lookup any validation/error message in internationalized property files
     */
    @Bean
    public MessageSource messageSource() {
        ResourceBundleMessageSource messageSource = new ResourceBundleMessageSource();
        messageSource.setBasename("messages");
        return messageSource;
    }
     
    /**Optional. It's only required when handling '.' in @PathVariables which otherwise ignore everything after last '.' in @PathVaidables argument.
     * It's a known bug in Spring [https://jira.spring.io/browse/SPR-6164], still present in Spring 4.3.0.
     * This is a workaround for this issue.
     */
     
    @Override
    public void configurePathMatch(PathMatchConfigurer matcher) {
        matcher.setUseRegisteredSuffixPatternMatch(true);
    }

}
	
</pre>


<h3>AppInitializer.java</h3>
<pre class="prettyprint">
package com.way2p.config;

import org.springframework.web.servlet.support.AbstractAnnotationConfigDispatcherServletInitializer;

public class AppInitializer extends AbstractAnnotationConfigDispatcherServletInitializer {

	@Override
	protected Class&lt;?>[] getRootConfigClasses() {
		return new Class[] { AppConfig.class };
	}
 
	@Override
	protected Class&lt;?>[] getServletConfigClasses() {
		return null;
	}
 
	@Override
	protected String[] getServletMappings() {
		return new String[] { "/" };
	}

}
	
</pre>


<h3>JpaConfig.java</h3>
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
public class JpaConfig {
	
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



<h3>StudentController.java</h3>
<pre class="prettyprint">
package com.way2p.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpHeaders;
import org.springframework.http.HttpStatus;
import org.springframework.http.MediaType;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.util.UriComponentsBuilder;

import com.way2p.model.Student;
import com.way2p.service.StudentService;

@RestController
public class StudentController {

	@Autowired
	private StudentService service;

	@RequestMapping(value = "/students", method = RequestMethod.GET)
	public ResponseEntity&lt;List&lt;Student>> getStudents() {

		List&lt;Student> listOfStudents = service.getAllStudent();
		if (listOfStudents.isEmpty()) {
			return new ResponseEntity&lt;List&lt;Student>>(HttpStatus.NO_CONTENT);
		}
		return new ResponseEntity&lt;List&lt;Student>>(listOfStudents, HttpStatus.OK);
	}

	@RequestMapping(value = "/student/{id}", method = RequestMethod.GET, produces = MediaType.APPLICATION_JSON_VALUE)
	public ResponseEntity&lt;Student> getStudentById(@PathVariable int id) {
		System.out.println("Fetching Student with id " + id);
		Student student = service.getStudent(id);
		if (student == null) {
			System.out.println("Student with id " + id + " not found");
			return new ResponseEntity&lt;Student>(HttpStatus.NOT_FOUND);
		}
		return new ResponseEntity&lt;Student>(student, HttpStatus.OK);
	}

	@RequestMapping(value = "/student", method = RequestMethod.POST)
	public ResponseEntity&lt;Void> addStudent(@RequestBody Student student,
			UriComponentsBuilder ucBuilder) {
		service.addStudent(student);
		HttpHeaders headers = new HttpHeaders();
		headers.setLocation(ucBuilder.path("/student/{id}")
				.buildAndExpand(student.getId()).toUri());
		return new ResponseEntity&lt;Void>(headers, HttpStatus.CREATED);
	}

	@RequestMapping(value = "/student/{id}", method = RequestMethod.PUT)
	public ResponseEntity&lt;Student> updateStudent(@PathVariable("id") int id,
			@RequestBody Student student) {
		System.out.println("Updating Student " + id);

		Student s = service.getStudent(id);

		if (s == null) {
			System.out.println("Student with id " + id + " not found");
			return new ResponseEntity&lt;Student>(HttpStatus.NOT_FOUND);
		}

		s.setName(student.getName());

		service.updateStudent(s);
		return new ResponseEntity&lt;Student>(s, HttpStatus.OK);

	}

	@RequestMapping(value = "/student/{id}", method = RequestMethod.DELETE)
	public ResponseEntity&lt;Student> deleteStudent(@PathVariable("id") int id) {
		System.out.println("Fetching & Deleting Student with id " + id);

		Student student = service.getStudent(id);
		if (student == null) {
			System.out.println("Unable to delete. Student with id " + id
					+ " not found");
			return new ResponseEntity&lt;Student>(HttpStatus.NOT_FOUND);
		}

		service.deleteStudent(id);
		return new ResponseEntity&lt;Student>(HttpStatus.NO_CONTENT);
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
	
	List&lt;Student> getAllStudent();
	
	Student getStudent(int id);
	
	void addStudent(Student s);
	
	void deleteStudent(int id);
	
	void updateStudent(Student student);

}
	
</pre>


<h3>StudentDaoImpl.java</h3>
<pre class="prettyprint">
package com.way2p.dao;

import java.util.List;

import org.springframework.stereotype.Repository;

import com.way2p.model.Student;


@Repository("studentDao")
public class StudentDaoImpl extends AbstractDao&lt;Integer, Student> implements StudentDao{

	@SuppressWarnings("unchecked")
	public List&lt;Student> getAllStudent() {
		List&lt;Student> students = getEntityManager()
                .createQuery("SELECT s FROM Student s ORDER BY s.name ASC")
                .getResultList();
        return students;
	}

	public Student getStudent(int id) {
		 Student student = getByKey(id);
		 return student;
	}

	public void addStudent(Student s) {
		persist(s);
	}

	public void deleteStudent(int id) {
		Student s = (Student) getEntityManager()
                .createQuery("SELECT s FROM Student s WHERE s.id LIKE :id")
                .setParameter("id", id)
                .getSingleResult();
        delete(s);
	}

	public void updateStudent(Student student) {
		update(student);
	}

}
	
</pre>


<h3>Student.java</h3>
<pre class="prettyprint">
package com.way2p.model;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name="student")
public class Student {
	
	Student(){
		
	}
    @Id
    @GeneratedValue
	private int id;
    
    @Column(name="name")
	private String name;

	public Student(int id, String name) {
		super();
		this.id = id;
		this.name = name;
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

}
	
</pre>


<h3>StudentService.java</h3>
<pre class="prettyprint">
package com.way2p.service;

import java.util.List;

import com.way2p.model.Student;

public interface StudentService {

	List&lt;Student> getAllStudent();

	Student getStudent(int id);

	void addStudent(Student s);

	void deleteStudent(int id);

	void updateStudent(Student student);

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
	StudentDao dao;

	public List&lt;Student> getAllStudent() {
		List&lt;Student> students = dao.getAllStudent();
		return students;
	}

	public Student getStudent(int id) {
		Student student = dao.getStudent(id);
		return student;
	}

	public void addStudent(Student s) {
		dao.addStudent(s);
	}

	public void deleteStudent(int id) {
		dao.deleteStudent(id);
	}

	public void updateStudent(Student student) {
		dao.updateStudent(student);
	}

}
	
</pre>


<h3>application.properties</h3>
<pre class="prettyprint">
jdbc.driverClassName = com.mysql.jdbc.Driver
jdbc.url = jdbc:mysql://localhost:3306/student
jdbc.username = root
jdbc.password = 
hibernate.dialect = org.hibernate.dialect.MySQL5Dialect
hibernate.hbm2ddl.auto=create-drop
hibernate.show_sql = true
hibernate.format_sql = true	
</pre>
<hr/>
<h3>post request with postman client</h3>
<img src="<?php echo base_url();?>static/images/post-request-with-post-man-client.jpg" class="img-responsive">
<hr/>
<h3>get request with postman client</h3>
<img src="<?php echo base_url();?>static/images/get-request-with-post-man-client.jpg" class="img-responsive">
<hr/>
<h3>put request with postman client</h3>
<img src="<?php echo base_url();?>static/images/put-request-with-post-man-client.jpg" class="img-responsive">
<hr/>
<h3>get request with postman client</h3>
<img src="<?php echo base_url();?>static/images/get-request-with-post-man-client-2.jpg" class="img-responsive">
<hr/>
<h3>delete request with postman client</h3>
<img src="<?php echo base_url();?>static/images/delete-request-with-post-man-client.jpg" class="img-responsive">
<hr/>
</div>
</div>