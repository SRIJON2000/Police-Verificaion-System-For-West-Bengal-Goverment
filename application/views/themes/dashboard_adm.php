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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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

        a.notif {
  position: absolute;
  display: block;
  height: 50px;
  width: 50px;
  background: url('http://i.imgur.com/evpC48G.png');
  background-size: contain;
  text-decoration: none;
}
.num {
  position: absolute;
  right: 11px;
  top: 6px;
  color: #fff;
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
            <li id="sm_hide"><div class="text-white"><?php $num=$this->Application_model->count_seen_status($this->session->userdata('login_id')); if($num!=0) {?><a href="<?php echo base_url()?>Home/notification" class="notif"><span class="num"><?php echo $num;?></span></a><?php }?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logged in as:&nbsp
               <strong><?php echo $this->session->userdata('user_type')?></strong><strong>&nbsp(&nbsp<?php echo $this->session->userdata('district_name')?>&nbsp)</strong></div></li>
                    <li class="nav-item dropdown d-sm-block">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw text-white"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li id="sm_show"><div class="text-dark">Logged in as:
                                <strong><?php echo $this->session->userdata('user_type')." "?>(<?php echo $this->session->userdata('district_name')?>)</strong></div></li>
                            <hr id="sm_show">
                            <li><a class="dropdown-item" href="<?php echo base_url()?>Home/profile">Profile</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url()?>Home/activity_log">Activity Log</a></li>
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
                                    <a class="nav-link" href="<?php base_url()?>verify_reject">Scrutiny Application</a>
                                    
                                    <!-- <a class="nav-link" href="#">Send Reminder</a> -->
                                </nav>
                                <?php 
                                    }
                                ?>

                                <?php 
                                    if($this->session->userdata('user_type')=='OFFICER IN CHARGE')
                                    {
                                ?>
                                <nav class="sb-sidenav-menu-nested nav">
                                    
                                    <a class="nav-link" href="<?php base_url()?>addoffice">Add Office</a>
                                    <a class="nav-link" href="<?php base_url()?>statussearch">Check Status</a>
                                    
                                </nav>
                                <?php 
                                    }
                                ?>

                                <?php 
                                    if($this->session->userdata('user_type')=='ADDITIONAL DISTRICT MAGISTRATE')
                                    {
                                ?>
                                <nav class="sb-sidenav-menu-nested nav">
                                    
                                    <a class="nav-link" href="<?php base_url()?>addoffice">Add Office</a>
                                    <a class="nav-link" href="<?php base_url()?>statussearch">Check Status</a>
                                    <a class="nav-link" href="<?php base_url()?>all_verified_list">All verified applications</a>
                                    
                                </nav>
                                <?php 
                                    }
                                ?>

