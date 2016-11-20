
<h3>STEP-1 :: Work with migration</h3><hr/>
<pre class="prettyprint">
php artisan make:migration create_employees_table --create=employees
</pre>

<h3>Add fields to CreateEmployeesTable class</h3><hr/>
<pre class="prettyprint">
$table->string('name');
$table->string('email');
$table->string('address');
</pre>

<h3>Now your file will be look like below file</h3><hr/>
<pre class="prettyprint">
&lt;?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('email');
            $table->string('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
</pre>

<h3>Now create table into the database</h3><hr/>
<pre class="prettyprint">
php artisan migrate
</pre>


<h3>STEP-2 :: create Controller or work with controller</h3><hr/>
<pre class="prettyprint">
php artisan make:controller EmployeeController
</pre>

<h3>now create method that hold view inside controller</h3><hr/>
<pre class="prettyprint">
&lt;?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /*
     * show the page to create new employee
     * 
     * @return Response
     */
	
	public function create(){
		return view('employees.create');   //create employees directory and inside it create create.blade.php file
	}
}

</pre>


<h3>STEP-3 :: create view inside views/employees/create.blade.php</h3><hr/>
<pre class="prettyprint">
&#64;extends('main')

&#64;section('content')
&#123;!! Form&#58;&#58;open(['url' => 'employees']) !!}
      	&#123;!! Form&#58;&#58;label('name') !!}
      	&#123;!! Form&#58;&#58;text('name') !!}&lt;br/>&lt;br/>

      	&#123;!! Form&#58;&#58;label('email') !!}
      	&#123;!! Form&#58;&#58;text('email') !!}&lt;br/>&lt;br/>

      	&#123;!! Form&#58;&#58;label('Address') !!}
      	&#123;!! Form&#58;&#58;text('address') !!}&lt;br/>&lt;br/>

      	&#123;!! Form&#58;&#58;submit('submit') !!}
&#123;!! Form&#58;&#58;close() !!}
&#64;stop
</pre>





<h3>STEP-4 :: create Model</h3><hr/>
<pre class="prettyprint">
php artisan make:model Employee
</pre>

<h3>Employee class would be look like that</h3><hr/>
<pre class="prettyprint">
&lt;?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=['name','email','address'];
}

</pre>


<h3>STEP-5 :: prepare route.php</h3><hr/>
<pre class="prettyprint">
Route::group(['middleware' => ['web']], function () {
	Route::get('/', 'EmployeeController@create');
    Route::post('employees','EmployeeController@store');
});

</pre>




<h3>STEP-6 insert form value :: create method inside controller</h3><hr/>
<pre class="prettyprint">



    public function store(){ // i always prefer to use this way to insert the data
		$input=Request::all();
		Employee::create($input);
		return $input;
	}
	
	
	//another way to get data from the form and insert to the database
	
	
	public function store(){
		$name=Request::get('name');
		$email=Request::get('email');
		$address=Request::get('address');
		$a[]=0;
		$a['name']=$name;
		$a['email']=$email;
		$a['address']=$address;
		Employee::create($a);
		return $name." | ".$email." | ".$address;
	}
	
	//one more way
	
	public function store(){
		$input=Request::all();
		$employee=new Employee();
		$employee->name=$input['name'];
		$employee->email=$input['email'];
		$employee->address=$input['address'];
		$employee->_token=$input['_token'];
		Employee::create($input);
		return $employee;
	}

</pre>


<h3>STEP-7 GET Data from the database :: create method inside controller</h3><hr/>
<pre class="prettyprint">
   public function index(){
		$employees=Employee::all();
		return view('employees.index',compact('employees'));   //create employees directory and inside it create create.blade.php file
	}
</pre>
	

