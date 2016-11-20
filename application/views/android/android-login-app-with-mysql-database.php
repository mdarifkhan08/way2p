<h3>MainActivity.java</h3><hr/>
<pre class="prettyprint">
package com.example.aagstechno.mysqlloginapplication;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {

    EditText usernameEt,passwordEt;

    &#64;Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        usernameEt=(EditText)findViewById(R.id.etUsername);
        passwordEt=(EditText)findViewById(R.id.etPassword);
    }

    public void onLogin(View v){
        String username=usernameEt.getText().toString();
        String password=passwordEt.getText().toString();
        String type="login";
        BackgroundWorker bw=new BackgroundWorker(this);
        bw.execute(type,username,password);
    }
}
	
</pre>

<h3>BackgroundWorker.java</h3><hr/>
<pre class="prettyprint">
package com.example.aagstechno.mysqlloginapplication;

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
 * Created by AAGS TECHO on 2/18/2016.
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
        String login_url="http://way2programming.com/login.php";
        if(type.equals("login")){
            try {
                String user_name=params[1];
                String pass_word=params[2];
                URL url=new URL(login_url);
                HttpURLConnection httpURLConnection=(HttpURLConnection)url.openConnection();
                httpURLConnection.setRequestMethod("POST");
                httpURLConnection.setDoOutput(true);
                httpURLConnection.setDoInput(true);
                OutputStream os=httpURLConnection.getOutputStream();
                BufferedWriter bufferedWriter=new BufferedWriter(new OutputStreamWriter(os,"UTF-8"));
                String postData= URLEncoder.encode("user_name","UTF-8")+"="+URLEncoder.encode(user_name,"UTF-8")+"&"+URLEncoder.encode("pass_word","UTF-8")+"="+URLEncoder.encode(pass_word,"UTF-8");
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
        alertDialog.setTitle("Login Status");
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

<h3>activity_main.xml</h3><hr/>
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
    tools:context="com.example.aagstechno.mysqlloginapplication.MainActivity">

    &lt;EditText
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:inputType="textPersonName"
        android:ems="10"
        android:id="&#64;+id/etUsername"
        android:layout_marginTop="50dp" />

    &lt;EditText
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:inputType="textPassword"
        android:ems="10"
        android:id="&#64;+id/etPassword"
        android:layout_below="&#64;+id/etUsername"
        android:layout_alignParentLeft="true"
        android:layout_alignParentStart="true" />

    &lt;Button
        android:layout_width="fill_parent"
        android:layout_height="wrap_content"
        android:text="Login"
        android:id="&#64;+id/button"
        android:layout_below="&#64;+id/etPassword"
        android:layout_alignParentLeft="true"
        android:layout_alignParentStart="true"
        android:onClick="onLogin"/>
&lt;/RelativeLayout>
	
</pre>


<h3>AndroidManifest.xml</h3><hr/>
<pre class="prettyprint">
&lt;?xml version="1.0" encoding="utf-8"?>
&lt;manifest xmlns:android="http://schemas.android.com/apk/res/android"
    package="com.example.aagstechno.mysqlloginapplication">
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
    &lt;/application>

&lt;/manifest>

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

<h3>login.php</h3><hr/>
<pre class="prettyprint">
&lt;?php
require_once('dbconfig.php');

if(isset($_POST['user_name'])){
	$username=trim($_POST['user_name']);
	$password=trim($_POST['pass_word']);

	$stmt=$DB_CON->prepare('select * from employee_login where name=:name and password=:password');
	$stmt->bindparam(':name',$username);
	$stmt->bindparam(':password',$password);
	$stmt->execute();

	if($stmt->rowCount () > 0){
       echo "login success";
	}
	else{
       echo "login failure";
	}
}	
</pre>

<h3>db.sql</h3><hr/>
<pre class="prettyprint">
create table employee_login(id int(11) unsigned not null auto_increment,name varchar(100),password varchar(100),primary key(id));

insert into employee_login(name,password) values('xyz1','xyz2');	
</pre>



<h3>AVD Manager View</h3>
<img src="<?php echo base_url();?>/static/images/mysqllogin1.jpg" class="img-responsive"/><br/><br/>
<img src="<?php echo base_url();?>/static/images/mysqllogin2.jpg" class="img-responsive"/>

