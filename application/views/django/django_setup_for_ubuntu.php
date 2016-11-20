
			<h3>Virtual Environment</h3>
			<pre class="prettyprint">
Virtual environment is a tool to keep the dependencies required by different projects in seperate places,, by creating virtual Python environments for them. It solves the “Project X depends on version 1.x but, Project Y needs 4.x” dilemma, and keeps your global site-packages directory clean and manageable.

For example, you can work on a project which requires Django 1.3 while also maintaining a project which requires Django 1.0.

Virtualenv::

virtualenv is a tool to create isolated Python environments. virtualenv creates a folder which contains all the necessary executables to use the packages that a Python project would need.     
            </pre>

			
			
			<br/>
			<h3>Create Virtual Environment</h3>
			<div class="alert alert-success">creation of virtual environment in ubuntu operating system is a one time operation.after creation of virtual environment we can use it in the project.</div>
			
			<div class="alert alert-info">
				
				Do not worry about  <b>arif@arif-VirtualBox:~$</b>.I am using ubuntu inside my virtual box and arif is user name.so terminal gives root path automatically.
			</div>

			<pre class="prettyprint">
arif@arif-VirtualBox:~$ sudo apt-get install virtualenv
            </pre>

			
			
			<h3>Create your django project folder at the desktop</h3>
			<div class="alert alert-success">
			   i want to start my django project at the desktop for doing this i need to change my terminal location
			   to desktop by using <b>cd</b> command.cd means change directory.
			</div>
			<pre class="prettyprint">
arif@arif-VirtualBox:~$ cd Desktop
</pre>



<div class="alert alert-success">
	Now create a directory for your project, To create the directory(folder) we use <b>mkdir</b>. mkdir means make directory.
</div>
<pre class="prettyprint">
arif@arif-VirtualBox:~/Desktop$ mkdir django1
</pre>
<div class="alert alert-success">
	Now my requirement is i need to go inside my project directory where i can do further operation, to go to the project directory i need to
	change my directory by using <b>cd</b> command.
</div>
<pre class="prettyprint">
arif@arif-VirtualBox:~/Desktop$ cd django1
</pre>
<div class="alert alert-success">
	now i am inside my project directory here i need to create virtual environment.to create virtualenv in the current directory i need to use
	<b>.</b> ,dot means current directory
</div>
<pre class="prettyprint">
arif@arif-VirtualBox:~/Desktop/django1$ virtualenv .
</pre>
<div class="alert alert-success">now my requirement is, i want to see my virtual environment is created or not, in order to do that i need to use command <b>ls</b>. <b>ls</b> command list out all the files and folder inside current directory.If virtual environment created successfully then you will be able see directory name <b>bin</b>,<b>include</b>,<b>lib</b>,<b>local</b>.If you are able to see these directories then it means virtual environment created successfully.</div>
<pre class="prettyprint">
arif@arif-VirtualBox:~/Desktop/django1$ ls
</pre>
<div class="alert alert-success">
	now i want to activate my virtual environment
</div>
<pre class="prettyprint">
arif@arif-VirtualBox:~/Desktop/django1$ source bin/activate
</pre>
<div class="alert alert-success">
	Now my requirement is i want to install django inside current directory,current directory means where you installed your virtual env where you need to install django.<br/>

	In order to do that i need to first use command  <b>pip freeze</b>. this <b>pip freeze</b> command tells to your future django installation please Output installed packages in requirements format.simply it provide django installation in correct format.
</div>

<pre class="prettyprint">
(django1)arif@arif-VirtualBox:~/Desktop/django1$ pip freeze
</pre>
<div class="alert alert-success">Now i can install django</div>
<pre class="prettyprint">
(django1)arif@arif-VirtualBox:~/Desktop/django1$ pip install django==1.8
</pre>
<div class="alert alert-success">now we have complete setup of django project, now we are bit away from start our first project.start your project with below command.</div>
<pre class="prettyprint">
(django1)arif@arif-VirtualBox:~/Desktop/django1$ django-admin.py startproject src
</pre>
<div class="alert alert-success">move to project folder</div>
<pre class="prettyprint">
(django1)arif@arif-VirtualBox:~/Desktop/django1$ cd src
</pre>
<div class="alert alert-success">run your server and check output on browser.</div>
<pre class="prettyprint">
(django1)arif@arif-VirtualBox:~/Desktop/django1/src$ python manage.py runserver
</pre>
            </pre>
