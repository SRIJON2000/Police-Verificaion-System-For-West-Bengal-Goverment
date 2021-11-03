<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layouts/header_view');
?>
<!DOCTYPE html>
<html>
<head>
<title><b>Check Status</b></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url();?>\application\views\themes\CSS\stylesheet1.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
 <body>
<style>
#myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-color:green;
    color: white;
    cursor: pointer;
    padding: 15px;
    border-radius: 4px;
  }
  
  #myBtn:hover {
    background-color: #555;
  }
  
  .row_new_app{
  padding-left: 10% !important;
}

  hr{
    width:90%; border-top:10px solid red ;margin:auto;
  }
  label{
    font-size:20px;
  }
</style>
  <h3 class="text-center"><b>Check Status</b></h3>
  <form id="application" action="<?php echo base_url();?>Application/statussearch" method="post">
  <div class="row row_new_app">
    
    <div class="text-align:center">
      <label for="employer"><b>Search By</b></label>
      <select type="text" name="type" style="width:350px; height:30px">
      <option>--Select--</option>
      <option>By Memo No.</option>
      <option>By Receipt No</option>
      <option>By Reference No</option>
</select>
    </div>
    
    
  </div>
  <div class="row row_new_app">
    
    <div class="text-align:center">
      <label for="employer"><b>Receipt No.</b></label>
      <input type="text" name="rcpt" style="width:350px">
    </div>
    
    
  </div>
  <div class="row">
      <div class="d-flex justify-content-center col-lg-12 col-md-12 p-3 pt-5">
        <button class="btn bg-danger text-light m-5 p-2" type="submit" value="Reset" onclick="reset()"><b>Reset</b></button>
        <div class="btn bg-secondary m-5 p-2">
          <a id="back" class="text-white" href="<?php base_url()?>dashboard_adm" style="text-decoration:none;">Back</a>
        </div>
          <input class="btn bg-success text-light m-5" type="submit" value="Submit" name="apply">
      </div>
    </div>
</form><br/><br/>
        </body>
        <script>
function reset()
{
  document.getElementById("application").reset();
}
</script>
</html>