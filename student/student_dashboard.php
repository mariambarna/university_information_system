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
 margin-top: 20px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
  
 
}

#myTable tr.header, #myTable tr:hover {
  background-color: rgb(230,230,250);
}
  

</style>

<?php
session_start();
if ($_SESSION["Userrole"] == "Student" AND $_SESSION["Flag"] =='Running'){
  
  $selectbatch = "SELECT * FROM add_student WHERE Id = '".$_SESSION['Id']."'";
  include_once('../db/dbconnect.php');
  $batchresult = getDataFromDB($selectbatch);
  foreach($batchresult as $row){
    $stbatch = $row["Batch"];
  }

  function subject($Time, $Day)
  {
    global $stbatch;

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
    $sql = "SELECT * FROM add_schedule INNER JOIN add_subject ON add_subject.SubjectCode = add_schedule.Subject WHERE TimePeriod = '".$Time."' AND Date = '".$date."' AND Batch = '".$stbatch."'";
    $res = getDataFromDB($sql);
    foreach ($res as $key) {
      return $key["SubjectName"];
    }
  }

  function subjectcode($Time, $Day)
  {
    global $stbatch;
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
    $sql = "SELECT * FROM add_schedule INNER JOIN add_subject ON add_subject.SubjectCode = add_schedule.Subject WHERE TimePeriod = '".$Time."' AND Date = '".$date."' AND Batch='".$stbatch."'";
    $res = getDataFromDB($sql);
    foreach ($res as $key) {
      return $key["SubjectCode"];
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

<link rel="stylesheet" href="../css/batch.css">

<div class="first">
  <?php
  include '../elements/s_sidebar.php';
  ?>
</div>

<div class="second">
  <?php
  include '../elements/s_main.php';
  // require 'registration_student.php';
  ?>
<div class="main_section" style="padding: 20px">
  <div class="notice" >
  <div class="noticealert">Notice </div>
  <div class="noticedetails">
  <?php 
$noticesql = "SELECT * FROM notice WHERE NoticeFor = 'Student' OR NoticeFor = 'All'";
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
        <td><a href="subject.php?SubjectCode=<?php echo subjectcode('First','Saturday'); ?> "><?php echo subject('First','Saturday'); ?> </a> </td>
        <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Second','Saturday'); ?> "><?php echo subject('Second','Saturday'); ?> </a> </td>
        <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Third','Saturday'); ?> "><?php echo subject('Third','Saturday'); ?> </a> </td>
        <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Fourth','Saturday'); ?> "><?php echo subject('Fourth','Saturday'); ?> </a> </td>
        <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Fifth','Saturday'); ?> "><?php echo subject('Fifth','Saturday'); ?> </a> </td>
        <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Sixth','Saturday'); ?> "><?php echo subject('Sixth','Saturday'); ?> </a> </td>
        <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Seventh','Saturday'); ?> "><?php echo subject('Seventh','Saturday'); ?> </a> </td>


      </tr>
      <tr>

        <td>Sunday</td>
        <td><a href="subject.php?SubjectCode=<?php echo subjectcode('First','Sunday'); ?> "><?php echo subject('First','Sunday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Second','Sunday'); ?> "><?php echo subject('Second','Sunday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Third','Sunday'); ?> "><?php echo subject('Third','Sunday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Fourth','Sunday'); ?> "><?php echo subject('Fourth','Sunday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Fifth','Sunday'); ?> "><?php echo subject('Fifth','Sunday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Sixth','Sunday'); ?> "><?php echo subject('Sixth','Sunday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Seventh','Sunday'); ?> "><?php echo subject('Seventh','Sunday'); ?> </a> </td>


      </tr>

      <tr class="<?php echo dayactive("Monday") ?>">
        <td>Monday</td>
        <td><a href="subject.php?SubjectCode=<?php echo subjectcode('First','Monday'); ?> "><?php echo subject('First','Monday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Second','Monday'); ?> "><?php echo subject('Second','Monday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Third','Monday'); ?> "><?php echo subject('Third','Monday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Fourth','Monday'); ?> "><?php echo subject('Fourth','Monday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Fifth','Monday'); ?> "><?php echo subject('Fifth','Monday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Sixth','Monday'); ?> "><?php echo subject('Sixth','Monday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Seventh','Monday'); ?> "><?php echo subject('Seventh','Monday'); ?> </a> </td>


      </tr>
      <tr>
        <td>Tuesday</td>
        <td><a href="subject.php?SubjectCode=<?php echo subjectcode('First','Tuesday'); ?> "><?php echo subject('First','Tuesday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Second','Tuesday'); ?> "><?php echo subject('Second','Tuesday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Third','Tuesday'); ?> "><?php echo subject('Third','Tuesday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Fourth','Tuesday'); ?> "><?php echo subject('Fourth','Tuesday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Fifth','Tuesday'); ?> "><?php echo subject('Fifth','Tuesday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Sixth','Tuesday'); ?> "><?php echo subject('Sixth','Tuesday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Seventh','Tuesday'); ?> "><?php echo subject('Seventh','Tuesday'); ?> </a> </td>


      </tr>
      <tr>
        <td>Wednesday</td>
        <td><a href="subject.php?SubjectCode=<?php echo subjectcode('First','Wednesday'); ?> "><?php echo subject('First','Wednesday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Second','Wednesday'); ?> "><?php echo subject('Second','Wednesday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Third','Wednesday'); ?> "><?php echo subject('Third','Wednesday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Fourth','Wednesday'); ?> "><?php echo subject('Fourth','Wednesday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Fifth','Wednesday'); ?> "><?php echo subject('Fifth','Wednesday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Sixth','Wednesday'); ?> "><?php echo subject('Sixth','Wednesday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Seventh','Wednesday'); ?> "><?php echo subject('Seventh','Wednesday'); ?> </a> </td>


      </tr>
      <tr>
        <td>Thursday</td>
        <td><a href="subject.php?SubjectCode=<?php echo subjectcode('First','Thursday'); ?> "><?php echo subject('First','Thursday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Second','Thursday'); ?> "><?php echo subject('Second','Thursday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Third','Thursday'); ?> "><?php echo subject('Third','Thursday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Fourth','Thursday'); ?> "><?php echo subject('Fourth','Thursday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Fifth','Thursday'); ?> "><?php echo subject('Fifth','Thursday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Sixth','Thursday'); ?> "><?php echo subject('Sixth','Thursday'); ?> </a> </td>
      <td><a href="subject.php?SubjectCode=<?php echo subjectcode('Seventh','Thursday'); ?> "><?php echo subject('Seventh','Thursday'); ?> </a> </td>


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
