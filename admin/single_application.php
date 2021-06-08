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
    <style type="text/css">
        #input {
            color: brown;
            font-weight: 500;
            font-family: monospace;
            font-size: 14.5px;
        }
    </style>
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
    <div class="container" id="container">
        <div class="row">
            <div class="col-md-12" id="nav_col">
                <hr>
                <ul class="nav nav-tabs nav-justified">
                    <li><a href="index_admin.php">Home </a></li>
                    <li class="active"><a href="view_application.php"> Bursary Applications</a></li>
                    <li><a href="application_status.php">Application Status</a></li>
                    <li><a href="#"><strong> </strong><i class="fa fa-sign-out"></i><strong> Logout</strong></a></li>
                </ul>
            </div>
            <div class="col-md-12">
                <hr>
                <h3 class="text-uppercase text-center text-success"><strong>Single Bursary APPLICATION</strong></h3>
                <hr>
                <p class="text-left text-warning"><strong>* The form below shows all single-applicant details received. As an administrator, you can APPROVE or REJECT the application.</strong></p>
                <hr>
            </div>
            <div class="col-md-12">
                <?php
                $application=$_GET["id"];
                
            $sql="SELECT * FROM `applications` WHERE `application_id` LIKE '$application' or application_id = '$application' ORDER BY `application_time` DESC LIMIT 1";
            $query=mysqli_query($connect,$sql) or die(mysqli_error($connect));
                 while ($row=mysqli_fetch_assoc($query)){
                     //application form
    $fullname=$row["applicant_name"];
    $gender=$row["sex"];
    $dob=$row["birth_date"];
    $idnumber=$row["id_number"];
    $email=$row["email"];
    $phone_number=$row["phone_number"];
    //GUARDIAN DATA
    $guardian=$row["guardian_name"];
    $guardian_id=$row["guardian_id"];
    $guardian_phone=$row["guardian_phone"];
    $guardian_rel=$row["guardian_relationship"];
    //university data
    $university=$row["university_name"];
    $umail=$row["university_email"];
    $ubox=$row["university_box"];
    $uphone=$row["university_phone"];
    $admyear=$row["admission_year"];
    $admno=$row["admission_number"];
    $study_year=$row["year_of_study"];
    $ucategory=$row["university_category"];
    //FEE DATA
    $fee_pay=$row["fee_payable"];
    $fee_paid=$row["fee_paid"];
    $fee_bal=$row["fee_balance"];
    $helb=$row["helb"];
    //BANK DATA
    $bank=$row["bank_name"];
    $branch=$row["bank_branch"];
    $account=$row["bank_account"];
    //APPLICATION ID
    $app_id=$row["application_id"];
    $appdate=$row["application_time"];
                 };
            ?>
                <form action="single_application.php" method="post" id="app_form">
                    <div class="form-group">
                        <div class="col-md-4" style="margin: 10px"><span class="label label-default">Application date:</span>
                            <input id="input" class="form-control input-sm" type="text" name="appdate" readonly value="<?php echo $appdate;  ?>">
                        </div>
                        <div class="col-md-4" style="margin: 10px"><span class="label label-default">Application id:</span>
                            <input id="input" class="form-control input-sm" type="text" name="appid" readonly value="<?php echo $app_id;  ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                    <h4 class="text-success"><strong>Personal Data:</strong></h4>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label">Fullnames :</label>
                            <input id="input" class="form-control input-sm" type="text" name="fullname" readonly value="<?php echo $fullname;  ?>">
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Gender: </label>
                            <input id="input" class="form-control input-sm" type="text" name="gender" readonly value="<?php echo $gender;  ?>">
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Birth date:</label>
                            <input id="input" class="form-control input-sm" type="text" name="dob" readonly value="<?php echo $dob;  ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="control-label">ID Number:</label>
                            <input id="input" class="form-control input-sm" type="text" readonly value="<?php echo $idnumber;  ?>">
                        </div>
                        <div class="col-md-4">
                            <label class="control-label">Email:</label>
                            <input id="input" class="form-control input-sm" type="email" readonly value="<?php echo $email;  ?>" name="email">
                        </div>
                        <div class="col-md-4">
                            <label class="control-label">Phone number:</label>
                            <input id="input" class="form-control input-sm" type="tel" name="phone" readonly value="<?php echo $phone_number;  ?>">
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label class="control-label">Guardian names: </label>
                            <input id="input" class="form-control input-sm" type="text" readonly value="<?php echo $guardian;  ?>">
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Guardian's ID number: </label>
                            <input id="input" class="form-control input-sm" type="text" readonly value="<?php echo $guardian_id;  ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label class="control-label">Guardian's Phone: </label>
                            <input id="input" class="form-control input-sm" type="text" readonly value="<?php echo $guardian_phone;  ?>">
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Relationship to Guardian : </label>
                            <input id="input" class="form-control input-sm" type="text" readonly value="<?php echo $guardian_rel;  ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-success"><strong>University Details:</strong></h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label class="control-label">Name of University/College: </label>
                            <input id="input" class="form-control input-sm" type="text" name="university" readonly value="<?php echo $university;  ?>">
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">College/University Email: </label>
                            <input id="input" class="form-control input-sm" type="text" name="umail" readonly value="<?php echo $umail;  ?>">
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">P.O BOX: </label>
                            <input id="input" class="form-control input-sm" type="text" readonly value="<?php echo $ubox;  ?>">
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Tel. No: </label>
                            <input id="input" class="form-control input-sm" type="text" name="uphone" readonly value="<?php echo $uphone;  ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label class="control-label">Year of Admission: </label>
                            <input id="input" class="form-control input-sm" type="text" readonly value="<?php echo $admyear;  ?>">
                        </div>
                        <div class="col-md-4">
                            <label class="control-label">Admission Number: </label>
                            <input id="input" class="form-control input-sm" type="text" name="admno" readonly value="<?php echo $admno;  ?>">
                        </div>
                        <div class="col-md-2">
                            <label class="control-label">Year of Study: </label>
                            <input id="input" class="form-control input-sm" type="text" name="yos" readonly value="<?php echo $study_year;  ?>">
                        </div>
                        <div class="col-md-4">
                            <label class="control-label">University Category:</label>
                            <input id="input" class="form-control input-sm" type="text" readonly value="<?php echo $ucategory;  ?>">
                        </div>
                    </div>
                    <div class="form-group"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-success"><strong>Fees Payable:</strong></h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label class="control-label">Total fees payable: </label>
                            <input id="input" class="form-control input-sm" type="text" name="fpay" placeholder="Kshs." readonly value="<?php echo $fee_pay;  ?>">
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Total fees paid: </label>
                            <input id="input" class="form-control input-sm" type="text" name="fpaid" placeholder="Kshs." readonly value="<?php echo $fee_paid;  ?>">
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Balance: </label>
                            <input id="input" class="form-control input-sm" type="text" name="fbal" placeholder="Kshs." readonly value="<?php echo $fee_bal;  ?>">
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Amount received from HELB: </label>
                            <input id="input" class="form-control input-sm" type="text" placeholder="Kshs." readonly value="<?php echo $helb;  ?>">
                        </div>
                    </div>
                    <div class="form-group"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-success"><strong>Account Particulars:</strong></h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-5">
                            <label class="control-label">Name of Bank: </label>
                            <input id="input" class="form-control input-sm" type="text" name="bank" readonly value="<?php echo $bank;  ?>">
                        </div>
                        <div class="col-md-4">
                            <label class="control-label">Branch: </label>
                            <input id="input" class="form-control input-sm" type="text" name="branch" readonly value="<?php echo $branch;  ?>">
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Account Number:</label>
                            <input id="input" class="form-control input-sm" type="text" name="account" readonly value="<?php echo $account;  ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-6 text-center">
                            <button class="btn btn-success" type="submit" id="single_btn" name="approve"><strong>Approve Application</strong></button>
                        </div>
                        <div class="col-md-6 text-center">
                            <button class="btn btn-danger btn-sm" type="submit" id="single_btn" name="reject"><strong>Reject Application</strong></button>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                </form>
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

