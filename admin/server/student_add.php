<?php
require "../../db/db.php";
$Firstname = $_POST["Firstname"];
$Lastname = $_POST["Lastname"];


function student_id($Shift, $Department, $Batch){


  function shift($Shift){
    if($Shift == "Day"){
      return 1;
    }
    elseif($Shift == "Evening"){
      return 2;
    }
    else{
      return "Error";
    }
  }

  function department($Department)
  {
    if ($Department == "CSE") {
      return 10;
    }
    elseif ($Department == "EEE") {
      return 20;
    }

    elseif ($Department == "BBA") {
      return 30;
    }

    elseif ($Department == "English") {
      return 40;
    }

    else{
      return "Error";
    }

  }


  function id($current_id)
  {
    $digit_count = strlen($current_id);
    if ($digit_count == 1) {
      return  "00".$current_id;
    }
    elseif($digit_count == 2){

        return  "0".$current_id;
    }
    else{
      return $current_id;
    }
  }


  include '../../db/dbconnect.php';
  global $newdb;
  $sql = "SELECT MAX(Serial_no) FROM add_student";
  $mid = getDataFromDB($sql);
  foreach ($mid as $key) {
    $maxid = $key["MAX(Serial_no)"];
  }

      $current_id = $maxid+1;

      $Id = id($current_id);

      $admission_year = date('Y');

      $shiftcode = shift($Shift);
      $deptcode = department($Department);
      return $admission_year.$shiftcode.$deptcode.$Batch.$Id;
}





$student_id = student_id('Evening', 'English',53);





 
$Department = $_POST["Department"];
$Batch = $_POST["Batch"];
$Semester = $_POST["Semester"];
$Shift = $_POST["Shift"];
$PhoneNumber = $_POST["PhoneNumber"];
$Email = $_POST["Email"];
$Dateofbirth = $_POST["Dateofbirth"];
$Address = $_POST["Address"];
$Password = $_POST["Password"];
$filename = $_FILES["Image"]["name"];
$tmpname = $_FILES["Image"]["tmp_name"];
$Image = $_FILES["Image"]["name"];

$filetype = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
$movefile = '../../Image/' . $student_id . '.' . $filetype;

$dbfile = '../Image/' . $student_id . '.' . $filetype;
  move_uploaded_file($tmpname, $movefile);







$query = "INSERT INTO `add_student` (`Serial_no`, `Id`, `Firstname`, `Lastname`, `Department`, `Batch`, `Semester`, `Shift`, `PhoneNumber`, `Email`, `Dateofbirth`, `Address`, `Password`, `Image`) VALUES (NULL, '$student_id', '$Firstname', '$Lastname', '$Department', '$Batch', '$Semester', '$Shift', '$PhoneNumber', '$Email', '$Dateofbirth', '$Address', '$Password', '$dbfile')";
$userquery = "INSERT INTO `user`( `Id`, `Password`, `Email`, `Userrole`, `Status`) VALUES ('$student_id','$Password', '$Email', 'Student' ,'Pending')";

if($con->query($query) ===  TRUE AND $con->query($userquery) ===  TRUE){
  echo '<script language="javascript">';
  echo 'alert("Student Added Successfully"); location.href="../registration_student.php"';
  echo '</script>';
    }
    
    else{
        echo $con->Error;
    }
// echo $Firstname;
// echo "<br>";
// echo $Lastname;
// echo "<br>";
// echo $Department;
// echo "<br>";
// echo $Batch;
// echo "<br>";
// echo $Semester;
// echo "<br>";
// echo $Shift;
// echo "<br>";
// echo $PhoneNumber;
// echo "<br>";
// echo $Email;
// echo "<br>";
// echo $Dateofbirth;
// echo "<br>";
// echo $Address;
// echo "<br>";
// echo $Password;
// echo "<br>";
// echo $filename;
?>