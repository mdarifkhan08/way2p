			<h3></h3>
			<pre class="prettyprint">
Resource manage in spring
By doing so we can add multiple folders inside this resources folder

like image folder in which we can add miltiple images,even we create multiple images folder
All java script and css files collection we can contain here

Step:1

Write code in front controller(frontcontroller or DispatcherServlet is a same thing) 
front controller is servlet-config.xml

&lt;mvc:resources location="/resources/" mapping="/resources/**" />
Step:2

create folder resources If you are using maven then create resources folder inside webapp

For Dynamic web project add resources folder inside web content
Step:3

If we want to use our resources in jsp file then how we can access to it and retrieve

&lt;img src="resources/image.jpg" >
if you kept your data inside your resources folder.

&lt;img src="resources/image/image.jpg" >
if you kept your data inside your image folder and this image folder is inside resources.

All the resource we can access like this      
            </pre>
