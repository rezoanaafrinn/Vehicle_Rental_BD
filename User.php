<?php include('Controller/navbar.php');?><br>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
    .User-container{
      background-color: #e5e5e5;
      padding: 10px;
      margin: 10px;
      border: 10px;
    }
    .btn-primary{
      background-color: #00A79D;
      color: white;
      text-decoration: none;
      padding: 10px;
      margin: 10px;
      border-radius: 16px;
    }
    .btn-primary button a:hover {
  background: #ddd;
  color: #00A79D;
}
  </style>
</head>
<body>
  <div class="User-container">
    <form action="/action_page.php">
      <a style="color: white;" class="btn-primary" href="userproject/user_login.php" role="button">Sign In As User</a>
    </form><br><br>
    <form action="/action_page.php">
      <a style="color: white;"class="btn-primary" href="Driver/Controller/login.php" role="button">Sign In As Driver</a>
    </form><br><br>
    <form action="/action_page.php">
      <a style="color: white;"class="btn-primary" href="Login.php" role="button">Sign In As Admin</a>
    </form>
  </div>

</body>
</html>