<h3>create index.blade.php inside employees directory</h3><hr/>
<pre class="prettyprint">
&#64;extends('main')
&#64;section('content')
&lt;div class="container">
&lt;table class="table table-bordered">
&lt;tr>&lt;td>Name&lt;/td>&lt;td>Email&lt;/td>&lt;td>Address&lt;/td>&lt;/tr>
&#64;foreach($employees as $employee)
&lt;tr>&lt;td>&#123;!! $employee->name !!}&lt;/td>&lt;td>&#123;!! $employee->email !!}&lt;/td>&lt;td>&#123;!! $employee->address !!}&lt;/td>&lt;/tr>
&#64;endforeach
&lt;/table>
&lt;/div>

&#64;stop
</pre>	



<h3>to get the data in descending order</h3><hr/>
<pre class="prettyprint">
    public function index(){
		$employees=Employee::latest('id')->get();
		return view('employees.index',compact('employees'));   //create employees directory and inside it create create.blade.php file
	}

==========================another way to achieve it=======================

    public function index(){
		$employees=Employee::orderBy('id','desc')->get();
		return view('employees.index',compact('employees'));   //create employees directory and inside it create create.blade.php file
	}
	
</pre>	

	
<h3>to get the data in ascending order</h3><hr/>
<pre class="prettyprint">
    public function index(){
		$employees=Employee::oldest('id')->get();
		return view('employees.index',compact('employees'));   //create employees directory and inside it create create.blade.php file
	}
	
==========================another way to achieve it=======================

   public function index(){
		$employees=Employee::orderBy('id','asc')->get();
		return view('employees.index',compact('employees'));   //create employees directory and inside it create create.blade.php file
	}
	
</pre>

<h3>don't forget to edit route.php</h3><hr/>
<pre class="prettyprint">
Route::group(['middleware' => ['web']], function () {
	Route::get('/', 'EmployeeController@create');
    Route::post('employees','EmployeeController@store');
    Route::get('employees','EmployeeController@index');
});
</pre>	


<h3>STEP-8 :: validation in laravel :: first we need to create request</h3><hr/>
<pre class="prettyprint">
php artisan make:request InsertEmployeeRequest
</pre>


<h3>go to Requests directory and edit InsertEmployeeRequest class</h3><hr/>
<div class="alert alert-danger">don't forget to import package<br/>use App\Http\Requests\InsertEmployeeRequest;</div>
<pre class="prettyprint">
&lt;?php

namespace App\Http\Requests;

use App\Http\Requests\InsertEmployeeRequest;

class InsertEmployeeRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
	
	/*
	 * to understand this method i will give one example
	 * 
	 * Arif can not edit the comment created by ankit if function return type is false, if true any one make this request
	 */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|min:2|max:50',
        	'email'=>'required',
        	'address'=>'required',
        ];
    }
}

</pre>

<h3>go to controller class</h3><hr/>
<div class="alert alert-success">
1.first remove previous import for request -> remove <b>use request</b>.<br/>
2. second edit store method inside the controller.
</div>
<pre class="prettyprint">
    public function store(InsertEmployeeRequest $request){
		Employee::create($request->all());
		return $input;
	}
</pre>


<h3>view the errors inside insertion form</h3><hr/>
<pre class="prettyprint">
&#64;extends('main')

&#64;section('content')
&#123;!! Form&#58;&#58;open(['url' => 'employees']) !!}
      	&#123;!! Form&#58;&#58;label('name') !!}
      	&#123;!! Form&#58;&#58;text('name') !!}&lt;br/>&lt;br/>

      	&#123;!! Form&#58;&#58;label('email') !!}
      	&#123;!! Form&#58;&#58;text('email') !!}&lt;br/>&lt;br/>

      	&#123;!! Form&#58;&#58;label('Address') !!}
      	&#123;!! Form&#58;&#58;text('address') !!}&lt;br/>&lt;br/>

      	&#123;!! Form&#58;&#58;submit('submit') !!}
&#123;!! Form&#58;&#58;close() !!}

&#64;if($errors->any())
&lt;ul class="alert alert-danger">
&#64;foreach($errors->all() as $error)
   &lt;li>&#123;&#123;$error}}&lt;/li>
&#64;endforeach
&lt;/ul>
&#64;endif
&#64;stop
</pre>


<h3>CURD With Route::resource</h3><hr/>
<div class="alert alert-success">
by using this we need not create the Route for CURD operation, laravel automatically generate for us.
</div>

