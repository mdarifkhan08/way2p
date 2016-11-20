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
    tools:context="com.example.aagstechno.project1.MainActivity">

    &lt;EditText
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:inputType="number"
        android:ems="10"
        android:id="@+id/editText"
        android:hint="number1"
        android:layout_above="@+id/editText2"
        android:layout_toRightOf="@+id/textView2"
        android:layout_toEndOf="@+id/textView2" />

    &lt;EditText
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:inputType="number"
        android:ems="10"
        android:id="@+id/editText2"
        android:layout_centerVertical="true"
        android:layout_alignLeft="@+id/editText"
        android:layout_alignStart="@+id/editText"
        android:hint="number2" />

    &lt;TextView
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="Result"
        android:id="@+id/textView"
        android:layout_alignLeft="@+id/editText"
        android:layout_alignStart="@+id/editText"
        android:layout_above="@+id/editText"
        android:layout_alignTop="@+id/editText" />

    &lt;TextView
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:textAppearance="?android:attr/textAppearanceLarge"
        android:text="RESULT"
        android:id="@+id/textView2"
        android:layout_alignBaseline="@+id/editText2"
        android:layout_alignBottom="@+id/editText2"
        android:layout_alignParentLeft="true"
        android:layout_alignParentStart="true" />

    &lt;Button
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="SUM"
        android:id="@+id/button"
        android:layout_below="@+id/editText2"
        android:layout_alignParentRight="true"
        android:layout_alignParentEnd="true"
        android:onClick="onClickButton"
        android:nestedScrollingEnabled="false" />

    &lt;Switch
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="New Switch"
        android:id="@+id/switch1"
        android:layout_below="@+id/button"
        android:layout_alignParentLeft="true"
        android:layout_alignParentStart="true"
        android:layout_marginLeft="757dp"
        android:layout_marginStart="757dp" />
&lt;/RelativeLayout>

</pre>

<h3>MainActivity.java</h3><hr/>
<pre class="prettyprint">
package com.example.aagstechno.project1;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }
   public void onClickButton(View v){
       EditText e1=(EditText)findViewById(R.id.editText);
       EditText e2=(EditText)findViewById(R.id.editText2);
       TextView t1=(TextView)findViewById(R.id.textView2);
       int num1=Integer.parseInt(e1.getText().toString());
       int num2=Integer.parseInt(e2.getText().toString());
       int sum=num1+num2;
       t1.setText(Integer.toString(sum));
   }
}
</pre>

<h3>Android Virtual Device View</h3>
<img src="<?php echo base_url();?>/static/images/ice_screenshot_20160215-000703.png" class="img-responsive"/>

