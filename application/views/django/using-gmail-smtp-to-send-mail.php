			<h3></h3>
			<pre class="prettyprint">
<a href="https://docs.djangoproject.com/en/1.9/topics/email/" target="_blank" class="btn btn-info">Read Django Send Mail Documentation</a> 
            </pre>

			
			<h3>Start Project With Command Line</h3>
<div class="alert alert-success">
prepare project setup
</div>
			<pre class="prettyprint">
arif@arif-VirtualBox:~$ <b>cd Desktop</b>
arif@arif-VirtualBox:~$ <b>mkdir sendmail</b>
arif@arif-VirtualBox:~$ <b>cd sendmail</b>
arif@arif-VirtualBox:~$ <b>virtualenv .</b>
arif@arif-VirtualBox:~$ <b>source bin/activate</b>
arif@arif-VirtualBox:~$ <b>pip freeze</b>
arif@arif-VirtualBox:~$ <b>pip install django==1.8</b>
arif@arif-VirtualBox:~$ <b>django-admin.py startproject sendmail</b>
arif@arif-VirtualBox:~$ <b>python manage.py runserver</b>
            </pre>

			
			<div class="alert alert-info">we can stop server using Ctrl+c keys</div>
			<h3></h3>
			<pre class="prettyprint">
arif@arif-VirtualBox:~$ <b>python manage.py migrate</b>

arif@arif-VirtualBox:~$ <b>python manage.py createsuperuser</b>
username:aags #whatever you want
email:xyz@xyz.com #whatever you want
password:aags #whatever you want
password again:aags #whatever you want
            </pre>

<div class="alert alert-info">
till now we created super user(admin)  <a href="https://docs.djangoproject.com/en/1.9/ref/django-admin/" target="_blank" class="btn btn-success">know more about djnago-admin</a>
</div>
			
<div class="alert alert-info">
Now Your Project Structure should be like this <br/>
<img src="images/ice_screenshot_20151216-001908.png">
</div>	

<div class="alert alert-info">
The place where your manage.py is exists that is your Root folder and in the django language we called it <b>BASE_DIR</b>
</div>

<div class="alert alert-info">
Now create app for your project,I am creating user_panel app
</div>
			
			<pre class="prettyprint">
arif@arif-VirtualBox:~$ <b>python manage.py startapp user_panel</b>	
			</pre>

<div class="alert alert-info">
we need to register our app inside setiing.py,so that our model can we interact with database system properly
</div>			
			
			
			<pre class="prettyprint">
INSTALLED_APPS = (
    'django.contrib.admin',
    'django.contrib.auth',
    'django.contrib.contenttypes',
    'django.contrib.sessions',
    'django.contrib.messages',
    'django.contrib.staticfiles',
    'user_panel'
)
			</pre>


<div class="alert alert-info">
Now my requirement is i need to create templates folder(you can create whatever you want),inside template folder i can contain my all .html file(view part)

create templates folder inside base directory,base directory is always your manage.py container directory

after doing this first i need to tell to my settings.py file,this is the information of my templates file
</div>

			
			
			<pre class="prettyprint">
TEMPLATES = [
    &#123;
        'BACKEND': 'django.template.backends.django.DjangoTemplates',
        'DIRS': [os.path.join(BASE_DIR, "templates")],                  #add/see here
        'APP_DIRS': True,
        'OPTIONS': &#123;
            'context_processors': [
                'django.template.context_processors.debug',
                'django.template.context_processors.request',
                'django.contrib.auth.context_processors.auth',
                'django.contrib.messages.context_processors.messages',
            ],
        },
    },
]
             </pre>



<div class="alert alert-info">
prepare settings.py(put below code inside settings.py at any place)
</div>

			
			<pre class="prettyprint">
EMAIL_HOST = 'smtp.gmail.com'
EMAIL_HOST_USER = 'xyz@xyz.gmail.com'
EMAIL_HOST_PASSWORD = 'xyz'
EMAIL_PORT = 587
EMAIL_USE_TLS = True
            </pre>



<div class="alert alert-info">
prepare models.py
</div>

			<pre class="prettyprint">
from django.db import models

# Create your models here.

class SendMail(models.Model):
    name=models.CharField(max_length=120,blank=True,null=True)
    message=models.TextField(blank=True,null=True)
            </pre>
<div class="alert alert-info">
prepare forms.py
</div>
            <pre class="prettyprint">
from django import forms

from  .models import SendMail


class SendMailForm(forms.ModelForm):
    class Meta:
        model=SendMail
        fields=["name","message"]
            </pre>
 <div class="alert alert-info">
prepare views.py
</div>
            <pre class="prettyprint">
from django.core.mail import send_mail
from django.shortcuts import render

# Create your views here.
from .forms import SendMailForm
def home(request):
    title="Send Mail With Django And Gmail Smtp"
    form=SendMailForm(request.POST or None)
    context=&#123;
    "template_title":title,
    "form":form,
    }
    if form.is_valid():
        instance=form.save(commit=False)
        name=form.cleaned_data.get("name")
        message=form.cleaned_data.get("message")
        instance.save()
        subject="Testing SMTP Mail Service Of Gmail"
        contact_message="Name of the mailer is:---" +name+" And Message:---"+message
        from_email="ak.khan188@gmail.com"
        to_email=["ak.khan188@gmail.com","tech.arifkhan08@gmail.com"]
        send_mail(subject,contact_message,from_email,to_email,fail_silently=False)
        context=&#123;
                 "success_report":"Message Sent Successfully",
                 }
    return render(request,"home.html",context)
            </pre>



<div class="alert alert-info">base.html</div>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
    &lt;title>&#123;&#123;template_title}}&lt;/title>
&lt;/head>
&lt;body>
             &lt;div class="container">
             &#123;% block content%}
             
               &#123;% endblock %}
               &lt;/div>
&lt;/body>
&lt;/html>
</pre>




<div class="alert alert-info">home.html</div>
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


            <div class="alert alert-success">
            	output
            </div>

            <img src="<?php echo base_url()?>/static/images/ice_screenshot_20151216-162820.png" class="img-responsive">
            <h3>OUTPUT</h3><br/>
            <img src="<?php echo base_url()?>/static/images/ice_screenshot_20151216-163813.png" class="img-responsive">
            <br/><br/><br/><br/>
