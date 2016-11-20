			<h3>views.py</h3>
			<pre class="prettyprint">
from django.shortcuts import render

# Create your views here.
from .forms import SignUpForm
def home(request):
              
    #if request.method=="POST":
    #    print request.method
    #print request
    title="Welcome Page"
    #use the name of a class as a function to create the instance of a class and assign to a any variable here i assigned to form
    form=SignUpForm(request.POST or None)
    
    #is_valid() is a predefiened function that is helpful to check form is valid or not if form valida then it will check below code
    if form.is_valid():
        #instance of form have predefined method save to save the data in the database
        #commit=False useful when we dont want to save the data only just want to instance of form
        instance=form.save(commit=False)
        #we can apply conditions on instance of form to check the fields
        if instance.full_name==None:
            instance.full_name="Default Name"
        #finally we can save the form data
        instance.save()
        #i am checking what is the data on terminal console
        print instance.email
         #i am checking what is the data on terminal console
        print instance.full_name
    #context is a dictonary variable that can hold data variable inside it and later assign as array to view page
    context=&#23;
    "template_title":title,
    "form":form,

    }
    return render(request,"home.html",context)


def about_us(request):
    return render(request,"about-us.html",&#23;})    
            </pre>

			
			
			
			<h3>home.html</h3>
			<pre class="prettyprint">

&lt;!DOCTYPE html>
&lt;html>
&lt;head>
    &lt;title>&#23;&#23;template_title}}</title>
&lt;/head>
&lt;body>
&#23;&#23;template_title}}

&lt;br/>&lt;br/>
&lt;form action="" method="POST">&#23;%  csrf_token %}
&#23;&#23;form.as_p}}
&lt;input type="submit" name="submit" value="submit"/>
&lt;/form>
&lt;/body>
&lt;/html>
            </pre>

			
	



<h3>views.py</h3>
			<pre class="prettyprint">
from django.shortcuts import render

# Create your views here.
from .forms import SignUpForm
def home(request):
    title="Welcome Page"
    form=SignUpForm(request.POST or None)
    context=&#23;
    "template_title":title,
    "form":form,
    }
    if form.is_valid():
        instance=form.save(commit=False)
        if not instance.full_name:
            instance.full_name="Default Name"
        instance.save()
        context=&#23;
                 "template_title":"Your Data Send Successfully",
                 }
        
    
    return render(request,"home.html",context)
    </pre>

    <h3>views.py</h3>
			<pre class="prettyprint">
from django.shortcuts import render

# Create your views here.
from .forms import SignUpForm
def home(request):
    title="Welcome Page"
    form=SignUpForm(request.POST or None)
    context=&#23;
    "template_title":title,
    "form":form,
    }
    if form.is_valid():
        form.save()
        context=&#23;
                 "template_title":"Your Data Send Successfully",
                 }
        
    
    return render(request,"home.html",context)
    </pre>

    <h3>views.py</h3>
			<pre class="prettyprint">
from django.shortcuts import render

# Create your views here.
from .forms import SignUpForm
def home(request):
    title="Welcome Page"
    form=SignUpForm(request.POST or None)
    context=&#23;
    "template_title":title,
    "form":form,
    }
    if form.is_valid():
        instance=form.save(commit=False)
        full_name=form.cleaned_data.get("full_name")
        if not full_name:
            full_name="Arif Khan"
        instance.full_name=full_name
        instance.save()
        context=&#23;
                 "template_title":"Your Data Send Successfully",
                 }
        
    
    return render(request,"home.html",context)
    </pre>
