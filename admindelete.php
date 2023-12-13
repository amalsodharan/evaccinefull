<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"> </script>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
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
        .content{
            border-style: solid;
            border-radius: 8px;
            background-color: #00ccff;
            border-color: #00ccff;
            height: 350px;
            width: 400px;
            text-align: center;
        }
        .bar{
            text-align: center;
            letter-spacing: 1px;
            height: 45px;
            width: 300px;
            border-style: none;
            border-radius: 8px;
            background-color: white;
        }
        .but{
            height: 40px;
            width: 90px;
            border-style: none;
            border-radius: 8px;
            background-color: rgb(0, 84, 211);
            color: white;
        }
        .imo{
            width: 400px;
            height: 50px;
        }
        .mid{
            background-color: rgba(21, 98, 212, 0.89);
        }
        .last{
            background-color: white;
            height: 350px;
        }
        .last h5{
            color: rgba(21, 98, 212, 0.89);
            padding: 40px;
        }
        .bottom{
            background-color: black;
            height: 50px;
            width: 100%;
            position: fixed;
        }
        nav .bottom ul li a{
            text-decoration: none;
            color: white;
        }
        nav .bottom ul li a:hover{
            color: yellow;
        }
    </style>
    <script>
             function replicateTab(){
         if(window.confirm("Are you sure you want to Log Out")){
           window.location.href="index.php";
         }
      }
        </script>
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
                            <li><a href="#" onclick="replicateTab()">LOG OUT</a></li>
                            <li><a href="#">ABOUT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header><br><br><br>
    <div class="second">
        <nav>
            <div class="bottom">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-6">
                        <ul>
                            <li><a href="adhome.php">Dashboard</a></li>
                            <li><a href="adminadd.php">Add user</a></li>
                            <li><a href="admindelete.php">Del user</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div><br><br>
    <div class="mid">
    <center>
        <br><br><br>
        <h2 style="color: white;font-size: 40px;">ADMIN USER DELETE</h2>
        <div class="imo">
        <img src="logo.svg" height="130px" width="130px" style="padding-bottom: 8px;">
        </div><br>
        <div class="content"><br><br>
                <form action="admindeletedb.php" method="post">
                    <input type="text" placeholder="Enter Username to be Deleted" class="bar" name="username" required><br><br><br>
                    <input type="submit" value="Delete" class="but"><br><br><br>
                </form>
        </div><br><br><br><br><br><br>
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