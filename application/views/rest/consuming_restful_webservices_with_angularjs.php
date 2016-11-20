
	<h3>project structure</h3>

	<img src="<?php echo base_url();?>static/images/ice_screenshot_20151106-190012.png">

<br/><br/>
<h3>Product.java</h3>
<pre class="prettyprint">
	<strong>
package com.aags;

import java.io.Serializable;

import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlRootElement;


@XmlRootElement
public class Product implements Serializable&#123;
	
	
	private String id;
	private String name;
	private double price;
	
	
	public Product()&#123;
		
	}
	
	public Product(String id,String name,double price)&#123;
		super();
		this.id=id;
		this.name=name;
		this.price=price;
	}
	
	@XmlElement
	public String getId()&#123;
		return id;
	}
	
	
	public void setId(String id)&#123;
		this.id=id;
	}
	
	@XmlElement
	public String getName()&#123;
		return name;
	}
	
	
	public void setName(String name)&#123;
		this.name=name;
	}
	
	@XmlElement
	public double getPrice()&#123;
		return price;
	}
	
	
	public void setPrice(double price)&#123;
		this.price=price;
	}
	
	
}

	</strong>
</pre>






	<h3>ApplicationConfig.java</h3>
<pre class="prettyprint">
	<strong>
package ws;

import java.util.HashSet;
import java.util.Set;

import javax.ws.rs.ApplicationPath;
import javax.ws.rs.core.Application;

@ApplicationPath("rest")
public class ApplicationConfig extends Application&#123;
	
	
	public Set&lt;Class&lt;?>> getClasses()&#123;
		 Set&lt;Class&lt;?>> resources =new HashSet&lt;Class&lt;?>>();
		 addRestResourceClasses(resources);
		 return resources;
	}

	
	private void addRestResourceClasses(Set&lt;Class&lt;?>> resources)&#123;
		resources.add(ProductRestful.class);
	}
}

	</strong>
</pre>






	<h3>ProductRestful.java</h3>
<pre class="prettyprint">
	<strong>
package ws;

import java.util.ArrayList;
import java.util.List;

import javax.ws.rs.GET;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

import com.aags.Product;


@Path("/product")
public class ProductRestful &#123;
	
	@GET
	@Path("/findAll")
	@Produces(MediaType.APPLICATION_JSON)
	public List<Product> findAll()&#123;
		List<Product> result=new ArrayList<Product>();
		result.add(new Product("MU0001","XYZ1",100000));
		result.add(new Product("MU0002","XYZ2",10000));
		result.add(new Product("MU0003","XYZ3",1000000));
		return result;
	}

}
	</strong>
</pre>



	<h3>web.xml</h3>
<pre class="prettyprint">
	<strong>
&lt;!DOCTYPE web-app PUBLIC
 "-//Sun Microsystems, Inc.//DTD Web Application 2.3//EN"
 "http://java.sun.com/dtd/web-app_2_3.dtd" >
&lt;web-app>
    &lt;display-name>Archetype Created Web Application&lt;/display-name>

    &lt;servlet>
        &lt;servlet-name>Jersey&lt;/servlet-name>
        &lt;servlet-class>com.sun.jersey.spi.container.servlet.ServletContainer&lt;/servlet-class>

       &lt;!--  &lt;init-param>
            &lt;param-name>com.sun.jersey.config.property.packages&lt;/param-name>
            &lt;param-value>com.ws.ApplicationConfig&lt;/param-value>
        &lt;/init-param> -->

        &lt;init-param> &lt;param-name>javax.ws.rs.Application&lt;/param-name> &lt;param-value>ws.ApplicationConfig&lt;/param-value> 
            &lt;/init-param>
    &lt;/servlet>

    &lt;servlet-mapping>
        &lt;servlet-name>Jersey&lt;/servlet-name>
        &lt;url-pattern>/backend/*&lt;/url-pattern>
    &lt;/servlet-mapping>
    
&lt;/web-app>
	</strong>
</pre>



<h3>Now we can run our webservice application by using url, it will use http get request</h3>
<pre class="prettyprint">
	<strong>
	http://localhost:8080/Restful/rest/product/findAll	
	</strong>
</pre>



	<h3>Now create a angularjs client</h3>
	<img src="images/ice_screenshot_20151106-191110.png"/>
	<br/><br/>

	<h3>index.jsp</h3>
<pre class="prettyprint">
	<strong>
&lt;!DOCTYPE html>
&lt;html>
&lt;head>

&lt;/head>
&lt;body>


    &lt;div ng-app="myapps">
        &lt;div ng-controller="productController">
            &lt;table>
                &lt;tr>
                    &lt;th>Id&lt;/th>
                    &lt;th>Name&lt;/th>
                    &lt;th>Price&lt;/th>
                &lt;/tr>
                &lt;tr ng-repeat="pr in listProducts">
                    &lt;td>&#123;&#123;pr.id}}&lt;/td>
                    &lt;td>&#123;&#123;pr.name}}&lt;/td>
                    &lt;td>&#123;&#123;pr.price}}&lt;/td>
                &lt;/tr>
            &lt;/table>
        &lt;/div>
    &lt;/div>


    &lt;script type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js">&lt;/script>
    &lt;script type="text/javascript">
        var myapp = angular.module('myapps', []);

        myapp.controller('productController', function($scope, $http) &#123;
            $http.get('http://localhost:8080/Restful/rest/product/findAll')
                    .success(function(response) &#123;
                        $scope.listProducts = response.product;
                    });
        });
    &lt;/script>
&lt;/body>
&lt;/html>
	</strong>
</pre>


<h3>Output</h3>
<img src="<?php echo base_url();?>static/images/ice_screenshot_20151106-191543.png"/>

