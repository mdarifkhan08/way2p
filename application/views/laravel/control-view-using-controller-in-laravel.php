<h3>prepare Controller - app/Http/Controllers/AjaxController.php</h3>
<pre class="prettyprint">
&lt;?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function post_request_in_ajax(){
    	$title="Send Form Data Using Post Method And Ajax, Send Form Data With Post Request And Ajax";
    	$heading="Send Form Data Using Ajax and Post Request";
    	return view('ajax.send_form_data_using_post_method_and_ajax',compact('title','heading'));
    }

    public function get_request_in_ajax(){
    	$title="Send Get Request By Using Anchor Tag And Ajax";
    	$heading="Send request to php by using anchor tag";
    	return view('ajax.send_request_by_anchor_tag',compact('title','heading'));
    }
}

</pre>


<h3>prepare route - app/Http/routes.php</h3>
<pre class="prettyprint">
Route::get('send-form-data-using-ajax-and-post-request','AjaxController@post_request_in_ajax');
Route::get('send-get-request-with-anchor-tag-and-ajax','AjaxController@get_request_in_ajax');
</pre>


<h3>prepare view layout - resources/views/base.blade.php</h3>
<pre class="prettyprint">
;!DOCTYPE HTML>
&lt;html>
&lt;head>
&lt;title>{{$title}}&lt;/title>
&lt;meta name="google-site-verification" content="AIzaSyB5Zupfv1GbvriEdE-bCFk-EhBNty4hc_Y" />
&lt;meta name="viewport" content="width=device-width, initial-scale=1">
&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
&lt;meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
&#64;yield('meta')
&lt;script type="text/javascript" src="&lt;?php echo asset('js/prettify.js')?>">&lt;/script>
&lt;script type="text/javascript" src="&lt;?php echo asset('js/run_prettify.js')?>">&lt;/script>
&lt;/head>
&lt;body>
&lt;br />
	&lt;div class="container-fluid">
		&lt;div class="col-md-8">
&lt;br/>&lt;br/>
			&lt;h1>{{$heading}}&lt;/h1>
			&lt;hr />
			&#64;yield('content')
		&lt;/div>
&lt;br/>&lt;br/>
	&lt;/div>
&lt;/div>
	&lt;/div>
&lt;/body>
&lt;/html>
</pre>


<h3>prepare view layout - resources/views/ajax.blade.php</h3>
<pre class="prettyprint">
&#64;extends('base')


&#64;section('meta')
&lt;meta name="keywords" content="" />
&lt;meta name="description"  content="" />
&#64;stop



&#64;section('content')
&lt;div class="alert alert-success">
	content data goes here
&lt;/div>
&lt;/pre>
&#64;stop
</pre>
