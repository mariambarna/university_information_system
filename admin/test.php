<!DOCTYPE html>
<html>
<head>
    <title>Subject</title>
    <link rel="stylesheet" href="../css/subject.css">
</head>
<body>
<div class="sub">
<form action="server/add_subject.php" method="post">

<!-- <div class="lonng">
       <div class="shorrt">Shift </div>
       <div class="taall"><input type="text" name="Shift" placeholder="Enter your Shift" ></div> 
    </div> -->
    

    <div class="lonng">
        <div class="shorrt"> Shift</div>
    <div class="taall"> <select name="Shift">
  
  <option>Select your Shift</option>
  <option value="Day">Day</option>
  <option value="Evening">Evening</option>
  

 </select></div>
 
</div>
<div class="lonng">
             <div class="shorrt">Department </div>
 
             <div class="taall"> <select name="Department">
       
             <option>Select your Department</option>
             <option value="CSE">CSE</option>
             <option value="EEE">EEE</option>
             <option value="BBA">BBA</option>
             <option value="ENGLISH">ENGLISH</option>
       
            </select></div>
            
         </div>
       <div class="lonng">

       <div class="shorrt">Subject Code </div>
       <div class="taall"><input type="text" name="SubjectCode" placeholder="Enter your Subject Code" ></div> 
    </div>
    <div class="lonng">
       <div class="shorrt">Subject Name </div>
       <div class="taall"><input type="text" name="SubjectName" placeholder="Enter your Department Subject Name" ></div> 
    </div>
    <div class="lonng">
       <div class="shorrt"> Credit</div>
       <div class="taall"><input type="text" name="Credit" placeholder="Credit" ></div> 
    </div>
    <div class="lonng">
       <div class="shorrt"> Assigned Teacher</div>
       <div class="taall"> <select name="AssignedTeacher" >
          <option>Select Teacher</option>
          <?php
          $sql = "SELECT * FROM `add_teacher`";
          include_once '../db/dbconnect.php';
          $result = getDataFromDB($sql);
          foreach($result as $row){

         
          ?>
          <option value="<?php echo $row["Id"]; ?>"><?php echo $row["Id"].' - '.$row["Firstname"].' '. $row["Lastname"]; ?></option>


         <?php
          }
         ?>
         </select>


   






       <!-- <div class="taall"><input type="text" name="AssignedTeacher" placeholder=" Assigned Teacher" ></div>  -->
    </div>

    <div class="tap">
           <button type="submit" value="submit">Submit</button>
           <!-- <button type="reset">Reset</button> -->
        </div>






        </form>
         </div>
       








</body>


</html>