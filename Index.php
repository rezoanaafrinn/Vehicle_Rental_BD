
<?php include('Controller/navbar.php');?>
 


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home</title>
 	<style>
 		p{
 			font-style: float:right;
 		}
 		footer {
   
  			padding: 60px;
  			background-color: #00A79D;
  			color: white;
  			height: 100%;
  			width: 100%;
}
.main {
	align-items: center;
}
@media only screen and (max-width:800px) {
  /* For tablets: */
  .main {
    width: 80%;
    padding: 0;
  }
 }
 @media only screen and (max-width:300px) {
  /* For mobile phones: */
  .main {
    width: 100%;
  }
}
 	</style>
 </head>
 <body>
 	<div class="main">
 	<img src="images/index.png" style="width:100%; height: 100%;">
 	</div>
 	
 	<footer>
 		<?php include('footer.php');?>
</footer>
 </body>
 </html>