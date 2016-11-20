			<h3>validation on email field(form.py)</h3>
			<pre class="prettyprint">

from django import forms


from .models import  SignUp

class SignUpForm(forms.ModelForm):
    class Meta:
        model=SignUp
        fields=["full_name","email"]
    def clean_email(self):
         email=self.cleaned_data.get('email') # to get the data from the input field
         # we want email address like abc@gmail.edu then we can do this
         if not "edu" in email:
             raise forms.ValidationError("please enter .edu email address") 
         return email   # if everything correct then it will return correct email address,it means valid data
            </pre>

			
			
			
			<h3>another way to make same validation</h3>
			<pre class="prettyprint">

from django import forms


from .models import  SignUp

class SignUpForm(forms.ModelForm):
    class Meta:
        model=SignUp
        fields=["full_name","email"]
    def clean_email(self):
         email=self.cleaned_data.get('email')
         email_base,provider=email.split("@") #before the @ part is email_base and after that we call provider
         domain,extension=provider.split('.') #provider is also seperate by . ,and it has two component domain and extension
                                              #suppose your email is abc@gmail.com gmail is domain and com is extension
         if not extension=="yahoo":
             raise forms.ValidationError("please enter yahoo email address")
         return email #if everything goes well it will return your correct data
            </pre>

			
			
			<h3></h3>
			<pre class="prettyprint">

from django import forms


from .models import  SignUp

class SignUpForm(forms.ModelForm):
    class Meta:
        model=SignUp
        fields=["full_name","email"]
    def clean_email(self):
         email=self.cleaned_data.get('email')
         email_base,provider=email.split("@")
         domain,extension=provider.split('.')
         if not extension=="yahoo":
             raise forms.ValidationError("please enter yahoo email address")
         return email

     def clean_full_name(self):
         full_name=self.cleaned_data('full_name')
        #write validation  here

         return full_name
            </pre>
