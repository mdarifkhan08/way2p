<br/><br/>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
	<h3>api/index.php</h3><hr/>
    <pre class="prettyprint">
&lt;?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

&dollar;app = new Slim\App();

&dollar;app->post('/posts/customer',function(Request &dollar;request, Response &dollar;response)&#123;
    require '../dbconfig.php';
    &dollar;data = &dollar;request->getParsedBody();
    &dollar;receive_data = [];
    &dollar;receive_data['name'] = filter_var(&dollar;data['name'], FILTER_SANITIZE_STRING);
    &dollar;receive_data['password'] = filter_var(&dollar;data['password'], FILTER_SANITIZE_STRING);
    &dollar;receive_data['plan_type'] = filter_var(&dollar;data['plan_type'], FILTER_SANITIZE_STRING);
    &dollar;receive_data['subscribe_date'] = filter_var(&dollar;data['subscribe_date'], FILTER_SANITIZE_STRING);
    &dollar;receive_data['website'] = filter_var(&dollar;data['website'], FILTER_SANITIZE_STRING);
    &dollar;stmt=&dollar;DB_CON->prepare('insert into customers(customer_name,customer_password,plan_type,subscribe_date,website_name,date_added,date_modified) values(:customer_name,:customer_password,:plan_type,:subscribe_date,:website_name,:date_added,:date_modified)');
    &dollar;stmt->bindParam(':customer_name',&dollar;receive_data['name']);
    &dollar;stmt->bindParam(':customer_password',&dollar;receive_data['password']);
    &dollar;stmt->bindParam(':plan_type',&dollar;receive_data['plan_type']);
    &dollar;stmt->bindParam(':subscribe_date',&dollar;receive_data['subscribe_date']);
    &dollar;stmt->bindParam(':website_name',&dollar;receive_data['website']);
    &dollar;stmt->bindParam(':date_added',date('Y-m-d h:i:s'));
    &dollar;stmt->bindParam(':date_modified',date('Y-m-d h:i:s'));
    &dollar;stmt->execute();
});

&dollar;app->get('/get/customer',function(Request &dollar;request, Response &dollar;response)&#123;
    require '../dbconfig.php';
    &dollar;stmt=&dollar;DB_CON->prepare('select *,DATE_ADD(subscribe_date,INTERVAL 30 DAY) as renew_date1,DATE_ADD(subscribe_date,INTERVAL 365 DAY) as renew_date2 from customers');
    &dollar;stmt->execute();
    &dollar;data=&dollar;stmt->fetchAll(PDO::FETCH_ASSOC);
    &dollar;records= json_encode(&dollar;data);
    return &dollar;records;
});

&dollar;app->get('/get/edit/&#123;id}',function(Request &dollar;request, Response &dollar;response)&#123;
    require '../dbconfig.php';
    &dollar;id = &dollar;request->getAttribute('id');
    &dollar;stmt=&dollar;DB_CON->prepare('select * from customers where cid=:cid');
    &dollar;stmt->bindParam(':cid',&dollar;id);
    &dollar;stmt->execute();
    &dollar;data=&dollar;stmt->fetch(PDO::FETCH_ASSOC);
    &dollar;records= json_encode(&dollar;data);
    return &dollar;records;
});



