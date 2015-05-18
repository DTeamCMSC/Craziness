package com.example.damola.flippedlab2;

import android.os.Bundle;
import android.support.v7.app.ActionBarActivity;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;


public class MainActivity extends ActionBarActivity
{

    private Button clickHere,enjoyTheOcean,aCliff;
    private EditText Fname,Lname,eMail,passPin;

    @Override
    protected void onCreate(Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        aCliff = (Button) findViewById(R.id.aCliff);
        enjoyTheOcean = (Button) findViewById(R.id.enjoyTheOcean);
        clickHere = (Button) findViewById(R.id.clickHere);

        Fname = (EditText) findViewById(R.id.fname);
        Lname = (EditText) findViewById(R.id.lname);
        eMail = (EditText) findViewById(R.id.eMail);
        passPin = (EditText) findViewById(R.id.passPin);



    }


    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }

    public void clickHere(View view)
    {
        String firstName = String.valueOf(Fname.getText());
        String lastName = String.valueOf(Lname.getText());
        String eMAIL = String.valueOf(eMail.getText());

        String clickable = "You have logged in " + firstName + " " + lastName + " at the email "
                + eMAIL;

        Toast.makeText(this, clickable, Toast.LENGTH_LONG).show();
    }

    public void enjoyTheOcean(View view)
    {

        String theOcean = "Swim in this ocean";
        Toast.makeText(this, theOcean, Toast.LENGTH_LONG).show();

    }

    public void aCliff(View view)
    {
        String bigCliff = "Jump off this big cliff";
        Toast.makeText(this, bigCliff, Toast.LENGTH_LONG).show();
    }
}
