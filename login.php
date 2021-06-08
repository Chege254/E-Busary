<!DOCTYPE html>
<html>
<?php
    include "in_out server.php";
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iBursary Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/ibursary.css">
</head>

<body id="body_login">
    <div class="col-md-4 col-md-offset-4" id="login_col">
        <h1 class="text-center" id="heading_log"><i class="fa fa-info"></i><strong>Bursary</strong></h1>
        <p class="text-center text-success"><strong><em>login</em> </strong></p>
        <form method="post" action="login.php">
            <div id="logdiv"><span class="label label-default">Email: </span>
                <input class="form-control input-sm" type="email" placeholder="user@email.com" name="email" required>
            </div>
            <div id="logdiv"><span class="label label-default">Password: </span>
                <input class="form-control input-sm" type="password" placeholder="********" name="password" required>
            </div>
            <div id="logdiv">
                <p class="text-center">
                    <button class="btn btn-success btn-block btn-sm" type="submit" name="login"><strong>LOGIN</strong> </button>
                </p>
            </div>
            <div>
                <h5 class="bg-primary">Don't have an account? <a class="text-warning" href="signup.php"> <strong>SignUp</strong> here</a></h5></div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>