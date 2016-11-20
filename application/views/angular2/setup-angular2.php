
<div class="alert alert-info">
<ul>
	<li>Composer should be installed in your machine.</li>
	<li>node js should be install in your machine.</li>
</ul>
</div>


<h3>create file: package.json</h3><hr/>
<pre class="prettyprint">
{
  "name": "angular2-quickstart",
  "version": "1.0.0",
  "scripts": {
    "start": "concurrently \"npm run tsc:w\" \"npm run lite\" ",    
    "tsc": "tsc",
    "tsc:w": "tsc -w",
    "lite": "lite-server",
    "typings": "typings",
    "postinstall": "typings install" 
  },
  "license": "ISC",
  "dependencies": {
    "angular2": "2.0.0-beta.11",
    "systemjs": "0.19.24",
    "es6-promise": "^3.0.2",
    "es6-shim": "^0.35.0",
    "reflect-metadata": "0.1.2",
    "rxjs": "5.0.0-beta.2",
    "zone.js": "0.6.4"
  },
  "devDependencies": {
    "concurrently": "^2.0.0",
    "lite-server": "^2.1.0",
    "typescript": "^1.8.9",
    "typings":"^0.7.9"
  }
}	
</pre>

<h3>create file: tsconfig.json</h3><hr/>
<pre class="prettyprint">
{
  "compilerOptions": {
    "target": "es5",
    "module": "system",
    "moduleResolution": "node",
    "sourceMap": true,
    "emitDecoratorMetadata": true,
    "experimentalDecorators": true,
    "removeComments": false,
    "noImplicitAny": false
  },
  "exclude": [
    "node_modules",
    "typings/main",
    "typings/main.d.ts"
  ]
}
</pre>


<h3>create file: typings.json</h3><hr/>
<pre class="prettyprint">
{
  "ambientDependencies": {
    "es6-shim": "github:DefinitelyTyped/DefinitelyTyped/es6-shim/es6-shim.d.ts#7de6c3dd94feaeb21f20054b9f30d5dabc5efabd",
    "jasmine": "github:DefinitelyTyped/DefinitelyTyped/jasmine/jasmine.d.ts#7de6c3dd94feaeb21f20054b9f30d5dabc5efabd"
  }
}
</pre>


<h3>create directory/file: app/app.component.ts</h3><hr/>
<pre class="prettyprint">
import &#123;Component} from 'angular2/core';

&#64;Component(&#123;
    selector: 'my-app',
    template: '&lt;h1>My First Angular 2 App&lt;/h1>'
})
export class AppComponent &#123; }
</pre>

<h3>create directory/file: app/main.ts</h3><hr/>
<pre class="prettyprint">
import {bootstrap}    from 'angular2/platform/browser';
import {AppComponent} from './app.component';

bootstrap(AppComponent);	
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
      System.config(&lt;
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
    &lt;my-app>Loading...&lt;/my-app>
  &lt;/body>
&lt;/html>
</pre>


<h3>give a command to install libraries using node</h3><hr/>
<pre class="prettyprint">
c:\wamp\www\angular2:> npm install   //your project path could be different
</pre>


<h3>give a command to test app in dev environment</h3><hr/>
<pre class="prettyprint">
c:\wamp\www\angular2:>npm start
</pre>


<h3>now we can access to our application using port 3000</h3><hr/>
<pre class="prettyprint">
http://localhost:3000
</pre>

<h2>Output:</h2><hr/>
<img src="<?php echo base_url();?>static/images/ice_screenshot_20160320-150821.png" class="img-responsive"/>
