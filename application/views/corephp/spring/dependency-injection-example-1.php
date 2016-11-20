<div class="panel panel-primary">
<div class="panel panel-heading">
Spring @Component,@Repository,@Service and @Controller annotations
</div>
<div class="panel panel-body">
<table class="table table-bordered">
<tr><td>@Autowired handles only wiring using spring context(spring bean container).</td></tr>
<tr><td>If class annotated with @Component,@Repository,@Service and @Controller than it means spring can pick it up and pull it into the application context.</td></tr>
<tr><td>@Repository annotation is a specialization of the @Component annotation with similar use and functionality. In addition to importing the DAOs into the DI container, it also makes the unchecked exceptions (thrown from DAO methods) eligible for translation into Spring DataAccessException.</td></tr>
<tr><td>@Service annotation is also a specialization of the component annotation. It doesn’t currently provide any additional behavior over the @Component annotation, but it’s a good idea to use @Service over @Component.</td></tr>
<tr><td>@Controller annotation marks a class as a Spring Web MVC controller. It too is a @Component specialization, so beans marked with it are automatically imported into the DI container.</td></tr>
<tr><td>In real life, you will face very rare situations where you will need to use @Component annotation. Most of the time, you will using @Repository, @Service and @Controller annotations. @Component should be used when your class does not fall into either of three categories i.e. controller, manager and dao.</td></tr>
<tr><td>Always use these annotations over concrete classes; not over interfaces.</td></tr>
</table>
</div>
</div>

