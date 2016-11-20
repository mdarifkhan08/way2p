<div class="alert alert-success">
	All the basic setting for authentication system is done by one command
</div>


<pre class="prettyprint">
	 :> <mark>php artisan make:auth </mark>
</pre>


<div class="alert alert-success">
	After running successfully this command we will get basic view files for authentication system
</div>

<div class="alert alert-success">
	<ul style="margin-left:15px;">
		<li>Now go to your route.php file and make route that you want to authenticate.</li>
		<li>suppose i created a url/route like <mark>http://way2programming.com/testing-authentication</mark></li>
		<li>This url will work on only for authenticate users.</li>
		<li>Now lets work on the route.php</li>
	</ul>
</div>
<pre class="prettyprint">
	Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('testing-authentication', 'TestingController@testing_auth')->middleware('auth');
});
</pre>


<div class="alert alert-info">
<ul style="margin-left:15px;">
	<li>To work with user system/panel first we need to use insert table into the database.</li>
	<li>That can be done by using command prompt or creating the table into the database</li>
	<li>as we are inside laravel framework and in laravel most of the work is done by using php artisan.</li>
	<li>php artisan help us to create the table into the database using command promt.</li>
	<li>Laravel Default setting have user migration php file so when we run our migrate command it will insert table, but for other table we need to first make migration</li>
	<li>Lets Create the table inside database using php artisan, nothing difficult we need to give one simple commnand to it, but first check your database connection properly connected to app or not inside .env file</li>
</ul>

</div>
<pre class="prettyprint">
	:> <mark>php artisan migrate</mark>
</pre>


<h3>If you want manually create table then check below</h3><hr/>
<pre class="prettyprint">
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;



CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;	
</pre>


<h2>I am putting view part also but it is not required to discuss</h2>

<h3>resources/views/auth/login.blade.php</h3>
<pre class="prettyprint">
&#64;extends('layouts.app')

&#64;section('content')
&lt;div class="container">
    &lt;div class="row">
        &lt;div class="col-md-8 col-md-offset-2">
            &lt;div class="panel panel-default">
                &lt;div class="panel-heading">Login&lt;/div>
                &lt;div class="panel-body">
                    &lt;form class="form-horizontal" role="form" method="POST" action="&#123;&#123; url('/login') }}">
                        &#123;!! csrf_field() !!}

                        &lt;div class="form-group&#123;&#123; $errors->has('email') ? ' has-error' : '' }}">
                            &lt;label class="col-md-4 control-label">E-Mail Address&lt;/label>

                            &lt;div class="col-md-6">
                                &lt;input type="email" class="form-control" name="email" value="&#123;&#123; old('email') }}">

                                &#64;if ($errors->has('email'))
                                    &lt;span class="help-block">
                                        &lt;strong>&#123;&#123; $errors->first('email') }}&lt;/strong>
                                    &lt;/span>
                                &#64;endif
                            &lt;/div>
                        &lt;/div>

                        &lt;div class="form-group&#123;&#123; $errors->has('password') ? ' has-error' : '' }}">
                            &lt;label class="col-md-4 control-label">Password&lt;/label>

                            &lt;div class="col-md-6">
                                &lt;input type="password" class="form-control" name="password">

                                &#64;if ($errors->has('password'))
                                    &lt;span class="help-block">
                                        &lt;strong>&#123;&#123; $errors->first('password') }}&lt;/strong>
                                    &lt;/span>
                                &#64;endif
                            &lt;/div>
                        &lt;/div>

                        &lt;div class="form-group">
                            &lt;div class="col-md-6 col-md-offset-4">
                                &lt;div class="checkbox">
                                    &lt;label>
                                        &lt;input type="checkbox" name="remember"> Remember Me
                                    &lt;/label>
                                &lt;/div>
                            &lt;/div>
                        &lt;/div>

                        &lt;div class="form-group">
                            &lt;div class="col-md-6 col-md-offset-4">
                                &lt;button type="submit" class="btn btn-primary">
                                    &lt;i class="fa fa-btn fa-sign-in">&lt;/i>Login
                                &lt;/button>

                                &lt;a class="btn btn-link" href="&#123;&#123; url('/password/reset') }}">Forgot Your Password?&lt;/a>
                            &lt;/div>
                        &lt;/div>
                    &lt;/form>
                &lt;/div>
            &lt;/div>
        &lt;/div>
    &lt;/div>
