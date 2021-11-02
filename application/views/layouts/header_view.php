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
  

<div class="header d-block row">
  <div class="row block">
    <div class="col-lg-2 col-sm-12 d-inline p-5 pt-0 pb-0 "><img src="<?php echo base_url(); ?>/application/views/pics/biswa_bangla_lt.png" alt="Biswa Bangla picture" height="110" width="80"></div>
    <div class="text-center col-lg-9 col-sm-12 d-inline" style="font-size:40px"><b>Police Verification Reporting System</b></div>
    <div class="col-1 col-sm-0 d-inline d-flex justify-content-end "><img src="<?php echo base_url(); ?>/application/views/pics/biswa_bangla_rt.png" alt="Biswa Bangla logo" height="110" width="155"></div>
  </div>

  <div class="header mt-5 p-3 m-3 m-sm-0 row">
    <div class="col-lg-1 col-sm-4"><a class="p-3 pr-5 pl-5 active text-center" href="http://localhost/pvr/" <?php if ($_SERVER['PHP_SELF']=='/pvr/index.php/test/dashboard_admin'){echo 'target="_blank"';};?>><b>Home</b></a></div>
    <div class="col-lg-1 col-sm-4"><a class="btn text-center" href="#contact"><b>Contact US</b></a></div>
    <div class="col-lg-1 col-sm-4"><a class="btn text-center" href="#about"><b>About</b></a></div>
    <!-- <?php //if ($_SERVER['PHP_SELF']=='/pvr/index.php'){echo '<a href="#about"><b>Register Your Office</b></a>';};?> -->
    
    
  </div>
</div>



</body>
</html>
