<?php
session_start();
if ($_SESSION["Userrole"] == "Admin" AND $_SESSION["Flag"] =='Running'){

?>

<link rel="stylesheet" href="../css/common.css">

<link rel="stylesheet" href="../css/notice.css">

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
    <div class="notice">
    <form action="../admin/server/add_notice.php" method="post">
    <h1>Notice Add</h1>

    <div class="zero">
    <div class="zeroo">Notice ID </div>
    <div class="zerooo"><input type="text" name="NoticeID" placeholder="Enter your Notice ID" ></div>
    </div>
    <div class="zero">
    <div class="zeroo">Notice Headline </div>
    <div class="zerooo"><input type="text" name="NoticeHeadline" placeholder="Enter your Notice Headline" ></div>
    </div>
    <div class="zero">
    <div class="zeroo">Notice Subject </div>
    <div class="zerooo"><textarea name="NoticeSubject" cols="33" rows="3"></textarea></div>
    </div>
    <div class="zero">
    <div class="zeroo">Notice Details </div>
    <div class="zerooo"><textarea name="NoticeDetails" cols="33" rows="3"></textarea></div>
    </div>
    

    <div class="zero">
     <div class="zeroo">Notice For</div>

     <div class="zerooo"> <select name="NoticeFor">

     <option>Select your Notice For</option>
     <option value="Teacher">Teacher</option>
     <option value="Student">Student</option>
     <option value="All">All</option>


    </select></div>

    <div class="lol">
        <button type="submit" value="submit">Submit</button>
        <button type="reset">Reset</button>
     </div>


    



</div>


</div>
<?php
}
 ?>
