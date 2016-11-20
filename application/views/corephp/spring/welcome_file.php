			<h3>By using XML(front controller)</h3>
			<pre class="prettyprint">
&lt;mvc:view-controller path="/" view-name="HtmlDesign/welcome" />      
            </pre>

			
			
			
			<h3>By using .java file(class)</h3>
			<pre class="prettyprint">
@RequestMapping(value={"/","welcome"},method="RequestMethod.GET")
public String welcomePage(){
return "welcome";
}
            </pre>