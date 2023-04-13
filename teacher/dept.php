<?php
session_start();
if ($_SESSION["Userrole"] == "Teacher" AND $_SESSION["Flag"] =='Running'){

?>

<link rel="stylesheet" href="../css/common.css">

<link rel="stylesheet" href="../css/assignment.css">

<div class="first">
  <?php
  include '../elements/t_sidebar.php';
  ?>
</div>

<div class="second">
  <?php
  include '../elements/t_main.php';
  // require 'registration_student.php';
  ?>

  <div class="main_section">
    <div class="assign">
    <form action="../teacher/deptwiselist.php" method="post">
    <h1>Batch Wise Student List</h1>

    <div class="long">
    <div class="short">Search Department </div>
    <div class="tall">
        <select name="Dept" id="">
            <option value="">Select a dept</option>
        
        <?php
        $sql = "SELECT * FROM add_department";
        include_once('../db/dbconnect.php');
        $res = getDataFromDB($sql);
        foreach($res as $row){
?>
    <option value="<?php echo $row["DepartmentShortName"] ?>"><?php echo $row["DepartmentCode"].'- ('.$row["DepartmentShortName"].')'.$row["DepartmentFullName"] ?></option>
<?php
        }
        ?>
        </select>
    </div>
    </div>
    

   

    

    <div class="click">
        <button type="submit" value="submit">Search</button>
     </div>



    <!--


    <input type="text" name="AssignmentID" value="">
     <input type="text" name="AssignmentHeadline" value="">
     <input type="text" name="Subject" value="">
     <input type="text" name="Details" value="">
     <input type="text" name="Deadline" value="">
     <select class="" name="Type">
         <option value="">Individual</option>
         <option value="">Group</option>



     </select>
     <input type="text" name="AssignmentFor" value=""> -->




</div>


</div>
<?php
}
 ?>
