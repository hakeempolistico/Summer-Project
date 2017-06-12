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
	
	<title>Bill Manager - Dashboard</title>

	
</head>

	<body style="background-color: #effcf4">

		<!-- Navbar -->	
		<div class="w3-bar" style="background-color: #323132;">
		  
		  <a href="#" class="w3-bar-item w3-button w3-right w3-hover-none w3-text-grey w3-hover-text-white">Admin 
		  <i class="fa fa-user" aria-hidden="true"></i></a>
		 
		  

		</div>
		<!-- Sidebar -->
		<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%; ">
		  <br>
		  <a href="dashboard" class="w3-bar-item w3-button" class="active"a>Dashboard</a>
		  <a href="manager" class="w3-bar-item w3-button">Bill Manager</a>
		  <a href="history" class="w3-bar-item w3-button">History</a>
		  <a href="#" class="w3-bar-item w3-button">Reports</a>
		</div>

		<!-- Content -->
		<div style="margin-left:15%">

		<div class="w3-container" style="background-color: #1fa67b; color:white">
		  <h1>Dashboard</h1>
		</div>
		
			
			<div class="w3-container" style="background-color: #effcf8"><br>
			<div class="w3-container w3-col" style="width:0%">
				
			</div>
			
			<div class="w3-container w3-col w3-border w3-row" style="width:100%">
			<br>
			<center>
				<div class="w3-col" style="width: 25%">						
					<div class="w3-card-4 w3-center w3-border" onclick="document.getElementById('id01').style.display='block'" style="width:240px; height: 143px; background-color: #bdd2e5;"><br>
						<i class="fa fa-tint fa-5x" aria-hidden="true" style="font-size: 80px; margin-bottom: 8px; color: #4681b4"></i>
						<div class="w3-container w3-center" style="height: 30px; font-size: 18px; background-color: #4681b4; color: white">PAID</div>
					</div>
				</div>
																
				<div class="w3-col" style="width: 25%">
					<div class="w3-card-4 w3-center w3-border" onclick="document.getElementById('id02').style.display='block'" style="width:240px; height: 143px; background-color: #f2e875"><br>
						<i class="fa fa-internet-explorer fa-5x" aria-hidden="true" style="font-size: 70px; margin-bottom: 18px; color: #cebe13"></i>
						<div class="w3-container w3-center" style="height: 30px; font-size: 18px; background-color: #cebe13; color: white">UNPAID</div>
					</div>
				</div>
		
				<div class="w3-col" style="width: 25%">						
					<div class="w3-card-4 w3-center w3-border" onclick="document.getElementById('id03').style.display='block'" style="width:240px; height: 143px; background-color: #f7cac9"><br>
						<i class="fa fa-usd fa-5x" aria-hidden="true" style="font-size: 80px; margin-bottom: 8px; color: #e65755"></i>		
						<div class="w3-container w3-center" style="height: 30px; font-size: 18px; background-color: #e65755; color: white">TOTAL EXPENSES</div>	
					</div>
					<br>
				</div>

				<div class="w3-col" style="width: 25%">						
					<div class="w3-card-4 w3-center w3-border" onclick="document.getElementById('id04').style.display='block'" style="width:240px; height: 143px; background-color:#d2a2c9 "><br>			
						<i class="fa fa-credit-card fa-5x" aria-hidden="true" style="font-size: 80px; margin-bottom: 8px; color: #854078"></i>		
						<div class="w3-container w3-center" style="height: 30px; font-size: 17px; background-color: #854078; color: white">MORE INFO</div>	
					</div>
					<br>
				</div>
			</center>		
			
			</div>
			
			<div class="w3-container w3-col" style="width:0%">
				
			</div>
			<br><br>

			<div class="w3-row">
			<br>
			<div class="w3-container w3-col w3-border" style="width: 48.50%; height: 330px">
				
			</div>
			<div class="w3-container w3-col" style="width: 3%">
				
			</div>
			<div class="w3-container w3-col w3-border" style="width: 48.50%; height: 330px">
				
			</div>
			</div><br>
			</div>

			<!-- Modal -->

			<div id="id01" class="w3-modal">
			    <div class="w3-modal-content w3-animate-zoom w3-card-4" style="height: 300px; width: 300px">
			      <header class="w3-container" style="background-color: #4681b4"> 
			        <span onclick="document.getElementById('id01').style.display='none'" 
			        class="w3-button w3-display-topright">&times;</span>
			        <h4>Water Bill</h4>
			      </header>
			      <div class="w3-container">
			      	<p><b>TOTAL COST:</b> PHP 500.00</p>
			        <p><b>DUE DATE:</b> JUNE 18, 2017</p>
			        <p><b> STATUS:</b> UNPAID</p>
			      </div>			     
			    </div>
			 </div>

			 <div id="id02" class="w3-modal">
			    <div class="w3-modal-content w3-animate-zoom w3-card-4" style="height: 300px; width: 300px">
			      <header class="w3-container" style="background-color: #cebe13"> 
			        <span onclick="document.getElementById('id02').style.display='none'" 
			        class="w3-button w3-display-topright">&times;</span>
			        <h4>Internet Bill</h4>
			      </header>
			      <div class="w3-container">
			      	<p><b>TOTAL COST:</b> PHP 1200.00</p>
			        <p><b>DUE DATE:</b> JUNE 18, 2017</p>
			        <p><b> STATUS:</b> UNPAID</p>
			      </div>			     
			    </div>
			 </div>

			 <div id="id03" class="w3-modal">
			    <div class="w3-modal-content w3-animate-zoom w3-card-4" style="height: 300px; width: 300px">
			      <header class="w3-container" style="background-color: #e65755"> 
			        <span onclick="document.getElementById('id03').style.display='none'" 
			        class="w3-button w3-display-topright">&times;</span>
			        <h4>Cable Bill</h4>
			      </header>
			      <div class="w3-container">
			      	<p><b>TOTAL COST:</b> PHP 600.00</p>
			        <p><b>DUE DATE:</b> JUNE 18, 2017</p>
			        <p><b> STATUS:</b> UNPAID</p>
			      </div>			     
			    </div>
			 </div>

			 <div id="id04" class="w3-modal">
			    <div class="w3-modal-content w3-animate-zoom w3-card-4" style="height: 300px; width: 300px">
			      <header class="w3-container" style="background-color: #854078"> 
			        <span onclick="document.getElementById('id04').style.display='none'" 
			        class="w3-button w3-display-topright">&times;</span>
			        <h4>Credit Card Bill</h4>
			      </header>
			      <div class="w3-container">
			      	<p><b>TOTAL COST:</b> PHP 1500.00</p>
			        <p><b>DUE DATE:</b> JUNE 18, 2017</p>
			        <p><b> STATUS:</b> UNPAID</p>
			      </div>			     
			    </div>
			 </div>

	</body>
</html>
