<?php
session_start();
if ($_SESSION["Userrole"] == "Admin" AND $_SESSION["Flag"] =='Running'){

?>

<link rel="stylesheet" href="../css/common.css">

<link rel="stylesheet" href="../css/batch.css">

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
    <div class="batch">
    <form action="server/add_batch.php" method="post">
    <h1>Batch Add</h1>
    <div class="longgg">
           <div class="shorttt">Batch Number </div>
           <div class="tallll"><input type="text" name="BatchNumber" placeholder="Enter your Batch Number" ></div>
        </div>
        <div class="longgg">
           <div class="shorttt">Starting Year </div>
           <div class="tallll"><input type="text" name="StartingYear" placeholder="Enter your Starting Year" ></div>
        </div>
        <!-- <div class="longgg">
           <div class="shorttt"> Department Short Name</div>
           <div class="tallll"><input type="text" name="DepartmentShortName" placeholder="Enter your Department Short Name" ></div>
        </div> -->

        <div class="clickkk">
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
