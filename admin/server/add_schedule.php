<?php
require "../../db/db.php";



$Batch = $_POST["Batch"];
$TimePeriod = $_POST["TimePeriod"];
$Date = $_POST["Date"];
$Subject = $_POST["Subject"];



$query ="INSERT INTO `add_schedule`(`Serial_no`, `Batch`, `TimePeriod`, `Date`, `Subject`) VALUES ('NULL','$Batch','$TimePeriod','$Date','$Subject')";


if($con->query($query) ===  TRUE){
    echo '<script language="javascript">';
    echo 'alert("Schedule Added Successfully"); location.href="../schedule.php"';
    echo '</script>';
        }
        
        else{
            echo $con->Error;
        }
    







?>