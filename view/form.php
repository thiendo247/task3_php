<?php include "login.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login For Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!--CND Jquery-->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="js/loginValidate.js" type="text/javascript"></script>
    <style>
        .error {
            color: red;
            margin-top: 34px;
        }
    </style>
</head>

<body style="background-color: rgb(93, 168, 162);">
    <div class="container px-4" style="border: 2px solid aqua; margin-top: 150px">
        <div class="row gx-5">
            <h1 style="text-align: center;">Login SV</h1>

            <form class="form-horizontal" id="loginForm" method="POST" action="login.php">
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="mail" placeholder="name@example.com">
                    <label for="mail"><i class="bi-envelope"></i> Email address</label>
                    <p id="err1" style="color: red;"></p>
                </div>
                <div class="form-floating">
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Password">
                    <label for="pass"><i class="bi-shield-lock"></i> Password</label>
                    <p id="err2" style="color: red;"></p>
                </div>
                <div class="row" style="text-align: center;">
                    <div class="col-md-6 col-sm-6">
                        <label><input type="checkbox">Remember me</label>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <a href="#">Forgot Password</a>
                    </div>


                </div>
                <div style="text-align: center;">
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                </div>
            </form>


        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>