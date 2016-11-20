			<h3></h3>
			<pre class="prettyprint">
A model is the single, definitive source of information about your data. It contains the essential fields and behaviors of the data you’re storing. Generally, each model maps to a single database table.

<a href="https://docs.djangoproject.com/en/1.9/topics/db/models/" class="btn btn-success" target="_blank">know more</a>  
            </pre>

			
			
			
			<h3>newsletter/models.py</h3>
			<pre class="prettyprint">

from django.db import models

# Create your models here.

class SignUp(models.Model):
          email=models.EmailField()
          full_name=models.CharField(max_length=120,blank=True,null=True)
          timestamp=models.DateTimeField(auto_now_add=True,auto_now=False)
          updated=models.DateTimeField(auto_now_add=False,auto_now=True)


          def  __unicode__(self):
                  return self.email
            </pre>

			
			
			<h3>arter prepare model every time we need to migrate our model</h3>
			<pre class="prettyprint">
(django1)arif@arif-VirtualBox:~/Desktop/django1/src$ <b>python manage.py make migrations</b>


(django1)arif@arif-VirtualBox:~/Desktop/django1/src$ <b>python manage.py migrate</b>
            </pre>




<h3>Registration Of Model inside admin.py</h3>
			<pre class="prettyprint">

from django.contrib import admin

# Register your models here.

from .models import SignUp

class SignUpAdmin(admin.ModelAdmin):
    list_display=["__unicode__","updated","timestamp","full_name"]
    model = SignUp



admin.site.register(SignUp,SignUpAdmin)
            </pre>
