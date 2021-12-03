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
            <a class="navbar-brand ps-3">Operations</a>
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
                            <li><a class="dropdown-item" href="#!">Settings</a></li>
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
            <?php foreach($numbers as $d){?>
            <div id="layoutSidenav_content">
                <main>
                <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>CONTACT  <b>US</b></h1> 
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?><?php echo $this->cache->get('User_type'.$var)['user_privilege'][0]['link']?>">Home</a></li>
            <li class="breadcrumb-item active">Contact Us</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
  <!-- /.login-logo -->
  <div class="row">
    <div class="col-md-8">
      <section class='content'>
          <div class='container-fluid'>
            <div class='row'>
              <div class="col-md-12" id='refresh'>
                <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body" >
                    <div class="row">
                        <div class="col-md-12 d-flex">
                            <div class="card">
                                <div class="card-body" style="text-align:center; background:#CDE2FF;"  >
                                    <span class="fas fa-info fa-4x circle-icon" ></span>
                                    <br></br>
                                    <h2><b>About MPR</b></h2>
                                    <h5><i>MPR is a monthly progress report web app designed by a team under NIC(National Informatics Centre) which 
                                        eases the manual work of records of schemes through out the district of howrah and boils down to a simple web app.
                                    </i></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 d-flex">
                            <div class="card">
                                <div class="card-body" style="text-align:center; background:#CDE2FF;"  >
                                    <span class="fas fa-envelope fa-4x circle-icon" ></span>
                                    <br></br>
                                    <h2><b>Email us</b></h2>
                                    <h5><a href="mailto:abc@gmail.com"><i>abc[at]gmail[dot]com</i></a></h5>
                                    
                                    <h5><b><u>Necessary Instruction</u></b><h5>
                                    <h6><i>Please mention MPR-Issues in the subject of your email for easier identification</i></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                        <div class="card">
                                <div class="card-body" style="text-align:center; background:#CDE2FF;" >
                                    <span class="fas fa-phone fa-4x circle-icon" ></span>
                                    <br></br>
                                    <h2><b>Call us</b></h2>
                                    <h5><a href="tel:+919876543210"><i>+91-9876543210</i></a></h5>
                                    
                                    <h5><b><u>Necessary Instruction</u></b><h5>
                                    <h6><i>Available on all working days from 10am to 5pm.Saturday and Sunday are holidays.</i></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                        <div class="card">
                                <div class="card-body"  style="text-align:center; background:#CDE2FF;">
                                    <span class="fas fa-map-marker fa-4x circle-icon" ></span>
                                    <br></br>
                                    <h2><b>Location</b></h2>
                                    <h5><a href="http://maps.google.com/?q=123, Rishi Bankim, Chandra Rd, Shree Market, Howrah Maidan, Howrah, West Bengal 711101" target="_blank"><i>123, Rishi Bankim, Chandra Rd, Shree Market, Howrah Maidan, Howrah, West Bengal 711101</i></a></h5>
                                    
                                    <h5><b><u>Necessary Instruction</u></b><h5>
                                    <h6><i>Available on all working days from 10am to 5pm.Saturday and Sunday are holidays.</i></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    
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
    <div class="col-md-4">
      <div class="card card-primary card-outline mx-auto">
        <div class="card-body login-card-body" Style="background:#CDE2FF;">
          <h2><strong>Facing Issues?  <br>Write us here:</br></strong></h2>
          <?php echo form_open('contact/send','id="form"');?>

            <div class="form-group">
                <input type="text" class="form-control" name = "name" id="name" placeholder="Enter your name" style="border-radius:20px;">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name = "email" id="email" placeholder="Enter your email" style="border-radius:20px;">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label>Rate Our App:</label>
                    </div>
                    <div class="col-md-8">
                        <div class="card"style="border-radius:20px;" >
                        <div class="rating mx-auto" style="font-size:15px;">
                            <input id="star5" name="star" type="radio" value="5" class="radio-btn hide" />
                            <label for="star5" >☆</label>
                            <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
                            <label for="star4" >☆</label>
                            <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
                            <label for="star3" >☆</label>
                            <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
                            <label for="star2" >☆</label>
                            <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
                            <label for="star1" >☆</label>
                            <div class="clear"></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control" name = "text" id="text" placeholder="Describe your issues" style="border-radius:20px;"></textarea>
            </div>
            <div id="errors" style="color:red;"></div>
                <div id='err'>
                <button type='submit' class='btn btn-primary' name='form_sub' id='form_sub' form="form" style="border-radius:20px; display: block; margin-left: auto;  margin-right: auto; padding-right:40px; padding-left:40px;" value="Submit">Send</button>
                </div>
            </div>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
  </div>
</div>
</section>
</div>


<style>
    .circle-icon {
    background: #5FA0F9;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    text-align: center;
    line-height: 100px;
    vertical-align: middle;
}
 .txt-center {
      text-align: center;
    }
    .hide {
      display: none;
    }

    .clear {
      float: none;
      clear: both;
    }

.rating {
        width: 90px;
        unicode-bidi: bidi-override;
        direction: rtl;
        text-align: center;
        position: relative;
    }

    .rating > label {
        float: right;
        display: inline;
        padding: 0;
        margin: 0;
        position: relative;
        width: 1.1em;
        cursor: pointer;
        color: #000;
    }

    .rating > label:hover,
    .rating > label:hover ~ label,
    .rating > input.radio-btn:checked ~ label {
        color: transparent;
    }

    .rating > label:hover:before,
    .rating > label:hover ~ label:before,
    .rating > input.radio-btn:checked ~ label:before,
    .rating > input.radio-btn:checked ~ label:before {
        content: "\2605";
        position: absolute;
        left: 0;
        color: #FF3D3D;
    }
</style>

<script src="<?php echo base_url();?>css/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo base_url();?>js/notify.js"></script>
<script type="text/javascript" >
//form submit for issues---------------------------------------------------------------------------------
var csrf_token='';
$("#form").on("submit", function (event) {
  event.preventDefault();
  if(csrf_token==''){
    csrf_token='<?php echo $this->security->get_csrf_hash(); ?>';
  }
  $.ajax({
    url: $('#form').attr('action'),
    type: "POST",
    data: $('#form').serialize()+"&<?php echo $this->security->get_csrf_token_name(); ?>="+csrf_token,
    //dataType: 'html',
    error: function(){
			console.log("Form cannot be submitted...");
		},
    cache: false,
    success: function(result){
      var k=JSON.parse(result);
      if (k.csrf_token){
        csrf_token=k.csrf_token;
      }
      if(k.res==0){
        $('#errors').html(k.errors);
        console.log("error");
      }else{ 
        $('#errors').html("");
        $("form")[0].reset();
        $("#form_sub").notify("Value accepted",{position:"right", className: 'success'});
        console.log("submit");
      }
    }
  });
});
</script>                   
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














