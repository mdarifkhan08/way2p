<div class="panel panel-primary">
<div class="panel panel-heading">
	Program
</div>
<div class="panel panel-body">
<pre class="prettyprint">
package com.way2p;

class A1{
	
	static int i=100;
	//1 it will execute because B1 extending A1(static block execute first then non static)
	static{
		i=i-- - --i;//100-98=2
		System.out.println("A1 Static, i= "+i);//2
	}
	//3
	{
		i=i++ + ++i;//0+2=2
		System.out.println("A1 , i= "+i);//2
		
	}
}

class B1 extends A1{
	//2
	static{
		i=--i - i--;//1-1=0
		System.out.println("B1 static , i= "+i);//0
	}
	//4
	{
		i=++i + i++;//3+3=6
		System.out.println("B1  , i= "+i);//6
	}
	
}

public class App {
	public static void main(String args[]){
		B1 b=new B1();
		System.out.println(b.i);//6
	}
}

</pre>
output:- 
<br/><br/>
A1 Static, i= 2<br/>
B1 static , i= 0<br/>
A1 , i= 2<br/>
B1  , i= 6<br/>
6<br/>

</div>
</div>