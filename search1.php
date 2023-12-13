<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"> </script>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="search1.css">
    <style>
        .last{
            background-color: rgba(21, 98, 212, 0.89);
            height: 350px;
        }
        .last h5{
            color: white;
            padding: 40px;
        } 
        .bur{
            height: 40px;
            width: 120px;
            border-style: none;
            border-radius: 8px;
            background-color: rgb(0, 84, 211);
            color: white;
        }  
        .bar{
            letter-spacing: 1px;
            height: 45px;
            width: 250px;
            border-style: solid;
            border-radius: 18px;
            background-color: white;
            padding-left: 10px;
        }
        </style>
</head>
<body>
<header>
        <nav>
            <div class="top">
                <div class="row">
                    <div class="col">
                        <h2>e-vaccines</h2>
                    </div>
                    <div class="col-5">
                        <ul>
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="login.php">LOGIN</a></li>
                            <li><a href="#">ABOUT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header><br><br><br><br><br>
    <div class="middle">
        <h2 style="text-align: center;color: rgba(21, 98, 212, 0.89);font-size: 35px;">Search your slot</h2><br><br>
        <center>
        <form action="searchdb.php">
        <input type="text" placeholder="Enter your name" class="bar" name="name"><br><br>
        <select name="age" required>
                <option>Select your Age</option>
                <option value="12-17" value="12-17">12-17</option>
                <option value="18+" value="18+">18+</option>
                <option value="45+" value="45+">45+</option>
        </select><br><br>
        <select name="dose" required>
                <option>Select your Dose</option>
                <option value="1st dose" value="Dose 1">Dose 1</option>
                <option value="2nd dose" value="Dose 2">Dose 2</option>
        </select><br><br>
        <select name="type" required>
                <option>Select your Vaccine type</option>
                <option value="covaxin" value="Covaxin">Covaxin</option>
                <option value="covidshield" value="Covishield">Covishield</option>
        </select><br><br>  
        <select name="date" required>
                <option>Select your Vaccination date</option>
                <?php
             $host = "localhost";
             $username = "root"; 
             $password = ""; 
             $database = "evaccine";
             $mysqli=mysql_connect($host,$username,$password);
             mysql_select_db($database,$mysqli); 
            $qry="select * from slot";
            $result=mysql_query($qry,$mysqli);


        ?>
        <?php
        while($row=mysql_fetch_array($result))
                        {
        ?>
                <option value="<?php echo $row[1].' '.$row[2]  ?>"  <?php if($row[3]=='VACCANT') {   }else { ?> disabled <?php } ?>><?php echo $row[1].' '.'<br>'.$row[2]  ?></option>
        
        <?php
                        }
        ?>
        </select>
        <br><br><br>
        <input type="submit" value="Book Now" class="but"><br><br><br><br>
        </form>
        </center>
    </div>
    <div class="row">
            <div class="col">
                <img src="img4.svg">
            </div>
            <div class="col">
                <h3 style="color: rgb(0, 84, 211);">Vaccination Date Correction</h3><br>
                <p style="color: rgb(0, 84, 211);">If the date printed on your vaccination certificate differs from the actual date of<br> vaccine administration, you may raise a request for correction of the same by<br> submitting a valid proof of correct vaccination date.</p>
                <input type="submit" value="Update Now" class="bur">
            </div>
    </div><br><br>
    <div class="last">
            <h5>For Grievances and Feedback :<br> evaccine@gmail.com<br><br>
            Ph no : 0481-246861<br><br>
            Privacy Policy | Terms of Service<br><br>
            Copyright © 2021 e-vaccine. All Rights Reserved
            </h5> 
    </div>
</body>
</html>