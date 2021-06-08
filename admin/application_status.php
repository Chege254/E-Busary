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
    <title>iBursary - Status</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/ibursary.css">
</head>

<body>
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
    <div class="container" id="container" style="height:50em">
        <div class="row">
            <div class="col-md-12" id="nav_col">
                <hr>
                <ul class="nav nav-tabs nav-justified">
                    <li><a href="index_admin.php">Home </a></li>
                    <li><a href="view_application.php"> Bursary Applications</a></li>
                    <li class="active"><a href="application_status.php">Application Status</a></li>
                    <li><a href="logout.php"><strong> </strong><i class="fa fa-sign-out"></i><strong> Logout</strong></a></li>
                </ul>
            </div>
            <div class="col-md-12">
                <hr>
                <h3 class="text-uppercase text-center text-success"><strong>Bursary APPLICATION Status</strong></h3>
                <hr>
                <p class="text-left"><strong>* This interface allows the Administrator to view Records of both Approved and Rejected Bursary Applications.</strong></p>
                <hr>
            </div>
        </div>
        <div class="row" id="btnstatus">
            <form method="post" action="application_status.php">
            <div class="col-md-4 col-md-offset-1 text-center" id="status">
                <div id="div_status">
                    <button class="btn btn-primary btn-block" type="submit" name="approvedbtn">View <strong>Approved</strong> Applications <i class="fa fa-thumbs-o-up"></i></button>
                </div>
            </div>
            <div class="col-md-2 text-center"></div>
            <div class="col-md-4 text-center" id="status">
                <div id="div_status">
                    <button class="btn btn-danger btn-block" type="submit" name="rejectbtn">View <strong>Rejected</strong> Applications <i class="fa fa-thumbs-o-down"></i></button>
                </div>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
                </form>
        </div>

        <div class="row">
            <div class="col-md-12">
                
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover table-condensed">
                        <?php
                        //approved applications
                if(isset($_POST["approvedbtn"])){
                        $sql="SELECT * FROM `applications` where `status` = 'APPROVED'  
ORDER BY `applications`.`application_time` DESC";
            $query=mysqli_query($connect,$sql) or die(mysqli_error($connect));
                        ?>
                        <thead class="text-center">
                                    <tr><h4 class="text-center"><span class="text-success"><strong>Approved</strong> </span> <strong>Applications</strong></h4></tr>
                            <tr class="active text-center">
                                <th class="text-center">Applicant:</th>
                                <th class="text-center">University Details:</th>
                                <th class="text-center">Admission No.:</th>
                                <th class="text-center">Fee Payable:</th>
                                <th class="text-center">Fee Balance:</th>
                                <th class="text-center">Application Date:</th>
                                <th class="text-center">Applicant:</th>
                            </tr>
                        </thead>
                                <?php
                         while ($row=mysqli_fetch_assoc($query)){
                $applicant=$row["applicant_name"];
                    $dob=$row["birth_date"];
                    $university=$row["university_name"];
                    $admno=$row["admission_number"];
                    $fpay=$row["fee_payable"];
                    $fbal=$row["fee_balance"];
                    $gender=$row["sex"];
                    $appdate=$row["application_date"];
                    $unimail=$row["university_email"];
                    $appid=$row["application_id"]
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo "<strong style='color:brown'>". $applicant. " </strong>"." (".$gender.")". "<br>" . "<strong>dob: </strong>" . $dob;  ?></td>
                                
                                <td><?php echo $university . "<br>" . "<span style='color:brown'>" .$unimail. "</span>" ;  ?></td>
                                <td><?php echo $admno ;    ?></td>
                                <td><?php echo $fpay ;   ?></td>
                                <td><?php echo "<span style='color:brown'>". $fbal. "</span>" ; ?></td>
                                <td><?php echo $appdate ; ?></td>
                                <td>
                                    <?php echo $gender ; ?>
                                </td>
                            </tr>
                        </tbody>
                              <?php
                         };
                        }
                       //rejected applications
                        else if(isset($_POST["rejectbtn"])){
                        $sql="SELECT * FROM `applications` where `status` = 'REJECTED'  
ORDER BY `applications`.`application_time` DESC";
            $query=mysqli_query($connect,$sql) or die(mysqli_error($connect));
                        ?>
                        <thead class="text-center">
                            <tr><h4 class="text-center"><span class="text-danger"><strong>Rejected</strong> </span> <strong>Applications</strong></h4></tr>
                            <tr class="active text-center">
                                <th class="text-center">Applicant:</th>
                                <th class="text-center">University Details:</th>
                                <th class="text-center">Admission No.:</th>
                                <th class="text-center">Fee Payable:</th>
                                <th class="text-center">Fee Balance:</th>
                                <th class="text-center">Application Date:</th>
                                <th class="text-center">Applicant:</th>
                            </tr>
                        </thead>
                                <?php
                         while ($row=mysqli_fetch_assoc($query)){
                $applicant=$row["applicant_name"];
                    $dob=$row["birth_date"];
                    $university=$row["university_name"];
                    $admno=$row["admission_number"];
                    $fpay=$row["fee_payable"];
                    $fbal=$row["fee_balance"];
                    $gender=$row["sex"];
                    $appdate=$row["application_date"];
                    $unimail=$row["university_email"];
                    $appid=$row["application_id"]
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo "<strong style='color:brown'>". $applicant. " </strong>"." (".$gender.")". "<br>" . "<strong>dob: </strong>" . $dob;  ?></td>
                                
                                <td><?php echo $university . "<br>" . "<span style='color:brown'>" .$unimail. "</span>" ;  ?></td>
                                <td><?php echo $admno ;    ?></td>
                                <td><?php echo $fpay ;   ?></td>
                                <td><?php echo "<span style='color:brown'>". $fbal. "</span>" ; ?></td>
                                <td><?php echo $appdate ; ?></td>
                                <td>
                                    <?php echo $gender ; ?>
                                </td>
                            </tr>
                        </tbody>
                              <?php
                         };
                        };
                        ?>
                    </table>
                </div>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
        </div>
  
    </div>
    <div class="row" id="footer_row">
        <div class="col-md-12">
            <footer id="footer">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center"><span><i class="fa fa-info"></i></span><strong>Bursary </strong><i class="fa fa-copyright"></i> <strong>2020</strong></h4>
                    </div>
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