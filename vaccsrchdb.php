<?php
            $host = "localhost";
            $username = "root"; 
            $password = ""; 
            $database = "evaccine";
            $mysqli=mysql_connect($host,$username,$password);
            mysql_select_db($database,$mysqli); 
            $username=$_REQUEST['username'];
            $password=$_REQUEST['password'];
            $con= mysql_connect("localhost","root","");
            mysql_selectdb("evaccine",$con);
            $query="select * from login";
            $res=mysql_query($query,$mysqli);
                    if($res>0)
                    echo "Registration successful!";
                    header("location:search1.php");
?>