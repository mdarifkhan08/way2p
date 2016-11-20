<div class="panel panel-primary">
<div class="panel panel-heading">

</div>
<div class="panel panel-body">
<h2>app.module.ts</h2>
<pre class="prettyprint">
import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import {FormsModule} from '@angular/forms';
import {HeroDetailComponent} from './hero-detail.component';
import { AppComponent }   from './app.component';
 
@NgModule({
  imports:      [ BrowserModule, FormsModule ],
  declarations: [ AppComponent, HeroDetailComponent ],
  bootstrap:    [ AppComponent ]
})
 
export class AppModule { }
</pre>
 
 
<h2>app.component.ts</h2>
<pre class="prettyprint">
import { Component, Input} from '@angular/core';
import {Hero} from './hero';
import {HEROES} from './mock-heroes';
import {HeroService} from './hero.service';
import { Observable } from 'rxjs/Observable';
@Component({
  selector: 'my-app',
  template: `
 &lt;h1>{{title}}&lt;/h1>
  &lt;h2>My Heroes&lt;/h2>
  &lt;ul class="heroes">
    &lt;li *ngFor="let hero of heroes | async"
      [class.selected]="hero === selectedHero"
      (click)="onSelect(hero)">
      &lt;span class="badge">{{hero.id}}&lt;/span> {{hero.name}}
    &lt;/li>
  &lt;/ul>
  &lt;my-hero-detail [hero]="selectedHero" [hero2]="abc">&lt;/my-hero-detail>
  `,
  styles: [`
    .selected {
      background-color: #CFD8DC !important;
      color: white;
    }
    .heroes {
      margin: 0 0 2em 0;
      list-style-type: none;
      padding: 0;
      width: 15em;
    }
    .heroes li {
      cursor: pointer;
      position: relative;
      left: 0;
      background-color: #EEE;
      margin: .5em;
      padding: .3em 0;
      height: 1.6em;
      border-radius: 4px;
    }
    .heroes li.selected:hover {
      background-color: #BBD8DC !important;
      color: white;
    }
    .heroes li:hover {
      color: #607D8B;
      background-color: #DDD;
      left: .1em;
    }
    .heroes .text {
      position: relative;
      top: -3px;
    }
    .heroes .badge {
      display: inline-block;
      font-size: small;
      color: white;
      padding: 0.8em 0.7em 0 0.7em;
      background-color: #607D8B;
      line-height: 1em;
      position: relative;
      left: -1px;
      top: -4px;
      height: 1.8em;
      margin-right: .8em;
      border-radius: 4px 0 0 4px;
    }
  `],
  providers:[HeroService]
})
export class AppComponent {
  title = 'Tour of Heroes';
 
  abc="Any Data";
  heroes:Observable&lt;Hero[]>;
 
  constructor(private _heroService:HeroService){
        this.heroes=_heroService.fetchHero();
  }
 
  selectedHero:Hero;
 
  onSelect(hero:Hero):void{
    this.selectedHero=hero;
  }
 
}
</pre>
 
<h2>hero-detail.component.ts</h2>
<pre class="prettyprint">
import {Component,Input} from '@angular/core';
import {Hero} from './hero';
 
@Component({
    selector:'my-hero-detail',
    template:`
    {{hero2}}
  &lt;div *ngIf="hero">
    &lt;h2>{{hero.name}} details!&lt;/h2>
    &lt;div>&lt;label>id: &lt;/label>{{hero.id}}&lt;/div>
    &lt;div>
      &lt;label>name: &lt;/label>
      &lt;input [(ngModel)]="hero.name" placeholder="name"/>
    &lt;/div>
  &lt;/div>`
})
 
export class HeroDetailComponent{
  @Input() hero:Hero;
  @Input() hero2:string;
}
</pre>
 
<h2>hero.service.ts</h2>
<pre class="prettyprint">
import { Injectable} from '@angular/core';
 
import {Hero} from './hero';
 
import {HEROES} from './mock-heroes';
 
import { Observable } from 'rxjs/Observable';
import { Subject} from 'rxjs/Subject';
import 'rxjs/Rx';
 
@Injectable()
export class HeroService{
   
    public fetchHero(): Observable&lt;Hero[]> {  
        return Observable.of(HEROES).map(o => o);
    }
 
}
</pre>

<h2>hero.ts</h2>
<pre class="prettyprint">
export interface Hero{
    id:number;
    name:string;
    email:string;
}
</pre>
 
<h2>mock-heroes.ts</h2>
<pre class="prettyprint">

 
import {Hero} from './hero';


const HEROES: Hero[]=[
    {id:1,name:'Xyz1',email:'xyz1@xyz.com'},
    {id:2,name:'Xyz2',email:'xyz2@xyz.com'},
    {id:3,name:'Xyz3',email:'xyz3@xyz.com'},
    {id:4,name:'Xyz4',email:'xyz4@xyz.com'},
    {id:5,name:'Xyz5',email:'xyz5@xyz.com'},
    ];
</pre>

</div>
</div>