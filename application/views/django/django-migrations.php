			<h3></h3>
			<pre class="prettyprint">
Migrations are Django’s way of propagating changes you make to your models (adding a field, deleting a model, etc.) into your database schema. They’re designed to be mostly automatic, but you’ll need to know when to make migrations, when to run them, and the common problems you might run into.
<br/><br/>
<a href="https://docs.djangoproject.com/en/1.9/topics/migrations/" class="btn btn-success" target="_blank">Read More</a>     
            </pre>

			
			
			<br/>
			<h3></h3>
			<div class="alert alert-success">
				previously we have setup django project where we are able to run server by using these below command.
			</div>
			

			<pre class="prettyprint">
arif@arif-VirtualBox:~$ <b>sudo apt-get install virtualenv</b>
arif@arif-VirtualBox:~$ <b>cd Desktop</b>
arif@arif-VirtualBox:~/Desktop$ <b>cd Desktop</b>
arif@arif-VirtualBox:~/Desktop$ <b>mkdir django1</b>
arif@arif-VirtualBox:~/Desktop$ <b>cd django1</b>
arif@arif-VirtualBox:~/Desktop/django1$ <b>virtualenv .</b>
(django1)arif@arif-VirtualBox:~/Desktop/django1$ <b>source bin/activate</b>
(django1)arif@arif-VirtualBox:~/Desktop/django1$ <b>pip freeze</b>
(django1)arif@arif-VirtualBox:~/Desktop/django1$ <b>pip install django==1.8</b>
(django1)arif@arif-VirtualBox:~/Desktop/django1$ <b>django-admin.py startproject src</b>
(django1)arif@arif-VirtualBox:~/Desktop/django1$ <b>cd src</b>
(django1)arif@arif-VirtualBox:~/Desktop/django1/src$ <b>python manage.py runserver</b>

<a href="install-django-project-in-ubuntu-operating-system" class="btn btn-success" target="_blank">Want to know more about above commands click here</a>
			</pre>
			
			
			<div class="alert alert-success">
			  Now we are able to run our server but when we run it will show us a message <b>you have a unapplied migration for your app </b> for this we need to do migrate
			</div>
			<pre class="prettyprint">
(django1)arif@arif-VirtualBox:~/Desktop/django1/src$ <b>python manage.py migrate</b>
</pre>



<div class="alert alert-success">
	Now i can reach out to our admin page but i can not login, to login i need to setup  superuser that we will cover in next topic, but we surely check our admin login page by using below link
</div>
<pre class="prettyprint">
127.0.0.1:8000/admin/
</pre>
<div class="alert alert-success">
	Now you are able to see below page
</div>
<pre class="prettyprint">
<img src="<?php echo base_url()?>/static/images/ice_screenshot_20151207-105657.png">
</pre>
<div class="alert alert-success">
	in next topic we will cover super user privileges
</div>
