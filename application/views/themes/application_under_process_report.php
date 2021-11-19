<!--written by SOUMYADEB DHAR-->


<html>
<?php
        defined('BASEPATH') OR exit('No direct script access allowed');
        //$this->load->view('layouts/header_view');
        $this->load->library('session');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
/* .content {
  max-width: 500px;
  margin: auto;
}
#letter{
                background-color: #fffdfd;
                margin: auto;
                border: 2px solid #000;
                height: 800px;
                padding: 2%;
            } */
            th,td{
              padding: 5px;

            }


            #letter{
              background-color: #fffdfd;
                margin: auto;
                /* border: 2px solid #000; */

            }  
            #letter_body  {
              margin: 2%;
              padding: 2%;
              border: 2px solid #fff;
            } 
            #letter-date{
              padding-right: 12% !important;
            }
            #letter-content{
              padding-left:10px; 
              display:inline-block;
            }
            .line{
              display: flex !important;
              justify-content:space-between !important;
            }
table, th, td {
            border: 1px solid black;
         }
</style>
</head>
<body>
    <div class="container">
<div id="letter" class="mt-5 col-lg-6 col-md-12">
  <?php foreach($dates as $date){?>
<h5 class="text-center  fw-bold" align="center"> Application details<br><br>FOR THE PERIOD FROM <?php echo $date['s']?>&nbsp;TO&nbsp;<?php echo $date['e']?></h5>
   
<br> <table class="content " style="margin: 0px 5px; color:black;" >
        <!-- <thead> -->
        <tr style="text-align:center">
            <th>Sl No.</th>
            <th>Name of Candidates with Address</th>
            <th>Name of the Employer with Address</th>
            <th>Employer's Memo No. & Date</th>
            <th>DM Office memo No.& Date</th>
            <th>Receive Date</th>
            <!-- <th>I.B.'s No. & Date</th>
            <th>Final V.R. Ready  Date</th>
            <th>Final V.R. No. & Date</th>
            <th>Remarks</th> -->
        </tr>
        <!-- </thead> -->
        <!-- <tbody> -->
        <?php
        $count=1;
              foreach($applications as $application)
           {                                 
          ?>
          <tr>
            <td><b>1.</b><?php //echo $count;?></td>
            <td><?php echo $application['candidate_f_name'].' '.$application['candidate_m_name'].' '.$application['candidate_l_name'].'/'.$application['candidate_house_no1'].' '.$application['candidate_street1'].' '.$application['candidate_city1'].' '.$application['pincode_no']?></td>
            <td><?php echo $application['employer_name'].'/'.$application['employer_add1'] ?></td>
            <td><?php echo $application['ref_no_pk'].'/'.$application['ref_date']?></td>
            <td><?php echo $application['memo_no'].'/'.$application['issue_date']?></td>
            <td><?php echo $application['application_date']?></td>
            <!-- <th>I.B.'s No. & Date</th>
            <th>Final V.R. Ready  Date</th>
            <th>Final V.R. No. & Date</th>
            <th>Remarks</th> -->
        </tr>
        <?php $count=$count+1;}?>
        <!-- </thead> -->
        
    </table><br>
    
        </div>
    </div><br><br>
    <div class="text-centre d-flex justify-content-center">
    <a href="<?php echo base_url()?>Generate_pdf/daily_report/<?php echo $date['s']?>/<?php echo $date['s']?>" class="btn bg-secondary text-light m-auto" style="text-decoration:none; color:white;">Print</a></div><br><br>
    <?php }?>
  </body>