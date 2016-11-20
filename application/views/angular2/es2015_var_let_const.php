<div class="panel panel-primary">
        <div class="panel panel-heading">
           var, let and const
        </div>
        <div class="panel panel-body">
 
             <h2>var(ES5)</h2>
             <pre class="prettyprint">
 var name='Arif';

 if(1===1){
   var name='Khan';
 }

 console.log(name);

 
             </pre>

             <div class="alert alert-success">It will print <span style="background-color:yellow">Khan</span> as we can understand scope of the variable</div>
 
            <h2>let (ES2015)</h2>
            <pre class="prettyprint">
let name='Arif';

 if(1===1){
   let name='Khan';
 }

 console.log(name);
            </pre>

            <div class="alert alert-success">Output would be <span style="background-color:yellow">Arif</span> It maintain the scope in block, we can compare with local variable.</div>
 
            <h2>const (ES2015)</h2>
            <pre class="prettyprint">
const url='any url';
console.log(url);
            </pre>
 
      
 
            <div>
                const can be assigned only once and then read only.If you assign again it will give error.
            </div>

            <div class="alert alert-success">
                Potentially we can use let and const to make more modular app.
            </div>
 
        </div>
    </div>