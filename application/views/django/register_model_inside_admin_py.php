			<h3>admin.py</h3>
			<pre class="prettyprint">
from django.contrib import admin

# Register your models here.

from .models import SignUp

class SignUpAdmin(admin.ModelAdmin):
    list_display=["__unicode__","updated","timestamp","full_name",]
    class Meta:
             model=SignUp



admin.site.register(SignUp,SignUpAdmin)     
            </pre>
