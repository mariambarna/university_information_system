<style media="screen">

*{
  color: black;
}

h1{
  font-size: 42px;
  text-align: right;
  border-bottom: 5px solid red;
  margin-bottom: 50px;
}

.col-4{
  height: 300px;
  width: 29%;
  box-shadow: 0px 0px 10px black;

  float: left;
  margin-right: 2%;
  margin-left: 2%;
  border-radius: 7px;
}
.profilepicture{
  height:80px;
  width:80px;
  margin:10px auto;
}
.profilepicture img{
height:100%;
width:100%;
}
.col-4 .title{
  height: 50px;
  background: orangered;
  text-align: center;
  color: white;
  line-height: 50px;
  font-size: 22px;
}

.col-4 .content{
  padding: 20px;

}


</style>

<?php
session_start();
if ($_SESSION["Userrole"] == "Student" AND $_SESSION["Flag"] =='Running'){



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

      <?php
      $sql = "SELECT * FROM add_subject WHERE SubjectCode = '".$_GET["SubjectCode"]."'";
        include_once '../db/dbconnect.php';
        $res = getDataFromDB($sql);
        foreach ($res as $key) {
            ?>
                <h1><?php echo $key["SubjectName"]; ?> ( <?php echo $key["Credit"]; ?>)</h1>

                <!-- <div class="col-4">
                    Assignment
                </div> -->

                <div class="col-4">
                  <div class="title">
                      Faculty
                  </div>
                  <div class="content">


                    <?php
                    $sql = "SELECT * FROM add_teacher WHERE Id = '".$key["AssignedTeacher"]."'";
                      include_once '../db/dbconnect.php';
                      $rest = getDataFromDB($sql);
                      foreach ($rest as $keyt) {
                        ?>
                        
                       <div class="profilepicture"> <img src="<?php echo $keyt['Image'] ?>" alt=""></div>
                          <h3><?php echo $keyt['Firstname'] ?></h3>
                          <h3><?php echo $keyt['Email'] ?></h3>
                          <h3><?php echo $keyt['PhoneNumber'] ?></h3>
                        <?php
                      }
                     ?>
                     </div>
                </div>

                <!-- <div class="col-4">
                  Schedule
                </div> -->

            <?php
        }
       ?>

  </div>


</div>
<?php
}
 ?>
