<?php
$host = "localhost";
$username = "root"; 
$password = ""; 
$database = "evaccine"; 
$mysqli=mysql_connect($host,$username,$password);
mysql_select_db($database,$mysqli);
$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$dose = $_REQUEST['dose'];
$type = $_REQUEST['type'];
$date = $_REQUEST['date'];
$query = "INSERT INTO bookinfo (name, age, dose, type, date) VALUES ('$name','$age', '$dose', '$type', '$date')";
echo $query;
$res=mysql_query($query,$mysqli);
if ($res>0) {
   
    echo "Registration successful!";
    header("location:success.php");
} 
?>
