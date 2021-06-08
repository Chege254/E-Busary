<!DOCTYPE html>
<html>
<?php
   include "../in_out server.php";
    if(isset($_SESSION["idm"])){
    ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iBursary - Records</title>
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
    <div class="container" id="container" style="height:50em">
        <div class="row">
            <div class="col-md-12" id="nav_col">
                <hr>
                <ul class="nav nav-tabs nav-justified">
                    <li><a href="index_admin.php">Home </a></li>
                    <li class="active"><a href="view_application.php"> Bursary Applications</a></li>
                    <li><a href="application_status.php">Application Status</a></li>
                    <li><a href="logout.php"><strong> </strong><i class="fa fa-sign-out"></i><strong> Logout</strong></a></li>
                </ul>
            </div>
            <div class="col-md-12">
                <hr>
                <h3 class="text-uppercase text-center text-success"><strong>Bursary APPLICATIONS records</strong></h3>
                <hr>
                <p class="text-left text-warning"><strong>* The table below shows all application received. Asan administrator, you can VIEW, APPROVE or REJECT applications.</strong></p>
                <hr>
            </div>
            <!-- TABLE DIV -->
            <?php
            $sql="SELECT * FROM `applications` where `status` = ''  
ORDER BY `applications`.`application_time` DESC";
            $query=mysqli_query($connect,$sql) or die(mysqli_error($connect));
            
            ?>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-condensed">
                        <thead class="text-center">
                            <tr class="active">
                                <th>Applicant Details:</th>
                                
                                <th>University Details</th>
                                <th>Adm_number: </th>
                                <th>Fee_payable: </th>
                                <th>Fee_balance: </th>
                                <th>Application_date: </th>
                                <th> </th>
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
                                <td><?php echo "<span style='color:brown'>". $applicant. " </span>"." (".$gender.")". "<br>" . "<strong>dob: </strong>" . $dob;  ?></td>
                                
                                <td><?php echo $university . "<br>" . "<span style='color:brown'>" .$unimail. "</span>" ;  ?></td>
                                <td><?php echo $admno ;    ?></td>
                                <td><?php echo $fpay ;   ?></td>
                                <td><?php echo "<span style='color:brown'>". $fbal. "</span>" ; ?></td>
                                <td><?php echo $appdate ; ?></td>
                                <td class="text_center">
                                    <a class="btn btn-info btn-block btn-sm" type="button" id="view_btn" href="single_application.php?id=<?php echo $appid; ?> "><strong>More</strong></a>
                                </td>
                            </tr>
                        </tbody>
                           <?php
                    
                    };
                        ?>
                        <!--?php
                        if(mysqli_fetch_row($query) == 0)
                        {
                echo "
                <h4 class='text-uppercase text-center text-muted'><strong>NO APPLICATION RECORDS FOUND</strong></h4>
                <hr>";
            };
                    ?-->
                    </table>
                    
                 
                </div>
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