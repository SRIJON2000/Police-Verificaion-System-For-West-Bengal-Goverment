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
        a.action
        {
            text-decoration:none;
            background-color: #04AA6D;
            color: white;
            padding: 8px 18px;
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
            <a class="navbar-brand ps-3">Menu</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto  me-3 me-lg-4 d-flex justify-content-end" >
                 <li><div class="text-white">Logged in as:&nbsp</div></li><p class="text-white"><b><?php echo $this->session->userdata('user_type')?></b><b>&nbsp(&nbsp<?php echo $this->session->userdata('district_name')?>&nbsp)</b></p>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="<?php echo base_url()?>Home/dashboard_adm">Dashboard</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url()?>Home/profile">Profile</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url()?>Home/activity_log">Activity Log</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url()?>Home/notification">Notification&nbsp;<?php $num=$this->Application_model->count_seen_status($this->session->userdata('login_id')); if($num!=0) {?><i class="fa fa-bell" style="font-size:17px;color:red"></i><b>(<?php echo $num;?>+)</b><?php }?></a></li>
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

                                    <a class="nav-link" href="<?php base_url()?>dashboard_adm">New Application</a>
                                    <a class="nav-link" href="<?php base_url()?>application">New Application</a>
                                    <a class="nav-link" href="<?php base_url()?>addoffice">Add Office</a>
                                    <a class="nav-link" href="<?php base_url()?>statussearch">Check Status</a>
                                    
                                    
                                   
                                </nav>
                                

                                
                            </div>
                           
                            
                            
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Report
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url()?>Home/date_range_for_quarterly_report">Monitoring Report</a>
                                    <a class="nav-link" href="<?php echo base_url()?>Home/date_range">Daily Application Report</a>
                                </nav>
                            </div>

                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-center"><b>List of Applications(IB Verification Completed) to verify/Reject</b></h1><br/>
                        <!-- <ol class="breadcrumb mb-4"> -->
                            <!-- <li class="breadcrumb-item active">Dashboard</li> -->
                        <!-- </ol> -->
                        
                       

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <b>Applications to verify/Reject</b>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Reference No.</th>
                                            <th>Candidate Name</th>
                                            <th>Office Name</th>
                                            <th>Application date</th>
                                            <th>Final Status (Verified/Unverified)</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Reference No.</th>
                                        <th>Candidate Name</th>
                                        <th>Office Name</th>
                                        <th>Application date</th>
                                        <th>Final Status (Verified/Unverified)</th>
                                        <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        foreach($applications as $application)
                                        {
                                            if($application['ocvr_approval']==1 && $application['pvr_final_status_id_fk']==1){
                                    ?>
                                        <tr>
                                            <td><?php echo $application['ref_no_pk']?></td>
                                            <td><?php echo $application['candidate_f_name'].' '.$application['candidate_m_name'].' '.$application['candidate_l_name']?></td>
                                            <td><?php echo $application['employer_name'] ?></td>
                                            <td><?php echo $application['application_date'] ?></td>
                                            <td><div style="color:blue"><b><?php echo $application['final_status_name']?></b></div></td>
                                            <td><a class="action" href="<?php echo base_url()?>Home/application_details/<?php echo $application['pvr_id_pk']?>"><b><?php if($application['pvr_final_status_id_fk']==1 && $application['ocvr_approval']==1){echo 'View Details / Verify';}else{echo 'View Details';}?></b></a>
                                            <br><br><a class="action" href="<?php base_url()?>status/<?php echo $application['pvr_id_pk'] ?>"><b>Check Status</b></a></td>
                                        </tr>
                                    <?php
                                            }
                                            
                                        }
                                    ?>    
                                        
                                        
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
        <script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script> 
<script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script> 
    </div>
    </body>
    <?php $this->load->view('layouts/footer_view'); ?>
</html>








