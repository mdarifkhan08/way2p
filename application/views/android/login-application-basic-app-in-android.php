<h3>Login.java</h3><hr/>
<pre class="prettyprint">
package com.example.aagstechno.applogin;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

public class Login extends AppCompatActivity {

    private static EditText username;
    private static EditText password;
    private static TextView attempts;
    private static Button login_btn;
    int attempts_counter=5;


    &#64;Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);
        loginButton();
    }


    public void loginButton(){
        username=(EditText)findViewById(R.id.editText_username);
        password=(EditText)findViewById(R.id.editText_password);
        attempts=(TextView)findViewById(R.id.textView_attempts);
        login_btn=(Button)findViewById(R.id.button);
        attempts.setText(Integer.toString(attempts_counter));

        login_btn.setOnClickListener(new View.OnClickListener() {
            &#64;Override
            public void onClick(View v) {
                if(username.getText().toString().equals("arif") && password.getText().toString().equals("khan")) {
                    Toast.makeText(Login.this, "username and password is correct",Toast.LENGTH_SHORT).show();
                    Intent intent=new Intent("com.example.aagstechno.applogin.User");
                    startActivity(intent);
                }
                else{
                    Toast.makeText(Login.this, "username and password is not correct",Toast.LENGTH_SHORT).show();
                    attempts_counter--;
                    attempts.setText(Integer.toString(attempts_counter));
                    if(attempts_counter==0){
                        login_btn.setEnabled(false);
                    }
                }
            }
        });
    }
}
</pre>

<h3>User.java</h3><hr/>
<pre class="prettyprint">
package com.example.aagstechno.applogin;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

public class User extends AppCompatActivity {

    &#64;Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_user);
    }
}
</pre>

<h3>layout/activity_login.xml</h3>
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
    tools:context="com.example.aagstechno.applogin.Login">

    &lt;TextView
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:textAppearance="?android:attr/textAppearanceLarge"
        android:text="&#64;string/login_text"
        android:id="&#64;+id/textView_loginPage"
        android:layout_alignParentTop="true"
        android:layout_alignParentLeft="true"
        android:layout_alignParentStart="true" />

    &lt;TextView
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:textAppearance="?android:attr/textAppearanceLarge"
        android:text="&#64;string/username_text"
        android:id="&#64;+id/textView_username"
        android:layout_marginTop="86dp"
        android:layout_below="&#64;+id/textView_loginPage"
        android:layout_toLeftOf="&#64;+id/editText_username"
        android:layout_toStartOf="&#64;+id/editText_username" />

    &lt;TextView
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:textAppearance="?android:attr/textAppearanceLarge"
        android:text="&#64;string/password_text"
        android:id="&#64;+id/textView_password"
        android:layout_below="&#64;+id/textView_username"
        android:layout_alignLeft="&#64;+id/textView_username"
        android:layout_alignStart="&#64;+id/textView_username"
        android:layout_marginTop="58dp" />

    &lt;EditText
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:inputType="textPersonName"
        android:ems="10"
        android:id="&#64;+id/editText_username"
        android:layout_alignTop="&#64;+id/textView_username"
        android:layout_alignParentRight="true"
        android:layout_alignParentEnd="true" />

    &lt;EditText
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:inputType="textPassword"
        android:ems="10"
        android:id="&#64;+id/editText_password"
        android:layout_alignBottom="&#64;+id/textView_password"
        android:layout_alignLeft="&#64;+id/editText_username"
        android:layout_alignStart="&#64;+id/editText_username" />

    &lt;TextView
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:textAppearance="?android:attr/textAppearanceLarge"
        android:text="&#64;string/attempts_text"
        android:id="&#64;+id/textView_attempts"
        android:layout_below="&#64;+id/editText_password"
        android:layout_alignParentLeft="true"
        android:layout_alignParentStart="true"
        android:layout_marginTop="60dp" />

    &lt;Button
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="&#64;string/loginButton_text"
        android:id="&#64;+id/button"
        android:layout_alignParentBottom="true"
        android:layout_alignLeft="&#64;+id/textView_password"
        android:layout_alignStart="&#64;+id/textView_password"
        android:layout_marginBottom="46dp" />
&lt;/RelativeLayout>
</pre>





<h3>layout/activity_user.xml</h3>
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
    tools:context="com.example.aagstechno.applogin.User">

    &lt;TextView
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:textAppearance="?android:attr/textAppearanceLarge"
        android:text="&#64;string/second_activity_text"
        android:id="&#64;+id/textView2"
        android:layout_alignParentTop="true"
        android:layout_centerHorizontal="true"
        android:layout_marginTop="154dp" />
&lt;/RelativeLayout>
</pre>


<h3>manifests/AndroidManifest.xml</h3>
<pre class="prettyprint">
&lt;?xml version="1.0" encoding="utf-8"?>
&lt;manifest xmlns:android="http://schemas.android.com/apk/res/android"
    package="com.example.aagstechno.applogin">

    &lt;application
        android:allowBackup="true"
        android:icon="&#64;mipmap/ic_launcher"
        android:label="&#64;string/app_name"
        android:supportsRtl="true"
        android:theme="&#64;style/AppTheme">
        &lt;activity android:name=".Login">
            &lt;intent-filter>
                &lt;action android:name="android.intent.action.MAIN" />

                &lt;category android:name="android.intent.category.LAUNCHER" />
            &lt;/intent-filter>
        &lt;/activity>
        &lt;activity android:name=".User" android:label="User">
            &lt;intent-filter>
                &lt;action android:name="com.example.aagstechno.applogin.User" />

                &lt;category android:name="android.intent.category.DEFAULT" />
            &lt;/intent-filter>
        &lt;/activity>
    &lt;/application>
&lt;/manifest>
</pre>

<h3>res/values/strings.xml</h3>
<pre class="prettyprint">
&lt;resources>
    &lt;string name="app_name">AppLogin&lt;/string>
    &lt;string name="login_text">Login Page&lt;/string>
    &lt;string name="username_text">User Name&lt;/string>
    &lt;string name="password_text">Password&lt;/string>
    &lt;string name="attempts_text">Attempts&lt;/string>
    &lt;string name="loginButton_text">LOGIN&lt;/string>
    &lt;string name="second_activity_text">Welcome to the second page&lt;/string>
&lt;/resources>
</pre>

<h3>AVD Manager View</h3>
<img src="<?php echo base_url();?>/static/images/login-app-2 (2).jpg" class="img-responsive"/><hr/>
<img src="<?php echo base_url();?>/static/images/login-app-2 (1).jpg" class="img-responsive"/>
