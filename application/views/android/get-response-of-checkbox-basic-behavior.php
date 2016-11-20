<h3>MainActivity.java</h3><hr/>
<pre class="prettyprint">
package com.example.aagstechno.myapplication;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    private CheckBox check1,check2,check3;
    private Button button1;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        addListenerOnButton();
    }

    public void addListenerOnButton(){
        check1=(CheckBox)findViewById(R.id.checkBox);
        check2=(CheckBox)findViewById(R.id.checkBox2);
        check3=(CheckBox)findViewById(R.id.checkBox3);
        button1=(Button)findViewById(R.id.button);

        button1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                StringBuffer sf=new StringBuffer();
                sf.append("XYZ1:").append(check1.isChecked());
                sf.append("XYZ2:").append(check2.isChecked());
                sf.append("XYZ3:").append(check3.isChecked());
                Toast.makeText(MainActivity.this,sf.toString(),Toast.LENGTH_LONG).show();
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

    &lt;CheckBox
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="XYZ1"
        android:id="@+id/checkBox"
        android:layout_alignParentTop="true"
        android:layout_centerHorizontal="true"
        android:checked="false" />

    &lt;CheckBox
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="XYZ2"
        android:id="@+id/checkBox2"
        android:layout_below="@+id/checkBox"
        android:layout_centerHorizontal="true"
        android:layout_marginTop="60dp"
        android:checked="false" />

    &lt;CheckBox
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="XYZ3"
        android:id="@+id/checkBox3"
        android:layout_centerVertical="true"
        android:layout_centerHorizontal="true"
        android:checked="false" />

    &lt;Button
        android:layout_width="fill_parent"
        android:layout_height="wrap_content"
        android:text="Submit"
        android:id="@+id/button"
        android:layout_below="@+id/checkBox3"
        android:layout_centerHorizontal="true"
        android:layout_marginTop="80dp" />
&lt;/RelativeLayout>
	
</pre>
<h3>AVD Manager View </h3><hr/>
<img src="<?php echo base_url();?>/static/images/checkbox.jpg" class="img-responsive"/>



<h2>On Click Checkbox</h2>
<h3>MainActivity.java</h3>
<pre class="prettyprint">
package com.example.aagstechno.myapplication;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    private CheckBox check1,check2,check3;
    private Button button1;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        addListenerOnButton();
        addListenerToCheckBox();
    }

    public void addListenerToCheckBox(){
        check1=(CheckBox)findViewById(R.id.checkBox);
        check1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if (((CheckBox) v).isChecked()) {
                    Toast.makeText(MainActivity.this, "XYZ1 is selected", Toast.LENGTH_LONG).show();
                }
            }
            });
    }

    public void addListenerOnButton(){
        check1=(CheckBox)findViewById(R.id.checkBox);
        check2=(CheckBox)findViewById(R.id.checkBox2);
        check3=(CheckBox)findViewById(R.id.checkBox3);
        button1=(Button)findViewById(R.id.button);
        button1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                StringBuffer sf=new StringBuffer();
                sf.append("XYZ1:").append(check1.isChecked());
                sf.append("XYZ2:").append(check2.isChecked());
                sf.append("XYZ3:").append(check3.isChecked());
                Toast.makeText(MainActivity.this,sf.toString(),Toast.LENGTH_LONG).show();
            }
        });
    }
}
</pre>


<h3>activity_main.xml</h3>
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

    &lt;CheckBox
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="XYZ1"
        android:id="@+id/checkBox"
        android:layout_alignParentTop="true"
        android:layout_centerHorizontal="true"
        android:checked="false" />

    &lt;CheckBox
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="XYZ2"
        android:id="@+id/checkBox2"
        android:layout_below="@+id/checkBox"
        android:layout_centerHorizontal="true"
        android:layout_marginTop="60dp"
        android:checked="false" />

    &lt;CheckBox
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="XYZ3"
        android:id="@+id/checkBox3"
        android:layout_centerVertical="true"
        android:layout_centerHorizontal="true"
        android:checked="false" />

    &lt;Button
        android:layout_width="fill_parent"
        android:layout_height="wrap_content"
        android:text="Submit"
        android:id="@+id/button"
        android:layout_below="@+id/checkBox3"
        android:layout_centerHorizontal="true"
        android:layout_marginTop="80dp" />
&lt;/RelativeLayout>
</pre>

<h3>AVD Manager View</h3>
<img src="<?php echo base_url();?>/static/images/checkbox1.jpg" class="img-responsive"/>
