<?php
require "../../db/db.php";
session_start();

$AssignmentID = $_POST["AssignmentID"];

$AssignmentHeadline = $_POST["AssignmentHeadline"];

$AssignmentDetails = $_POST["AssignmentDetails"];
$AssignmentSubject = $_POST["AssignmentSubject"];
$AssignmentDeadline = $_POST["AssignmentDeadline"];
$AssignmentType = $_POST["AssignmentType"];
$AssignmentFor = $_POST["AssignmentFor"];

$query = "INSERT INTO `assignment`(`AssignmentID`, `AssignmentHeadline`, `AssignmentDetails`, `AssignmentSubject`, `AssignmentDeadline`, `AssignmentType`, `AssignmentFor`, `Addedby`) VALUES ('$AssignmentID','$AssignmentHeadline','$AssignmentDetails','$AssignmentSubject','$AssignmentDeadline','$AssignmentType','$AssignmentFor','".$_SESSION['Id']."')";



if($con->query($query) === TRUE){
   echo '<script language="javascript">';
   echo 'alert("Assignment Added Successfully"); location.href="../../teacher/assignment.php"';
   echo '</script>';
 }
   else
    {
       
   echo $con->error;       
    }





 ?>