<h3>now again work wilth route.php</h3><hr/>
<pre class="prettyprint">
Route::group(['middleware' => ['web']], function () {
	Route::get('/', 'EmployeeController@create');
    Route::post('employees','EmployeeController@store');
    Route::get('employees','EmployeeController@index');
    Route::resource('employees','EmployeeController');
});
</pre>


<h3>check route of list</h3><hr/>
<pre class="prettyprint">
php artisan route:list
</pre>


<h3>Now work with Edit Operation:create method inside controller</h3><hr/>
<pre class="prettyprint">
    public function edit($id){
 		$employee=Employee::findOrFail($id);
		return view('employees.edit',compact('employee'));
	}
</pre>


<h3>create edit.blade.php</h3><hr/>
<pre class="prettyprint">
&#64;extends('main')

&#64;section('content')
Edit: &#123;!! $employee->name !!}

&#123;!! Form::model($employee,['method' => 'PATCH','url' => 'employees/'.$employee->id]) !!}
      	&#123;!! Form::label('name') !!}
      	&#123;!! Form::text('name') !!}&lt;br/>&lt;br/>

      	&#123;!! Form::label('email') !!}
      	&#123;!! Form::text('email') !!}&lt;br/>&lt;br/>

      	&#123;!! Form::label('Address') !!}
      	&#123;!! Form::text('address') !!}&lt;br/>&lt;br/>

      	&#123;!! Form::submit('submit') !!}
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


<h3>go to the link and you will get edit form</h3><hr/>
<pre class="prettyprint">
localhost:8000/employees/1/edit
</pre>

<div class="alert alert-success">
till now we are able to open edit form for perticular id, now our requirement is update the form
</div>



<h3>create method inside controller</h3><hr/>
<div class="alert alert-success">
before create the method first import the package<br/><br/>
use Illuminate\Http\Request;   //this is just for example purpose we will use our request class that we created above
</div>
<div class="alert alert-danger">don't forget to import package<br/>use App\Http\Requests\InsertEmployeeRequest;</div>
<pre class="prettyprint">
    public function update($id,Request $request){
		$employee=Employee::findOrFail($id);
		$employee->update($request->all());
		return redirect('employees');
	}
	=========================another way with our request====================
	 public function update($id,InsertEmployeeRequest $request){
		$employee=Employee::findOrFail($id);
		$employee->update($request->all());
		return redirect('employees');
	}
</pre>

<div class="alert alert-success">
now we have accomplish the task of edit, if we think about CURD, till now we have worked with CREATE, UPDATE, READ but not DELETE, now lets work with DELETE.
</div>


<h2>DELETE Operation</h2>

<h3>while getting the data we can set delete operation(employees/index.blade.php)</h3><hr/>
<pre class="prettyprint">
&#64;extends('main')

&#64;section('content')
&lt;div class="container">
&lt;table class="table table-bordered">
&lt;tr>&lt;td>Name&lt;/td>&lt;td>Email&lt;/td>&lt;td>Address&lt;/td>&lt;/tr>
&#64;foreach($employees as $employee)
&lt;tr>&lt;td>&#123;!! $employee->name !!}&lt;/td>&lt;td>&#123;!! $employee->email !!}&lt;/td>&lt;td>&#123;!! $employee->address !!}&lt;/td>
&lt;td>&#123;!! Form::open(['method' => 'DELETE','url' => 'employees/'.$employee->id]) !!}
            &#123;!! Form::submit('DELETE', ['class' => 'btn btn-danger']) !!}
        &#123;!! Form::close() !!}&lt;/td>
&lt;/tr>
&#64;endforeach
&lt;/div>
&lt;/div>

&#64;stop
</pre>


<h3>create method inside controller</h3><hr/>
<pre class="prettyprint">
    public function destroy($id){
		$employee=Employee::findOrFail($id);
		$employee->delete();
		return redirect('employees');
	}
</pre>

<h3></h3><hr/>
<pre class="prettyprint">

</pre>

