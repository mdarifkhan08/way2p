		<div class="alert alert-success">
			Django has a seperate server for static files and we can think at the same time two server is worked in django framework to increase the performance of the application.
		</div>


		<div class="alert alert-info">
			For The Development environment and for the production environment static files settings is little bit different.<br/><br/>

			If you will check your settings.py file, inside this file one property called DEBUG=True, This property is helpful for developement environment only,This property raises an exception when DEBUG is True .Django will display a detailed traceback, including a lot of metadata about your environment, such as all the currently defined Django settings (from settings.py).<br/><br/>

			"It is also important to remember that when running with DEBUG turned on, Django will remember every SQL query it executes. This is useful when you're debugging, but it'll rapidly consume memory on a production server."
		</div>


		

			
			
			
			<h3>for production environment(urls.py)</h3>
			<pre class="prettyprint">
from django.conf import settings
from django.conf.urls import include, url
from django.conf.urls.static import static
from django.contrib import admin

urlpatterns = [
    # Examples:
    # url(r'^$', 'src.views.home', name='home'),
    # url(r'^blog/', include('blog.urls')),

    url(r'^admin/', include(admin.site.urls)),


    url(r'^$','newsletter.views.home',name='home'),

    url(r'^about-us/','newsletter.views.about_us',name='about us'),
     url(r'^contact/','newsletter.views.contact_us',name='contact us'),
]+ static(settings.STATIC_URL, document_root=settings.STATIC_ROOT)
            </pre>

			
			
			<h3>for development environment(urls.py)</h3>
			<pre class="prettyprint">
from django.conf import settings
from django.conf.urls import include, url
from django.conf.urls.static import static
from django.contrib import admin

urlpatterns = [
    # Examples:
    # url(r'^$', 'src.views.home', name='home'),
    # url(r'^blog/', include('blog.urls')),

    url(r'^admin/', include(admin.site.urls)),
    url(r'^$','newsletter.views.home',name='home'),
    url(r'^about-us/','newsletter.views.about_us',name='about us'),
     url(r'^contact/','newsletter.views.contact_us',name='contact us'),
] 

urlpatterns+=static(settings.STATIC_URL, document_root=settings.STATIC_ROOT)
urlpatterns+=static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)
            </pre>

			
			
			
			<h3>add these settings inside setings.py file</h3>
			<pre class="prettyprint">


#static_in_production is a main directory where all the static files located
#but we are in django environment here it manage static files in its way
#django has two folder inside your static files folder 
#first folder where we will put all the static files manually
#second folder where django will provide automatically when you will give command to django
#this is a great strategy of django framework
#we have created our_static folder here we will put all the static files
#when we execute a command <b>python manage.py collectstatic</b> all the content from our_static folder will also have inside the static_root folder
STATICFILES_DIRS = (
  os.path.join(BASE_DIR, "static_in_production","our_static"),
  
)

STATIC_ROOT = os.path.join(BASE_DIR,"static_in_production","static_root")


#media we called to the files comes from user inside server,means data uploaded by used we called to media we can also seperate this
MEDIA_URL='/media/'
MEDIA_ROOT=os.path.join(BASE_DIR,"static_in_production","media_root")
			</pre>

		<div class="alert alert-info">
      command that is useful for sending all static file from our_static to static_root		
		</div>
		<pre class="prettyprint">
python manage.py collectstatic
		</pre>

		<div class="alert alert-info">
			STATICFILES_DIRS it contain the information your static files 
			os.path.join() is a predefined method,it needs the information of your static directory
			BASE_DIR is the base directory of your project basically base directory is where manage.py exists.
		</div>

<h3>load static file in view(.html)</h3>
			<pre class="prettyprint">
{% load staticfiles %}		#place this line at the top of the html file

#to load css file we can us syntax
&lt;link rel="stylesheet" type="text/css" href="{% static "css/bootstrap.min.css"%}">	
			</pre>
