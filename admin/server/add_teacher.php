<?php
require "../../db/db.php";
$Id = $_POST["Id"];

$query ="INSERT INTO `teacher`(`Serial_no`, `Id`) VALUES ('NULL','$Id')";

if($con->query($query) ===  TRUE){
    echo"Success";
        }
        
        else{
            echo $con->Error;
        }
    
    
    ?>

$sql = "SELECT * FROM teacher";
$result = getDataFromDB($sql);
<select></select>
<select>
foreach($result as $row){
<option value="<?php echo $row['ID']?>"><?php echo $row['TeacherName']?></option>
</select