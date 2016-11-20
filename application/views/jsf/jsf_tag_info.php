					<div class="alert alert-info">The UI Composition tag is a
						templating tag that wraps content to be included in another
						Facelet. Any content outside of the UI Composition tag will be
						ignored by the Facelets view handler. Any content inside of the UI
						Composition tag will be included when another Facelets page
						includes the page containing this UI Composition tag.</div>
					<pre class="prettyprint">
 &lt;ui:component>
 
 /*We can any thing/data here no restriction but this page should be include in another .xhtml file.*/
		</pre>


					<div class="alert alert-info">What does &lt;f:facet> do ? The
						Facet tag registers a named facet on the component associated with
						the enclosing tag. A facet represents a named section within a
						container component. For example, you can create a header and a
						footer facet for a dataTable component. The name attribute sets
						the name of the facet to be created. Some components have facets
						with predefined names, such as the "header" and "footer" facets of
						the component associated with the h:dataTable tag. For Example
						this code :</div>
					<pre class="prettyprint">
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
&lt;html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:f="http://java.sun.com/jsf/core"
      xmlns:h="http://java.sun.com/jsf/html">
&lt;body>
&lt;f:view>
    &lt;h:dataTable id="reportTable" value="&#35;{reportController.dailyReport}"
                 var="item" border="1">
        &lt;h:column>
            &lt;f:facet name="header">
                &lt;h:outputText value="Daily Report" />
            &lt;/f:facet>
            &lt;h:outputText value="&#35;{item}" />
        &lt;/h:column>
    &lt;/h:dataTable>
&lt;/f:view>
&lt;/body>
&lt;/html>			
	</pre>
					<div class="alert alert-info">Will render this HTML Output :
					</div>

					<pre class="prettyprint">
&lt;table id="reportTable" border="1">
  &lt;thead>
    &lt;tr>
      &lt;th>Daily Report&lt;/th>
    &lt;/tr>
  &lt;/thead>
  &lt;tbody>
    &lt;tr>
      &lt;td>Item 1&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td>Item 2&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td>Item 3&lt;/td>
    &lt;/tr>
  &lt;/tbody>
&lt;/table>
</pre>
				



					<div class="alert alert-warning">The h:panel tag renders an
						HTML "table" element.</div>


					<table class="table table-bordered" >
	<caption><h2>JSF Form Tags</h2></caption>
	<tr><td>h:inputText tag</td><td>It renders an HTML input element of type text<br/>
syntax:<br/>
	<pre>
&lt;h:inputText id="inputText" value="XYZ" />
	</pre></td></tr>

	<tr><td>h:inputSecret tag</td><td>It renders an HTML input element of type password<br/>syntax:<br/><pre>&lt;h:inputSecret id="password" value="password" /></pre></td></tr>


	

    
<tr><td>h:inputHidden tag</td><td>It renders an HTML input element of type hidden<br/>syntax:<br/><pre>&lt;h:inputHidden value="XYZ" id="hiddenField" /></pre></td></tr>



	<tr><td>h:inputTextarea tag</td><td>It renders an HTML textarea element <br/>syntax:<br/><pre>&lt;h:inputTextarea id="textarea" row="10" col="5" value="text data will come here" /></pre></td></tr>


	<tr><td>h:commandButton tag</td><td>It renders an HTML input element of type submit <br/>syntax:<br/><pre>&lt;h:commandButton  value="SUBMIT" onclick="xyz()" /></pre></td></tr>

		<tr><td>h:form tag</td><td>It renders an HTML form element <br/>syntax:<br/>
		<pre>
&lt;h:form>

&lt;/h:form>		</pre></td></tr>






<tr><td>h:selectBooleanCheckbox tag</td><td>It renders an HTML  input element with type checkbox  <br/>syntax:<br/>
<pre>
&lt;h:selectBooleanCheckbox value="Remember Me" id="rMe" />
</pre></td></tr>


<tr><td>h:selectManyCheckbox tag</td><td>It renders an HTML  multiple input element with type checkbox  <br/>syntax:<br/>
<pre>
&lt;h:selectManyCheckbox value="">
   &lt;f:selectItem itemValue="1" itemLabel="Item 1" />
   &lt;f:selectItem itemValue="2" itemLabel="Item 2" />
&lt;/h:selectManyCheckbox>
</pre></td></tr>

<tr><td>h:selectOneRadio tag</td><td>It renders an HTML  multiple input element with type radio  <br/>syntax:<br/>
<pre>
&lt;h:selectOneRadio value="">
   &lt;f:selectItem itemValue="1" itemLabel="Item 1" />
   &lt;f:selectItem itemValue="2" itemLabel="Item 2" />	   			
&lt;/h:selectOneRadio>
</pre></td></tr>



<tr><td>h:selectOneListbox tag</td><td>It renders an HTML select element   <br/>syntax:<br/>
<pre>
&lt;h:selectOneListbox value="">
   &lt;f:selectItem itemValue="1" itemLabel="Item 1" />
   &lt;f:selectItem itemValue="2" itemLabel="Item 2" />	   							
&lt;/h:selectOneListbox>		
</pre></td></tr>




<tr><td>h:selectManyListbox tag</td><td>It renders an HTML select element with multiple attribute <br/>syntax:<br/>
<pre>
&lt;h:selectManyListbox value="">
   &lt;f:selectItem itemValue="1" itemLabel="Item 1" />
   &lt;f:selectItem itemValue="2" itemLabel="Item 2" />	   							
&lt;/h:selectOneListbox>	
</pre></td></tr>



<tr><td>h:selectOneMenu tag</td><td>It renders an HTML select element <br/>syntax:<br/>
<pre>
&lt;h:selectOneMenu value="">
   &lt;f:selectItem itemValue="1" itemLabel="Item 1" />
   &lt;f:selectItem itemValue="2" itemLabel="Item 2" />
   &lt;f:selectItem itemValue="3" itemLabel="Item 3" />
   &lt;f:selectItem itemValue="4" itemLabel="Item 4" />
   &lt;f:selectItem itemValue="5" itemLabel="Item 5" />				
&lt;/h:selectOneMenu>
</pre></td></tr>



</table>
