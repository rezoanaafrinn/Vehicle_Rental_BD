<?php include('Controller/navbar.php');?><br>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		#yamaha{
			background-color: #e5e5e5;
			text-align: center;
		}
		#honda{
			background-color: #e5e5e5;
			text-align: center;
		}
		#suzuki{
			background-color: #e5e5e5;
			text-align: center;
		}
		.bike-container{
			display: grid;
			grid-template-columns: 1fr 1fr;
		}
		footer {
   			padding: 60px;
  			background-color: #00A79D;
  			color: white;
  			height: 100%;
  			width: 100%;
		}
		button{
			text-align: center;
			margin: auto;
			display: flex;
		}
	</style>
	<button id="button2">Tap to see Motobike Models</button><br><br>
	<div class="bike-container">
	<div id="yamaha"style="display:none;">
	<img src="images/MicrosoftTeams-image (17).png" height="200" width="300"><br>
	 <label><b>Model:</b></label> 
	Yamaha R15 V3<br>
	 <label><b>Fuel Type:</b></label>  
		Octane<br>

	<label><b>Engine:</b></label>	 
	155 CC<br>

	<label><b>Rent:</b></label> 
	3500 per day
	</div>
	<div id="honda"style="display:none;">
	<img src="images/MicrosoftTeams-image (18).png" height="200" width="300"><br>
	<label><b>Model:</b></label> 
	Honda Exmotion<br>
	 <label><b>Fuel Type:</b></label>  
		Octane<br>

	<label><b>Engine:</b></label>	 
	150 CC<br>

	<label><b>Rent:</b></label> 
	3,700 per day
	</div>
	<div id="suzuki"style="display:none;">
	<img src="images/MicrosoftTeams-image (19).png"height="200" width="300"><br>
	<label><b>Model:</b></label> 
	Suzuki GSXR<br>
	 <label><b>Fuel Type:</b></label>  
		Octane<br>

	<label><b>Engine:</b></label>	 
	 150 CC<br>

	<label><b>Rent:</b></label> 
	3,000 per day
	</div>
</div><br><br>
<footer>
 		<?php include('footer.php');?>
</footer>
<script>
	$("#button2").click(function(){

			    //$("#div1").______; wirte correct code to fadein in 3000 milisecond (8)
			    $("#yamaha").fadeIn(3000);

			    //_______.fadeIn(slow); wirte correct selector to fadein slow for the div with id div2 (9)
				$("#honda").fadeIn("slow");
				//_______.fadeIn(slow); wirte correct selector to fadein slow for the div with id div2 (9)
				$("#suzuki").fadeIn("slow");
			  });
</script>
</body>
</html>