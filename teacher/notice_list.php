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
if ($_SESSION["Userrole"] == "Teacher" AND $_SESSION["Flag"] =='Running'){

?>

<link rel="stylesheet" href="../css/common.css">



<div class="first">
  <?php
  include '../elements/t_sidebar.php';
  ?>
</div>

<div class="second">
  <?php
  include '../elements/t_main.php';
  
  ?>

  <div class="main_section">
  <?php
include 'notice2.php';
   ?>


</div>


</div>
<?php
}
 ?>