&lt;/div>
&#64;endsection
	
</pre>


<h3>resources/views/auth/register.blade.php</h3>
<pre class="prettyprint">
&#64;extends('layouts.app')

&#64;section('content')
&lt;div class="container">
    &lt;div class="row">
        &lt;div class="col-md-8 col-md-offset-2">
            &lt;div class="panel panel-default">
                &lt;div class="panel-heading">Register&lt;/div>
                &lt;div class="panel-body">
                    &lt;form class="form-horizontal" role="form" method="POST" action="&#123;&#123; url('/register') }}">
                        &#123;!! csrf_field() !!}

                        &lt;div class="form-group&#123;&#123; $errors->has('name') ? ' has-error' : '' }}">
                            &lt;label class="col-md-4 control-label">Name&lt;/label>

                            &lt;div class="col-md-6">
                                &lt;input type="text" class="form-control" name="name" value="&#123;&#123; old('name') }}">

                                &#64;if ($errors->has('name'))
                                    &lt;span class="help-block">
                                        &lt;strong>&#123;&#123; $errors->first('name') }}&lt;/strong>
                                    &lt;/span>
                                &#64;endif
                            &lt;/div>
                        &lt;/div>

                        &lt;div class="form-group&#123;&#123; $errors->has('email') ? ' has-error' : '' }}">
                            &lt;label class="col-md-4 control-label">E-Mail Address&lt;/label>

                            &lt;div class="col-md-6">
                                &lt;input type="email" class="form-control" name="email" value="&#123;&#123; old('email') }}">

                                &#64;if ($errors->has('email'))
                                    &lt;span class="help-block">
                                        &lt;strong>&#123;&#123; $errors->first('email') }}&lt;/strong>
                                    &lt;/span>
                                &#64;endif
                            &lt;/div>
                        &lt;/div>

                        &lt;div class="form-group&#123;&#123; $errors->has('password') ? ' has-error' : '' }}">
                            &lt;label class="col-md-4 control-label">Password&lt;/label>

                            &lt;div class="col-md-6">
                                &lt;input type="password" class="form-control" name="password">

                                &#64;if ($errors->has('password'))
                                    &lt;span class="help-block">
                                        &lt;strong>&#123;&#123; $errors->first('password') }}&lt;/strong>
                                    &lt;/span>
                                &#64;endif
                            &lt;/div>
                        &lt;/div>

                        &lt;div class="form-group&#123;&#123; $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            &lt;label class="col-md-4 control-label">Confirm Password&lt;/label>

                            &lt;div class="col-md-6">
                                &lt;input type="password" class="form-control" name="password_confirmation">

                                &#64;if ($errors->has('password_confirmation'))
                                    &lt;span class="help-block">
                                        &lt;strong>&#123;&#123; $errors->first('password_confirmation') }}&lt;/strong>
                                    &lt;/span>
                                &#64;endif
                            &lt;/div>
                        &lt;/div>

                        &lt;div class="form-group">
                            &lt;div class="col-md-6 col-md-offset-4">
                                &lt;button type="submit" class="btn btn-primary">
                                    &lt;i class="fa fa-btn fa-user">&lt;/i>Register
                                &lt;/button>
                            &lt;/div>
                        &lt;/div>
                    &lt;/form>
                &lt;/div>
            &lt;/div>
        &lt;/div>
    &lt;/div>
&lt;/div>
&#64;endsection
	
</pre>


<h3>resources/views/auth/emails/password.blade.php</h3>
<pre class="prettyprint">
Click here to reset your password: &lt;a href="&#123;&#123; $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> &#123;&#123; $link }} &lt;/a>
	
</pre>



<h3>resources/views/auth/passwords/email.blade.php</h3>
<pre class="prettyprint">
&#64;extends('layouts.app')

