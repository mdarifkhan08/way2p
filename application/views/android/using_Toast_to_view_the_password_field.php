<h3>MainActivity.java</h3><hr/>
<pre class="prettyprint">
package com.example.aagstechno.myapplication;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    private EditText password;
    private Button button_sbm;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        addListenerOnButton();
    }
    public void addListenerOnButton(){
        password=(EditText)findViewById(R.id.editText);
        button_sbm=(Button)findViewById(R.id.button);
        button_sbm.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                Toast.makeText(MainActivity.this, password.getText(), Toast.LENGTH_SHORT).show();
            }
        });

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
    android:paddingBottom="@dimen/activity_vertical_margin"
    android:paddingLeft="@dimen/activity_horizontal_margin"
    android:paddingRight="@dimen/activity_horizontal_margin"
    android:paddingTop="@dimen/activity_vertical_margin"
    tools:context="com.example.aagstechno.myapplication.MainActivity">

    &lt;EditText
        android:layout_width="fill_parent"
        android:layout_height="wrap_content"
        android:inputType="textPassword"
        android:ems="10"
        android:id="@+id/editText"
        android:layout_alignParentTop="true"
        android:layout_alignParentLeft="true"
        android:layout_alignParentStart="true" />

    &lt;Button
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="SUBMIT"
        android:id="@+id/button"
        android:layout_below="@+id/editText"
        android:layout_alignParentLeft="true"
        android:layout_alignParentStart="true"
        android:layout_marginTop="46dp" />
&lt;/RelativeLayout>
</pre>

<h3>AVD Manager View</h3><hr/>
<br/>
<img src="<?php echo base_url();?>/static/images/toast.jpg" class="img-responsive"/>
