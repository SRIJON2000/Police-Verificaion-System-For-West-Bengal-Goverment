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
  position: absolute;
  width: 9%;
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
      <div class="col2">
        <label for="authaddr" ><b>Authority Address</b></label>
      </div>
      <div class="col2_in">
        <input type="text" style="width:780px;"id="authaddress" name="authorityaddress" placeholder="Authority Address">
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
          <option>--Select--</option>
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
  </div><br/><br/><br/><br/><br/>
	<p style="font-size:40px; text-align:center; color:red">Candidate's Permanent Address</p><br/>
  <div class="row">
      <div class="col1">
        <label for="address1"><b>Candidate's Address</b></label>
      </div>
      <div class="col1_in">
        <input type="text" style="width:780px;" id="address1" name="address1" placeholder="Address...">
      </div>
  </div><br/><br/><br/><br/>

  <div class="row">
    <div class="col1">
        <label for="pin"><b>Pincode</b></label>
      </div>
    <div class="col1_in">
        <input type="text" id="pin" name="pin"  placeholder="Your Pincode..">
    </div>

    <div class="col2">
        <label for="district"><b>district</b></label>
      </div>
    <div class="col2_in">
        <input type="text" id="district" name="district"  placeholder="Your District..">
    </div>

    <div class="col3">
        <label for="state"><b>State</b></label>
      </div>
    <div class="col3_in">
        <select name="state" id="state" class="form-control">
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

  <p style="font-size:40px; text-align:center; color:red">Candidate's Current Address</p><br/>
  <div class="row">
      <div class="col1">
        <label for="address2"><b>Candidate's Address</b></label>
      </div>
      <div class="col1_in">
        <input type="text" style="width:780px;" id="address1" name="address1" placeholder="Address...">
      </div>
  </div><br/><br/><br/><br/>

  <div class="row">
    <div class="col1">
        <label for="pin"><b>Pincode</b></label>
      </div>
    <div class="col1_in">
        <input type="text" id="pin" name="pin"  placeholder="Your Pincode..">
    </div>

    <div class="col2">
        <label for="district"><b>district</b></label>
      </div>
    <div class="col2_in">
        <input type="text" id="district" name="district"  placeholder="Your District..">
    </div>

    <div class="col3">
        <label for="state"><b>State</b></label>
      </div>
    <div class="col3_in">
        <select name="state" id="state" class="form-control">
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
  </div>




</form>
</body>
</html>