<h3>Work With Migration</h3><hr/>
<pre class="prettyprint">
php artisan make:migration create_articles_table --create=articles
</pre>

<h3></h3><hr/>
<pre class="prettyprint">
&lt;?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->timestamps();
            $table->timestamp('published_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
</pre>

<h3>to create table in db</h3><hr/>
<pre class="prettyprint">
php artisan migrate
</pre>


<h3>Work With Model</h3><hr/>
<pre class="prettyprint">
php artisan make:model Article
</pre>


<h3>Work With Model</h3><hr/>
<pre class="prettyprint">
&lt;?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=['title','body','published_at'];
}
</pre>


<h3>work with php tinker</h3><hr/>
<div class="alert alert-info">It is a command line interface where we can use php from command line</div>
<pre class="prettyprint">
php artisan tinker



>$articles= new App\Article;
>$articles->title='This is Demo Application';
>$articles->body='Laravel Is awesome';
>$articles->published_at=Carbon\Carbon::now();

>$articles
>$articles->toArray();

/*Inserting the data into the database */
>$articles->save();
</pre>


<h3>Work With Controller</h3><hr/>
<pre class="prettyprint">
php artisan make:controller ArticlesController
</pre>

<h3>route.php</h3><hr/>
<pre class="prettyprint">
Route::get('articles','ArticlesController@index');
Route::get('articles/{id}','ArticlesController@show');
</pre>


<h3>Controller File</h3><hr/>
<pre class="prettyprint">
&lt;php
namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
	public function index(){
		$articles=Article::all();
		return view('articles.index',compact('articles'));
	}
	public function show($id){
		$article=Article::find($id);
		if(is_null($article)){
			abort(404);
		}
		return view('articles.show',compact('article'));
	}
}
</pre>



<h3>app.blade.php</h3><hr/>
<pre class="prettyprint">
&lt;!Doctype html>
&lt;html>
&lt;head>
  &lt;meta charset="UTF-8">
  &lt;title>&lt;/title>
  &lt;link rel="stylesheet" href="css/bootstrap.css"/>
&lt;/head>
&lt;body>
   &lt;div class="container">
      &#64;yield('content')
   &lt;/div>
   
   &#64;yield('footer')
&lt;/body>
&lt;/html>
</pre>


<h3>articles/index.blade.php</h3><hr/>
<pre class="prettyprint">
&#64;extends('app')
&#64;section('content')
&lt;h1>Article&lt;/h1>&lt;hr/>
  &#64;foreach($articles as $article)
   &lt;div>
    &lt;h2>&lt;a href="/articles/&#123;&#123;$article->id}}">&#123;&#123;$article->title}}&lt;/a>&lt;/h2>
    &lt;!--  below line would be the another way to do same thing -->
    &lt;h2>&lt;a href="&#123;&#123;action('ArticlesController&#64;show',[$article->id])}}">&#123;&#123;$article->title}}&lt;/a>&lt;/h2>
    &lt;!--  below line would be the another way to do same thing -->
    &lt;h2>&lt;a href="&#123;&#123;url('/articles', $article->id)}}">&#123;&#123;$article->title}}&lt;/a>&lt;/h2>
     &lt;div class="body">&#123;&#123;$article->body}}&lt;/div>
   &lt;/div>
  &#64;endforeach
&#64;stop
</pre>


<h3>articles/show.blade.php</h3><hr/>
<pre class="prettyprint">
&#64;extends('app')
&#64;section('content')
&lt;h1>Article&lt;/h1>&lt;hr/>
  
   &lt;div>
     &lt;h2>&#123;&#123;$article->title}}&lt;/h2>
     &lt;div class="body">&#123;&#123;$article->body}}&lt;/div>
   &lt;/div>
 
&#64;stop
</pre>

<div class="alert alert-info">
till here we have inserted the record using tinker tool, but in the real time we inserted the data into the database using form so now lets work on it.
</div>

<h3>make a setting for form facades</h3><hr/>
<pre class="prettyprint">
composer require laravelcollective/html
</pre>

<h3>config/app.php</h3><hr/>
<pre class="prettyprint">
Collective\Html\HtmlServiceProvider::class,
</pre>

<h3>config/app.php</h3><hr/>
<pre class="prettyprint">
'Form'      => Collective\Html\FormFacade::class,
'Html'      => Collective\Html\HtmlFacade::class,
</pre>


<h3>articles/create.blade.php</h3>
<pre class="prettyprint">
&#64;extends('app')
&#64;section('content')
&lt;h1>Write a new Article&lt;/h1>&lt;hr/>

