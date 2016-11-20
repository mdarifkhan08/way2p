<div class="panel panel-primary">
<div class="panel panel-heading">

</div>
<div class="panel panel-body">
<h3>servlet-config.xml</h3>
            <pre class="prettyprint">
 <strong>
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;beans xmlns="http://www.springframework.org/schema/beans"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:context="http://www.springframework.org/schema/context"
    xmlns:mvc="http://www.springframework.org/schema/mvc"
    xsi:schemaLocation="http://www.springframework.org/schema/beans http://www.springframework.org/schema/beans/spring-beans-3.2.xsd
        http://www.springframework.org/schema/context http://www.springframework.org/schema/context/spring-context-4.0.xsd
        http://www.springframework.org/schema/mvc http://www.springframework.org/schema/mvc/spring-mvc-4.0.xsd">




    &lt;mvc:annotation-driven />
    &lt;context:component-scan
        base-package="com.itm.controller" />
    &lt;bean id="viewResolver"
        class="org.springframework.web.servlet.view.InternalResourceViewResolver">
        &lt;property name="prefix" value="/WEB-INF/pages/" />
        &lt;property name="suffix" value=".jsp" />

    &lt;/bean>

    &lt;bean id="messageSource"
        class="org.springframework.context.support.ResourceBundleMessageSource">
        &lt;property name="basenames">
            &lt;list>
                &lt;value>message/messages&lt;/value>

            &lt;/list>
        &lt;/property>
    &lt;/bean>



&lt;/beans> 

</strong>     
            </pre>

            <h3>datasource-tx-jpa.xml</h3>
            <pre class="prettyprint">
<strong>
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;beans xmlns="http://www.springframework.org/schema/beans"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:context="http://www.springframework.org/schema/context"
    xmlns:jdbc="http://www.springframework.org/schema/jdbc" xmlns:jpa="http://www.springframework.org/schema/data/jpa"
    xmlns:tx="http://www.springframework.org/schema/tx"
    xsi:schemaLocation="http://www.springframework.org/schema/beans http://www.springframework.org/schema/beans/spring-beans-3.1.xsd
        http://www.springframework.org/schema/context http://www.springframework.org/schema/context/spring-context-3.1.xsd
        http://www.springframework.org/schema/jdbc http://www.springframework.org/schema/jdbc/spring-jdbc-3.1.xsd
        http://www.springframework.org/schema/data/jpa http://www.springframework.org/schema/data/jpa/spring-jpa-1.0.xsd
        http://www.springframework.org/schema/tx http://www.springframework.org/schema/tx/spring-tx-3.1.xsd">

    &lt;!-- H2 is an opensource lightweight Java database which is ships with JBoss 
        AS distribution. Whilst it's not recommended for production usage, it can 
        be pretty useful for development/test with a more advanced configuration. 
        This tutorial shows how. H2 database can be embedded in Java applications 
        or run in the client-server mode. Depending on how the database is executed, 
        you will use a different JDBC connection URL for accessing it: -->


    &lt;jdbc:embedded-database id="dataSource" type="H2">
        &lt;jdbc:script location="classpath:schema.sql" />
        &lt;jdbc:script location="classpath:test-data.sql" />
    &lt;/jdbc:embedded-database>

    &lt;bean id="transactionManager" class="org.springframework.orm.jpa.JpaTransactionManager">
        &lt;property name="entityManagerFactory" ref="emf" />
    &lt;/bean>

    &lt;tx:annotation-driven transaction-manager="transactionManager" />

    &lt;bean id="emf"
        class="org.springframework.orm.jpa.LocalContainerEntityManagerFactoryBean">
        &lt;property name="dataSource" ref="dataSource" />
        &lt;property name="jpaVendorAdapter">
            &lt;bean class="org.springframework.orm.jpa.vendor.HibernateJpaVendorAdapter" />
        &lt;/property>
        &lt;property name="packagesToScan" value="com.itm.model" />
        &lt;property name="jpaProperties">
            &lt;props>
                &lt;prop key="hibernate.dialect">org.hibernate.dialect.H2Dialect&lt;/prop>
                &lt;prop key="hibernate.max_fetch_depth">3&lt;/prop>
                &lt;prop key="hibernate.jdbc.fetch_size">50&lt;/prop>
                &lt;prop key="hibernate.jdbc.batch_size">10&lt;/prop>
                &lt;prop key="hibernate.show_sql">true&lt;/prop>
            &lt;/props>
        &lt;/property>
    &lt;/bean>

    &lt;context:annotation-config />

    &lt;jpa:repositories base-package="com.itm.repository"
        entity-manager-factory-ref="emf" transaction-manager-ref="transactionManager" />
    

