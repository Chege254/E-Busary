<!--== AUTHOR (c)frankline_bwire ==-->
<!--== @knightlypro ==-->
<!--== Notchcom_Solutions_Kenya ==-->
<?php
session_start();
$server="localhost";
$username="root";
$password="";
$database="ibursary";
$connect=mysqli_connect($server,$username,$password) or die(mysqli_error($connect));
if ($connect== true){
  echo " connected successfully";  
};
$db=mysqli_select_db($connect,$database) or die(mysqli_error($connect));
if ($db == true){
    echo " connection to ". $database . " database successfull";
};
?>
<!--== AUTHOR (c)frankline_bwire ==-->
<!--== @knightlypro ==-->
<!--== Notchcom_Solutions_Kenya ==-->