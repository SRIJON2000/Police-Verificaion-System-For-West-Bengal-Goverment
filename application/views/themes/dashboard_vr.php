<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
//$this->load->library('session');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title icon="">Admin Dashboard</title>
        <link rel = "icon" href ="<?php echo base_url();?>/application/views/pics/office.png" type = "image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>/theme_css2/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <style>
        input[type=submit]{
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        </style>
    </head>
    <body>
    <?php 
    $this->load->view('layouts/header_view');
    ?>
    <div>
        
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3">Operations</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto  me-3 me-lg-4 d-flex justify-content-end" >
                 <li><div class="text-white">Logged in as:</div></li><p class="text-white"><?php echo $this->session->userdata('user_type')?></p>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="<?php echo base_url()?>Home/logout">Logout</a></li>
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
                                    <a class="nav-link" href="<?php base_url()?>application">New Application</a>
                                    <a class="nav-link" href="<?php base_url()?>status">Check Status</a>
                                    <a class="nav-link" href="#">Update Application</a>
                                </nav>
                            </div>

                            <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapsePages">
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
                             -->
                            <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Report
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Monitoring Report</a>
                                    <a class="nav-link" href="#">Daily Application Report</a>
                                </nav>
                            </div> -->

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
                                            <th>Application date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Candidate Name</th>
                                            <th>Application date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td><input type="submit" value="Check Status">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="View Details"></td>
                                           
                                            
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








