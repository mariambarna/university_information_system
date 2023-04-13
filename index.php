<!DOCTYPE html>
<html>
<head>
    <!-- <title>Login Form</title> -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

    <body>



<div class="box">
  <h2>Login</h2>
  <form action="login.php" method="post">
    <div class="inputBox">
      <input type="text" name="Id" required onkeyup="this.setAttribute('value', this.value);" value="">
      <label>Id</label>
    </div>
    <div class="inputBox">
      <input type="password" name="Password" required value=""
             onkeyup="this.setAttribute('value', this.value);" >
           
      <label>Password</label>
    </div>
    <input type="submit" name="sign-in" value="Sign In">
  </form>
</div>
</body>
</html>