			<h3>views.py</h3>
			<pre class="prettyprint">

from django.shortcuts import render

# Create your views here.

def home(request):
    title="Welcome Page"         #title is a string variable that hold data
    context=&#123;                    #context is a dictionary it can hold all the variable and later we can pass to view
    "template_title":title
    }
    return render(request,"home.html",context) # here we are passing context dictionary variable


def about_us(request):
    return render(request,"about-us.html",&#123;})    
            </pre>

			
			
			
			<h3>home.html</h3>
			<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>

    &lt;title>&#123;&#123;template_title}}&lt;/title>
&lt;/head>
&lt;body>
&lt;!-- pass the key value from the dictionary variable to the view part between the double curly braces,we can use this variable any number of time inside our views part-->
&#123;&#123;template_title}}

&lt;br/>&lt;br/>


&lt;/body>
&lt;/html>
            </pre>

