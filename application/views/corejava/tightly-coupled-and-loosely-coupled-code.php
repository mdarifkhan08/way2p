<div class="panel panel-primary">
<div class="panel panel-heading">
data from Stackoverflow - 1
</div>
<div class="panel panel-body">
Short Introduction Loose and Tight Coupling<br/><br/>

Loose Coupling means reducing dependencies of a class that use a different class directly. In tight coupling, classes and objects are dependent on one another. In general, tight coupling is usually bad because it reduces flexibility and re-usability of code and it makes changes much more difficult and impedes testability etc.<br/><br/>

Tight Coupling<br/><br/>

A Tightly Coupled Object is an object that needs to know quite a bit about other objects and are usually highly dependent on each other's interfaces. Changing one object in a tightly coupled application often requires changes to a number of other objects. In a small application we can easily identify the changes and there is less chance to miss anything. But in large applications these inter-dependencies are not always known by every programmer or there is a chance of overlooking changes. But each set of loosely coupled objects are not dependent on each other.<br/>
</div>
</div>




<div class="panel panel-primary">
<div class="panel panel-heading">

</div>
<div class="panel panel-body">
Tight coupling is when a group of classes are highly dependent on one another.<br/><br/>

This scenario arises when a class assumes too many responsibilities, or when one concern is spread over many classes rather than having its own class.<br/><br/>

Loose coupling is achieved by means of a design that promotes single-responsibility and separation of concerns.<br/><br/>

A loosely-coupled class can be consumed and tested independently of other (concrete) classes.<br/><br/>

Interfaces are a powerful tool to use for decoupling. Classes can communicate through interfaces rather than other concrete classes, and any class can be on the other end of that communication simply by implementing the interface.<br/><br/>

<h2>Example of tight coupling:</h2>
<pre class="prettyprint">
class CustomerRepository
{
    private readonly Database database;

    public CustomerRepository(Database database)
    {
        this.database = database;
    }

    public void Add(string CustomerName)
    {
        database.AddRow("Customer", CustomerName);
    }
}

class Database
{
    public void AddRow(string Table, string Value)
    {
    }
}
</pre>
<h2>Example of loose coupling:</h2>
<pre class="prettyprint">
class CustomerRepository
{
    private readonly IDatabase database;

    public CustomerRepository(IDatabase database)
    {
        this.database = database;
    }

    public void Add(string CustomerName)
    {
        database.AddRow("Customer", CustomerName);
    }
}

interface IDatabase
{
    void AddRow(string Table, string Value);
}

class Database : IDatabase
{
    public void AddRow(string Table, string Value)
    {
    }
}	
</pre>
</div>
</div>




<div class="panel panel-primary">
<div class="panel panel-heading">
What is “loose coupling?” Please provide examples
</div>
<div class="panel panel-body">
Consider a simple shopping cart application that uses a CartContents class to keep track of the items in the shopping cart and an Order class for processing a purchase. The Order needs to determine the total value of the contents in the cart, it might do that like so:<br/><br/>

<h2>Tightly Coupled Example:</h2>
<pre class="prettyprint">
public class CartEntry
{
    public float Price;
    public int Quantity;
}

public class CartContents
{
    public CartEntry[] items;
}

public class Order
{
    private CartContents cart;
    private float salesTax;

    public Order(CartContents cart, float salesTax)
    {
        this.cart = cart;
        this.salesTax = salesTax;
    }

    public float OrderTotal()
    {
        float cartTotal = 0;
        for (int i = 0; i < cart.items.Length; i++)
        {
            cartTotal += cart.items[i].Price * cart.items[i].Quantity;
        }
        cartTotal += cartTotal*salesTax;
        return cartTotal;
    }
}
</pre>
Notice how the OrderTotal method (and thus the Order class) depends on the implementation details of the CartContents and the CartEntry classes. If we were to try to change this logic to allow for discounts, we'd likely have to change all 3 classes. Also, if we change to using a List collection to keep track of the items we'd have to change the Order class as well.<br/><br/>

