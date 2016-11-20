<div class="panel panel-primary">
<div class="panel panel-heading">
	FROM STACKOVERFLOW <a target="_blank" href="http://stackoverflow.com/questions/26676782/when-use-abstractannotationconfigdispatcherservletinitializer-and-webapplication">Click Here</a>
</div>
<div class="panel panel-body">
With the release of the Servlet 3.0 spec it became possible to configure your Servlet Container with (almost) no xml. For this there is the ServletContainerInitializer in the Servlet specification. In this class you can register filters, listeners, servlets etc. as you would traditionally do in a web.xml
<br/><br/>
Spring provides a an implementation the SpringServletContainerInitializer which knows how to handle WebApplicationInitializer classes. Spring also provides a couple of base classes to extend to make your life easier the AbstractAnnotationConfigDispatcherServletInitializer is one of those. It registers a ContextLoaderlistener (optionally) and a DispatcherServlet and allows you to easily add configuration classes to load for both classes and to apply filters to the DispatcherServlet and to provide the servlet mapping.
<br/><br/>
The WebMvcConfigurerAdapter is for configuring Spring MVC, the replacement of the xml file loaded by the DispatcherServlet for configuring Spring MVC. The WebMvcConfigurerAdapter should be used for a @Configuration class.<br/><br/>
<pre>
@Configuration
@EnableWebMvc
public class WebConfiguration 
    extends WebMvcConfigurerAdapter implements WebApplicationInitializer
{ ... }
</pre>

I wouldn't recommend mixing those as they are basically 2 different concerns. The first is for configuring the servlet container, the latter for configuring Spring MVC.
<br/><br/>
You would want to split those into 2 classes.
<br/><br/>
For the configuration.
<pre>
@Configuration
@EnableWebMvc
public class WebConfiguration extends WebMvcConfigurerAdapter { ... }
</pre>
For bootstrapping the application.<br/><br/>
<pre>
public class MyWebApplicationInitializer extends AbstractAnnotationConfigDispatcherServletInitializer {

    protected Class&lt;?>[] getRootConfigClasses() { return new Class[] {RootConfig.class};}

    protected Class&lt;?>[] getServletConfigClasses()  { return new Class[] {WebConfiguration .class};}

    protected String[] getServletMappings() {
        return new String[] {"/"};
    }

}
</pre>
An added advantage is that you now can use the convenience classes provided by Spring instead of manually configuring the DispatcherServlet and/or ContextLoaderListener.
</div>
</div>