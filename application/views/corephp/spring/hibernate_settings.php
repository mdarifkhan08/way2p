			<h3>database-config.xml</h3>
			<pre class="prettyprint">
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;beans xmlns="http://www.springframework.org/schema/beans"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://www.springframework.org/schema/beans http://www.springframework.org/schema/beans/spring-beans.xsd">

    &lt;!-- Configure the DriverManagerDataSource class It is a predefiended class 
        and it needs to configure database basic properties. -->
        
&lt;context:property-placeholder location="classpath:spring/data-access.properties" system-properties-mode="OVERRIDE"/>        

    &lt;bean id="dataSource"
        class="org.springframework.jdbc.datasource.DriverManagerDataSource">
        &lt;property name="driverClassName" value="${driver_class_name }" />
        &lt;property name="url" value="${driver_url }" />
        &lt;property name="username" value="${username }" />
        &lt;property name="password" value="${password }" />
    &lt;/bean>
    
    

    &lt;!-- When we are working with Spring Hibernate then we need to configure 
        AnnotationSessionFactoryBean class This class contain the information of 
        your Entity class.Entity class is need to interect with your database. -->



    &lt;bean id="SessionFactory"
        class="org.springframework.orm.hibernate3.annotation.AnnotationSessionFactoryBean" >
        &lt;property name="dataSource" ref="dataSource" />
        &lt;property name="annotatedClasses">
            &lt;list>
                &lt;value>com.itm.model.Employee&lt;/value>
            &lt;/list>
        &lt;/property>
    &lt;/bean>



    &lt;!-- HibernateTemplate class is need to interiect with your database so 
        this class is having predefined property sessionFactory and sessionFactory 
        property contain the reference of above id(sessionFactory). -->
        
        
        
    &lt;bean id="hibernateTemplate" class="org.springframework.orm.hibernate3.HibernateTemplate" >
        &lt;property name="sessionFactory" ref="SessionFactory" />
    &lt;/bean>



&lt;!-- TransactionManager is also have predefiend property and this property have the reference of 
AnnotationSessionFactoryBean class id as a reference. -->


    &lt;bean id="transactionManager"
        class="org.springframework.orm.hibernate3.HibernateTransactionManager" >
        &lt;property name="sessionFactory" ref="SessionFactory" />
    &lt;/bean>
    
&lt;/beans>      
            </pre>

			
			
			
			<h3>database-properties.xml</h3>
			<pre class="prettyprint">
driver_class_name=com.mysql.jdbc.Driver
driver_url=jdbc:mysql://localhost/prac3
username=root
password=inception	
            </pre>

			
			
			<h3>Configuration</h3>
			<pre class="prettyprint">
&lt;!-- First we need to use key value of properties file in database-config.xml file so that we need to set setting in that xml file. -->
           
&lt;context:property-placeholder location="classpath:spring/data-access.properties" system-properties-mode="OVERRIDE"/>           
            </pre>