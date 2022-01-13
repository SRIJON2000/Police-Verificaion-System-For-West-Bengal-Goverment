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
        <title icon="">Activity Log</title>
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
        @media only screen and (max-width: 474px) {
            #sm_hide{
                display:none; 
            }
            #sm_show{
                display:visible;
            }
        }
        @media only screen and (min-width: 475px) {
            #sm_show{
                display:none;
            }
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
            <div class="d-inline"><button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button></div>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto me-3 me-lg-4 d-flex justify-content-end" >
            <li id="sm_hide"><div class="text-white">Logged in as:&nbsp
               <strong><?php echo $this->session->userdata('user_type')?></strong><strong>&nbsp(&nbsp<?php echo $this->session->userdata('district_name')?>&nbsp)</strong></div></li>
                    <li class="nav-item dropdown d-sm-block">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw text-white"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li id="sm_show"><div class="text-dark">Logged in as:
                                <strong><?php echo $this->session->userdata('user_type')." "?>(<?php echo $this->session->userdata('district_name')?>)</strong></div></li>
                            <hr id="sm_show">
                            <li><a class="dropdown-item" href="<?php echo base_url()?>Home/profile">Profile</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url()?>Home/dashboard_adm">Dashboard</a></li>
                            
                            
                            <li><a class="dropdown-item" href="<?php echo base_url()?>Home/notification">Notification&nbsp;<?php $num=$this->Application_model->count_seen_status($this->session->userdata('login_id')); if($num!=0) {?><i class="fa fa-bell" style="font-size:17px;color:red"></i><b>(<?php echo $num;?>+)</b><?php }?></a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="<?php echo base_url()?>Home/logout">Logout</a></li>
                        </ul>
                    </li>
            </ul></div>
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
                                <?php 
                                    if($this->session->userdata('user_type')=='DATA ENTRY OPERATOR')
                                    {
                                ?>
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php base_url()?>application">New Application</a>
                                    <a class="nav-link" href="<?php base_url()?>addoffice">Add Office</a>
                                    <a class="nav-link" href="<?php base_url()?>statussearch">Check Status</a>
                                    <a class="nav-link" href="<?php base_url()?>verify_reject">Update Application</a>
                                    
                                    <a class="nav-link" href="#">Send Reminder</a>
                                </nav>
                                <?php 
                                    }
                                ?>

                                <?php 
                                    if($this->session->userdata('user_type')=='OFFICER IN CHARGE')
                                    {
                                ?>
                                <nav class="sb-sidenav-menu-nested nav">
                                    <!-- <a class="nav-link" href="<?php base_url()?>application">New Application</a> -->
                                    <a class="nav-link" href="<?php base_url()?>addoffice">Add Office</a>
                                    <a class="nav-link" href="<?php base_url()?>statussearch">Check Status</a>
                                    <!-- <a class="nav-link" href="#">Update Application</a> -->
                                    <a class="nav-link" href="#">Send Reminder</a>
                                </nav>
                                <?php 
                                    }
                                ?>

                                <?php 
                                    if($this->session->userdata('user_type')=='ADDITIONAL DISTRICT MAGISTRATE')
                                    {
                                ?>
                                <nav class="sb-sidenav-menu-nested nav">
                                    <!-- <a class="nav-link" href="<?php base_url()?>application">New Application</a> -->
                                    <a class="nav-link" href="<?php base_url()?>addoffice">Add Office</a>
                                    <a class="nav-link" href="<?php base_url()?>statussearch">Check Status</a>
                                    <a class="nav-link" href="<?php base_url()?>all_verified_list">All verified applications</a>
                                    <!-- <a class="nav-link" href="#">Update Application</a> -->
                                    <!-- <a class="nav-link" href="#">Send Reminder</a> -->
                                </nav>
                                <?php 
                                    }
                                ?>
                            </div>
                            <?php 
                                if($this->session->userdata('user_type')=='OFFICER IN CHARGE' )
                                    {
                            ?>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Letter
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Letter To SPDIB</a>
                                    <a class="nav-link" href="<?php echo base_url()?>Home/verified_letter_list">Verified Letter To Employer</a>
                                    <a class="nav-link" href="<?php echo base_url()?>Home/unverified_letter_list">Unverified Letter To Employer</a>
                                </nav>
                                
                            </div>
                            <?php 
                                    }
                                ?>

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
                        <h1 class="mt-4 text-center">Activity Log</h1><br/>
                        <!-- <ol class="breadcrumb mb-4"> -->
                            <!-- <li class="breadcrumb-item active">Dashboard</li> -->
                        <!-- </ol> -->
                        <?php //$fetched_data= $this->application_model->activity_log_update();
                        //$lim = $this->application_model->bind();
                        
                        ?>
                        <table class="table table-bordered table-hover table-secondary" style="font-size:22px;">
                            <thead><tr>
                                <th span="col">Sl.No.</th>
                                <th span="col">Section</th>
                                <th span="col">Action</th>
                                <th span="col">Request</th>
                                <th span="col">IP Address</th>
                                <th span="col">Login Credentials</th>
                                <th span="col">Time Stamp</th>
                            </tr></thead>
                            <tbody>

                            <?php
                            $c=1;
                            foreach($logs as $log)
                            {
                            ?>
                                <tr>
                                    <td><?php echo $c;?></td>
                                    <td><?php echo $log['section'];?></td>
                                    <td><?php echo $log['action'];?></td>
                                    <td><?php echo $log['request'];?></td>
                                    <td><?php echo $log['ip_addr'];?></td>
                                    <td><?php echo $this->session->userdata('username'); ?></td>
                                    <td><?php echo $log['timestamp'];?></td>
                                </tr>
                            <?php $c=$c+1;} ?>
                            </tbody>
                        </table>
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
        <script>
            var a=document.getElementByClass('recent_application');
            var b=document.getElementByClass('verify_reject');
            function verify_reject()
            {
                a.style.display="none";
                b.style.display="table";
            }
            </script>
    
    </div>
    </body>
    <?php $this->load->view('layouts/footer_view'); ?>
</html>