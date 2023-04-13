<?php
require "../../db/db.php";
$NoticeID= $_POST["NoticeID"];

$NoticeHeadline=$_POST["NoticeHeadline"];
$NoticeSubject=$_POST["NoticeSubject"];
$NoticeDetails=$_POST["NoticeDetails"];
$NoticeFor=$_POST["NoticeFor"];



$query = "INSERT INTO `notice`(`NoticeID`, `NoticeHeadline`, `NoticeSubject`, `NoticeDetails`, `NoticeFor`) VALUES ('$NoticeID','$NoticeHeadline','$NoticeSubject','$NoticeDetails','$NoticeFor')";




if($con->query($query) ===  TRUE){
    echo '<script language="javascript">';
    echo 'alert("Notice Added Successfully"); location.href="../notice.php"';
    echo '</script>';
        }
        
        else{
            echo $con->Error;
        }
    
    
    ?>