<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url(); ?>\application\views\themes\CSS\stylesheet1.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<style>
 
  </style>
<body id="header_body">
<div class="header row" id="header_body">
  <div class="row" id="header_body">
    <div class="col-md-2 col-sm-3 col-xs-3 d-inline p-5 pt-0 pb-0 p-xs-0 text-center"><img src="<?php echo base_url(); ?>/application/views/pics/biswa_bangla_lt.png" alt="Biswa Bangla picture" height="110" width="80"></div>
    <div class="col-md-8 col-sm-6 col-xs-6 d-inline pt-2 p-xs-0 text-center" style="color:black"><h1><strong>Police Verification Reporting System</h1><h5><div>VR Section</div><div class="text-success">Office of District Magistrate, Howrah</div><div class="text-secondary">Government Of West Bengal</div></strong></h5></div>
    <div class="col-md-2 col-sm-3 col-xs-3 d-inline p-5 pt-0 pb-0 p-xs-0 text-center"><img src="<?php echo base_url(); ?>/application/views/pics/biswa_bangla_rt.png" alt="Biswa Bangla logo" height="110" width="100"></div>
  </div>
  <div class="mt-3 p-3 m-xs-0" style="background-color:navy">
  <div class="d-flex flex-row" id="header_body">
    <?php if($_SERVER['PHP_SELF']=='/pvr/index.php' || $_SERVER['PHP_SELF']=='/PVR/index.php/Home/admin_login' || $_SERVER['PHP_SELF']=='/PVR/index.php/Home/password_set'){ ?>
    <div class="m-2"><a class="btn text-center" style="color:white" onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'" href="http://localhost/pvr/"><b>Home</b></a></div>
    <?php } else{ ?>
      <div class="m-2"><a class="btn text-center" style="color:white" onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'" href="http://localhost/PVR/Home/dashboard_adm"><b>Dashboard</b></a></div>
      <?php }?>
    <div class="m-2" ><a class="btn text-center" style="color:white" onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'" href="<?php echo base_url(); ?>/Home/contact"><b>Contact</b></a></div>
    <!-- <?php //if ($_SERVER['PHP_SELF']=='/pvr/index.php'){echo '<a href="#about"><b>Register Your Office</b></a>';};?> -->
  </div>
  </div>
</div>
</body>
</html>
