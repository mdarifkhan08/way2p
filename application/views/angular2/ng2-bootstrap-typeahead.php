<div class="panel panel-primary">
   <div class="panel panel-heading">
       Typeahead For Auto populate from ng2-bootstrap
   </div>
   <div class="panel panel-heading">
       <h2>package.json</h2>
       <pre class="prettyprint">
      //add ng2-bootstrap module inside your package.json file
       </pre>
 

 
       <h2>students.ts(it has static db so we can create one directory in which we keep it)</h2>
<pre class="prettyprint">
 
export const STUDENTS:Array&lt;any> = [
  {
    "name": "Arif Khan",
    "email": "xyz@xyz.com"
  },
  {
    "name": "Yashi Gupta",
    "email": "xyz@xyz.com"
  },
  {
    "name": "Ketan Sharma",
    "email": "xyz@xyz.com"
  },
  {
    "name": "Aditya Raj",
    "email": "xyz@xyz.com"
  }
  ] 
       </pre>
 
 
       <h2>student.service.ts(don't forget to register service as a providers inside app.modules.ts)</h2>
       <pre class="prettyprint">
import { Injectable } from '@angular/core';
import { STUDENTS } from './students';
 
@Injectable()
export class StudentService{
 
      fetchStudents():any{
         return STUDENTS;
      }
}
       </pre>
 
       <h2>app.component.html</h2>
       <pre class="prettyprint">
 
          &lt;form class="form-horizontal" [formGroup]="myForm" novalidate (ngSubmit)="onSubmit()">
            
             &lt;input             
               type="text"
               class="form-control"
               formControlName="student"
               [typeahead]="getStudents"
               (typeaheadOnSelect)="typeaheadOnSelect($event)"
               [typeaheadOptionsLimit]="7"
               [typeaheadOptionField]="'name'"
               [typeaheadMinLength]="0"
               >
 
             &lt;button type="submit" class="btn btn-primary btn-lg" [disabled]="!myForm.valid">Submit&lt;/button>
 
          &lt;/form>
          
       </pre>
 
        <h2>app.component.ts</h2>
       <pre class="prettyprint">
import { Component } from '@angular/core';
import { TypeaheadMatch } from 'ng2-bootstrap/components/typeahead/typeahead-match.class';
import { StudentService } from './student.service.ts';
 
@Component({
selector:'demo-app',
templateUrl:'./app.component.html'
})
 
export class AppComponent{
     getStudents;
     constructor(private studentService:StudentService){
        this.getStudents=studentService.fetchStudents();
         Observable.create((observer:any) => {
          // Runs on every search
       observer.next(this.asyncSelected);
      }).mergeMap((token:string) => this.getStudentsAsObservable(token));
     
     }
 
public getStudentsAsObservable(token:string):Observable<any> {
    let query = new RegExp(token, 'ig');
 
    return Observable.of(
      this.getStudents.filter((state:any) => {
        return query.test(state.name);
      })
    ).debounceTime(1000);
  }
 
  public typeaheadOnSelect(e:TypeaheadMatch):void {
       console.log('selected:'+e.value);
  }
 
 
 
/* 
 
public changeTypeaheadLoading(e:boolean):void {
    this.typeaheadLoading = e;
    console.log('loading');
  }
 
  public changeTypeaheadNoResults(e:boolean):void {
    this.typeaheadNoResults = e;
    console.log('no result');
  }
 
*/
 
 
 
 
}         
       </pre>
   </div>
</div>