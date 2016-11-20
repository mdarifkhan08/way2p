<div class="alert alert-info">
	In this app we have finished a lot more concept of angular2, this app provides three component communication, and i think only practice can make more understanding on this app. 
</div>

<h3>create directory/directory/file:  app/person/person-list.component.ts</h3><hr/>
<pre class="prettyprint">
import &#123;Component} from 'angular2/core';
import &#123;PersonComponent} from 'app/person/person.component';

&#64;Component({
       selector:'share-data-with-app-component',
       template:`
            &lt;ul>
            &lt;li (click)="onClickName(p_i)" *ngFor="#p_i of person_info">&#123;{p_i.firstname}} &#123;{p_i.lastname}}&lt;/li>
         &lt;/ul>
         &lt;get-data-from-person-list-component [person]="get_person_info"></get-data-from-person-list-component>
       `,
       directives:[PersonComponent]
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

   public get_person_info={};

   public onClickName(name){
      this.get_person_info=name;
   }
}	
</pre>


<h3>create directory/directory/file:  app/person/person.component.ts</h3><hr/>
<pre class="prettyprint">
import &#123;Component} from 'angular2/core';

&#64;Component({
	selector:'get-data-from-person-list-component',
	template:`
       <div>
            &#123;{person.email}}<br/>
            &#123;{person.contact_no}}
       </div>
	`,
	inputs:["person"]
})
export class PersonComponent{
	public person=&#123;};
}	
</pre>


<h3>create directory/file:  app/app.component.ts</h3><hr/>
<pre class="prettyprint">
import &#123;Component} from 'angular2/core';
import &#123;PersonListComponent} from 'app/person/person-list.component';

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


<h2>Output: from three component communication</h2><hr/>
<img src="<?php echo base_url();?>static/images/ice_screenshot_20160320-160019.png" class="img-responsive">

