<div class="panel panel-default">
   <div class="panel panel-heading">
      ES2015 Arrow Function
   </div>
   <div class="panel panel-heading">
      <div class="alert alert-success">
          New syntax for maintaining the parent object scope in callback functions.
      </div>
      <pre class="prettyprint">

/*Example First*/

let object={
  collections:['Arif','Khan'],
  method:function(){
    return this.collections.map(value=>value.toLowerCase());
  }
}

console.log(object.method());


/*Example Second*/

let object={
  collections:['Arif','Khan'],
  method:function(){
    return this.collections.map(value=>value.toUpperCase());
  }
}

console.log(object.method());


/*Example Third*/

let object={
  numbers:[1,2,3,4,5,6,7,8,9,10],
  table:function(n){
  return this.numbers.map(value=>value*n);
}
}

console.log(object.table(16));
      </pre>

      <div class="alert alert-success">
If you see above three example and if you are new to Typescript then it might create problem to understand, let's have a look to below code.      
      </div>

      <pre class="prettyprint">
/*function without arrow function*/ 

var doMultiply=function(a,b){
   return a*b;
}  



/*function with arrow function*/

var doMultiply=(a,b)=>a*b;

console.log(doMultiply(5,5));


/*function without arrow function*/ 

var doSqure=function(a){
  return a*a;
}


/*function with arrow function*/

var doSqure = a=>a*a;

console.log(doSqure(5));
      </pre>

<div class="alert alert-success">
i think no explanation required, better you see the above example. so many things still remaining about array function learn it from another web page :)
</div>
      
   </div>
</div>