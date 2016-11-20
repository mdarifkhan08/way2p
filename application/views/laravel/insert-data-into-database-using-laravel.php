<h3>Controller</h3><hr/>
<pre class="prettyprint">
&lt;?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student;

use Request;
class StudentController extends Controller
{
	public function index(){
    	$names=student&#58;&#58;all();
    	return view('xyz')->with('names',$names);
    }

    public function store(){
    	$input=Request::all();

        Student::create($input);

    	return $input;
    }
   
}

</pre>



<h3>Model</h3><hr/>
<pre class="prettyprint">
&lt;?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $fillable=['name','roll_number','address'];
}
	
</pre>





<h3>xyz.blade.php</h3><hr/>
<pre class="prettyprint">
	
	&#123;!! Form::open(['url' => 'xyz']) !!}
      	&#123;!! Form&#58;&#58;label('name') !!}
      	&#123;!! Form&#58;&#58;text('name') !!}

      	&#123;!! Form&#58;&#58;label('Roll Number') !!}
      	&#123;!! Form&#58;&#58;text('roll_number') !!}

      	&#123;!! Form&#58;&#58;label('Address') !!}
      	&#123;!! Form&#58;&#58;text('address') !!}

      	&#123;!! Form&#58;&#58;submit('submit') !!}
	&#123;!! Form::close() !!}
</pre>




<h3>route.php</h3><hr/>
<pre class="prettyprint">
Route::get('students','StudentController@index');
Route::post('xyz','StudentController@store');
</pre>
