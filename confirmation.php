<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"> </script>
    <title>Document</title>
    <link rel="stylesheet" href="confirmation.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
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
        </header><br><br><br><br>
        <center>
        <div class="imo">
        <img src="logo.svg" height="130px" width="130px" style="padding-bottom: 8px;">
        </div><br>
        <div class="content"><br><br>
            <form action="confirmdb.php" method="post">
                <input type="text" placeholder="Enter your name" class="bar" name="name" required><br><br>
                <input type="password" placeholder="Enter your phone number" class="bar" name="phone" required><br><br>
                <input type="number" placeholder="Enter your Age" class="bar" name="age" required><br><br>
                <select>
                <option>Select your Dose</option>
                <option value="1st dose" name="dose">1st Dose</option>
                <option value="2nd dose" name="dose">2nd Dose</option>
            </select><br><br>
            <input type="date" id="datepicker" name="datepicker" class="date-picker"><br><br>
                <input type="submit" value="Register" class="but"><br><br>
            </form>
        </div>
        </center><br><br>
</body>
</html>