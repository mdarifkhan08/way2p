<div class="alert alert-success">
	1.Opencart theme deal with views(frontend part),static files that is used by the views.<br/>
    2.we can keep multiple theme inside catalog/view/theme directory.<br/>
    3. default directory is a default theme for opencart, that opencart people provide to us.<br/>
    4.views file present underneath of template folder.<br/>
    5.extension of view file is .tpl, it is called template system of opencart.<br/>
    6.inside the template folder to many directory available but i will talk about account and common directory for concept.
</div>	



<h3>View - catalog/view/theme/default/template/common/header.tpl</h3>
<div class="alert alert-success">
	1. views file under the catalog directory is used for(user panel or we can say viewers panel).<br/>
	2. views file under the admin directory is used for(admin panel) and the directory structure should be like that (admin/view/template/common/header.tpl).<br/><br/>
	3. as the name indicate header.tpl so that it is a header part for an application.<br/>
	4. complete page is combination of header, footer and content similarly we can devide in so many fragement of .tpl file.
	<br/>5. we can use this header.tpl file as a variable to any other views.
</div>


<h3>View - catalog/view/theme/default/template/account/login.tpl</h3>
<div class="alert alert-success">
	login.tpl can use header.tpl as a variable
</div>