&#123;!! Form::open(['url' => 'articles']) !!}
&lt;div class="form-group">
      	&#123;!! Form::label('title','Title:') !!}
      	&#123;!! Form::text('title',null, ['class'=>'form-control']) !!}
&lt;/div>
&lt;div class="form-group">
      	&#123;!! Form::label('body','Body:') !!}
      	&#123;!! Form::textarea('body',null,['class'=>'form-control']) !!}
&lt;/div>
&lt;div class="form-group">
      	&#123;!! Form::label('published_at','Published On:') !!}
      	&#123;!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control']) !!}
&lt;/div>
      	&#123;!! Form::submit('Add Article', ['class'=>'btn btn-primary form-control']) !!}
&#123;!! Form::close() !!}

&#64;if($errors->any())
&lt;ul class="alert alert-danger">
&#64;foreach($errors->all() as $error)
   &lt;li>&#123;&#123;$error}}&lt;/li>
&#64;endforeach
&lt;/ul>
&#64;endif
&#64;stop
</pre>



<h3>route.php</h3>
<pre class="prettyprint">
Route::group(['middleware' => ['web']], function () {
	Route::get('articles','ArticlesController@index');
	Route::get('articles/create','ArticlesController@create');
	Route::get('articles/{id}','ArticlesController@show');
    Route::post('articles','ArticlesController@store');
});
</pre>

<h3>app/http/controllers/ArticlesController.php</h3>
<pre>
&lt;?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests\InsertEmployeeRequest;

use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
	public function index(){
		$articles=Article::latest('published_at')->where('published_at','&lt;=',Carbon::now())->get();//same thing we can achive with another way
		return view('articles.index',compact('articles'));
	}
	
	public function show($id){
		$article=Article::find($id);
		if(is_null($article)){
			abort(404);
		}
		return view('articles.show',compact('article'));
	}
	
	public function create(){
		return view('articles.create');
	}
	
	public function store(InsertEmployeeRequest $request){
		Article::create($request->all());
		return view('articles.create');
	}
  
}
</pre>




<h3>app/Article.php</h3>
<pre>
&lt;?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class  Article extends Model
{
    protected $fillable=['title','body','published_at'];
    
    /* It is useful to insert the time with the timestamp */
    
    public function setPublishedAtAttribute($date){
    	$this->attributes['published_at']=Carbon::createFromFormat('Y-m-d',$date);
    	
    }
    
}
</pre>


<h3>apply where query with different way</h3>
<pre class="prettyprint">
 
=====================app/http/controllers/ArticlesController.php================
&lt;?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests\InsertEmployeeRequest;

use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
	public function index(){
		$articles=Article::latest('published_at')->published()->get();
		return view('articles.index',compact('articles'));
	}
	
	public function show($id){
		$article=Article::find($id);
		if(is_null($article)){
			abort(404);
		}
		return view('articles.show',compact('article'));
	}
	
	public function create(){
		return view('articles.create');
	}
	
	public function store(InsertEmployeeRequest $request){
		Article::create($request->all());
		return view('articles.create');
	}
  
}
======================app/Article.php==================================
&lt;?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class  Article extends Model
{
    protected $fillable=['title','body','published_at'];
    
    public function scopePublished($query){
    	$query->where('published_at','<=',Carbon::now());
    }
    
    public function setPublishedAtAttribute($date){
    	$this->attributes['published_at']=Carbon::createFromFormat('Y-m-d',$date);
    	
    }
}
</pre>

<h3></h3>
<pre class="prettyprint">
public function show($id){
		$article=Article::find($id);
			
public function show($id){
		$article=Article::find($id);
		/*only first dd() method work so check it oe by one*/
		dd($article->created_at->month);
		dd($article->created_at->year);
		dd($article->created_at->day);
		dd($article->created_at->addDays(8)->format('Y-m'));
		dd($article->created_at->addDays(8)->format('m-y'));
		dd($article->created_at->addDays(8)->diffForHumans());
		return view('articles.show',compact('article'));
	}
		return view('articles.show',compact('article'));
	}
</pre>


<div class="alert alert-info">What we did above is just for demonstration purpose but in real time laravel provide different way to route create now lets work</div>

<h3>route.php</h3>
<pre class="prettyprint">
Route::group(['middleware' => ['web']], function () {
	Route::resource('articles','ArticlesController');
});
</pre>

<h3>to check all routes</h3>
<pre class="prettyprint">
php artisan route:list
</pre>

<img src="<?php echo base_url();?>static/images/ice_screenshot_20160212-125020.png" class="img-responsive"/>
