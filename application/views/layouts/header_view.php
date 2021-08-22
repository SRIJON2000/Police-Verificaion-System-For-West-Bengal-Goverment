<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>POLICE VERIFICATION REPORTING SYSTEM</title>

<style>
	#navbar{
	background-color: rgb(240, 176, 104);
	
	}
	#header{
		padding: 1%;
		background-color: rgb(223, 148, 63);
		
	}
	h1{
		color: #fff;
		
	}
	
	</style>
	</head>
<body>
<div class="col-lg-12 col-md-12">
	<div id="header">
		<img src="" alt="Emblame Image Here"><h1 class="text-center">POLICE VERIFICATION REPORTING SYSTEM</h1>
	</div>
<nav class="navbar navbar-expand-lg navbar-light " id="navbar">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/pvr/">Home</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About Us</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" style="background-color: #9AC7BF; color: black;">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>
</body>
</html>-->


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 75px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-left {
  float: left;
}
.header-right {
  float: right;
}
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>
  

<div class="header">

    <div  style="text-align:center;font-size:40px"><b>Police Verification Reporting System</b></div>
    <img style="position:absolute;top:3%;left:90%;"src="<?php echo base_url(); ?>/application/views/pics/govt_of_ind_logo.png" alt="emblame picture" height="100" width="85">
  
  
  <div class="header-left">
    <a class="active" href="http://localhost/pvr/"><b>Home</b></a>
    <a href="#contact"><b>Contact US</b></a>
    <a href="#about"><b>About</b></a>
    <?php if ($_SERVER['PHP_SELF']=='/pvr/index.php'){echo '<a href="#about"><b>Register Your Office</b></a>';};?>
    
    
  </div>
</div>



</body>
</html>














<!-- <?php 
// defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<style>
	.topnav {
  overflow: hidden;
  background-color: navy;
}
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: red;
  color: white;
}
	.hd
	{
		font-size: 35px;
		color: black;
		text-align:center;
	}
	.hd_pic
	{
		width:50px;
		height:50px;
		float:left;
	}
	.hm {
		min-width: 180px;
		background: #ee4411;
		color: #FFFFFF;
		border-radius: 120px;
		border: none;
		font-size: 20px;
		text-transform: uppercase;
		font-weight: 300;
		letter-spacing: 2px;
		height: 30px;
		float:left;
		top:15%
	}
	
</style>
</head>
<body>


<img class="hd_pic" src="<?php //echo base_url().'/view/pics/govt_of_ind_logo.png'?>">
<!-- Favicon icon -->
<!-- <link rel="shortcut icon" sizes="32x32" href="<?php //echo $this->config->item('theme_uri');?>pics/govt_of_ind_logo.png"> -->
<!-- <div class="hd"><b>Police Verification Reporting System</b></div><br/> -->
<!-- <div class="topnav"> -->
<!-- <a class="active" href="<?php //echo base_url().'index.php/test'?>"><b>Home</b></a> -->
  <!-- </div> -->


<!-- </body> -->
<!-- </html> --> 





