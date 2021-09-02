<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layouts/header_view');
$this->load->helper('date');
$format = "%Y-%M-%d";
$a=mdate($format);
$date=date_create($a,timezone_open("Indian/Reunion"));
//echo date_format($date,"Y-m-d H:i:sP") . "<br>";
$state_id='';
?>
<!DOCTYPE html>
<html>
<head>
<title>New Application</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url(); ?>\application\views\themes\CSS\stylesheet1.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
 <body>
<style>
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
  
  
  .row_style {
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
  
  input[type=submit],button,#back {
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
  
  hr{
    width:90%; border-top:10px solid red ;margin:auto;
  }
</style>
  <h2 style="text-align:center;font-size:25px;">Application Form</h2>
  <form id="application" action="<?php echo base_url();?>Application/newapp" method="post">

  <div class="row_style">
      <div class="col1">
        <label for="rcptno"><b>Receipt No</b></label>
      </div>
      <div class="col1_in">
        <input type="text" id="rcptno" name="receiptno" value="<?php echo $receiptno ;?>" placeholder="Receipt No" required disabled>
      </div>
    <!--</div>

	<div class="row_style">-->
      <div class="col3">
        <label for="rcptdate"><b>Receipt Date</b></label>
      </div>
      <div class="col3_in">
        <input type="text" id="rcptdate" value="<?php echo $a;?>" style="height: 40px; font-size: 20px" name="receiptdate"  required disabled>
      </div>
    </div><br/><br/><br/><br/><br/><br/>

    <div class="row_style">
      <div class="col1">
        <label for="employer"><b>Office/Employer Name</b></label>
      </div>
      <div class="col1_in">
      <select name="employer" id="employer">
          <option>--Select Office--</option>
          <?php
            foreach($employers as $employer)
            {
          ?>
              <option value="<?php echo $employer['employer_id_pk']; ?>">
							<?php echo $employer['employer_name']; ?></option>
            <?php 
            }
          ?>
      </select>
      </div>
  </div><br/><br/><br/><br/>
  <!-- <div class="row_style">
      <div class="col1">
        <label for="officeaddress1"><b>Office Address1</b></label>
      </div>
      <div class="col1_in">
        <input type="text" style="width:780px;" id="officeaddress1" name="officeaddress1"  required>
      </div>
  </div><br/><br/><br/><br/>
  <div class="row_style">
      <div class="col1">
        <label for="officeaddress2"><b>Office Address2</b></label>
      </div>
      <div class="col1_in">
        <input type="text" style="width:780px;" id="officeaddress2" name="officeaddress2"  required>
      </div>
  </div><br/><br/><br/><br/> -->


	<!-- <div class="row_style">
	<div class="col1">
        <label for="authnm"><b>Authority Name</b></label>
      </div>
      <div class="col1_in">
        <input type="text" id="authnm" name="authorityname"  placeholder="Authority Name" required>
      </div>
    </div>

	<div class="row_style">
      <div class="col2">
        <label for="authaddr" ><b>Authority Address</b></label>
      </div>
      <div class="col2_in">
        <input type="text" style="width:780px;"id="authaddress" name="authorityaddress" placeholder="Authority Address" required>
      </div>
    </div><br/><br/><br/><br/><br/> -->
    <hr><br/>
    
	<p style="font-size:30px; text-align:center; color:red">Candidate Personal Details</p><br/>
  <div class="row_style">
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

    <div class="row_style">
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

	<!-- <div class="row_style">
      <div class="col1">
        <label for="fathername"><b>Candidate's Father Name</b></label>
      </div>
      <div class="col1_in">
        <input type="text" id="fathername" name="fathername" placeholder="Father's Name..." required>
      </div>
    </div>

  <div class="row_style">
      <div class="col2">
        <label for="nationality"><b>Nationality</b></label>
      </div>
      <div class="col2_in">
        <input type="text" id="nation" name="nation" value="Indian" placeholder="Your nation.." required>
      </div>
  </div> -->

  <div class="row_style">
      <div class="col1">
        <label for="dob"><b>Date Of Birth</b></label>
      </div>
      <div class="col1_in">
        <input type="date" id="dob" name="dob" style="height: 40px; font-size: 20px" required>
      </div>  
  <!-- <div class="row_style">
      <div class="col1">
        <label for="mothername"><b>Candidate's Mother Name</b></label>
      </div>
      <div class="col1_in">
        <input type="text" id="mothername" name="mothername" placeholder="Mother's Name..." required>
      </div>
  </div>

  <div class="row_style">
      <div class="col2">
        <label for="pob"><b>Place Of Birth</b></label>
      </div>
      <div class="col2_in">
        <input type="text" id="pob" name="pob" placeholder="POB" required>
      </div>
  </div> -->

      <div class="col2">
        <label for="gender"><b>Gender</b></label>
      </div>
      <div class="col2_in">
      <select name="gender" id="gender">
          <option>--Select--</option>
          <?php
            foreach($genders as $gender)
            {
          ?>
              <option value="<?php echo $gender['gender_id_pk']; ?>">
							<?php echo $gender['gender_name']; ?></option>
            <?php 
            }
          ?>
      </select>
      </div>

      <div class="col3">
        <label for="aadhar"><b>Aadhaar No</b></label>
      </div>
      <div class="col3_in">
        <input type="number"style="height: 40px; font-size: 20px" id="aadhar" name="aadhaarno" maxlength="12" required>
      </div>
  </div>
  <br/><br/><br/><br/>

  <div class="row_style">
      <div class="col2">
        <label for="caste"><b>Caste</b></label>
      </div>
      <div class="col2_in">
      <select name="caste" id="caste">
          <option>--Select--</option>
          <?php
            foreach($castes as $caste)
            {
          ?>
              <option value="<?php echo $caste['caste_id_pk']; ?>">
							<?php echo $caste['caste_name']; ?></option>
            <?php 
            }
          ?>
      </select>
      </div>
  </div>

  <!-- <div class="row_style"> 
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
  </div><br/><br/><br/><br/><br/> --><br/><br/><br/><br/><br/>
  <hr size="8" width="90%" color="red">
	<p style="font-size:30px; text-align:center; color:red">Candidate's Permanent Address</p><br/>
  
  <div class="row_style">
      <div class="col1">
        <label for="houseno1"><b>House No</b></label>
      </div>
      <div class="col1_in">
        <input type="number" style="height: 40px; font-size: 20px" id="houseno1" name="houseno1" required>
      </div>
  </div>

  <div class="row_style">
      <div class="col2">
        <label for="street1"><b>Street/Lane</b></label>
      </div>
      <div class="col2_in">
        <input type="text"  id="street1" name="street1" required>
      </div>
  </div>
  
  <div class="row_style">
      <div class="col3">
        <label for="landmark1"><b>Landmark</b></label>
      </div>
      <div class="col3_in">
        <input type="text"  id="landmark1" name="landmark1" required>
      </div>
  </div><br/><br/><br/><br/>


  <div class="row_style">
      <div class="col1">
        <label for="city1"><b>City</b></label>
      </div>
      <div class="col1_in">
        <input type="text"  id="city1" name="city1" required>
      </div>
  </div>

  <div class="row_style">
      <div class="col2">
        <label for="po1"><b>Post Office</b></label>
      </div>
      <div class="col2_in">
        <input type="text"  id="po1" name="po1" required>
      </div>
  </div>
  
  <div class="row_style">
      <div class="col3">
        <label for="ps1"><b>Police Station</b></label>
      </div>
      <div class="col3_in">
      <select name="ps1" id="ps1">
          <option>--Select--</option>
          <?php
            foreach($policestations as $ps)
            {
          ?>
              <option value="<?php echo $ps['ps_id_pk']; ?>">
							<?php echo $ps['ps_name']; ?></option>
            <?php 
            }
          ?>
      </select>
      </div>
  </div><br/><br/><br/><br/>

  <div class="row_style">
    <div class="col1">
        <label for="pin1"><b>Pincode</b></label>
      </div>
    <div class="col1_in">
        <input type="number" style="height: 40px; font-size: 20px"id="pin1" name="pin1"  placeholder="Your Pincode.." required>
    </div>

    <div class="col2">
    <label for="state1"><b>State</b></label>
    </div>
    <div class="col2_in">
    <select class="form-control" id="state1" name="state1" onchange="get_district()">
                        <option value="">------------Select State----------</option>
                        <?php
                                  foreach($states as $state)
                                  {
                                ?>
                                    <option value="<?php echo $state['state_id_pk']; ?>">
                                    <?php echo $state['state_name']; ?></option>
                                  <?php 
                                  }
                         ?>
                      </select>
  </div>
  <div class="col3">
    <label for="district1"><b>District</b></label>
  </div>
  <div class="col3_in">
    <select class="form-control" id="district1" name="district1">
        <option value="">-------------Select District---------</option>
        <?php
                  foreach($districts as $district)
                 {
                   
           ?>
                  <option value="<?php echo $district['district_id_pk']; ?>">
                  <?php echo $district['district_name']; ?></option>
        <?php 
                   
          }
        ?>
    </select>
  </div>



  </div><br/><br/><br/><br/><br/>
  <hr size="8" width="90%" color="red">
  <p style="font-size:30px; text-align:center; color:red"> Candidate's Current Address</p>
  <div style="text-align:center;font-size:20px;color:red;"><input type="checkbox" id="check" onclick="show()">Same as Permanent Address</div>
  <div class="row_style">
      <div class="col1">
        <label for="houseno2"><b>House No</b></label>
      </div>
      <div class="col1_in">
        <input type="number" style="height: 40px; font-size: 20px" id="houseno2" name="houseno2" required>
      </div>
  </div>

  <div class="row_style">
      <div class="col2">
        <label for="street2"><b>Street/Lane</b></label>
      </div>
      <div class="col2_in">
        <input type="text"  id="street2" name="street2" required>
      </div>
  </div>
  
  <div class="row_style">
      <div class="col3">
        <label for="landmark2"><b>Landmark</b></label>
      </div>
      <div class="col3_in">
        <input type="text"  id="landmark2" name="landmark2" required>
      </div>
  </div><br/><br/><br/><br/>


  <div class="row_style">
      <div class="col1">
        <label for="city2"><b>City</b></label>
      </div>
      <div class="col1_in">
        <input type="text"  id="city2" name="city2" required>
      </div>
  </div>

  <div class="row_style">
      <div class="col2">
        <label for="po2"><b>Post Office</b></label>
      </div>
      <div class="col2_in">
        <input type="text"  id="po2" name="po2" required>
      </div>
  </div>
  
  <div class="row_style">
      <div class="col3">
        <label for="ps2"><b>Police Station</b></label>
      </div>
      <div class="col3_in">
      <select name="ps2" id="ps2">
          <option>--Select--</option>
          <?php
            foreach($policestations as $ps)
            {
          ?>
              <option value="<?php echo $ps['ps_id_pk']; ?>">
							<?php echo $ps['ps_name']; ?></option>
            <?php 
            }
          ?>
      </select>
      </div>
  </div><br/><br/><br/><br/>

  <div class="row_style">
    <div class="col1">
        <label for="pin2"><b>Pincode</b></label>
      </div>
    <div class="col1_in">
        <input type="number" style="height: 40px; font-size: 20px" id="pin2" name="pin2"  placeholder="Your Pincode.." required>
    </div>
    <div class="col2">
    <label for="state2"><b>State</b></label>
    </div>
    <div class="col2_in">
    <select class="form-control" id="state2" name="state2">
                        <option value="">-------------Select State----------</option>
                        <?php
                                  foreach($states as $state)
                                  {
                                ?>
                                    <option value="<?php echo $state['state_id_pk']; ?>">
                                    <?php echo $state['state_name']; ?></option>
                                  <?php 
                                  }
                         ?>
                      </select>
  </div>
  <div class="col3">
    <label for="district2"><b>District</b></label>
  </div>
  <div class="col3_in">
    <select class="form-control" id="district2" name="district2">
        <option value="">----------Select District----------</option>
        <?php
                  foreach($districts as $district)
                 {
                   
           ?>
                  <option value="<?php echo $district['district_id_pk']; ?>">
                  <?php echo $district['district_name']; ?></option>
        <?php 
                   
          }
        ?>
    </select>
  </div>
  </div>
    <br/><br/><br/><br/>
  
  <hr>
	<!-- <p style="font-size:30px; text-align:center; color:red">Candidate's Educational Details</p><br/>
  <hr size="1" width="90%" color="red">
  <div style="text-align:center;"><b>School Details</b></div>
  <hr size="1" width="90%" color="red">
  <div class="row_style">
      <div class="col1">
        <label for="sname"><b>School Name</b></label>
      </div>
      <div class="col1_in">
        <input type="text" style="width:780px;" id="sname" name="sname" placeholder="Full Name..." required>
      </div>
  </div><br/><br/><br/><br/>
  <div class="row_style">
      <div class="col1">
        <label for="saddress"><b>School Address</b></label>
      </div>
      <div class="col1_in">
        <input type="text" style="width:780px;" id="saddress" name="saddress" placeholder="Address..." required>
      </div>
  </div><br/><br/><br/><br/>
  <div class="row_style">
    <div class="col1">
        <label for="spin"><b>School Pincode</b></label>
      </div>
    <div class="col1_in">
        <input type="number" style="height: 40px; font-size: 20px"id="spin" name="spin"  placeholder="Pincode.." required>
    </div>

    <div class="col2">
    <label for="state3"><b>State</b></label>
    </div>
    <div class="col2_in">
    <select class="form-control" id="inputState3" name="sstate">
                        <option value="">--------------------------Select State-------------------------</option>
                        
                      </select>
  </div>
  <div class="col3">
    <label for="inputDistrict3"><b>District</b></label>
  </div>
  <div class="col3_in">
    <select class="form-control" id="inputDistrict3" name="sdistrict">
        <option value="">--------------------------Select State-------------------------</option>
    </select>
  </div>
  </div><br/><br/><br/><br/>
  <hr size="1" width="90%" color="red">
  <div style="text-align:center;"><b>College Details</b></div>
  <hr size="1" width="90%" color="red">
  <div class="row_style">
      <div class="col1">
        <label for="cname"><b>College Name</b></label>
      </div>
      <div class="col1_in">
        <input type="text" style="width:780px;" id="cname" name="cname" placeholder="Full Name..." required>
      </div>
  </div><br/><br/><br/><br/>
  <div class="row_style">
      <div class="col1">
        <label for="caddress"><b>College Address</b></label>
      </div>
      <div class="col1_in">
        <input type="text" style="width:780px;" id="caddress" name="caddress" placeholder="Address..." required>
      </div>
  </div><br/><br/><br/><br/>
  <div class="row_style">
    <div class="col1">
        <label for="cpin"><b>College Pincode</b></label>
      </div>
    <div class="col1_in">
        <input type="number" style="height: 40px; font-size: 20px" id="cpin" name="cpin"  placeholder="Pincode.." required>
    </div>

    <div class="col2">
    <label for="state4"><b>State</b></label>
    </div>
    <div class="col2_in">
    <select class="form-control" id="inputState4" name="cstate">
                        <option value="">--------------------------Select State-------------------------</option>
                        
                      </select>
    </div>
    <div class="col3">
    <label for="inputDistrict4"><b>District</b></label>
  </div>
  <div class="col3_in">
    <select class="form-control" id="inputDistrict4" name="cdistrict">
        <option value="">--------------------------Select State-------------------------</option>
    </select>
  </div>
  </div><br/><br/><br/><br/> --><br/><br/><br/>
  <!-- <hr> -->
  <div class="row_style">
      <div class="col1">
        <label for="refno"><b>Reference No</b></label>
      </div>
      <div class="col1_in">
        <input type="text" id="refno" name="refno" placeholder="Ref No" required>
      </div>
      <div class="col3">
        <label for="refdate"><b>Reference Date</b></label>
      </div>
      <div class="col3_in">
        <input type="date" id="refdate" name="refdate" style="height: 40px; font-size: 20px" required>
      </div>
    </div><br/><br/><br/><br/><br/><br/>

	<div class="row_style">
	<div class="col1">
        <label for="defence"><b>Defence Personnel</b></label>
      </div>
      <div class="col1_in">
      <select name="defence" id="defence" required>
          <option>--Select--</option>
          <?php
                foreach($defences as $defence)
                {
          ?>
          <option value="<?php echo $defence['df_type_id_pk']; ?>">
          <?php echo $defence['df_type']; ?></option>
          <?php 
          }
          ?>
      </select>
      </div>
    </div>

    <div class="col3">
        <label for="category"><b>Category</b></label>
      </div>
      <div class="col3_in">
      <select name="category" id="category" required>
          <option>--Select--</option>
          <option value="1">Urban</option>
          <option value="2">Rural</option>
      </select>
      </div> 

	<!-- <div class="row_style">
      <div class="col3">
        <label for="ps3" ><b>Police Station</b></label>
      </div>
      <div class="col3_in">
        <input type="text" id="ps3" value="Howrah"name="ps3">
      </div>
    </div>--><br/><br/><br/><br/><br/>
    <button class="col2" type="submit" value="Reset" onclick="reset()"><b>Reset</b></button>
    <a class="col2_in" id="back" href="<?php base_url()?>dashboard_adm" style="left: 50%;width: 8%;text-decoration:none; position: absolute;">Back</a>
    <input class="col3" style="left: 60%; position: absolute;"  type="submit" value="Submit" name="apply">
    
  </form>
  <br/><br/><br/><br/><br/>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top ↑</button>
  <?php $this->load->view('layouts/footer_view'); ?>
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

    //$("#inputDistrict2").html("<option value='"+district1.value+"'>"+district1.value+"</option>");
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
   document.getElementById("district2").value="--Select--";
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

function get_district()
{
  var state_id=document.getElementById('state1');
  <?php $state_id = "<script language=javascript>document.write(state_id);</script>" ?>
}
</script>
</html>