&lt;/beans>

</strong>
            </pre>
            
            <h3>jpa-app-context.xml</h3>
            <pre class="prettyprint">
<strong>
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;beans xmlns="http://www.springframework.org/schema/beans"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xmlns:context="http://www.springframework.org/schema/context"
    xsi:schemaLocation="http://www.springframework.org/schema/beans http://www.springframework.org/schema/beans/spring-beans-3.1.xsd
        http://www.springframework.org/schema/context http://www.springframework.org/schema/context/spring-context-3.1.xsd">

    &lt;import resource="classpath:datasource-tx-jpa.xml"/>
    
    &lt;context:component-scan base-package="com.itm.service"/>

&lt;/beans>

</strong>
            </pre>
            
            <h3>index.jsp</h3>
            <pre class="prettyprint">
<strong>
 &lt;%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
&lt;html xmlns="http://www.w3.org/1999/xhtml">
&lt;head>
&lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
&lt;title>Home page&lt;/title>
&lt;/head>
&lt;body>
    &lt;h1>Home page&lt;/h1>
    &lt;p>
        Welcome to "Shop application".&lt;br /> &lt;i>$&#123;message}&lt;/i>&lt;br /> &lt;a
            href="$&#123;pageContext.request.contextPath}/shop/create.html">Create
            a new shop&lt;/a>&lt;br /> &lt;a
            href="$&#123;pageContext.request.contextPath}/shop/list.html">View all
            shops&lt;/a>&lt;br />
    &lt;/p>
&lt;/body>
&lt;/html>

</strong>   
            </pre>
            
            <h3>shop-edit.jsp</h3>
            <pre class="prettyprint">
<strong>
&lt;%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
&lt;%@taglib uri="http://www.springframework.org/tags/form" prefix="form"%>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
&lt;html xmlns="http://www.w3.org/1999/xhtml">
&lt;head>
&lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
&lt;title>Edit Shop page&lt;/title>
&lt;/head>
&lt;body>
    &lt;h1>Edit Shop page&lt;/h1>
    &lt;form:form method="POST" commandName="shop"
        action="$&#123;pageContext.request.contextPath}/shop/edit/$&#123;shop.id}.html">
        &lt;table>
            &lt;tbody>
                &lt;tr>
                    &lt;td>Shop name:&lt;/td>
                    &lt;td>&lt;form:input path="name" />&lt;/td>
                    &lt;td>&lt;form:errors path="name" cssStyle="color: red;" />&lt;/td>
                &lt;/tr>
                &lt;tr>
                    &lt;td>Employees number:&lt;/td>
                    &lt;td>&lt;form:input path="emplNumber" />&lt;/td>
                    &lt;td>&lt;form:errors path="emplNumber" cssStyle="color: red;" />&lt;/td>
                &lt;/tr>
                &lt;tr>
                    &lt;td>&lt;input type="submit" value="Create" />&lt;/td>
                    &lt;td>&lt;/td>
                    &lt;td>&lt;/td>
                &lt;/tr>
            &lt;/tbody>
        &lt;/table>
    &lt;/form:form>
    &lt;a href="$&#123;pageContext.request.contextPath}/">Home page&lt;/a>
&lt;/body>
&lt;/html>

</strong>
            </pre>
            
            <h3>shop-list.jsp</h3>
            <pre class="prettyprint">
<strong>
&lt;%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
&lt;%@taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
&lt;html xmlns="http://www.w3.org/1999/xhtml">
&lt;head>
&lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
&lt;title>Shop List page&lt;/title>
&lt;/head>
&lt;body>
    &lt;h1>Shop List page&lt;/h1>
    &lt;table style="text-align: center;" border="1px" cellpadding="0"
        cellspacing="0">
        &lt;thead>
            &lt;tr>
                &lt;th width="25px">id&lt;/th>
                &lt;th width="150px">company&lt;/th>
                &lt;th width="25px">employees&lt;/th>
                &lt;th width="50px">actions&lt;/th>
            &lt;/tr>
        &lt;/thead>
        &lt;tbody>
            &lt;c:forEach var="shop" items="$&#123;shopList}">
                &lt;tr>
                    &lt;td>&#36;&#123;shop.id}&lt;/td>
                    &lt;td>&#36;&#123;shop.name}&lt;/td>
                    &lt;td>&#36;&#123;shop.emplNumber}&lt;/td>
                    &lt;td>&lt;a
                        href="$&#123;pageContext.request.contextPath}/shop/edit/$&#123;shop.id}.html">Edit&lt;/a>&lt;br />
                        &lt;a
                        href="$&#123;pageContext.request.contextPath}/shop/delete/$&#123;shop.id}.html">Delete&lt;/a>&lt;br />
                    &lt;/td>
                &lt;/tr>
            &lt;/c:forEach>
        &lt;/tbody>
    &lt;/table>
    &lt;a href="$&#123;pageContext.request.contextPath}/">Home page&lt;/a>
