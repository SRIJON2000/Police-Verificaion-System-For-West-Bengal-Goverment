<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layouts/header_view');
?>
<!DOCTYPE html>
<html>
<head>
<title>New Application</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 body {font-family: Arial, Helvetica, sans-serif;}
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


.row {
	margin-right: -15px;
  margin-left: -15px;
	float:left;
}

.col1 {
  width: 10%;
  margin-top: 6px;
  position:absolute;
  left: 5%;
}

.col1_in {
  width: 20%;
  margin-top: 6px;
  position:absolute;
  left: 18%;
}

.col2 {
  position:absolute;
  width: 10%;
  margin-top: 6px;
  left: 40%;
}

.col2_in {
  width: 20%;
  margin-top: 6px;
  position: absolute;
  left: 48%
}

.col3 {
  position: absolute;
  width: 10%;
  margin-top: 6px;
  left: 70%
}

.col3_in {
  width: 20%;
  margin-top: 6px;
  position:absolute;
  left: 78%;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

/* Clear floats after the columns */


</style>
</head>
<body>

<h2 style="text-align:center">Application Form</h2>
  <form action="/action_page.php">

  <div class="row">
      <div class="col1">
        <label for="rcptno"><b>Receipt No</b></label>
      </div>
      <div class="col1_in">
        <input type="text" id="rcptno" name="receiptno" placeholder="Receipt No">
      </div>
    <!--</div>

	<div class="row">-->
      <div class="col3">
        <label for="rcptdate"><b>Receipt Date</b></label>
      </div>
      <div class="col3_in">
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
      <div class="col3">
        <label for="authaddr"><b>Authority Address</b></label>
      </div>
      <div class="col3_in">
        <input type="text" id="authaddress" name="authorityaddress" placeholder="Authority Address">
      </div>
    </div><br/><br/><br/><br/><br/>
	<p style="font-size:40px; text-align:center; color:red">Candidate Personal Details</p><br/>
  <div class="row">
    <div class="col1_in">
        <label for="fname" style="color:blue;"><b>First Name</b></label>
      </div>
      <div class="col2_in">
        <label for="mname" style="color:blue;"><b>Middle Name</b></label>
      </div>
      <div class="col3_in">
        <label for="lname" style="color:blue;"><b>Last Name</b></label>
      </div>
  </div><br/><br/>

    <div class="row">
      <div class="col1">
        <p><b>Candidate Name</b></p>
      </div>
      <div class="col1_in">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    
      <div class="col2_in">
        <input type="text" id="mname" name="middlename" placeholder="Your middle name..">
      </div>
    
      <div class="col3_in">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div><br/><br/><br/><br/>

	<div class="row">
      <div class="col1">
        <label for="fathername"><b>Candidate's Father Name</b></label>
      </div>
      <div class="col1_in">
        <input type="text" id="fathername" name="fathername" placeholder="Father's Name...">
      </div>
    </div>

  <div class="row">
      <div class="col2">
        <label for="nationality"><b>Nationality</b></label>
      </div>
      <div class="col2_in">
        <input type="text" id="nation" name="nation" value="India" placeholder="Your nation..">
      </div>
  </div>

  <div class="row">
      <div class="col3">
        <label for="dob"><b>Date Of Birth</b></label>
      </div>
      <div class="col3_in">
        <input type="date" id="dob" name="dob" style="height: 40px; font-size: 20px">
      </div>
  </div><br/><br/><br/><br/>
   
  <div class="row">
      <div class="col1">
        <label for="mothername"><b>Candidate's Mother Name</b></label>
      </div>
      <div class="col1_in">
        <input type="text" id="mothername" name="mothername" placeholder="Mother's Name...">
      </div>
  </div>

  <div class="row">
      <div class="col2">
        <label for="pob"><b>Place Of Birth</b></label>
      </div>
      <div class="col2_in">
        <input type="text" id="pob" name="pob" placeholder="POB">
      </div>
  </div>

  <div class="row">
      <div class="col3">
        <label for="gender"><b>Gender</b></label>
      </div>
      <div class="col3_in">
      <select name="gender" id="gender">
          <option value="Male">Male</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Others">Others</option>
      </select>
      </div>
  </div><br/><br/><br/><br/>

  <div class="row">
      <div class="col1">
        <label for="wifename"><b>Candidate's Wife Name</b></label>
      </div>
      <div class="col1_in">
        <input type="text" id="wifername" name="wifername" placeholder="Wife's Name...">
      </div>
  </div>

  <div class="row">
      <div class="col2">
        <label for="hname"><b>Candidate's Husband Name</b></label>
      </div>
      <div class="col2_in">
        <input type="text" id="hname" name="husbandrname" placeholder="Husband's Name...">
      </div>
  </div>

  <div class="row">
      <div class="col3">
        <label for="blood group"><b>Blood Group</b></label>
      </div>
      <div class="col3_in">
        <input type="text" id="bloodgroup" name="bloodgroup" placeholder="Blood Group">
      </div>
  </div><br/><br/><br/><br/>

</form>
</body>
</html>