</html>
<!--Accept Application Data-->
<?php
if(isset($_POST['approve'])){

    //APPLICATION ID
    $app_id=$_POST["appid"];
    $names=$_POST["fullname"];
     $appdate=$_POST["appdate"];
    $email=$_POST["email"];
    $university=$_POST["university"];
     $status=strtoupper("approved");
    $message="Congratulations, your bursary application for ". $names . " to ". $university . " university/college has been ".$status;
   
    
    //UPDATE APPLICATIONS TABLE
     $sql1="UPDATE `applications` SET `status` = '$status', `status_date` = current_timestamp() WHERE `applications`.`application_id` = '$app_id';";
    $query1=mysqli_query($connect,$sql1) or die(mysqli_error($connect));
    //insert into messages
    $sql_="INSERT INTO `messages` (`application_id`, `email`, `message`) VALUES ('$app_id', '$email', '$message');";
    $query_=mysqli_query($connect,$sql_) or die (mysqli_error($connect));
    
    if ($query1 == true){
         echo "<script type='text/javascript'>alert('Application Approved'); window.location='view_application.php';</script>";
        
    };
};
//Reject application
if(isset($_POST['reject'])){

    //APPLICATION ID
    $app_id=$_POST["appid"];
    $names=$_POST["fullname"];
    $email=$_POST["email"];
    $university=$_POST["university"];
    $status=strtoupper("rejected");
    $message="Unfortunately, your bursary application for ". $names . " to ". $university . " university/college has been ".$status;
    
    //UPDATE APPLICATIONS TABLE
    $sql2="UPDATE `applications` SET `status` = '$status', `status_date` = current_timestamp() WHERE `applications`.`application_id` = '$app_id';";
    $query2=mysqli_query($connect,$sql2) or die(mysqli_error($connect));
    //Insert into messages
    $sql9="INSERT INTO `messages` (`application_id`, `email`, `message`) VALUES ('$app_id', '$email', '$message');";
    $query9=mysqli_query($connect,$sql9) or die (mysqli_error($connect));
    
    if ($query2 == true){
         echo "<script type='text/javascript'>alert('Application Rejected'); window.location='view_application.php';</script>";
       
    };
};

?>
<?php
    }
    else header("location:../index.php");
    ?>