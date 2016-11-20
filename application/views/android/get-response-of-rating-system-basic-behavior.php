<h3>MainActivity.java</h3><hr/>
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
import android.widget.RatingBar;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    private static RatingBar ratingBar;
    private static TextView textView;
    private static Button button;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        ratingBarListener();
        onClickButtonListener();
    }

    public void ratingBarListener(){
        ratingBar=(RatingBar)findViewById(R.id.ratingBar) ;
        textView=(TextView)findViewById(R.id.textView);

        ratingBar.setOnRatingBarChangeListener(new RatingBar.OnRatingBarChangeListener() {
            @Override
            public void onRatingChanged(RatingBar ratingBar, float rating, boolean fromUser) {
                textView.setText(String.valueOf(rating));
            }
        });

    }


    public void onClickButtonListener(){
        ratingBar=(RatingBar)findViewById(R.id.ratingBar) ;
        button=(Button)findViewById(R.id.button);

        button.setOnClickListener(new View.OnClickListener(){
            public void onClick(View v){
                Toast.makeText(MainActivity.this,String.valueOf(ratingBar.getRating()),Toast.LENGTH_SHORT).show();
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

    &lt;RadioGroup
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:layout_alignParentTop="true"
        android:layout_alignParentLeft="true"
        android:layout_alignParentStart="true"
        android:layout_marginTop="152dp"
        android:id="@+id/radioGroup">

    &lt;/RadioGroup>

    &lt;RatingBar
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:id="@+id/ratingBar"
        android:layout_below="@+id/radioGroup"
        android:layout_toRightOf="@+id/radioGroup"
        android:layout_toEndOf="@+id/radioGroup"
        android:numStars="5"
        android:rating="2"
        android:stepSize="1" />

    &lt;TextView
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:textAppearance="?android:attr/textAppearanceLarge"
        android:text="Large Text"
        android:id="@+id/textView"
        android:layout_alignParentTop="true"
        android:layout_alignParentLeft="true"
        android:layout_alignParentStart="true" />

    &lt;Button
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="Submit"
        android:id="@+id/button"
        android:layout_below="@+id/ratingBar"
        android:layout_alignParentLeft="true"
        android:layout_alignParentStart="true"
        android:layout_marginTop="98dp" />

&lt;/RelativeLayout>
</pre>


<h3>AVD Manager View</h3>
<img src="<?php echo base_url();?>/static/images/rating.jpg" class="img-responsive"/>
