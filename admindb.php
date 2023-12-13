<?php
            $host = "localhost";
            $username = "root"; 
            $password = ""; 
            $database = "evaccine";
            $mysqli=mysql_connect($host,$username,$password);
            mysql_select_db($database,$mysqli); 
            $name=$_REQUEST['name'];
            $pass=$_REQUEST['pass'];
            $con= mysql_connect("localhost","root","");
            mysql_selectdb("evaccine",$con);
            $query="select * from admin where name='$name'and pass='$pass'";
            echo $query;
            $res=mysql_query($query,$mysqli);
                if(mysql_num_rows($res)>0)
                    header("location:adhome.php");
                else
                header("location:admin.php?msg=invalid user");
?>