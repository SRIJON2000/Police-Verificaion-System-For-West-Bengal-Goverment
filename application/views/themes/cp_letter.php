<!-- written by Prabin Shekhar & Debayan Ghosh -->

<?php
        defined('BASEPATH') OR exit('No direct script access allowed');
      //  $this->load->view('layouts/header_view');
      //  $this->load->library('session');
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url(); ?>\application\views\themes\CSS\stylesheet1.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <title>Letter</title>
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
div.c {
  text-indent: 10%;
}
div.d {
  text-indent: 10%;
}


        </style>
    </head>

    <body>
      <?php foreach($details as $detail)
      {
        ?>
        <div id="letter" class ="col-lg-6 col-md-12">
            <h4 class="text-center mt-2" align="center" >New application for Police Verification to CP Letter
</h4>
            <div  id="letter_body">
                    <div class="text-center">
                                   <p class="d-flex justify-content-end mt-1 mr-2 " align="right" > CONFIDENTIAL</p>
                        <h3 class="text-center  fw-bold" align="center"> GOVERNMENT OF WEST BENGAL </h3>
                       <h3 class="text-center fw-bold" align="center"> OFFICE OF THE DISTRICT MAGISTRATE & COLLECTOR</h3>

                       <h3 class="mb-4" align="center"> <u> HOWRAH <br>
                        V R Section</u></h3> 
                        <div class="mt-4 d-flex  justify-content-between">
                                <div align="left"> Memo No. : <?php echo $detail['memo_no'];?></div>
                                <div id="letter-date" align="right">	Dated: <?php echo $detail['application_date'];?></div>  
                                
                        </div>

                        <div class="mt-4 d-flex justify-content-start">To </div>
                        <div class="d-flex justify-content-start">The Commissioner of Police, Special  </div>
                        <div class="d-flex justify-content-start">Branch, Howrah. </div>

                       

                       <div class="mt-4 d-flex  justify-content-between">
                                
                                
                        </div>
                        </div>
                        <p class="mt-4"> <div class="d-flex justify-content-start">Sir,</div>  <br>
                               <div > <div id="letter-content"></div> I am forwarding herewith verification papers in respect of the person specified below for an
enquiry and report from your side through DIG(IB),West Bengal.The desired report along with
the papers in original may please be sent within a short period.   </div> <br> 
<div class="d-flex justify-content-start">Thanking you.</div>  
                        </p>
                       <div class="d-flex justify-content-end fw-bold"align="right">Yours faithfully,</div> 
                        <br>
                        <div class="d-flex justify-content-end fw-bold" align="right">For District Magistrate Howrah</div>
                        <br>
              
                      
                        <div class="mt-4  d-flex  justify-content-between line" align="center" style="margin:5%; margin-left:15%;">
                        <div align="left">Name of the Candidate<br><br><b><?php echo $detail['candidate_f_name'].' '.$detail['candidate_m_name'].' '.$detail['candidate_l_name']; ?></b></div>
                            <div align="right"><div align="left">Name of the Employer</div><br><b><?php echo $detail['employer_name']?></b></div><br>
                        </div>
                        
                        
                        
            </div>      
        </div>
        <?php 
      }
        ?>
        <!-- <div class="text-centre d-flex justify-content-center"><button class="btn bg-secondary text-light m-auto">Print</button></div><br><br> -->
    </body>
    
    </html>

