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
            <a class="navbar-brand ps-3">Menu</a>
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
                            <!-- <li><a class="dropdown-item" href="#!">Settings</a></li> -->
                            <li><a class="dropdown-item" href="<?php echo base_url()?>Home/dashboard_adm">Dashboard</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url()?>Home/profile">Profile</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url()?>Home/activity_log">Activity Log</a></li>
                            
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
                                    
                                    <!-- <a class="nav-link" href="#">Send Reminder</a> -->
                                </nav>
                                <?php 
                                    }
                                ?>
                                <?php 
                                    if($this->session->userdata('user_type')=='SUPER ADMIN')
                                    {
                                ?>
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php base_url()?>dashboard_adm">Dashboard</a>
                                    <a class="nav-link" href="<?php base_url()?>statussearch">Check Status</a>
                                    <a class="nav-link" href="<?php base_url()?>all_verified_list">All verified applications</a>
                                    
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
                                    <a class="nav-link" href="<?php base_url()?>dashboard_adm">Dashboard</a>
                                    <a class="nav-link" href="<?php base_url()?>addoffice">Add Office</a>
                                    <a class="nav-link" href="<?php base_url()?>statussearch">Check Status</a>
                                    <!-- <a class="nav-link" href="#">Update Application</a> -->
                                    <!-- <a class="nav-link" href="#">Send Reminder</a> -->
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
                                    <!-- <a class="nav-link" href="#">Letter To SPDIB</a> -->
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
                            <?php 
                                if($this->session->userdata('user_type')=='SUPER ADMIN')
                                {
                            ?>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                User
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                
                                <nav class="sb-sidenav-menu-nested nav">
                                    
                                    <a class="nav-link" href="<?php echo  base_url();?>/Home/adduser">Add User</a>
                                    <a class="nav-link" href="#">Update User</a>
                                </nav>
                                
                            </div> 

                             <?php 
                                }
                            ?>
                        </div>
                    </div>
                    
                </nav>
            </div>
            
            <div id="layoutSidenav_content">
                <main>
                <div class="row mt-2">
                    <div class="col-md-12">
                    <section class='content'>
                        <div class='container-fluid'>
                            <div class='row'>

                            <div class="col-md-12">
                                <div class="card">
                                <div class="card-header bg-info">
                                    <h3 class="card-title">Received Notifications</strong></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body" id="refresh">
                                    <table id="example1" class="table table-bordered table-striped table-hover equal-width">
                                    <thead class="bg-warning">
                                    <tr>
                                        <th>Sl. No.</th>
                                        <th>Title</th>
                                        <th>Notification Body</th>
                                        <th>Date & Time</th>
                                        <th>Action</th> 
                                    </tr>
                                    </thead>
                                     <tbody>
                                    <?php 
                                        $num=$this->session->userdata('new_num');
                                        $i=1;
                                        foreach($notifications as $notification){?>
                                            <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $notification['notification_text']; ?></td>
                                            <td><?php echo $notification['notification_message']; ?>&nbsp;<?php if($num>0){?><span style="font-size:15px;color:red;"><b>New</b></span><?php }?></td>
                                            <td><?php echo $notification['time']; ?></td>
                                            <td><a class="action" href="<?php echo base_url()?>Home/delete_notification/<?php echo $notification['notification_seq_id_pk']?>"><b>Delete</b></a></td>
    
                                        </tr>
                                           <?php $i++;
                                           $num--;
                                        }
                                        $this->session->unset_userdata('new_num');
                                    ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <!-- nothing for footer now -->
                                    </tr>
                                    </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                </div>
                            </div>
                            
                            <!-- right column -->
                            <div class='col-md-1'>
                            

                            </div>
                            <!--/.col (right) -->
                            </div>
                            <!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </section>
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