&dollar;app->post('/post/edit/&#123;id}',function(Request &dollar;request, Response &dollar;response)&#123;
    &dollar;data = &dollar;request->getParsedBody();
    &dollar;receive_data = [];
    &dollar;receive_data['name'] = filter_var(&dollar;data['name'], FILTER_SANITIZE_STRING);
    &dollar;receive_data['password'] = filter_var(&dollar;data['password'], FILTER_SANITIZE_STRING);
    &dollar;name=trim(&dollar;receive_data['name']);
    &dollar;password=trim(&dollar;receive_data['password']);
    require '../dbconfig.php';
    &dollar;id = &dollar;request->getAttribute('id');
    &dollar;stmt1=&dollar;DB_CON->prepare('UPDATE customers SET customer_name=:cname,customer_password=:cpass where cid=:cid');
    &dollar;stmt1->bindParam(':cname',&dollar;name);
    &dollar;stmt1->bindParam(':cpass',&dollar;password);
    &dollar;stmt1->bindParam(':cid',&dollar;id);
    &dollar;stmt1->execute();
    &dollar;stmt=&dollar;DB_CON->prepare('select * from customers where cid=:cid');
    &dollar;stmt->bindParam(':cid',&dollar;id);
    &dollar;stmt->execute();
    &dollar;data=&dollar;stmt->fetch(PDO::FETCH_ASSOC);
    &dollar;records= json_encode(&dollar;data);
    return &dollar;records;
});



&dollar;app->get('/delete/&#123;id}',function(Request &dollar;request, Response &dollar;response)&#123;
    require '../dbconfig.php';
    &dollar;id = &dollar;request->getAttribute('id');
    &dollar;stmt=&dollar;DB_CON->prepare('DELETE FROM customers WHERE cid=:cid');
    &dollar;stmt->bindParam(':cid',&dollar;id);
    &dollar;stmt->execute();
    &dollar;stmt1=&dollar;DB_CON->prepare('select * from customers');
    &dollar;stmt1->execute();
    &dollar;data=&dollar;stmt1->fetchAll(PDO::FETCH_ASSOC);
    &dollar;records= json_encode(&dollar;data);
    return &dollar;records;
});



&dollar;app->get('/add/plan/&#123;id}',function(Request &dollar;request, Response &dollar;response)&#123;
    require '../dbconfig.php';
    &dollar;id = &dollar;request->getAttribute('id');
    &dollar;stmt=&dollar;DB_CON->prepare('DELETE FROM customers WHERE cid=:cid');
    &dollar;stmt->bindParam(':cid',&dollar;id);
    &dollar;stmt->execute();
    &dollar;stmt1=&dollar;DB_CON->prepare('select * from customers');
    &dollar;stmt1->execute();
    &dollar;data=&dollar;stmt1->fetchAll(PDO::FETCH_ASSOC);
    &dollar;records= json_encode(&dollar;data);
    return &dollar;records;
});

&dollar;app->run();

    </pre>


    <h3>customers.php</h3><hr/>
    <pre class="prettyprint">
&lt;?php
session_start();
require_once('dbconfig.php');
require_once('class.admin.php');
&dollar;admin=new Admin(&dollar;DB_CON);
if(! &dollar;admin->is_loggedin())&#123;
   header('Location: customer-login.php');
}
&dollar;admin_id = &dollar;_SESSION ['admin_session'];
&dollar;stmt = &dollar;DB_CON->prepare ("SELECT * FROM admin WHERE id=:admin_id");
&dollar;stmt->execute ( array (":admin_id" => &dollar;admin_id ));
&dollar;admin_row1 = &dollar;stmt->fetch (PDO::FETCH_ASSOC);
?>
&lt;!DOCTYPE html>
&lt;html ng-app="myApp">
&lt;head>
&lt;title>Customer Home&lt;/title>
&lt;meta charset="utf-8">
&lt;link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
&lt;link rel="stylesheet" type="text/css" href="css/style.css">
&lt;link rel="stylesheet" type="text/css" href="css/extra_work.css">
&lt;script type="text/javascript" src="js/jquery.min.js">&lt;/script>
&lt;!-- Latest compiled and minified JavaScript -->
&lt;script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">&lt;/script>
&lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
&lt;link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
&lt;/head>
&lt;body>
&lt;?php include_once 'admin-header.php';?>
&lt;style type="text/css">
.mynav li&#123;
	display: inline-block;
	width:150px;
	background-color:#8998B5;
	color:white;
}	
.mynav li a&#123;
	color:white;
	text-decoration: none;
	display: inline-block;
}
&lt;/style>
&lt;br/>&lt;br/>&lt;br/>&lt;br/>
&lt;div align="center">
&lt;ul class="mynav">
	&lt;li>&lt;a href="#/add">ADD&lt;/a>&lt;/li>
	&lt;li>&lt;a href="#/get">GET&lt;/a>&lt;/li>
