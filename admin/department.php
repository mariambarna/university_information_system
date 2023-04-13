<?php
session_start();
if ($_SESSION["Userrole"] == "Admin" AND $_SESSION["Flag"] =='Running'){

?>

<link rel="stylesheet" href="../css/common.css">

<link rel="stylesheet" href="../css/department.css">

<div class="first">
  <?php
  include '../elements/a_sidebar.php';
  ?>
</div>

<div class="second">
  <?php
  include '../elements/a_main.php';
  // require 'registration_student.php';
  ?>

  <div class="main_section">
    <div class="depart">
    <form action="server/add_department.php" method="post">
    <h1>Department Add</h1>

    <div class="longg">
           <div class="shortt">Department Code </div>
           <div class="talll"><input type="text" name="DepartmentCode" placeholder="Enter your Department Code" ></div>
        </div>
        <div class="longg">
           <div class="shortt">Department Full Name </div>
           <div class="talll"><input type="text" name="DepartmentFullName" placeholder="Enter your Department Full Name" ></div>
        </div>
        <div class="longg">
           <div class="shortt"> Department Short Name</div>
           <div class="talll"><input type="text" name="DepartmentShortName" placeholder="Enter your Department Short Name" ></div>
        </div>

        <div class="clickk">
               <button type="submit" value="submit">Submit</button>
               <!-- <button type="reset">Reset</button> -->
            </div>






            </form>
             </div>











</div>


</div>
<?php
}
 ?>
