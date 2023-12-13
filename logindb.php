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
            $query="select * from users where username='$username'and password='$password'";
            echo $query;
            $res=mysql_query($query,$mysqli);
                if(mysql_num_rows($res)>0)
                    header("location:indexout.php");
                else
                header("location:login.php?msg=invalid user");
?>