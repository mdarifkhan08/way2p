
<h3>person.ts</h3><hr/>
<pre class="prettyprint">
export interface Person{
	firstname:string,
	lastname:string,
	email:string,
	contact_no:string
}	
</pre>

<h3>mock-person.ts</h3><hr/>
<pre class="prettyprint">
import {Person} from 'app/person/person';

export const PERSONS: person[]=[
                    {
                     firstname:'Arif',
                     lastname:'Khan',
                     email:'arifkhan.tech@gmail.com',
                     contact_no:'123456789'
                    },
                    {
                      firstname:'Gaurav',
                      lastname:'sharma',
                      email:'gaurav@gmail.com',
                      contact_no:'9876543210',
                    },
                    {
                      firstname:'yashi',
                      lastname:'gupta',
                      email:'xyz@gmail.com',
                      contact_no:'1234567890'
                    }
];	
</pre>

<h3>person-service.ts</h3><hr/>
<pre class="prettyprint">
import {Injectable} from 'angular2/core';
import {PERSONS} from 'app/person/mock-person'
@Injectable()

export class PersonService{
	getPersons(){
	 return Promise.resolve(PERSONS); 
	}
}	
</pre>

<h3>person-list.component.ts</h3><hr/>
<pre class="prettyprint">
import {Component} from 'angular2/core';
import {PersonComponent} from 'app/person/person.component';
import {PersonService} from 'app/person/person.service';
import {OnInit} from 'angular2/core';

@Component({
       selector:'share-data-with-app-component',
       template:`
            &lt;ul>
            &lt;li (click)="onClickName(p_i)" *ngFor="#p_i of person_info">&#123;{p_i.firstname}} &#123;{p_i.lastname}}&lt;/li>
         &lt;/ul>
         &lt;get-data-from-person-list-component [person]="get_person_info">&lt;/get-data-from-person-list-component>
       `,
       directives:[PersonComponent],
       providers:[PersonService]
})

export class PersonListComponent implements OnInit{
	
public person_info:person[];

  
   constructor(private _personService: PersonService){
   }

   getPersons(){
   this._personService.getPersons().then((person_info:person[])=>this.person_info=person_info)
   }

   public get_person_info={};

   public onClickName(name){
      this.get_person_info=name;
   }

   ngOnInit():any{
   this.getPersons();
   }
}	
</pre>

<h3>index.html</h3><hr/>
<pre class="prettyprint">
&lt;html>
  &lt;head>
    &lt;title>Angular 2 QuickStart&lt;/title>
    &lt;meta name="viewport" content="width=device-width, initial-scale=1">    
    &lt;link rel="stylesheet" type="text/css" href="styles.css">

    &lt;!-- 1. Load libraries -->
    &lt;!-- IE required polyfills, in this exact order -->
    &lt;script src="node_modules/es6-shim/es6-shim.min.js">&lt;/script>
    &lt;script src="node_modules/systemjs/dist/system-polyfills.js">&lt;/script>
    &lt;script src="node_modules/angular2/es6/dev/src/testing/shims_for_IE.js">&lt;/script>   

    &lt;script src="node_modules/angular2/bundles/angular2-polyfills.js">&lt;/script>
    &lt;script src="node_modules/systemjs/dist/system.src.js">&lt;/script>
    &lt;script src="node_modules/rxjs/bundles/Rx.js">&lt;/script>
    &lt;script src="node_modules/angular2/bundles/angular2.dev.js">&lt;/script>

    &lt;!-- 2. Configure SystemJS -->
    &lt;script>
      System.config({
        packages: {        
          app: {
            format: 'register',
            defaultExtension: 'js'
          }
        }
      });
      System.import('app/main')
            .then(null, console.error.bind(console));
    &lt;/script>
  &lt;/head>

  &lt;!-- 3. Display the application -->
  &lt;body>
    &lt;firstapp>Loading...&lt;/firstapp>
  &lt;/body>
&lt;/html>
	
</pre>


<h2>Output: using service</h2><hr/>
<img src="<?php echo base_url();?>static/images/ice_screenshot_20160320-160019.png" class="img-responsive">

