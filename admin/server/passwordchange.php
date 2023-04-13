<?php
session_start();
// echo $_SESSION['Id'];
$sql = "SELECT * FROM user WHERE Id = '".$_SESSION['Id']."'";
include_once('../../db/dbconnect.php');
$result = getDataFromDB($sql);

foreach($result as $row){
    $dbpass = $row["Password"];
}

$oldpass = $_POST["oldpassword"];

if($oldpass != $dbpass){
    echo "Invalid Password";
}
elseif($_POST["newpassword"] != $_POST["confirmpassword"]){
    echo "Passwords are not matched";
}
else{
    include_once('../../db/db.php');
    $updatesql = "UPDATE user SET Password = '".$_POST["newpassword"]."' WHERE Id = '".$_SESSION['Id']."'";
    $updatesql2 = "UPDATE add_admin SET Password = '".$_POST["newpassword"]."' WHERE Id = '".$_SESSION['Id']."'";
    if($con->query($updatesql) === TRUE AND $con->query($updatesql2) === TRUE){
        echo '<script language="javascript">';
        echo 'alert("Password Changed Added Successfully"); location.href="../profile.php"';
        echo '</script>';
    }
    else{
        echo "fail";
    }
}
?>