&lt;/ul>
&lt;/div>
&lt;div class="container">
   &lt;div class="col-sm-2">&lt;/div>
   &lt;div ng-view>&lt;/div>
   &lt;div class="col-sm-2">&lt;/div>
&lt;/div>
&lt;div class="footer">
		&lt;div class="container">
			&lt;div class="footer-top">
				&lt;div class="footer-bottom">
					&lt;div class="copyright">
						&lt;p>
							Copyright &copy 2015 AAGS Techno Pvt. Ltd. | Designed & Developed by &lt;a
								href="http://aagstechno.com/">AAGS Techno Pvt. Ltd.&lt;/a>
						&lt;/p>
					&lt;/div>
					&lt;div class="clearfix">&lt;/div>
				&lt;/div>
			&lt;/div>
		&lt;/div>
&lt;/div>
&lt;script src="js/jquery-ui.js">&lt;/script>
&lt;script>
  &dollar;(function() &#123;
    &dollar;( "#datepicker-1" ).datepicker(&#123;dateFormat: 'yy-mm-dd',
      constrainInput: false});
  });
&lt;/script>
&lt;script type="text/javascript" src="js/angular.min.js">&lt;/script>
&lt;script type="text/javascript" src="js/angular-route.min.js">&lt;/script>
&lt;script type="text/javascript" src="js/angular-resource.min.js">&lt;/script>
&lt;script type="text/javascript" src="js/angular-sanitize.min.js">&lt;/script>
&lt;script type="text/javascript">
	var app=angular.module('myApp',['ngRoute','ngResource','ngSanitize']);
	app.config(['&dollar;routeProvider','&dollar;locationProvider',function(&dollar;routeProvider,&dollar;locationProvider)&#123;
    &dollar;routeProvider
    .when('/add',&#123;
      templateUrl:'customers/add.html',
      controller:'addController'
    })
    .when('/get',&#123;
      templateUrl:'customers/get.html',
      controller:'getController'
    })
    .when('/delete/:id',&#123;
      templateUrl:'customers/delete.html',
      controller:'deleteController'
    })
    .when('/edit/:id',&#123;
      templateUrl:'customers/edit.html',
      controller:'editController'
    });
  }]);
app.controller('addController',['&dollar;scope','&dollar;http','&dollar;sce',function(&dollar;scope,&dollar;http,&dollar;sce)&#123;
	    &dollar;scope.name='';
	    &dollar;scope.password='';

		&dollar;scope.saveData=function()&#123;
			 &dollar;http.post('/api/posts/customer',&#123;name:&dollar;scope.name,password:&dollar;scope.password,plan_type:&dollar;scope.plan_type,subscribe_date:&dollar;scope.subscribe_date,website:&dollar;scope.website})
                  .success(function(result)&#123;
                        &dollar;scope.name='';
	                      &dollar;scope.password='';
	                      &dollar;scope.addSuccessfully='&lt;div class="alert alert-success">Customer Added Successfully!&lt;/div>';
                          if(&dollar;scope.addSuccessfully!=='')&#123;
                              setTimeout(function()&#123; 
                              	&dollar;scope.&dollar;apply(function()&#123;
                              		&dollar;scope.addSuccessfully='';
                              	});
                              }, 3000);
                          }
                  })
                  .error(function(data,status)&#123;
                      console.log(data);
             });
		};
}]);

