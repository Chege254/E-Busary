<!DOCTYPE html>
<html>
    <?php
   include "../in_out server.php";
    $user=$_SESSION["idm"];
    
    if(isset($_SESSION["idm"])){
    
//Accept Application Data
if(isset($_POST['apply'])){
  
    //application form
    $surname=$_POST["surname"];
    $othername=$_POST["fullname"];
    $fullname=strtoupper($surname." ".$othername);
    $gender=$_POST["gender"];
    $dob=$_POST["dob"];
    $idnumber=$_POST["idno"];
    $email=$_POST["email"];
    $phone_number=$_POST["phone"];
    //GUARDIAN DATA
    $guardian=$_POST["gname"];
    $guardian_id=$_POST["gidno"];
    $guardian_phone=$_POST["gphone"];
    $guardian_rel=$_POST["grel"];
    //university data
    $university=strtoupper($_POST["uname"]);
    $umail=$_POST["umail"];
    $ubox=$_POST["ubox"];
    $uphone=$_POST["uphone"];
    $admyear=$_POST["admyear"];
    $admno=$_POST["admno"];
    $study_year=$_POST["syear"];
    $ucategory=$_POST["category"];
    //FEE DATA
    $fee_pay=$_POST["fpay"];
    $fee_paid=$_POST["fpaid"];
    $fee_bal=$_POST["fbal"];
    $helb=$_POST["helb"];
    //BANK DATA
    $bank=strtoupper($_POST["bank"]);
    $branch=strtoupper($_POST["branch"]);
    $account=$_POST["account"];
    //APPLICATION ID
    $app_id=$_POST["appid"];
    
    //INSERT TO APPLICATIONS TABLE
    $sql="INSERT INTO `applications` (`userlog`, `application_id`, `applicant_name`, `sex`, `birth_date`, `id_number`, `email`, `phone_number`, `guardian_name`, `guardian_id`, `guardian_phone`, `guardian_relationship`, `university_name`, `university_email`, `university_box`, `university_phone`, `admission_year`, `admission_number`, `year_of_study`, `university_category`, `fee_payable`, `fee_paid`, `fee_balance`, `helb`, `bank_name`, `bank_branch`, `bank_account`, `application_date`, `application_time`) VALUES ('$user', '$app_id', '$fullname', '$gender', '$dob', '$idnumber', '$email', '$phone_number', '$guardian', '$guardian_id', '$guardian_phone', '$guardian_rel', '$university', '$umail', '$ubox', '$uphone', '$admyear', '$admno', '$study_year', '$ucategory', '$fee_pay', '$fee_paid', '$fee_bal', '$helb', '$bank', '$branch', '$account', curdate(), current_timestamp());";
    $query=mysqli_query($connect,$sql) or die(mysqli_error($connect));
    if ($query == true){
         echo "<script type='text/javascript'>alert('Success')</script>";
    };
};

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
    <div class="container" id="container">
        <div class="row">
            <div class="col-md-4" id="nav_col">
                <hr>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="index.php">Home </a></li>
                    <li class="active"><a href="form.php">Apply Bursary</a></li>
                    <li><a href="notification.php">Notifications <i class="fa fa-comments-o"></i></a></li>
                    <li><a href="logout.php"><strong> </strong><i class="fa fa-sign-out"></i><strong> Logout</strong></a></li>
                </ul>
                <hr>
                <div id="instructions">
                    <h4 class="text-left"><strong>Instructions: </strong></h4>
                    <ol>
                        <li><strong>Incomplete SCEBF Bursary Application form will not be processed. </strong></li>
                        <li>Each Applicant MUST attach a certified copy of his/her institution’s fees statement. Newlyadmitted students to include a copy of the Admission letter. </li>
                        <li>Each Applicant MUST ensure to fill in correct Email addresses, Bank Details andcontacts for his/her institution. </li>
                        <li>For continuing Students, ensure you attach a copy of the previous semester’stranscript/Report Form (<strong>Mandatory</strong>). </li>
                        <li>A copy of the National Identity card <strong>MUST</strong> be attached. </li>
                        <li>It is important that the Applicant declares other bursary Fund Support he/she is currentlyreceiving. </li>
                        <li>The Applicant <strong>MUST</strong> only apply in his/her Ward. </li>
                        <li>Make sure all information committed is <strong>ACCURATE</strong> and <strong>TRUE</strong> .</li>
                        <li id="list_9">Upon a <strong>successful application</strong>, the applicant will be required to provide <strong>original documents and certificates</strong> for authenticity.</li>
                    </ol>
                </div>
                <hr>
            </div>
            <div class="col-md-8">
                <hr>
                <h3 class="text-center"><strong>The County Government of Narok</strong></h3>
                <h5 class="text-uppercase text-center"><strong>DEPARTMENT OF EDUCATION, YOUTH AFFAIRS, GENDER AND SOCIAL SERVICES NAROK COUNTY EDUCATION BURSARY FUND (SCEBF) </strong></h5>
                <hr>
                <p class="text-center"><em>Department of Education, Youth Affairs Gender and Social Services </em></p>
                <hr>
                <p class="text-left text-warning"><strong>* Fill in the application form below making sure that all provided information is accurate and true.</strong></p>
                <hr>
                <form action="form.php" method="post" id="app_form">
                    <input type="text" value="<?php    echo $app_id="i".rand(100,999).rand(100,999);?>"  readonly hidden name="appid">
                    <h4 class="text-success"><strong>Personal Data:</strong></h4>
                    <div class="form-group">
                        <div class="col-md-5">
                            <label class="control-label">Fullnames (Surname):</label>
                            <input class="form-control input-sm" type="text" name="surname" placeholder="surname" required>
                        </div>
                        <div class="col-md-7">
                            <label class="control-label">Othernames:</label>
                            <input class="form-control input-sm" type="text" name="fullname" placeholder="other names" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">Sex: </label>
                            <div class="radio">
                                <label class="control-label">
                                    <input type="radio" name="gender" value="Male"><strong>Male</strong></label>
                            </div>
                            <div class="radio">
                                <label class="control-label">
                                    <input type="radio" name="gender" value="Female"><strong>Female</strong></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Birth date:</label>
                            <input class="form-control input-sm" type="date" name="dob" required>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">ID Number:</label>
                            <input class="form-control input-sm" type="number" name="idno" placeholder="ID Number" required>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Email:</label>
                            <input class="form-control input-sm" type="email" name="email" placeholder="example@email.com" required>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Phone number:</label>
                            <input class="form-control input-sm" type="tel" name="phone" required>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label">Guardian Names: </label>
                            <input class="form-control input-sm" type="text" name="gname" required>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Guardian ID number: </label>
                            <input class="form-control input-sm" type="text" name="gidno" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label">Guardian Phone number: </label>
                            <input class="form-control input-sm" type="tel" name="gphone" required>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Relationship to Guardian : </label>
                            <input class="form-control input-sm" type="text" name="grel" required placeholder="father/mother/sponsor .etc">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-success"><strong>University Details:</strong></h4></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label">Name of University/College: </label>
                            <input class="form-control input-sm" type="text" name="uname" required placeholder="University name">
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">College/University Email: </label>
                            <input class="form-control input-sm" type="email" name="umail" placeholder="example@email.com" required >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label">P.O BOX: </label>
                            <input class="form-control input-sm" type="text" name="ubox" placeholder="150-20100" required>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Tel. No: </label>
                            <input class="form-control input-sm" type="tel" name="uphone" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="control-label">Year of Admission: </label>
                            <input class="form-control input-sm" type="number" name="admyear" placeholder="2020" required >
                        </div>
                        <div class="col-md-4">
                            <label class="control-label">Admission Number: </label>
                            <input class="form-control input-sm" type="text" placeholder="sct-8978" name="admno" required>
                        </div>
                        <div class="col-md-4">
                            <label class="control-label">Year of Study: </label>
                            <input class="form-control input-sm" type="text" name="syear" placeholder="year 1" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">Category of College/University:</label>
                            <div class="checkbox">
                                <label class="control-label">
                                    <input type="radio" name="category" value="Public"><strong> Public</strong></label>
                            </div>
                            <div class="checkbox">
                                <label class="control-label">
                                    <input type="radio" name="category" value="Private"><strong> Private</strong></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-success"><strong>Fees Payable:</strong></h4></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-5">
                            <label class="control-label">Total fees payable: </label>
                            <input class="form-control input-sm" type="number" placeholder="Kshs." name="fpay" required>
                        </div>
                        <div class="col-md-4">
                            <label class="control-label">Total fees paid: </label>
                            <input class="form-control input-sm" type="number" placeholder="Kshs." name="fpaid" required>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Balance: </label>
                            <input class="form-control input-sm" type="number" placeholder="Kshs." name="fbal" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">How much loan are you receiving from the Higher Education Loans Board ?: </label>
                            <input class="form-control input-sm" type="number" placeholder="Kshs." name="helb" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-success"><strong>Account Particulars:</strong></h4></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-5">
                            <label class="control-label">Name of Bank: </label>
                            <input class="form-control input-sm" type="text" name="bank" required>
                        </div>
                        <div class="col-md-4">
                            <label class="control-label">Branch: </label>
                            <input class="form-control input-sm" type="text" name="branch" required>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Account Number:</label>
                            <input class="form-control input-sm" type="number" name="account" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="checkbox text-center">
                                <label>
                                    <input type="checkbox" name="declare" required><strong>I declare that the infomation given above is true.</strong></label>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-success" type="submit" name="apply"><strong>Submit Application</strong></button>
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