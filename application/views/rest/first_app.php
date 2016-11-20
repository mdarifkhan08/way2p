
<h3><u>Maven Dependency</u></h3>
<pre class="prettyprint">
        &lt;dependency>
            &lt;groupId>junit&lt;/groupId>
            &lt;artifactId>junit&lt;/artifactId>
            &lt;version>3.8.1&lt;/version>
            &lt;scope>test&lt;/scope>
        &lt;/dependency>

        &lt;!-- Jax-RS and Jersey -->

        &lt;dependency>
            &lt;groupId>com.sun.jersey&lt;/groupId>
            &lt;artifactId>jersey-server&lt;/artifactId>
            &lt;version>1.19&lt;/version>
        &lt;/dependency>

        &lt;dependency>
            &lt;groupId>com.sun.jersey&lt;/groupId>
            &lt;artifactId>jersey-client&lt;/artifactId>
            &lt;version>1.19&lt;/version>
        &lt;/dependency>

        &lt;dependency>
            &lt;groupId>com.sun.jersey&lt;/groupId>
            &lt;artifactId>jersey-core&lt;/artifactId>
            &lt;version>1.19&lt;/version>
        &lt;/dependency>

        &lt;dependency>
            &lt;groupId>com.sun.jersey&lt;/groupId>
            &lt;artifactId>jersey-json&lt;/artifactId>
            &lt;version>1.19&lt;/version>
        &lt;/dependency>

        &lt;dependency>
            &lt;groupId>com.sun.jersey&lt;/groupId>
            &lt;artifactId>jersey-servlet&lt;/artifactId>
            &lt;version>1.19&lt;/version>
        &lt;/dependency>
        
        &lt;!-- Spring MVC -->

        &lt;dependency>
            &lt;groupId>org.springframework&lt;/groupId>
            &lt;artifactId>spring-webmvc&lt;/artifactId>
            &lt;version>3.2.0.RELEASE&lt;/version>
        &lt;/dependency>

        &lt;dependency>
            &lt;groupId>org.springframework&lt;/groupId>
            &lt;artifactId>spring-core&lt;/artifactId>
            &lt;version>3.2.0.RELEASE&lt;/version>
        &lt;/dependency>

        &lt;dependency>
            &lt;groupId>org.springframework&lt;/groupId>
            &lt;artifactId>spring-context&lt;/artifactId>
            &lt;version>3.2.0.RELEASE&lt;/version>
        &lt;/dependency>

        &lt;!-- Servlet and JSp -->
        &lt;dependency>
            &lt;groupId>javax.servlet&lt;/groupId>
            &lt;artifactId>javax.servlet-api&lt;/artifactId>
            &lt;version>3.0.1&lt;/version>
            &lt;scope>provided&lt;/scope>
        &lt;/dependency>

        &lt;dependency>
            &lt;groupId>javax.servlet.jsp&lt;/groupId>
            &lt;artifactId>jsp-api&lt;/artifactId>
            &lt;version>2.2&lt;/version>
            &lt;scope>provided&lt;/scope>
        &lt;/dependency>

        &lt;dependency>
            &lt;groupId>javax.el&lt;/groupId>
            &lt;artifactId>javax.el-api&lt;/artifactId>
            &lt;version>2.2.4&lt;/version>
            &lt;scope>provided&lt;/scope>
        &lt;/dependency>

        &lt;dependency>
            &lt;groupId>javax.servlet&lt;/groupId>
            &lt;artifactId>jstl&lt;/artifactId>
            &lt;version>1.2&lt;/version>
        &lt;/dependency>
</pre>

<br/>
<h3><u>configure web.xml</u></h3>
<pre class="prettyprint">
&lt;!DOCTYPE web-app PUBLIC
 "-//Sun Microsystems, Inc.//DTD Web Application 2.3//EN"
 "http://java.sun.com/dtd/web-app_2_3.dtd" >
&lt;web-app>
    &lt;display-name>Archetype Created Web Application&lt;/display-name>

    &lt;servlet>
        &lt;servlet-name>Jersey&lt;/servlet-name>
        &lt;servlet-class>com.sun.jersey.spi.container.servlet.ServletContainer&lt;/servlet-class>

        &lt;init-param>
            &lt;param-name>com.sun.jersey.config.property.packages&lt;/param-name>
            &lt;param-value>com.itm.resources&lt;/param-value>
        &lt;/init-param>

        &lt;!-- &lt;init-param> &lt;param-name>javax.ws.rs.Application&lt;/param-name> &lt;param-value>com.itm.gwl.MyApplication&lt;/param-value> 
            &lt;/init-param> -->
    &lt;/servlet>

    &lt;servlet-mapping>
        &lt;servlet-name>Jersey&lt;/servlet-name>
        &lt;url-pattern>/backend/*&lt;/url-pattern>
    &lt;/servlet-mapping>
    
&lt;/web-app>
</pre>

<h3><u>Message.java</u></h3>
<pre class="prettyprint">
package com.itm.model;

import java.util.Date;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement

public class Message &#123;
    
    private long id;
    
    private String message;
    
    private Date created;
    
    private String author;
    
    
    public Message() &#123;
        super();
    }
    public Message(long id, String message, String author) &#123;
        super();
        this.id = id;
        this.message = message;
        
        this.author = author;
        this.created = new Date();
    }
    public long getId() &#123;
        return id;
    }
    public void setId(long id) &#123;
        this.id = id;
    }
    public String getMessage() &#123;
        return message;
    }
    public void setMessage(String message) &#123;
        this.message = message;
    }
    public Date getCreated() &#123;
        return created;
    }
    public void setCreated(Date created) &#123;
        this.created = created;
    }
    public String getAuthor() &#123;
        return author;
    }
    public void setAuthor(String author) &#123;
        this.author = author;
    }   
}
</pre>

<h3><u>MessageResource.java</u></h3>
<pre class="prettyprint">
package com.itm.resources;

import java.util.List;

import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

import com.itm.model.Message;
import com.itm.service.MessageService;

@Path("/messages")
public class MessageResources &#123;

    
    MessageService messageService=new MessageService();
    
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public List<Message> getMessages()&#123;
        return messageService.getAllMessage();
    }

}
</pre>

<h3><u>MessageService.java</u></h3>
<pre class="prettyprint">
package com.itm.service;

import java.util.ArrayList;
import java.util.List;

import com.itm.model.Message;

public class MessageService &#123;
    
    public List<Message> getAllMessage()&#123;
        Message m1= new Message (1L,"Hello World!","Arif Khan!");
        Message m2= new Message (2L,"This is a restful web services!","Arif Khan!");
        List<Message> list=new ArrayList<Message>();
        list.add(m1);
        list.add(m2);
        return list;
    }

}
</pre>


<h3><u>Access Link</u></h3>
<pre class="prettyprint">
uri/url...../<b>backend/messages</b>
</pre>




<h3><u>Output</u></h3>
<pre class="prettyprint">
&lt;messages>
&lt;message>
&lt;author>Arif Khan!&lt;/author>
&lt;created>2015-10-20T19:22:51.527Z&lt;/created>
&lt;id>1&lt;/id>
&lt;message>Hello World!&lt;/message>
&lt;/message>
&lt;message>
&lt;author>Arif Khan!&lt;/author>
&lt;created>2015-10-20T19:22:51.527Z&lt;/created>
&lt;id>2&lt;/id>
&lt;message>This is a restful web services!&lt;/message>
&lt;/message>
&lt;/messages>
</pre>
