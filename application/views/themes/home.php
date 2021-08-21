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
</head>
<body>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            background-color: rgb(240, 176, 104);
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
    </style>
    <div id="body_home">
        <h3 class="text-center">WELCOME!</h3>
        <div class="text-center" id="buttons">
            <img src="" alt="office image here">
            Office Login
        </div>
        <div class="text-center" id="buttons">
            <img src="" alt="Administrative image here">
            Administration Login
        </div>
    </div>
</body>
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