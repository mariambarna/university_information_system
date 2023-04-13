<?php
session_start();
if ($_SESSION["Userrole"] == "Admin" AND $_SESSION["Flag"] =='Running'){

?>

<link rel="stylesheet" href="../css/common.css">

<link rel="stylesheet" href="../css/registration_teacher.css">

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
    <div class="last">

        <form action="server/teacher_add.php" method="post" enctype="multipart/form-data">
       <h1>Teacher Registration Form</h1>
       <div class="timme">
       <div class="linne">First Name </div>
       <div class="somme"><input type="text" name="Firstname" placeholder="Enter your First Name" ></div>
    </div>
   <div class="timme">
        <div class="linne">Last Name </div>
        <div class="somme"><input type="text" name="Lastname" placeholder="Enter your Last Name" ></div>
     </div>

     <div class="timme">
        <div class="linne">Department </div>

        <div class="somme"> <select name="Department">

        <option>Select your Department</option>
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
        <option value="BBA">BBA</option>
        <option value="ENGLISH">ENGLISH</option>

       </select></div>

    </div>
    <div class="timme">
        <div class="linne">Phone Number </div>
        <div class="somme"><input type="text" name="PhoneNumber" placeholder="Enter your Number" ></div>
     </div>

     <div class="timme">
        <div class="linne">Email </div>
        <div class="somme"><input type="email" name="Email" id="email" placeholder="Enter your Email " ></div>
     </div>
     <div class="timme">
        <div class="linne">Address</div>
        <div class="somme"><textarea name="Address" cols="25" rows="3"></textarea></div>
     </div>
     <div class="timme">
        <div class="linne">Password</div>
        <div class="somme"><input type="password" name="Password" placeholder="Enter your Password"></div>
     </div>
     <div class="timme">
      <div class="linne">Image</div>
      <div class="somme"><input type="file" name="Image"></div>
   </div>
           <div class="bbt">
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
