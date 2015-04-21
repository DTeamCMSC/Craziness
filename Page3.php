<?php
//Damola Adediran
//CMSC331
//Advising project 


session_start();

?>
<!DOCTYPE html>
<html>
<head> 
<body>
<?php 
$host="studentdb.gl.umbc.edu"; // Host name 
$username="dadedir1"; // Mysql username 
$password="dadedir1"; // Mysql password 
$db_name="dadedir1"; // Database name 
$tbl_name="Student"; // Table name 
$tbl_name2=$_SESSION['advD']; // Connected manually since common file was acting buggy





mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$time = $_POST['time'];
$advis = $_SESSION['advis'];
$id = $_SESSION['id'];


$sql_1 = "INSERT INTO $tbl_name2(Id,time,AdvisorPre) VALUES ('$id','$time','$advis')";
$results3 = mysql_query($sql_1);

if($results3){
echo "You have been added Student";
echo "<BR>";
echo "<a href='Index.php'>Back to main page</a>";
}

else {
echo "Form has been filled wrong";
echo "<BR>";
echo "<a href='Index.php'>Back to main page</a>";
}
?>
<?php 
// close connection 
mysql_close();
?>

</body>
</head>
</html>