&lt;/body>
&lt;/html>
</strong>
             </pre>

            <h3>shop-new.jsp</h3>
            <pre class="prettyprint">
<strong>
&lt;%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
&lt;%@taglib uri="http://www.springframework.org/tags/form" prefix="form"%>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
&lt;html xmlns="http://www.w3.org/1999/xhtml">
&lt;head>
&lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
&lt;title>New Shop page&lt;/title>
&lt;/head>
&lt;body>
    &lt;h1>New Shop page&lt;/h1>
    &lt;form:form method="POST" commandName="shop"
        action="$&#123;pageContext.request.contextPath}/shop/create.html">
        &lt;table>
            &lt;tbody>
                &lt;tr>
                    &lt;td>Shop name:&lt;/td>
                    &lt;td>&lt;form:input path="name" />&lt;/td>
                    &lt;td>&lt;form:errors path="name" cssStyle="color: red;" />&lt;/td>
                &lt;/tr>
                &lt;tr>
                    &lt;td>Employees number:&lt;/td>
                    &lt;td>&lt;form:input path="emplNumber" />&lt;/td>
                    &lt;td>&lt;form:errors path="emplNumber" cssStyle="color: red;" />&lt;/td>
                &lt;/tr>
                &lt;tr>
                    &lt;td>&lt;input type="submit" value="Create" />&lt;/td>
                    &lt;td>&lt;/td>
                    &lt;td>&lt;/td>
                &lt;/tr>
            &lt;/tbody>
        &lt;/table>
    &lt;/form:form>
    &lt;a href="$&#123;pageContext.request.contextPath}/">Home page&lt;/a>
&lt;/body>
&lt;/html>

</strong>
            </pre>

            <h3>root-context.xml</h3>
            <pre class="prettyprint">
<strong>

&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;beans xmlns="http://www.springframework.org/schema/beans"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:context="http://www.springframework.org/schema/context"
    xsi:schemaLocation="http://www.springframework.org/schema/beans http://www.springframework.org/schema/beans/spring-beans-3.1.xsd
                        http://www.springframework.org/schema/context http://www.springframework.org/schema/context/spring-context-3.1.xsd">

    &lt;import resource="classpath:datasource-tx-jpa.xml" />

    &lt;context:component-scan base-package="com.itm" />

    
&lt;/beans>
</strong>
            </pre>
            
            <h3>web.xml</h3>
            <pre class="prettyprint">
<strong>
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;web-app version="3.0" xmlns="http://java.sun.com/xml/ns/javaee" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:schemaLocation="http://java.sun.com/xml/ns/javaee http://java.sun.com/xml/ns/javaee/web-app_3_0.xsd">

    


    &lt;!-- Creates the Spring Container shared by all Servlets and Filters -->
    &lt;listener>
        &lt;listener-class>org.springframework.web.context.ContextLoaderListener&lt;/listener-class>
    &lt;/listener>
    &lt;!-- Exposes the request to the current thread.
         This listener is mainly for use with third-party servlets, e.g. the JSF FacesServlet. -->
    

    &lt;!-- Spring params -->
    &lt;context-param>
        &lt;param-name>contextConfigLocation&lt;/param-name>
        &lt;param-value>/WEB-INF/spring/root-context.xml&lt;/param-value>
    &lt;/context-param>

    &lt;!-- The front controller of this Spring Web application, responsible for handling all application requests -->
    &lt;!-- Spring Dispatcher servlet -->
  &lt;servlet>
    &lt;servlet-name>springDispatcherServlet&lt;/servlet-name>
    &lt;servlet-class>org.springframework.web.servlet.DispatcherServlet&lt;/servlet-class>
    &lt;init-param>
      &lt;param-name>contextConfigLocation&lt;/param-name>
      &lt;param-value>classpath:spring/servlet-config.xml&lt;/param-value>
    &lt;/init-param>
    &lt;load-on-startup>1&lt;/load-on-startup>
  &lt;/servlet>

  &lt;!-- Map all requests to the DispatcherServlet for handling -->
  
  &lt;servlet-mapping>
    &lt;servlet-name>springDispatcherServlet&lt;/servlet-name>
    &lt;url-pattern>/&lt;/url-pattern>
  &lt;/servlet-mapping>
  
