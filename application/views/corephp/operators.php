			<h1>Operators Of Php</h1>
			<hr />

			
			<h3>What's the difference between :: (double colon) and -> (arrow) in PHP?</h3>
			<pre class="prettyprint">
 <strong>


When the left part is an object instance, you use ->. Otherwise, you use ::.

This means that -> is mostly used to access instance members (though it can also be used to access static members, such usage is discouraged), while :: is usually used to access static members (though in a few special cases, it's used to access instance members).

In general, :: is used for scope resolution, and it may have either a class name, parent, self, or (in PHP 5.3) static to its left. parent refers to the scope of the superclass of the class where it's used; self refers to the scope of the class where it's used; static refers to the "called scope" (see late static bindings).

The rule is that a call with :: is an instance call if and only if:

the target method is not declared as static and
there is a compatible object context at the time of the call, meaning these must be true:
the call is made from a context where $this exists and
the class of $this is either the class of the method being called or a subclass of it.
Example:






class A {
    public function func_instance() {
        echo "in ", __METHOD__, "\n";
    }
    public function callDynamic() {
        echo "in ", __METHOD__, "\n";
        B::dyn();
    }

}

class B extends A {
    public static $prop_static = 'B::$prop_static value';
    public $prop_instance = 'B::$prop_instance value';

    public function func_instance() {
        echo "in ", __METHOD__, "\n";
        /* this is one exception where :: is required to access an
         * instance member.
         * The super implementation of func_instance is being
         * accessed here */
        parent::func_instance();
        A::func_instance(); //same as the statement above
    }

    public static function func_static() {
        echo "in ", __METHOD__, "\n";
    }

    public function __call($name, $arguments) {
        echo "in dynamic $name (__call)", "\n";
    }

    public static function __callStatic($name, $arguments) {
        echo "in dynamic $name (__callStatic)", "\n";
    }

}

echo 'B::$prop_static: ', B::$prop_static, "\n";
echo 'B::func_static(): ', B::func_static(), "\n";
$a = new A;
$b = new B;
echo '$b->prop_instance: ', $b->prop_instance, "\n";
//not recommended (static method called as instance method):
echo '$b->func_static(): ', $b->func_static(), "\n";

echo '$b->func_instance():', "\n", $b->func_instance(), "\n";

/* This is more tricky
 * in the first case, a static call is made because $this is an
 * instance of A, so B::dyn() is a method of an incompatible class
 */
echo '$a->dyn():', "\n", $a->callDynamic(), "\n";
/* in this case, an instance call is made because $this is an
 * instance of B (despite the fact we are in a method of A), so
 * B::dyn() is a method of a compatible class (namely, it's the
 * same class as the object's)
 */
echo '$b->dyn():', "\n", $b->callDynamic(), "\n";







OUTPUT:






B::$prop_static: B::$prop_static value
B::func_static(): in B::func_static

$b->prop_instance: B::$prop_instance value
$b->func_static(): in B::func_static

$b->func_instance():
in B::func_instance
in A::func_instance
in A::func_instance

$a->dyn():
in A::callDynamic
in dynamic dyn (__callStatic)

$b->dyn():
in A::callDynamic
in dynamic dyn (__call)

</strong>     
            </pre>