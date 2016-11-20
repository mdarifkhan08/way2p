			<div class="alert alert-success">Previously used command</div>
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

<div class="alert alert-info">to stop server used ctrl+C keys</div>

(django1)arif@arif-VirtualBox:~/Desktop/django1/src$ <b>python manage.py migrate</b>
			</pre>
			
			
			<div class="alert alert-success">
			  Now my requirement is, i want to create super user, in order to do that i need to use below command.
			</div>
			<pre class="prettyprint">
(django1)arif@arif-VirtualBox:~/Desktop/django1/src$ <b>python manage.py createsuperuser</b>
username:aags
Email Address:arifkhan.tech@gmail.com
password:aags
password(again):aags
</pre>



<div class="alert alert-success">
	when we enter above command it will ask some information like, what is username,email and password after setup these information we can login to admin area.
</div>
<pre class="prettyprint">
127.0.0.1:8000/admin/
</pre>

<div class="alert alert-success">
	After login i can able to reach admin area
</div>
<pre>
	<img src="<?php echo base_url()?>/static/images/ice_screenshot_20151207-112828.png" class="img-responsive">
</pre>
