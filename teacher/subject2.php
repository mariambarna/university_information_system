<style>
    table{
        color:black;
        margin-top:50px;
        margin-left:25px;
    }
    h2{
        color: black;
    }
    td img{
        height: 60px;
        width: 60px;
        
}
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;}
#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
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

$sql= "SELECT Shift, SubjectCode, SubjectName, Credit, AssignedTeacher, add_subject.Department as dept, add_teacher.Firstname as Fname, add_teacher.LastName as lname FROM add_subject INNER JOIN add_teacher ON add_teacher.Id = add_subject.AssignedTeacher";
  
  require '../db/dbconnect.php';

  $container= getDataFromDB($sql);




  ?>
  
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search here...." title="Type in a name">
  <h2 align="center">Subject list</h2>
  <table id= 'myTable' width="100%">
      <tr class="header">
          <th>Shift</th>
          <th>Department</th>
          <th>Subject Code</th>
          <th>Subject Name</th>
          <th>Credit</th>
          <th>Assigned Teacher</th>
          



      </tr>

      <?php 
          foreach($container as $row){
      ?>

              <tr>
                  <td><?php echo $row["Shift"] ?></td>
                  
                  <td><?php echo $row["dept"] ?></td>
                  
                  <td><?php echo $row["SubjectCode"] ?></td>
                  
                  <td><?php echo $row["SubjectName"] ?></td>
                  
                  <td><?php echo $row["Credit"] ?></td>
                  
                  <td><?php echo $row["AssignedTeacher"].' - '.$row["Fname"].' '. $row["lname"]; ?></td>
                  
                 








              </tr>

          <?php


          }
          ?>
  </table>

<?php


?>
  <script>
  function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[7];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
  </script>
<?php


?>
