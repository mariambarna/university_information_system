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

 
  $sql=" SELECT * FROM `notice` WHERE NoticeFor != 'Teacher'";
   
  require '../db/dbconnect.php';

  $container= getDataFromDB($sql);




  ?>
  <h1>NOTICE</h1>
  <table id="myTable">
      <tr>
          <th>Notice Headline</th>
          <th>Notice Subject</th>
          <th>Notice Details</th>
          <th>Notice For</th>
          
         
          



      </tr>

      <?php 
          foreach($container as $row){
      ?>

              <tr>
                  <td><?php echo $row["NoticeHeadline"] ?></td>
                  <td><?php echo $row["NoticeSubject"] ?></td> 
                  <td><?php echo $row["NoticeDetails"] ?></td> 
                  <td><?php echo $row["NoticeFor"] ?></td>
                  








              </tr>

          <?php


          }
          ?>
  </table>

<?php


?>