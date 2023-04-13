<?php

$Id = $_POST['Id'];
$Password = $_POST['Password'];


// "INSERT INTO student (AddedBy) VALUES ('$_SESSION['Id'])";

$usersql = "SELECT * FROM user WHERE Id = '".$Id."'";
include_once 'db/dbconnect.php';
$res = getDataFromDB($usersql);
$count = count($res);


if ($count != 0){ 
    session_start();
    foreach ($res as $row) {
        if($row['Id']==$Id and $row["Password"] == $Password){

      
         if ($row["Userrole"]=="Admin")
         {
             
            $_SESSION["Userrole"] = 'Admin';
            $_SESSION["Id"] = $row["Id"];
            $_SESSION["Flag"] = 'Running';
             header("Location: admin/dashboard.php");
         }
         elseif ($row["Userrole"]=="Student") {
            $_SESSION["Userrole"] = 'Student';
            $_SESSION["Id"] = $row["Id"];
            $_SESSION["Flag"] = 'Running';
             header ("Location: student/student_dashboard.php");
         }
        //  elseif ($row["Id"]=="Student"){
        //      echo "Student";
        //  }
         else {
            $_SESSION["Userrole"] = 'Teacher';
            $_SESSION["Id"] = $row["Id"];
            $_SESSION["Flag"] = 'Running';
            header ("Location: teacher/teacher_dashboard.php") ;
          }
          
        }
        else{

        
        echo '<script language="javascript">';
  echo 'alert("Invalied UserID OR PASSWORD"); location.href="index.php"';
  echo '</script>';
        }
}
  
}
else{
  echo '<script language="javascript">';
  echo 'alert("NO USER FOUND"); location.href="index.php"';
  echo '</script>';
}
// }

?>