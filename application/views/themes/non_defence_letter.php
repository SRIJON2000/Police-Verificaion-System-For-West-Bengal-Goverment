<!-- written by Rupak Pal -->

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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <title>Letter</title>
        <style>
               #letter{
                background-color: #fffdfd;
                width: 70%;
                height: 1000px;
                margin: 65px auto;
                border: 2px solid #000;
             }  
             #letter_body  {
                width: 96%;
                height: 867px;
                margin-top: 5% !important;
                margin: 2%;
                padding: 2%;
                border: 2px solid #000;
             } 
             #letter-date{
                padding-right: 160px !important;
             }
             #letter-content{
                padding-left:10px; 
                display:inline-block;
             }

        </style>
    </head>
    <body>
        <div id="letter">
            <h4 class="text-center mt-2" >Verified Report for Non-Defence</h4>
            <div  id="letter_body">
                    <div class="text-center">
                                   <p class="d-flex justify-content-end mt-1 mr-2" > CONFIDENTIAL</p>
                        <h3 class="text-center  fw-bold"> GOVERNMENT OF WEST BENGAL </h3>
                       <h3 class="text-center fw-bold"> OFFICE OF THE DISTRICT MAGISTRATE & COLLECTOR</h3>

                       <h3 class="mb-4"> <u> HOWRAH <br>
                        V R Section</u></h3> 
                        <div class="mt-4 d-flex  justify-content-between">
                                <div > Memo No.       /VR  </div>
                                <div id="letter-date">	Dated:</div>  
                                
                        </div>

                        <div class="mt-4 d-flex justify-content-start">To </div>
                        <div class="d-flex justify-content-start"> __________________________________ </div>

                       <div class="mt-4 text-center"><b> Sub: Police Verification Report in respect of _________ </b></div>

                       <div class="mt-4 d-flex  justify-content-between">
                                <div > Ref: _______  </div>
                                <div class="flex-grow-1 bd-highlight">	Dated:</div>  
                                
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
                       <div class="d-flex justify-content-end fw-bold">Yours faithfully,</div> 
                        Enclosed : V.R.in original <br>
                        <div class="d-flex justify-content-end fw-bold">For District Magistrate </div>
                        <div class="d-flex justify-content-end fw-bold">Howrah </div>
            </div>      
        </div>

        <button class="btn bg-secondary text-light m-auto">Print</button> <br><br>
    </body>
    <?php $this->load->view('layouts/footer_view'); ?>
    </html>

