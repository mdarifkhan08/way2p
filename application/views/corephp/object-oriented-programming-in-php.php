
<div class="alert alert-success">
Object Oriented Programming is a programming paradigm based on the concept of 'objects' which are data structures that contain data in the form of fields often known as attributes. 
</div>

<h3></h3><hr/>
<div class="alert alert-success">
This php class or file will let you know about the constructure.<br/>
Constructor of the class is execute first when we create the object of the class.<br/>

</div>
<pre class="prettyprint">
&lt;?php
class User{
	/*
	 * when we create the object of user class the first and foremost thing that will happen is executing the constructor  
	 */
	/*
	 *  this constructor i used for initialize database connection for the class 
	 */
	public function __construct(){
		echo 'Message from constructor';
	}
}
/*
 * Here we are creating the object of User class.
 * when we create object of class default execution will happen inside the constructor of the class
 * 
 */
$user=new User();
</pre>

<h3></h3><hr/>
<div class="alert alert-success">
In this class we are passing the value while creating the object of the class.this value find its partner inside the class constructor as arguments.after making the friendship with constructor argument then it will provide/share/initialize the data with instance variable of the class.
</div>
<pre class="prettyprint">
&lt;?php
class User{
	/*
	 * Here constructor have one argument.
	 * Our motive is initialize  argument $name while creating the object of the class. By doing so we can initialize the argument variable but $name variable scope is only for constructor.
	 * So i want $name variable as a class variable or instance variable, to achieve this i need to create public variable as $name. 
	 * we will work on instance variable in the next example. 
	 */
	public function __construct($name){
		echo 'Message from '.$name;
	}
}
/*
 * Here we are creating the object of User class and initializing the argument variable $name.
 */
$user=new User('Arif Khan');	
</pre>

<h3></h3><hr/>
<div class="alert alert-success">
In this class we are passing the value of constructor argument while creating the object of the class, now value inside the constructor by using this value we can initialize the instance variable.<br/>

If we initialized the value of instance variable then we can use this value inside the function and single instance variable too.
</div>
<pre class="prettyprint">
&lt;?php
class User{
	
	public $name;

	public function __construct($name){
		$this->name=$name;
	}
	
	public function getName(){
		return $this->name;
	}
}

$user=new User('Arif Khan');
$name=$user->getName();
echo $name;	
</pre>



<h3></h3><hr/>
<div class="alert alert-success">
This class is similar to above class but it have different approch to get the echo out the instance variable using a function after initialize.
</div>
<pre class="prettyprint">
&lt;?php
class User{
	
	public $name;

	public function __construct($name){
		$this->name=$name;
	}
	
	public function getName(){
		echo $this->name;
	}
}

/*
 * Here we are creating the object of User class and initializing the argument variable $name.
 */
 
$user=new User('Arif Khan');
$user->getName();

</pre>


<h3></h3><hr/>
<div class="alert alert-success">
In this class we are initializing the class instance variable of the 
</div>
<pre class="prettyprint">
&lt;?php
class User{
	
	public $name;

	public function __construct($name){
		$this->name=$name;
	}
}
/*
 * Here we are creating the object of User class and initializing the argument variable $name.
 */
$user=new User('Arif Khan');
echo $user->name;

</pre>



<h3></h3><hr/>
<div class="alert alert-success">
</div>
<pre class="prettyprint">
&lt;?php
class User{
	
	public $name;
	public $age;

	public function __construct($name,$age){
		$this->name=$name;
		$this->age=$age;
	}
	
}
/*
 * Here we are creating the object of User class and initializing the argument variable $name.
 */
$user=new User('Arif Khan',25);
echo $user->name."&lt;br/>";
echo $user->age;
</pre>

