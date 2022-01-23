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
        <script src="https://kit.fontawesome.com/132bfff08e.js" crossorigin="anonymous"></script>
        <title icon="">Contact Us</title>
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
        
        
            <div id="layoutSidenav_content">
                <main>
                <div class="content-wrapper m-3">
  <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                    <div class="row mb-2">
                        
                        
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
                                                        <div class="col-md-12 d-flex m-1">
                                                            <div class="card">
                                                                <div class="card-body" style="text-align:center; background:#CDE2FF;"  >
                                                                    <i class="fas fa-info-circle fa-5x" style="color:#1764c2;"></i>
                                                                    <br></br>
                                                                    <h2><b>About PVR</b></h2>
                                                                    <h5><i>PVR is a Police Verification Report web app designed by a team under NIC(National Informatics Centre) which 
                                                                        eases the manual work of records of schemes through out the district of howrah and boils down to a simple web app.
                                                                    </i></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 d-flex mt-1">
                                                            <div class="card">
                                                                <div class="card-body" style="text-align:center; background:#CDE2FF;"  >
                                                                    <i class="fas fa-envelope fa-5x" style="color:#1764c2;"></i>
                                                                    <br></br>
                                                                    <h2><b>Email us</b></h2>
                                                                    <h5><a href="mailto:abc@gmail.com"><i>abc[at]gmail[dot]com</i></a></h5>
                                                                    
                                                                    <h5><b><u>Necessary Instruction</u></b><h5>
                                                                    <h6><i>Please mention PVR-Issues in the subject of your email for easier identification</i></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 d-flex mt-1">
                                                        <div class="card">
                                                                <div class="card-body" style="text-align:center; background:#CDE2FF;" >
                                                                    <i class="fas fa-phone-square fa-5x" style="color:#1764c2;"></i>
                                                                    <br></br>
                                                                    <h2><b>Call us</b></h2>
                                                                    <h5><a href="tel:+919876543210"><i>+91-9876543210</i></a></h5>
                                                                    
                                                                    <h5><b><u>Necessary Instruction</u></b><h5>
                                                                    <h6><i>Available on all working days from 10am to 5pm.Saturday and Sunday are holidays.</i></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 d-flex mt-1">
                                                        <div class="card">
                                                                <div class="card-body"  style="text-align:center; background:#CDE2FF;">
                                                                    <i class="fas fa-map-marked-alt fa-5x" style="color:#1764c2;"></i>
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
                                        <div class="card-body login-card-body p-3" Style="background:#CDE2FF;">
                                        <h2 class="p-3 text-center"><strong>Facing Issues?<br>Write us here:</br></strong></h2>
                                        <?php echo form_open('Home/send_issue','id="form"');?>

                                            <div class="form-group m-2">
                                                <input type="text" class="form-control" name = "name" id="name" placeholder="Enter your name" style="border-radius:20px;">
                                            </div>
                                            <div class="form-group m-2">
                                                <input type="email" class="form-control" name = "email" id="email" placeholder="Enter your email" style="border-radius:20px;">
                                            </div>
                                            <!--  -->
                                            <div class="form-group  m-2">
                                                <textarea class="form-control" name = "text" id="text" rows="6" placeholder="Describe your issues" style="border-radius:20px;"></textarea>
                                            </div>
                                            <div id='err' class="m-2">
                                                <button type='submit' class='btn btn-primary' name='form_sub' id='form_sub' form="form" style="border-radius:20px; display: block; margin-left: auto;  margin-right: auto; padding-right:40px; padding-left:40px;" value="Submit">Send</button>
                                            </div>
                                            </div>
                                        </div>
                                        <!-- /.login-card-body -->
                                        <?php echo $this->session->userdata('fail'); $this->session->unset_userdata('fail');?>
                                        <?php echo $this->session->userdata('success'); $this->session->unset_userdata('success');?>
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














