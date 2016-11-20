<div id="tabs">
  <ul>
    <li><a href="#tabs-1">@Configuration</a></li>
    <li><a href="#tabs-2">@Bean</a></li>
    <li><a href="#tabs-3">@Description</a></li>
    <li><a href="#tabs-4"></a></li>
    <li><a href="#tabs-5"></a></li>
  </ul>
  <div id="tabs-1">
      <h3>@Configuration</h3><hr/>
      <pre class="prettyprint">
1. @Configuration annotation declare a class as Spring Configuration Class.
2. This class contain @Bean annotated method .
3. we can say @Bean annotated method is a bean definitions and all bean definitions is managed by spring container.
4.@Configuration annotation is used at the level of class and this class contain @Bean annotated methods.
      </pre>
  </div>
  <div id="tabs-2">
    <h3>@Bean</h3><hr/>
      <pre class="prettyprint">
1. @Configuration annotation based class contain @Bean annotation based method.
2. @Bean annotation is used at the level of method, and this particular method return a bean.
3. Now lets talk about what is a bean.
4. Bean is a object/instance that is managed by Spring IOC Container.
5. Now lets talk about what is spring IOC Container.
6. Spring IOC Container create an object , configure them and manage their complete life cycle.
7. Spring IOC Container uses a Dependency Injection to manage the application.
      </pre>
  </div>
  <div id="tabs-3">
   <h3>@Description</h3><hr/>
      <pre class="prettyprint">
@Description is a new annotation introduced in Spring 4 for providing a textual description of the bean which can be useful for monitoring purpose
      </pre>
  </div>
  <div id="tabs-4">
   <h3></h3><hr/>
      <pre class="prettyprint">

      </pre>
  </div>
  <div id="tabs-5">
   <h3></h3><hr/>
      <pre class="prettyprint">

      </pre>
  </div>
  
</div>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  });
  </script>
