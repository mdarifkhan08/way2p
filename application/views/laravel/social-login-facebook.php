<h3>Create New Laravel Project</h3><hr/>
<pre class="prettyprint">
	>composer create-project laravel/laravel newproject
	>cd newproject
</pre>

<h3>Prepare database connection in .env file</h3><hr/>
<pre class="prettyprint">
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lproject1   
DB_USERNAME=root
DB_PASSWORD=	
</pre>

<h3>use migrate command</h3><hr/>
<pre class="prettyprint">
>php artisan migrate	
</pre>


<h3>create user panel using scaffold</h3><hr/>
<pre class="prettyprint">
>php artisan make:auth	
</pre>

<div class="alert alert-success">
	run server using command <span style="color:green">php artisan serve</span> and go to the link 
	http://localhost:8000 then you will see login page
</div>

<h3>Installing Socialite</h3><hr/>
<pre class="prettyprint">
>composer require laravel/socialite
</pre>

<h3>make changes in providers of config/app.php</h3><hr/>
<pre class="prettyprint">
Laravel\Socialite\SocialiteServiceProvider::class,
</pre>

<h3>make changes in alies of config/app.php</h3><hr/>
<pre class="prettyprint">
'Socialite' => Laravel\Socialite\Facades\Socialite::class,
</pre>

<h3>config/services.php</h3><hr/>
<pre class="prettyprint">
'facebook' => [
    'client_id' => '',
    'client_secret' => '',
    'redirect' => '',
],
</pre>

<div class="alert alert-info">
	to get client_id,client_secret and redirect we need to create app on <a href="developers.facebook.com" target="_blank">developers.facebook.com</a>.<br/><br/>

	After login we need to create app<br/><br/>

	to create app go My_App->Add_New_App<br/><br/>

	and then select type of app (my type of app is website)<br/><br/>

	and the provide app_name and email.<br/><br/>

	Now your app is ready go to my_app at the top and click on app_name and go to setting where you will find app_id(client_id) and client_secret.<br/><br/>

	Now we need to click on Add Platform under APP_NAME->setting and provide site_url, it may be development server url or your real domain, no matter both will work, but i will suggest use xampp server because you may get SSL sertificate error then we can resolve that error in xampp server.<br/><br/>

	my site_url is http://localhost/newproject/
</div>

<div class="alert alert-info">
	Now my target is send user request for facebook for authentication
</div>

<h3>create controller</h3><hr/>
<pre class="prettyprint">
php artisan make:controller FacebookAuthController
</pre>


<h3>go to controller and edit controller</h3><hr/>
<pre class="prettyprint">
&lt;?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;

class FacebookAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();   
    }   

    public function callback()
    {
        //facebook call us back after successfull login  
    }
}
</pre>


<h3>create migration</h3><hr/>
<pre class="prettyprint">
php artisan make:migration create_social_accounts_table --create="social_accounts"
</pre>

<h3>edit migration file go to database/migrations create_social_accounts_table.php file.</h3><hr/>
<pre class="prettyprint">
&lt;?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_accounts', function (Blueprint $table) {
            $table->integer('user_id');
            $table->string('provider_user_id');
            $table->string('provider');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('social_accounts');
    }
}

</pre>

<h3>create model</h3><hr/>
<pre class="prettyprint">
> php artisan make:model SocialAccount
</pre>


<h3>edit model app/SocialAccount.php</h3><hr/>
<pre class="prettyprint">
&lt;?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    protected $fillable = ['user_id', 'provider_user_id', 'provider'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
</pre>


<h3>run migrate command</h3><hr/>
<pre class="prettyprint">
php artisan migrate
</pre>


<h3>create FacebookAccountService in app dir</h3><hr/>
<pre class="prettyprint">
&lt;?php

namespace App;

use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialAccountService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
        $account = SocialAccount::whereProvider('facebook')
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {

            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'facebook'
            ]);

            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {

                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;

        }

    }
}
</pre>


<h3>Now your complete file for controller is</h3><hr/>
<pre class="prettyprint">
&lt;?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SocialAccountService;
use Socialite;

class FacebookAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();   
    }   

    public function callback(SocialAccountService $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());

        auth()->login($user);

        return redirect()->to('/home');
    }
}
</pre>



<h3>Finally create route in route.php file</h3><hr/>
<div>
	in the latest version of laravel middleware web we not to write it is internally used.
</div>
<pre class="prettyprint">
Route::get('/redirect', 'FacebookAuthController@redirect');
Route::get('/callback', 'FacebookAuthController@callback');
</pre>


<h3>use this url for create facebook login</h3><hr/>
<pre class="prettyprint">
&lt;a href="redirect">Facebook&lt;/pre>
</pre>