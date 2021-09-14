<!-- written by Indranil Sen -->


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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
    <style>
             #letter{
                background-color: #fffdfd;
                margin: auto;
                border: 2px solid #000;
            }  
            #letter_body  {
              margin: 2%;
              padding: 2%;
              border: 2px solid #000;
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

        </style>
    </head>

    <body class="row">
<?php foreach($details as $detail){ ?>
<div id="letter" class="mt-5 col-lg-6 col-md-12" >
    <h4 class="text-center mt-2" align="center" >New Verification for Police Verification of SP DIB</h4>
    <div  id="letter_body" class="mt-5">
            <div class="text-center">
                           <p class="d-flex justify-content-end mt-1 mr-2" align="right"> CONFIDENTIAL</p>
                <h3 class="text-center  fw-bold" align="center"> GOVERNMENT OF WEST BENGAL </h3>
               <h3 class="text-center fw-bold" align="center"> OFFICE OF THE DISTRICT MAGISTRATE & COLLECTOR</h3>

               <h3 class="mb-4 text-center" align="center"> <u> HOWRAH <br>
                V R Section</u></h3> 
                <div class="mt-4 d-flex col-12 justify-content-between line">
                        <div align="left" > Memo No.: <?php echo $detail['memo_no'];?>  </div>
                        <div align="right" id="letter-date">	Dated: <?php echo $detail['application_date'];?></div>  
                        
                </div>

                        <div class="mt-4 d-flex justify-content-start">To </div>
                        <div class="d-flex justify-content-start"> The Superintendent of Police (DIB) </div>
                        <div class="d-flex justify-content-start"> Howrah. </div>
                        </div>
                        <p class="mt-4"> <div class="d-flex justify-content-start">Sir,</div>
                               <div > I am forwarding herewith verification papers in respect of the person specified below for an enquiry and report from your side through DIG(IB),West Bengal.The desired report along with  the papers in original may please be sent within a short period.<br> <br> Thanking You. </div> 
                        </p>
                       <div class="d-flex justify-content-end fw-bold" align="right"><b>Yours faithfully,</b></div> 
                         <br><br>
                        <div class="d-flex justify-content-end fw-bold" align="right"><b>For District Magistrate Howrah</b> </div>
                        <br>
                        <div class="  d-flex  justify-content-between line" align="center" style="margin:5%; margin-left:15%;">
                            <div align="left">Name of the Candidate: <br><br><?php echo $detail['candidate_f_name'].' '.$detail['candidate_m_name'].' '.$detail['candidate_l_name']; ?></div>
                            <div align="right">Name of the Employer:<br><br><?php echo $detail['employer_name']?></div><br>
                        </div>
                </div>                    

                        <!--  <div class="d-flex justify-content-end fw-bold">Howrah </div>-->
            </div>      
        </div>
        <?php }?>
    </body>
<?php //$this->load->view('layouts/footer_view'); ?>
</html>
