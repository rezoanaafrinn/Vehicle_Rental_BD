<?php
include("../View/html/nav01.html");
include("../View/html/profile.sitebar.html");
session_start();
include("../Model/database.php");
if(isset($_POST['Submit']))
{
 $oldpass=md5($_POST['opwd']);
 $useremail=$_SESSION['Email'];
 $newpassword=md5($_POST['npwd']);
 $sql=mysqli_query($conn,"SELECT Password FROM driver_registration where Password='$oldpass' && Email='$useremail'");
 $num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($conn,"update userinfo set Password=' $newpassword' where Email='$useremail'");
$_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="../View/css/dvr_login.css">

    <title></title>
    <script type="text/javascript">
    function valid()
    {
    if(document.chngpwd.opwd.value=="")
    {
    alert("Old Password Filed is Empty !!");
    document.chngpwd.opwd.focus();
    return false;
    }
    else if(document.chngpwd.npwd.value=="")
    {
    alert("New Password Filed is Empty !!");
    document.chngpwd.npwd.focus();
    return false;
    }
    else if(document.chngpwd.cpwd.value=="")
    {
    alert("Confirm Password Filed is Empty !!");
    document.chngpwd.cpwd.focus();
    return false;
    }
    else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
    {
    alert("Password and Confirm Password Field do not match  !!");
    document.chngpwd.cpwd.focus();
    return false;
    }
    return true;
    }
    </script>


  </head>
  <body>
    <div class="body">
            <h2>Change Pasword  </h2> <br>

            <form name="chngpwd" action="" method="post" onSubmit="return valid();">
            <table align="center">
            <tr height="50">
            <td>Old Password :</td>
            <td><input type="password" name="opwd" id="opwd"></td>
            </tr>
            <tr height="50">
            <td>New Passowrd :</td>
            <td><input type="password" name="npwd" id="npwd"></td>
            </tr>
            <tr height="50">
            <td>Confirm Password :</td>
            <td><input type="password" name="cpwd" id="cpwd"></td>
            </tr>
            <tr>
            <td><input type="submit" name="Submit" value="Change Passowrd" /></td>
            </tr>
            </table>
            </form>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
