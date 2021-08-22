<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layouts/header_view');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Police Verification Reporting System</title>
<style>


*{
            box-sizing: border-box;
        }
        body{
            /*background-color: rgb(240, 176, 104);*/
            background-color:white;
        }
        #body_home{
            height:600px;
        }
        #buttons{
            margin: auto;
            width: fit-content;
            border: black solid;
            border-radius: 5px;
            margin-bottom: 2%;
            margin-top:2%;
            padding: 3%;
            background: linear-gradient(to right, rgb(253, 253, 253), rgb(255, 136, 0));
        }
        h3{
            color: #a5550b;
        }
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

</style>
</head>
<body>
    <a class="header"style="position:absolute;left:87%;top:11%" href="http://localhost/pvr/">Register Your Office</a>
    <div id="body_home">
        <h3 class="text-center">WELCOME!</h3>
        <div class="text-center" id="buttons">
            <img src="" alt="office image here">
            <button style="width:auto;" onclick="window.location.href = '<?php echo base_url().'index.php/test/employer_login' ?>'"><b>Office Login</b></button>
        </div>
        <div class="text-center" id="buttons">
            <img src="" alt="Administrative image here">
            <button style="width:auto;" onclick="window.location.href = '<?php echo base_url().'index.php/test/admin_login' ?>'"><b>AdministrationLogin</b></button>
        </div>
    </div>
    
</body>
<?php $this->load->view('layouts/footer_view'); ?>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Police Verification System</title>
</head>
<body>
<?php
        // include 'header_view.php';
    ?>

    <?php 
        // include 'footer_view.php';
    ?>
</body>
</html> -->