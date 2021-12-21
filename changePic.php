<?php
include("../View/html/nav01.html");
include("../View/html/profile.sitebar.html");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    .pic{
      border-radius:60%;
      display:block;
    }
    .main{
      background-color: #00A79D;
      margin: auto;
      width: 40%;
      padding: 20px;
      border-top: 110px solid white;
      color: white;

    }
    .element{
      margin-left: 20%;
    }
    .upload{
    margin-left: 10%;
    }
    </style>
  </head>
  <body>
    <div class="main">
       <div class="element">

        <form action="" method="post" enctype="multipart/form-data">

                <?php
    				session_start();
    				include '../Model/database.php';
    				$ID= $_SESSION["ID"];
    				$sql=mysqli_query($conn,"SELECT * FROM driver_registration where ID='$ID' ");
    				$row  = mysqli_fetch_array($sql);
                ?>
            <img class="pic" src="upload/<?php echo $row['File'] ?>" height="130" width="130" "/> <br>
          </div>
          <div class="upload">
            <br><br>
              <p> <b>Select new pic: </b><input type="file" name="file"> </p>
              <br><br>
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Submit</button>

          </div>

       </div>


  </body>
</html>
