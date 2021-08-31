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
  

<div class="header">

    <div class="text-center" style="font-size:40px"><b>Police Verification Reporting System</b></div>
    <img style="position:absolute;top:3%;right:90%;"src="<?php echo base_url(); ?>/application/views/pics/biswa_bangla_lt.png" alt="Biswa Bangla picture" height="110" width="80">
    <img style="position:absolute;top:3%;left:85%;"src="<?php echo base_url(); ?>/application/views/pics/biswa_bangla_rt.png" alt="Biswa Bangla logo" height="110" width="155">
  <br><br><br>  
  <div class="header-left">
    <a class="active" href="http://localhost/pvr/" <?php if ($_SERVER['PHP_SELF']=='/pvr/index.php/test/dashboard_admin'){echo 'target="_blank"';};?>><b>Home</b></a>
    <a href="#contact"><b>Contact US</b></a>
    <a href="#about"><b>About</b></a>
    <?php if ($_SERVER['PHP_SELF']=='/pvr/index.php'){echo '<a href="#about"><b>Register Your Office</b></a>';};?>
    
    
  </div>
</div>



</body>
</html>
