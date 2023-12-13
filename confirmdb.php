<?php
$host = "localhost";
$username = "root"; 
$password = ""; 
$database = "evaccine"; 
$mysqli=mysql_connect($host,$username,$password);
mysql_select_db($database,$mysqli);
$name = $_REQUEST['name'];
$mobile = $_REQUEST['mobile'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$age = $_REQUEST['age'];
$dob = $_REQUEST['dob'];
$gender = $_REQUEST['gender'];
$query = "INSERT INTO users (name, mobile, username, password,  dob, age, gender) VALUES ('$name', '$mobile', '$username', '$password',  '$dob',$age, '$gender')";
echo $query;
$res=mysql_query($query,$mysqli);
if ($res>0) {
   
    echo "Registration successful!";
    header("location:login.php");
} 
?>
