<div class="panel panel-primary">
<div class="panel panel-heading">
Routing In Angular2
</div>
<div class="panel panel-body">

<h3>app/main.ts</h3>
<pre class="prettyprint">
import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';
import { AppModule } from './app.module';
const platform = platformBrowserDynamic();
platform.bootstrapModule(AppModule);	
</pre>

<h3>app/app.module.ts</h3>
<pre class="prettyprint">
import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule }   from '@angular/forms';
import { AppComponent }  from './app.component';

import { RouterModule } from '@angular/router';
import { AboutComponent } from './about/about.component';
import { HomeComponent } from './home/home.component';
import { ROUTES } from './app.routes';

@NgModule({
  imports: [
    BrowserModule,
    FormsModule,
    RouterModule.forRoot(ROUTES, { useHash: true }),
  ],
  declarations: [
    AppComponent,
    AboutComponent
    HomeComponent
  ],
  bootstrap: [ AppComponent ]
})
export class AppModule { }
	
</pre>

<h3>app/app.component.ts</h3>
<pre class="prettyprint">
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'my-app',
  template: `
    &lt;router-outlet>&lt;/router-outlet>
  `
})
export class AppComponent{

}
</pre>

<h3>app/app.routes.ts</h3>
<pre class="prettyprint">
import { Routes, RouterModule } from '@angular/router';

import { AboutComponent } from './about/about.component';
import { HomeComponent } from './home/home.component';

export const ROUTES: Routes = [
  { path: '', component: HomeComponent },
  { path: 'about', component: AboutComponent },
];
	
</pre>

<h3>app/aboot/about.component.ts</h3>
<pre class="prettyprint">
import { Component } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'about',
  styles: [`
  `],
  template: `
    &lt;h1> &lt;a routerLink="/" routerLinkActive="active">Home&lt;/a>&lt;/h1>
  `
})
export class AboutComponent {
  constructor(public route: ActivatedRoute) {
  }
}
</pre>

<h3>app/home/home.component.ts</h3>
<pre class="prettyprint">
import { Component } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'home',
  styles: [`
  `],
  template: `
    &lt;h1> &lt;a routerLink="/about" routerLinkActive="active">About&lt;/a>&lt;/h1>
  `
})
export class HomeComponent {
  constructor(public route: ActivatedRoute) {
  }
}
</pre>
</div>
</div>