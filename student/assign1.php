<style>
    
    table{
        color: black;
        margin-top:25px;
        margin-left:25px;
    }
    h1{
        color: black;
        margin-left: 500px;
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
  background-color: #f1f1f1;
}
  
    </style>


<?php
function batch($id){
    $sql = "SELECT * FROM add_student WHERE Id = '".$id."'";
    include_once('../db/dbconnect.php');
    $res = getDataFromDB($sql);
    foreach($res as $row){
        return $row["Batch"];
    }
}
 $batch=batch($_SESSION['Id']);
  // $sql=" SELECT * FROM `assignment`";
  $sql=" SELECT * FROM `assignment` WHERE AssignmentFor='".$_SESSION['Id']."' OR AssignmentFor='".$batch."'";
  include_once('../db/dbconnect.php');

  $container= getDataFromDB($sql);




  ?>
  <h1>Assignment</h1>
  <table id="myTable">
      <tr>
          <th>Assignment Headline</th>
          <th>Assignment Details</th>
          <th>Assignment Subject</th>
          <th>Assignment Deadline</th>
          <th>Assignment Type</th>
          <th>Assignment For</th>
          



      </tr>

      <?php 
          foreach($container as $row){
      ?>

              <tr>
                  <td><?php echo $row["AssignmentHeadline"] ?></td>
                  <td><?php echo $row["AssignmentDetails"] ?></td> 
                  <td><?php echo $row["AssignmentSubject"] ?></td> 
                  <td><?php echo $row["AssignmentDeadline"] ?></td>
                  <td><?php echo $row["AssignmentType"] ?></td>
                  <td><?php echo $row["AssignmentFor"] ?></td>
                  








              </tr>

          <?php


          }
          ?>
  </table>

<?php


?>