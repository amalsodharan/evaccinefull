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
                background-color: rgba(21, 98, 212, 0.89);
                height: 80px;
                width: 100%;
                position: fixed;
        }
        nav h2{
                padding-top: 8px;
                padding-left: 10px;
                font-size: 35px;
                color: white;
        }
        nav ul li a{
                text-decoration: none;
                color: white;
        }
        nav ul li a:hover{
                color: red;
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
                            <li><a href="indexout.php">HOME</a></li>
                            <li><a href="#" onclick="replicateTab()">LOG OUT</a></li>
                            <li><a href="#">ABOUT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header><br><br><br><br><br>
    <div class="mid"><br><br><br>
        <h2 style="color: rgba(21, 98, 212, 0.89);text-align: center;font-size: 45px;">Your Vaccine has been Booked Succesfully</h2><br><br>
        <center>
        <img src="vacc.jpg" style="width: 550px;height: 400px;"><br><br>
        </center>
        <h3 style="text-align: center;color: rgba(21, 98, 212, 0.89);font-family: ShelleyVolante BT;">Looking after my Health today gives me a Better hope for Tomorrow</h3>
    </div>
</body>
</html>