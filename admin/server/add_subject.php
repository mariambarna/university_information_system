<?php
require "../../db/db.php";


$Shift = $_POST["Shift"];
$Department = $_POST["Department"];
$SubjectCode = $_POST["SubjectCode"];
$SubjectName = $_POST["SubjectName"];
$Credit = $_POST["Credit"];
$AssignedTeacher = $_POST["AssignedTeacher"];
$ClassroomNo = $_POST["ClassroomNo"];

$query ="INSERT INTO `add_subject`(`Serial_no`, `Shift`, `Department`, `SubjectCode`, `SubjectName`, `Credit`, `AssignedTeacher`, `ClassroomNo`) VALUES ('NULL','$Shift','$Department','$SubjectCode','$SubjectName','$Credit','$AssignedTeacher','$ClassroomNo')";

if($con->query($query) ===  TRUE){
    echo '<script language="javascript">';
    echo 'alert("Suject Added Successfully"); location.href="../subject.php"';
    echo '</script>';
        }
        
        else{
            echo $con->Error;
        }
    
    
    ?>