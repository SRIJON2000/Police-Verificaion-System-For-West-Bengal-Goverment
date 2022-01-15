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
            <!-- <a class="navbar-brand ps-3">Operations</a> -->
            <!-- Sidebar Toggle--> 
            <!-- <div class="d-inline"><button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button></div> -->
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
                            <li><a class="dropdown-item" href="<?php echo base_url()?>Home/dashboard_adm">Dashboard</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url()?>Home/activity_log">Activity Log</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url()?>Home/notification">Notification&nbsp;<?php $num=$this->Application_model->count_seen_status($this->session->userdata('login_id')); if($num!=0) {?><i class="fa fa-bell" style="font-size:17px;color:red"></i><b>(<?php echo $num;?>+)</b><?php }?></a></li>
                            <li><hr class="dropdown-divider" /></li>
                            
                            <li><a class="dropdown-item" href="<?php echo base_url()?>Home/logout">Logout</a></li>
                        </ul>
                    </li>
            </ul></div>
        </nav>
        <!-- Main content -->
        <br><h1 style="text-align:center;"><b>Profile Information</b></h1>
  <section class="content pb-5">
    <div class="container-fluid">
          <!-- Profile Image -->
          <div class="card card-primary card-outline mx-auto" style="max-width: 700px">
            <div class="card-body box-profile mx4">
              <div class="text-center">
                
              </div>

              <h3 class="profile-username text-center"><b></b></h3>

              <p class="text-muted text-center"></p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <div class="d-flex justify-content-between"> 
                    <div><b>Name </b></div>
                    <div ><a class="float-right text-dark text-dark" style="text-decoration:none;"><?php echo $this->session->userdata('user_type')?></a>
                  </div></div>
                </li>
                <li class="list-group-item">
                <div class="d-flex justify-content-between">
                  <div><b>Username</b></div>
                  <div> <a class="float-right text-dark" style="text-decoration:none;"><?php echo $this->session->userdata('username')?></a>
                  </div></div>
                </li>
                <li class="list-group-item">
                <div class="d-flex justify-content-between">
                <div><b>Office</b></div>
                <div> <a class="float-right text-dark" style="text-decoration:none;"><?php echo $this->session->userdata('office_name')?></a>
                </div></div>
                </li>
                <li class="list-group-item">
                <div class="d-flex justify-content-between">
                <div><b>Department</b></div>
                <div> <a class="float-right text-dark" style="text-decoration:none;"><?php echo $this->session->userdata('department')?></a>
                </div></div>
                </li>
                <li class="list-group-item">
                <div class="d-flex justify-content-between">
                <div><b>Designation</b></div>
                <div> <a class="float-right text-dark" style="text-decoration:none;"><?php echo $this->session->userdata('user_type')?></a>
                </div></div>
                </li>
                <li class="list-group-item">
                <div class="d-flex justify-content-between">
                <div><b>Email</b></div><div> <a class="float-right text-dark" style="text-decoration:none;"><?php echo $this->session->userdata('username')?></a>
                </div></div>
                </li>
                <li class="list-group-item">
                <div class="d-flex justify-content-between">
                <div><b>Phone</b></div><div> <a class="float-right text-dark" style="text-decoration:none;"></a>
                </div></div>
                </li>
                <li class="list-group-item">
                <div class="d-flex justify-content-between">
                <div><b>District</b></div><div> <a class="float-right text-dark" style="text-decoration:none;"><?php echo $this->session->userdata('district_name')?></a>
                </div>
                </li>
                
              </ul>
              
              <!-- <div class="row">
                <div class="col-md-6">
                <a href="<?php //echo base_url();?>Summary/edit_profile" class="btn btn-block btn-outline-primary mx-auto" style="max-width: 400px"><b>Edit Profile</b></a>
                </div>
                <div class="col-md-6">
                <a href="<?php //echo base_url();?>Summary/password_change_within" class="btn btn-block btn-outline-primary mx-auto" style="max-width: 400px"><b>Change Password</b></a>
                </div>
              </div> -->
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        
    </div>
  </section>
</div>

	
<script>
$(document).on('mouseenter','#zoom', function (event) {
  $(this).animate({width:'400px',height:'400px'});
	$(this).css("opacity","1");
  }).on('mouseleave','#zoom',  function(){
    $(this).animate({width:'150px',height:'150px'});
		$(this).css("opacity","1");
  });
</script>


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