&lt;/web-app>  

</strong>
             </pre>

            <h3>pom.xml</h3>
            <pre class="prettyprint">
<strong>
&lt;project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 http://maven.apache.org/maven-v4_0_0.xsd">
    &lt;modelVersion>4.0.0&lt;/modelVersion>
    &lt;groupId>com.itm&lt;/groupId>
    &lt;artifactId>SpringData-Jpa-Shop&lt;/artifactId>
    &lt;packaging>war&lt;/packaging>
    &lt;version>0.0.1-SNAPSHOT&lt;/version>
    &lt;name>SpringData-Jpa-Shop Maven Webapp&lt;/name>
    &lt;url>http://maven.apache.org&lt;/url>
    &lt;dependencies>

        
        &lt;dependency>
            &lt;groupId>org.springframework.data&lt;/groupId>
            &lt;artifactId>spring-data-jpa&lt;/artifactId>
            &lt;version>1.5.2.RELEASE&lt;/version>
        &lt;/dependency>

        &lt;dependency>
            &lt;groupId>javax.servlet&lt;/groupId>
            &lt;artifactId>javax.servlet-api&lt;/artifactId>
            &lt;version>3.0.1&lt;/version>
            &lt;scope>provided&lt;/scope>
        &lt;/dependency>
        &lt;!-- N2 database -->
        &lt;dependency>
            &lt;groupId>com.h2database&lt;/groupId>
            &lt;artifactId>h2&lt;/artifactId>
            &lt;version>1.4.177&lt;/version>
        &lt;/dependency>

        &lt;!-- Others -->
        &lt;dependency>
            &lt;groupId>com.google.guava&lt;/groupId>
            &lt;artifactId>guava&lt;/artifactId>
            &lt;version>10.0.1&lt;/version>
        &lt;/dependency>
        &lt;dependency>
            &lt;groupId>javax.servlet.jsp&lt;/groupId>
            &lt;artifactId>jsp-api&lt;/artifactId>
            &lt;version>2.2&lt;/version>
            &lt;scope>provided&lt;/scope>
        &lt;/dependency>

        &lt;dependency>
            &lt;groupId>javax.el&lt;/groupId>
            &lt;artifactId>javax.el-api&lt;/artifactId>
            &lt;version>2.2.4&lt;/version>
            &lt;scope>provided&lt;/scope>
        &lt;/dependency>

        &lt;dependency>
            &lt;groupId>javax.servlet&lt;/groupId>
            &lt;artifactId>jstl&lt;/artifactId>
            &lt;version>1.2&lt;/version>
        &lt;/dependency>

        &lt;!-- Spring MVC -->

        &lt;dependency>
            &lt;groupId>org.springframework&lt;/groupId>
            &lt;artifactId>spring-context&lt;/artifactId>
            &lt;version>4.0.3.RELEASE&lt;/version>
        &lt;/dependency>

        &lt;dependency>
            &lt;groupId>org.springframework&lt;/groupId>
            &lt;artifactId>spring-tx&lt;/artifactId>
            &lt;version>4.0.3.RELEASE&lt;/version>
        &lt;/dependency>



        &lt;dependency>
            &lt;groupId>org.springframework&lt;/groupId>
            &lt;artifactId>spring-webmvc&lt;/artifactId>
            &lt;version>4.0.3.RELEASE&lt;/version>
        &lt;/dependency>

        &lt;!-- Spring Hibernate -->

        &lt;dependency>
            &lt;groupId>org.springframework&lt;/groupId>
            &lt;artifactId>spring-orm&lt;/artifactId>
            &lt;version>4.0.3.RELEASE&lt;/version>
        &lt;/dependency>


        &lt;dependency>
            &lt;groupId>org.hibernate&lt;/groupId>
            &lt;artifactId>hibernate-entitymanager&lt;/artifactId>
            &lt;version>3.6.9.Final&lt;/version>
        &lt;/dependency>

        &lt;dependency>
            &lt;groupId>org.hibernate&lt;/groupId>
            &lt;artifactId>hibernate-core&lt;/artifactId>
            &lt;version>3.6.9.Final&lt;/version>
        &lt;/dependency>


        &lt;dependency>
            &lt;groupId>org.hibernate&lt;/groupId>
            &lt;artifactId>hibernate-validator&lt;/artifactId>
            &lt;version>5.1.3.Final&lt;/version>
        &lt;/dependency>

        &lt;dependency>
            &lt;groupId>org.springframework&lt;/groupId>
            &lt;artifactId>spring-tx&lt;/artifactId>
            &lt;version>4.0.3.RELEASE&lt;/version>
        &lt;/dependency>


        &lt;!-- SLF4J -->

        &lt;dependency>
            &lt;groupId>org.slf4j&lt;/groupId>
            &lt;artifactId>slf4j-api&lt;/artifactId>
            &lt;version>1.7.5&lt;/version>
        &lt;/dependency>

        &lt;!-- logback -->
        &lt;dependency>
            &lt;groupId>ch.qos.logback&lt;/groupId>
            &lt;artifactId>logback-classic&lt;/artifactId>
            &lt;version>1.1.2&lt;/version>
        &lt;/dependency>

        &lt;!-- log4jdbc -->
        &lt;dependency>
            &lt;groupId>com.googlecode.log4jdbc&lt;/groupId>
            &lt;artifactId>log4jdbc&lt;/artifactId>
            &lt;version>1.2&lt;/version>
            &lt;scope>runtime&lt;/scope>
        &lt;/dependency>


    &lt;/dependencies>
    &lt;build>
        &lt;finalName>SpringData-Jpa-Shop&lt;/finalName>
    &lt;/build>
