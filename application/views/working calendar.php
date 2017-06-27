<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/customize.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/w3.css" />
<script type="text/javascript" src="<?php echo base_url();?>js/calendar.js" ></script>
<body onload="displayCalendar()" class = "overvieew">

<!-- Navbar -->
<div class="w3-bar" style = "background-color: #0E0B16; color: #E7DFDD;">
  <a href="#" class="w3-bar-item w3-button">Bill Manager</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small">Overview</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small">Graph</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small">Income</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
</div>

<div id="demo" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium" style = "background-color: #0E0B16; color: #E7DFDD;">
  <a href="#" class="w3-bar-item w3-button">Overview</a>
  <a href="#" class="w3-bar-item w3-button">Graph</a>
  <a href="#" class="w3-bar-item w3-button">Income</a>
</div>


<!-- Page Content -->
<div>
  <div class="w3-container white">
    <h1>Overview</h1>
    <table class="w3-table-all w3-hoverable black" style = "width: 60%; margin: 40px 20px;">
    <tr>
      <th>BILL</th>
      <th>AMOUNT</th>
      <th>NEXT PAYMENT DUE</th>
    </tr>
    <tr>
      <td>Car Payment</td>
      <td>₱5000</td>
      <td>25 days</td>
    </tr>
    <tr>
      <td>Electric Bill</td>
      <td>₱2000</td>
      <td>7 days</td>
    </tr>
    <tr>
      <td>Water Bill</td>
      <td>₱390</td>
      <td>9 days</td>
    </tr>
    <tr>
      <td>Internet</td>
      <td>₱899</td>
      <td>13 days</td>
    </tr>
  </table>
  <div id="calendar"></div> 
 </div>
</div>
     
<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
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
