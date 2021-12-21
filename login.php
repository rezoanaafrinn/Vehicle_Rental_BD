<?php
    session_start();
    include("../View/html/nav02.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="../View/css/dvr_login.css">
</head>
<body>
    <div class="body">
      <form action="../Model/loginProcess.php" method="post" enctype="multipart/form-data">
  		<h2>Driver Login  </h2> <br>


        <span style = "padding-left: 35px">  <label>Email</label> <input type="email" name="email" placeholder="Email" size="30" >
             <br><br>
        <span style = "padding-left: 13px">  <label>Password</label> <input type="password"  name="pass" placeholder="Password" size="30" >
             <br><br>
              <span style = "padding-left: 78px"><button type="submit" name="save">Login</button>
              <br><br>
            <span style = "padding-left: 18px">  Don't have an account? <a href="register.php">Register here</a>
      </form>
    </div>


</body>
</html>
