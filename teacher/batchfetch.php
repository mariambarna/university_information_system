<style>
    
    table{
        color: black;
        margin-top:25px;
        margin-left:25px;
    }
    h2{
        color: black;
    }
    /* .pic{
        height:200px ;
        width: 200px;

    } */
    td img{
        height: 60px;
        width: 60px;

    }
.col-8{
  float: left;
  width: 65%;
}
.col-4{
  float: left;
  width: 35%;
  

}
.col-4 .bu{
  font-size: 15px;
  /* padding: 15px 20px 12px 40px; */
  /* font-size: 22px; */
    font-weight: bold;
    margin-left: 25px;
  height: 43px;
    /* padding: 5px 10px; */
    width: 40%;
    border: 0;
    border-radius: 6px;
    background-color: rgb(212,212,212) ;
    color: black;
    position: relative;
   
}
.col-4 .bu a{
  text-decoration: none;
  color: black;
  padding-top:20px;
}
.col-4 .bu:hover{
 
}
.col-4{
  text-align: center;
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

 
  $sql=" SELECT * FROM `add_student` WHERE Batch = '".$_POST["Batch"]."'";
   
  require '../db/dbconnect.php';

  $container= getDataFromDB($sql);




  ?>
  <h2 align="center">Students list</h2>
  <div class="col-8">
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search here...." title="Type in a name">
  </div>
<div class="col-4">
<button class="bu"><a href="batchwise.php">Batch Wise</a></button>
<button class="bu"><a href="dept.php">Dept Wise</a></button>
<!-- type="submit" value="deptwise" -->
</div>
  <table id= 'myTable' width="95%">
      <tr>
          <th>Serial_no</th>
          <th>Id</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Department</th>
          <th>Batch</th>
          <th>Semester</th>
          <th>Shift</th>
          <th>PhoneNumber</th>
          <th>Email</th>
          <!-- <th>Dateofbirth</th> -->
          <th>Address</th>
          <!-- <div class="pic"> -->
          <th>Image</th>
          
          <!-- </div> -->



      </tr>

      <?php 
          foreach($container as $row){
      ?>

              <tr>
                  <td><?php echo $row["Serial_no"] ?></td>
                  <td><?php echo $row["Id"] ?></td>
                  <td><?php echo $row["Firstname"] ?></td>
                  <td><?php echo $row["Lastname"] ?></td>
        
                  <td><?php echo $row["Department"] ?></td>

                  <td><?php echo $row["Batch"] ?></td>

                  <td><?php echo $row["Semester"] ?></td>

                  <td><?php echo $row["Shift"] ?></td>
                 <td><?php echo $row["PhoneNumber"] ?></td>
                  <td><?php echo $row["Email"] ?></td>
                

                  
                  <td><?php echo $row["Address"] ?></td>
                  <td> <img src="<?php echo $row["Image"] ?>" alt=""></td>
                  








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
      td = tr[i].getElementsByTagName("td")[0];
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
