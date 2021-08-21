<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layouts/header_view');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Employer Dashboard</title>
  <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
<style>
	.logout {
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
		float:right;
		position: relative;
	}
  .my_accnt {
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
		position: fixed;
    top: 17.6%;
    left: 76%;
	}
	.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: lightblue;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 20px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: black;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: blue;
}

.sidebar p {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: red;
  display: block;
  transition: 0.3s;
  border-bottom: 6px solid red;
  background-color: lightgrey;
}

.sidebar p:hover {
  color: red;
  border-bottom: 6px solid red;
  background-color: lightgrey;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: blue;
}
#menu {
  transition: margin-left .5s;
  padding: 16px;
}
.main
{
	text-align:center;
	top: 50px;
}
.btna
{
	display: block;
  width: 30%;
  border: none;
  border-radius: 16px;
  background-color: DodgerBlue;
  padding: 14px 28px;
  font-size: 26px;
  cursor: pointer;
  text-align: center;
  position:fixed;
  top: 43.5%;
  left: 3%;
}

.btnb
{
  display: block;
  width: 30%;
  border: none;
  border-radius: 16px;
  background-color: Tomato;
  padding: 14px 28px;
  font-size: 26px;
  cursor: pointer;
  text-align: center;
  position:fixed;
  top: 43.5%;
  left: 35%;
}
.btnc
{
	display: block;
  width: 30%;
  border: none;
  border-radius: 16px;
  background-color: MediumSeaGreen;
  padding: 14px 28px;
  font-size: 26px;
  cursor: pointer;
  text-align: center;
  position:fixed;
  top: 43.5%;
  left: 67%;
}

.p1
{
	font-size: 30px;
	color: black;
	text-align:center;
	border: 6px solid red;
  	border-radius: 5px;
	background-color: orange;
	position:fixed;
  	top: 55%;
  	left: 10%;
}
.p2
{
	font-size: 30px;
	color: black;
	text-align:center;
	border: 6px solid red;
  	border-radius: 5px;
	background-color: orange;
	position:fixed;
  	top: 60%;
  	left: 69%;
}
.p3
{
	font-size: 30px;
	color: black;
	text-align:center;
	border: 6px solid red;
  	border-radius: 5px;
	background-color: orange;
	position:fixed;
  	top: 75%;
  	left: 10%;
}
.p4
{
	font-size: 30px;
	color: black;
	text-align:center;
	border: 6px solid red;
  	border-radius: 5px;
	background-color: orange;
	position:fixed;
  	top: 75%;
  	left: 69%;
}
</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><b>×</b></a>
  <p><b>National Informatics Centre</b></p>
  <a href="<?php echo base_url().'index.php/test/application'?>"><b>New Application</b></a>
  <a href="#"><b>Update Application</b></a>
  <a href="#"><b>Send Reminder</b></a>
  <a href="<?php echo base_url().'index.php/test/status'?>"><b>Check Status</b></a>
  <a href="#"><b>Update Application</b></a>
  <p><b>Letter</b></p>
  <a href="#"><b>Letter To SPDIB</b></a>
  <a href="#"><b>Verified Letter To Employer</b></a>
  <a href="#"><b>Unverified Letter To Employer</b></a>
  <p><b>Report</b></p>
  <a href="#"><b>Monitoring Report</b></a>
  <a href="#"><b>Daily Application Report</b></a>
	
</div>
<br/><button class="openbtn" onclick="openNav()">☰ Operations</button></div>
<a href="#"><button type="submit" class="logout"><b>Logout</b></button></a>
<a href="#"><button type="submit" class="my_accnt"><b>My Account</b></button></a>
<div id="menu">


<h1 class="main"><b>Welcome To</b></h1>
<h2 class="main"><b>Police Verification Reporting System</b></h2>

<button class="btna" type="submit"><b>New Application<b></button>
<button class="btnb" type="submit"><b>Update Record</b></button>
<button class="btnc" type="submit"><b>Check Status</b></button>


<p class="p1">No. of pending enquiries<br/> in the lastday of prevous<br/> quarter</p>
<p class="p2">No. of request received<br/>during the quarter</p>
<p class="p3">No. of cases pending as on<br/>the lastday of quarter</p>
<p class="p4">No. of report pending<br/> more than 120 days</p>
<script>
	function openNav() {
  document.getElementById("mySidebar").style.width = "350px";
  document.getElementById("main").style.marginLeft = "350px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}



</script>
</body>
</html>





.col1 {
  float: left;
  width: 10%;
  margin-top: 6px;
}

.col1_in {
  float: left;
  width: 20%;
  margin-top: 6px;
}

.col2 {
  position:relative;
  width: 10%;
  margin-top: 6px;
  left: 37%;
  float:left;
}

.col2_in {
  width: 20%;
  margin-top: 6px;
  position: fixed;
  left: 45%
}

.col3 {
  position: fixed;
  width: 10%;
  margin-top: 6px;
  left: 70%
}

.col3_in {
  width: 20%;
  margin-top: 6px;
  position: fixed;
  left: 78%
}