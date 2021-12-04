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
<body id="header_body">
<div class="header row" id="header_body">
  <div class="row" id="header_body">
    <div class="col-md-2 col-sm-3 col-xs-3 d-inline p-5 pt-0 pb-0 p-xs-0 text-center"><img src="<?php echo base_url(); ?>/application/views/pics/biswa_bangla_lt.png" alt="Biswa Bangla picture" height="110" width="80"></div>
    <div class="col-md-8 col-sm-6 col-xs-6 d-inline pt-2 p-xs-0 text-center"><h1><strong>Police Verification Reporting System</h1><h5><div>VR Section</div><div class="text-success">Office of District Magistrate, Howrah</div><div class="text-secondary">Government Of West Bengal</div></strong></h5></div>
    <div class="col-md-2 col-sm-3 col-xs-3 d-inline p-5 pt-0 pb-0 p-xs-0 text-center"><img src="<?php echo base_url(); ?>/application/views/pics/biswa_bangla_rt.png" alt="Biswa Bangla logo" height="110" width="100"></div>
  </div>
  <div class="mt-3 p-3 m-xs-0 row" id="header_body">
    <div class="col-lg-1 col-sm-4"><a class="btn active text-center" href="http://localhost/pvr/" <?php if ($_SERVER['PHP_SELF']=='/pvr/index.php/test/dashboard_admin'){echo 'target="_blank"';};?>><b>Home</b></a></div>
    <div class="col-lg-1 col-sm-3"><a class="btn text-center" href="#about"><b>About</b></a></div>
    <!-- <?php //if ($_SERVER['PHP_SELF']=='/pvr/index.php'){echo '<a href="#about"><b>Register Your Office</b></a>';};?> -->
  </div>
</div>
</body>
</html>
