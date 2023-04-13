<?php
session_start();
if ($_SESSION["Userrole"] == "Admin" AND $_SESSION["Flag"] =='Running'){

?>

<link rel="stylesheet" href="../css/common.css">

<link rel="stylesheet" href="../css/registration_student.css">

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
    <div class="firrst">

        <form action="server/student_add.php" method="post" enctype="multipart/form-data">
      <h1>Student Registration Form</h1>

      <div class="time">
       <div class="line">First Name </div>
       <div class="some"><input type="text" name="Firstname" placeholder="Enter your First Name" ></div>
    </div>
   <div class="time">
        <div class="line">Last Name </div>
        <div class="some"><input type="text" name="Lastname" placeholder="Enter your Last Name" ></div>
     </div>

     <div class="time">
        <div class="line">Department </div>

        <div class="some"> <select name="Department">

        <option>Select your Department</option>
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
        <option value="BBA">BBA</option>
        <option value="ENGLISH">ENGLISH</option>

       </select></div>

    </div>
    <div class="time">
        <div class="line">Batch </div>
        <div class="some"><input type="text" name="Batch" placeholder="Enter your Batch" ></div>
     </div>
     <div class="time">
        <div class="line">Semester </div>
     <div class="some"> <input type="text" name="Semester" placeholder="Enter your Semester"></div>
      </div>
      <div class="time">
        <div class="line">Shift </div>

        <div class="some"> <select name="Shift">

        <option>Select your shift</option>

        <option value="Day">Day</option>
        <option value="Evening">Evening</option>

       </select></div>
    </div>
    <div class="time">
        <div class="line">Phone Number </div>
        <div class="some"><input type="text" name="PhoneNumber" placeholder="Enter your Number" ></div>
     </div>

     <div class="time">
        <div class="line">Email </div>
        <div class="some"><input type="email" name="Email" id="email" placeholder="Enter your Email " ></div>
     </div>
     <div class="time">
        <div class="line">Date of birth </div>
        <div class="some"><input type="date" name="Dateofbirth"></div>
     </div>


     <div class="time">
        <div class="line">Address</div>
        <div class="some"><textarea name="Address" cols="28" rows="3"></textarea></div>
     </div>
     <div class="time">
        <div class="line">Password</div>
        <div class="some"><input type="password" name="Password" placeholder="Enter your Password"></div>
     </div>
     <div class="time">
        <div class="line">Image</div>
        <div class="some"><input type="file" name="Image" ></div>
     </div>

       <div class="but">
       <button type="submit" value="submit">Submit</button>
       <!-- <button type="reset">Reset</button> -->

       </div>
    

 </div>


  </div>


</div>
<?php
}
 ?>
