			<h3>views.py contain the information of views</h3>
			<pre class="prettyprint">
from django.shortcuts import render

def home(request):
    return render(request,"home.html",&#23;})    
            </pre>

			
			<h3>urls.py(file location /src/src/urls.py)</h3>
			<pre class="prettyprint">
from django.shortcuts import render
from django.conf.urls import include, url
from django.contrib import admin

urlpatterns = [
    # Examples:
    # url(r'^$', 'src.views.home', name='home'),
    # url(r'^blog/', include('blog.urls')),

    url(r'^admin/', include(admin.site.urls)),

#above part is default configuration.
#if i want to attach a view to url then i need to make configuration here


#home page configuration

url(r'^$','newsletter.views.home',name="home"),


]
            </pre>

			
			
			<h3>templates/home.html</h3>
			<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
    &lt;title>Welcome Page&lt;/title>
&lt;/head>
&lt;body>
This is welcome page to reach out this page we need to make setting inside settings.py file and required work with views.py and urls.py . these component will give you your welcome page.

&lt;br/>&lt;br/>

you can access to this page by using 127.0.0.1:8000
&lt;/body>
&lt;/html>	
            </pre>

			
			
			
			<h3>output</h3>
			<pre class="prettyprint">
<img src="images/ice_screenshot_20151208-131033.png" class="img-responsive">
			</pre>

			<br/><br/><br/>

			<h3>If you want to add another view then we need to repeat above procudure again.Lets add another view</h3>

			<div class="alert alert-success">
				we know url decide which view is set already for this url, suppose you want to add about us page in your application so to achive this i will go though different way to achive this<br/><br/>

				127.0.0.1:8000/about-us

				about-us is a url that we need to register to urls.py
			</div>


<h3>urls.py(file location /src/src/urls.py)</h3>
			<pre class="prettyprint">
from django.shortcuts import render
from django.conf.urls import include, url
from django.contrib import admin

urlpatterns = [
    

    url(r'^admin/', include(admin.site.urls)),
    url(r'^$','newsletter.views.home',name="home"),
    url(r'^about-us/','newsletter.views.about_us',name="about us"),


]			
			</pre>
			

			<div class="alert alert-success">
				urls.py is having about-us url but it is no having about_us function inside views.py so we need to add function inside views.py
			</div>
<h3>views.py contain the information of views</h3>
<pre class="prettyprint">
from django.shortcuts import render

def home(request):
    return render(request,"home.html",&#23;}) 

def about_us(request):
    return render(request,"about-us.html",&#23;})
</pre>

<div class="alert alert-success">
				views.py is having view about-us.html information but our application do not have about-us.html inside the templates folder.
</div>



<h3>templates/about-us.html</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
    &lt;title>About Us&lt;/title>
    &lt;link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
&lt;/head>
&lt;body>
&lt;div style="text-align:center;"> &lt;h1>About Us&lt;/h1>&lt;/div>

&lt;/body>
&lt;/html>
</pre>





<h3>output</h3>
<pre>
	<img src="<?php echo base_url();?>static/images/ice_screenshot_20151208-142240.png" class="img-responsive">
</pre>
