<?php
session_start();
if ($_SESSION["Userrole"] == "Admin" AND $_SESSION["Flag"] =='Running'){

?>

<link rel="stylesheet" href="../css/common.css">

<link rel="stylesheet" href="../css/registration_admin.css">

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
    <div class="right">

        <form action="server/admin_add.php" method="post">
      <h1>Admin Registration Form</h1>

      <div class="timee">
        <div class="linee">First Name </div>
        <div class="somee"><input type="text" name="Firstname" placeholder="Enter your First Name" ></div>
     </div>
    <div class="timee">
         <div class="linee">Last Name </div>
         <div class="somee"><input type="text" name="Lastname" placeholder="Enter your Last Name" ></div>
      </div>

      <!-- <div class="timee">
         <div class="linee">Department </div>

         <div class="somee"> <select name="Department">

         <option>Select your Department</option>
         <option value="CSE">CSE</option>
         <option value="EEE">EEE</option>
         <option value="BBA">BBA</option>
         <option value="ENGLISH">ENGLISH</option>

        </select></div>

     </div>
     <div class="timee">
         <div class="linee">Batch </div>
         <div class="somee"><input type="text" name="Batch" placeholder="Enter your Batch" ></div>
      </div>
      <div class="timee">
         <div class="linee">Semester </div>
      <div class="somee"> <input type="text" name="Semester" placeholder="Enter your Semester"></div>
       </div>
       <div class="timee">
         <div class="linee">Shift </div>

         <div class="somee"> <select name="Shift">

         <option>Select your shift</option>

         <option value="Day">Day</option>
         <option value="Evening">Evening</option>

        </select></div>
     </div> -->
     <div class="timee">
         <div class="linee">Phone Number </div>
         <div class="somee"><input type="text" name="PhoneNumber" placeholder="Enter your Number" ></div>
      </div>

      <div class="timee">
         <div class="linee">Email </div>
         <div class="somee"><input type="email" name="Email" id="email" placeholder="Enter your Email " ></div>
      </div>
      <div class="timee">
         <div class="linee">Date of birth </div>
         <div class="somee"><input type="date" name="Dateofbirth"></div>
      </div>


      <div class="timee">
         <div class="linee">Address</div>
         <div class="somee"><textarea name="Address" cols="30" rows="3"></textarea></div>
      </div>
      <div class="timee">
         <div class="linee">Password</div>
         <div class="somee"><input type="password" name="Password" placeholder="Enter your Password"></div>
      </div>

       <div class="buut">
       <button type="submit" value="submit">Submit</button>
       <button type="reset">Reset</button>
    </div>
  
      </from>

 </div>

  </div>


</div>
<?php
}
 ?>
