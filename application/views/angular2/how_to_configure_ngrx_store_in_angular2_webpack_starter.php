<div class="panel panel-primary">
        <div class="panel panel-heading">
 
           How to configure @ngrx/store with angular2-webpack-starter that is driven by AngularClass
           
        </div>
        <div class="panel panel-body">
 
             <h2>package.json(add dependency)</h2>
             <pre class="prettyprint">
 
                 "dependencies": {
 
                  "@ngrx/core": "^1.2.0",
                  "@ngrx/effects": "^2.0.0",
                  "@ngrx/store": "^2.2.1",
                  "@ngrx/store-devtools": "^3.1.0",
                  "@ngrx/store-log-monitor": "^3.0.2",
                  "ngrx-store-localstorage": "^0.1.5"
 
                  }
 
             </pre>
 
            <h2>from cmd</h2>
            <pre class="prettyprint">
               npm install
            </pre>
 
            <h2>app.module.ts</h2>
            <pre class="prettyprint">
 
import { Store, StoreModule, combineReducers } from '@ngrx/store';
import { compose } from '@ngrx/core/compose';
import { StoreDevtoolsModule } from '@ngrx/store-devtools';
 import { StoreLogMonitorModule, useLogMonitor } from '@ngrx/store-log-monitor';
import { localStorageSync } from 'ngrx-store-localstorage';
import { EffectsModule } from '@ngrx/effects';
//inside @NgModule({import:}) in import pass these module
imports: [ // import Angular's modules
                
BrowserModule,
FormsModule,
HttpModule,
RouterModule.forRoot(ROUTES, { useHash: true }),
     StoreModule.provideStore(compose(
      //localStorageSync(['user'], true),  // not aware of this why we use this
      combineReducers
    )({
      //user: userReducer,
      //products: productsReducer,
      
    }), {
        //user: initialUserState,//not aware of this why we use this
        
      }),
    StoreDevtoolsModule.instrumentStore({
      monitor: useLogMonitor({
        visible: false,
        position: 'right'
      })
    }),
    StoreLogMonitorModule,
    //EffectsModule.run(UserEffects) // at this point of time i am not aware of @ngrx/store effect
  ],
  providers: [ // expose our Services and Providers into Angular's dependency injection
    ENV_PROVIDERS,
    APP_PROVIDERS
  ]
})
  
 
            </pre>
 
            <h2>app.component.html (add code to this file)</h2>
            <pre class="prettyprint">
              &lt;ngrx-store-log-monitor
                 toggleCommand="ctrl-k"
                 positionCommand="ctrl-e"
              >&lt;/ngrx-store-log-monitor>
            </pre>
 
            <div>
                 potentially we can use ctrl+K and ctrl+e
            </div>
 
        </div>
    </div>