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
div.c {
  text-indent: 10%;
}
div.d {
  text-indent: 10%;
}


        </style>
    </head>

    <body>
        <div id="letter">
            <h4 class="text-center mt-2" >New application for Police Verification to CP Letter
</h4>
            <div  id="letter_body">
                    <div class="text-center">
                                   <p class="d-flex justify-content-end mt-1 mr-2" > CONFIDENTIAL</p>
                        <h3 class="text-center  fw-bold"> GOVERNMENT OF WEST BENGAL </h3>
                       <h3 class="text-center fw-bold"> OFFICE OF THE DISTRICT MAGISTRATE & COLLECTOR</h3>

                       <h3 class="mb-4"> <u> HOWRAH <br>
                        V R Section</u></h3> 
                        <div class="mt-4 d-flex  justify-content-between">
                                <div > Memo No.              \VR  </div>
                                <div id="letter-date">	Dated:</div>  
                                
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
                       <div class="d-flex justify-content-end fw-bold">Yours faithfully,</div> 
                        <br>
                        <div class="d-flex justify-content-end fw-bold">For District Magistrate Howrah</div>
                        <br>
                        <div class="c">
                        <h5> <pre><u>Name of The Candidate:</u>                            <u>Name of The Employer:</u></pre></div> </h5>
                        <div class="d">
                        <h5> <pre>______________________                            _____________________</pre></div> </h5>
                      
                        
                        
                        
                        
            </div>      
        </div>

        <div class="text-centre d-flex justify-content-center"><button class="btn bg-secondary text-light m-auto">Print</button></div><br><br>
    </body>
    <?php $this->load->view('layouts/footer_view'); ?>
    </html>

