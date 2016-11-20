<div id="tab-1">
						<h2>Talking to browser by node.js</h2>
						i am using ubuntu operating system<br> <br> &rarr;go to
						terminal(command prompt) and write command<br> <br> <strong>>cd
							Desktop</strong> (it means we are changing the directory to the Desktop) <br>
						<br> <strong>>mkdir node</strong> (it means make folder on
						Desktop with name node)<br> <br> <strong>>npm
							init</strong> (it means we want node package manager initialize so that we
						will have package.json inside node directory.) <strong>when
							ever we wrote npm init i will ask to some info.we can provide or
							simply press ENTER for default.</strong><br> <br> <strong>>npm
							install express --save</strong> (to add dependencies of express in
						package.json)<br> <br> if you have default package.json
						then you have to create index.js otherwise create that .js file
						that you have provided while creating npm init.<br> <br>
						<strong>>touch index.js</strong> (it will create index.js file)<br>
						<br> edit your app.js file<br> <br>

						<h1>index.js</h1>
						<pre class="prettyprint">
var express = require('express');   //first we need express then we can invoke so express is 
                                    //  holoding express so we need to invoke express.

var app = express(); //var app is the global variable now by using this we can 
                     // access to the all functionality of express	
                     
                     
//by using app variable we can interect to browser url  so

app.get('/',function(req,res){  /*this peace of code is telling when ever app variable 
                                 * get home url/first url that we access then do some function
                                   
                                 *  here no name of function we took and req take the value by home url and 
                                 *  res give response as a output.
                                   */
res.send("Hello World");
})                 			
				



var server=app.listen(3000,function(){   /* this peace of code telling app variable will listen to 3000 port
                                          * after listen to port this will do one function and this function
                                          * having no name .
                                          *function will send a message to console by using console.log
                                          
                                          */
console.log('Listening to 3000');
})

				
				</pre>

						&rarr;after prepare this give command<br> <br> <strong>>node
							index.js</strong> (it will do work with both browser and server side also)<br>
						<br> after that go to browser and open link localhost:3000
						then you will see the output in both side one side is browser and
						other side is terminal that is continuously listening to port.
					</div>






















					<div id="tab-2">

						<h2>Routing in the Node.js with express</h2>

						to make this app all command are same but we have to create app.js
						file earlier we have created index.js

						<h2>app.js</h2>

						<pre class="prettyprint">
				
				var express=require('express');
				
				var app=express();
				
				app.get('/',function(req,res){
				res.send('Hello World');
				});
				
				app.get('/:name?',function(req,res){
				var name=req.params.name;
				res.send('Hello '+name);
				});
				
				app.get('/:name?/:city?',function(req,res){
				var name=req.params.name;
				var city=req.param.city;
				res.send('Hello '+name);
				});
				
				app.get('*',function(req,res){
				
				res.send('bad url');
				});
				
				
				app.listen(3000,function(){
				console.log("listening to port 3000")
				});
				
				</pre>




					</div>

					<div id="tab-3">

						<h2>Using Template in node.js</h2>

						we can use template by two way<br> <br> 1. By using
						Jade(node template engine) or<br> <br> 2. By using
						EJS(Embedded java script)<br> <br> jade is little bit
						different to use so we will use EJS.Ejs is very much similar to
						html.<br> when we want to data from json(javascript object
						notation) in EJS file we have some different way but this way is
						quite similar to jsp scriptlet tag <br> <br> for pass
						the javascript object to ejs we use <strong>&lt;%= %></strong> it
						is very much similar to jsp expression tag <br> <br> for
						pass javascript we use <strong>&lt;% %></strong>
						<h1>Installation of EJS</h1>


						<strong>>npm install ejs --save</strong>

						<h1>app.js</h1>

						<pre class="prettyprint">
var express=require('express');
var app=express();
		
app.set('view engine','ejs');        //create views folder this is default
		
app.set('views',__dirname+'/arif')  //if .ejs file we have kept inside this then use this
		                                  
		
app.get('/',function(req,res){
res.render('default')                //in the views folder we have default.ejs so that we are using default here
})
		
//app.get('/home',function(req,res){
//res.render('default',{'title':'INCEPTION'})//here we are passing javascript object but we can pass json object also     
//})



app.get('/home1',function(req,res){
res.render('default',{'title':'INCEPTION','users':['arif','rohit','pavan']})   
})
		</pre>


						<h2>default.ejs</h2>
						default.ejs should be inside views folder
						<pre class="prettyprint">
&lt;html>
&lt;head>
&lt;title>&lt%=title %>&lt;/title>
&lt;/head>
&lt;body>
&lt;%=title %>
Hello this is body part.

&lt;ul>
&lt;% for(var i=0; i&lt;users.length; i++){%>
&lt;li>&lt;%= users[i] %>&lt;/li>
&lt;% }%>


&lt;/body>
&lt;/html>		
		</pre>
					</div>























					<div id="tab-4">
						<h2>Partials</h2>
						partials is just like java include file<br> in java to
						include file we use &lt;%@ include file="/location of file" %><br>
						in node.js partials use for add header,footer and many more
						partials to add views.<br> to add partials in node.js with
						EJS we use <br> <br> &lt;% include location/of/file %>






					</div>
























					<div id="tab-5">
						<h2>To install dependencies in node.js in ubuntu operating
							system.</h2>


						<br> <br> <strong>>npm install express --save</strong> <br>
						<br> <strong>npm install socket.io --save</strong><br> <br>
						<strong>>npm install ejs --save</strong><br> <br>
					</div>














					<div id="tab-6">
						<h2>locals</h2>
						locals is use to define a variable in app.js, and we can use this
						variable in .ejs file
						<h1>app.js</h1>
						<pre class="prettyprint">
var express=require('express');
var app=express();
app.set('view engine','ejs');        
		

app.locals.pagetitle="Hello Worlds";  //we can use this variable in all the .ejs file		                                  
		
app.get('/',function(req,res){
res.render('default')                
})
		
//app.get('/home',function(req,res){
//res.render('default',{'title':'INCEPTION'})
//})

app.get('/home1',function(req,res){
res.render('default',{'title':'INCEPTION','users':['arif','rohit','pavan']})   
})
		
		</pre>

						<h1>default.ejs</h1>
						<pre class="prettyprint">
&lt;html>
&lt;head>
&lt;title>&lt%=title %>&lt;/title>
&lt;/head>
&lt;body>
&lt;%=pagetitle %>
Hello this is body part.

&lt;ul>
&lt;% for(var i=0; i&lt;users.length; i++){%>
&lt;li>&lt;%= users[i] %>&lt;/li>
&lt;% }%>


&lt;/body>
&lt;/html>		
		</pre>
					</div>






					<div id="tab-7">
						<h2>Configure Express-generator to make node.js application
							Quickly.</h2>

						express-generator provide complete setup for node.js project.Lets
						Start go to terminal and give command<br> <br> <strong>>sudo
							npm install -g express-generator</strong> (i want this generator on
						Desktop so first i should set path to desktop)<br> <br>
						After this provide name of the project by below command<br> <br>
						<strong>>express -e App</strong><br> <br> After this it
						will show you message Add Dependencies with one command also it
						will show you run application with command copy both command and
						paste respectivily on the terminal<br> <br> <strong>>cd
							App && npm install</strong><br> <br> <strong>>DEBUG=App:*
							./bin/www</strong><br> <br> then open your terminal with url <strong>localhost:3000</strong>

					</div>



				</div>
			</div>




