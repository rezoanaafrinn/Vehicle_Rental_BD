<?php include('Controller/navbar.php');?><br>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#toyota{
			background-color: #e5e5e5;
			text-align: center;
		}
		#nissan{
			background-color: #e5e5e5;
			text-align: center;
		}
		#pajero{
			background-color: #e5e5e5;
			text-align: center;
		}
		.suv-container{
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
		}
		footer {
   			padding: 60px;
  			background-color: #00A79D;
  			color: white;
  			height: 100%;
  			width: 100%;
		}
	</style>
</head>
<body>
	<style>
		img{
			align-items: center;
		}
		button{
			text-align: center;
			margin: auto;
			display: flex;
		}
	</style>
	<button id="button2">Tap to see SUV Models</button><br><br>
	<div class="suv-container">
	<div id="toyota" style="display:none;" >
	<img src="images/MicrosoftTeams-image (11).png" height="200" width="300"><br>
	 <label><b>Model:</b></label> 
	Toyota Land Cruiser Prado<br>
	 <label><b>Fuel Type:</b></label>  
		Diesel<br>

	<label><b>Engine:</b></label>	 
	2982 cc<br>

	<label><b>Rent:</b></label> 
	12,000 per day
	</div><br>
	<div id="nissan" style="display:none;">
	<img src="images/MicrosoftTeams-image (12).png" height="200" width="300"><br>
	<label><b>Model:</b></label> 
	Nissan X trail<br>
	 <label><b>Fuel Type:</b></label>  
		Diesel/Hybrid<br>

	<label><b>Engine:</b></label>	 
	1995 cc<br>

	<label><b>Rent:</b></label> 
	 9,000 per day
	</div><br>
	<div id="pajero" style="display:none;">
	<img src="images/MicrosoftTeams-image (13).png"height="300" width="400"><br>
	<label><b>Model:</b></label> 
	Mitsubishi Pajero Sport<br>
	 <label><b>Fuel Type:</b></label>  
		Diesel<br>

	<label><b>Engine:</b></label>	 
	 2972 CC<br>

	<label><b>Rent:</b></label> 
	 11,000 per day
	</div>
</div><br><br>

<footer>
 		<?php include('footer.php');?>
</footer>
<script>
	$("#button2").click(function(){

			    //$("#div1").______; wirte correct code to fadein in 3000 milisecond (8)
			    $("#toyota").fadeIn(3000);

			    //_______.fadeIn(slow); wirte correct selector to fadein slow for the div with id div2 (9)
				$("#nissan").fadeIn("slow");
				//_______.fadeIn(slow); wirte correct selector to fadein slow for the div with id div2 (9)
				$("#pajero").fadeIn("slow");
			  });
</script>
</body>
</html>