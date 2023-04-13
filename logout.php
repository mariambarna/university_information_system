<?php
 session_start();
 $_SESSION["Userrole"] = "";
 $_SESSION["Id"] = "";
 $_SESSION["Flag"] = '';
 header("Location: index.php");



?>