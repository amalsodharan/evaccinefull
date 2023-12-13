<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"> </script>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script>
             function replicateTab(){
         if(window.confirm("Are you sure you want to Log Out")){
           window.location.href="index.php";
         }
      }
        </script>
    <style>
        body{
            font-family: sans-serif;
        }
        nav ul{
            float: right;
        }
        nav ul li{
            list-style: none;
            display: inline-block;
            padding: 20px;
            letter-spacing: 2px;
        }
        .top{
            background-color: white;
            height: 80px;
            width: 100%;
            position: fixed;
        }
        nav h2{
            padding-top: 8px;
            padding-left: 10px;
            font-size: 35px;
            color: rgba(21, 98, 212, 0.89);
        }
        nav ul li a{
            text-decoration: none;
            color: rgba(21, 98, 212, 0.89);
        }
        nav ul li a:hover{
            color: red;
        }
        .last{
            background-color: white;
            height: 350px;
        }
        .last h5{
            color: rgba(21, 98, 212, 0.89);
            padding: 40px;
        }
        .mid{
            background-color: rgba(21, 98, 212, 0.89);
        }
        .space{
            background-color: white;
            padding: 30px;
            width: 300px;
            border-radius: 8px;
        }
        .btn{
            width: 190px;
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
                            <li><a href="indexout.php">HOME</a></li>
                            <li><a href="#" onclick="replicateTab()">LOG OUT</a></li>
                            <li><a href="about.php">ABOUT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header><br><br><br>
    <div class="mid">
        <br><br><br>
        <h2 style="color: white;text-align: center">ADMIN DASHBOARD</h2><br>
        <div class="row">
            <div class="col">
                <img src="child.svg" style="height: 250px;width: 250px;float: right;">
            </div>
            <div class="col"><br>
                <div class="space">
                    <center>
                    <a href="userdisplay.php"><button class="btn btn-outline-dark">View user accounts</button></a><br><br>
                    <a href="adminadd.php"><button class="btn btn-outline-dark">Add user account</button></a><br><br>
                    <a href="bookdisplay.php"><button class="btn btn-outline-dark">View booked vaccines</button></a><br><br>
                    <a href="admindelete.php"><button class="btn btn-outline-dark">Delete user account</button></a>
                    <br><br><br><br>
                    </center>
                </div>
            </div>
        </div>
        <br><br><br>
    </div>
    <div class="last">
            <h5>For Grievances and Feedback :<br> evaccine@gmail.com<br><br>
            Ph no : 0481-246861<br><br>
            Privacy Policy | Terms of Service<br><br>
            Copyright © 2021 e-vaccine. All Rights Reserved
            </h5> 
    </div>
</body>
</html>