Now here's a slightly better way to do the same thing:<br/>

<h2>Less Coupled Example:</h2>
<pre class="prettyprint">
public float GetLineItemTotal()
    {
        return Price * Quantity;
    }
}

public class CartContents
{
    public CartEntry[] items;

    public float GetCartItemsTotal()
    {
        float cartTotal = 0;
        foreach (CartEntry item in items)
        {
            cartTotal += item.GetLineItemTotal();
        }
        return cartTotal;
    }
}

public class Order
{
    private CartContents cart;
    private float salesTax;

    public Order(CartContents cart, float salesTax)
    {
        this.cart = cart;
        this.salesTax = salesTax;
    }

    public float OrderTotal()
    {
        return cart.GetCartItemsTotal() * (1.0f + salesTax);
    }
}
</pre>
The logic that is specific to the implementation of the cart line item or the cart collection or the order is restricted to just that class. So we could change the implementation of any of these classes without having to change the other classes. We could take this decoupling yet further by improving the design, introducing interfaces, etc, but I think you see the point.
</div>
</div>





<div class="panel panel-primary">
<div class="panel panel-heading">
What is “loose coupling?” Please provide examples
</div>
<div class="panel panel-body">
I'll use Java as an example. Let's say we have a class that looks like this:<br/><br/>

<pre class="prettyprint">public class ABC
{
   public void doDiskAccess() {...}
}</pre>
When I call the class, I'll need to do something like this:

<pre class="prettyprint">ABC abc = new ABC();

abc. doDiskAccess();</pre>

So far, so good. Now let's say I have another class that looks like this:

<pre class="prettyprint">public class XYZ
{
   public void doNetworkAccess() {...}
}</pre>

It looks exactly the same as ABC, but let's say it works over the network instead of on disk. So now let's write a program like this:

<pre class="prettyprint">if(config.isNetwork()) new XYZ().doNetworkAccess();
else new ABC().doDiskAccess();</pre>

That works, but it's a bit unwieldy. I could simplify this with an interface like this:
<pre class="prettyprint">public interface Runnable
{
    public void run();
}

public class ABC implements Runnable
{
   public void run() {...}
}

public class XYZ implements Runnable
{
   public void run() {...}
}</pre>
Now my code can look like this:

<pre class="prettyprint">Runnable obj = config.isNetwork() ? new XYZ() : new ABC();

obj.run();</pre>

See how much cleaner and simpler to understand that is? We've just understood the first basic tenet of loose coupling: abstraction. The key from here is to ensure that ABC and XYZ do not depend on any methods or variables of the classes that call them. That allows ABC and XYZ to be completely independent APIs. Or in other words, they are "decoupled" or "loosely coupled" from the parent classes.<br/><br/>

But what if we need communication between the two? Well, then we can use further abstractions like an Event Model to ensure that the parent code never needs to couple with the APIs you have created.



</div>
</div>




<div class="panel panel-primary">
<div class="panel panel-heading">
What is “loose coupling?” Please provide examples
</div>
<div class="panel panel-body">
Tightly coupled code relies on a concrete implementation. If I need a list of strings in my code and I declare it like this (in Java)


<pre class="prettyprint">
ArrayList&lt;String> myList = new ArrayList&lt;String>();
</pre>

then I'm dependent on the ArrayList implementation.<br/><br/>

If I want to change that to loosely coupled code, I make my reference an interface (or other abstract) type.

<pre class="prettyprint">
List&lt;String> myList = new ArrayList&lt;String>();
</pre>

This prevents me from calling any method on myList that's specific to the ArrayList implementation. I'm limited to only those methods defined in the List interface. If I decide later that I really need a LinkedList, I only need to change my code in one place, where I created the new List, and not in 100 places where I made calls to ArrayList methods.<br/><br/>

Of course, you can instantiate an ArrayList using the first declaration and restrain yourself from not using any methods that aren't part of the List interface, but using the second declaration makes the compiler keep you honest.
</div>
</div>