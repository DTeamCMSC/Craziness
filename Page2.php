<?php

session_start();

//Damola Adediran
//CMSC331
//Advising project 

$_SESSION['id'] = $_POST['Id'];
$_SESSION['advD'] = $_POST['advD'];
$_SESSION['advis'] = $_POST['advis'];
?>
<html>
<head>
<body>
<?php 
$host="studentdb.gl.umbc.edu"; // Host name 
$username="dadedir1"; // Mysql username 
$password="dadedir1"; // Mysql password 
$db_name="dadedir1"; // Database name 
$tbl_name="Student"; // Table name 
$tbl_name2=$_SESSION['advD'];

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
 
$name = $_POST['name'];
$adv = $_POST['advis'];
$id = $_POST['Id'];
$maj = $_POST['major'];

$results = mysql_query("SELECT time FROM $tbl_name2");
	

	// I was originally trying to call the table functions for that day and then make
	// a consistant drop box for times so people don't have to much freedom to umm break it!
	//$storeArray = Array();
	//$time = Array('"9:00","9:30","10:00","10:30","11:00","11:30","12:00","12:30","1:00","1:30","2:00","2:30","3:00","3:30"');
	//while ($row = mysql_fetch_array($results, MYSQL_ASSOC)) 
	//{
	//    $storeArray[] =  $row['time'];  
	//}
	//$i = 0;
	//while ($storeArray[$i] != false)
	//{

	//if (in_array($storeArray[$i], $time))
        //{
        //unset($time[$storeArray[$i]]);
        //$array = array_values($time);

 	//}

	//}
 
  //echo '<select name="time">';

   //$j = 0;
   //while($array[$j] == true)
   //{
   //echo "<option value=$array[$j]>$array[$j]</option>";
   //$j++;
   //}
   //echo "</select>";
   //echo "<br>";
   //echo '<input type="submit">';


// Insert data into mysql 
echo "<br><br>";
$sql = "INSERT INTO $tbl_name(Name,ID,Major,Adviser,day) VALUES ('$name','$id','$maj','$adv','$tbl_name2')";
$result = mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "You have been added \n, Please specify a day and time";
echo "<BR>";
echo "<a href='Index.php'>Back to main page</a>";
}

else {
echo "Form has been filled wrong";
echo "<BR>";
echo "<a href='Index.php'>Back to main page</a>";
}


//Trying a different approach for checking time
echo "<br><br>";
echo "Filled time for that day";
echo "<br><br>";

$results = mysql_query("SELECT time FROM $tbl_name2");
$storeArray = Array();
while ($row = mysql_fetch_array($results, MYSQL_ASSOC)) 
{
    $storeArray[] =  $row['time'];  
}
$i = 0;
while (empty($result))
{
echo $storeArray[$i];
echo "<BR>";
$i++;
}


?> 
<br><br>

Time preffered:
<br>
<form action="Page3.php" method="post">
<select name="time">
<option value="9:00" selected>9:00</option>
<option value="9:30">9:30</option>
<option value="10:00">10:00</option>
<option value="10:30">10:30</option>
<option value="11:00">11:00</option>
<option value="11:30">11:30</option>
<option value="12:00">12:00</option>
<option value="12:30">12:30</option>
<option value="1:00">1:00</option>
<option value="1:30">1:30</option>
<option value="2:00">2:00</option>
<option value="2:30">2:30</option>
<option value="3:00">3:00</option>
<option value="3:30">3:30</option>
</select>
<input type="submit">
</form>
</body>
</head>
</html>