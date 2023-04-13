
<style>

.form-title{
    width: 40%;
    float:left;
    margin-bottom:10px;

  }
  .form-input{
    width: 60%;
    float:left;
    margin-bottom:10px;
  }
.profile{
    height: 500px;
    width: 550px;
    margin: 100px auto;
    padding: 30px auto 30px auto ;
    /* background-position: center;
      background-color: #fff;   */
    /* background: url('../assets/images/.jpg') no-repeat; */
    border-radius: 20px;
    color: black;
    font-size: 22px;
    /* border: 1px solid black; */
}
.profile h2{
    font-size: 25px;
    text-align: center;
    text-transform: capitalize;
    margin: 30px auto;
    color: black;
}
.profile p{
    /* float: left; */
    /* width: 40%; */
    /* font-size: 15px; */
    /* padding: 5px;
    border-radius: 10px; */
    /* outline: none; */
    /* box-sizing: border-box; */
    
}
.profile input{
    /* float: left; */
    width: 100%;
   /* margin: auto; */
   font-size: 15px;
   padding: 5px;
   border-radius: 10px;
   outline: none;
}
.profile button{
    font-size: 22px;
    font-weight: bold;
    margin-bottom: 15px;
    padding: 5px 10px;
    width: 30%;
    border: 0;
    border-radius: 15px;
    background-color: gray;
    color: black;
    position: relative;
    margin-top: 25px;
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
  // require 'registration_student.php';
  ?>

  <div class="main_section">
<div class="profile">
<h2 align="center">CHANGE PASSWORD</h2>
<form action="../admin/server/passchange.php" method="post">

<div class="form-title">
<p>Old Password</p>
</div> 
<div class="form-input">
<input type="password" name="oldpassword">
</div>
<div class="form-title">
<p>New Password</p>
</div>
<div class="form-input">
<input type="password" name="newpassword">
</div>
<div class="form-title">
<p>Confirm Password</p>
</div>
<div class="form-input">
<input type="password" name="confirmpassword">
</div>
<button type="submit">submit</button>
</form>





</div>


</div>


</div>
<?php
}
 ?>
