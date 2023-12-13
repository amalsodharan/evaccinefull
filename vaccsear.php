<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="vaccsear.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"> </script>
    <script>
             function replicateTab(){
         if(window.confirm("Are you sure you want to Log Out")){
           window.location.href="index.php";
         }
         else{
            window.location.href="vaccsear.php";
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
        </header><br><br><br><br>
        <div class="first">
            <h2>Get Vaccinated in 3 Easy Steps</h2><br>
            <div class="first-1" style="padding-left: 450px;">
            <div class="cards" style="padding-left: 10px">
                        <br>
                        <div class="cards-top">
                            <img src="im1.svg" style="width: 200px;height: 100px">
                        </div>
                        <div class="cards-last">
                            <p>Book an<br><br>Appointment on <br><br>e-vaccine or walk<br><br>into any <br><br>vaccination center.</p>
                        </div><br>
            </div>
                <h2 style="margin-top: 200px;padding-left: 5px;color: rgb(0, 84, 211)">></h2>
            <div class="cards" style="padding-left: 10px">
                        <br>
                        <div class="cards-top">
                            <img src="im2.svg" style="width: 200px;height: 100px">
                        </div>
                        <div class="cards-last">
                            <p>Get Your<br><br>Vaccination safely<br><br>at the time of your<br><br>Appointment.<br><br></p>
                        </div><br>
            </div>
                <h2 style="margin-top: 200px;padding-left: 5px;color: rgb(0, 84, 211)">></h2>
            <div class="cards" style="padding-left: 10px">
                        <br>
                        <div class="cards-top">
                            <img src="im3.svg" style="width: 200px;height: 100px">
                        </div>
                        <div class="cards-last">
                            <p>Book and<br><br>Download your<br><br>Vaccination<br><br>Certificate from<br><br>e-vaccine</p>
                        </div><br>
            </div>
            </div>
        </div><br><br>
        <center>
        <div class="mid"><br><br>
            <h2>Search Your Nearest Vaccination Center</h2><br>
            <p>Get a preview list of the nearest centers and check availability of vaccination slots</p>
            <p style="font-weight: bold">Login to book your slot</p>
            <h3>By District</h3><hr>
            <form action="vaccsrchdb.php">
            <select required>
                <option>Select your District</option>
                <option value="Alappuzha">Thiruvanathapuram</option>
                <option value="Eranakulam">Kollam</option>
                <option value="Kozhikode">Pathanamthitta</option>
                <option value="Palakkad">Alappuzha</option>
                <option value="Koattyam">Kottayam</option>
            </select>
                <button class="but"><a style="text-decoration: none;color: white">Search</a></button>
            </form>
        </div><br><br><br><br>
        </center>
        <div class="row">
            <div class="col">
                <img src="side.svg">
            </div>
            <div class="col">
                <h3>Report Side Effect</h3><br>
                <p>If you have experienced any side effect after vaccination,<br> it can be reported on e-vaccine using your registered Account.</p>
                <input type="submit" value="Report Now" class="bur">
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