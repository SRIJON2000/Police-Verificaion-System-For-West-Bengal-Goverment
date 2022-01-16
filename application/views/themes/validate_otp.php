<?php 
// $this->load->helper('download');
// $rndno=rand(1000, 9999);
// $this->session->set_userdata('otp',$rndno);
// $data = 'Your OTP is '.$rndno;
// $name = 'otp.txt';
// force_download($name, $data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OTP Validation</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link href="<?php echo base_url();?>/theme_css2/css/styles.css" rel="stylesheet" />
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Validate OTP</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Enter the OTP that has been sent to the email id <b><?php echo $_SESSION['email'];?></b></p>

      <form  method="post" action="<?php echo base_url();?>Home/match_otp" onsubmit ='return validate()'>
      <h8 class="text-center danger " style="color:red;"><b>
      <?php 
				  $error = $this->session->flashdata('error');
				  if (!empty($error))
						echo $error;
					unset($_SESSION['error']);
			  ?></b></h8><br>
      <label><b>Enter OTP:</b></label><br>
      <div class="input-group mb-3">
          
          <input type="password"class="form-control" name="otp" placeholder="OTP">
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Validate OTP</button>
          </div>
          <!-- /.col -->
        </div>
      </form><br>
      <a type="submit" class="btn btn-primary btn-block" href="<?php echo base_url();?>Home/download_otp">Download OTP</a>
      <p class="mt-3 mb-1">
        <a href="<?php echo base_url()?>Home/admin_login">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
