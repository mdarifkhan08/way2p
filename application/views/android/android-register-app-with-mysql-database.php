<h3>MainActivity.java</h3><hr/>
<pre class="prettyprint">
package com.example.aagstechno.insertintotableusingandroidapp;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {

    EditText name,age,username,password;

    &#64;Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        name=(EditText)findViewById(R.id.editText1);
        age=(EditText)findViewById(R.id.editText2);
        username=(EditText)findViewById(R.id.editText3);
        password=(EditText)findViewById(R.id.editText4);

    }


    public void onRegister(View v){
        String str_name=name.getText().toString();
        String str_age=age.getText().toString();

        String str_username=username.getText().toString();
        String str_password=password.getText().toString();




        String type="register";
        BackgroundWorker bw=new BackgroundWorker(this);
        bw.execute(type, str_name, str_age,str_username,str_password);
    }
}
	
</pre>

<h3></h3><hr/>
<pre class="prettyprint">
package com.example.aagstechno.insertintotableusingandroidapp;

import android.app.AlertDialog;
import android.content.Context;
import android.os.AsyncTask;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.io.OutputStreamWriter;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import java.net.URLEncoder;

/**
 * Created by AAGS TECHO on 2/21/2016.
 */
public class BackgroundWorker extends AsyncTask&lt;String,Void,String> {
    Context context;
    AlertDialog alertDialog;
    BackgroundWorker(Context ctx){
        context=ctx;
    }
    &#64;Override
    protected String doInBackground(String... params) {
        String type=params[0];
        String register_url="http://way2programming.com/register.php";
        if(type.equals("register")){
            try {
                String name=params[1];
                String age=params[2];
                String username=params[3];
                String password=params[4];
                URL url=new URL(register_url);
                HttpURLConnection httpURLConnection=(HttpURLConnection)url.openConnection();
                httpURLConnection.setRequestMethod("POST");
                httpURLConnection.setDoOutput(true);
                httpURLConnection.setDoInput(true);
                OutputStream os=httpURLConnection.getOutputStream();
                BufferedWriter bufferedWriter=new BufferedWriter(new OutputStreamWriter(os,"UTF-8"));
                String postData= URLEncoder.encode("name", "UTF-8")+"="+URLEncoder.encode(name,"UTF-8")
                        +"&"+URLEncoder.encode("age","UTF-8")+"="+URLEncoder.encode(age,"UTF-8")
                        +"&"+URLEncoder.encode("username","UTF-8")+"="+URLEncoder.encode(username,"UTF-8")
                        +"&"+URLEncoder.encode("password","UTF-8")+"="+URLEncoder.encode(password,"UTF-8");
                bufferedWriter.write(postData);
                bufferedWriter.flush();
                bufferedWriter.close();
                os.close();


                InputStream is=httpURLConnection.getInputStream();
                BufferedReader bufferedReader=new BufferedReader(new InputStreamReader(is,"iso-8859-1"));
                String result="";
                String line="";
                while((line=bufferedReader.readLine())!=null){
                    result+=line;
                }
                bufferedReader.close();
                is.close();
                httpURLConnection.disconnect();
                return result;
            } catch (MalformedURLException e) {
                e.printStackTrace();
            } catch (IOException e) {
                e.printStackTrace();
            }
        }
        return null;
    }

    &#64;Override
    public void onPreExecute(){
        super.onPreExecute();
        alertDialog=new AlertDialog.Builder(context).create();
        alertDialog.setTitle("Registration Status");
    }

    &#64;Override
    protected void onPostExecute(String result) {
        alertDialog.setMessage(result);
        alertDialog.show();
    }

    &#64;Override
    protected void onProgressUpdate(Void... values) {
        super.onProgressUpdate(values);
    }
}
	
</pre>

