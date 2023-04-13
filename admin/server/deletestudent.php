<?php
$id = $_GET["Id"];
// echo $id;

$sql = "DELETE FROM add_student WHERE Id = '".$id."'";
$sql2 = "DELETE FROM user WHERE Id = '".$id."'";
include_once('../../db/db.php');
if($con->query($sql) ===  TRUE AND $con->query($sql2) ===  TRUE){
    echo '<script language="javascript">';
    echo 'alert("Student Removed Successfully"); location.href="../teacher_list.php"';
    echo '</script>';
    }
    
    else{
        echo $con->Error;
    }

?>