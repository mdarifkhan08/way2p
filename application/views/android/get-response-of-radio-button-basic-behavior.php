<h3>MainActivity.java</h3>
<pre class="prettyprint">
package com.example.aagstechno.myapplication;

import android.provider.MediaStore;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    private static RadioGroup radio_group;
    private static RadioButton radio_button;
    private static Button button;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        onClickListenerButton();
    }

    public void onClickListenerButton(){
        radio_group=(RadioGroup)findViewById(R.id.radioGroup) ;
        button=(Button)findViewById(R.id.button);
        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                int selected_id=radio_group.getCheckedRadioButtonId();
                radio_button=(RadioButton)findViewById(selected_id);
                Toast.makeText(MainActivity.this,radio_button.getText().toString(),Toast.LENGTH_SHORT).show();
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

    &lt;RadioGroup
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_alignParentTop="true"
        android:layout_alignParentLeft="true"
        android:layout_alignParentStart="true"
        android:layout_marginTop="152dp"
        android:id="@+id/radioGroup">

        &lt;RadioButton
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
            android:text="text1"
            android:id="@+id/radioButton_text1"
            android:layout_gravity="center_horizontal"
            android:checked="false" />

        &lt;RadioButton
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
            android:text="text2"
            android:id="@+id/radioButton_text2"
            android:layout_gravity="center_horizontal"
            android:checked="false" />

        &lt;RadioButton
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
            android:text="text3"
            android:id="@+id/radioButton_text3"
            android:layout_gravity="center_horizontal"
            android:checked="false" />
    &lt;/RadioGroup>

    &lt;Button
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="New Button"
        android:id="@+id/button"
        android:layout_alignParentTop="true"
        android:layout_centerHorizontal="true"
        android:layout_marginTop="46dp" />
&lt;/RelativeLayout>
</pre>

<h3>AVD Manager View</h3>
<img src="<?php echo base_url();?>/static/images/radio.jpg" class="img-responsive"/>
