<?php
session_start();
if ($_SESSION["Userrole"] == "Admin" AND $_SESSION["Flag"] =='Running'){

?>

<link rel="stylesheet" href="../css/common.css">

<link rel="stylesheet" href="../css/batch.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<style>
    .box{
        margin-top: 35vh;
        margin-left: 5%;
        margin-right: 5%;
    }
    .box h2{
        font-size: 42px;
        margin-bottom: 10px;
        border-bottom: 10px double #2B3856;
    }
   
    .box h1{
        font-size: 60px;

    }
    .box h1 span{
        text-shadow: 0px 0px 10px #2B3856;
        color: white;
    }
h1{
  color:black;
}
h2{
  color:black;
}
h4{
  color:black;
  margin-right: 10px;
}

</style>

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
    <form action="server/update_teacher.php" method="post">
    <h1>Update Teacher</h1>

    <div class="longg">
           <div class="shortt">Teacher ID</div>
           <div class="talll"><input type="text" name="ID" value="<?php echo $_GET['Id']?>" readonly></div>
        </div>
        <div class="longg">
           <div class="shortt">Option </div>
           <div class="talll">
               <select name="Option" id="">
                    <option value="">Select an option</option>
                    <option value="Firstname">First Name</option>
                    <option value="Lastname">Last Name</option>
                    <option value="Address">Address</option>
                    <option value="Department">Department</option>
               </select>
           </div>
        </div>
        <div class="longg">
           <div class="shortt"> Value</div>
           <div class="talll"><input type="text" name="Value"></div>
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
else{
  header("Location: ../index.php");
}
 ?>
