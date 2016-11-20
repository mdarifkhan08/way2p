<div class="panel panel-primary">
<div class="panel panel-heading">
convert binary number to decimal number without using Integer.parseInt() method.
</div>
<div class="panel panel-body">
<pre class="prettyprint">
package com.way2p;

import java.util.Scanner;

public class App {
	
	
	public static void main(String args[]){
		Scanner scanner=new Scanner(System.in);
		System.out.println("Enter a binary number:");
		int userBinary=scanner.nextInt();
		
		int decimal=0;
		int power=0;
		System.out.println("Binary Number:"+userBinary);
		while(true){
			
			if(userBinary==0){
				 break;
			}
			else{
				int lastDigitOfBinary=userBinary%10;
				decimal+=lastDigitOfBinary*Math.pow(2, power);
				userBinary=userBinary/10;
				power++;
			}
			
		}
		
		System.out.println("Decimal Number:"+decimal);
	}

	
}

</pre>
output:- 
<br/><br/>
Enter a binary number:<br/>
101<br/>
Binary Number:101<br/>
Decimal Number:5<br/>


</div>
</div>



<div class="panel panel-primary">
<div class="panel panel-heading">
convert binary number to decimal number using Integer.parseInt() method.
</div>
<div class="panel panel-body">
<pre class="prettyprint">
package com.way2p;

import java.util.Scanner;

public class App {
	
	
	public static void main(String args[]){
		Scanner scanner=new Scanner(System.in);
		System.out.println("Enter a binary number:");
		String binaryNumber=scanner.nextLine();
		System.out.println("Decimal Number:"+Integer.parseInt(binaryNumber, 2));
	}

	
}

</pre>
output:- 
<br/><br/>
Enter a binary number:<br/>
101<br/>
Decimal Number:5<br/>
<br/><br/>

In this program Integer.parseInt(value,2) work like<br/>
101=1*2^2+0*2^1+1*2^0;<br/><br/>


If you want to convert binary to hexa decimal then you need to do<br/>
Integer.parseInt(value,16)<br/>
101=1*16^2+0*16^1+1*16^0


</div>
</div>