<div class="alert alert-success">
Recursion:-the process of defining a function or calculating a number by the repeated application of an algorithm
</div>
<div class="panel panel-primary">
<div class="panel panel-heading">
Java program to find sum of digits without using recursion.
</div>
<div class="panel panel-body">
<pre class="prettyprint">
package com.way2p;

import java.util.Scanner;

public class App {
	public static void main(String args[]) {
		int number;
		Scanner in=new Scanner(System.in);
		System.out.println("Please Enter a number");
		number = in.nextInt();
		int sum = 0;
		while (number != 0) {
			sum = sum + (number % 10);
			number = number / 10;
		}
		System.out.println("Sum of Digits =" + sum);
	}
}
</pre>

output:-<br/><br/>

Please Enter a number<br/>
456<br/>
Sum of Digits =15<br/>

</div>
</div>



<div class="panel panel-primary">
<div class="panel panel-heading">
Java program to find sum of digits using recursion.
</div>
<div class="panel panel-body">
<pre class="prettyprint">
package com.way2p;

import java.util.Scanner;

public class App {
	
	int sum;
	
	public int calculateRecursiveSum(int n){
		if(n==0){
			return sum;
		}
		else{
			sum+=n%10;
			calculateRecursiveSum(n/10);
		}
		return sum;
	}
	
	public static void main(String args[]) {
		int number;
		Scanner scanner=new Scanner(System.in);
		System.out.println("please enter a number");
		number=scanner.nextInt();
		App app=new App();
		System.out.println("Sum of digits: "+app.calculateRecursiveSum(number));
	}
}

</pre>

output:-<br/><br/>

Please Enter a number<br/>
456<br/>
Sum of digits: 15<br/>

</div>
</div>