<?php 
                                if($this->session->userdata('user_type')=='SUPER ADMIN')
                                {
                                ?>
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php base_url()?>statussearch">Check Status</a>
                                    <a class="nav-link" href="<?php base_url()?>all_verified_list">All verified applications</a>
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
                                if($this->session->userdata('user_type')=='ADDITIONAL DISTRICT MAGISTRATE' || $this->session->userdata('user_type')=='SUPER ADMIN')
                                {
                            ?>
                                   
                                   <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url()?>Home/issues">Issues Lodges</a>
                                </nav>
                                    
                                    
                            <?php 
                                }
                            ?>

                            

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
                                    <a class="nav-link" href="<?php echo  base_url();?>/Home/alluser">All Users</a>
                                </nav>
                                
                            </div> 

                             <?php 
                                }
                            ?>


                        </div>
                    </div>
                    
                </nav>
            </div>
            <?php foreach($numbers as $d){?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-center">Dashboard</h1><br/>
                        <!-- <ol class="breadcrumb mb-4"> -->
                            <!-- <li class="breadcrumb-item active">Dashboard</li> -->
                        <!-- </ol> -->
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-4">
                                <button class="card bg-primary text-white mb-4 container-fluid h-100">
                                    <div class="card-body" style="font-size:20px"><strong>No. of pending enquiries in the lastday of previous quarter</strong></div>
                                    <div class="card-footer ">
                                        <p class="small text-white stretched-link" style="font-size:30px"><strong><?php echo $d['a'];?></strong></p>
                                        <!-- <div class="small text-white d-flex justify-content-between"><i class="fas fa-angle-right"></i></div>   -->
                                    </div>
                                </button>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <button  class="card bg-warning text-white mb-4 container-fluid h-100">
                                    <div class="card-body" style="font-size:20px"><strong>No. of request received during the quarter</strong></div>
                                    <div class="card-footer ">
                                          <p class="small text-white stretched-link text-center" style="font-size:30px" ><strong><?php echo $d['b'];?></strong></p>
                                        <!-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                                    </div>
                                </button>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <button class="card bg-success text-white mb-4 container-fluid h-100">
                                    <div class="card-body" style="font-size:20px"><strong>No. of cases pending as on the lastday of quarter</strong></div>
                                    <div class="card-footer ">
                                    <p class="small text-white stretched-link text-center" style="font-size:30px"><strong><?php echo $d['c'];?></strong></p>
                                        <!-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                                    </div>
                                </button>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <button class="card bg-danger text-white mb-4 container-fluid h-100">
                                    <div class="card-body" style="font-size:20px"><strong>No. of report pending more than 120 days</strong></div>
                                    <div class="card-footer">
                                        <p class="small text-white stretched-link text-center" style="font-size:30px"><strong><?php echo $d['d'];?></strong>
                                        <!-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                                    </div>
                                </button>
                            </div>
                        </div>
                      <?php  }?>
                        <?php 
                            if($this->session->userdata('user_type')=='DATA ENTRY OPERATOR')
                            {
                        ?>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <strong>Recent Applications</strong>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="recent_application">
                                    <thead>
                                        <tr>
                                            <th scope="col">Reference No.</th>
                                            <th scope="col">Candidate Name</th>
                                            <th scope="col">Office Name</th>
                                            <th scope="col">Application date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">(Verified/Unverified)</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                        foreach($applications as $application)
                                        {
                                    ?>
                                        <tr>
                                            <td><?php echo $application['ref_no_pk']?></td>
                                            <td><?php echo $application['candidate_f_name'].' '.$application['candidate_m_name'].' '.$application['candidate_l_name']?></td>
                                            <td><?php echo $application['employer_name'] ?></td>
                                            <td><?php echo $application['application_date'] ?></td>
                                            <?php if($application['ocvr_approval']==0){?>
                                                <td><div style="color:red"><strong>Pending For Approval</strong></div></td>
                                            <?php }else{?>
                                                <td><div style="color:green"><strong>Sent To IB</strong></div></td>
                                                <?php }?>
                                            <td><div style="color:<?php if($application['pvr_final_status_id_fk']==1){echo 'blue';}else if($application['pvr_final_status_id_fk']==2){echo 'green';}else{echo 'red';}?>"><strong><?php echo $application['final_status_name']?></strong></div></td>
                                            <td><a class="action" href="<?php echo base_url()?>Home/application_details/<?php echo $application['pvr_id_pk']?>"><strong><?php if($application['pvr_final_status_id_fk']==1 && $application['ocvr_approval']==1){echo 'Verify/Reject';}else{echo 'View Details';}?></strong></a>
                                            &nbsp;&nbsp;&nbsp;<a class="action" href="<?php base_url()?>status/<?php echo $application['pvr_id_pk'] ?>"><strong>Check Status</strong></a></td>
                                        </tr>
                                    <?php
                                            
                                        }
                                    ?>    
                                        
                                        
                                    </tbody>
                                    </table>
                        </div>
                        </div>
                        <?php
                            }
                        ?>
                    <?php 
                        if($this->session->userdata('user_type')=='OFFICER IN CHARGE')
                        {
                    ?>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <strong>Applications Pending For Approval</strong>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Reference No.</th>
                                            <th>Candidate Name</th>
                                            <th>Office Name</th>
                                            <th>Application date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Reference No.</th>
                                        <th>Candidate Name</th>
                                        <th>Office Name</th>
                                        <th>Application date</th>
                                        <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        foreach($applications as $application)
                                        {
                                            if($application['ocvr_approval']==0)
                                        {  
                                    ?>
                                        <tr>
                                            <td><?php echo $application['ref_no_pk']?></td>
                                            <td><?php echo $application['candidate_f_name'].' '.$application['candidate_m_name'].' '.$application['candidate_l_name']?></td>
                                            <td><?php echo $application['employer_name'] ?></td>
                                            <td><?php echo $application['application_date'] ?></td>
                                            <td><a class="action" href="<?php echo base_url()?>Home/application_details/<?php echo $application['pvr_id_pk']?>"><strong>View Details and Approve</strong></a><br><br><div style="color:red"><strong>Pending For Approval</strong></div>&nbsp;&nbsp;<br><a class="action" href="<?php base_url()?>status/<?php echo $application['pvr_id_pk'] ?>"><strong>Check Status</strong></a><br></td>
                                            
                                        </tr>
                                
                                    <?php
                                          } 
                                      }
                                    ?>   
                                    <?php
                                        foreach($applications as $application)
                                        {
                                            if($application['ocvr_approval']==1)
                                        {  
                                    ?>
                                        <tr>
                                            <td><?php echo $application['ref_no_pk']?></td>
                                            <td><?php echo $application['candidate_f_name'].' '.$application['candidate_m_name'].' '.$application['candidate_l_name']?></td>
                                            <td><?php echo $application['employer_name'] ?></td>
                                            <td><?php echo $application['application_date'] ?></td>
                                            <td><a class="action" href="<?php echo base_url()?>Home/application_details/<?php echo $application['pvr_id_pk']?>"><strong>View Details</strong>&nbsp;</a></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="action" href="<?php base_url()?>status/<?php echo $application['pvr_id_pk'] ?>"><strong>Check Status</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#9989;</div><br></td>
                                            
                                        </tr>
                                
                                    <?php
                                          } 
                                      }
                                    ?>     
                                    </tbody>
                                </table>
                            </div>
                        </div>  
                        <?php }?>



                        <?php 
                            if($this->session->userdata('user_type')=='ADDITIONAL DISTRICT MAGISTRATE')
                            {
                        ?>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <strong>Verified Applications to confirm</strong>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Reference No.</th>
                                            <th>Candidate Name</th>
                                            <th>Office Name</th>
                                            <th>Application date</th>
                                           
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Reference No.</th>
                                        <th>Candidate Name</th>
                                        <th>Office Name</th>
                                        <th>Application date</th>
                                        <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        foreach($applications as $application)
                                        {
                                           if($application['pvr_type_fk']!=4 && $application['pvr_final_status_id_fk']==2 && $application['adm_approval']==0)
                                           {
                                    ?>
                                        <tr>
                                            <td><?php echo $application['ref_no_pk']?></td>
                                            <td><?php echo $application['candidate_f_name'].' '.$application['candidate_m_name'].' '.$application['candidate_l_name']?></td>
                                            <td><?php echo $application['employer_name'] ?></td>
                                            <td><?php echo $application['application_date'] ?></td>
                                            <td><a class="action" href="<?php echo base_url()?>Home/application_details/<?php echo $application['pvr_id_pk']?>"><strong><?php if($application['pvr_final_status_id_fk']==2 && $application['adm_approval']==0){echo 'View Details / Verify';}else{echo 'View Details';}?></strong></a>
                                            <a class="action" href="<?php base_url()?>status/<?php echo $application['pvr_id_pk'] ?>"><strong>Check Status</strong></a></td>
                                        </tr>
                                    <?php
                                           }  
                                        }
                                    ?>    
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php
                            }
                        ?>

                        <?php 
                            if($this->session->userdata('user_type')=='SUPER ADMIN')
                            {
                        ?>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <strong>All Applications</strong>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="recent_application">
                                    <thead>
                                        <tr>
                                            <th scope="col">Reference No.</th>
                                            <th scope="col">Candidate Name</th>
                                            <th scope="col">Office Name</th>
                                            <th scope="col">Application date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">(Verified/Unverified)</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                        foreach($applications as $application)
                                        {
                                    ?>
                                        <tr>
                                            <td><?php echo $application['ref_no_pk']?></td>
                                            <td><?php echo $application['candidate_f_name'].' '.$application['candidate_m_name'].' '.$application['candidate_l_name']?></td>
                                            <td><?php echo $application['employer_name'] ?></td>
                                            <td><?php echo $application['application_date'] ?></td>
                                            <?php if($application['ocvr_approval']==0){?>
                                                <td><div style="color:red"><strong>Pending For Approval</strong></div></td>
                                            <?php }else{?>
                                                <td><div style="color:green"><strong>Sent To IB</strong></div></td>
                                                <?php }?>
                                            <td><div style="color:<?php if($application['pvr_final_status_id_fk']==1){echo 'blue';}else if($application['pvr_final_status_id_fk']==2){echo 'green';}else{echo 'red';}?>"><strong><?php echo $application['final_status_name']?></strong></div></td>
                                            <td><a class="action" href="<?php echo base_url()?>Home/application_details/<?php echo $application['pvr_id_pk']?>"><strong>View Details</strong></a>
                                            &nbsp;&nbsp;&nbsp;<a class="action" href="<?php base_url()?>status/<?php echo $application['pvr_id_pk'] ?>"><strong>Check Status</strong></a></td>
                                        </tr>
                                    <?php
                                            
                                        }
                                    
                                    ?>    
                                        
                                        
                                    </tbody>
                                    </table>
                        </div>
                        </div>
                        <?php          
                         }          
                        ?>


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
    <script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script> 
    </div>
    </body>
    <?php $this->load->view('layouts/footer_view'); ?>
</html>