&lt;/project>

</strong>
            </pre>

            <h3>NavigationController.java</h3>
            <pre class="prettyprint">
<strong>
package com.itm.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;

@Controller
public class NavigationController &#123;

    @RequestMapping(value=&#123;"/", "index"}, method=RequestMethod.GET)
    public ModelAndView index() &#123;
        return new ModelAndView("index");
    }
    
}


</strong>
            </pre>

            <h3>ShopController.java</h3>
            <pre class="prettyprint">
<strong>
package com.itm.controller;

import java.util.List;

import javax.validation.Valid;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;
import org.springframework.web.servlet.mvc.support.RedirectAttributes;

import com.itm.exception.ShopNotFound;
import com.itm.model.Shop;
import com.itm.service.ShopService;

@Controller
@RequestMapping(value="/shop")
public class ShopController &#123;
    
    @Autowired
    private ShopService shopService;
    

    
    

    @RequestMapping(value="/create", method=RequestMethod.GET)
    public ModelAndView newShopPage() &#123;
        ModelAndView mav = new ModelAndView("shop-new", "shop", new Shop());
        return mav;
    }
    
    @RequestMapping(value="/create", method=RequestMethod.POST)
    public ModelAndView createNewShop(@ModelAttribute @Valid Shop shop,
            BindingResult result,
            final RedirectAttributes redirectAttributes) &#123;
        
        if (result.hasErrors())
            return new ModelAndView("shop-new");
        
        ModelAndView mav = new ModelAndView();
        String message = "New shop "+shop.getName()+" was successfully created.";
        
        shopService.create(shop);
        mav.setViewName("redirect:/index.html");
                
        redirectAttributes.addFlashAttribute("message", message);   
        return mav;     
    }
    
    @RequestMapping(value="/list", method=RequestMethod.GET)
    public ModelAndView shopListPage() &#123;
        ModelAndView mav = new ModelAndView("shop-list");
        List&lt;Shop> shopList = shopService.findAll();
        mav.addObject("shopList", shopList);
        return mav;
    }
    
    @RequestMapping(value="/edit/&#123;id}", method=RequestMethod.GET)
    public ModelAndView editShopPage(@PathVariable Integer id) &#123;
        ModelAndView mav = new ModelAndView("shop-edit");
        Shop shop = shopService.findById(id);
        mav.addObject("shop", shop);
        return mav;
    }
    
    @RequestMapping(value="/edit/&#123;id}", method=RequestMethod.POST)
    public ModelAndView editShop(@ModelAttribute @Valid Shop shop,
            BindingResult result,
            @PathVariable Integer id,
            final RedirectAttributes redirectAttributes) throws ShopNotFound &#123;
        
        if (result.hasErrors())
            return new ModelAndView("shop-edit");
        
        ModelAndView mav = new ModelAndView("redirect:/index.html");
        String message = "Shop was successfully updated.";

        shopService.update(shop);
        
        redirectAttributes.addFlashAttribute("message", message);   
        return mav;
    }
    
    @RequestMapping(value="/delete/&#123;id}", method=RequestMethod.GET)
    public ModelAndView deleteShop(@PathVariable Integer id,
            final RedirectAttributes redirectAttributes) throws ShopNotFound &#123;
        
        ModelAndView mav = new ModelAndView("redirect:/index.html");        
        
        Shop shop = shopService.delete(id);
        String message = "The shop "+shop.getName()+" was successfully deleted.";
        
        redirectAttributes.addFlashAttribute("message", message);
        return mav;
    }
    
}


