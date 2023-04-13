<style media="screen">
  table{
    color: black;
    width: 100%;
    /* border: 2px solid black;*/
    border-collapse: collapse;
    font-size: 22px;
    font-weight: bold;
  }
  .notice{
    width: 100%;
    margin: 15px;
    font-size: 30px;
    color: black;
    margin-bottom: 15px;
  }
  .notice .noticealert{
    width:30%;
    float:left;
    margin-bottom: 15px;
    padding-top:15px;
    padding-bottom:15px;
    font-size: 30px;
    text-align: center;
    text-transform: uppercase;
    background: rgb(230,230,250);
  }
  .notice .noticedetails{
    width:67%;
    float:left;
  }
  marquee{
    color: black;
    background: rgb(230,230,250);
    margin-bottom: 15px;
    padding-top:15px;
    padding-bottom:15px;
    font-size: 30px;
    text-align: center;
    text-transform: uppercase;
  }
  h2{
    color: #2B3856;
   padding-top: 40px;
    line-height: 100px;
    
    font-size: 30px;
    text-align: center;
    text-transform: uppercase;
  }
  table th,td{
    padding: 30px;
    text-align: center;
    border: 2px solid black;
    border-collapse: collapse;
  }
  table th,td a{
    text-decoration: none;
    color: black;
  }
  .active{
    background: rgb( 245, 147, 70);
color: white;
  }
  #myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
  text-align: center;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: rgb(196,174,173);
}


</style>

