<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/customize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/w3.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>FA/css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>FA/css/font-awesome.min.css" />
	<script type="text/javascript" src="<?php echo base_url();?>js/calendar.js" ></script>
</head>
<body onload="displayCalendar()" class = "overvieew">

<!-- Navbar -->
<div class="w3-bar w3-medium" style = "background-color: #0E0B16; color: #E7DFDD;">
  <a href="#" class="w3-bar-item w3-button">Bill Manager</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small">Overview</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small">Graph</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small">Income</a>
  <a href="#" class="w3-right w3-bar-item w3-button w3-hide-small">Sign Up</a>
  <a href="<?php echo site_url('welcome/login') ?>" class="w3-right w3-bar-item w3-button w3-hide-small">Login</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
</div>

<div id="demo" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium" style = "background-color: #0E0B16; color: #E7DFDD;">
  <a href="#" class="w3-bar-item w3-button">Overview</a>
  <a href="#" class="w3-bar-item w3-button">Graph</a>
  <a href="#" class="w3-bar-item w3-button">Income</a>
  <a href="#" id="myBtn1"><span class="fa fa-user-circle"></span> Sign Up</a></li>
  <a href="<?php echo site_url('welcome/login') ?>" id="myBtn2"><span class="fa fa-sign-in"></span> Log In</a></li>
</div>


<!-- Page Content -->
  <div class="w3-container white">
    <h1>Overview</h1>
    <div class="w3-row">
    <div class="w3-col s8">
    <table class="w3-table w3-white w3-striped w3-bordered w3-hoverable black" style = "width: 95%; margin: 40px 90px 40px 0; min-height: 400px;">
    <tr style = "min-height: 37px; height:37px; background-color: #1abc9c;">
      <th>BILL</th>
      <th>AMOUNT</th>
      <th>NEXT PAYMENT DUE</th>
    </tr>
    <tr style = "min-height: 25px; height:25px;">
      <td><i class="fa fa-car" aria-hidden="true" style = "margin-right: 10px;"></i>Car Payment</td>
      <td>₱5000</td>
      <td>25 days</td>
    </tr>
    <tr style = "min-height: 37px; height:25px;">
      <td><i class="fa fa-bolt fa-lg" aria-hidden="true" style = "margin-right: 19px;"></i>Electric Bill</td>
      <td>₱2000</td>
      <td>7 days</td>
    </tr>
    <tr style = "min-height: 37px; height:37px;">
      <td><i class="fa fa-tint fa-lg" aria-hidden="true" style = "margin-right: 18px;"></i>Water Bill</td>
      <td>₱390</td>
      <td>9 days</td>
    </tr>
    <tr style = "min-height: 37px; height:37px;">
      <td><i class="fa fa-internet-explorer fa-lg" aria-hidden="true" style = "margin-right: 10px;"></i>Internet</td>
      <td>₱899</td>
      <td>13 days</td>
    </tr>
    <tr style = "min-height: 37px; height:37px;">
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr style = "min-height: 37px; height:37px;">
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr style = "min-height: 37px; height:37px;">
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr style = "min-height: 37px; height:37px;">
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr style = "min-height: 37px; height:37px;">
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
  	<div class="w3-col s3">
		<div class="w3-container" style = "padding: 0 60px; color: #EAC67A">
			<a href="<?php echo site_url('welcome/add') ?>"><i class="fa fa-plus fa-2x" aria-hidden="true" style = "padding-left: 4px; color: #1abc9c;"></i>
			<br>
			ADD
			</a>
		</div>
	</div>
	<div class="w3-col s3">
		<div class="w3-container" style = "padding: 0 60px; color: #EAC67A">
			<i class="fa fa-pencil fa-2x" aria-hidden="true" style = "padding-left: 5px; color: #1abc9c"></i>
			<br>
			EDIT
		</div>
	</div>
	<div class="w3-col s3">
		<div class="w3-container" style = "padding: 0 60px; color: #EAC67A">
			<i class="fa fa-times fa-2x" aria-hidden="true" style = "padding-left: 15px; color: #1abc9c"></i>
			<br>
			DELETE
		</div>
	</div>
	<div class="w3-col s3">
		<div class="w3-container" style = "padding: 0 60px; color: #EAC67A">
			<i class="fa fa-archive fa-2x" aria-hidden="true" style = "padding-left: 18px; color: #1abc9c"></i>
			<br>
			ARCHIVE
		</div>
	</div>
  </div>
<div class="w3-col s4">
 <div class="month" style = "margin: 40px 90px 0 0;">      
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li style="text-align:center">
      May<br>
      <span style="font-size:18px">2016</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
<footer class = "w3-container w3-center" style = "background-color: #1abc9c;">
<h4>Monthly Summary</h4>
<div class = "w3-center" style = "padding: 10px 25px;">
<hr style = "margin-top: -10px;">
<table class = "w3-center">
	<tr>
		<td>Due This Month</td>
		<td>Due Soon</td>
		<td>Paid This Month</td>
	</tr>
	<tr>
		<td><b>1</b></td>
		<td><b>4</b></td>
		<td><b>0</b></td>
	</tr>
	<tr>
		<td>Est. Amt.</td>
		<td>Est. Amt. Due</td>
		<td>Amount</td>
	</tr>
	<tr>
		<td>₱8289</td>
		<td>₱2000</td>
		<td>₱0</td>
	</tr>
</table>
</div>
</footer>
</div>
</div>

<br><br><br>

     
<script>
function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
          
</body>
</html>
