
<h3>app.component.ts</h3><hr/>
<pre class="prettyprint">
import &#123;Component} from 'angular2/core';

&#64;Component(&#123;
    selector: 'firstapp',
    template: `
         &lt;table>
           &lt;tr>&lt;th>First Name&lt;/th>&lt;th>Last Name&lt;/th>&lt;th>Email&lt;/th>&lt;th>Contact Number&lt;/th>&lt;/tr>
           &lt;tr *ngFor="#p_i of person_info">&lt;td>&#123;{p_i.firstname}}&lt;/td>&lt;td>&#123;{p_i.lastname}}&lt;/td>&lt;td>&#123;{p_i.email}}&lt;/td>&lt;td>&#123;{p_i.contact_no}}&lt;/td>&lt;/tr>
         &lt;/table>
    `
})
export class AppComponent &#123; 

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

}	
</pre>

<h3>index.html</h3><hr/>
<pre class="prettyprint">
	&lt;html>
  &lt;head>
    &lt;title>Angular 2 QuickStart&lt;/title>
    &lt;meta name="viewport" content="width=device-width, initial-scale=1">    
    

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
      System.config(&#123;
        packages: &#123;        
          app: &#123;
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

<h2>Output:</h2><hr/>
<img src="<?php echo base_url();?>static/images/ice_screenshot_20160320-154228.png" class="img-responsive"/>

