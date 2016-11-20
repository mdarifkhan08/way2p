<div class="panel panel-primary">
<div class="panel panel-heading">
@GeneratedValue(strategy=GenerationType.AUTO) or @GeneratedValue
</div>
<div class="panel panel-body">
@GeneratedValue have default strategy AUTO<br/>
@GeneratedValue annotation used just after @Id Annotation
</div>
</div>



<div class="panel panel-primary">
<div class="panel panel-heading">
@GeneratedValue(strategy=GenerationType.IDENTITY)
</div>
<div class="panel panel-body">
IDENTITY is not supported by oracle database<br/>
IDENTITY is supported by mysql database.
</div>
</div>



<div class="panel panel-primary">
<div class="panel panel-heading">
@GeneratedValue(strategy=GenerationType.SEQUENCE)
</div>
<div class="panel panel-body">
SEQUENCE is not supported by mysql database<br/>
SEQUENCE is supported by oracle database.
</div>
</div>