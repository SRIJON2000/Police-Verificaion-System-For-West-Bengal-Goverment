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
  width: 9%;
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
  
  width: 9%;
  margin-top: 6px;
  left: 70%;
  position: absolute;
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

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:green;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
</head>
<body>

<h2 style="text-align:center;font-size:25px;">Application Form</h2>
  <form id="application">

  <div class="row">
      <div class="col1">
        <label for="rcptno"><b>Receipt No</b></label>
      </div>
      <div class="col1_in">
        <input type="text" id="rcptno" name="receiptno" placeholder="Receipt No" required>
      </div>
    <!--</div>

	<div class="row">-->
      <div class="col3">
        <label for="rcptdate"><b>Receipt Date</b></label>
      </div>
      <div class="col3_in">
        <input type="text" id="rcptdate" name="receiptdate" placeholder="Receipt Date.." required>
      </div>
    </div><br/><br/><br/><br/><br/><br/>

	<div class="row">
	<div class="col1">
        <label for="authnm"><b>Authority Name</b></label>
      </div>
      <div class="col1_in">
        <input type="text" id="authnm" name="authorityname"  placeholder="Authority Name" required>
      </div>
    </div>

	<div class="row">
      <div class="col2">
        <label for="authaddr" ><b>Authority Address</b></label>
      </div>
      <div class="col2_in">
        <input type="text" style="width:780px;"id="authaddress" name="authorityaddress" placeholder="Authority Address" required>
      </div>
    </div><br/><br/><br/><br/><br/>
    <hr size="8" width="90%" color="red">
	<p style="font-size:30px; text-align:center; color:red">Candidate Personal Details</p><br/>
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
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
      </div>
    
      <div class="col2_in">
        <input type="text" id="mname" name="middlename" placeholder="Your middle name..">
      </div>
    
      <div class="col3_in">
        <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
      </div>
    </div><br/><br/><br/><br/>

	<div class="row">
      <div class="col1">
        <label for="fathername"><b>Candidate's Father Name</b></label>
      </div>
      <div class="col1_in">
        <input type="text" id="fathername" name="fathername" placeholder="Father's Name..." required>
      </div>
    </div>

  <div class="row">
      <div class="col2">
        <label for="nationality"><b>Nationality</b></label>
      </div>
      <div class="col2_in">
        <input type="text" id="nation" name="nation" value="India" placeholder="Your nation.." required>
      </div>
  </div>

  <div class="row">
      <div class="col3">
        <label for="dob"><b>Date Of Birth</b></label>
      </div>
      <div class="col3_in">
        <input type="date" id="dob" name="dob" style="height: 40px; font-size: 20px" required>
      </div>
  </div><br/><br/><br/><br/>
   
  <div class="row">
      <div class="col1">
        <label for="mothername"><b>Candidate's Mother Name</b></label>
      </div>
      <div class="col1_in">
        <input type="text" id="mothername" name="mothername" placeholder="Mother's Name..." required>
      </div>
  </div>

  <div class="row">
      <div class="col2">
        <label for="pob"><b>Place Of Birth</b></label>
      </div>
      <div class="col2_in">
        <input type="text" id="pob" name="pob" placeholder="POB" required>
      </div>
  </div>

  <div class="row">
      <div class="col3">
        <label for="gender"><b>Gender</b></label>
      </div>
      <div class="col3_in">
      <select name="gender" id="gender">
          <option>--Select--</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Others">Others</option>
      </select>
      </div>
  </div><br/><br/><br/><br/>

  <div class="row">
      <div class="col1">
        <label for="aadhar"><b>Aadhaar No</b></label>
      </div>
      <div class="col1_in">
        <input type="text" id="aadhar" name="aadhaarno" maxlength="12" required>
      </div>
  </div>

  <div class="row">
      <div class="col2">
        <label for="caste"><b>Caste</b></label>
      </div>
      <div class="col2_in">
      <select name="caste" id="caste">
          <option>--Select--</option>
          <option value="gen">General</option>
          <option value="obc-A">OBC-A</option>
          <option value="obc-B">OBC-B</option>
          <option value="sc">SC</option>
          <option value="st">ST</option>
      </select>
      </div>
  </div>

  <div class="row">
      <div class="col3">
        <label for="blood group"><b>Blood Group</b></label>
      </div>
      <div class="col3_in">
      <select name="blood" id="blood">
          <option>--Select--</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="AB-">AB-</option>
          <option value="AB+">AB+</option>
      </select>
      </div>
  </div><br/><br/><br/><br/><br/>
  <hr size="8" width="90%" color="red">
	<p style="font-size:30px; text-align:center; color:red">Candidate's Permanent Address</p><br/>
  
  <div class="row">
      <div class="col1">
        <label for="houseno1"><b>House No</b></label>
      </div>
      <div class="col1_in">
        <input type="text"  id="houseno1" name="houseno1" required>
      </div>
  </div>

  <div class="row">
      <div class="col2">
        <label for="street1"><b>Street/Lane</b></label>
      </div>
      <div class="col2_in">
        <input type="text"  id="street1" name="street1" required>
      </div>
  </div>
  
  <div class="row">
      <div class="col3">
        <label for="landmark1"><b>Landmark</b></label>
      </div>
      <div class="col3_in">
        <input type="text"  id="landmark1" name="landmark1" required>
      </div>
  </div><br/><br/><br/><br/>


  <div class="row">
      <div class="col1">
        <label for="city1"><b>City</b></label>
      </div>
      <div class="col1_in">
        <input type="text"  id="city1" name="city1" required>
      </div>
  </div>

  <div class="row">
      <div class="col2">
        <label for="po1"><b>Post Office</b></label>
      </div>
      <div class="col2_in">
        <input type="text"  id="po1" name="po1" required>
      </div>
  </div>
  
  <div class="row">
      <div class="col3">
        <label for="ps1"><b>Police Station</b></label>
      </div>
      <div class="col3_in">
        <input type="text"  id="ps1" name="ps1" required>
      </div>
  </div><br/><br/><br/><br/>

  <div class="row">
    <div class="col1">
        <label for="pin1"><b>Pincode</b></label>
      </div>
    <div class="col1_in">
        <input type="text" id="pin1" name="pin1"  placeholder="Your Pincode.." required>
    </div>

    <div class="col2">
        <label for="district1"><b>district</b></label>
      </div>
    <div class="col2_in">
        <input type="text" id="district1" name="district1"  placeholder="Your District.." required>
    </div>

    <div class="col3">
        <label for="state1"><b>State</b></label>
      </div>
    <div class="col3_in">
        <select name="state1" id="state1" class="form-control">
              <option>--Select--</option>
              <option value="Andhra Pradesh">Andhra Pradesh</option>
              <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
              <option value="Assam">Assam</option>
              <option value="Bihar">Bihar</option>
              <option value="Chandigarh">Chandigarh</option>
              <option value="Chhattisgarh">Chhattisgarh</option>
              <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
              <option value="Daman and Diu">Daman and Diu</option>
              <option value="Delhi">Delhi</option>
              <option value="Lakshadweep">Lakshadweep</option>
              <option value="Puducherry">Puducherry</option>
              <option value="Goa">Goa</option>
              <option value="Gujarat">Gujarat</option>
              <option value="Haryana">Haryana</option>
              <option value="Himachal Pradesh">Himachal Pradesh</option>
              <option value="Jammu and Kashmir">Jammu and Kashmir</option>
              <option value="Jharkhand">Jharkhand</option>
              <option value="Karnataka">Karnataka</option>
              <option value="Kerala">Kerala</option>
              <option value="Madhya Pradesh">Madhya Pradesh</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Manipur">Manipur</option>
              <option value="Meghalaya">Meghalaya</option>
              <option value="Mizoram">Mizoram</option>
              <option value="Nagaland">Nagaland</option>
              <option value="Odisha">Odisha</option>
              <option value="Punjab">Punjab</option>
              <option value="Rajasthan">Rajasthan</option>
              <option value="Sikkim">Sikkim</option>
              <option value="Tamil Nadu">Tamil Nadu</option>
              <option value="Telangana">Telangana</option>
              <option value="Tripura">Tripura</option>
              <option value="Uttar Pradesh">Uttar Pradesh</option>
              <option value="Uttarakhand">Uttarakhand</option>
              <option value="West Bengal">West Bengal</option>
      </select>
    </div>
  </div><br/><br/><br/><br/><br/>
  <hr size="8" width="90%" color="red">
  <p style="font-size:30px; text-align:center; color:red"> Candidate's Current Address</p>
  <div style="text-align:center;font-size:20px;color:red;"><input type="checkbox" id="check" onclick="show()">Same as Permanent Address</div>
  <div class="row">
      <div class="col1">
        <label for="houseno2"><b>House No</b></label>
      </div>
      <div class="col1_in">
        <input type="text"  id="houseno2" name="houseno2" required>
      </div>
  </div>

  <div class="row">
      <div class="col2">
        <label for="street2"><b>Street/Lane</b></label>
      </div>
      <div class="col2_in">
        <input type="text"  id="street2" name="street2" required>
      </div>
  </div>
  
  <div class="row">
      <div class="col3">
        <label for="landmark2"><b>Landmark</b></label>
      </div>
      <div class="col3_in">
        <input type="text"  id="landmark2" name="landmark2" required>
      </div>
  </div><br/><br/><br/><br/>


  <div class="row">
      <div class="col1">
        <label for="city2"><b>City</b></label>
      </div>
      <div class="col1_in">
        <input type="text"  id="city2" name="city2" required>
      </div>
  </div>

  <div class="row">
      <div class="col2">
        <label for="po2"><b>Post Office</b></label>
      </div>
      <div class="col2_in">
        <input type="text"  id="po2" name="po2" required>
      </div>
  </div>
  
  <div class="row">
      <div class="col3">
        <label for="ps2"><b>Police Station</b></label>
      </div>
      <div class="col3_in">
        <input type="text"  id="ps2" name="ps2" required>
      </div>
  </div><br/><br/><br/><br/>

  <div class="row">
    <div class="col1">
        <label for="pin2"><b>Pincode</b></label>
      </div>
    <div class="col1_in">
        <input type="text" id="pin2" name="pin2"  placeholder="Your Pincode.." required>
    </div>

    <div class="col2">
        <label for="district2"><b>district</b></label>
      </div>
    <div class="col2_in">
        <input type="text" id="district2" name="district2"  placeholder="Your District.." required>
    </div>

    <div class="col3">
        <label for="state2"><b>State</b></label>
      </div>
    <div class="col3_in">
        <select name="state2" id="state2" class="form-control">
              <option>--Select--</option>
              <option value="Andhra Pradesh">Andhra Pradesh</option>
              <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
              <option value="Assam">Assam</option>
              <option value="Bihar">Bihar</option>
              <option value="Chandigarh">Chandigarh</option>
              <option value="Chhattisgarh">Chhattisgarh</option>
              <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
              <option value="Daman and Diu">Daman and Diu</option>
              <option value="Delhi">Delhi</option>
              <option value="Lakshadweep">Lakshadweep</option>
              <option value="Puducherry">Puducherry</option>
              <option value="Goa">Goa</option>
              <option value="Gujarat">Gujarat</option>
              <option value="Haryana">Haryana</option>
              <option value="Himachal Pradesh">Himachal Pradesh</option>
              <option value="Jammu and Kashmir">Jammu and Kashmir</option>
              <option value="Jharkhand">Jharkhand</option>
              <option value="Karnataka">Karnataka</option>
              <option value="Kerala">Kerala</option>
              <option value="Madhya Pradesh">Madhya Pradesh</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Manipur">Manipur</option>
              <option value="Meghalaya">Meghalaya</option>
              <option value="Mizoram">Mizoram</option>
              <option value="Nagaland">Nagaland</option>
              <option value="Odisha">Odisha</option>
              <option value="Punjab">Punjab</option>
              <option value="Rajasthan">Rajasthan</option>
              <option value="Sikkim">Sikkim</option>
              <option value="Tamil Nadu">Tamil Nadu</option>
              <option value="Telangana">Telangana</option>
              <option value="Tripura">Tripura</option>
              <option value="Uttar Pradesh">Uttar Pradesh</option>
              <option value="Uttarakhand">Uttarakhand</option>
              <option value="West Bengal">West Bengal</option>
      </select>
    </div>
  </div><br/><br/><br/><br/>
  
  <hr size="8" width="90%" color="red">
	<p style="font-size:30px; text-align:center; color:red">Candidate's Educational Details</p><br/>
  <hr size="1" width="90%" color="red">
  <div style="text-align:center;"><b>School Details</b></div>
  <hr size="1" width="90%" color="red">
  <div class="row">
      <div class="col1">
        <label for="sname"><b>School Name</b></label>
      </div>
      <div class="col1_in">
        <input type="text" style="width:780px;" id="sname" name="sname" placeholder="Full Name..." required>
      </div>
  </div><br/><br/><br/><br/>
  <div class="row">
      <div class="col1">
        <label for="saddress"><b>School Address</b></label>
      </div>
      <div class="col1_in">
        <input type="text" style="width:780px;" id="saddress" name="saddress" placeholder="Address..." required>
      </div>
  </div><br/><br/><br/><br/>
  <div class="row">
    <div class="col1">
        <label for="spin"><b>School Pincode</b></label>
      </div>
    <div class="col1_in">
        <input type="text" id="spin" name="spin"  placeholder="Pincode.." required>
    </div>

    <div class="col2">
        <label for="sdistrict"><b>School district</b></label>
      </div>
    <div class="col2_in">
        <input type="text" id="sdistrict" name="sdistrict"  placeholder="District.." required>
    </div>

    <div class="col3">
        <label for="sstate"><b>School State</b></label>
      </div>
    <div class="col3_in">
        <select name="sstate" id="sstate" class="form-control">
              <option>--Select--</option>
              <option value="Andhra Pradesh">Andhra Pradesh</option>
              <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
              <option value="Assam">Assam</option>
              <option value="Bihar">Bihar</option>
              <option value="Chandigarh">Chandigarh</option>
              <option value="Chhattisgarh">Chhattisgarh</option>
              <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
              <option value="Daman and Diu">Daman and Diu</option>
              <option value="Delhi">Delhi</option>
              <option value="Lakshadweep">Lakshadweep</option>
              <option value="Puducherry">Puducherry</option>
              <option value="Goa">Goa</option>
              <option value="Gujarat">Gujarat</option>
              <option value="Haryana">Haryana</option>
              <option value="Himachal Pradesh">Himachal Pradesh</option>
              <option value="Jammu and Kashmir">Jammu and Kashmir</option>
              <option value="Jharkhand">Jharkhand</option>
              <option value="Karnataka">Karnataka</option>
              <option value="Kerala">Kerala</option>
              <option value="Madhya Pradesh">Madhya Pradesh</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Manipur">Manipur</option>
              <option value="Meghalaya">Meghalaya</option>
              <option value="Mizoram">Mizoram</option>
              <option value="Nagaland">Nagaland</option>
              <option value="Odisha">Odisha</option>
              <option value="Punjab">Punjab</option>
              <option value="Rajasthan">Rajasthan</option>
              <option value="Sikkim">Sikkim</option>
              <option value="Tamil Nadu">Tamil Nadu</option>
              <option value="Telangana">Telangana</option>
              <option value="Tripura">Tripura</option>
              <option value="Uttar Pradesh">Uttar Pradesh</option>
              <option value="Uttarakhand">Uttarakhand</option>
              <option value="West Bengal">West Bengal</option>
      </select>
    </div>
  </div><br/><br/><br/><br/>
  <hr size="1" width="90%" color="red">
  <div style="text-align:center;"><b>College Details</b></div>
  <hr size="1" width="90%" color="red">
  <div class="row">
      <div class="col1">
        <label for="cname"><b>College Name</b></label>
      </div>
      <div class="col1_in">
        <input type="text" style="width:780px;" id="cname" name="cname" placeholder="Full Name..." required>
      </div>
  </div><br/><br/><br/><br/>
  <div class="row">
      <div class="col1">
        <label for="caddress"><b>College Address</b></label>
      </div>
      <div class="col1_in">
        <input type="text" style="width:780px;" id="caddress" name="caddress" placeholder="Address..." required>
      </div>
  </div><br/><br/><br/><br/>
  <div class="row">
    <div class="col1">
        <label for="cpin"><b>College Pincode</b></label>
      </div>
    <div class="col1_in">
        <input type="text" id="cpin" name="cpin"  placeholder="Pincode.." required>
    </div>

    <div class="col2">
        <label for="cdistrict"><b>College district</b></label>
      </div>
    <div class="col2_in">
        <input type="text" id="cdistrict" name="cdistrict"  placeholder="District.." required>
    </div>

    <div class="col3">
        <label for="cstate"><b>College State</b></label>
      </div>
    <div class="col3_in">
        <select name="cstate" id="cstate" class="form-control">
              <option>--Select--</option>
              <option value="Andhra Pradesh">Andhra Pradesh</option>
              <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
              <option value="Assam">Assam</option>
              <option value="Bihar">Bihar</option>
              <option value="Chandigarh">Chandigarh</option>
              <option value="Chhattisgarh">Chhattisgarh</option>
              <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
              <option value="Daman and Diu">Daman and Diu</option>
              <option value="Delhi">Delhi</option>
              <option value="Lakshadweep">Lakshadweep</option>
              <option value="Puducherry">Puducherry</option>
              <option value="Goa">Goa</option>
              <option value="Gujarat">Gujarat</option>
              <option value="Haryana">Haryana</option>
              <option value="Himachal Pradesh">Himachal Pradesh</option>
              <option value="Jammu and Kashmir">Jammu and Kashmir</option>
              <option value="Jharkhand">Jharkhand</option>
              <option value="Karnataka">Karnataka</option>
              <option value="Kerala">Kerala</option>
              <option value="Madhya Pradesh">Madhya Pradesh</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Manipur">Manipur</option>
              <option value="Meghalaya">Meghalaya</option>
              <option value="Mizoram">Mizoram</option>
              <option value="Nagaland">Nagaland</option>
              <option value="Odisha">Odisha</option>
              <option value="Punjab">Punjab</option>
              <option value="Rajasthan">Rajasthan</option>
              <option value="Sikkim">Sikkim</option>
              <option value="Tamil Nadu">Tamil Nadu</option>
              <option value="Telangana">Telangana</option>
              <option value="Tripura">Tripura</option>
              <option value="Uttar Pradesh">Uttar Pradesh</option>
              <option value="Uttarakhand">Uttarakhand</option>
              <option value="West Bengal">West Bengal</option>
      </select>
    </div>
  </div><br/><br/><br/><br/><br/><br/><br/>
  <hr size="8" width="90%" color="red">
  <div class="row">
      <div class="col1">
        <label for="refno"><b>Reference No</b></label>
      </div>
      <div class="col1_in">
        <input type="text" id="refno" name="refno" placeholder="Ref No" required>
      </div>
    <!--</div>

	<div class="row">-->
      <div class="col3">
        <label for="refdate"><b>Reference Date</b></label>
      </div>
      <div class="col3_in">
        <input type="date" id="refdate" name="refdate" style="height: 40px; font-size: 20px" required>
      </div>
    </div><br/><br/><br/><br/><br/><br/>

	<div class="row">
	<div class="col1">
        <label for="dp"><b>Defence Personnel</b></label>
      </div>
      <div class="col1_in">
      <select name="dp" id="dp" required>
          <option>--Select--</option>
          <option value="yes">Yes</option>
          <option value="no">No</option>
      </select>
      </div>
    </div>

	<div class="row">
      <div class="col3">
        <label for="ps3" ><b>Police Station</b></label>
      </div>
      <div class="col3_in">
        <input type="text" id="ps3" name="ps3">
      </div>
    </div><br/><br/><br/><br/><br/>
    <input class="col2"type="submit" value="Submit" name="apply">
    <input class="col3" style="left: 50%; position: absolute;" type="submit" value="Cancel" name="cancel">
    <button class="col3" style="left: 60%; position: absolute;" onclick="reset()" type="submit" ><b>Reset</b><button>
  </form>
