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

button{
  padding: 5px;
  margin: 5px;
}
button a{
  text-decoration: none;
  color: white;
}

.update{
  background: orange;
}

.delete{
  background: red;
}
  
</style>
<?php

 
  $sql=" SELECT * FROM `add_teacher`";
   
  require '../db/dbconnect.php';

  $container= getDataFromDB($sql);




  ?>
  
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search here...." title="Type in a name">
  <h2 align="center">Teachers list</h2>
  <table id= 'myTable' width="100%">
      <tr>
          <th>Serial_no</th>
          <th>Id</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Department</th>
          <th>PhoneNumber</th>
          <th>Email</th>
          <th>Address</th>
          <th>Image</th>
          <th>Action</th>
         
          



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
                  <td><?php echo $row["PhoneNumber"] ?></td>
                  <td><?php echo $row["Email"] ?></td>
                  <td><?php echo $row["Address"] ?></td>
                  <td> <img src="<?php echo $row["Image"] ?>" alt=""></td>
                  <td> <button class="update"><a href="updateteacher.php?Id=<?php echo $row["Id"] ?>">Update</a></button> <button class="delete"><a href="server/deleteteacher.php?Id=<?php echo $row["Id"] ?>">Delete</a></button> </td>

                 








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
