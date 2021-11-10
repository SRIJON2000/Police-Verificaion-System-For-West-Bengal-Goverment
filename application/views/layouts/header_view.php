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
<!-- <div class="container-fluid header">   -->
<!-- <div class="container"> -->
<div class="header row" id="header_body">
  <div class="row" id="header_body">
    <div class="col-lg-2 col-md-2 col-sm-1 d-inline p-5 pt-0 pb-0 p-xs-0 text-center"><img src="<?php echo base_url(); ?>/application/views/pics/biswa_bangla_lt.png" alt="Biswa Bangla picture" height="110" width="80"></div>
    <div class="text-center col-lg-8 col-md-6 col-sm-3 d-inline pt-2 p-xs-0"><h1><strong>Police Verification Reporting System</strong></h1></div>
    <div class="col-lg-2 col-md-2 col-sm-1 d-inline p-5 pt-0 pb-0 p-xs-0 mx-auto"><img src="<?php echo base_url(); ?>/application/views/pics/biswa_bangla_rt.png" alt="Biswa Bangla logo" height="110" width="155"></div>
  </div>
  <div class="mt-3 p-3 m-xs-0 row" id="header_body">
    <div class="col-lg-1 col-sm-4"><a class="p-3 pr-5 pl-5 active text-center" href="http://localhost/pvr/" <?php if ($_SERVER['PHP_SELF']=='/pvr/index.php/test/dashboard_admin'){echo 'target="_blank"';};?>><b>Home</b></a></div>
    <div class="col-lg-2 col-sm-5"><a class="btn text-center" href="#contact"><b>Contact us</b></a></div>
    <div class="col-lg-1 col-sm-3"><a class="btn text-center" href="#about"><b>About</b></a></div>
    <!-- <?php //if ($_SERVER['PHP_SELF']=='/pvr/index.php'){echo '<a href="#about"><b>Register Your Office</b></a>';};?> -->
  </div>
</div>
<!-- </div>-->
<!-- </div> -->
</body>
</html>
