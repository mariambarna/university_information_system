<?php

require "../../db/db.php";

function teacher_id($Department){


    // function shift($Shift){
    //   if($Shift == "Day"){
    //     return 1;
    //   }
    //   elseif($Shift == "Evening"){
    //     return 2;
    //   }
    //   else{
    //     return "Error";
    //   }
    // }
  
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
    $sql = "SELECT MAX(Serial_no) FROM add_teacher";
    $mid = getDataFromDB($sql);
    foreach ($mid as $key) {
      $maxid = $key["MAX(Serial_no)"];
    }
  
        $current_id = $maxid+1;
  
        $Id = id($current_id);
  
        $admission_year = date('Y');
  
        // $shiftcode = shift($Shift);
        $deptcode = department($Department);
        return $admission_year.$deptcode.$Id;
  }
  
  
  
  
  
  $teacher_id = teacher_id('CSE');
  




$Firstname = $_POST["Firstname"];
$Lastname = $_POST["Lastname"];
$Department = $_POST["Department"];
$PhoneNumber = $_POST["PhoneNumber"];
$Email = $_POST["Email"];
$Address = $_POST["Address"];
$Password = $_POST["Password"];
$filename = $_FILES["Image"]["name"];
$tmpname = $_FILES["Image"]["tmp_name"];
$Image = $_FILES["Image"]["name"];

$filetype = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
$movefile = '../../Image/' . $teacher_id . '.' . $filetype;

$dbfile = '../Image/' . $teacher_id . '.' . $filetype;
  move_uploaded_file($tmpname, $movefile);


$query = "INSERT INTO `add_teacher` (`Serial_no`, `Id`, `Firstname`, `Lastname`, `Department`, `PhoneNumber`, `Email`, `Address`, `Password`, `Image`) VALUES (NULL, '$teacher_id', '$Firstname', '$Lastname', '$Department', '$PhoneNumber', '$Email', '$Address', '$Password', '$dbfile')";
$userquery = "INSERT INTO `user`( `Id`, `Password`, `Email`, `Userrole`, `Status`) VALUES ('$teacher_id','$Password', '$Email', 'Teacher' ,'Pending')";

// "INSERT INTO `add_teacher` (`Serial_no`, `Firstname`, `Lastname`, `Department`, `PhoneNumber`, `Email`, `Address`, `Password`) VALUES ('', '$Firstname', '$Lastname', '$Department', '$PhoneNumber', '$Email', '$Address', '$Password')";
if($con->query($query) ===  TRUE AND $con->query($userquery) ===  TRUE){
  echo '<script language="javascript">';
  echo 'alert("Teacher Added Successfully"); location.href="../registration_teacher.php"';
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
// echo $PhoneNumber;
// echo "<br>";
// echo $Email;
// echo "<br>";
// echo $Address;
// echo "<br>";
// echo $Password;
// echo "<br>";
// echo $filename;
?>