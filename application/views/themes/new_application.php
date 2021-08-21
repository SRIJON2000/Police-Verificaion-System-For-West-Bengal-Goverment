<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layouts/header_view');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color:white;
  padding: 20px;
}

.row {
	
	float:left;
}

.col1 {
  width: 10%;
  margin-top: 6px;
  position:fixed;
  left: 5%;
}

.col1_in {
  width: 20%;
  margin-top: 6px;
  position:fixed;
  left: 18%;
}

.col2 {
  position:fixed;
  width: 10%;
  margin-top: 6px;
  left: 40%;
}

.col2_in {
  width: 20%;
  margin-top: 6px;
  position: fixed;
  left: 48%
}

.col3 {
  position: fixed;
  width: 10%;
  margin-top: 6px;
  left: 70%
}

.col3_in {
  width: 20%;
  margin-top: 6px;
  position: fixed;
  left: 78%
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2 style="text-align:center">Application Form</h2>
<div class="container">
  <form action="/action_page.php">

  <div class="row">
      <div class="col1">
        <label for="rcptno"><b>Receipt No</b></label>
      </div>
      <div class="col1_in">
        <input type="text" id="rcptno" name="receiptno" placeholder="Receipt No">
      </div>
    </div>

	<div class="row">
      <div class="col2">
        <label for="rcptdate"><b>Receipt Date</b></label>
      </div>
      <div class="col2_in">
        <input type="text" id="rcptdate" name="receiptdate" placeholder="Receipt Date..">
      </div>
    </div><br/><br/><br/><br/><br/><br/>

	<div class="row">
	<div class="col1">
        <label for="authnm"><b>Authority Name</b></label>
      </div>
      <div class="col1_in">
        <input type="text" id="authnm" name="authorityname"  placeholder="Authority Name">
      </div>
    </div>

	<div class="row">
      <div class="col2">
        <label for="authaddr"><b>Authority Address</b></label>
      </div>
      <div class="col2_in">
        <input type="text" id="authaddress" name="authorityaddress" placeholder="Authority Address">
      </div>
    </div><br/><br/><br/><br/><br/>
	<p style="font-size:40px; text-align:center; color:red">Candidate Personal Details</p>
    <div class="row">
      <div class="col1">
        <label for="fname"><b>First Name</b></label>
      </div>
      <div class="col1_in">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>

    <div class="row">
      <div class="col2">
        <label for="mname"><b>Middle Name</b></label>
      </div>
      <div class="col2_in">
        <input type="text" id="mname" name="middlename" placeholder="Your middle name..">
      </div>
    </div>

	<div class="row">
      <div class="col3">
        <label for="lname"><b>Last Name</b></label>
      </div>
      <div class="col3_in">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>

    
</body>
</html>