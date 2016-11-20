<div class="panel panel-default">
  <div class="panel panel-heading">
  Observable
  </div>
  <div class="panel panel-heading">
To understand observable we can take one simple example of javascript array
<pre class="prettyprint">
var numbers=[1, 2, 3, 4, 5, 6, 7];
//numbers.forEach(function(n){
//   console.log(n);
//})
numbers.forEach(n => console.log(n));
</pre>

<div class="alert alert-success">
==>The above example don't have any kind of Observable programming, In Observable same thing happen but over time.
<br/><br/>
==>In the above example collection of value in array Synchronously given immediately. what if we go for Observable, Observable encapsulate Collection of array over time.
</div>

<h3>Lets convert above array in the form of observable.</h3>
<pre>
var a =Rx.Observable.from([1,2,3,4]);
a.subscribe(d=>console.log(d));
</pre>


<div class="alert alert-success">
Observable from FROM operator converts an array to an array of events. So whats going on actually Observable emitting events for each perticular value of array.
</div>


<h3>interval operator</h3>
<pre>
var a =Rx.Observable.interval(500);
a.subscribe(d=>console.log(d));
</pre>

<div class="alert alert-success">
Observable will assume one array and start from 0 and call function each 500 milisecond.
</div>

  </div>
</div>