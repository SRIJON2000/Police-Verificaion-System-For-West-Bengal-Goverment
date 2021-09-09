<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layouts/header_view');
$this->load->library('session');
?>
<!DOCTYPE html>
<html>
<head>

	<base href="http://localhost/recruitment/admin/" />
 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <title>Application Details</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/themes_css3/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css"> 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/themes_css3/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/themes_css3/adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Extra CSS -->
  <!-- jQuery 3 -->
<script src="themes/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/themes_css3/adminlte/training_partner/style.css">
    <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/themes_css3/adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/themes_css3/adminlte/dist/css/skins/_all-skins.min.css">


  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
  
  
  
</head>
<!--<body class="hold-transition skin-red-light sidebar-mini">-->
<body>
<!-- Site wrapper -->


<style>
/*table {border: 1px solid;}
tr td,tr th{border: 1px solid;}*/

.edu_table tr td:not(:nth-child(1)),.edu_table tr th {
    text-align: center;
}
.edu_table tr td:nth-child(1){font-weight: bolder;}
@media print {
         .hide_from_print {display:none;}
      }
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Applicant Details</h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Dashboard</li>
            
            <li class="active">Applicant Details</li>
        </ol>
    </section> 
    <section class="content print_view">
    	<div class="box box-primary">
			<div class="box-header with-border">
				<h3 >Applicant Details <a href="<?php echo base_url()?>Home/dashboard_adm" class="btn btn-primary" style="float: right;">Back</a></h3>
			</div>      
        	<div class="box-body">
                <div class="panel panel-default">
                  
                  <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item active">
                                        Basic Details
                                    </li>
                                     <li class="list-group-item">
                                        <b>Applicant ID: </b>WB20VMY5889624                                    </li>
                                     <li class="list-group-item">
                                        <b>Position Applied For</b> :
                                                                                     
                                                <b>&nbsp;1.&nbsp;</b>Social Worker                                        
                                                                            </li>
                                   
                                    <li class="list-group-item">
                                        <b>Applicant Name: </b>Koustabh  Biswas                                    </li>
                                    <li class="list-group-item">
                                        <b>Gurdian Name: </b>Dhiman Chandra Biswas                                    </li>
                                    <li class="list-group-item">
                                        <b>Category: </b>General                                    </li>
                                    <li class="list-group-item">
                                        <b>Religion: </b>HINDU                                    </li>
                                    <li class="list-group-item">
                                        <b>Date of Birth: </b>23/09/1992                                    </li>
                                     <li class="list-group-item">
                                        <b>Age: </b>27                                    </li>
                                     <li class="list-group-item">
                                        <b>Pan Number: </b>AWSPV1232D                                    </li>
                                    
                                </ul>
                                <ul class="list-group">
                                    <li class="list-group-item active">
                                        Present Address
                                    </li>
                                    <li class="list-group-item">
                                        <b>House No:</b> 21/1                                    </li>
                                    <li class="list-group-item">
                                        <b>Street Name:</b> Sahid Sunil Sen Sarani                                    </li>
                                    <li class="list-group-item">
                                        <b>Post Office:</b> Dum Dum                                    </li>
                                    <li class="list-group-item">
                                        <b>Police Station :</b> Baguihati                                    </li>
                                    <li class="list-group-item">
                                        <b>State:</b> WEST BENGAL                                    </li>
                                    <li class="list-group-item">
                                        <b>District:</b> KOLKATA                                    </li>
                                    <li class="list-group-item">
                                        <b>Subdiv:</b> KOLKATA                                    </li>
                                    <li class="list-group-item">
                                        <b>Block / Municipality:</b> KOLKATA CORPORATION                                    </li>
                                    <li class="list-group-item">
                                        <b>Pincode:</b> 700028                                    </li>
                                 
                                </ul>
                                <!-- newly added by Koustabh 12/09/2018 starts -->
                                
                               
                                 
                                
                               
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item active">
                                        Contact Details
                                    </li>
                                    <li class="list-group-item">
                                        <b><i class="fa fa-mobile"></i> Primary Contact No: </b>9830778402                                    </li>
                                    <li class="list-group-item">
                                        <b><i class="fa fa-phone"></i> Secondary Contact No: </b>9830778402                                    </li>
                                     
                                    <li class="list-group-item hide_in_print">
                                        <b><i class="fa fa-at"></i> Email ID: </b><a href="mailto:biswas.koustabh@gmail.com">biswas.koustabh@gmail.com</a>
                                    </li>
                                     
                                    
                                </ul>
                                <ul class="list-group">
                                    <li class="list-group-item active">
                                        Permanent Address
                                    </li>
                                    <li class="list-group-item">
                                        <b>House No:</b> 21/1                                    </li>
                                    <li class="list-group-item">
                                        <b>Street Name:</b> Sahid Sunil Sen Sarani                                    </li>
                                    <li class="list-group-item">
                                        <b>Post Office:</b> Dum Dum                                    </li>
                                    <li class="list-group-item">
                                        <b>Police Station :</b> Baguihati                                    </li>
                                    <li class="list-group-item">
                                        <b>State:</b> WEST BENGAL                                    </li>
                                    <li class="list-group-item">
                                        <b>District:</b> KOLKATA                                    </li>
                                    <li class="list-group-item">
                                        <b>Subdiv:</b> KOLKATA                                    </li>
                                    <li class="list-group-item">
                                        <b>Block / Municipality:</b> KOLKATA CORPORATION                                    </li>
                                    <li class="list-group-item">
                                        <b>Pincode:</b> 700028                                    </li>
                                 
                                </ul>
                                
                                
                            </div>
                             
                        </div>
                         <div class="col-md-12">
                            <ul class="list-group">
                                <li class="list-group-item active">Experience</li>
                                <li class="list-group-item">
                                    <table class="table  table-bordered" >
                                        <thead>
                                            <tr>
                                                <th>Name of Organization</th>
                                                <th style="width: 250px">Designation</th>
                                                <th>Date of Joining </th>
                                                <th>Date of Resigning</th>
                                                <th>Current Organization</th>
                                            </tr>
                                        </thead>
                                        <tbody  >
                                                                                          <tr>
                                                <td>NIC</td>
                                                <td>Developer</td>
                                                <td>02/06/2018</td>
                                                <td>01/01/1970</td>
                                                <td> YES</td>
                                            </tr>
                                                                                   </tbody>
                                    </table>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <ul class="list-group">
                                <li class="list-group-item active">Educational Qualification</li>
                                <li class="list-group-item">
                                    <table class="table  table-bordered edu_table" >
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Stream</th>
                                                <th>College / University / Board</th>
                                                <th>CGPA</th>
                                                <th>Year of Passing</th>
                                            </tr>
                                        </thead>
                                        <tbody  >
                                            
                                            <tr>
                                                <td>Post Graduation</td>
                                                <td>Masters in Psychology</td>
                                                <td>Meghnad Saha College</td>
                                                <td>6.00</td>
                                                <td>2019</td>
                                            </tr>
                                            <tr>
                                                <td>Graduation</td>
                                                <td>B.Tech</td>
                                                <td>Meghnad Saha College</td>
                                                <td>6.00</td>
                                                <td>2017</td>
                                            </tr>
                                            <tr>
                                                <td>12th / Higher Secondary</td>
                                                <td>Science</td>
                                                <td>WBCHSE</td>
                                                <td>75</td>
                                                <td>2013</td>
                                            </tr>
                                            <tr>
                                                <td>10th / Secondary</td>
                                                <td>Science</td>
                                                <td>WBBSE</td>
                                                <td>80</td>
                                                <td>2011</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                             <div class="col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item active">Photo</li>
                                    <li class="list-group-item">
                                        <img src="http://localhost/recruitment/files/public/spm/photo/WB20VMY5889624.jpg" class="img-responsive">
                                    </li>
                                </ul>
                            </div>
                             <div class="col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item active">Signature</li>
                                    <li class="list-group-item">
                                        <img src="http://localhost/recruitment/files/public/spm/signature/WB20VMY5889624.jpg" class="img-responsive">
                                    </li>
                                </ul>
                            </div>
                         </div>
                         <input type="hidden" name="" id="spm_id" value="180">
                    	<button type="button" class="btn btn-primary " id="intimation_mail"    style="float: right;">Send Intimation Mail</button>
                  </div>
                </div>
            </div>
            <div class="box-footer"></div>
		</div>
    </section>
</div>
  <div class="modal fade" id="intimation_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> </h4>
        </div>
        <div class="modal-body" id="intimation_body">
            <div id="intimation_first_body">
            <input type="hidden" name="" id="spm_modal_id" value="">
          <p><b>Are you sure to send intimation mail ?</b></p>
          <div class="loader_con" style="display: none;"><div class="loader"></div>Loading ...</div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="intimation_modal_btn" >Yes</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

      

  

</div>
<!-- ./wrapper -->
<!-- Bootstrap 3.3.7 -->
<script src="themes/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- SlimScroll -->
 <script src="themes/adminlte//bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- Extra JS -->
<script src="themes/adminlte/spm/spm.js"></script>
 
<!-- FastClick -->
<script src="themes/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="themes/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->


    <script>
    /*$(function() {
        $('#course1').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%',
			placeholder: 'Please select job role'
        });
    });*/
	</script>



</body>
</html>
