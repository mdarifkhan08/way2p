	<div class="alert alert-success" role="alert" align="center">
					<h4>JSF second App</h4>
				</div>


							<h3></h3>
							<pre class="prettyprint">
&lt;?xml version="1.0" encoding="UTF-8"?>
&lt;web-app xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
   xmlns="http://java.sun.com/xml/ns/javaee" 
   xmlns:web="http://java.sun.com/xml/ns/javaee/web-app_2_5.xsd"
   xsi:schemaLocation="http://java.sun.com/xml/ns/javaee 
   http://java.sun.com/xml/ns/javaee/web-app_2_5.xsd"
   id="WebApp_ID" version="2.5">
   &lt;welcome-file-list>
      &lt;welcome-file>faces/home.xhtml&lt;/welcome-file>
   &lt;/welcome-file-list>
   &lt;!-- 
      FacesServlet is main servlet responsible to handle all request. 
      It acts as central controller.
      This servlet initializes the JSF components before the JSP is displayed.
   -->
   &lt;servlet>
      &lt;servlet-name>Faces Servlet&lt;/servlet-name>
      &lt;servlet-class>javax.faces.webapp.FacesServlet&lt;/servlet-class>
      &lt;load-on-startup>1&lt;/load-on-startup>
   &lt;/servlet>
   &lt;servlet-mapping>
      &lt;servlet-name>Faces Servlet&lt;/servlet-name>
      &lt;url-pattern>/faces/*&lt;/url-pattern>
   &lt;/servlet-mapping>
   &lt;servlet-mapping>
      &lt;servlet-name>Faces Servlet&lt;/servlet-name>
      &lt;url-pattern>*.jsf&lt;/url-pattern>
   &lt;/servlet-mapping>
   &lt;servlet-mapping>
      &lt;servlet-name>Faces Servlet&lt;/servlet-name>
      &lt;url-pattern>*.faces&lt;/url-pattern>
   &lt;/servlet-mapping>
   &lt;servlet-mapping>
      &lt;servlet-name>Faces Servlet&lt;/servlet-name>
      &lt;url-pattern>*.xhtml&lt;/url-pattern>
   &lt;/servlet-mapping>
&lt;/web-app>           
               </pre>
							<h3></h3>
							<pre class="prettyprint">
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
&lt;html xmlns="http://www.w3.org/1999/xhtml"
    xmlns:ui="http://java.sun.com/jsf/facelets"
    xmlns:h="http://java.sun.com/jsf/html"
    xmlns:f="http://java.sun.com/jsf/core">
 
&lt;head>
&lt;link rel="stylesheet" type="text/css" href="../style/main.css" />
&lt;/head>
 
&lt;h:body styleClass="body">
    &lt;center>
        &lt;h:outputText value="New User Registration" styleClass="header">&lt;/h:outputText>
    &lt;/center>
    &lt;h:form>
        &lt;h:messages errorClass="errorMessage" infoClass="infoMessage"
            warnClass="warnMessage">&lt;/h:messages>
        &lt;h:panelGrid columns="2">
            &lt;h:outputText value="Username :">&lt;/h:outputText>
            &lt;h:inputText id="username" value="&&#35;35;{regBean.username}"
                required="true" requiredMessage="Please Enter Username!">&lt;/h:inputText>
 
            &lt;h:outputText value="Password :">&lt;/h:outputText>
            &lt;h:inputSecret id="password" value="&&#35;35;{regBean.password}"
                required="true" requiredMessage="Please Enter Password!">&lt;/h:inputSecret>
 
            &lt;h:outputText value="Confirm Password :">&lt;/h:outputText>
            &lt;h:inputSecret id="confirmpassword"
                value="&#35;{regBean.confirmpassword}" required="true"
                requiredMessage="Please Confirm Password!">&lt;/h:inputSecret>
 
            &lt;h:outputText value="First name :">&lt;/h:outputText>
            &lt;h:inputText id="firstname" value="&&#35;35;{regBean.firstname}"
                required="true" requiredMessage="Please Enter First Name!">&lt;/h:inputText>
 
            &lt;h:outputText value="Last name :">&lt;/h:outputText>
            &lt;h:inputText id="lastname" value="&&#35;35;{regBean.lastname}"
                required="true" requiredMessage="Please Enter Last Name!">&lt;/h:inputText>
 
            &lt;h:outputText value="Date of Birth :">&lt;/h:outputText>
            &lt;h:inputText id="dob" value="&#35;{regBean.dob}" required="true"
                requiredMessage="Please Enter Date of Birth!">&lt;/h:inputText>
 
            &lt;h:outputText value="Email :">&lt;/h:outputText>
            &lt;h:inputText id="email" value="&&#35;35;{regBean.email}" required="true"
                requiredMessage="Please Enter Email!">&lt;/h:inputText>
 
            &lt;h:outputText value="Confirm Email :">&lt;/h:outputText>
            &lt;h:inputText id="confirmemail" value="&&#35;35;{regBean.confirmemail}"
                required="true" requiredMessage="Please Confirm Email!">&lt;/h:inputText>
 
            &lt;h:outputText value="User Roles :">&lt;/h:outputText>
            &lt;h:selectManyListbox id="groups" value="&&#35;35;{regBean.selectedGroups}"
                required="true" requiredMessage="Select at least one user Role">
                &lt;f:selectItem itemLabel="Administrators" itemValue="Administrators">&lt;/f:selectItem>
                &lt;f:selectItem itemLabel="Guests" itemValue="Guests">&lt;/f:selectItem>
                &lt;f:selectItem itemLabel="Managers" itemValue="Managers">&lt;/f:selectItem>
            &lt;/h:selectManyListbox>
 
            &lt;h:outputText value="Street Name :">&lt;/h:outputText>
            &lt;h:inputText id="street" value="&&#35;35;{regBean.street}" required="true"
                requiredMessage="Please Enter Street Name!">&lt;/h:inputText>
 
            &lt;h:outputText value="City :">&lt;/h:outputText>
            &lt;h:inputText id="city" value="&&#35;35;{regBean.city}" required="true"
                requiredMessage="Please Enter City!">&lt;/h:inputText>
 
            &lt;h:outputText value="Zip :">&lt;/h:outputText>
            &lt;h:inputText id="zip" value="&&#35;35;{regBean.zip}" required="true"
                requiredMessage="Please Enter Zip Code!">&lt;/h:inputText>
 
            &lt;h:outputText value="State/Province :">&lt;/h:outputText>
            &lt;h:inputText id="province" value="&#35;{regBean.province}"
                required="true" requiredMessage="Please Enter State/Province!">&lt;/h:inputText>
 
            &lt;h:outputText value="Country :">&lt;/h:outputText>
            &lt;h:inputText id="country" value="&#35;{regBean.country}" required="true"
                requiredMessage="Please Select Country!">&lt;/h:inputText>
 
            &lt;h:commandButton type="submit" value="Submit"
                action="4.xhtml">&lt;/h:commandButton>
            &lt;h:commandButton type="reset" value="Reset">&lt;/h:commandButton>
        &lt;/h:panelGrid>
    &lt;/h:form>
&lt;/h:body>
 
&lt;/html>           
               </pre>
							<h3></h3>
							<pre class="prettyprint">
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
&lt;html xmlns="http://www.w3.org/1999/xhtml"
    xmlns:ui="http://java.sun.com/jsf/facelets"
    xmlns:h="http://java.sun.com/jsf/html"
    xmlns:f="http://java.sun.com/jsf/core">
 
&lt;head>
&lt;link rel="stylesheet" type="text/css" href="../style/main.css" />
&lt;/head>
&lt;h:body styleClass="body">
    &lt;h:form>
        &lt;h:outputText value="Registration Confirmation" styleClass="header">&lt;/h:outputText>
        &lt;h:messages errorClass="errorMessage" infoClass="infoMessage"
            warnClass="warnMessage">&lt;/h:messages>
        &lt;h:panelGrid columns="2">
            &lt;h:outputText value="Username :">&lt;/h:outputText>
            &lt;h:outputText value="&#35;{regBean.username}">&lt;/h:outputText>
 
            &lt;h:outputText value="Password :">&lt;/h:outputText>
            &lt;h:outputText value="**************">&lt;/h:outputText>
 
            &lt;h:outputText value="First name :">&lt;/h:outputText>
            &lt;h:outputText value="&#35;{regBean.firstname}">&lt;/h:outputText>
 
            &lt;h:outputText value="Last name :">&lt;/h:outputText>
            &lt;h:outputText value="&#35;{regBean.lastname}">&lt;/h:outputText>
 
            &lt;h:outputText value="Date of Birth :">&lt;/h:outputText>
            &lt;h:outputText value="&#35;{regBean.dob}">&lt;/h:outputText>
 
            &lt;h:outputText value="Email :">&lt;/h:outputText>
            &lt;h:outputText value="&#35;{regBean.email}">&lt;/h:outputText>
 
            &lt;h:outputText value="Role : ">&lt;/h:outputText>
            &lt;h:dataTable value="&#35;{regBean.selectedGroups}" var="group">
                &lt;h:column>
                    &lt;h:outputText value="&#35;{group}" />
                &lt;/h:column>
            &lt;/h:dataTable>
 
            &lt;h:outputText value="Street Name :">&lt;/h:outputText>
            &lt;h:outputText value="&#35;{regBean.street}">&lt;/h:outputText>
 
            &lt;h:outputText value="City :">&lt;/h:outputText>
            &lt;h:outputText value="&#35;{regBean.city}">&lt;/h:outputText>
 
            &lt;h:outputText value="Zip :">&lt;/h:outputText>
            &lt;h:outputText value="&#35;{regBean.zip}">&lt;/h:outputText>
 
            &lt;h:outputText value="State/Province :">&lt;/h:outputText>
            &lt;h:outputText value="&#35;{regBean.province}">&lt;/h:outputText>
 
            &lt;h:outputText value="Country :">&lt;/h:outputText>
            &lt;h:outputText value="&#35;{regBean.country}">&lt;/h:outputText>
        &lt;/h:panelGrid>
    &lt;/h:form>
&lt;/h:body>
&lt;/html>           
               </pre>
							<h3></h3>
							<pre class="prettyprint">
package com.itm.managedbean;

import javax.faces.bean.ManagedBean;

@ManagedBean(name="regBean",eager=true)
public class Third {
private String username;
private String password;
private String confirmpassword;
private String firstname;
private String lastname;
private String dob;
private String email;
private String confirmemail;
private String[] selectedGroups;
private String street;
private String city;
private String zip;
private String province;
private String country;
public String getUsername() {
   return username;
}
public void setUsername(String username) {
   this.username = username;
}
public String getPassword() {
   return password;
}
public void setPassword(String password) {
   this.password = password;
}
public String getConfirmpassword() {
   return confirmpassword;
}
public void setConfirmpassword(String confirmpassword) {
   this.confirmpassword = confirmpassword;
}
public String getFirstname() {
   return firstname;
}
public void setFirstname(String firstname) {
   this.firstname = firstname;
}
public String getLastname() {
   return lastname;
}
public void setLastname(String lastname) {
   this.lastname = lastname;
}
public String getDob() {
   return dob;
}
public void setDob(String dob) {
   this.dob = dob;
}
public String getEmail() {
   return email;
}
public void setEmail(String email) {
   this.email = email;
}
public String getConfirmemail() {
   return confirmemail;
}
public void setConfirmemail(String confirmemail) {
   this.confirmemail = confirmemail;
}
public String[] getSelectedGroups() {
   return selectedGroups;
}
public void setSelectedGroups(String[] selectedGroups) {
   this.selectedGroups = selectedGroups;
}
public String getStreet() {
   return street;
}
public void setStreet(String street) {
   this.street = street;
}
public String getCity() {
   return city;
}
public void setCity(String city) {
   this.city = city;
}
public String getZip() {
   return zip;
}
public void setZip(String zip) {
   this.zip = zip;
}
public String getProvince() {
   return province;
}
public void setProvince(String province) {
   this.province = province;
}
public String getCountry() {
   return country;
}
public void setCountry(String country) {
   this.country = country;
}
}
            
               </pre>

