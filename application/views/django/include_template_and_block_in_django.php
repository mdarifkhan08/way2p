			<pre class="prettyprint">
	<a href="https://docs.djangoproject.com/en/1.9/ref/templates/builtins/" target="_blank" class="btn btn-success">Read More</a>
            </pre>

			
			
			
			
<div class="alert alert-info">
	Include view(.html) file to another file almost all programming have this support.for Django way of include file see below code
</div>

			
			
		
			<pre class="prettyprint">
<strong>
&#123;% include 'base.html '%}
</strong>
            </pre>

			
			
<div class="alert alert-info">
	Block have great feature,by using block development speed would go double.I have seen block kind if features inside Laravel framework.
</div>			
		
<div class="alert alert-info">
	To achieve block concept think first where this concept required,suppose in each and every view(.html) file we have some common part but content always changed for this we can create the base.html where we can seperate the common template and using block we can able to change the view of every page.
</div>	

           
<div class="alert alert-info">
	It is also called inheritance.
</div>	
              
            <h3>base.html</h3>
			<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
    &lt;title>&#123;&#123;template_title}}</title>
&lt;/head>
&lt;body>
             &lt;div class="container">
             &#123;% block content%}
             
               &#123;% endblock %}
               &lt;/div>
&lt;/body>
&lt;/html>	
			</pre>

			
			
			<h3>home.html</h3>
			<pre class="prettyprint">
&#123;% extends 'base.html' %}
 &#123;% block content%}
&lt;h1>Send Mail Using Django And Gmail SMTP Service&lt;/h1>
              &#123;&#123;success_report}}
              &lt;form action="" method="POST">&#123;% csrf_token %}
                  &#123;&#123;form.as_p}}
                  &lt;input type="submit" value="Send Message"/>
 &lt;/form>
  &#123;% endblock %}
			</pre>
