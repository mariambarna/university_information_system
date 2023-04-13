<?php
require "../../db/db.php";
$BatchNumber = $_POST["BatchNumber"];
$StartingYear = $_POST["StartingYear"];


$query ="INSERT INTO `add_batch`(`Serial_no`, `BatchNumber`, `StartingYear`) VALUES ('NULL','$BatchNumber','$StartingYear')";

if($con->query($query) ===  TRUE){
    echo '<script language="javascript">';
    echo 'alert("Batch Added Successfully"); location.href="../batch.php"';
    echo '</script>';
    }
    
    else{
        echo $con->Error;
    }


?>