<h3>main_activity.xml</h3><hr/>
<pre class="prettyprint">
&lt;?xml version="1.0" encoding="utf-8"?>
&lt;RelativeLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    android:paddingBottom="&#64;dimen/activity_vertical_margin"
    android:paddingLeft="&#64;dimen/activity_horizontal_margin"
    android:paddingRight="&#64;dimen/activity_horizontal_margin"
    android:paddingTop="&#64;dimen/activity_vertical_margin"
    tools:context="com.example.aagstechno.insertintotableusingandroidapp.MainActivity">

    &lt;EditText
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:inputType="textPersonName"
        android:text="Name"
        android:ems="10"
        android:id="&#64;+id/editText1"
        android:layout_alignParentTop="true"
        android:layout_alignParentLeft="true"
        android:layout_alignParentStart="true"
        android:layout_marginTop="68dp"
        android:hint="Name" />

    &lt;EditText
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:inputType="textPersonName"
        android:text="Age"
        android:ems="10"
        android:id="&#64;+id/editText2"
        android:layout_below="&#64;+id/editText1"
        android:layout_alignParentLeft="true"
        android:layout_alignParentStart="true"
        android:hint="Age" />

    &lt;EditText
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:inputType="textPersonName"
        android:text="Username"
        android:ems="10"
        android:id="&#64;+id/editText3"
        android:layout_below="&#64;+id/editText2"
        android:layout_alignParentLeft="true"
        android:layout_alignParentStart="true"
        android:hint="Username" />

    &lt;EditText
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:inputType="textPersonName"
        android:text="Password"
        android:ems="10"
        android:id="&#64;+id/editText4"
        android:layout_below="&#64;+id/editText3"
        android:layout_alignParentLeft="true"
        android:layout_alignParentStart="true"
        android:hint="Password" />

    &lt;Button
        android:layout_width="fill_parent"
        android:layout_height="wrap_content"
        android:text="Register"
        android:id="&#64;+id/button"
        android:layout_below="&#64;+id/editText4"
        android:layout_centerHorizontal="true"
        android:layout_marginTop="46dp"
        android:onClick="onRegister"/>

&lt;/RelativeLayout>
	
</pre>


<h3>AndroidManifest.xml</h3><hr/>
<pre class="prettyprint">
&lt;?xml version="1.0" encoding="utf-8"?>
&lt;manifest xmlns:android="http://schemas.android.com/apk/res/android"
    package="com.example.aagstechno.insertintotableusingandroidapp">
    &lt;uses-permission android:name="android.permission.INTERNET">&lt;/uses-permission>
    &lt;uses-permission android:name="android.permission.ACCESS_NETWORK_STATE" />
    &lt;application
        android:allowBackup="true"
        android:icon="&#64;mipmap/ic_launcher"
        android:label="&#64;string/app_name"
        android:supportsRtl="true"
        android:theme="&#64;style/AppTheme">
        &lt;activity android:name=".MainActivity">
            &lt;intent-filter>
                &lt;action android:name="android.intent.action.MAIN" />

                &lt;category android:name="android.intent.category.LAUNCHER" />
            &lt;/intent-filter>
        &lt;/activity>
        &lt;activity android:name=".Register">&lt;/activity>
    &lt;/application>
&lt;/manifest>
	
</pre>



<h3>db.sql</h3><hr/>
<pre class="prettyprint">
create table employee(id int(11)unsigned not null auto_increment,name varchar(100) not null,age int(3) not null,username varchar(100) not null,password varchar(100) not null,primary key(id));	
</pre>


<h3>dbconfig.php</h3><hr/>
<pre class="prettyprint">
&lt;?php 
$DB_HOST="fdb14.freegreenhost.com";
$DB_USER="way2p";
$DB_PASSWORD="arifkhan8";
$DB_NAME="way2p";

try{
      $DB_CON=new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASSWORD);
      $DB_CON->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $e->getMessage();
}
?>
</pre>


<h3>register.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
require_once('dbconfig.php');

if(isset($_POST['name'])){
	$name=trim($_POST['name']);
	$age=trim($_POST['age']);
	$username=trim($_POST['username']);
	$password=trim($_POST['password']);

	$stmt=$DB_CON->prepare('Insert into employee(name,age,username,password) values(:name,:age,:username,:password)');
	$stmt->bindparam(':name',$name);
	$stmt->bindparam(':age',$age);
	$stmt->bindparam(':username',$username);
	$stmt->bindparam(':password',$password);
	$stmt->execute();

	if($stmt->rowCount () > 0){
       echo "You are register successfully!";
	}
	else{
       echo "registration is failed!please report us";
	}
}	
</pre>

<h3>AVD Manager View</h3>
<img src="<?php echo base_url();?>/static/images/register.jpg" class="img-responsive"/><br/><br/>

