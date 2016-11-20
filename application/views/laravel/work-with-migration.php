<h3></h3><hr/>
<pre class="prettyprint">
php artisan make&#58;migration create_students_table --create=students
</pre>



<h3></h3><hr/>
<pre class="prettyprint">
$table->string('name');
$table->string('roll_number');
$table->string('address');
</pre>


<h3></h3><hr/>
<pre class="prettyprint">
&lt;?php
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
        Schema&#58;&#58;drop('students');
    }
}

</pre>


<h3></h3><hr/>
<pre class="prettyprint">
php artisan migrate 
</pre>

