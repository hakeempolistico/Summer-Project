<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/customize.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/dashboard.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>FA/css/font-awesome.min.css" />
	
	<script type="text/javascript" src="<?php echo base_url(); ?>fs/js/fusioncharts.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>fs/js/themes/fusioncharts.theme.ocean.js"></script>

	<title>Dashboard</title>

	
</head>

	<body style="background-color: white">

		<!-- Navbar -->	
		<div class="w3-bar" style="background-color: #323132;">
		  
		  <a href="#" class="w3-bar-item w3-button w3-right w3-hover-none w3-text-grey w3-hover-text-white">Admin 
		  <i class="fa fa-user" aria-hidden="true"></i></a>
		 
		  

		</div>
	
		<div style = "width:700px;">
  		<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-left" style="display:none;" id="mySidebar">
  			<button class="w3-bar-item w3-button" onclick="w3_close()">Close &times;</button>
  				<a href="<?php echo site_url('welcome/dash') ?>" class="w3-bar-item w3-button">Dashboard</a>
  				<a href="<?php echo site_url('welcome/bills') ?>" class="w3-bar-item w3-button">Bills</a>
  				<a href="#" class="w3-bar-item w3-button">Reports</a>
		</div>
		</div>

		<div class="w3-main" id="main">
			<div class="w3-teal">
  				<button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
			</div>

			<div class="w3-container w3-animate-top" style = "animation-duration: 1.5s; margin-bottom: 20px;">
		  	<h1>Expenses</h1>
		  	</div>
			
		  	<div class="gallery cf">
  				<div class = "w3-animate-left" style = "animation-duration: 1.5s;">
    				<img src="http://abload.de/img/a6aawu.jpg" />
    				<div class="overlay">
    					<div class="text">Tubig</div>
  					</div>
  				</div>
  				<div class = "w3-animate-left" style = "animation-duration: 1.5s;">
    				<img src="http://abload.de/img/a6aawu.jpg" />
    				<div class="overlay">
    					<div class="text">Kuryente</div>
  					</div>
  				</div>
  				<div class = "w3-animate-left" style = "animation-duration: 1.5s;">
    				<img src="http://abload.de/img/a6aawu.jpg" />
    				<div class="overlay">
    					<div class="text">Cable</div>
  					</div>
  				</div>
  				<div class = "w3-animate-left" style = "animation-duration: 1.5s;">
    				<img src="http://abload.de/img/a6aawu.jpg" />
    				<div class="overlay">
    					<div class="text">Internet</div>
  					</div>
  				</div>
  				<div class = "w3-animate-left" style = "animation-duration: 1.5s;">
    				<img src="http://abload.de/img/a6aawu.jpg" />
    				<div class="overlay">
    					<div class="text">Tuition</div>
  					</div>
  				</div>
  				<div class = "w3-animate-left" style = "animation-duration: 1.5s;">
    				<img src="http://abload.de/img/a6aawu.jpg" />
    				<div class="overlay">
    					<div class="text">Kotse</div>
  					</div>
  				</div>
  				<div class = "w3-animate-left" style = "animation-duration: 1.5s;">
    				<img src="http://abload.de/img/a6aawu.jpg" />
    				<div class="overlay">
    					<div class="text">Credit Card</div>
  					</div>
  				</div>
  				<div class = "w3-animate-left" style = "animation-duration: 1.5s;">
    				<img src="http://abload.de/img/a6aawu.jpg" />
    				<div class="overlay">
    					<div class="text">Pag-ibig</div>
  					</div>
  				</div>
  				<div class = "w3-animate-left" style = "animation-duration: 1.5s;">
    				<img src="http://abload.de/img/a6aawu.jpg" />
    				<div class="overlay">
    					<div class="text">SSS</div>
  					</div>
  				</div>
  				<div class = "w3-animate-left" style = "animation-duration: 1.5s;">
    				<img src="http://abload.de/img/a6aawu.jpg" />
    				<div class="overlay">
    					<div class="text">Pagkain</div>
  					</div>
  				</div>
  				<div class = "w3-animate-left" style = "animation-duration: 1.5s;">
    				<img src="http://abload.de/img/a6aawu.jpg" />
    				<div class="overlay">
    					<div class="text">Will to live</div>
  					</div>
  				</div>
  				<div class = "w3-animate-left" style = "animation-duration: 1.5s;">
    				<img src="http://abload.de/img/a6aawu.jpg" />
    				<div class="overlay">
    					<div class="text">Ayoko na mabuhay</div>
  					</div>
  				</div>
			</div>
		</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "15%";
  document.getElementById("mySidebar").style.width = "15%";
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