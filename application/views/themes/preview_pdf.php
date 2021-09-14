<?php
        defined('BASEPATH') OR exit('No direct script access allowed');
        $this->load->view('layouts/header_view');
       // $this->load->library('session');
       //echo $_SERVER['PHP_SELF'];
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
       
    </head>

    <body>
        <?php foreach($details as $detail)
        {
          if($detail['sent_to']=='SP DIB RURAL')
          {
          ?>

        <?php //$this->load->view('themes/non_defence_letter',$details); ?>
        <br>
        <br>
        <?php //foreach($details as $detail){?>
        <!-- <div class="text-centre d-flex justify-content-center"><a href="<?php //echo base_url()?>Generate_pdf/generate_pdf/<?php //echo $detail['pvr_id_pk']?>" class="btn bg-secondary text-light m-auto" >Print</a></div><br><br> -->
        <?php //}?>

        <?php $this->load->view('themes/SP_DIB',$details); ?>
        <br>
        <br>
        <?php foreach($details as $detail){?>
        <div class="text-centre d-flex justify-content-center">
          <a href="<?php echo base_url()?>Generate_pdf/generate_pdf/<?php echo $detail['pvr_id_pk']?>" 
              class="btn bg-secondary text-light m-auto" >Print</a></div><br><br> 
        <?php }?>
        

        
        <?php }?>
      </body>
    <script language="javascript" type="text/javascript">
          /* <![CDATA[ */
            document.write('<a href="makepdf.php?url=' + encodeURIComponent(location.href) +'">');
            //document.write('Create PDF file of this page');
            document.write('</a>');
          /* ]]> */
        </script>
        <?php $this->load->view('layouts/footer_view'); ?>
    </html>

