<h3>Coding Without Dependency Injection</h3><hr/>
<div class="alert alert-info">
	<ol>
		<li>Objects takes responsibillty for managing their own dependencies.</li>
		<li>Generally leads to more tightly coupled code.</li>
		<li>Can require coding changes to manage changes with dependencies.</li>
		<li>Can make classes more difficult to unit test.</li>
	</ol>
</div>

<h3>Coding With Dependency Injection</h3><hr/>
<div class="alert alert-info">
	<ol>
		<li>Generally leads to loosely coupled code.</li>
		<li>The class is not responsible for determining its dependencies.</li>
		<li>This allows the class to be composed at runtime.</li>
	</ol>
</div>


<h3>Dependency Injection With Spring</h3><hr/>
<div class="alert alert-info">                                       
	<ol>
		<li>Dependency Injection is a core feature of spring framework.</li>
		<li>The Spring framework determines the dependencies to inject into your classes at runtime.
         <ul><li>This is know as Inversion of Control.The framework is in control of what gets injected.</li></ul>
		</li>
	</ol>
</div>

<h3>Type of Dependency Injection</h3><hr/>
<div class="alert alert-info">
	<ol>
		<li>Constructor Based Dependency Injection.<ul><li>Preffered by some so can not be instansiated without it's dependencies.</li></ul></li>

		<li>
         Setter Based Dependency Injection<ul><li>ofter preferred in spring applications, somewhat more flexible than constructor based injection.</li></ul></li>
		</li>
	</ol>
</div>


<h3>Interface based dependency injection</h3><hr/>
<div class="alert alert-info">
	<ul>
		<li>It is considered a best practice to code dependencies to an interface.
           <ul>
           	<li>This practice is closely aligned with the SOLID principles of object oriented programming.</li>
           	<li>Allow for flexibility in composing the behavior of classes.
                  <ul>
                  	
                  </ul>
           	</li>
           </ul>
		</li>
	</ul>
</div>