<?php
require "../../db/db.php";
$Firstname = $_POST["Firstname"];
$Lastname = $_POST["Lastname"];

function admin_id(){


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
  
    // function department($Department)
    // {
    //   if ($Department == "CSE") {
    //     return 10;
    //   }
    //   elseif ($Department == "EEE") {
    //     return 20;
    //   }
  
    //   elseif ($Department == "BBA") {
    //     return 30;
    //   }
  
    //   elseif ($Department == "English") {
    //     return 40;
    //   }
  
    //   else{
    //     return "Error";
    //   }
  
    // }
  
  
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
    $sql = "SELECT MAX(Serial_no) FROM add_admin";
    $mid = getDataFromDB($sql);
    foreach ($mid as $key) {
      $maxid = $key["MAX(Serial_no)"];
    }
  
        $current_id = $maxid+1;
  
        $Id = id($current_id);
  
       
        return '1111-'.$Id;
  }
  
  
  
  
  
  $admin_id = admin_id();
  echo $admin_id;
  






$PhoneNumber = $_POST["PhoneNumber"];
$Email = $_POST["Email"];
$Dateofbirth = $_POST["Dateofbirth"];
$Address = $_POST["Address"];
$Password = $_POST["Password"];

$query = "INSERT INTO `add_admin`(`Serial_no`, `Id`, `Firstname`, `Lastname`, `PhoneNumber`, `Email`, `Dateofbirth`, `Address`, `Password`) VALUES ('NULL','$admin_id','$Firstname','$Lastname','$PhoneNumber','$Email','$Dateofbirth','$Address','$Password')";
// "INSERT INTO `add_admin` (`Serial_no`, `Id`, `Firstname`, `Lastname`, `Department`, `Batch`, `Semester`, `Shift`, `PhoneNumber`, `Email`, `Dateofbirth`, `Address`, `Password`) VALUES (NULL, '$admin_id', '$Firstname', '$Lastname', '$Department', '$Batch', '$Semester', '$Shift', '$PhoneNumber', '$Email', '$Dateofbirth', '$Address', '$Password')";
$userquery = "INSERT INTO `user`( `Id`, `Password`, `Email`, `Userrole`, `Status`) VALUES ('$admin_id','$Password', '$Email', 'Admin' ,'Approved')";

// "INSERT INTO `add_admin` (`Firstname`, `Lastname`, `Department`, `Batch`, `Semester`, `Shift`, `PhoneNumber`, `Email`, `Dateofbirth`, `Address`, `Password`) VALUES ('$Firstname', '$Lastname', '$Department', '$Batch', '$Semester', '$Shift', '$PhoneNumber', '$Email', '$Dateofbirth', '$Address', '$Password')";
if($con->query($query) ===  TRUE AND $con->query($userquery) ===  TRUE){
  echo '<script language="javascript">';
  echo 'alert("Admin Added Successfully"); location.href="../registration_admin.php"';
  echo '</script>';
    }
    
    else{
        echo $con->Error;
    }

    
// $query="INSERT INTO `add_admin` (`Firstname`, `Lastname`, `Department`, `Batch`, `Semester`, `Shift`, `PhoneNumber`, `Email`, `Dateofbirth`, `Address`, `Password`) VALUES ('Mariam', 'Barna', 'CSE', '53', '11', 'day', '01992188689', 'mariam.barna71@gmail.com', '2022-07-20', 'mirpur1', '1234')";
// mysqli_query($con , $query);




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

?>