<!DOCTYPE html>
<html>
<?php
include "../in_out server.php";
    $user=$_SESSION["idm"];
  if(isset($_SESSION["idm"])){
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ibursary form</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/ibursary.css">
</head>

<body id="body">
        <div class="row" id="header_row">
        <div class="col-md-5 col-md-offset-1" id="logo_col">
            <h1 class="text-center"><a class="text-primary" href="#" id="logo"><strong> </strong><i class="fa fa-info"></i><strong>Bursary</strong></a></h1></div>
        <div class="col-md-6">
            <div>
                <p class="text-center">Contact Us:</p>
            </div>
            <div>
                <p class="text-center"><strong>+254 746078042</strong></p>
            </div>
            <div>
                <h3 class="text-center text-primary"><a href="twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> <span> . </span><a href="facebook.com" target="_blank"><i class="fa fa-facebook-square"></i></a></h3></div>
        </div>
    </div>
    <div class="container" id="container" style="height:40em">
        <div class="row">
            <div class="col-md-4" id="nav_col">
                <hr>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="index.php">Home </a></li>
                    <li><a href="form.php">Apply Bursary</a></li>
                    <li class="active"><a href="notification.php">Notifications <i class="fa fa-comments-o"></i></a></li>
                    <li><a href="logout.php"><strong> </strong><i class="fa fa-sign-out"></i><strong> Logout</strong></a></li>
                </ul>
                <hr>
            </div>
            <div class="col-md-8">
                <hr>
                <h3 class="text-left text-primary"><strong>Notifications: </strong><i class="fa fa-comments-o"></i></h3>
                <hr>
                <div>
                    <h3 class="text-lowercase text-center text-muted">inbox empty <i class="fa fa-inbox"></i></h3>
                </div>
                <div>
                     <div class="table-responsive">
                        <table class="table table-striped table-bordered table-condensed">
                            <thead>
                                <tr class="info">
                                    <th>Message </th>
                                    <th>Date </th>
                                </tr>
                            </thead>
                    <?php
      $sql8="select message, message_date, userlog from messages join applications using (application_id) where userlog = '$user'";
      $query8=mysqli_query($connect,$sql8) or die(mysqli_error($connect));
      while($result8=mysqli_fetch_assoc($query8)){
      $message=$result8["message"];
          $mdate=$result8["message_date"];
      
      ?>
                            <tbody>
                                <tr>
                                    <td> <?php echo $message ?></td>
                                    <td>
                                    <?php echo $mdate  ?></td>
                                </tr>
                            </tbody>
                                            <?php
  };
      ?>
                        </table>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <footer id="footer">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center"><span><i class="fa fa-info"></i></span><strong>Bursary </strong><i class="fa fa-copyright"></i> <strong>2020</strong></h4></div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<?php
  }
    else header("location:../index.php");
      ?>
</html>