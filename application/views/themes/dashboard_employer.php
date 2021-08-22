<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard Employer</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>/theme_css2/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php 
    $this->load->view('layouts/header_view');
    ?>
    <div>

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Operations</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <!--<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>-->
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto  me-3 me-lg-4 d-flex justify-content-end" >
                 <li> <div class="text-white">Logged in as:</div></li><p class="text-white">Office Name</p>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <br/>
                            <!--<div class="sb-sidenav-menu-heading">Interface</div>-->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Application
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">New Application</a>
                                    <a class="nav-link" href="#">Check Status</a>
                                    <a class="nav-link" href="#">Update Application</a>
                                    <a class="nav-link" href="#">Send Reminder</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Letter
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Letter To SPDIB</a>
                                    <a class="nav-link" href="#">Verified Letter To Employer</a>
                                    <a class="nav-link" href="#">Unverified Letter To Employer</a>
                                </nav>
                            </div>
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Report
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Monitoring Report</a>
                                    <a class="nav-link" href="#">Daily Application Report</a>
                                </nav>
                            </div>

                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-center">Dashboard</h1><br/>
                        <!-- <ol class="breadcrumb mb-4"> -->
                            <!-- <li class="breadcrumb-item active">Dashboard</li> -->
                        <!-- </ol> -->
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <button class="card bg-primary text-white mb-4">
                                    <div class="card-body"><b>No. of pending enquiries in the lastday of prevous quarter</b></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between ">
                                        <p class="small text-white stretched-link" ><b>Number</b></p>
                                        <!-- <div class="small text-white d-flex justify-content-between"><i class="fas fa-angle-right"></i></div>   -->
                                    </div>
                                </button>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <button  class="card bg-warning text-white mb-4">
                                    <div class="card-body"><b>No. of request received during the quarter</b></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                          <p class="small text-white stretched-link text-center" ><b>Number</b></p>
                                        <!-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                                    </div>
                                </button>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <button class="card bg-success text-white mb-4">
                                    <div class="card-body"><b>No. of cases pending as on the lastday of quarter</b></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <p class="small text-white stretched-link text-center" ><b>Number</b></p>
                                        <!-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                                    </div>
                                </button>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <button class="card bg-danger text-white mb-4">
                                    <div class="card-body"><b>No. of report pending more than 120 days</b></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <p class="small text-white stretched-link text-center" ><b>Number</b></p>
                                        <!-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                                    </div>
                                </button>
                            </div>
                        </div>
                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Recent Applications
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Candidate Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Application date</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Candidate Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Application date</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                           
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>55</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>23</td>
                                           
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url();?>/theme_css2/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url();?>/theme_css2/assets/demo/chart-area-demo.js"></script>
        <script src="<?php echo base_url();?>/theme_css2/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="<?php echo base_url();?>/theme_css2/js/datatables-simple-demo.js"></script>
    </div>
    </body>
    <?php $this->load->view('layouts/footer_view'); ?>
</html>




































<!--<!DOCTYPE html>
<html>
<head>
	<title>Employer Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
  <a href="<?php //echo base_url().'index.php/test/application'?>"><b>New Application</b></a>
  <a href="#"><b>Update Application</b></a>
  <a href="#"><b>Send Reminder</b></a>
  <a href="<?php //echo base_url().'index.php/test/status'?>"><b>Check Status</b></a>
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

