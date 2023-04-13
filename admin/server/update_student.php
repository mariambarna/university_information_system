<?php
$option = $_POST['Option'];
// echo $id;
$sql = "UPDATE add_student SET $option = '".$_POST['Value']."' WHERE Id = '".$_POST['ID']."'";

include_once('../../db/db.php');
if($con->query($sql) ===  TRUE){
    echo '<script language="javascript">';
    echo 'alert("Student Updated Successfully"); location.href="../student_list.php"';
    echo '</script>';
    }
    
    else{
        echo $con->Error;
    }

?>