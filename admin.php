<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getuser.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
	<style type="text/css">


.lnav{
             float: left;
            border: 2px ;
            width: 20.05%;
            height: 481px;

        }
.wrapper{
        float:left;
        border: 5px solid white;
        width: 57.9%;
        height: 481px;
        }
</style>
</head>
<body>
  <?php 
include('Controller/navbar.php');
?><br>
<div class="lnav">
    <?php
    include('Controller/leftnavbar.php');
    ?>
</div><br><br>
<div class="wrapper">
	<form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a person:</option>
  <option value="1">Farhadur Rahman</option>
  <option value="2">Rezoana Afrin</option>
  <option value="3">Ishmam Mir</option>
  <option value="4">Juhair Anjum Joha</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Admin info will be listed here...</b></div>
	
</div>

</body>
</html>