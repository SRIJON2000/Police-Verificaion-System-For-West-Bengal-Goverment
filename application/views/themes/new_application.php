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
</style>
</head>
<body>
<div class="container">
  <div class="mt-2">
    <h2>Application Form</h2>
    <hr></div>
  <section class="">
  <form id="application" action="<?php echo base_url();?>Application/newapp" method="post">

  <div class="row row_new_app pl-0">
    <div class="col-lg-6 col-md-12 p-3">
      <div class="row">    
        <label class="col-lg-3 col-xs-8" for="rcptno"><b>Receipt No</b></label>
        <input class="col-lg-4 col-sm-4" maxlength="100" type="text" id="rcptno" name="receiptno" value="<?php echo $receiptno ;?>" placeholder="Receipt No" readonly>
    </div></div>
    <div class="col-lg-6 col-md-12 p-3"><div class="row">
        <label for="rcptdate" class="col-lg-3  col-xs-8"><b>Receipt Date</b></label>
        <input class="col-lg-4 col-sm-4" maxlength="150" type="date" id="rcptdate"  value="<?php echo date('Y-m-d');?>" name="receiptdate" readonly>
    </div></div>
    <div class="col-lg-6 col-md-12 p-3"><div class="row">
      <label for="employer" class="col-lg-3 col-xs-8"><b>Office/Employer Name</b></label>
      <select class="col-lg-4 col-sm-4" maxlength="100" name="employer" id="employer">
          <option>-Select Office-</option>
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
    </div>
  </div><br/><br/>
    <hr>  
  <div class="border_lt">  
	<h3 class="px-3">Candidate Personal Details</h3>
  </div>
  <div class="row row_new_app">
    <div class="col-lg-3 col-md-12 p-3 pt-5">
        <label><b>Candidate Name</b></label>
    </div>
    <div class="col-lg-3 col-md-12 p-3">
        <label for="fname" style="color:blue;"><b>First Name</b></label><br>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
      </div>
      <div class="col-lg-3 col-md-12 p-3">
        <label for="mname" style="color:blue;"><b>Middle Name</b></label><br>
        <input type="text" id="mname" name="middlename" placeholder="Your middle name..">
      </div>
      <div class="col-lg-3 col-md-12 p-3">
        <label for="lname" style="color:blue;"><b>Last Name</b></label><br>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
      </div>
          </div>
  <div class="row row_new_app">
      <div class="col-lg-3 col-md-12 p-3 pt-5">
        <label for="dob"><b>Date Of Birth</b></label>
        <input class="px-2" type="date" id="dob" name="dob" required>
      </div>  
      <div class="col-lg-3 col-md-12 p-3 pt-5">
        <label for="gender"><b>Gender</b></label>
        <select class="col-lg-10 p-1" maxlength="30" name="gender" id="gender">
          <option>----Select----</option>
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
      <div class="col-lg-3 col-md-12 p-3 pt-5">
        <label for="aadhar"><b>Aadhaar No</b></label>
        <input type="number" id="aadhar" name="aadhaarno" maxlength="12" placeholder="Aadhar number.." required>
      </div>
      <div class="col-lg-3 col-md-12 p-3 pt-5">
        <label for="caste"><b>Caste</b></label>
      <select class="col-lg-10 p-1" maxlength="30" name="caste" id="caste">
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
  <br/>
  <hr>
  <br>
  <div class="border_lt">
	<h3 class="px-3">Candidate's Permanent Address</h3>
  </div>
  <div class="row row_new_app">
      <div class="col-lg-4 col-md-12 col-sm-8 p-3 pt-5">
        <label for="houseno1"><b>House No</b></label>
        <input type="number" id="houseno1" name="houseno1" required>
      </div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
        <label for="street1"><b>Street/Lane</b></label>
        <input type="text"  id="street1" name="street1" required>
      </div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
        <label for="landmark1"><b>Landmark</b></label>
        <input type="text"  id="landmark1" name="landmark1" required>
      </div>
  </div><br/>
  <div class="row row_new_app">
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <label for="city1"><b>City</b></label>
      <input type="text"  id="city1" name="city1" required>
      </div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
        <label for="po1"><b>Post Office</b></label>
        <input type="text"  id="po1" name="po1" required>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-6 p-3 pt-5">
        <label for="ps1"><b>Police Station</b></label>
        <select name="ps1" id="ps1" class="px-2 text-center" style="width: 225px;">
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
  </div>
  <div class="row row_new_app">
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <label for="pin1"><b>Pincode</b></label>
      <input type="number" class="text-center" id="pin1" name="pin1"  placeholder="Your Pincode.." required>
      </div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <label for="state1"><b>State</b></label>
      <select id="state1" class="px-2" name="state1" onchange="get_district()" style="width: 225px;">
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
      </div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <label for="district1"><b>District</b></label>
    <select  id="district1" class="px-2" name="district1" style="width: 225px;">
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
      </div>
  </div><br/>
  <hr>
  <br>
  <div class="border_lt">
  <h3 class="px-3" > Candidate's Current Address</h3>
  <div class="px-3" ><input type="checkbox" id="check" onclick="show()">Same as Permanent Address</div>
  </div>
  <div class="row row_new_app">
      <div class="col-lg-4 col-md-12 p-3 pt-5">
        <label for="houseno2"><b>House No</b></label>
        <input type="number" id="houseno2" name="houseno2" required>
      </div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
        <label for="street2"><b>Street/Lane</b></label>
        <input type="text"  id="street2" name="street2" required>
      </div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
        <label for="landmark2"><b>Landmark</b></label>
        <input type="text"  id="landmark2" name="landmark2" required>
      </div>
  </div><br/>
  <div class="row row_new_app">
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <label for="city2"><b>City</b></label>
      <input type="text"  id="city2" name="city2" required>
      </div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
        <label for="po2"><b>Post Office</b></label>
        <input type="text"  id="po2" name="po2" required>
      </div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
        <label for="ps2"><b>Police Station</b></label>
        <select name="ps2" id="ps2" class="px-2 text-center" style="width: 225px;">
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
  </div>
  <div class="row row_new_app">
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <label for="pin2"><b>Pincode</b></label>
      <input type="number" id="pin2" name="pin2" class="text-center"  placeholder="Your Pincode.." required>
      </div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <label for="state2"><b>State</b></label>
      <select id="state2" name="state2" onchange="get_district()" class="px-2 text-center" style="width: 225px;">
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
      </div>
      <div class="col-lg-4 col-md-12 p-3 pt-5">
      <label for="district2"><b>District</b></label>
    <select  id="district2" name="district2" class="px-2 text-center" style="width: 225px;">
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
      </div>
  </div>
    <br/><br/>
  
  <hr>
  <div class="row row_new_app">
      <div class="col-lg-6 col-md-12 p-3 pt-5">
        <label for="refno"><b>Reference No</b></label>
        <input type="text" id="refno" name="refno" placeholder="--Ref No--" class="px-2" style="width: 225px;" required>
      </div>
      <div class="col-lg-6 col-md-12 p-3 pt-5">
        <label for="refdate"><b>Reference Date</b></label>
        <input type="date" id="refdate" name="refdate" class="px-2" style="width: 225px;" required>
      </div>
    </div><br/>
    <div class="row row_new_app">
      <div class="col-lg-6 col-md-12 p-3 pt-5">
        <label for="defence"><b>Defence Personnel</b></label>
      <select name="defence" id="defence" class="px-2" style="width: 225px;" required>
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
    <div class="col-lg-6 col-md-12 p-3 pt-5">
        <label for="category"><b>Category</b></label>
      <select name="category" id="category" class="px-2 text-center" required style="width: 225px;">
          <option>--Select--</option>
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
      </div> 
        </div>
    <div class="row">
      <div class="d-lg-flex d-md-flex flex-md-row flex-sm-column justify-content-center col-lg-12 col-md-12 p-3 pt-5">
      <button class=" btn bg-danger text-light m-3 pr-3 pl-3" type="submit" value="Reset" onclick="reset()"><b>Reset</b></button>
        <div class=" btn bg-secondary m-3 pr-4 pl-4">
          <a id="back" class="text-white" href="<?php base_url()?>dashboard_adm" style="text-decoration:none;">Back</a>
        </div>
          <input class=" btn bg-success text-light m-3" type="submit" value="Submit" name="apply">
      </div>
    </div>
  </form><br/><br/>
  <button class="btn" onclick="topFunction()" id="myBtn" title="Go to top">Top ↑</button>
  </section>
  </div>
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