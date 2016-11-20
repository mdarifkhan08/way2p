<div class="panel panel-primary">
<div class="panel panel-heading">
with modulus operator
</div>
<div class="panel panel-body">
<pre class="prettyprint">
package com.way2p;

import java.util.Scanner;

public class App {
	public static void main(String args[]){
		Scanner scanner=new Scanner(System.in);
		System.out.println("Enter a number:");
		int number=scanner.nextInt();
		if(number%2==0){
			System.out.println(number+" is even number");
		}
		else{
			System.out.println(number+" is odd number");
		}
	}
}

</pre>

</div>
</div>




<div class="panel panel-primary">
<div class="panel panel-heading">
with division operator
</div>
<div class="panel panel-body">
<pre class="prettyprint">
package com.way2p;

import java.util.Scanner;

public class App {
	
	
	public static void main(String args[]){
		Scanner scanner=new Scanner(System.in);
		System.out.println("Enter a number:");//5
		int number=scanner.nextInt();
		if((number/2)*2==number){//  5/2=2 //2*2=4
			System.out.println(number+" is even number");
		}
		else{
			System.out.println(number+" is odd number");
		}
	}
}
</pre>


</div>
</div>



<div class="panel panel-primary">
<div class="panel panel-heading">
with bitwise operator
</div>
<div class="panel panel-body">
using & operation on two binary number<br/>
010-2<br/>
011-3<br/>
------<br/>
010-2 <br/><br/>


001-1<br/>
010-2<br/>
------<br/>
000-0<br/>

when we use bitwise and(&) even number with 1 will give 0, we will use this concept
<pre class="prettyprint">
package com.way2p;

import java.util.Scanner;

public class App {
	
	
	public static void main(String args[]){
		Scanner scanner=new Scanner(System.in);
		System.out.println("Enter a number:");
		int number=scanner.nextInt();
		if((number&1)==0){
			System.out.println(number+" is even number");
		}
		else{
			System.out.println(number+" is odd number");
		}
	}
}
</pre>
</div>
</div>
