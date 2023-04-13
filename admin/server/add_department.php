<?php
require "../../db/db.php";
$DepartmentCode = $_POST["DepartmentCode"];

$DepartmentFullName = $_POST["DepartmentFullName"];
$DepartmentShortName = $_POST["DepartmentShortName"];


$query ="INSERT INTO `add_department`(`Serial_no`, `DepartmentCode`, `DepartmentFullName`, `DepartmentShortName`) VALUES ('NULL','$DepartmentCode','$DepartmentFullName','$DepartmentShortName')";

if($con->query($query) ===  TRUE){
    echo '<script language="javascript">';
    echo 'alert("Department Added Successfully"); location.href="../department.php"';
    echo '</script>';
    }
    
    else{
        echo $con->Error;
    }


?>