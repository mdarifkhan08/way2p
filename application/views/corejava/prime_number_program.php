<div class="panel panel-primary">
<div class="panel panel-heading">
	Program
</div>
<div class="panel panel-body">
<pre class="prettyprint">
package com.way2p;

public class App {
	public static void main(String args[]) {
		int num=50;
		int count=0;
		
		for(int i=2;i&lt;=num;i++){
			 count=0;
			for(int j=2;j&lt;=i/2;j++){
				if(i%j==0){
					count++;
					break;
				}
			}
			if(count==0){
				System.out.println(i);
			}
		}
	}
}

</pre>
output:- 2,3,5,7,11,13,17,19,23,29,31,37,41,43,47
</div>
</div>