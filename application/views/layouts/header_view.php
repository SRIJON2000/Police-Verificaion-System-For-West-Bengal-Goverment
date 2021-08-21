<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
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
<img class="hd_pic" src="<?php echo base_url().'/view/pics/govt_of_ind_logo.png'?>">
<!-- Favicon icon -->
<link rel="shortcut icon" sizes="32x32" href="<?php echo $this->config->item('theme_uri');?>images/ub_logo.png">
<div class="hd"><b>Police Verification Reporting System</b></div><br/>
<div class="topnav">
<a class="active" href="<?php echo base_url().'index.php/test'?>"><b>Home</b></a>
  </div>


</body>
</html>