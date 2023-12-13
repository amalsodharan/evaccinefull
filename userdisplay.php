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
           window.location.href="admin.php";
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
    <div class="mid"><br><br>
        <h2 style="color: white;font-size: 35px;text-align: center">USER ACCOUNTS</h2>
    <br><br>
    <table class="table table-dark">
    <thead>
    <tr>
        <th>Sl no</th>
        <th>Name</th>
        <th>Mobile/Email</th>
        <th>Username</th>
        <th>Date Of Birth</th>
        <th>Age</th>
        <th>Gender</th>
    </tr>
    </thead>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "evaccine";
    $connection = new mysqli($servername, $username, $password, $dbname);
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Query to retrieve user appointments
    $query = "SELECT * FROM users"; // Replace 'appointments_table' with your actual table name

    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tbody><tr>";
            echo "<td>" . $row['slno'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['mobile'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['dob'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "</tr></tbody>";
        }
    } else {
        echo "<tbody><tr><td colspan='3'>No Users found</td></tr></tbody>";
    }

    // Close database connection
    $connection->close();
    ?>
</table>
    <br><br><br><br><br>
    <div class="row">
        <div class="col">
            <img src="pic3.svg" style="width: 250px;height: 250px;float: right;">
        </div>
        <div class="col"><br><br><br><br>
            <h4 style="font-size: 18px;color: white;"><i>Misinformation or distrust of vaccines can be like a contagion that can spread as fast as measles.<br>-Theresa Tam</i></h4>
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