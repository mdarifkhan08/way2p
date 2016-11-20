<div class="panel panel-primary">
<div class="panel panel-heading">

</div>
<div class="panel panel-body">

<h3>app.component.ts</h3>
<pre class="prettyprint">
import { Component} from '@angular/core';
@Component({
  moduleId: module.id,
  selector: 'my-app',
  templateUrl:'./app.component.html',
  styleUrls: ['./app.component.css']
}
}
})
export class AppComponent {
      username:string;
      names=[{name:"Arif"}];
      changeColor:boolean;
      
      bindData(){
       this.names.push({name:this.username});
       console.log(this.username);
       this.username="";
      }

      keyDownFunction(event) {
        if(event.keyCode == 13) {
        this.names.push({name:this.username});
        console.log(this.username);
        this.username="";
        }
      }
      onFocusInput(){
      console.log("test");
      }
      onMouseOver(event,name){
      console.log("test");
      this.changeColor=name;
      return this.changeColor;
      }
      onMouseOut(event,name){
      console.log("test");
      this.changeColor="";
      return this.changeColor;

      }
}
	
</pre>

<h3>app.component.html</h3>
<pre class="prettyprint">
&lt;br/>
&lt;div class="container">
	&lt;div class="row">
  &lt;div class="col-lg-3">
    &lt;div class="input-group">
      
    &lt;/div>
  &lt;/div>
  &lt;div class="col-lg-6">
    &lt;div class="input-group">
      &lt;input type="text" class="form-control" placeholder="Enter Name" (focus)="onFocusInput()" [(ngModel)]="username" (keydown)="keyDownFunction($event,username)">
      &lt;span class="input-group-btn">
        &lt;button class="btn btn-default" type="button" (click)="bindData()">Push!&lt;/button>
      &lt;/span>
    &lt;/div>
  &lt;/div>&lt;!-- /.col-lg-6 -->
   &lt;div class="col-lg-3">
    &lt;div class="input-group">
      
    &lt;/div>
  &lt;/div>
&lt;/div>
&lt;/div>

&lt;div class="container">
	&lt;div class="alert alert-success" [class.changeBackGroundColor]="changeColor==name.name" *ngFor="let name of names" (mouseover)="onMouseOver($event,name.name)"  (mouseout)="onMouseOut($event,name.name)">
		{{name.name}}
	&lt;/div>
&lt;/div>	
</pre>


<h3>app.component.css</h3>
<pre class="prettyprint">
.changeBackGroundColor{
	background-color: lightgreen;
}	
</pre>


<h3>point to be remember</h3>

<table class="table table-bordered">
  <tr><td>1. If we want to use form component(input,textarea,button,select) before use these component first we need to tell angular 2 app, you want to use FormModule</td>
 
  </tr>
  <tr><td>2. to register FormModule first we need to go app.module.ts file and import <pre>import { FormsModule }   from '@angular/forms';</pre>
  and after this you have to go @NgModule decorator and provide FormModule to import section/key <pre>
  @NgModule({
  imports:      [ BrowserModule, FormsModule ],
  declarations: [ AppComponent ],
  bootstrap:    [ AppComponent ]
})
  </pre>
  now we can use any form component inside our application
  </td></tr>
  <tr><td>3. app.module.ts file have @NgModel decorator , this decorator required meta data, declarations meta data required component, directive and pipe etc information </td></tr>
</table>

</div>
</div>