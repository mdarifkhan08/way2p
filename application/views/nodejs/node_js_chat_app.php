<h2>Node.Js Chat Application With socket.io</h2>
		create Chat Folder on desktop and go to command prompt and give
		command change directory(CD) to your chat folder. <br> after
		doing this give command <strong>npm install</strong><br> after
		this give command <strong>npm init</strong><br> after this you
		will have package.json in your chat folder with node_module folder.

<pre class="prettyprint">
	&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Chat&lt;/title&gt;
&lt;style&gt;
#chat{
height:500px;
float:left;
width:1000px;
overflow-y:auto;
height:200px;
}

&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;


&lt;div id=&quot;chat&quot; rows=&quot;50&quot; cols=&quot;60&quot;&gt;&lt;/div&gt;


&lt;form id=&quot;send-message&quot;&gt;
&lt;input size=&quot;35&quot; id=&quot;message&quot;&gt;&lt;/input&gt;
&lt;input type=&quot;submit&quot;&gt;&lt;/input&gt;
&lt;/form&gt;

&lt;script src=&quot;http://code.jquery.com/jquery-2.1.3.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;/socket.io/socket.io.js&quot;&gt;&lt;/script&gt;
&lt;script&gt;
jQuery(function($){

var socket=io.connect();
var $messageForm =$(&#39;#send-message&#39;);
var $messageBox=$(&#39;#message&#39;);
var $chat=$(&#39;#chat&#39;);

$messageForm.submit(function(e){
e.preventDefault();
socket.emit(&#39;send message&#39;,$messageBox.val());
$messageBox.val(&#39;&#39;);
});


socket.on(&#39;new message&#39;,function(data){
$chat.append(data+&quot;&lt;br/&gt;&quot;);
});
});
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
	</pre>
<h2>create app.js</h2>
		<pre class="prettyprint">
	var express= require('express'),
app = express(),
server = require('http').createServer(app),
io = require('socket.io').listen(server);

server.listen(3000);

app.get('/',function(req,res){
res.sendfile(__dirname + '/index.html');
});


io.sockets.on('connection',function(socket){
socket.on('send message',function(data){
io.sockets.emit('new message',data);
});
});
	
	</pre>

		<h2>create package.json</h2>

		<pre class="prettyprint">
	{
  "name": "Home",
  "version": "1.0.0",
"private":"true",
  "description": "",
  "main": "index.js",
  "scripts": {
    "test": "echo \"Error: no test specified\" && exit 1"
  },
  "author": "",
  "license": "ISC",
"dependencies":{

"socket.io":"1.3.5",
"express":"4.12.2"

}
}
	
	</pre>
		<h2>output</h2>
		<img src="resources/program_images/vc.png" width="400px"
			height="400px" /> <img src="resources/program_images/vcv.png"
			width="400px" height="400px" />
<h2>Install and begin Process</h2>
		<div id="tabs">
			<ul>
				<li><a href="#tab-1">Install Node.js</a></li>
				<li><a href="#tab-2">Chat App </a></li>
			</ul>
			<div id="tab-1">
				<h1>Node.js Basic setup</h1>

				<strong>Installation of node.js in the Ubuntu operating
					system.</strong> <br> open your terminal window and add these command
				line by line to install the node<br>
				<br>
				<br> >sudo apt-get install python-software-properties<br>
				<br> >sudo apt-add-repository ppa:chris-lea/node.js<br>
				<br> >sudo apt-get update<br>
				<br> >sudo apt-get install nodejs npm<br>
				<br> >sudo apt-get install nodejs<br>
				<br> >node --version<br>
				<br> after install close your terminal and create your project
				work start.
</div>
				<div id="tab-2">
					<h1>First Project is chat application with node.js</h1>

					step by step procedure to create project<br>
					<br> >cd Desktop/ <br>
					<br> >mkdir App1<br>
					<br> >npm init<br>
					<br> after this it will ask you some setting you have to press
					ENTER most of the time if you want then you can chage the
					description part and also author even licence also.<br>
					<br> after completion this process you have to provide
					dependencies for your project in <strong>package.json</strong> <br>
					<br> go to package.json and open with editor and add
					dependencies<br>
					<br> "dependencies":{<br> "express":"1.3.5",<br>
					"socket.io":"4.12.2"<br> }<br> <br> <br> after
					this go to again on terminal and write command<br>
					<br> >npm install<br>
					<br> >touch index.html<br>
					<br> >touch app.js <br>
					<br> after this go to your App1 folder that is available on
					Desktop<br> inside open app.js and index.html in editor then
					start your code to make application.
				</div>