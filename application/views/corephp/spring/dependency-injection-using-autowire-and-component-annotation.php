<div class="panel panel-primary">
<div class="panel panel-heading">

</div>
<div class="panel panel-body">
<div class="alert alert-success">
	This example based on spring dependency injection concept.Basic calculator application using @Autowired and @Component Annotation.
</div>



<h3>pom.xml</h3><hr/>
<pre class="prettyprint">
&lt;project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 http://maven.apache.org/xsd/maven-4.0.0.xsd">
  &lt;modelVersion>4.0.0&lt;/modelVersion>

  &lt;groupId>com.way2programming&lt;/groupId>
  &lt;artifactId>AnnotationResource&lt;/artifactId>
  &lt;version>0.0.1-SNAPSHOT&lt;/version>
  &lt;packaging>jar&lt;/packaging>

  &lt;name>AnnotationResource&lt;/name>
  &lt;url>http://maven.apache.org&lt;/url>

  &lt;properties>
    &lt;project.build.sourceEncoding>UTF-8&lt;/project.build.sourceEncoding>
    &lt;springframework.version>4.0.6.RELEASE&lt;/springframework.version>
  &lt;/properties>

  &lt;dependencies>
    &lt;dependency>
      &lt;groupId>junit&lt;/groupId>
      &lt;artifactId>junit&lt;/artifactId>
      &lt;version>3.8.1&lt;/version>
      &lt;scope>test&lt;/scope>
    &lt;/dependency>
    
     &lt;dependency>
            &lt;groupId>org.springframework&lt;/groupId>
            &lt;artifactId>spring-core&lt;/artifactId>
            &lt;version>${springframework.version}&lt;/version>
        &lt;/dependency>
        &lt;dependency>
            &lt;groupId>org.springframework&lt;/groupId>
            &lt;artifactId>spring-context&lt;/artifactId>
            &lt;version>${springframework.version}&lt;/version>
        &lt;/dependency>
  &lt;/dependencies>
&lt;/project>
</pre>


<h3>BasicCalc.java(Interface)</h3><hr/>
<pre class="prettyprint">
package com.way2programming.DependencyInjection;

public interface BasicCalc {
	public double sum(double a,double b);
	public double sub(double a,double b);
	public double mul(double a, double b);
	public double div(double a,double b);
}
	
</pre>


<h3>BasicCalcImpl.java(Implementation Of Interface)</h3><hr/>
<pre class="prettyprint">
package com.way2programming.DependencyInjection;

import org.springframework.stereotype.Component;

@Component
public class BasicCalcImpl implements BasicCalc {

	double res;

	public double sum(double a, double b) {
		res = a + b;
		return res;
	}

	public double sub(double a, double b) {
		res = a - b;
		return res;
	}

	public double mul(double a, double b) {
		res = a * b;
		return res;
	}

	public double div(double a, double b) {
		res = a / b;
		return res;
	}

}

</pre>


<h3>CalculatorService.java</h3><hr/>
<pre class="prettyprint">
package com.way2programming.DependencyInjection;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class CalculatorService {
	
	public BasicCalcImpl basicCalcImpl;
	
	public BasicCalcImpl getBasicCalcImpl() {
		return basicCalcImpl;
	}

	@Autowired
	public void setBasicCalcImpl(BasicCalcImpl basicCalcImpl) {
		this.basicCalcImpl = basicCalcImpl;
	}

	public void sum(double a, double b){
		double sum=basicCalcImpl.sum(a,b);
		System.out.println(sum);
    }
	
	public void sub(double a, double b){
		double sub=basicCalcImpl.sub(a,b);
		System.out.println(sub);
    }
	
	public void mul(double a, double b){
		double mul=basicCalcImpl.mul(a,b);
		System.out.println(mul);
    }
	
	public void div(double a, double b){
		double div=basicCalcImpl.div(a,b);
		System.out.println(div);
    }

}
</pre>

<h3>AppConfig.java</h3><hr/>
<pre class="prettyprint">
package com.way2programming.DependencyInjection;

import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;

@Configuration
public class AppConfig {
	
	@Bean(name="calculatorService")
	public CalculatorService calService(){
		return new CalculatorService();
	}
	
	@Bean(name="basicCalcImpl")
	public BasicCalcImpl basicCalcImpl(){
		return new BasicCalcImpl();
	}
	

}
</pre>

<h3>App.java</h3><hr/>
<pre class="prettyprint">
package com.way2programming.DependencyInjection;

import org.springframework.context.annotation.AnnotationConfigApplicationContext;
import org.springframework.context.support.AbstractApplicationContext;

public class App 
{
    public static void main( String[] args )
    {
    	AbstractApplicationContext context = new AnnotationConfigApplicationContext(AppConfig.class);
    	CalculatorService calculatorService =(CalculatorService)context.getBean("calculatorService");
    	calculatorService.sum(1, 2);
    	calculatorService.sub(1, 2);
    	calculatorService.mul(1, 2);
    	calculatorService.div(1, 2);
   	    context.close();
    }
}
</pre>
</div>
</div>




