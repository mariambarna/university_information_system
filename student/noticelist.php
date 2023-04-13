<style>
  table{
    color: black;
  }

  .main_section{
    padding: 20px;
  }
  </style>
  <?php
session_start();
if ($_SESSION["Userrole"] == "Student" AND $_SESSION["Flag"] =='Running'){

?>

<link rel="stylesheet" href="../css/common.css">



<div class="first">
  <?php
  include '../elements/s_sidebar.php';
  ?>
</div>

<div class="second">
  <?php
  include '../elements/s_main.php';
  
  ?>

  <div class="main_section">
  <?php
include 'notice1.php';
   ?>


</div>


</div>
<?php
}
 ?>