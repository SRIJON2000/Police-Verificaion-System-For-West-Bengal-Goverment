<?php 
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
<link rel="stylesheet" href="<?php echo base_url(); ?>\application\views\themes\CSS\stylesheet1.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<style>
	.login-box a{color: #0576d8;}
	.btn-primary{background: #2576d8;border: none; padding:6px 15px; font-size:15px;}
	.mt10{ margin-top:10px;}
	.login-box .form-control{border: none;border-bottom: #999 1px solid;padding-left: 0;}
	.login-box-body,.register-box-body{ padding:20px 30px;box-shadow: 2px 3px 3px rgba(0,0,0,0.4); -webkit-box-shadow: 2px 3px 3px rgba(0,0,0,0.4); -moz-box-shadow: 2px 3px 3px rgba(0,0,0,0.4); -o-box-shadow: 2px 3px 3px rgba(0,0,0,0.4);}
	.login_btn {text-align: center;}
	.login_btn_main {width: 30%; display: inline-block; margin-left: 5px; margin-top: 5px;}

  .loader {
  border: 5px solid #f3f3f3;
  border-radius: 50%;
  border-top: 5px solid #3498db;
  width:30px;
  height: 30px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}
.login_loader{display: table;margin-left: 40%;}
.captchatxt {
	position: absolute;
	top: -21px;
	width: 100%;
	right: -22px;
	}
</style>
</head>

<body>
<h3 class="danger">
<?php 
$error = $this->session->flashdata('error');
if (!empty($error))
  echo $error;
  unset($_SESSION['error']);
?>
</h3>

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 clearfix">

      <span class="login100-form-title">Login for District Administration</span>

      <p>Provide username and password for login</p>

<?php echo (isset($error_message)) ? $error_message : "";?>
    <?php echo form_open('Login/login', array('class' => 'login_form','name' => 'login_form', 'id' => 'login_form','autocomplete'=>'off')); ?>
    
    <div class="wrap-input100 validate-input " >
							<input class="input100" type="text" name="login_id" value="<?php echo set_value('login_id'); ?>" placeholder="Username" placeholder="Username">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<span class="lnr lnr-user"></span>
							</span>
		 </div>
						
     <div> 
       <?php echo form_error('login_id'); ?> 
     </div>

		<div class="wrap-input100 validate-input"  >
		  <input class="input100" type="password" name="password" placeholder="Password">
		  <span class="focus-input100"></span>
		  <span class="symbol-input100">
		  <span class="lnr lnr-lock"></span>
		  </span>
		</div>
        <?php echo form_error('password'); ?> 

      <div class="wrap-input100">
	  		<div class="row">
          <div class="col-md-5 captcha_img">
                <?php echo $cap['image']; ?>
          </div>
              
          <div class="col-md-2">
            <span class="lnr lnr-sync captcha-refresh" id="loadCaptcha" ></span>
          </div>

        <div class="col-md-5">
              <input class="captcha-field" type="text" name="captcha">
            <div class=" ">
              <?php echo form_error('captcha'); ?> 
            </div>
	      </div>
       </div>

     <div class="row">
       <div class="col-md-12 captcha-txt">
          <p style="color:#a94442;">* Captcha is not case sensitive</p>
        </div>
     </div>
	</div>
    
    <div class="container-login100-form-btn">
		  <button class="login100-form-btn">Login</button>
		</div>
     
    <div class="wrap-input100">
		  	<div class="row">
	         <div class="col-md-6 text-left">
	             <a class="backto-txt"href="<?php echo base_url(); ?>"><span class="lnr lnr-arrow-left"></span> Back</a>
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
			type: "GET",
			dataType: "json",
			success:function(resp)
					{ 
						$('.captcha_img').html(resp.image);
					}
		});
	});
});
</script>
</body>
<?php $this->load->view('layouts/footer_view'); ?>
</html>
