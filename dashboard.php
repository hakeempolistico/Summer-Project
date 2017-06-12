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
		  
		  <a href="#" class="w3-bar-item w3-button w3-right w3-hover-none w3-text-grey w3-hover-text-white">Admin</a>
		  <a href="#" class="w3-bar-item w3-button w3-right w3-hover-none w3-text-grey w3-hover-text-white">Settings</a>
		  <a href="#" class="w3-bar-item w3-button w3-right w3-hover-none w3-text-grey w3-hover-text-white">Dashboard</a>
		  

		</div>
		<!-- Sidebar -->
		<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%; ">
		  <br>
		  <a href="#" class="w3-bar-item w3-button">Overview</a>
		  <a href="#" class="w3-bar-item w3-button">Link 2</a>
		  <a href="#" class="w3-bar-item w3-button">Link 3</a>
		</div>

		<!-- Content -->
		<div style="margin-left:15%">

		<div class="w3-container" style="background-color: #1fa67b; color:white">
		  <h1>Dashboard</h1>
		</div>
		<br><br><br>
		<div class="w3-row w3-border">
			<div class="w3-container w3-col" style="width:10%">
				
			</div>
			
			<div class="w3-container w3-col w3-border" style="width:80%">
			<br><br><br>
			<table>
				<tr>
					<td>
						<div class="w3-row">
							<div class="w3-col" style="width: 33.33%">
						
								<div class="w3-card-4 w3-center w3-border" style="width:240px; height: 160px;">
									
									<i class="fa fa-tint fa-5x" aria-hidden="true" style="font-size: 120px"></i>	
																						
								</div>
							</div>
						</div>
						</td>
					<td>
						<div class="w3-row">
							<div class="w3-col" style="width: 33.33%"></div>
								<div class="w3-card-4 w3-center w3-border" style="width:240px; height: 160px">
										
										<i class="fa fa-internet-explorer fa-5x" aria-hidden="true" style="font-size: 100px"></i>	
										
								</div>
							</div>
						</div>
					</td>
					<td>
						<div class="w3-row">
							<div class="w3-col" style="width: 33.33%">
						
								<div class="w3-card-4 w3-center w3-border" style="width:240px; height: 160px">
										
										<i class="fa fa-television fa-5x" aria-hidden="true" style="font-size: 100px"></i>										
								</div>
							</div>
						</div>
					</td>
				</tr>
			</table><br><br><br>
			</div>
			
			<div class="w3-container w3-col" style="width:10%">
				
			</div>
		</div>

	</body>
</html>