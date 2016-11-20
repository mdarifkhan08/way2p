

			<div class="alert alert-success">
We can register a model inside admin.py directly but if we want to register a model with the form then can we can also achieve this and we can also play around with form view part, like we can move fields.
			</div>
			<h3>forms.py(this file you need to create manually inside your app)</h3>
			<pre class="prettyprint">
from django import forms


from .models import  SignUp

class SignUpForm(forms.ModelForm):
    class Meta:
        model=SignUp
        fields=["full_name","email"]     
            </pre>

			
			
			
			<h3>admin.py</h3>
			<pre class="prettyprint">

from django.contrib import admin

# Register your models here.
from .forms import SignUpForm
from .models import SignUp

class SignUpAdmin(admin.ModelAdmin):
    list_display=["__unicode__","updated","timestamp","full_name"]
    form = SignUpForm



admin.site.register(SignUp,SignUpAdmin)
            </pre>
