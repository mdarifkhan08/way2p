<!DOCTYPE HTML>
<html>
   <head>
      <title><?php echo $title;?></title>
      <meta name="google-site-verification" content="AIzaSyB5Zupfv1GbvriEdE-bCFk-EhBNty4hc_Y" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="robots" content="index, follow">
      <meta name="keywords" content="<?php echo $keywords ?>" />
      <meta name="description"  content="<?php echo $description ?>" />
      <link href='<?php echo base_url();?>static/css/bootstrap.css'' rel='stylesheet' type='text/css' />
      <!-- Custom Theme files -->
      <link href="<?php echo base_url();?>static/css/style.css" rel='stylesheet' type='text/css' />
      
      <script src="<?php echo base_url();?>static/js/jquery-1.11.1.min.js"></script>
      <script src="<?php echo base_url();?>static/js/bootstrap.min.js"></script>
      <!-- start menu -->
      <link href="<?php echo base_url();?>static/css/megamenu.css" rel="stylesheet" type="text/css"
         media="all" />
      <script type="text/javascript" src="<?php echo base_url();?>static/js/megamenu.js"></script>
      <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
      <script src="<?php echo base_url();?>static/js/menu_jquery.js"></script>
      <!--web-fonts-->
      <link
         href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,700'
         rel='stylesheet' type='text/css'>
      <link href='//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700'
         rel='stylesheet' type='text/css'>
      <!--//web-fonts-->
      <script src="<?php echo base_url();?>static/js/scripts.js" type="text/javascript"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
         	$(".scroll").click(function(event){		
         		event.preventDefault();
         		$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
         	});
         });
      </script>
      <script type="text/javascript" src="<?php echo base_url();?>static/js/prettify.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>static/js/run_prettify.js"></script>

   </head>
   <body>
      <!-- Google Tag Manager -->
      <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TZXQ7F"
         height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
         new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
         j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
         '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-TZXQ7F');
      </script>
      <!-- End Google Tag Manager -->
      <nav class="navbar navbar-inverse">
         <div class="container">
            <div class="navbar-header">
               <!-- Collapsed Hamburger -->
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
               <span class="sr-only">Toggle Navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <!-- Branding Image -->
               <a class="navbar-brand" href="<?php echo base_url();?>">
               Way2Programming.com
               </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
               <!-- Left Side Of Navbar -->
               <ul class="nav navbar-nav">
                  <li><a href="#"></a></li>
               </ul>
               <!-- Right Side Of Navbar -->
               <ul class="nav navbar-nav navbar-right">
                  <!-- Authentication Links -->
                  <li><a href="<?php echo base_url();?>contact">Contact Us</a></li>
                  <!-- <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      <span class="caret"></span>
                     </a>
                     <ul class="dropdown-menu" role="menu">
                        <li><a href=""><i class="fa fa-btn fa-sign-out"></i></a></li>
                     </ul>
                  </li> -->
               </ul>
            </div>
         </div>
      </nav>
      <div class="header_bg">
      <div class="container-fluid">
         <div class="header">
            <div class="head-t">
               <!--  <div class="logo" >
                  <a href="index.php"><h1>Way2Programming<span>.com</span></h1> </a>
                  </div> -->
               <div class="header_right">
                  <div class="cart box_1">
                     <div class="clearfix"> </div>
                  </div>
               </div>
               <div class="clearfix"></div>
            </div>
            <!--start-header-menu-->
            <ul class="megamenu skyblue">
               <li class="grid"><a class="color1" href="<?php echo base_url();?>">Home</a></li>
               <li class="grid">
                  <a class="color2" href="#">JAVA</a>
                  <div class="megapanel">
                     <div class="row">
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>Hibernate</h4>
                              <ul>
                                 <li><a href="hibernate-introduction">Hibernate Introduction - 1</a></li>
                                 <li><a href="introduction-hibernate">Hibernate Introduction - 2</a></li>
                                 <li><a href="basic-application-hibernate">Hibernate Basic App with XML</a></li>
                                 <li><a href="hibernate-basic-application-with-annotation">Hibernate Basic App with Annotation</a></li>
                                 <li><a href="how-to-work-with-hibernate-query-language">Hibernate HQL</a></li>
                                 <li><a href="hibernate-states-of-objects">Hibernate States Of Object</a></li>
                                 <li><a href="hibernate-auto-ddl-operations">Hibernate Auto DDL Operation</a></li>
                                 <li><a href="hibernate-curd-operations">Curd Operations In Hibernate</a></li>
                                 <li><a href="hibernate-primary-key-auto-generators-part1">Hibernate Primary Key Auto Key Generators</a></li>
                                 <li><a href="hibernate-select-query">Hibernate Select Query</a></li>
                                 <li><a href="hibernate-delete-or-update-query">Hibernate Delete or Update Data</a></li>
                                 <li><a href="difference-between-get-and-load-in-hibernate">Difference between get() and load() method</a></li>
                                 <li><a href="one-to-one-mapping-using-annotation">One To One Mapping Using Annotation</a></li>
                                 <li><a href="mapping-or-relationship-in-hibernate">Mapping or relationship in hibernate</a></li>
                                 <li><a href="eager-loading-or-fetch-and-lazy-loading-or-fetch">Eager Loading/Fetch And Lazy Loading/Fetch</a></li>
                                 <li><a href="hbm2ddl.auto">hbm2ddl.auto operations</a></li>
                                 <li><a href="basic-annotations-in-hibernate">basic annotations in hibernate</a></li>
                                 <li><a href="primary-key-auto-generator-part2">Primary key auto generator part 2</a></li>
                                 <li><a href="one-to-one-mapping-or-relationship">One To One Mapping Or Relationship</a></li>
                                 <li><a href="many-to-one-mapping">Many To One Mapping </a></li>
                                 <li><a href="many-to-one-and-one-to-many-bidirection-mapping">Many To One and One To Many Bidirection Mapping</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>Struts</h4>
                              <ul>
                                 <li><a href="struts-introduction">Introduction</a></li>
                                 <li><a href="struts-first-application">First Application</a></li>
                                 <li><a href="struts-login-application">Login Application</a></li>
                                 <hr/>
                                 <h4>Core Java</h4>
                                 <hr/>
                                  <li><a href="prime-number-java-program">Prime Number Java Program</a></li>
                                  <li><a href="increment-decrement-operator-example">Increment Decrement Operator</a></li>
                                  <li><a href="sum-of-digits-java-program">Sum Of Digits Program</a></li>
                                  <li><a href="convert-binary-number-to-decimal">Convert binary number to decimal</a></li>
                                  <li><a href="even-and-odd-number-application">Even and Odd Number Program</a></li>
                                  <li><a href="private-constructor">Private Constructor In Java</a></li>
                                  <li><a href="singleton-design-pattern">Singleton Design Pattern</a></li>
                                  <li><a href="tightly-coupled-and-loosely-coupled-code">Tightly and loosely coupled code</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>JSF</h4>
                              <ul>
                                 <li><a href="basic-application-in-jsf">Basic Application In Jsf</a></li>
                                 <li><a href="jsf-application-with-basic-tags">Jsf Application with basic tags</a></li>
                                 <li><a href="jsf-settings">Jsf setting</a></li>
                                 <li><a href="jsf-tag-information">jsf tag information</a></li>
                                 <li><a href="navigation-in-jsf">navigation in jsf 1</a></li>
                                 <li><a href="navigation-in-jsf-2">navigation in jsf 2</a></li>
                                 <li><a href="application-in-jsf-2">jsf application</a></li>
                                 
                              </ul>
                           </div>
                        </div>
                       
                        
                     </div>
                     <div class="row">
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>Spring</h4>
                              <ul>
                                 <li><a href="spring-basic-application-with-configuration">Spring Basic Application</a></li>
                                 <li><a href="spring-mvc-file-download">Spring File Download</a></li>
                                 <li><a href="spring-mvc-file-upload">Spring MVC File Upload</a></li>
                                 <li><a href="spring-hibernate-configuration">Spring Hibernate Configuration</a></li>
                                 <li><a href="spring-import-xml-file">Spring Import XML File</a></li>
                                 <li><a href="spring-mvc-internationalization">Spring MVC Internatonalization</a></li>
                                 <li><a href="spring-basic-problems-and-solutions">Spring Basic Problems and Solutions of them</a></li>
                                 <li><a href="spring-read-properties-file">Spring read properties file 1</a></li>
                                 <li><a href="spring-read-properties-file_2">Spring read properties file 2</a></li>
                                 <li><a href="spring-mvc-resource-manage">Spring resources manage</a></li>
                                 <li><a href="spring-tag-libraries">Spring Tag libraries</a></li>
                                 <li><a href="spring-welcome-file">Spring welcome file</a></li>
                                
                                 <hr/>
                                 <h3>Spring Work Part2</h3>
                                 <hr/>
                                
                                 
                                
                                 <li><a href="spring-data-jpa-hibernate-application">Spring Data With Curd Repository</a></li>
                                 <li><a href="hibernate-transaction-manager-in-spring-and-hibernate"></a></li>
                                 <hr/>
                                  <h3>New Work</h3>
                                 <hr/>
                                 <li><a href="spring-container-details">Spring Container With out web.xml</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col2">
                            <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>Spring Hibernate</h4>
                              <ul>
                                 <li><a href="spring-hibernate-application-1">Spring Hibernate App1</a></li>
                                 <li><a href="spring-hibernate-application-2">Spring Hibernate App2</a></li>
                                 <li><a href="spring-hibernate-application-3">Spring Hibernate App3</a></li>
                                 <li><a href="spring-hibernate-application-4">Spring Hibernate App4</a></li>
                                 <li><a href="one-to-one-mapping-with-spring-mvc-and-hibernate-1">One to one mapping with spring hibernate App1</a></li>
                                 <li><a href="one-to-one-mapping-with-spring-mvc-and-hibernate-2">One to one mapping with spring hibernate App2</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>REST</h4>
                              <ul>
                                 <li><a href="restful-web-service-basic-application">Restful webservice basic application</a></li>
                                 <li><a href="consuming-restful-webservice-with-angularjs">Consuming restful webservice with angularjs</a></li>
                                 <li><a href="consuming-restful-webservice-with-spring-hibernate">Consuming restful webservice with spring hibernate</a></li>
                                 <hr/><h4>Maven Dependency</h4><hr/>
                                 <li><a href="maven-hibernate-dependency">Hibernate Dependency</a></li>
                                 <li><a href="maven-jaxrs-dependency">JaxRS dependency</a></li>
                                 <li><a href="maven-junit-dependency">Junit Dependency</a></li>
                                 <li><a href="maven-servlet-jsp-jstl-dependency">Servlet-JSP-JSTL</a></li>
                                 <li><a href="maven-spring-hibernate-dependency">Spring Hibernate </a></li>
                                 <li><a href="maven-spring-mvc-dependency">Spring MVC</a></li>
                                 <li><a href="maven-struts-dependency">STRUTS</a></li>
                                 <li><a href="maven-google-gson-dependency">GOOGLE gson</a></li>
                                 <li><a href="maven-mysql-connector-dependency">mysql connector</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </li>
               <li>
                  <a class="color4" href="#">PHP</a>
                  <div class="megapanel">
                     <div class="row">
                        <!-- <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                           	<h4>CORE PHP</h4>
                           	<ul>
                           		<li><a href="array-in-php">Examples of Arrays</a></li>
                           		<li><a href="pdo-in-php">PDO Configuration</a></li>
                           		<li><a href="live-search-with-php"></a></li>
                           		<li><a href="dynamic-image-slider-in-php"></a></li>
                           		<li><a href=""></a></li>
                           	</ul>	
                           	<h4>Laravel Advanced</h4>
                           	<ul>
                           		<li><a href="authentication-system-in-laravel">Authentication System</a></li>
                           		<li><a href=""></a></li>
                           		<li><a href=""></a></li>
                           		<li><a href=""></a></li>
                           		<li><a href=""></a></li>
                           	</ul>	
                           </div>							
                           </div> -->
                        <!-- <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                           	<h4>Yii Framework</h4>
                           	<ul>
                           		<li><a href="download-configure-yii">Download and configure yii framework</a></li>
                           		<li><a href="add-field-in-sign-up-form-yii">Add more fields in the sign up form</a></li>
                           		<li><a href="create-our-template-system-in-yii2">create our template system in yii2</a></li>
                           		<li><a href="htaccess-configuration-for-yii">htaccess configuration for yii</a></li>
                           	</ul>	
                           </div>							
                           </div> -->
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>Laravel</h4>
                              <ul >
                                 <li><a href="htaccess-file-for-production">.htaccess file for production and development</a></li>
                                 <li><a href="static-file-in-laravel">Static File In Laravel</a></li>
                                 <li><a href="template-system-in-laravel">template system in laravel</a></li>
                                 <li><a href="control-view-using-controller-in-laravel">control view using controller</a></li>
                                 <li><a href="configure-database-in-laravel">configure database in laravel</a></li>
                                 <li><a href="working-with-migration-in-laravel">Laravel Migration</a></li>
                                 <li><a href="insert-data-into-database-using-laravel">Insert Data Into Database Using Laravel</a></li>
                                 <li><a href="settings-of-html-and-forms-facades">Make Settings of form and html facades</a></li>
                                 <li><a href="mvc-and-student-registration-in-php">Student Registration with Laravel MVC</a></li>
                                 <li><a href="how-to-use-core-php-in-laravel">Use Core Php In Laravel</a></li>
                                 <li><a href="complete-mvc-in-laravel">Complete MVC Operations in Laravel</a></li>
                                 <li><a href="small-application-in-laravel">Small Application In Laravel</a></li>
                                 <li><a href="facebook-social-login">Social Login Facebook</a></li>
                                 <li><a href="authentication-system-in-laravel">Authentication System In Laravel</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>Opencart</h4>
                              <ul>
                                 <li><a href="opencart-installation-in-godaddy-shared-hosting">Opencart Installation In Go daddy shared hosting</a></li>
                                 <li><a href="opencart-validation-with-mvc">Opencart Validation with MVC</a></li>
                                 <li><a href="opencart-template-system-details">Opencart template system</a></li>
                                 <li><a href="create-view-and-control-by-controller">Create and control view using controller</a></li>
                                 <li><a href="load-static-file-from-controller-to-view-in-opencart">Load static file from controller to view</a></li>
                                 <li><a href="insert-data-using-custom-view-in-opencart">Insert data in opencart</a></li>
                                 <li><a href="create-mvc-inside-your-theme-using-opencart">MVC part2 in opencart</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>Codeigniter 3</h4>
                              <ul >
                                 <li><a href="codeigniter-seo-friendly-url">codeigniter seo friendly url</a></li>
                                 <li><a href="insert-data-in-database-using-codeigniter">Insert and Select data from database</a></li>
                                 <li><a href="codeigniter-login-logout-system-or-user-panel">codeigniter login logout system or user panel</a></li>
                                 <li><a href="i18n-in-codeigniter">i18n in codeigniter</a></li>
                                 <li><a href="insert-and-select-operation-in-codeigniter">insert and select operation in codeigniter</a></li>
                                 <li><a href="pagination-in-codeigniter3">Pagination In Codeigniter</a></li>
                                 <li><a href="htaccess-file-for-codeigniter-and-hostinger">.htaccess file for hostinger</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col2">
                           <!-- <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>CODEIGNITER</h4>
                              <ul>
                              	<li><a href="codeigniter-basics">Introduction</a></li>
                              	<li><a href="codeigniter-controller">Controller Example-1</a></li>
                              	<li><a href="codeigniter-welcome-page">Welcome page</a></li>
                              	<li><a href="codeigniter-live-server-settings">Live Server Settings</a></li>
                              </ul>	
                              </div> -->							
                        </div>
                        <div class="col2">
                           <!-- <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>Opencart</h4>
                              <ul>
                              	<li><a href="opencart-template-system-details">Opencart Template System</a></li>
                              	<li><a href="create-view-and-control-by-controller">Create view and control view by controller</a></li>
                              	<li><a href="load-static-file-from-controller-to-view-in-opencart">Load Static File In Opencart</a></li>
                              	<li><a href="opencart-validation-with-mvc" target="_blank">opencart-validation-with-mvc</a><br/></li>
                              </ul>	
                              </div>	 -->
                        </div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                     </div>
                  </div>
               </li>
               <li>
                  <a class="color5" href="#">Django</a>
                  <div class="megapanel">
                     <div class="row">
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>Django Setup And Work With Admin Area</h4>
                              <ul>
                                 <li><a href="install-django-project-in-ubuntu-operating-system">Setup for django project</a></li>
                                 <li><a href="django-migrations">Migrations</a></li>
                                 <li><a href="create-super-user-in-django">Create Super User(Admin)</a></li>
                                 <li><a href="apps-in-django">apps in django</a></li>
                                 <li><a href="setup_for_setting_py">prepare settings.py for views and models</a></li>
                                 <li><a href="working-with-views-and-urls-in-django">working with views.py,urls.py and templates</a></li>
                                 <li><a href="models-in-django">Models In Django</a></li>
                                 <li><a href="register-model-inside-admin">Register Model Inside admin.py</a></li>
                                 <li><a href="forms-in-django">Forms In Django</a></li>
                                 <li><a href="register-model-with-form">Register Model With Form</a></li>
                                 <li><a href="custom-validation-on-form">Custom Validation On Form</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>Django Work With View</h4>
                              <ul>
                                 <li><a href="using-context-pass-the-variable-to-view">Pass the variable to view using context</a></li>
                                 <li><a href="sending-form-to-view">Attach Form To View And Send Form Data</a></li>
                                 <li><a href="sending-mail-in-django-using-gmail-smtp">Send Mail Using Gmail SMTP Service</a></li>
                                 <li><a href="static-files-in-django">Static Files In Django</a></li>
                                 <li><a href="how-to-include-template-and-uses-of-block">Include Template And Use Block</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>Django Applications</h4>
                              <ul>
                                 <li><a href="sending-mail-in-django-using-gmail-smtp">Django App Sending Mail Using Gmail SMTP</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col2">
                        </div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                     </div>
                  </div>
               </li>
               <li>
                  <a class="color5" href="#">Miscellaneous</a>
                  <div class="megapanel">
                     <div class="row">
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>Javascript</h4>
                              <ul>
                                 <li><a href="validation-on-check-box">Validation On Check Box</a></li>
                                 <li><a href="control-checkbox-using-javascript">Control Checkbox Using Javascript</a></li>
                                 <li><a href="location-object-in-javascript">Location Object In Javascript</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>Jquery</h4>
                              <ul>
                                 <li><a href="submit-form-on-select-using-jquery">Submit Form On Select (Form Element)</a></li>
                                 <li><a href="jquery-validation">Jquery Validation</a></li>
                                 <li><a href="jquery-date-picker-with-different-format">jquery date picker with different format</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>Bootstrap</h4>
                              <ul>
                                 <li><a href="bootstrap-navigation-menu">Bootstrap Nav Menu</a></li>
                                 <li><a href="bootstrap-left-navigation-menu-_1">Left Bootstrap Nav Menu</a></li>
                                 <li><a href="bootstrap-left-navigation-menu-_2">Left Nav Menu 2</a></li>
                                 <li><a href="bootstrap-model-on-page-load">Bootstrap Model On Page Load</a></li>
                                 <li><a href="bootstrap-grid-system">Bootstrap Grid System</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>AJAX</h4>
                              <ul>
                                 <li><a href="send-form-data-using-ajax-and-post-request">Post Request With Ajax</a></li>
                                 <li><a href="send-get-request-with-anchor-tag-and-ajax">Get Request With Ajax</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>Nodejs</h4>
                              <ul>
                                 <li><a href="node-js-basic-application">Nodejs Basic Application</a></li>
                                 <li><a href="node-js-mean-application">Nodejs Mean Application</a></li>
                                 <li><a href="node-js-chat-application">Nodejs Chat Application</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                     </div>
                  </div>
               </li>
               <li>
                  <a class="color5" href="#">HTML</a>
                  <div class="megapanel">
                     <div class="row">
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>HTML</h4>
                              <ul>
                                 <li><a href="text-area-with-tools-to-send-styling-mail">Text Area With Tools To Send Styling Mail</a></li>
                                 <li><a href="slide-div-over-the-div-vertically" target="_blank">slide-div-over-the-div-vertically</a></li>
                                 <li><a href="display-inline-practice-with-unorder-list">Display Inline Practice With Unorder List</a></li>
                                 <li><a href="how-to-do-image-responsive-using-css">way of make image responsive</a></li>
                                 <li><a href="basic-real-time-calculator-using-html-table-and-javascript">Basic Real Time Calculator using Html table and javascript</a></li>
                                 <li><a href="basic-footer-with-out-bootstrap-for-beginners">Basic Footer Without Bootstrap For Beginners</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col2">
                        </div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                     </div>
                  </div>
               </li>
               <li>
                  <a class="color5" href="#">Android</a>
                  <div class="megapanel">
                     <div class="row">
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>Android</h4>
                              <ul>
                                 <li><a href="adding-two-number-basic-application-in-android">Add two number | Basic App</a></li>
                                 <li><a href="using-Toast-to-view-the-password-field">Using Toast To View The Password Field Data | Basic App</a></li>
                                 <li><a href="get-response-of-checkbox-basic-behavior">Get Response Of Checkbox | Basic behavior</a></li>
                                 <li><a href="get-response-of-radio-button-basic-behavior">Get Response Of Radio Button | Basic behavior</a></li>
                                 <li><a href="get-response-of-rating-system-basic-behavior">Get Response Of Rating System | Basic behavior</a></li>
                                 <li><a href="get-response-of-alert-dialog-basic-behavior">Get Response Of Alert Dialog | Basic behavior</a></li>
                                 <li><a href="login-system-basic-app-in-android">Login System | Basic App</a></li>
                                 <li><a href="android-login-app-with-mysql-database">Adroid Login App with mysql database</a></li>
                                 <li><a href="android-register-app-with-mysql-database">Adroid Register App with mysql database</a></li>
                                 <li><a href="android-login-register-and-get-json-response">Android Login-Register and get Json Using Mysql Db</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col2">
                        </div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                     </div>
                  </div>
               </li>
               <li>
                  <a class="color5" href="#">Angularjs</a>
                  <div class="megapanel">
                     <div class="row">
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>Angular2</h4>
                              <ul>
                                 <li><a href="angular2-setup">Angular2 Setup</a></li>
                                 <li><a href="angular2-first-app-sending-simple-json-object-to-view">Angular2 First App Binding Json Object To View</a></li>
                                 <li><a href="angular2-binding-multiple-json-object-to-view">Angular2 Second App Binding Multiple Json Object To View</a></li>
                                 <li><a href="angular2-onclick-name-get-the-full-details-of-person">Angular2 Onclick Name Get Full Details Of Person</a></li>
                                 <li><a href="angular2-data-sharing-between-two-component">Angular2 Data Sharing Between Two Component</a></li>
                                 <li><a href="angular2-data-sharing-between-three-component">Angular2 getting the output using three component communication</a></li>
                                 <li><a href="angular2-service">Angular2 Service</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>Angularjs</h4>
                              <ul>
                                 <li><a href="angularjs-basic-application-part1">Angularjs Basic Apps Part1</a></li>
                                 <li><a href="complete-angularjs-learn-and-understand">Angularjs Learn And Understand</a></li>
                                 <li><a href="how-to-work-with-angularjs-http-service-find-angularjs-service-over-http">Http Services In Angularjs</a></li>
                                 <li><a href="how-to-work-with-route-in-angularjs">Route Config In Angularjs</a></li>
                                 <li><a href="weather-forecast-app-in-angularjs">Weather Forecast App In Angularjs</a></li>
                                 <li><a href="how-to-work-with-resource-service-in-angularjs">Resources Service In Angularjs</a></li>
                                 <li><a href="using-resource-service-get-data">Using resources get data from db</a></li>
                                 <li><a href="using-resource-service-get-data-and-post-data">using resources get and post data in db</a></li>
                                 <li><a href="using-resource-service-get-data-and-post-data-and-put-data">using resource service get,post and put data in db</a></li>
                                 <li><a href="get-data-from-checkbox-using-angularjs">Control Checkbox Using Angularjs</a></li>
                                 <li><a href="validation-in-angularjs">Validation In Angularjs</a></li>
                                 <li><a href="basic-curd-operation-with-php-slim-framework">Basic Curd Operations with Php Slim REST Framework</a></li>
                                 <li><a href="filter-service-in-angularjs">Filter Service Of Angularjs</a></li>
                                 <li><a href="angularjs-interpolation">Angularjs Interpolation</a></li>
                                 <li><a href="angularjs-ng-click">ng-click</a></li>
                                 <li><a href="angularjs-ng-cloak">ng-cloak</a></li>
                                 <li><a href="angularjs-ng-hide">ng-hide</a></li>
                                 <li><a href="angularjs-ng-if">ng-if</a></li>
                                 <li><a href="angularjs-ng-keyup">ng-keyup</a></li>
                                 <li><a href="angularjs-ng-repeat">ng-repeat</a></li>
                                 <li><a href="angularjs-ng-show">ng-show</a></li>
                                 <li><a href="push-data-in-array">Push Data In Array</a></li>
                                 <li><a href="resource-service-of-angularjs">Resource Service Of Angular</a></li>
                                 <li><a href="route-config-in-angularjs">Route Config In Angularjs</a></li>
                              </ul>
                        </div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                     </div>
                  </div>
                  </div>
               </li>
               <li>
                  <a class="color5" href="#">Spring Mvc</a>
                  <div class="megapanel">
                     <div class="row">
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4>Spring Mvc</h4>
                              <ul>
                                 <li><a href="spring-boot-with-spring-mvc-basic-app">Spring boot with spring mvc first app</a></li>
                                 <li><a href="spring-boot-with-jpa2-and-hibernate-basic-app">Spring Boot + Spring MVC + Hibernate + JPA2 Basic App</li>
                                 <li><a href="spring-core-introduction">Spring Core Introduction</a></li>
                                 <li><a href="dependency-injection-using-autowire-and-component-annotation">Example on Dependency Injection</a></li>
                                 <li><a href="basic-annotations-of-spring">Basic Annotations Of Spring</a></li>
                                 <li><a href="dependency-injection-in-spring">Dependency Injection In Spring</a></li>
                                 <li><a href="constructor-and-setter-dependency-injection-example">Best Example on setter and constructor injection</a></li>
                                 <li><a href="constructor-and-setter-dependency-injection-example"></a></li>
                                 <li><a href="difference-between-page-scope-and-request-scope">Difference between page and request scope</a></li>
                                 <li><a href="scope-in-jsp">Scope in jsp</a></li>
                                 <li><a href="http-session-in-spring">Use of http session in spring</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col2">
                           <div class="h_nav" style=" height:200px; overflow: auto;">
                              <h4></h4>
                              <ul>
                                 <li><a href=""></a></li>
                              </ul>
                        </div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                     </div>
                  </div>
                  </div>
               </li>
            </ul>
            <br />
            <div class="container-fluid">
               <div class="col-md-9">
                  <br/><br/>
                  <h1><?php echo $heading?></h1>
                  <hr />
