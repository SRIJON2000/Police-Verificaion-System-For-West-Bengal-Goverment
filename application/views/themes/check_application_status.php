

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Application Status</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>/theme_css2/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <style>
		body{margin-top:20px;}

.steps .step {
    display: block;
    width: 100%;
    margin-bottom: 35px;
    text-align: center
}

.steps .step .step-icon-wrap {
    display: block;
    position: relative;
    width: 100%;
    height: 80px;
    text-align: center
}

.steps .step .step-icon-wrap::before,
.steps .step .step-icon-wrap::after {
    display: block;
    position: absolute;
    top: 50%;
    width: 50%;
    height: 3px;
    margin-top: -1px;
    background-color: #e1e7ec;
    content: '';
    z-index: 1
}

.steps .step .step-icon-wrap::before {
    left: 0
}

.steps .step .step-icon-wrap::after {
    right: 0
}

.steps .step .step-icon {
    display: inline-block;
    position: relative;
    width: 80px;
    height: 80px;
    border: 1px solid #e1e7ec;
    border-radius: 50%;
    background-color: #f5f5f5;
    color: #374250;
    font-size: 38px;
    line-height: 81px;
    z-index: 5
}

.steps .step .step-title {
    margin-top: 16px;
    margin-bottom: 0;
    color: #606975;
    font-size: 14px;
    font-weight: 500
}

.steps .step:first-child .step-icon-wrap::before {
    display: none
}

.steps .step:last-child .step-icon-wrap::after {
    display: none
}

.steps .step.completed .step-icon-wrap::before,
.steps .step.completed .step-icon-wrap::after {
    background-color: #0da9ef
}

.steps .step.completed .step-icon {
    border-color: #0da9ef;
    background-color: #0da9ef;
    color: #fff
}

@media (max-width: 576px) {
    .flex-sm-nowrap .step .step-icon-wrap::before,
    .flex-sm-nowrap .step .step-icon-wrap::after {
        display: none
    }
}

@media (max-width: 768px) {
    .flex-md-nowrap .step .step-icon-wrap::before,
    .flex-md-nowrap .step .step-icon-wrap::after {
        display: none
    }
}

@media (max-width: 991px) {
    .flex-lg-nowrap .step .step-icon-wrap::before,
    .flex-lg-nowrap .step .step-icon-wrap::after {
        display: none
    }
}

@media (max-width: 1200px) {
    .flex-xl-nowrap .step .step-icon-wrap::before,
    .flex-xl-nowrap .step .step-icon-wrap::after {
        display: none
    }
}

.bg-faded, .bg-secondary {
    background-color: #f5f5f5 !important;
}
	</style>
	</head>
    <body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
<?php 
    foreach($details1 as $detail)
  {
?>
<div class="container padding-bottom-3x mb-1">
        <div class="card mb-3">
          <div class="p-4 text-center text-white text-lg bg-dark rounded-top"><span class="text-uppercase">Receipt No - </span><span class="text-medium"><b><?php echo $detail['receipt_no'];?></b></span></div>
          <div class="d-flex flex-wrap flex-sm-nowrap justify-content-between py-3 px-2 bg-secondary">
          <div class="w-100 text-center py-1 px-2"><span class="text-medium"><b>VR Type:&nbsp;</span><?php echo $detail['df_type'];?></b></div>  
          <div class="w-100 text-center py-1 px-2"><span class="text-medium"><b>Candidate Name:&nbsp;</span><?php echo $detail['candidate_f_name'].' '.$detail['candidate_m_name'].' '.$detail['candidate_l_name'] ?></b></div>
            <div class="w-100 text-center py-1 px-2"><span class="text-medium"><b>Status:&nbsp;</span><?php echo $detail['pvr_with_status'];?></b></div>
			<div class="w-100 text-center py-1 px-2"><span class="text-medium"><b>Application Date:&nbsp;</span><?php echo $detail['application_date'];?></b></div>
            <!-- <div class="w-100 text-center py-1 px-2"><span class="text-medium"><b>Expected Date:</span> SEP 09, 2017</b></div> -->
          </div>
          <div class="card-body">
            <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
             
            <div class="step completed">
                <div class="step-icon-wrap">
                  <div class="step-icon"><i class="pe-7s-mail"></i></div>
                </div>
                <h4 class="step-title">Application Submitted</h4>
              </div>
			  <!-- <div class="step">
                <div class="step-icon-wrap">
                  <div class="step-icon"><i class="pe-7s-user"></i></div>
                </div>
                <h4 class="step-title">CA Section</h4>
              </div> -->

              
              <div class="step completed">
                <div class="step-icon-wrap">
                  <div class="step-icon"><i class="pe-7s-user"></i></div>
                </div>
                <h4 class="step-title">VR Section</h4>
              </div>
              <div class="<?php if($detail['pvr_with_status']=='OC VR'){echo 'step completed';} else{echo 'step';}?>" >
                <div class="step-icon-wrap">
                  <div class="step-icon"><i class="pe-7s-user"></i></div>
                </div>
                <h4 class="step-title">OC VR</h4>
              </div>
              <div class="step">
                <div class="step-icon-wrap">
                  <div class="step-icon"><i class="pe-7s-user"></i></div>
                </div>
                <h4 class="step-title">CP/SB/SP DIB</h4>
              </div>
              <div class="step">
                <div class="step-icon-wrap">
                  <div class="step-icon"><i class="pe-7s-user"></i></div>
                </div>
                <h4 class="step-title">IB</h4>
              </div>
			  <div class="step">
                <div class="step-icon-wrap">
                  <div class="step-icon"><i class="pe-7s-user"></i></div>
                </div>
                <h4 class="step-title">ADM</h4>
              </div>

			  <div class="step">
                <div class="step-icon-wrap">
                  <div class="step-icon"><i class="pe-7s-user"></i></div>
                </div>
                <h4 class="step-title">VR Certificate Generated</h4>
              </div>


            </div>
          </div>
        </div>
        <div class="d-flex flex-wrap flex-md-nowrap justify-content-center justify-content-sm-between align-items-center">
          <div class="custom-control custom-checkbox mr-3">
            <input class="custom-control-input" type="checkbox" id="notify_me" checked="">
            <label class="custom-control-label" for="notify_me">Notify me when application is verified</label>
          </div>
          <div class="text-left text-sm-right"><a class="btn btn-outline-primary btn-rounded btn-sm" href="<?php echo base_url()?>Home/application_details/<?php echo $detail['pvr_id_pk']?>" data-toggle="modal" data-target="#orderDetails">View Application Details</a>&nbsp;&nbsp;&nbsp;
          <a class="btn btn-outline-primary btn-rounded btn-sm" href="<?php echo base_url()?>Home/dashboard_adm"><b>Back</b></a></div>
        </div>
      </div>
      
<?php 
   }
?>
</body>
</html>