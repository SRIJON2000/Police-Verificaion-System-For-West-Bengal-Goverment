<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layouts/header_view');
?>
<!DOCTYPE html>
<html>
<head>
<title>Create New Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url();?>\application\views\themes\CSS\stylesheet1.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
 <body>
<style>
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
  label{
    font-size:20px;
  }
  .border_lt{
    border-left: solid 10px green;
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
<?php 
			$error = $this->session->flashdata('error');
		?>
<div class="container">
<br>
<h2>Creating New Password For the User <b><?php echo $_SESSION['email'];?></b></h2><br>
<h6 style="color:red;"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></h6>
  <div class="border_lt px-2"><h2>Create New Password</h2></div>
  <form id="addoffice" action="<?php echo base_url();?>Home/create_password" method="post">

  <div class="row row_new_app">
    <div class="col-lg-12 col-md-12 p-3">
      <div class="row"><div class="col-lg-4"><label for="employer"><b>New Password</b></label>
      </div><div class="col-lg-8"><input type="text" name="npassword" class="px-2 container-fluid">
      <br><div style="color:red"></div>
    </div></div>
    </div>
    <div class="col-lg-12 col-md-12 p-3">
    <div class="row"><div class="col-lg-4"><label for="addr1"><b>Confirm Password</b></label>
    </div><div class="col-lg-8"><input type="text" name="cpassword"class="px-2 container-fluid">
    <br><div style="color:red"></div>
  </div></div>
    </div>
    
  </div>
  <div class="row">
      <div class="d-lg-flex d-md-flex flex-md-row flex-sm-column justify-content-center col-lg-12 col-md-12 p-3 pt-5">
        <button class=" btn bg-danger text-light m-3 pr-3 pl-3" type="submit" value="Reset" onclick="reset()"><b>Reset</b></button>
        <div class=" btn bg-secondary m-3 pr-4 pl-4">
          <a id="back" class="text-white" href="<?php base_url()?>admin_login" style="text-decoration:none;">Login</a>
        </div>
          <a id="myBtn_submit" class="btn bg-success text-light m-3">Submit</a>
      </div>
    </div>
</form><br/>
</div>
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

<?php $this->load->view('layouts/footer_view'); ?>
        </body>
  <script>
function reset()
{
  document.getElementById("application").reset();
}
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
  document.getElementById("addoffice").submit();
}
function no()
{
  modal.style.display = "none";
}
</script>
<script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script> 
</html>