<div class="panel panel-primary">
<div class="panel panel-heading">

</div>
<div class="panel panel-body">
<div class="alert alert-success">
  	In multilayered application each layer can be dependent on other layer, It is called dependency.<br/>
</div>

<div class="alert alert-info">
	<ul class="set_ul">
		<li>Let us discuss one example of dependency,In an enterprises application Business Layer is dependent on the Data Layer, so Data layer is dependency for the Business Layer.Let us discuss, How spring find Data Layer as a dependency for the business layer.</li>

		<li>Old java style of getting Dependency(Object) is done by creating the object of the class where we want that object features.but spring style is just opposite, we need not create the dependency, it will create for us and gives us, we need to have only setter or constructor injection that use spring configuration to get the dependency.</li>

		<li>spring style of getting dependency is just opposite of old java style so that spring has a IOC(Inversion Of Control) Concept.</li>

		<li>Inversion Of Control is nothing, what we learn above that  is IOC.</li>

		<li>Spring achive inversion of control using two way, first is using setter injection and other is using constructor injection, my favorite one is setter  injection to get the dependency for the object but you can use what you prefer.</li>
	</ul>
</div>

<div class="alert alert-success">
  	<ul class="set_ul">
  		<li>we need not to focus on setter injection or constructor injection, whatever you want to use, you can.</li>
  		<li>Spring priority only provide the dependent object to the target object(or that want to use dependent object).</li>
  		<li>Spring helps you to create the blank(null) object. Its on upto you how you want to fill up that object by using setter or by using constructor.</li>
  	</ul>
</div>

<div class="alert alert-info">
  	<ul class="set_ul">
  		<li>IOC is also achived by using @Component and @Autowired Annotation</li>
  		<li>@Component :- It is used at the level of Dependent Object.</li>
  		<li>@Autowired :- It is used at the level of target object, object that want to use feature of dependent object.</li>
  	</ul>
</div>

<h3>Example On @Component And @Autowired Annotation</h3><br/>
<h4>A.java</h4>
<pre class="prettyprint">
package com.way2programming.Component_Autowired;

import org.springframework.stereotype.Component;

@Component
public class A {
	public void getMessage(){
		System.out.println("This message will be shown by class B");
	}
}
	
</pre>

<h4>B.java</h4>
<pre class="prettyprint">
package com.way2programming.Component_Autowired;

import org.springframework.beans.factory.annotation.Autowired;

public class B {
	@Autowired
	private A a;

	public void getResultFrom() {
		a.getMessage();
	}

}
	
</pre>

<h4>AppConfig.java</h4>
<pre class="prettyprint">
package com.way2programming.Component_Autowired;

import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;

@Configuration
public class AppConfig {
	
	@Bean(name="b")
	public B b(){
		return new B();
	}
	
	@Bean(name="a")
	public A a(){
		return new A();
	}

}
	
</pre>

<h4>App.java</h4>
<pre class="prettyprint">
package com.way2programming.Component_Autowired;

import org.springframework.context.annotation.AnnotationConfigApplicationContext;
import org.springframework.context.support.AbstractApplicationContext;

public class App 
{
	public static void main( String[] args )
    {
		AbstractApplicationContext context = new AnnotationConfigApplicationContext(AppConfig.class);
   	    B b =(B)context.getBean("b");
   	    b.getResultFrom();
   	    context.close();
        
    }
}
	
</pre>

<h4>output</h4>
<div class="alert alert-success">
This message will be shown by class B
</div>
</div>
</div>




