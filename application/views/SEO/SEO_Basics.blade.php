@extends('base')


@section('meta')
<meta name="keywords" content="" />
<meta name="description"  content="" />
@stop



@section('content')
	<h3></h3>

	<div class="panel panel-success">
		<div class="panel panel-heading">
Importance of &lt;title> tag
		</div>

		
1. &lt;title> should be the first element after the head tag/element.<br/>
2.title tag shoulb be readable and should have information of your website.<br/>
3.title tag of all page should have difference,it can match but not ,fully match.<br/>
4.First chracter of each word in title tag should be capital.<br/>
Example:<br/>
<pre class="prettyprint">
	<strong>
&lttitle>Way-2-Programming, Practical Approach With Way-2-Programming&lt/title></strong>
	</strong>
</pre>
<br/><br/>

5.Suppose for this webpage i am trying to do SEO(Search Engine Optimization)<br/>


<pre class="prettyprint">
	<strong>
&lttitle>Search Engine Optimization, SEO&lt/title></strong>
	</strong>
</pre>
<br/><br/>


		
	</div>





	<h3>Meta Tag</h3>
<div class="panel panel-success">
		<div class="panel panel-heading">
		description meta tag		
		</div>
		It is very important meta tag for your webpage,you need to focus starting first-second line of text(appox 150 strating words).<br/>

		SEO is all about to be your body information.if you did'nt use this meta tag the search engine automatically grab information from your webpage.

		<br/>

		So that you need to have meta tag that will match with your body information

		<br/><br/>


<pre class="prettyprint">
	<strong>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>Search Engine Optimization, SEO&lt;/title>
	&lt;meta name="description" content="way2programming.com is trying to collect some information related to the Search Engine Optimization."/>
	&lt;meta name="keywords" content="Search Engine Optimization,Search Engine Optimization Reforms,information of search engine optimization">
	&lt;link rel="stylesheet" type="text/css" href="css/style.css">
	&lt;script type="text/javascript" src="script.js">&lt;/script>
&lt;/head>
&lt;body>

&lt;h1>Search Engine Optimization&lt;/h1>


&lt;p title="information of search engine optimization">

//Whatever you want to write..

&lt;/p>


&lt;a href="search-engine-optimization-reforms.php">Search Engine Optimization Reforms&lt;/a>
&lt;/body>
&lt;/html>

	</strong>
</pre>
<br/><br/>

<b>The above SEO page is not strong enough but it will have so many ideas related to SEO that we will discuss below.</b>
<br/><br/>

1.If you will see navigation part (anchor tag)   then it is also very much useful for SEO in website.If you see below code, then keywords between the anchor tag is matching with url.This way is useful while SEO

<pre class="prettyprint">&lt;a href="search-engine-optimization-reforms.php">Search Engine Optimization Reforms&lt;/a></pre>
<br/><br/>
2.Static content like css and javascript file should be have seperate file with their extension.It help to speed up webpage while loading and it also helpful for SEO.
<pre class="prettyprint">
	&lt;link rel="stylesheet" type="text/css" href="css/style.css">
	&lt;script type="text/javascript" src="script.js">&lt;/script>
</pre>
</div>


<br/><br/>




<div class="panel panel-success">
<div class="panel-heading">
keyword meta tag
</div>
In my perspective keyword meta tag is not that much important,so many people thinks keywords will increase their traffic.I think they were wrong<br/><br/>

1.keyword meta tag contain the information of body as a keywords,this keywords is all about to be guess related to searching of page.If you are not really understood what i am talking about i will try it in next tutorial with full energy.

<br/><br/>

2.Suppose your body tag in a page is having heading(h1) tag,this heading tag keyword should be like that other person can search frequently, and this keywords we will post to keyword meta tag, now lets see one example of it.<br/><br/>


<pre class="prettyprint">
	
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;meta name="keywords" content="Search Engine Optimization,">
&lt;/head>
&lt;body>

&lt;h1>Search Engine Optimization&lt;/h1>


&lt;/body>
&lt;/html>

</pre>



</div>















<div class="panel panel-success">
<div class="panel-heading">
All Important Keywords
</div>

<pre class="prettyprint">
	
&lt;!DOCTYPE html>
&lt;html>
&lt;head>
	&lt;title>&lt;/title>
	&lt;meta name="description" content="">
	&lt;meta name="keywords" content="">
	&lt;meta name="generator" content="">
	&lt;meta name="copyright" content="">
	
	&lt;meta name="language" content="">
	&lt;meta name="googlebot" content="">
	&lt;meta name="geo.region" content="">
	&lt;meta name="geo.placement" content="">
	&lt;meta name="geo.position" content="">
	&lt;meta name="ICBM" content="">
&lt;/head>
&lt;body>

&lt;/body>
&lt;/html>

</pre>

->Generator meta tag is used for which tool you used to make this website,webpage</div>
@stop