</strong>
             </pre>




            <h3>ShopNotFound.java</h3>
            <pre class="prettyprint">
<strong>

package com.itm.exception;

public class ShopNotFound extends Exception &#123;

}
    
</strong>
            </pre>





            <h3>shop.java</h3>
            <pre class="prettyprint">
<strong>
package com.itm.model;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name = "shops")
public class Shop &#123;

    @Id
    @GeneratedValue
    private Integer id;

    private String name;

    @Column(name = "employees_number")
    private Integer emplNumber;

    public Integer getId() &#123;
        return id;
    }

    public void setId(Integer id) &#123;
        this.id = id;
    }

    public String getName() &#123;
        return name;
    }

    public void setName(String name) &#123;
        this.name = name;
    }

    public Integer getEmplNumber() &#123;
        return emplNumber;
    }

    public void setEmplNumber(Integer emplNumber) &#123;
        this.emplNumber = emplNumber;
    }
}
    

    
</strong>
            </pre>






                   <h3>ShopRepository.java</h3>
            <pre class="prettyprint">
<strong>
package com.itm.repository;

import org.springframework.data.jpa.repository.JpaRepository;

import com.itm.model.Shop;

public interface ShopRepository extends JpaRepository&lt;Shop, Integer> &#123;

}

    
</strong>
            </pre>







       <h3>ShopService.java</h3>
            <pre class="prettyprint">
<strong>
package com.itm.service;

import java.util.List;

import com.itm.exception.ShopNotFound;
import com.itm.model.Shop;

public interface ShopService &#123;
    
    public Shop create(Shop shop);
    public Shop delete(int id) throws ShopNotFound;
    public List<Shop> findAll();
    public Shop update(Shop shop) throws ShopNotFound;
    public Shop findById(int id);

}

    
</strong>
            </pre>

       <h3>ShopServiceImpl.java</h3>
            <pre class="prettyprint">
<strong>
package com.itm.service;

import java.util.List;

import javax.annotation.Resource;

import org.springframework.stereotype.Repository;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.itm.exception.ShopNotFound;
import com.itm.model.Shop;
import com.itm.repository.ShopRepository;

@Service
@Repository
@Transactional
public class ShopServiceImpl implements ShopService &#123;

    @Resource
    private ShopRepository shopRepository;

    @Transactional
    public Shop create(Shop shop) &#123;
        Shop createdShop = shop;
        return shopRepository.save(createdShop);
    }

    @Transactional
    public Shop findById(int id) &#123;
        return shopRepository.findOne(id);
    }

    @Transactional(rollbackFor = ShopNotFound.class)
    public Shop delete(int id) throws ShopNotFound &#123;
        Shop deletedShop = shopRepository.findOne(id);

        if (deletedShop == null)
            throw new ShopNotFound();

        shopRepository.delete(deletedShop);
        return deletedShop;
    }

    @Transactional
    public List&lt;Shop> findAll() &#123;
        return shopRepository.findAll();
    }

    @Transactional(rollbackFor = ShopNotFound.class)
    public Shop update(Shop shop) throws ShopNotFound &#123;
        Shop updatedShop = shopRepository.findOne(shop.getId());

        if (updatedShop == null)
            throw new ShopNotFound();

        updatedShop.setName(shop.getName());
        updatedShop.setEmplNumber(shop.getEmplNumber());
        return updatedShop;
    }

}
    

    
</strong>
            </pre>

       <h3>schema.sql</h3>
            <pre class="prettyprint">
<strong>
DROP TABLE IF EXISTS shops;


CREATE TABLE shops (
      id INT NOT NULL AUTO_INCREMENT
     , name VARCHAR(100) NOT NULL
     , employees_number INT NOT NULL DEFAULT 0

     , PRIMARY KEY (id)
);

    
</strong>
            </pre>

       <h3>test-data.sql</h3>
            <pre class="prettyprint">
<strong>
insert into shops (name,employees_number) values ('Java EE',3); 

    
</strong>
            </pre>


</div>
</div>


			