<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layouts/header_view');
$this->load->helper('date');
// $format = "%Y-%M-%d";
// $a=mdate($format);
// $date=date_create($a,timezone_open("Indian/Reunion"));
//echo date_format($date,"Y-m-d H:i:sP") . "<br>";
//$format = "%dd-%mm-%yyyy";
$d=date('d-m-y');
?>
<!DOCTYPE html>
<html>
<head>
<title>New Application</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url();?>\application\views\themes\CSS\stylesheet1.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<style>
#myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 1;
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
@media only screen and (max-width: 400px) {
  [class*="row_new_app"]{
    padding-right: 0px !important;
  }
}
.border_lt{
  border-left: solid 10px green;
}
.required:after {
    content:"*";
    color: red;
  }

  .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 30%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  /* padding: 2px 6px; */
  background-color: white;
  color: red;
  font-size: 15px;
  text-align:center;
}
</style>
</head>
<body>
<?php 
			$error = $this->session->flashdata('error');
		?>
<div class="container">
  <div class="mt-2">
    <h2><b>Application Form</b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<div class=" btn bg-secondary m-3 pr-4 pl-4"><a id="back" class="text-white" href="<?php base_url()?>dashboard_adm" style="text-decoration:none;">Back</a></div></h2>
    <div style="color:red">Fields marked as (*) are mandatory</div>    
    <hr></div>
  <section class="">
  <form id="application" action="<?php echo base_url();?>Application/newapp" method="post">

  <div class="row row_new_app pl-0">
    <div class="col-lg-4 col-md-12 p-3">
      <div class="row">    
        <div class="required"><label class="col-lg-3 col-xs-8" for="rcptno"><b>Receipt No</b></label></div><div>
        <input class="col-lg-7 col-sm-4" maxlength="30" type="text" id="rcptno" name="receiptno" value="<?php echo $receiptno ;?>" placeholder="Receipt No" readonly>
        </div></div>
    </div>
    <div class="col-lg-4 col-md-12 p-3"><div class="row">
      <div><label class="required" for="rcptdate" class="col-lg-6  col-xs-8"><b>Receipt Date</b></label></div><div>
        <input class="col-lg-7 col-sm-4" maxlength="30" type="date" id="rcptdate"  value="<?php echo date('Y-m-d');?>" name="receiptdate" readonly>
      </div></div>
    </div>
    <div class="col-lg-4 col-md-12 p-3"><div class="row">
    <div><label class="required" for="employer" class="col-lg-6 col-xs-8"><b>Office/Employer Name</b></label></div><div>
      <select class="col-lg-7 col-sm-1 p-1" maxlength="30" name="employer" id="employer">
          <option value="">-----Select Office-----</option>
          <?php
            foreach($employers as $employer)
            {
          ?>
              <option value="<?php echo $employer['employer_id_pk']; ?>">
							<?php echo $employer['employer_name']; ?></option>
            <?php 
            }
          ?>
      </select><br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
      </div></div>
    </div>
  </div>
    <hr>  
  <div class="border_lt">  
	<h3 class="px-3"><b>Candidate Personal Details</b></h3>
  </div>
  <div class="row row_new_app">
    <div class="col-lg-3 col-md-12 p-3 pt-5">
        <label class="required"><b>Candidate Name</b></label>
    </div>
    <div class="col-lg-3 col-md-12 p-3">
        <label for="fname" style="color:blue;" class="required"><b>First Name</b></label><br>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
        <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
      </div>
      <div class="col-lg-3 col-md-12 p-3">
        <label for="mname" style="color:blue;"><b>Middle Name</b></label><br>
        <input type="text" id="mname" name="middlename" placeholder="Your middle name..">
        <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
      </div>
      <div class="col-lg-3 col-md-12 p-3">
        <label for="lname" style="color:blue;" class="required"><b>Last Name</b></label><br>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
        <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
      </div>
          </div>
  <div class="row row_new_app">
      <div class="col-lg-3 col-md-12 p-3 pt-5">
        <div><label for="dob" class="required"><b>Date Of Birth</b></label>
        </div><div><input class="px-2" type="date" id="dob" name="dob" required><br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div></div>
      </div>  
      <div class="col-lg-3 col-md-12 p-3 pt-5">
      <div><label for="gender" class="required"><b>Gender</b></label>
      </div><div><select class="col-lg-9 p-1" maxlength="30" name="gender" id="gender">
          <option value="">-----Select-----</option>
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
        <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
      </div>
      </div>  
      <div class="col-lg-3 col-md-12 p-3 pt-5">
        <label for="aadhar" class="required"><b>Aadhaar No</b></label>
        <input type="number" id="aadhar" name="aadhaarno" maxlength="12" placeholder="Aadhar number.." required>
        <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
      </div>
      <div class="col-lg-3 col-md-12 p-3 pt-5">
      <div><label for="caste" class="required"><b>Caste</b></label>
      </div><div><select class="col-lg-9 p-1" maxlength="30" name="caste" id="caste">
          <option value="">-----Select-----</option>
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
      <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
    </div>
      </div>
  </div>
  <br/>
  <hr>
  <br>
  <div class="border_lt">
	<h3 class="px-3"><b>Candidate's Permanent Address</b></h3>
  </div>
  <div class="row row_new_app">
      <div class="col-lg-4 col-md-12 col-sm-8 p-3 pt-5">
        <div><label for="houseno1" class="required"><b>House No</b></label></div><div>
        <input type="number" id="houseno1" name="houseno1" required>
        <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
      </div>
      </div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <div><label for="street1" class="required"><b>Street/Lane</b></label></div><div>
        <input type="text"  id="street1" name="street1" required>
        <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
      </div>
      </div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <div><label for="landmark1" class="required"><b>Landmark</b></label></div><div>
        <input type="text"  id="landmark1" name="landmark1" required>
        <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
      </div>
      </div>
  </div>
  <div class="row row_new_app">
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <div><label for="city1" class="required"><b>City</b></label></div><div>
      <input type="text"  id="city1" name="city1" required>
      <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
    </div>
      </div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <div><label for="po1" class="required"><b>Post Office</b></label></div><div>
        <input type="text"  id="po1" name="po1" required>
        <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
      </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-6 p-3 pt-5">
      <div><label for="ps1" class="required"><b>Police Station</b></label></div><div>
        <select name="ps1" id="ps1" class="col-lg-7 col-sm-4 p-1" maxlength="30">
          <option value="">-----Select-----</option>
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
      <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
    </div>
      </div>
  </div>
  <div class="row row_new_app">
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <div><label for="pin1" class="required"><b>Pincode</b></label></div><div>
      <input type="number" class="text-center" id="pin1" name="pin1"  placeholder="Your Pincode.." required>
      <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
      </div></div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <div><label for="state1" class="required"><b>State</b></label></div><div>
      <select id="state1" class="col-lg-7 col-sm-4 p-1" maxlength="30" name="state1" onchange="get_district()">
                        <option value="">-----Select State-----</option>
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
                      <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
                    </div>
      </div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <div><label for="district1" class="required"><b>District</b></label></div><div>
    <select  id="district1" class="col-lg-7 col-sm-4 p-1" maxlength="30" name="district1" >
        <option value="">-----Select District-----</option>
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
    <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
  </div>
      </div>
  </div><br/>
  <hr>
  <br>
  <div class="border_lt">
  <h3 class="px-3" ><b>Candidate's Current Address</b></h3>
  <div class="px-3" ><input type="checkbox" id="check" onclick="show()">&nbsp;&nbsp;Same as Permanent Address</div>
  </div>
  <div class="row row_new_app">
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <div><label for="houseno2" class="required"><b>House No</b></label></div><div>
        <input type="number" id="houseno2" name="houseno2" required>
        <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
      </div>
      </div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <div><label for="street2" class="required"><b>Street/Lane</b></label></div><div>
        <input type="text"  id="street2" name="street2" required>
        <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
      </div>
      </div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <div><label for="landmark2" class="required"><b>Landmark</b></label></div><div>
        <input type="text"  id="landmark2" name="landmark2" required>
        <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
      </div>
      </div>
  </div>
  <div class="row row_new_app">
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <div><label for="city2" class="required"><b>City</b></label></div><div>
      <input type="text"  id="city2" name="city2" required>
      <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
    </div>
      </div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <div><label for="po2" class="required"><b>Post Office</b></label></div><div>
        <input type="text"  id="po2" name="po2" required>
        <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
      </div>
      </div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <div><label for="ps2" class="required"><b>Police Station</b></label></div><div>
        <select name="ps2" id="ps2" class="col-lg-7 col-sm-4 p-1" maxlength="30">
          <option value="">-----Select-----</option>
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
      <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
    </div>
      </div>
  </div>
  <div class="row row_new_app">
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <div><label for="pin2" class="required"><b>Pincode</b></label></div><div>
      <input type="number" id="pin2" name="pin2" class="text-center"  placeholder="Your Pincode.." required>
      <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
    </div></div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <div><label for="state2" class="required"><b>State</b></label></div><div>
      <select id="state2" name="state2" onchange="get_district()" class="col-lg-7 col-sm-4 p-1" maxlength="30">
                        <option value="">-----Select State-----</option>
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
                      <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
                    </div>
      </div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <div><label for="district2" class="required"><b>District</b></label></div><div>
    <select  id="district2" name="district2" class="col-lg-7 col-sm-4 p-1" maxlength="30">
        <option value="">-----Select District-----</option>
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
    <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
  </div>
      </div>
  </div>
  <br/>
  <hr>
  <div class="row row_new_app">
      <div class="col-lg-3 col-md-12 p-3 pt-5">
      <div><label for="refno" class="required"><b>Reference No</b></label></div><div>
        <input type="text" id="refno" name="refno" placeholder="--Ref No--" class="col-lg-10 col-sm-4 p-1" maxlength="30" required>
        <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
      </div></div>
      <div class="col-lg-3 col-md-12 p-3 pt-5">
      <div><label for="refdate" class="required"><b>Reference Date</b></label></div><div>
        <input type="date" id="refdate" name="refdate" class="px-1" style="width: 225px;" required>
        <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
      </div></div>
      <div class="col-lg-3 col-md-12 p-3 pt-5">
      <div><label for="defence" class="required"><b>Defence Personnel</b></label>
      </div><div><select name="defence" id="defence" class="col-lg-9 col-sm-4 p-1" maxlength="30" required>
          <option value="">-----Select-----</option>
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
      <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
    </div>
      </div>
    <div class="col-lg-3 col-md-12 p-3 pt-5">
    <div><label for="category" class="required"><b>Send To</b></label>
    </div><div><select name="category" id="category" class="col-lg-9 col-sm-4 p-1" maxlength="30">
          <option value="">-----Select-----</option>
          <?php
                foreach($categories as $category)
                {
          ?>
          <option value="<?php echo $category['sent_to_id_pk']; ?>">
          <?php echo $category['sent_to']; ?></option>
          <?php 
          }
          ?>
      </select>
      <br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
    </div>
      </div> 
        </div>
    <div class="row">
      <div class="d-lg-flex d-md-flex flex-md-row flex-sm-column justify-content-center col-lg-12 col-md-12 p-3 pt-5">
      <button class=" btn bg-danger text-light m-3 pr-3 pl-3" type="submit" value="Reset" onclick="reset()"><b>Reset</b></button>
        <div class=" btn bg-secondary m-3 pr-4 pl-4">
          <a id="back" class="text-white" href="<?php base_url()?>dashboard_adm" style="text-decoration:none;">Back</a>
        </div>
          <a id="myBtn_submit" class="btn bg-success text-light m-3" >Submit</a><br>
          
      </div>
    </div>
  </form><br/><br/>
  <button class="btn" onclick="topFunction()" id="myBtn" title="Go to top">Top ↑</button>
  <!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h2></h2>
  </div>
  <div class="modal-body">   
    <div style="text-align:center"><b>Are you sure you want to proceed?</b><br>
    <button class="btn bg-success text-light m-3" onclick="yes()">Yes</button>&nbsp;&nbsp;&nbsp;<button style="text-align:center"class="btn bg-success  text-light m-3" onclick="no()">No</button>
    </div>
  </div>
  <div class="modal-footer">
    <p style="text-align:center;"><b> Note:- Once you submit the application you can't edit it further</b></p>
  </div>
</div>

</div>

  </section>
  </div>
  <?php $this->load->view('layouts/footer_view'); ?>
</body>
<script>
  var modal = document.getElementById("myModal");
  var bt = document.getElementById("myBtn_submit");
var span = document.getElementsByClassName("close")[0];
bt.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
function yes()
{
  document.getElementById("application").submit();
}
function no()
{
  modal.style.display = "none";
}
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