<div class="panel panel-primary">
<div class="panel panel-heading">
Basic App
</div>
<div class="panel panel-body">

<h3>structure</h3>
<img src="<?php echo base_url();?>static/images/spring-boot-app-1-with-spring-mvc.png">
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

    &lt;groupId>org.apache.tomcat.embed&lt;/groupId>

    &lt;artifactId>tomcat-embed-jasper&lt;/artifactId>

    &lt;scope>provided&lt;/scope>

&lt;/dependency>

&lt;dependency>

    &lt;groupId>javax.servlet&lt;/groupId>

    &lt;artifactId>jstl&lt;/artifactId>

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
package com.way2p;

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
package com.way2p;

import org.springframework.context.MessageSource;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.ComponentScan;
import org.springframework.context.support.ResourceBundleMessageSource;
import org.springframework.stereotype.Controller;
import org.springframework.web.servlet.config.annotation.EnableWebMvc;
import org.springframework.web.servlet.config.annotation.ResourceHandlerRegistry;
import org.springframework.web.servlet.config.annotation.ViewResolverRegistry;
import org.springframework.web.servlet.config.annotation.WebMvcConfigurerAdapter;
import org.springframework.web.servlet.view.InternalResourceViewResolver;
import org.springframework.web.servlet.view.JstlView;

@Controller
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
   * Configure ResourceHandlers to serve static resources like CSS/ Javascript
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


<h3>PageController.java</h3>
<pre class="prettyprint">
package com.way2p;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class PageController {
  
  @RequestMapping("/")
  public String index(){
    return "index";
  }

}
</pre>


<h3>index.jsp</h3>
<pre class="prettyprint">
&lt;html>
&lt;head>

&lt;/head>
&lt;body>
Jsp Page
&lt;/body>
&lt;/html>
</pre>



<h3>application.properties</h3>
<pre class="prettyprint">
server.port=8080
security.basic.enabled=false
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

