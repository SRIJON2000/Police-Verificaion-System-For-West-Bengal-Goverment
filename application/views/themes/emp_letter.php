<!-- written by Prabin Shekhar & Debayan Ghosh -->

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
        <link rel="stylesheet" href="<?php echo base_url(); ?>\application\views\themes\CSS\stylesheet1.css">
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
            <h4 class="text-center mt-2" >Send unverified Police Verification letter to Employer</h4>
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
                        <div class="mt-4 d-flex justify-content-start"><b>Sub: Verification on C/As</b></div>

                       <b>  </b>

                       <div class="mt-4 d-flex  justify-content-between">
                                  
                                
                        </div>
                        </div>
                        <p class="mt-4"> <div class="d-flex justify-content-start">Sir,</div>  <br>
                               <div > <div id="letter-content">In</div>
 pursuance of Memo No _________________ Dated_______________ of Dy. Inspector,
General of Police, I.B.,West Bengal the undersigned is to intimate you that verification in respect
of ________________________ could not be made from the police ends the V.R. subject unwilling
to accept the job/non production of relevant documents /V.R. subject is non traceable/the
address of the V.R subject is out of administrative jurisdiction/other.
<br>
<br>
As such the unverified V.R. in original of ____________________ is being sent herewith along
with a copy of the above mentioned memo for favour of your information and necessary action.   </div>
            <br>                   
                        </p>
                        
                       Enclosed : As stated.  <br>
                       <div class="d-flex justify-content-end fw-bold">Yours faithfully,</div>
                       <br>
                       <br>
                        <div class="d-flex justify-content-end fw-bold">For District Magistrate </div>
                        <div class="d-flex justify-content-end fw-bold">Howrah </div>
            </div>      
        </div>

        <div class="text-centre d-flex justify-content-center"><button class="btn bg-secondary text-light m-auto">Print</button></div><br><br>
    </body>
    <?php $this->load->view('layouts/footer_view'); ?>
    </html>

