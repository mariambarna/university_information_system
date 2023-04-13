<?php

// $xyz = mysqli_connect('localhost', 'root', '', 'project1');
// // if(!$xyz){
// //  echo "Hello World";
// // }
//
// $sql = "SELECT * FROM `users`";
// $result = mysqli_query($xyz,$sql) or die(mysql_error($xyz));
// $arr = array();
//
// while($row = mysqli_fetch_assoc($result)){
//   $arr[]= $row;
// }
//
// return $arr;
//

// $x  = [1.5,2,3,4,5,6,7,8];
//
// var_dump($x);
// $light = "green";
//
// if($light == "red"){
//   echo "Stop";
// }
// elseif($light=="yellow"){
//   echo "Wait";
// }
// elseif ($light < 'Green') {
//   echo "Go";
// }
//
// else{
//   echo "Error command";
// }

// $light = 'blue';
// switch ($light) {
//     case "red":
//     echo "Stop";
//       break;
//     case 'green':
//       echo "GO";
//       break;
//     case 'yellow':
//       echo "Wait";
//         break;
//         default:
//         echo "Error";
// }

// $x = 3;
// for ($i=5; $i > $x ; $i--) {
//   echo $i;
//   echo "<br>";
// }
// $a = 0;
// $x = 10;
// while ($a < $x) {
//   echo $a;
//   echo "<br>";
//   $a++;
// }
// $a = 0;
// do {
//   echo $a;
//    echo "<br>";
//    $a++;
// } while ($a < 10);

// $a = 5;
//
// echo $a;
// echo "<br>";
// echo $a--;
// echo "<br>";
// echo $a;




//
//
// $citizen = 18;
//
//
// function add($x, $y, $z){
//   global $citizen;
//   $total = $x-$y+$z;
//   $short = $citizen - $total;
//  return $short;
// }
//
// $age = add(10,10,8);
//
// echo "You are ".$age." years short";
//
//
// 
// $UserName = $_POST['UserName'];
// $Password = $_POST['Password'];
$sql = "SELECT * FROM users";

$newdb = mysqli_connect('localhost', 'root', '', 'project1');
$result = mysqli_query($newdb,$sql) or die(mysqli_error($newdb));
$container = array();

while ($a = mysqli_fetch_assoc($result)) {
  $container[] = $a;
}
?>
<table border="1px solid black" width="100%">
  <tr>
    <th>Serial No</th>
    <th>UID</th>
    <th>Email</th>
    <th>Password</th>
    <th>UserRole</th>
    <th>Status</th>
    <th>AddedOn</th>
  </tr>
  <?php
  foreach ($container as $row) {

    ?>
    <tr>
      <td><?php echo $row["SerialNo"] ?></td>
      <td><?php echo $row["UID"] ?></td>
      <td><?php echo $row["Email"] ?></td>
      <td><?php echo $row["Password"] ?></td>
      <td><?php echo $row["UserRole"] ?></td>
      <td><?php echo $row["Status"] ?></td>
      <td><?php echo $row["AddedOn"] ?></td>
    </tr>
    <?php
  }

   ?>

</table>

<?php




 ?>