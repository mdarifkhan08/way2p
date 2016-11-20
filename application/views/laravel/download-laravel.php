<div class="alert alert-success">
	composer create-project laravel/laravel l1 --prefer-dist 
	<br/><br/>
	l1 is a project name
</div>




<h3>make setup inside project</h3><hr/>
<div class="alert alert-success">
create main.blade.php inside resources/views directory<br/>
(main.blade.php) file is a common file, it has common data that all files share.<br/>
inside main.blade.php we can dynamically include data for each and every page, we can think like that header, footer is same for all and body content change for every page so, main.blade.php dynamically add data into the page for content section.
</div>



<h3>static file setup</h3><hr/>
<div class="alert alert-success">
all the static content inside the public directory, so create new directory css, js, images inside public directory.
</div>

<h3>start laravel server</h3><hr/>
<div class="alert alert-success">
php artisan serve --port=8080
</div>

<h3>create controller using command</h3><hr/>
<pre class="prettyprint">
php artisan make:controller HomeController
</pre>

<h3>create Model using command</h3><hr/>
<pre class="prettyprint">
php artisan make:model HomeModel
</pre>

<h3>command to check all routes</h3><hr/>
<pre class="prettyprint">
php artisan route:list
</pre>

<h3>php artisan make</h3><hr/>
<div class="alert alert-success">
By using this command we can find all the list of make command.
</div>


<h3>php artisan route</h3><hr/>
<div class="alert alert-success">
Bu using this command we can find all the list of route command.
</div>





<h3>php artisan </h3><hr/>
<div class="alert alert-success">
this command provide all the command that php artisan used.
</div>



<h3>php artisan tinker</h3><hr/>
<div class="alert alert-success">
this provide command line interface to your application(requied in development only).
</div>



<h3>php artisan make:request CreateStudentRequest</h3><hr/>
<div class="alert alert-success">
Request class is useful for validation purpose and authorization purpose.<br/>
<br/>
Request class have two different method 
<br/>
<br/>
1. authorize method<br/>
2. rules method<br/>

<br/>
authorize method is useful when we are working with user panel or membership system, if authorize metod return false, it means any one can not make this request, only specific person make this request.<br/><br/>

Rules method is useful for validation purpose.
</div>