app.directive('ngConfirmClick', [
        function()&#123;
            return &#123;
                link: function (scope, element, attr) &#123;
                    var msg = attr.ngConfirmClick || "Are you sure?";
                    var clickAction = attr.confirmedClick;
                    element.bind('click',function (event) &#123;
                        if ( window.confirm(msg) ) &#123;
                            scope.&dollar;eval(clickAction)
                        }
                    });
                }
            };
    }])

	app.controller('getController',['&dollar;scope','&dollar;http',function(&dollar;scope,&dollar;http)&#123;
		     &dollar;scope.deleteSuccessfully='';
             &dollar;http.get('/api/get/customer')
                  .success(function(result)&#123;
                          &dollar;scope.customers=result;

                  })
                  .error(function(data,status)&#123;
                      console.log(data);
             });

            &dollar;scope.deleteData=function(a)&#123;
	               &dollar;http.get('/api/delete/'+a)
                  .success(function(result)&#123;
                        &dollar;scope.customers=result;
                        &dollar;scope.deleteSuccessfully='&lt;div class="alert alert-danger">Record Deleted Successfully!&lt;/div>';
                  })
                  .error(function(data,status)&#123;
                   console.log(data);
    });
}
}]);

	app.controller('deleteController',['&dollar;scope','&dollar;http',function(&dollar;scope,&dollar;http)&#123;

}]);

	app.controller('editController',['&dollar;scope','&dollar;http','&dollar;location',function(&dollar;scope,&dollar;http,&dollar;location)&#123;

            &dollar;http.get('/api/get'+&dollar;location.path())
                  .success(function(result)&#123;
                        &dollar;scope.customer=result;
                        &dollar;scope.name=&dollar;scope.customer.customer_name;
                        &dollar;scope.password=&dollar;scope.customer.customer_password;
                  })
                  .error(function(data,status)&#123;
                      console.log(data);
             });

           &dollar;scope.editData=function()&#123;
			 &dollar;http.post('/api/post'+&dollar;location.path(),&#123;name:&dollar;scope.name,password:&dollar;scope.password})
                  .success(function(result)&#123;
                  	      &dollar;scope.customer=result;
                  	      console.log(&dollar;scope.customer);
	                      &dollar;scope.updateSuccessfully='&lt;div class="alert alert-success">Customer Data Update Successfully!&lt;/div>';
                          if(&dollar;scope.updateSuccessfully!=='')&#123;
                              setTimeout(function()&#123; 
                              	&dollar;scope.&dollar;apply(function()&#123;
                              		&dollar;scope.updateSuccessfully='';
                              	});
                              }, 3000);
                          }
                  })
                  .error(function(data,status)&#123;
                      console.log(data);
             });
		};
 
}]);
&lt;/script>
&lt;/body>
&lt;/html>

    </pre>


    <h3>customer/add.html</h3><hr/>
    <pre class="prettyprint">

&lt;div class="col-sm-8">
  &lt;div style="color: #F15F43;text-align:center;">
  &lt;div ng-if="addSuccessfully!==''" ng-bind-html="addSuccessfully">&lt;/div>
  &lt;h1>Add Customers Details&lt;/h1>

  &lt;table class="table table-bordered">
    &lt;tr>&lt;td>&lt;input type="text" name="name" ng-model="name" class="form-control" placeholder="Name" required="required"/>&lt;/td>&lt;/tr>
    &lt;tr>&lt;td>&lt;input type="text" name="password" ng-model="password" class="form-control" placeholder="Password" required="required"/>&lt;/td>&lt;/tr>
    &lt;tr>
    &lt;td>
    &lt;select name="plan_type" class="form-control" ng-model="plan_type">
        &lt;option value="">SELECT PLAN TYPE&lt;/option>
    	&lt;option value="Monthly">Monthly&lt;/option>
    	&lt;option value="Yearly">Yearly&lt;/option>
    &lt;/select>
    &lt;/td>
    &lt;/tr>
    &lt;tr>
    &lt;td>
     &lt;input type="text" name="subscribe_date" ng-model="subscribe_date" id="datepicker-1" class="form-control" placeholder="YYYY-MM-DD" />
    &lt;/td>
    &lt;/tr>
    &lt;tr>
    &lt;td>
     &lt;input type="text" ng-model="website" placeholder="Website Name" class="form-control"/>
    &lt;/td>
    &lt;/tr>
    &lt;tr>&lt;td>&lt;input type="submit" name="submit"  value="CREATE" ng-click="saveData()" class="btn btn-primary"/>&lt;/td>&lt;/tr>
   &lt;/table>
 &lt;/div>
 &lt;/div>
 &lt;script>
  &dollar;(function() &#123;
    &dollar;( "#datepicker-1" ).datepicker(&#123;dateFormat: 'yy-mm-dd',
      constrainInput: false});
  });
