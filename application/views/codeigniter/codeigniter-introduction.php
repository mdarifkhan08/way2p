<div class="alert alert-success" style="margin:15px;">
<strong>			
&rarr; Codeigniter is a MVC framework for PHP.<br/>
&rarr; MVC achronym for Model,View and Controller<br/>
&rarr; Model contains logic,database connectivity and algorithm<br/>
&rarr; View is having UI part like html,xhtml<br/>
&rarr; Controller get the request first by user then it decide which model is suited for view and it also decide for which view.
</strong>    
</div> 

			
			<h3>Prepare setup</h3>

<div class="alert alert-success" style="margin:15px;">
<strong>			
&rarr; Download codeigniter 3.x and extract zip file .and <br/>
&rarr; Copy folder application,system and index.php file to your project root folder.  <br/>
</strong>    
</div>            

			
			
			
			<h3>Prepare Controller</h3>
<div class="alert alert-success" style="margin:15px;"><strong>&rarr; Now create file HomeController.php in controller folder <br/>
			</strong></div>
<pre class="prettyprint">
<strong>

&lt;?php
class HomeController extends CI_Controller{
	public function index(){
		echo "This is controller it is used for control view, pass the variable to view and etc.<br/>";
	    
	    echo "index() method in controller called by default.";
	}
}
?>
 </strong>           
            </pre>

			
			
			<h3>Access Link</h3>
			<pre class="prettyprint">
				 <strong> 
http://localhost/MyApp/index.php/<span>HomeController</span>

&arr;HomeController is a controller name.
 </strong> 
            </pre>

			
			
			
			<h3>output</h3>
			<pre class="prettyprint">
<strong>
<img src="?php echo base_url();?>static/images/ice_screenshot_20151025-173504.png">
</strong>	
			</pre>

			
			
			<h3>Output without index.php in url</h3>
<div class="alert alert-success" style="margin:15px;"><strong>&rarr; To remove index.php from url we need to know little bit knowledge of .htaccess file.
<br/>&rarr; I am working in wamp server so i need to enable first <span>rewrite_module</span>.it is available inside Apache/Apache Modules/rewrite_module

<br/>&rarr;Now create .htaccess file in root folder and put below code. 


</strong></div>

<h3>.htaccess(create this in root folder)</h3>
<pre class="prettyprint">
<strong>
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule .* index.php/$O [PT,L]
</strong>
			</pre>

			<h3>New Access Url</h3>
			<pre class="prettyprint">
<strong>
http://localhost/MyApp/<span>HomeController</span>
</strong>
            </pre>
			
			
			<h3>New Output</h3>
			<pre class="prettyprint">
<strong>
<img src="<?php echo base_url();?>static/images/ice_screenshot_20151025-175615.png">
</strong>
             </pre>