&lt;!-- Main Content -->
&#64;section('content')
&lt;div class="container">
    &lt;div class="row">
        &lt;div class="col-md-8 col-md-offset-2">
            &lt;div class="panel panel-default">
                &lt;div class="panel-heading">Reset Password&lt;/div>
                &lt;div class="panel-body">
                    &#64;if (session('status'))
                        &lt;div class="alert alert-success">
                            &#123;&#123; session('status') }}
                        &lt;/div>
                    &#64;endif

                    &lt;form class="form-horizontal" role="form" method="POST" action="&#123;&#123; url('/password/email') }}">
                        &#123;!! csrf_field() !!}

                        &lt;div class="form-group&#123;&#123; $errors->has('email') ? ' has-error' : '' }}">
                            &lt;label class="col-md-4 control-label">E-Mail Address&lt;/label>

                            &lt;div class="col-md-6">
                                &lt;input type="email" class="form-control" name="email" value="&#123;&#123; old('email') }}">

                                &#64;if ($errors->has('email'))
                                    &lt;span class="help-block">
                                        &lt;strong>&#123;&#123; $errors->first('email') }}&lt;/strong>
                                    &lt;/span>
                                &#64;endif
                            &lt;/div>
                        &lt;/div>

                        &lt;div class="form-group">
                            &lt;div class="col-md-6 col-md-offset-4">
                                &lt;button type="submit" class="btn btn-primary">
                                    &lt;i class="fa fa-btn fa-envelope">&lt;/i>Send Password Reset Link
                                &lt;/button>
                            &lt;/div>
                        &lt;/div>
                    &lt;/form>
                &lt;/div>
            &lt;/div>
        &lt;/div>
    &lt;/div>
&lt;/div>
&#64;endsection
	
</pre>



<h3>resources/views/auth/passwords/reset.blade.php</h3>
<pre class="prettyprint">
&#64;extends('layouts.app')

&#64;section('content')
&lt;div class="container">
    &lt;div class="row">
        &lt;div class="col-md-8 col-md-offset-2">
            &lt;div class="panel panel-default">
                &lt;div class="panel-heading">Reset Password&lt;/div>

                &lt;div class="panel-body">
                    &lt;form class="form-horizontal" role="form" method="POST" action="&#123;&#123; url('/password/reset') }}">
                        &#123;!! csrf_field() !!}

                        &lt;input type="hidden" name="token" value="&#123;&#123; $token }}">

                        &lt;div class="form-group&#123;&#123; $errors->has('email') ? ' has-error' : '' }}">
                            &lt;label class="col-md-4 control-label">E-Mail Address&lt;/label>

                            &lt;div class="col-md-6">
                                &lt;input type="email" class="form-control" name="email" value="&#123;&#123; $email or old('email') }}">

                                &#64;if ($errors->has('email'))
                                    &lt;span class="help-block">
                                        &lt;strong>&#123;&#123; $errors->first('email') }}&lt;/strong>
                                    &lt;/span>
                                &#64;endif
                            &lt;/div>
                        &lt;/div>

                        &lt;div class="form-group&#123;&#123; $errors->has('password') ? ' has-error' : '' }}">
                            &lt;label class="col-md-4 control-label">Password&lt;/label>

                            &lt;div class="col-md-6">
                                &lt;input type="password" class="form-control" name="password">

                                &#64;if ($errors->has('password'))
                                    &lt;span class="help-block">
                                        &lt;strong>&#123;&#123; $errors->first('password') }}&lt;/strong>
                                    &lt;/span>
                                &#64;endif
                            &lt;/div>
                        &lt;/div>

                        &lt;div class="form-group&#123;&#123; $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            &lt;label class="col-md-4 control-label">Confirm Password&lt;/label>
                            &lt;div class="col-md-6">
                                &lt;input type="password" class="form-control" name="password_confirmation">

                                &#64;if ($errors->has('password_confirmation'))
                                    &lt;span class="help-block">
                                        &lt;strong>&#123;&#123; $errors->first('password_confirmation') }}&lt;/strong>
                                    &lt;/span>
                                &#64;endif
                            &lt;/div>
                        &lt;/div>

                        &lt;div class="form-group">
                            &lt;div class="col-md-6 col-md-offset-4">
                                &lt;button type="submit" class="btn btn-primary">
                                    &lt;i class="fa fa-btn fa-refresh">&lt;/i>Reset Password
                                &lt;/button>
                            &lt;/div>
                        &lt;/div>
                    &lt;/form>
                &lt;/div>
            &lt;/div>
        &lt;/div>
    &lt;/div>