&lt;/script>

 
    </pre>


    <h3>customer/get.html</h3><hr/>
    <pre class="prettyprint">
&lt;div class="col-sm-8">
  &lt;div style="color: #F15F43;text-align:center;">
  &lt;h1>Customers Details&lt;/h1>
&lt;div ng-if="deleteSuccessfully!==''" ng-bind-html="deleteSuccessfully">&lt;/div>
  &lt;table class="table table-bordered">
    &lt;tr>&lt;th>Customer Id&lt;/th>&lt;th>Name&lt;/th>&lt;th>Password&lt;/th>&lt;th>Plan Type&lt;/th>&lt;th>Subscribe Date&lt;/th>&lt;th>Renew Date&lt;/th>&lt;th>Website Name&lt;/th>&lt;th>EDIT&lt;/th>&lt;th>DELETE&lt;/th>&lt;/tr>
    &lt;tr ng-repeat="customer in customers">&lt;td>&#123;&#123;customer.cid}}&lt;/td>&lt;td>&#123;&#123;customer.customer_name}}&lt;/td>&lt;td>&#123;&#123;customer.customer_password}}&lt;/td>&lt;td>&#123;&#123;customer.plan_type}}&lt;/td>&lt;td>&#123;&#123;customer.subscribe_date}}&lt;/td>&lt;td>&lt;span ng-if="customer.plan_type=='Monthly'">&#123;&#123;customer.renew_date1}}&lt;/span>&lt;span ng-if="customer.plan_type=='Yearly'">&#123;&#123;customer.renew_date2}}&lt;/span>&lt;/td>&lt;td>&#123;&#123;customer.website_name}}&lt;/td>&lt;td>&lt;a href="#/edit/&#123;&#123;customer.cid}}" class="alert alert-success">EDIT&lt;/a>&lt;/td>&lt;td>&lt;a confirmed-click="deleteData(customer.cid)" ng-confirm-click="Are you sure?" class="alert alert-danger" href="">DELETE&lt;/a>&lt;/td>&lt;/tr>
  &lt;/table>
   &lt;/div>
 &lt;/div> 
    </pre>


    <h3>customer/edit.html</h3><hr/>
    <pre class="prettyprint">
&lt;div class="col-sm-8">
  &lt;div style="color: #F15F43;text-align:center;">
  &lt;h1>Edit Customers Details &lt;/h1>
  &lt;div ng-if="updateSuccessfully!==''" ng-bind-html="updateSuccessfully">&lt;/div>
  &lt;table class="table table-bordered">
    &lt;tr>&lt;td>&lt;input type="text" ng-model="name" class="form-control"  required="required"/>&lt;/td>&lt;/tr>
    &lt;tr>&lt;td>&lt;input type="text" ng-model="password" class="form-control" required="required"/>&lt;/td>&lt;/tr>
    &lt;tr>&lt;td>&lt;input type="submit"  ng-click="editData()" value="EDIT" class="btn btn-primary"/>&lt;/td>&lt;/tr>
   &lt;/table>
 &lt;/div>
 &lt;/div>
    </pre>
</div>
</div>
<script src="js/run_prettify.js" type="text/javascript"></script>


