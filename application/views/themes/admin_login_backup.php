<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layouts/header_view');
$this->load->library('session');

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url(); ?>\application\views\themes\CSS\stylesheet1.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body class="text-center row">
<h2 class="txt-bold">Administration Login</h2>
<h3 class="danger">
<?php 
$error = $this->session->flashdata('error');
if (!empty($error))
  echo $error;
  unset($_SESSION['error']);
?>
</h3>

<form action="<?php echo base_url();?>Login/login" method="post" class="form col-lg-12 col-md-12">
  <div class="row text-center" id="login_form_style">
    
      <div class="from-group col-md-12 mt-2">
        <label for="uname"><b>Username / User Id</b></label><br>
        <input id="ip_field_login" class="text-center mt-1" type="text" placeholder="Enter Username" name="uname" required>
      </div>
      <br/><br/>
      <div class="form-group col-md-12 mt-2">
        <label for="psw"><b>Password</b></label><br/>
        <input id="ip_field_login" class="text-center mt-1" type="password" placeholder="Enter Password" name="psw" required>
      </div><br/><br/><br>
        <input type="submit" id="loginbtn" class="text-center btn bg-success text-light border-dark mt-3" value="Login" name="login">
        <span class="mt-2"><a href="#"><b>Forgot Password?</b></a></span><br/>
      </div>

      <!-- added by Sudipta-->
      <div class="row">
        	<div class="col-xs-5 captcha_img" style="border: 0px solid;padding: 0;">
        		 <?php echo $cap['image']; ?>
        	</div>
          <div class="col-md-2" style="border: 0px solid red;line-height: 38px"><i class="fa fa-refresh" style="font-size:18px;cursor:pointer; " id="loadCaptcha" ></i></div >
      		<div class="col-xs-5" style="padding: 0">
      			<input type="text" class="form-control" name="captcha" placeholder="Captcha" >
      			<?php echo form_error('captcha'); ?>
      		</div>
         </div>
      </div>
      <div class="form-group has-feedback">
        <div class="row">
          <p class="text-danger">* Captcha is not case sensitive</p>
        </div>
      </div>
      <!-- added by Sudipta-->
</form>

  <div class="col-sm-1 mt-10" id="backbtn_login">
    <button class=" btn bg-secondary border-dark text-light">Back</button>
  </div>
  <br><br>
</body>
<?php $this->load->view('layouts/footer_view'); ?>
</html>
