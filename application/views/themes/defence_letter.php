<!-- written by Soumyadeb Dhar -->
<!-- modified by Prabin Shekhar & Debayan Ghosh -->

<?php
        defined('BASEPATH') OR exit('No direct script access allowed');
        $this->load->view('layouts/header_view');
        $this->load->library('session');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <body>
        <div id="letter" class ="col-lg-6 col-md-12">
            <h4 class="text-center mt-2" align="center" >Verified Report for Defence</h4>
            <div  id="letter_body">
                    <div class="text-center">
                                   <p class="d-flex justify-content-end mt-1 mr-2"align="right" > CONFIDENTIAL</p>
                        <h3 class="text-center  fw-bold" align="center"> GOVERNMENT OF WEST BENGAL </h3>
                       <h3 class="text-center fw-bold" align="center"> OFFICE OF THE DISTRICT MAGISTRATE & COLLECTOR</h3>

                       <h3 class="mb-4" align="center">  <u> HOWRAH <br>
                        V R Section</u></h3> 
                        <div class="mt-4 d-flex  justify-content-between">
                                <div align="left"> Memo No.       /VR  </div>
                                <div id="letter-date" align="right">	Dated:</div>  
                                
                        </div>

                        <div class="mt-4 d-flex justify-content-start">To </div>
                        <div class="d-flex justify-content-start"> __________________________________ </div>

                       <div class="mt-4 text-center"><b> Sub: Police Verification Report in respect of _________ </b></div>

                       <div class="mt-4 d-flex  justify-content-between">
                                <div > Ref: _______ /  /  / Dated_____ </div>
                               <!-- <div class="flex-grow-1 bd-highlight">	Dated______</div> --> 
                                
                        </div>
                        </div>
                        <p class="mt-4"> <div class="d-flex justify-content-start">Sir,</div>  <br>
                               <div > <div id="letter-content">With</div>  reference to the captioned subject, findings of the field enquiry report by the Superintendent of Police (DIB) Rural/The Commissioner of <br> Police/Assistant Commissioner of Police, Special Branch, Howrah and others are listed below: </div>
                               <ol>
                                     <li> Nothing adverse found in the official records against the candidate(s). YES/NO (If NO: report enclosed)</li>
                                    <li>	The identity of candidate(s) has been established beyond doubt</li>
                                    <li>	The educational qualifications of the Candidate have been/have not been verified at this end. (M.P./H.S./B.A./B.Sc./B.Com./M.A./M.Sc./M.Com./ICSE/ISC)</li>
                                    <li>	Other qualification(s) : </li>
                                    <li>	Caste status verified :Yes/No (SC/ST/OBC)</li>
                                    <li>	Any other remarks :</li>
                                </ol> 
                        </p>
                       <div class="d-flex justify-content-end fw-bold" align="right">Yours faithfully,</div> 
                        Enclosed : V.R.in original <br>
                        <div class="d-flex justify-content-end fw-bold" align="right">Additional District Magistrate (General) </div>
                        <div class="d-flex justify-content-end fw-bold" align="right">Howrah </div>
            </div>      
        </div>
        <div class="text-centre d-flex justify-content-center">
                  <a href="<?php echo base_url()?>Generate_pdf/generate_pdf/<?php echo $detail['pvr_id_pk']?>" 
                      class="btn bg-secondary text-light m-auto" style="text-decoration:none; color:white;">Print</a></div><br><br>
        <!-- <div class="text-centre d-flex justify-content-center"><button class="btn bg-secondary text-light m-auto">Print</button></div><br><br> -->
    </body>

</html>
