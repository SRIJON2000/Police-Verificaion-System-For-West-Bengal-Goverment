<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layouts/header_view');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password],select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
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

<h2 style="text-align:center;">Office/Institution Login</h2>

<form action="/action_page.php" method="post">
  <div class="container">
    
    <div class="row">
    <label for="uname" class="col2"><b>Username/User Id</b></label>
    <input class="col2_in" type="text" placeholder="Enter Username" name="uname" required>
    </div>
    <br/><br/><br/><br/><br/><br/>
    <div class="row">
    <label class="col2" for="psw"><b>Password</b></label>
    <input class="col2_in" type="password" placeholder="Enter Password" name="psw" required>
    </div>   
    <br/><br/><br/><br/><br/><br/>
    <div class="row">
    <button type="submit" class="col2_in">Login</button>
    </div><br/><br/><br/><br/><br/><br/>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
<?php $this->load->view('layouts/footer_view'); ?>
</html>
