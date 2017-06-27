<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<title>ADD</title>
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
<div class="w3-bar" style = "background-color: #0E0B16; color: #E7DFDD;">
  <a href="#" class="w3-bar-item w3-button">Bill Manager</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small">Overview</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small">Graph</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small">Income</a>
  <a href="#" class="w3-right w3-bar-item w3-button w3-hide-small">Sign Up</a>
  <a href="#" class="w3-right w3-bar-item w3-button w3-hide-small">Login</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
</div>

<div id="demo" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium" style = "background-color: #0E0B16; color: #E7DFDD;">
  <a href="#" class="w3-bar-item w3-button">Overview</a>
  <a href="#" class="w3-bar-item w3-button">Graph</a>
  <a href="#" class="w3-bar-item w3-button">Income</a>
  <a href="#" id="myBtn1"><span class="fa fa-user-circle"></span> Sign Up</a></li>
  <a href="#" id="myBtn2"><span class="fa fa-sign-in"></span> Log In</a></li>
</div>


<!-- Page Content -->
  <div class="w3-container white" style = "padding: 40px 100px;">
    <h1>Create New Bill</h1>
    <form class="w3-container" style = "padding: 10px 50px;">
    <div class = "w3-row">
      <div class = "w3-half">
        <p style = " padding: 0 0 25px 0;">      
        <label>Bill Name</label>
        <input class="w3-input w3-border-0" type="text" style = "width: 40%;"></p>
        <div class = "w3-row">
          <div class="w3-third" style = "padding: 0 10px 30px 0;">
            <label>Next Due Date</label>
             <select class="w3-select w3-border" name="option">
          </select>
          </div>
          <div class="w3-third" style = "padding: 21px 10px 30px 0;">
             <select class="w3-select w3-border" name="option">
          </select>
          </div>
          <div class="w3-third" style = "padding: 21px 10px 30px 0;">
             <select class="w3-select w3-border" name="option">
          </select>
          </div>
        </div>
        <div class = "w3-row">
          <div class="w3-half" style = "padding: 0 10px 30px 0;">
            <label>Amount Due</label>
            <input class="w3-input w3-border-0" type="text">
          </div>
          <div class="w3-half" style = "padding: 0 10px 30px 0;">
            <label>Repeat Interval</label>
            <select class="w3-select w3-border" name="option">
          </select>
          </div>
        </div>
    </div>
    <div class = "w3-half" style = "padding: 0 0 0 50px;">
        <p>Icon</p>
        <div class = "w3-row w3-right-align">
        <div class = "w3-quarter" style = "width: 15%;">
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;" checked>
          <label><img src="<?php echo base_url(); ?>img/house.png" style="width:50%"></label>
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/cc.png" style="width:50%"></label>
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/fire.png" style="width:50%"></label>
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/car.png" style="width:50%"></label>
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/lug.png" style="width:50%"></label>
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/phone.png" style="width:50%"></label>
        </div>
        <div class = "w3-quarter" style = "width: 15%;">
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/water.png" style="width:50%"></label>
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/house.png" style="width:50%"></label>
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/cc.png" style="width:50%"></label>
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/fire.png" style="width:50%"></label>
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/car.png" style="width:50%"></label>
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/lug.png" style="width:50%"></label>
        </div>
        <div class = "w3-quarter" style = "width: 15%;">
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/phone.png" style="width:50%"></label>
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/water.png" style="width:50%"></label>
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/house.png" style="width:50%"></label>
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/cc.png" style="width:50%"></label>
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/fire.png" style="width:50%"></label>
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/car.png" style="width:50%"></label>
        </div>
        <div class = "w3-quarter" style = "width: 15%;">
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/lug.png" style="width:50%"></label>
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/phone.png" style="width:50%"></label>
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/water.png" style="width:50%"></label>
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/house.png" style="width:50%"></label>
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/cc.png" style="width:50%"></label>
          <input class="w3-radio" type="radio" name="gender" value="male" style="margin-bottom: 10px;">
          <label><img src="<?php echo base_url(); ?>img/fire.png" style="width:50%"></label>
        </div>
      </div>
      </div>
  </div>
  <br>
  <div class="w3-container w3-center">
  <button class="w3-button w3-large" style="margin-left: -150px; background-color: #1abc9c; color: black; width:40%;">Create</button>
  </div>
  </form>
</div>
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
