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
th,td{
              padding: 5px;

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
<div id="letter" class="mt-5 col-lg-6 col-md-12">
    <?php foreach($dates as $date){?>
<h5 class="text-center  fw-bold" align="center"> QUARTERLY REPORT OF POLICE VERIFICATION<br>FOR EMPLOYMENT PURPOSE<br>FOR THE PERIOD FROM <?php echo $date['s']?>&nbsp;TO&nbsp;<?php echo $date['e']?> </h5>
   <br> <table class="content">
       <?php foreach($numbers as $number){?> 
        <tr>
            <th>
                Sl No.
            </th>
                <th>
                    Particulars
                </th>
            <th>
                No.
            </th>
            <th>
                Remarks
            </th>
        </tr>
        <tr>
            <td>
                1. 
            </td>
            <td>
                No of cases pending enquiries in the last<br>day of previous quarter.
            </td>
            <td>
                &nbsp;<b><?php echo $number['a'];?></b>
            </td>
            <td>

            </td>
        </tr>
        <tr>
            <td>
                2.
            </td>
            <td>
                No of request received during the<br>quarter.
            </td>
            <td>
            &nbsp;<b><?php echo $number['b'];?></b>
            </td>
            <td>

            </td>
        </tr>
        <tr>
            <td>
                3.
            </td>
            <td>
                No of enquire report received from D.I.B<br>during quarter under report.
            </td>
            <td>

            </td>
            <td>

            </td>
        </tr>
        <tr>
            <td>
                4.
            </td>
            <td>
                No of request sent to the employing<br>agencies during quarter under report.
            </td>
            <td>

            </td>
            <td>

            </td>
        </tr>
        <tr>
            <td>
                5.
            </td>
            <td>
                No of cases pending as on the last day<br>of quarter.
            </td>
            <td>
            &nbsp;<b><?php echo $number['c'];?></b>
            </td>
            <td>

            </td>
        </tr>
        <tr>
            <td>
                6.
            </td>
            <td>
                No of report pending more than 120 days.
            </td>
            <td>
            &nbsp;<b><?php echo $number['d'];?></b>
            </td>
            <td>

            </td>
        </tr>
    </table><br>
    <?php }?>
    <div class="d-flex justify-content-end fw-bold" align="right"><b>For District Magistrate Howrah</b> </div>
        </div><br>
        <div class="text-centre d-flex justify-content-center">
    <a href="<?php echo base_url()?>Generate_pdf/quarterly_report/<?php echo $date['s']?>/<?php echo $date['e']?>" target="_blank" class="btn bg-secondary text-light m-auto" style="text-decoration:none; color:white;">Print</a></div><br><br>
    <?php }?>
</body>
</html>


</html>