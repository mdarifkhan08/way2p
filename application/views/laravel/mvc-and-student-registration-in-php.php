<h2>work with migration</h2><hr/>
<pre class="prettyprint">
php artisan make:migration create_students_table --create=students
</pre>




<h3>add these fields in the file</h3><hr/>
<pre class="prettyprint">
$table->string('name');
$table->string('roll_number');
$table->string('address');
</pre>

<h3>Now File would be look like that</h3><hr/>

<pre class="prettyprint">
&lt?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('roll_number');
            $table->string('address');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('students');
    }
}
</pre>

<h3>use command to insert table</h3><hr/>
<pre class="prettyprint">
php artisan migrate
</pre>


<h3>create Model</h3><hr/>
<div class="alert alert-success">
use command php artisan make:model Student
</div>
<pre class="prettyprint">
&lt;?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $fillable=['name','roll_number','address'];
}
</pre>

<h3>Create Controller</h3><hr/>
<div class="alert alert-success">
use command php artisan make:controller StudentController
</div>
<pre class="prettyprint">
&lt;?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student;
class StudentController extends Controller
{
	public function index(){
		$names=student::all();
		return view('welcome')->with('names',$names);
	}
	
	public function insert(){
		$input=Request::all();
		Student::create($input);
		$success="Data Inserted Successfully!";
		return view('welcome')->with('success',$success);
	}
}
</pre>




<h3>Edit route.php app/Http/routes.php</h3><hr/>
<pre class="prettyprint">
Route::group(['middleware' => ['web']], function () {
	
    Route::get('/','StudentController@index');
    Route::post('insert','StudentController@insert');
    
});
	
</pre>


<h3>Edit welcome.blade.php</h3><hr/>
<pre class="prettyprint">
&#123;{$success or ''}}

&#123;!! Form::open(['url' => 'insert']) !!}
      	&#123;!! Form::label('name') !!}
      	&#123;!! Form::text('name') !!}&lt;br/>

      	&#123;!! Form::label('Roll Number') !!}
      	&#123;!! Form::text('roll_number') !!}&lt;br/>

      	&#123;!! Form::label('Address') !!}
      	&#123;!! Form::text('address') !!}&lt;br/>

      	&#123;!! Form::submit('submit') !!}
&#123;!! Form::close() !!}

</pre>
<img src="<?php echo base_url();?>static/images/ice_screenshot_20160117-175535.png" class="img-responsive"/><br/>
<img src="<?php echo base_url();?>static/images/ice_screenshot_20160117-175737.png" class="img-responsive"/>