&lt;/div>
&#64;endsection
	
</pre>



<h3>resources/views/layouts/app.blade.php</h3>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html lang="en">
&lt;head>
    &lt;meta charset="utf-8">
    &lt;meta http-equiv="X-UA-Compatible" content="IE=edge">
    &lt;meta name="viewport" content="width=device-width, initial-scale=1">

    &lt;title>Way2Programming Authentication Page&lt;/title>

    &lt;!-- Fonts -->
    &lt;link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    &lt;link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    &lt;!-- Styles -->
    &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    &#123;&#123;-- &lt;link href="&#123;&#123; elixir('css/app.css') }}" rel="stylesheet"> --}}

    &lt;style>
        body &#123;
            font-family: 'Lato';
        }

        .fa-btn &#123;
            margin-right: 6px;
        }
    &lt;/style>
&lt;/head>
&lt;body id="app-layout">
    &lt;nav class="navbar navbar-default">
        &lt;div class="container">
            &lt;div class="navbar-header">

                &lt;!-- Collapsed Hamburger -->
                &lt;button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    &lt;span class="sr-only">Toggle Navigation&lt;/span>
                    &lt;span class="icon-bar">&lt;/span>
                    &lt;span class="icon-bar">&lt;/span>
                    &lt;span class="icon-bar">&lt;/span>
                &lt;/button>

                &lt;!-- Branding Image -->
                &lt;a class="navbar-brand" href="&#123;&#123; url('/') }}">
                    Way2Programming.com
                &lt;/a>
            &lt;/div>

            &lt;div class="collapse navbar-collapse" id="app-navbar-collapse">
                &lt;!-- Left Side Of Navbar -->
                &lt;ul class="nav navbar-nav">
                    &lt;li>&lt;a href="&#123;&#123; url('/home') }}">Home&lt;/a>&lt;/li>
                &lt;/ul>

                &lt;!-- Right Side Of Navbar -->
                &lt;ul class="nav navbar-nav navbar-right">
                    &lt;!-- Authentication Links -->
                    @if (Auth::guest())
                        &lt;li>&lt;a href="&#123;&#123; url('/login') }}">Login&lt;/a>&lt;/li>
                        &lt;li>&lt;a href="&#123;&#123; url('/register') }}">Register&lt;/a>&lt;/li>
                    @else
                        &lt;li class="dropdown">
                            &lt;a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                &#123;&#123; Auth::user()->name }} &lt;span class="caret">&lt;/span>
                            &lt;/a>

                            &lt;ul class="dropdown-menu" role="menu">
                                &lt;li>&lt;a href="&#123;&#123; url('/logout') }}">&lt;i class="fa fa-btn fa-sign-out">&lt;/i>Logout&lt;/a>&lt;/li>
                            &lt;/ul>
                        &lt;/li>
                    @endif
                &lt;/ul>
            &lt;/div>
        &lt;/div>
    &lt;/nav>

    @yield('content')

    &lt;!-- JavaScripts -->
    &lt;script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js">&lt;/script>
    &lt;script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">&lt;/script>
    &#123;&#123;-- &lt;script src="&#123;&#123; elixir('js/app.js') }}">&lt;/script> --}}
&lt;/body>
&lt;/html>
	
</pre>



<h3>(app/User.php) Model Section is also not required here but i am putting code for my purpose</h3>
<pre class="prettyprint">
&lt;?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
&#123;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
	
</pre>

<h3>(app/http/Controllers/Auth/AuthController.php)Controller Section is also not required here but i am putting code for my purpose</h3>
<pre class="prettyprint">
&lt;?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
&#123;
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    &#123;
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    &#123;
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    &#123;
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
	
</pre>


<h3>(app/http/Controllers/Auth/PasswordController.php)Controller Section is also not required here but i am putting code for my purpose</h3>
<pre class="prettyprint">
&lt;?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends Controller
&#123;
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    &#123;
        $this->middleware('guest');
    }
}
	
</pre>

<h3>(app/http/Controllers/Controller.php)</h3>
<pre class="prettyprint">
&lt;?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
&#123;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

	
</pre>

