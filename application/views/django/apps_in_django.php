			<div class="alert alert-success">A web application is combination of multiple apps,to understand what is apps, i will give simple example suppose in your application you will have user panel means user login/logout system, it is a app. if you have newsletter, it is a app similarly you can have multiple apps and best part is these apps is reusable component.to create app use below command</div>

			<pre class="prettyprint">
(django1)arif@arif-VirtualBox:~/Desktop/django1/src$ <b>python manage.py startapp [app_name]</b>
			</pre>
			
			<div class="alert alert-success">I want to create newsletter app in order to do that i need to use below command.</div>


			<pre class="prettyprint">
 (django1)arif@arif-VirtualBox:~/Desktop/django1/src$ <b>python manage.py startapp newsletter</b>
			</pre>

			<div class="alert alert-success">after this command we will get newsletter folder with default settings and default folder</div>

			<div class="alert alert-success">newsletter folder contain migrations folder,__init__.py,admin.py,models.py.tests.py,views.py</div>
			
             <div class="alert alert-success">migrations folder contain __init__.py inside it, __init__.py files tells to python this current folder is python module.</div>
             <div class="alert alert-success"> similarly newsletter folder contain __init__.py inside it, __init__.py files tells to python this current folder is python module.</div>