<br/><br/><br/><br/><br/>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top ↑</button>
</body>

<script>

function show()
{
  var street1 = document.getElementById("street1");
  var houseno1 = document.getElementById("houseno1");
  var landmark1 = document.getElementById("landmark1");
  var city1 = document.getElementById("city1");
  var po1= document.getElementById("po1");
  var ps1 = document.getElementById("ps1");
  var pin1 = document.getElementById("pin1");
  var district1 = document.getElementById("district1");
  var state1= document.getElementById("state1");
  
  var street2 = document.getElementById("street2");
  var houseno2 = document.getElementById("houseno2");
  var landmark2 = document.getElementById("landmark2");
  var city2 = document.getElementById("city2");
  var po2= document.getElementById("po2");
  var ps2 = document.getElementById("ps2");
  var pin2= document.getElementById("pin2");
  var district2 = document.getElementById("district2");
  var state2= document.getElementById("state2");

  var checkBox=document.getElementById("check");

  if (checkBox.checked == true){
    street2.value=street1.value;
    houseno2.value=houseno1.value;
    landmark2.value=landmark1.value;
    city2.value=city1.value;
    po2.value=po1.value;
    ps2.value=ps1.value;
    pin2.value=pin1.value;
    district2.value= district1.value;
    state2.value=state1.value;
  } 
  else
  {
    document.getElementById("street2").value="";
  document.getElementById("houseno2").value="";
  document.getElementById("landmark2").value="";
  document.getElementById("city2").value="";
  document.getElementById("po2").value="";
  document.getElementById("ps2").value="";
   document.getElementById("pin2").value="";
   document.getElementById("district2").value="";
    document.getElementById("state2").value="--Select--";
  }
}
var mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function reset()
{
  document.getElementById("application").reset();
}
</script>
<?php $this->load->view('layouts/footer_view'); ?>
</html>