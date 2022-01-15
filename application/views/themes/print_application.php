<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->library('session');
?>
<!DOCTYPE html>
<html>
<head>

	<base href="http://localhost/recruitment/admin/" />
    <title>Application Details</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
 
  <!-- <title>Application Details</title> -->
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
  
<style>
.button {
  background-color: transparent;
  border: 0;
  color: #fefbef;
  font-family: 'Open Sans', sans-serif;
  font-weight: 600;
  line-height: 1;
  margin-top: 1.5rem;
  width: 100%; /* Large, mobile-friendly touch target */

  /* Media Queries */
  @media (min-width: 37.5em) {
    width: auto; /* Smaller buttons on larger screens */
    padding-left: 2rem;
    padding-right: 2rem;
    margin-left: 1rem;
    margin-right: 1rem;
  }
}

.label{
    background-color: #669cf2;
    color: #fff;
    padding: 1%;
    border-radius: 10px;
    width: 500px;
}

tr{
    width:100%;
}

th,td{
    padding-left:170px;
}
</style>  
  
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
        <h1>Applicantion Details</h1>
        <!-- <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Dashboard</td>
            
            <li class="active">Applicant Details</td>
        </ol> -->
    </section> 
    <section class="content print_view">
    	<div class="box box-primary">
			<!-- <div class="box-header with-border">
				<h3 ><a href="<?php //echo base_url()?>Home/dashboard_adm" class="btn btn-primary" style="float: right;">Back</a></h3>
			</div>    -->
            <?php foreach($details1 as $detail)
         {
            ?>   
        	<div class="box-body">
                <div class="panel panel-default">
                  
                  <div class="panel-body">
                                <table >
                                    <br><div class="label">
                                        Basic Details
                                    </div class="label">
                                     <tr>
                                     <th>
                                        <b>Receipt No: </b>
                                    </th>
                                    <td><?php echo $detail['receipt_no'] ?></td>
                                     </tr>
                                     <tr>
                                     <th>
                                        <b>Receipt Date</b> :
                                        </th>                                            
                                            <b>&nbsp;&nbsp;</b><td><?php echo $detail['receipt_date']?>                                       
                                                                            </td></tr><tr>

                                        <th>
                                            <b>Reference No: </b></th>
                                            <td><?php echo $detail['ref_no_pk'] ?></td></tr>
                                    <tr>
                                        <th>
                                            <b>Refrence Date</b> :
                                            <b>&nbsp;&nbsp;</b></th>
                                            <td><?php echo $detail['ref_date']?>                                       
                                                                            </td></tr>
                                                                            <tr>
                                    <th>
                                            <b>Memo No: </b></th>
                                            <td><?php echo $detail['memo_no'] ?></td></tr>
                                            <tr>
                                    <th>
                                        <b>Candidate Name: </b></th><td><?php echo $detail['candidate_f_name'].' '.$detail['candidate_m_name'].' '.$detail['candidate_l_name'] ?></td>
                                        </tr><tr> 
                                    <th>
                                        <b>Caste: </b></th><td><?php echo $detail['caste_name'] ?></td></tr>
                                        <tr>
                                    <th>
                                        <b>Gender: </b></th><td><?php echo $detail['gender_name'] ?></td>
                                        </tr><tr><th>
                                        <b>Aadhaar No: </b></th><td><?php echo $detail['candidate_aadhaar_no'] ?></td>
                                        </tr><tr><th>
                                        <b>VR Type: </b></th><td><?php echo $detail['df_type'] ?></td>
                                        </tr><tr><th>
                                        <b>VR Sending to : </b></th><td><?php echo $detail['sent_to'] ?></td></tr>
                                </table>
                                
                                
                                

                                <table>
                                    <br><div class="label">
                                        Candidate Present Address
                                    </div class="label">
                                    <tr><th>
                                        <b>House No:</b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail['candidate_house_no1'] ?></td>
                                    </tr><tr><th>
                                        <b>Street Name :</b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail['candidate_street1'] ?></td>
                                        </tr><tr><th>
                                        <b>City :</b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail['candidate_city1'] ?></td>
                                        </tr><tr><th>
                                        <b>Landmark :</b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail['candidate_landmark1'] ?></td>
                                        </tr><tr><th>
                                        <b>Post Office:</b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail['candidate_post_office1'] ?></td>
                                        </tr><tr><th>
                                        <b>Police Station :</b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail['ps_name'] ?></td>
                                        </tr><tr><th>
                                        <b>State:</b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail['state_name'] ?></td>
                                        </tr><tr><th>
                                        <b>District:</b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail['district_name'] ?></td>
                                        </tr><tr><th>
                                        <b>Pin Code:</b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail['pincode_no'] ?></td>
                                        </tr> 
                                 
                                </table>
                                <!-- newly added by Koustabh 12/09/2018 starts -->
                                
                               
                                 
                                <table>
                                    <br>
                                    <div class="label">
                                        Office Details
                                    </div class="label">
                                    <tr>
                                        <th>
                                        <b>Office Name: </b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail['employer_name'] ?></td>
                                        </tr><tr><th>
                                        <b>Primary Address:</b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail['employer_add1'] ?></td>
                                        </tr><tr><th>
                                        <b>Secondary Address: </b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail['employer_add2'] ?></td>
                                    </tr>
                                
                                     
                                    
                                </table>
                                <table>
                                    <br><div class="label">
                                        Candidate Permanent Address
                                    </div class="label">
                                    <?php }foreach($details2 as $detail2)
                                    {
                                        ?>
                                    <tr><th>
                                        <b>House No:</b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail2['candidate_house_no2'] ?></td>
                                    </tr><tr><th>
                                        <b>Street Name :</b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail2['candidate_street2'] ?></td>
                                        </tr><tr><th>
                                        <b>City :</b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail2['candidate_city2'] ?></td>
                                        </tr><tr><th>
                                        <b>Landmark :</b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail2['candidate_landmark2'] ?></td>
                                        </tr><tr><th>
                                        <b>Post Office:</b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail2['candidate_post_office1'] ?></td>
                                        </tr><tr><th>
                                        <b>Police Station :</b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail2['ps_name'] ?></td>
                                        </tr><tr><th>
                                        <b>State:</b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail2['state_name'] ?></td>
                                        </tr><tr><th>
                                        <b>District:</b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail2['district_name'] ?></td>
                                        </tr><tr><th>
                                        <b>Pin Code:</b><b>&nbsp;&nbsp;</b></th><td><?php echo $detail2['pincode_no'] ?></td>
                                        </tr>
                                 <?php 
                                }
                                 ?>
                                 <br><br>
                                </table>
            </div>
<div class="text-centre d-flex justify-content-center">
                  <a href="<?php echo base_url()?>Generate_pdf/application/<?php echo $detail['pvr_id_pk']?>" 
                      class="btn bg-secondary text-light m-auto" style="text-decoration:none; color:white;">Print</a></div><br><br>
<!-- ./wrapper -->
<!-- Bootstrap 3.3.7 -->
<script src="themes/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- SlimScroll -->
 <script src="themes/adminlte//bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- Extra JS -->
<script src="themes/adminlte/spm/spm.js"></script>
 
<!-- FastClick -->
<script src="themes/adminlte/bower_components/fastclick/tdb/fastclick.js"></script>
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
<script>
    function approve()
    {
        document.getElementById("a").remove();
        //document.getElementById("a").outerHTML="<button class="btn btn-primary" style="width: 20%;" ><b>Approve</b></button>";
        document.getElementById("b").innerHTML="<b>The Application is successfully approved</b>";
    }
    </script>


</body>
</html>
