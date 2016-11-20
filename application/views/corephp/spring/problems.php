			<h3></h3>
			<pre class="prettyprint">
1.@ModelAttribute without BindingResult Class may give the exception 404

@RequestMapping(value = "process", method = RequestMethod.POST)
public ModelAndView processSignUp( @Valid @ModelAttribute("student") Student student, BindingResult result, @Valid @ModelAttribute("studentDetail") StudentDetail studentDetail, BindingResult result1) {
2.While creating the maven archetype eclipse/STS can give archetype could not resolve a type

For OverCome this problem we need to add explicitly location of archetype and maven retrieve the archetype by internet while creating your project.

go to-->windows-->preferences-->maven-->Archetypes--->Add Remote Catalogs---> 

and

catalog file:   http://repo1.maven.org/maven2/archetype-catalog.xml
description:  maven catalog
3.Internationalization:

Warning
Remember put the "&lt;%@ page contentType="text/html;charset=UTF-8" %>" on top of the page, else the page may not able to display the UTF-8 (Hindi,Chinese..) characters properly.
4.Suggestion :Never use Spring 4 jar files with hibernate 3.The Reason is you may get output or not both possibities.I have already suffer a lot then i found their is some conflict between both.

5.very nice suggestion never use spring security with hibernate 4.100% you will not get output.      
            </pre>
