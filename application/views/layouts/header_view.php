<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<style>
	.hd
	{
		font-size: 50px;
		color: black;
		text-align:center;
  		border-radius: 20px;
		background-color: orange;
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
<img class="hd_pic" src="<?php echo base_url('pics/govt_of_ind_logo.png')?>">
<div class="hd"><b>Police Verification Reporting System</b></div><br/>
<a href="#"><button type="submit" class="hm"><b>Home</b></button></a>
</body>
</html>