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
.content {
  max-width: 500px;
  margin: auto;
}
#letter{
                background-color: #fffdfd;
                margin: auto;
                border: 2px solid #000;
                height: 600px;
                padding: 2%;
            }  
table, th, td {
            border: 1px solid black;
         }
</style>
</head>
<body>
    <div class="container">
<div id="letter" class="mt-5 col-lg-6 col-md-12">
<h5 class="text-center  fw-bold" align="center"> Application details<br><br>FOR THE PERIOD FROM __________________ TO __________________ </h5>
   <br> <table class="content">
        
        <tr>
            <th>
                Sl No.
            </th>
                <th>
                    Name of Candidates<br> with Address
                </th>
            <th>
                Name<br>of<br>Father
            </th>
            <th>
                Name of the Employer's<br>with Address
            </th>
        </tr>
        <tr>
            <td>
                <b><br>Employer's Memo No. &<br>Date </b>
            </td>
            <td>
                <b>This office memo No.<br>& Date</b>
            </td>
            <td>
                <b>Receiving<br> Date</b>
            </td>
            <td>
                <b>I.B.'s No. & Date</b>
            </td>
        </tr>
        <tr>
            <td>
                <b>Final V.R.<br>Ready<br>Date</b>
            </td>
            <td>
                <b>Final<br>V.R. No. & Date</b>
            </td>
            <td>
                <b>Remarks</b>
            </td>
            <td>

            </td>
        </tr>
        
    </table><br>
    
        </div>
    </div>
</body>