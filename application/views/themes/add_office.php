<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layouts/header_view');
?>
<!DOCTYPE html>
<html>
<head>
<title>Add Office</title>
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
  hr{
    width:90%; border-top:10px solid red ;margin:auto;
  }
  label{
    font-size:20px;
  }
  .border_lt{
    border-left: solid 10px green;
  }
</style>
<div class="container">
<br>
  <div class="border_lt px-2"><h2>Add Office</h2></div>
  <form id="application" action="<?php echo base_url();?>Application/addoffice" method="post">

  <div class="row row_new_app">
    <div class="col-lg-12 col-md-12 p-3">
      <div class="row"><div class="col-lg-4"><label for="employer"><b>Office/Employer Name</b></label>
      </div><div class="col-lg-8"><input type="text" name="employer" class="px-2 container-fluid"></div></div>
    </div>
    <div class="col-lg-12 col-md-12 p-3">
    <div class="row"><div class="col-lg-4"><label for="addr1"><b>Office Address1</b></label>
    </div><div class="col-lg-8"><input type="text" name="addr1"class="px-2 container-fluid"></div></div>
    </div>
    <div class="col-lg-12 col-md-12 p-3">
    <div class="row"><div class="col-lg-4"><label for="addr2"><b>Office Address2</b></label>
      </div><div class="col-lg-8"><input type="text" name="addr2" class="px-2 container-fluid"></div></div>
    </div>
  </div>
  <div class="row">
      <div class="d-lg-flex d-md-flex flex-md-row flex-sm-column justify-content-center col-lg-12 col-md-12 p-3 pt-5">
        <button class=" btn bg-danger text-light m-3 pr-3 pl-3" type="submit" value="Reset" onclick="reset()"><b>Reset</b></button>
        <div class=" btn bg-secondary m-3 pr-4 pl-4">
          <a id="back" class="text-white" href="<?php base_url()?>dashboard_adm" style="text-decoration:none;">Back</a>
        </div>
          <input class="btn bg-success text-light m-3" type="submit" value="Submit" name="apply">
      </div>
    </div>
</form><br/>
</div>
<?php $this->load->view('layouts/footer_view'); ?>
        </body>
        <script>
function reset()
{
  document.getElementById("application").reset();
}
</script>
</html>