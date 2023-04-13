<?php
session_start();
if ($_SESSION["Userrole"] == "Admin" AND $_SESSION["Flag"] =='Running'){

?>

<link rel="stylesheet" href="../css/common.css">

<link rel="stylesheet" href="../css/schedule.css">

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
    <div class="sch">
      <form action="server/add_schedule.php" method="post">
        <h1>Schedule </h1>
        <div class="se">
           <div class="du"> Batch</div>
           <div class="le"> <select name="Batch" >
              <option>Select Batch</option>
              <?php
              $sql = "SELECT * FROM `add_batch`";
              include_once '../db/dbconnect.php';
              $result = getDataFromDB($sql);
              foreach($result as $row){


              ?>
              <option value="<?php echo $row["BatchNumber"]; ?>"><?php echo $row["BatchNumber"].' - '.$row["StartingYear"]; ?></option>


             <?php
              }
             ?>
             </select>

           </div>

           <div class="se">
                <div class="du">Time Period</div>

                <div class="le"> <select name="TimePeriod">

                <option>Select Time Period </option>

                <option value="First">9.00am - 10.30am</option>
                <option value="Second">10.30am - 12.00pm</option>
                <option value="Third">12.00pm - 13.30pm</option>
                <option value="Forth">13.30pm - 15.00pm</option>
                <option value="Fifth">15.30pm - 17.00pm</option>
                <option value="Sixth">17.00pm - 18.30pm</option>
                <option value="Seventh">18.30pm - 20.00pm</option>





               </select></div>
            </div>

            <div class="se">
                <div class="du">Date</div>

                <div class="le"> <select name="Date">

                <option>Select  Date</option>

                <option value="Saturday_Tuesday">Saturday + Tuesday</option>
                <option value="Sunday_Wednesday">Sunday + Wednesday</option>
                <option value="Monday_Thusday">Monday + Thusday</option>






               </select></div>
            </div>





           <div class="se">
           <div class="du"> Subject</div>
           <div class="le"> <select name="Subject" >
              <option>Select Subject</option>
              <?php
              $sql = "SELECT * FROM `add_subject`";
              include_once '../db/dbconnect.php';
              $result = getDataFromDB($sql);
              foreach($result as $row){


              ?>
              <option value="<?php echo $row["SubjectCode"]; ?>"><?php echo $row["SubjectName"].' - '.$row["AssignedTeacher"]; ?></option>


             <?php
              }
             ?>
             </select>

    </div>





















        <div class="or">
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
