			<h3>forms.py</h3>
			<pre class="prettyprint">
from django import forms

from .models import  SignUp

class SignUpForm(forms.ModelForm):
    class Meta:
        model=SignUp
        fields=["email","full_name"]
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