<?php
session_start();
if ($_SESSION["Userrole"] == "Teacher" AND $_SESSION["Flag"] =='Running'){
  
  function subject($Time, $Day)
  {
    if ($Day == "Saturday" OR $Day == "Tuesday") {
      $date = 'Saturday_Tuesday';
    }
    elseif ($Day == "Sunday" OR $Day == "Wednesday") {
      $date = 'Sunday_Wednesday';
    }
    elseif ($Day == "Monday" OR $Day == "Thursday") {
      $date = 'Monday_Thursday';
    }
    else{
      $date = "";
    }
    include_once '../db/dbconnect.php';
    $sql = "SELECT * FROM add_schedule INNER JOIN add_subject ON add_subject.SubjectCode = add_schedule.Subject WHERE add_subject.AssignedTeacher = '".$_SESSION["Id"]."' AND TimePeriod = '".$Time."' AND Date = '".$date."'";
    $res = getDataFromDB($sql);
    foreach ($res as $key) {
      return $key["SubjectName"].'<br> ( '.$key["Batch"].' )';
    }
  }

  function subjectcode($Time, $Day)
  {
    if ($Day == "Saturday" OR $Day == "Tuesday") {
      $date = 'Saturday_Tuesday';
    }
    elseif ($Day == "Sunday" OR $Day == "Wednesday") {
      $date = 'Sunday_Wednesday';
    }
    elseif ($Day == "Monday" OR $Day == "Thursday") {
      $date = 'Monday_Thursday';
    }
    else{
      $date = "";
    }
    include_once '../db/dbconnect.php';
    $sql = "SELECT * FROM add_schedule INNER JOIN add_subject ON add_subject.SubjectCode = add_schedule.Subject WHERE add_subject.AssignedTeacher = '".$_SESSION["Id"]."' AND TimePeriod = '".$Time."' AND Date = '".$date."'";
    $res = getDataFromDB($sql);
    foreach ($res as $key) {
      return $key["Batch"];
    }
  }
  function dayactive($day){
    if($day == date('l')){
      return 'active';
    }
    else{
      return "";
    }
  }
?>

<link rel="stylesheet" href="../css/common.css">

<!-- <link rel="stylesheet" href="../css/batch.css"> -->

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

  <div class="main_section" style="padding: 20px">
 
  <div class="notice" >
  <div class="noticealert">Notice </div>
  <div class="noticedetails">
  <?php 
$noticesql = "SELECT * FROM notice WHERE NoticeFor = 'Teacher' OR NoticeFor = 'All'";
include_once('../db/dbconnect.php');
$resn = getDataFromDB($noticesql);
foreach($resn as $nrow){
?>
<marquee> <?php echo $nrow["NoticeHeadline"]."-". $nrow["NoticeDetails"] ?></marquee>

<?php
}
 ?>
  </div>
  </div>
  
  
  <h2 class="routin"> SCHEDULE </h2>
  <table id="myTable">
      <tr>
        <th></th>
        <th>9.00-10.30</th>
        <th>10.30-12.00</th>
        <th>12.00-13.30</th>
        <th>13.30-15.00</th>
        <th>15.30-17.00</th>
        <th>17.00-18.30</th>
        <th>18.30-20.00</th>
      </tr>

      <tr class="<?php echo dayactive("Saturday") ?>">
        <td>Saturday</td>
        <td><?php echo subject('First','Saturday'); ?>  </td>
        <td><?php echo subject('Second','Saturday'); ?>  </td>
        <td><?php echo subject('Third','Saturday'); ?>  </td>
        <td><?php echo subject('Fourth','Saturday'); ?>  </td>
        <td><?php echo subject('Fifth','Saturday'); ?> </td>
        <td><?php echo subject('Sixth','Saturday'); ?>  </td>
        <td><?php echo subject('Seventh','Saturday'); ?>  </td>


      </tr>
      <tr>

        <td>Sunday</td>
        <td><?php echo subject('First','Sunday'); ?> </td>
      <td><?php echo subject('Second','Sunday'); ?>  </td>
      <td><?php echo subject('Third','Sunday'); ?>  </td>
      <td><?php echo subject('Fourth','Sunday'); ?>  </td>
      <td><?php echo subject('Fifth','Sunday'); ?>  </td>
      <td><?php echo subject('Sixth','Sunday'); ?>  </td>
      <td><?php echo subject('Seventh','Sunday'); ?>  </td>


      </tr>

      <tr class="<?php echo dayactive("Monday") ?>">
        <td>Monday</td>
        <td><?php echo subject('First','Monday'); ?>  </td>
      <td><?php echo subject('Second','Monday'); ?>  </td>
      <td><?php echo subject('Third','Monday'); ?>  </td>
      <td><?php echo subject('Fourth','Monday'); ?>  </td>
      <td><?php echo subject('Fifth','Monday'); ?> </td>
      <td><?php echo subject('Sixth','Monday'); ?>  </td>
      <td><?php echo subject('Seventh','Monday'); ?></td>


      </tr>
      <tr>
        <td>Tuesday</td>
        <td><?php echo subject('First','Tuesday'); ?> </td>
      <td><?php echo subject('Second','Tuesday'); ?> </td>
      <td><?php echo subject('Third','Tuesday'); ?>  </td>
      <td><?php echo subject('Fourth','Tuesday'); ?> </td>
      <td><?php echo subject('Fifth','Tuesday'); ?> </td>
      <td><?php echo subject('Sixth','Tuesday'); ?>  </td>
      <td><?php echo subject('Seventh','Tuesday'); ?>  </td>


      </tr>
      <tr>
        <td>Wednesday</td>
        <td><?php echo subject('First','Wednesday'); ?> </td>
      <td><?php echo subject('Second','Wednesday'); ?>  </td>
      <td><?php echo subject('Third','Wednesday'); ?> </td>
      <td><?php echo subject('Fourth','Wednesday'); ?>  </td>
      <td><?php echo subject('Fifth','Wednesday'); ?>  </td>
      <td><?php echo subject('Sixth','Wednesday'); ?> </td>
      <td><?php echo subject('Seventh','Wednesday'); ?>  </td>


      </tr>
      <tr>
        <td>Thursday</td>
        <td><?php echo subject('First','Thursday'); ?> </td>
      <td><?php echo subject('Second','Thursday'); ?>  </td>
      <td><?php echo subject('Third','Thursday'); ?>  </td>
      <td><?php echo subject('Fourth','Thursday'); ?>  </td>
      <td><?php echo subject('Fifth','Thursday'); ?>  </td>
      <td><?php echo subject('Sixth','Thursday'); ?>  </td>
      <td><?php echo subject('Seventh','Thursday'); ?>  </td>


      </tr>
    </table>


</div>


</div>
<?php
}
else{
  header("Location: ../index.php");
}
 ?>
