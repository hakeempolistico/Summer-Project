<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/dashboard.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>FA/css/font-awesome.min.css" />
	
	<title>Dashboard</title>

</head>

	<body style="background-color: #effcf4">

		<!-- Navbar -->	
		<div class="w3-bar" style="background-color: #323132;">
		  
		  <a href="#" class="w3-bar-item w3-button w3-right w3-hover-none w3-text-grey w3-hover-text-white">Admin 
		  <i class="fa fa-user" aria-hidden="true"></i></a>
		 
		  

		</div>

  		<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-left" style="display:none" id="mySidebar">
  			<button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
  				<a href="#" class="w3-bar-item w3-button">Link 1</a>
  				<a href="#" class="w3-bar-item w3-button">Link 2</a>
  				<a href="#" class="w3-bar-item w3-button">Link 3</a>
		</div>

		<div class="w3-main" id="main">
			<div class="w3-teal">
  				<button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
			</div>
			<div class = "w3-col w3-container">
				<div class="w3-container" style = "margin-bottom: 20px;">
		  		<h1>Dashboard</h1>
		  		</div>
		  		<div class = "w3-container" style = "padding: 0 8%">

		  			<div class="w3-col w3-container"><center>
		  				<div class = "w3-row">
							<div class = "w3-col" style = "width:25%;" >
								<div class="w3-card-4 w3-center w3-border" onclick="document.getElementById('id01').style.display='block'" style="width:240px; height: 160px; background-color: #bdd2e5;">					
								<i class="fa fa-tint fa-5x" aria-hidden="true" style="font-size: 80px; margin: 20px 0 20px 0; color: #4681b4"></i>
								<div class="w3-container w3-center" style="height: 40px; font-size: 25px; background-color: #4681b4; color: white;">PAID</div>
								</div>
							</div>
							<div class = "w3-col" style = "width:25%;">
								<div class="w3-card-4 w3-center w3-border" style="width:240px; height: 160px; background-color: #f2cd75">
								<i class="fa fa-internet-explorer fa-5x" aria-hidden="true" style="font-size: 60px; margin: 25px 0 35px 0; color: #ce9613"></i>
								<div class="w3-container w3-center" style="height: 40px; font-size: 25px; background-color: #ce9613; color: white;">INTERNET</div>
							</div>
							</div>
							<div class = "w3-col" style = "width:25%;">
								<div class="w3-card-4 w3-center w3-border" style="width:240px; height: 160px; background-color: #f7cac9">					
								<i class="fa fa-television fa-5x" aria-hidden="true" style="font-size: 80px; margin: 20px 0 19px 0; color: #e65755"></i>		
								<div class="w3-container w3-center" style="height: 40px; font-size: 25px; background-color: #e65755; color: white;">CABLE</div>	
								</div>
							</div>
							<div class = "w3-col" style = "width:25%;">
								<div class="w3-card-4 w3-center w3-border" style="width:240px; height: 160px; background-color:#d2a2c9 ">					
								<i class="fa fa-credit-card fa-5x" aria-hidden="true" style="font-size: 80px; margin: 20px 0 19px 0; color: #854078"></i>		
								<div class="w3-container w3-center" style="height: 40px; font-size: 25px; background-color: #854078; color: white;">CREDIT CARD</div>	
								</div>
							</div>
						</div></center>
					</div>
				</div>
			</div>
		</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

</body>
</html>