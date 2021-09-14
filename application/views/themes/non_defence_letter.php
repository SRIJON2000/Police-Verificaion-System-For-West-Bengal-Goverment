<!-- written by Rupak Pal -->

<?php
        defined('BASEPATH') OR exit('No direct script access allowed');
       // $this->load->view('layouts/header_view');
       // $this->load->library('session');
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
              display: flex;
              justify-content:space-between;
            }

        </style>
    </head>

    <body class="row">
    <?php foreach($details as $detail)
         {
            ?>
        <div id="letter" class="mt-5 col-lg-6 col-md-12" >
            <h4 class="text-center mt-2" align="center" >Verified Report for Non-Defence</h4>
            <div  id="letter_body" class="mt-5">
                    <div class="text-center">
                                   <p class="d-flex justify-content-end mt-1 mr-2" align="right"> CONFIDENTIAL</p>
                        <h3 class="text-center  fw-bold" align="center"> GOVERNMENT OF WEST BENGAL </h3>
                       <h3 class="text-center fw-bold" align="center"> OFFICE OF THE DISTRICT MAGISTRATE & COLLECTOR</h3>

                       <h3 class="mb-4 text-center" align="center"> <u> HOWRAH <br>
                        V R Section</u></h3> 
                        <div class="mt-4 d-flex col-12 justify-content-between line">
                                <div align="left" > Memo No. :<?php echo $detail['memo_no'];?></div>
                                <div align="right" id="letter-date">	Dated: <?php echo $detail['application_date'];?></div>  
                                
                        </div>

                        <div class="mt-4 d-lg-flex justify-content-start">To </div>
                        <div class="d-flex justify-content-start"><?php echo $detail['sent_to'];?></div>
<br>
                       <div class=" text-center" align="center"><b> Sub: Police Verification Report in respect of _________ </b></div>
<br>
                       <div class=" d-flex line justify-content-between">
                                <div align="left"> Ref. No. :<?php echo $detail['ref_no_pk'];?></div>
                                <div align="right" class="flex-grow-1 bd-highlight" id="letter-date">	Dated: <?php echo $detail['ref_date'];?></div>  
                                
                        </div>
                        </div>
                        <p class="mt-4"> <div class="d-flex justify-content-start">Sir,</div>  <br>
                               <div > With reference to the captioned subject, findings of the field enquiry report by the Superintendent of Police (DIB) Rural/The Commissioner of Police/Assistant Commissioner of Police, Special Branch, Howrah and others are listed below: </div>
                               <ol>
                                     <li> Nothing adverse found in the official records against the candidate(s). YES/NO (If NO: report enclosed)</li>
                                    <li>	The identity of candidate(s) has been established beyond doubt</li>
                                    <li>	The educational qualifications of the Candidate have been/have not been verified at this end. (M.P./H.S./B.A./B.Sc./B.Com./M.A./M.Sc./M.Com./ICSE/ISC)</li>
                                    <li>	Other qualification(s) : </li>
                                    <li>	Caste status verified :Yes/No (SC/ST/OBC)</li>
                                    <li>	Any other remarks :</li>
                                </ol> 
                        </p>
                       <div class="d-flex justify-content-end" align="right"><b>Yours faithfully,<b></div>
                       <br> 
                        Enclosed : V.R.in original <br><br>
                        <div class="d-flex justify-content-end fw-bold" align="right"><b>For District Magistrate<b></div>
                        <div class="d-flex justify-content-end fw-bold" align="right"><b>Howrah<b></div>
            </div>      
        </div>
        <div class="text-centre d-flex justify-content-center">
                  <a href="<?php echo base_url()?>Generate_pdf/generate_pdf/<?php echo $detail['pvr_id_pk']?>" 
                      class="btn bg-secondary text-light m-auto" style="text-decoration:none; color:white;">Print</a></div><br><br>
        <?php 
         }
            ?>
    </body>
    <!-- <?php //$this->load->view('layouts/footer_view'); ?> -->
    <script language="javascript" type="text/javascript">
          /* <![CDATA[ */
            // document.write('<a href="makepdf.php?url=' + encodeURIComponent(location.href) +'">');
            // document.write('Create PDF file of this page');
            // document.write('</a>');
          /* ]]> */
        </script>
    </html>