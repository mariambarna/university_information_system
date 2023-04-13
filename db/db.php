 <?php
$servername="localhost";
$user="root";
$password="";
$database="project";


$con=mysqli_connect($servername,$user,$password,$database);
 

if($con->connect_error){ 
     die('connection failed:'.$con->connect_error);
}

// $con = mysqli_connect('localhost','root','','');

// if($con->connect_error){
//     die('Connection Failed:'.$con->connect_error);?

// }
// require 'studentdb.php';
// $UserID = $_POST["UserID"];
// $Password = $_POST["Password"];
// $UserRole = $_POST["UserRole"];


// $insert = "INSERT INTO USERS ('UserID', 'Password','UserRole','Status') VALUES('".$UserID."','".$Password."','".$UserRole."','Approved')";

// if($con->query($insert) ===  TRUE){
// echo"Success";
// }

// else{
//     echo $con->Error;
// }


// ?>