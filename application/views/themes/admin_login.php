<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layouts/header_view');
$this->load->library('session');

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password],select {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button,input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

.col2 {
  position:absolute;
  width: 9%;
  margin-top: 6px;
  left: 30%;
}

.col2_in {
  width: 20%;
  margin-top: 6px;
  position: absolute;
  left: 40%
}
.row {
	margin-right: -15px;
  margin-left: -15px;
	float:left;
}
</style>
</head>
<body>
<h2 style="text-align:center;">Administration Login</h2>
<h3 style="text-align:center;color:red">
<?php 
$error = $this->session->flashdata('error');
if (!empty($error))
  echo $error;
  unset($_SESSION['error']);
?>
</h3>

<form action="<?php echo base_url();?>Login/login" method="post">
  <div class="container">
    
    <div class="row">
    <label for="uname" class="col2_in"><b>Username / User Id</b></label>
    </div><br/>
    <div class="row">
    <input class="col2_in" type="text" placeholder="Enter Username" name="uname" required>
    </div>
    <br/><br/><br/><br/><br/>
    <div class="row">
    <label class="col2_in" for="psw"><b>Password</b></label>
    </div><br/>
    <div class="row">
    <input class="col2_in" type="password" placeholder="Enter Password" name="psw" required>
    </div><br/><br/><br/><br/> 
    <div class="row">
    <input type="submit" class="col2_in" value="Login" name="login">
    </div>
    </form><br/><br/><br/><br/>
    <span class="col2_in"><a href="#"><b>Forgot Password?</b></a></span><br/>
    
  </div>

  <div style=" padding-left:1%; background-color:#f1f1f1;">
    <button style="border-radius: 5px;" type="button" class="cancelbtn">Back</button>
  </div>


</body>
<?php $this->load->view('layouts/footer_view'); ?>
</html>
