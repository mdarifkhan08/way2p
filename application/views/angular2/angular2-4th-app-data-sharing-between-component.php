<div class="alert alert-info">
	Before Start working on this app i want to write something about this app,this is not good level app
	but it will give  ideas how different component share data to each other.I will do nothing extra in this app, my requirement is same as previous app, when we click on gaurav name we will get gaurav details, but this time i will get data with multiple component communication.
</div>

<h3>create directory/directory/file:  app/person/person-list.component.ts</h3><hr/>
<pre class="prettyprint">
import &#123;Component} from 'angular2/core';

&#64;Component({
       selector:'share-data-with-app-component',
       template:`
         &lt;ul>
            &lt;li (click)="onClickName(p_i)" *ngFor="#p_i of person_info">&#123;{p_i.firstname}} &#123;{p_i.lastname}}&lt;/li>
         &lt;/ul>

         &lt;div>
            &#123;{get_person_info.email}}&lt;br/>
            &#123;{get_person_info.contact_no}}
         &lt;/div>
       `
})

export class PersonListComponent&#123;
	
public person_info=[&#123;
                     firstname:'Arif',
                     lastname:'Khan',
                     email:'arifkhan.tech@gmail.com',
                     contact_no:'123456789'
                    },
                    &#123;
                      firstname:'Gaurav',
                      lastname:'sharma',
                      email:'gaurav@gmail.com',
                      contact_no:'9876543210',
                    },
                    &#123;
                      firstname:'yashi',
                      lastname:'gupta',
                      email:'xyz@gmail.com',
                      contact_no:'1234567890'
                    }
                   ];

   public get_person_info=&#123;;

   public onClickName(name)&#123;
      this.get_person_info=name;
   }
}	
</pre>



<h3>create directory/file:  app/app.component.ts</h3><hr/>
<pre class="prettyprint">
import &#123;Component} from 'angular2/core';
import &#123;lPersonListComponent} from 'app/person/person-list.component';

@Component(&#123;
    selector: 'firstapp',
    template: `
         &lt;share-data-with-app-component>&lt;/share-data-with-app-component>
    `,
    directives:[PersonListComponent]
})
export class AppComponent &#123;


} 
</pre>


<h2>Output: when we click on gaurav name, we get gaurav details but this time we are getting result with two component communication</h2><hr/>
<img src="<?php echo base_url();?>static/images/ice_screenshot_20160320-160019.png" class="img-responsive">
