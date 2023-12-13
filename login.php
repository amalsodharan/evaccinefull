<html>
    <head>
        <meta charset="UTF-8">
        <title>login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"> </script>
        <link rel="stylesheet" href="login.css">
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
                            <li><a href="admin.php">ADMIN</a></li>
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
            <form action="logindb.php" method="post">
                <input type="text" placeholder="Enter your username" class="bar" name="username"><br><br><br>
                <input type="password" placeholder="Enter your password" class="bar" name="password"><br><br>
                <label class="fld"><a href="forget.php" style="text-decoration: none"><b>Forget Password?</b></a></label><br><br><br>
                <input type="submit" value="Login" class="but"><br><br>
                <font color=red><?php

                   if(isset($_REQUEST['msg']))
                    echo $_REQUEST['msg'];
                ?></font>
            </form>
            <label class="fld" style="color: blueviolet">Don't have an account?
                    <a href="#" style="text-decoration: none" data-bs-toggle="modal" data-bs-target="#mymodal"><b>Register</b></a>
            </label>
            <div class="modal fade" id="mymodal">
            <div class="modal-dialog">
                <div class="modal-content" style="background-color: #00ccff">
                    <div class="modal-header">
                        <h2 class="modal-title" style="color: white">Sign Up</h2>
                        <a href="login.php"><button class="btn-close"></button></a>
                    </div>
                    <div class="modal-body">
                        <form action="newdb.php">
                            <div class="mt-2">
                                <input type="text" placeholder="Enter your name" class="form-control" name="name" required style="letter-spacing: 1px">
                            </div>
                            <div class="mt-4">
                                <input type="text" placeholder="Mobile Number or Email id" class="form-control" name="mobile" required style="letter-spacing: 1px">
                            </div>
                            <div class="mt-4">
                                <input type="text" placeholder="Enter your Username" class="form-control" required name="username" style="letter-spacing: 1px">
                            </div>
                            <div class="mt-4">
                                <input type="password" placeholder="New Password" class="form-control" required name="password" style="letter-spacing: 1px">
                            </div>
                            <div class="mt-4">
                                <input type="number" placeholder="Enter your Age" class="form-control" required name="age" style="letter-spacing: 1px">
                            </div>
                            <div class="mt-4">
                                <input type="date" placeholder="dd/mm/yy" class="form-control" required name="dob" style="letter-spacing: 1px">
                            </div>
                            <div class="mt-4">
                            <label class="form-label" style="padding-right: 30px;color: white">Gender?</label><br>
                            <b style="color: white">Female </b><input type="radio" placeholder="female" name="gender" value="female">
                            <b style="color: white">Male </b><input type="radio" placeholder="male" name="gender" value="male">
                            <b style="color: white">Custom </b><input type="radio" placeholder="other" name="gender" value="other"><br><br>
                            </div>
                            </div>
                    <div class="modal-footer">
                        <input type="submit" value="Sign up" class="but">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </center><br><br>
        <div class="last">
            <h5>For Grievances and Feedback :<br> evaccine@gmail.com<br><br>
            PH : 0481-27631<br><br>
            Privacy Policy | Terms of Service<br><br>
            Copyright © 2021 e-vaccine. All Rights Reserved
            </h5> 
        </div>
    </body>
</html>