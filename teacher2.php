<?php

 
  $sql=" SELECT * FROM `add_teacher`";
   
  require 'db/dbconnect.php';

  $container= getDataFromDB($sql);




  ?>
  <table border="1px solid black" width="100%">
      <tr>
          <th>Serial_no</th>
          <th>Id</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Department</th>
          <th>PhoneNumber</th>
          <th>Email</th>
          <th>Address</th>
         
          



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
                  








              </tr>

          <?php


          }
          ?>
  </table>

<?php


?>