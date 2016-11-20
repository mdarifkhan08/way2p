<div id="tabs">
  <ul>
    <li><a href="#tabs-1">1</a></li>
    <li><a href="#tabs-2"></a></li>
    <li><a href="#tabs-3"></a></li>
    <li><a href="#tabs-4"></a></li>
    <li><a href="#tabs-5"></a></li>
  </ul>
  <div id="tabs-1">
<h3>@Configuration</h3><hr/>
<div class="alert alert-info">
1. @Configuration annotation declare a class as Spring Configuration Class.<br/>
2. This class contain @Bean annotated method .<br/>
3. we can say @Bean annotated method is a bean definitions and all bean definitions is managed by spring container.<br/>
4.@Configuration annotation is used at the level of class and this class contain @Bean annotated methods.<br/>
</div>

<h3>@Bean</h3><hr/>
<div class="alert alert-info">
1. @Configuration annotation based class contain @Bean annotation based method.<br/>
2. @Bean annotation is used at the level of method, and this particular method return a bean.<br/>
3. Now lets talk about what is a bean.<br/>
4. Bean is a object/instance that is managed by Spring IOC Container.<br/>
5. Now lets talk about what is spring IOC Container.<br/>
6. Spring IOC Container create an object , configure them and manage their complete life cycle.<br/>
7. Spring IOC Container uses a Dependency Injection to manage the application.<br/>
</div>

<h3>@Description</h3><hr/>
<div class="alert alert-info">
@Description is a new annotation introduced in Spring 4 for providing a textual description of the bean which can be useful for monitoring purpose
</div>



<h3>Dispatcher Servlet</h3><hr/>
<div class="alert alert-info">
<span class="label label-success">First</span><br/><br/>
The job of the DispatcherServlet is to take an incoming URI and find the right combination of handlers (generally methods on Controller classes) and views (generally JSPs) that combine to form the page or resource that's supposed to be found at that location.<br/><br/>

I might have<br/>

<ol>
  <li>a file /WEB-INF/jsp/pages/Home.jsp</li>
  <li>and a method on a class
@RequestMapping(value="/pages/Home.html")
private ModelMap buildHome() {
    return somestuff;
}</li>
</ol>
<br/>
<br/>
<span class="label label-success">Second</span>
<br/><br/>
Essentially, it's a servlet that takes the incoming request, and delegates processing of that request to one of a number of handlers, the mapping of which is specific in the DispatcherServlet configuration.

<span class="label label-success">Third</span>
<br/><br/>
</div>



<h3>ApplicationContext</h3><hr/>
<div class="alert alert-info">

<span class="label label-success">First</span><br/><br/>
<b>BeanFactory</b><br/><br/>

The BeanFactory is the actual container which instantiates, configures, and manages a number of beans. These beans typically collaborate with one another, and thus have dependencies between themselves. These dependencies are reflected in the configuration data used by the BeanFactory (although some dependencies may not be visible as configuration data, but rather be a function of programmatic interactions between beans at runtime).
<br/><br/>
<b>ApplicationContext</b><br/><br/>

While the beans package provides basic functionality for managing and manipulating beans, often in a programmatic way, the context package adds ApplicationContext, which enhances BeanFactory functionality in a more framework-oriented style. Many users will use ApplicationContext in a completely declarative fashion, not even having to create it manually, but instead relying on support classes such as ContextLoader to automatically start an ApplicationContext as part of the normal startup process of a Java EE web-app. Of course, it is still possible to programmatically create an ApplicationContext.<br/><br/>

The basis for the context package is the ApplicationContext interface, located in the org.springframework.context package. Deriving from the BeanFactory interface, it provides all the functionality of BeanFactory. To allow working in a more framework-oriented fashion, using layering and hierarchical contexts, the context package also provides the following:<br/><br/>

MessageSource, providing access to messages in, i18n-style<br/>
Access to resources, such as URLs and files<br/>
Event propagation to beans implementing the ApplicationListener interface<br/>
Loading of multiple (hierarchical) contexts, allowing each to be focused on one particular layer, for example the web layer of an application<br/>
As the ApplicationContext includes all functionality of the BeanFactory, it is generally recommended that it be used over the BeanFactory, except for a few limited situations such as perhaps in an applet, where memory consumption might be critical, and a few extra kilobytes might make a difference. The following sections described functionality which ApplicationContext adds to basic BeanFactory capabilities.<br/><br/>
<span class="label label-success">Second</span><br/><br/>
ApplicationContext is a bean container, it can manage the bean according to requirement or depending on the request it can wire the, load them, dispense them.<br/><br/>
ApplicationContext is recommended over BeanFactory<br/><br/>

<span class="label label-success">Third</span><br/><br/>
applicationContext comes from Spring Framework: it manages the business/DAO beans
spring-servlet comes from Spring MVC: it manages the web beans
</div>


  </div>

  
</div>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  });
  </script>

