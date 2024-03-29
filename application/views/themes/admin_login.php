<?php 
//written by Srijon Mallick, Rupak Pal, Soumyadeb Dhar, Indranil Sen, Jit Saha
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layouts/header_view');
$this->load->library('session');
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Panel</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>application/views/themes/CSS/stylesheet1.css">
<script src="<?php echo base_url();?>application/js/sha256.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
	function encryption() {
		if (document.login_form.password.value != '') {
			
			var enc2 = sha256(sha256(document.login_form.password.value) + '<?php echo $_SESSION['salt']; ?>') ;
			document.login_form.password.value = enc2;
		}
	}
	</script>


</head>

<body>

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 clearfix text-center">
				
				<h2 class="mt-3 mb-3 login100-form-title "><b>Login for District Administration</b></h2>
				<!-- <div class="border-dark border border-5 container">  -->
		<section class=" shadow-lg container p-3" style="width: 400px; border-radius:15px;"> 
				 <h3 class="text-center danger " style="color:red;"><b>
			  <?php 
				  $error = $this->session->flashdata('error');
				  if (!empty($error))
						echo $error;
					unset($_SESSION['error']);
			  ?></b></h3>
			  <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
		<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
		<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
	  </svg>
			<p class="text-center"><b>Provide username and password for login</b></p>
		
	  <?php echo (isset($error_message)) ? $error_message : "";?>
		  <?php echo form_open('Login', array('class' => 'login_form','name' => 'login_form','id' => 'login_form','autocomplete'=>'off','onsubmit'=>'return encryption()')); ?>
		  <b>Username</b>
		  <input type="hidden" name="security_code" class="security_code" value="<?php echo hash('sha256',strtoupper($cap['word']).$this->config->item('encryption_key')) ?>">
		  <div class=" wrap-input100 validate-input " >
								  <input class="text-center input100" type="text" name="login_id" value="<?php echo set_value('login_id'); ?>" placeholder="Enter Username" placeholder="Username">
								  <span class="focus-input100"></span>
								  <span class="symbol-input100">
								  <span class="lnr lnr-user"></span>
								  </span>
		  </div>				
		  <div> 
			 <?php echo form_error('login_id'); ?> 
		  </div>
		  
			  <div class="form-group mt-3 wrap-input100 validate-input">
			  <b>Password</b><br>
				<input class="rounded text-center input100" type="password" name="password" placeholder="Enter Password">
				<span class="focus-input100"></span>
				<span class="symbol-input100">
				<span class="lnr lnr-lock"></span>
				</span>
			  </div>
			  <?php echo form_error('password'); ?> 
			  <?php echo $this->session->flashdata('error'); ?>
	  
			  
		  <div class="form-group mt-3 wrap-input100 validate-input">
			  <div class="row">
				  <div class="col-xs-5 captcha_img" style="border: 0px solid;padding: 0;">
					   <?php echo $cap['image']; ?>
					   <span class="symbol-input100">
				  </div>
				  <div>
					  <br>
				  </div>
	  
	  
				  <div class="lnr lnr-sync captcha-refresh"  id="loadCaptcha" ></div>
						
					  <div class="" style="padding: 0">
							<input type="text" class="captcha-field" name="captcha" >
							<?php echo form_error('captcha'); ?>
						</div>
					
				  <div class="wrap-input100">
					  <div class="row">
							<p class="text-danger">* Captcha is not case sensitive</p>
					  </div>
					</div>
	  
	  
	  <!--New code added-->
		  <div class="container-login100-form-btn">
				<button class="btn bg-success text-white login100-form-btn">Login</button><br>
				<a href="<?php echo base_url();?>Home/forgot_password"><b>forgot password ?</b></a>
			  </div>
		  </div>
		   
		</section>
    <div class="wrap-input100">
		  	<div class="row">
	         <div class="col-md-1 text-left">
	             <a class="btn bg-secondary text-light mb-4"href="<?php echo base_url(); ?>"><span class="lnr lnr-arrow-left"></span> Back</a>
	            </div>
	          </div>
	       </div>
			<?php echo form_close(); ?>
</div>

<!--captcha refresh-->
<script>
 $(document).ready(function(){
	$('#loadCaptcha').click(function(){
		$.ajax({
			url: "Login/load_captcha",
			type: "POST",
			dataType: "json",
			success:function(resp)
					{ 
						$('.captcha_img').html(resp.image);
					}
		});
	});
});
</script>
<script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script> 
</body>
<?php $this->load->view('layouts/footer_view'); ?>
</html>
