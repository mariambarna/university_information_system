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
    <form action="../admin/server/add_assignment.php" method="post">
    <h1>Assignment Add</h1>

    <div class="long">
    <div class="short">Assignment ID </div>
    <div class="tall"><input type="text" name="AssignmentID" placeholder="Enter your Assignment ID" ></div>
    </div>
    <div class="long">
    <div class="short">Assignment Headline </div>
    <div class="tall"><input type="text" name="AssignmentHeadline" placeholder="Enter your Assignment Headline" ></div>
    </div>
    <div class="long">
    <div class="short">Assignment Subject </div>
    <div class="tall"><textarea name="AssignmentSubject" cols="33" rows="3"></textarea></div>
    </div>
    <div class="long">
    <div class="short">Assignment Details </div>
    <div class="tall"><textarea name="AssignmentDetails" cols="33" rows="3"></textarea></div>
    </div>
    <div class="long">
    <div class="short">Assignment Deadline</div>
    <div class="tall"><input type="date" name="AssignmentDeadline" placeholder="Enter your Assignment Deadline" ></div>
    </div>

    <div class="long">
     <div class="short">Assignment Type</div>

     <div class="tall"> <select name="AssignmentType">

     <option>Select your Assignment Type</option>
     <option value="Individual">Individual</option>
     <option value="Group">Group</option>


    </select></div>

    </div>

    <div class="long">
    <div class="short">AssignmentFor </div>
    <div class="tall"><input type="text" name="AssignmentFor" placeholder="Enter your Assignment For" ></div>
    </div>
    <div class="click">
      
        <button type="submit" value="submit">Submit</button>
        <button type="reset">Reset</button>
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
