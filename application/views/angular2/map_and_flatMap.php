<div class="panel panel-primary">
<div class="panel panel-heading">

</div>
<div class="panel panel-body">

<h3>Observable with out map</h3>
<pre class="prettyprint">
var source=Rx.Observable.interval(100).take(10);

source.subscribe(x => console.log(x));
</pre>


<h3>Observable with map</h3>
<pre class="prettyprint">
var source=Rx.Observable.interval(100).take(11)
            .map(x=>x*3);

source.subscribe(x => console.log(x));
</pre>


<h3>Observable of Observable with map</h3>
<pre class="prettyprint">
var source=Rx.Observable.interval(100).take(11)
            .map(x=> Rx.Observable.timer(500));

source.subscribe(x => console.log(x));
</pre>


</div>
</div>