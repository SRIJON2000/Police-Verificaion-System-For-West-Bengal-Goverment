<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layouts/header_view');
$current_year=date('y');
?>
<!DOCTYPE html>
<html>
<head>
<title>Check Status</title>
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
<?php 
			$error = $this->session->flashdata('error');
		?><br>
<div class="container">
  <div class="border_lt"><h3 class="px-3"><b>Search Application  Status</b></h3></div><br>
  <form id="application" action="<?php echo base_url();?>Application/statussearch" method="post">
  <div class="row row_new_app">
    <div class="text-align:center col-lg-12 col-md-12 p-3">
    <div class="row"><div class="col-lg-4"><label for="employer"><b>Search By</b></label>
    </div><div class="col-lg-8"><select type="text" name="type" id="search" maxlength="30" class="p-1 col-lg-4" onchange="show(this.value)">
      <option value="">-----Select-----</option>
      <option value="2">By Memo No.</option>
      <option value="3">By Receipt No</option>
      <option value="4">By Reference No</option>
</select>
<br><div style="color:red"><b><?php if(!empty($error)){echo $error;unset($_SESSION['error']);}?></b></div>
    </div>
    <br/>
    <div class="text-align:center col-lg-12 col-md-12 p-3" id="1" style="display:none">
    <div class="row"><div class="col-lg-4"><label for="employer"><b>Receipt No.</b></label>
    </div><div class="col-lg-8"><input type="text" maxlength="30" name="rcpt" value="0" class="p-1 col-lg-4" placeholder="Enter Receipt No.">
    </div></div></div>
    <br/>
    <div class="text-align:center col-lg-12 col-md-12 p-3" id="2" style="display:none">
      <div class="row"><div class="col-lg-4"><label for="employer"><b>Memo No.</b></label>
      </div><div class="col-lg-8"><input type="text" maxlength="30" name="memo" class="p-1 col-lg-4"  value="/VR/<?php echo $current_year;?>" placeholder="Enter Memo No.">
      </div></div></div>
    <br/>
    <div class="text-align:center col-lg-12 col-md-12 p-3" id="3" style="display:none">
      <div class="row"><div class="col-lg-4"><label for="employer"><b>Reference No.</b></label>
      </div><div class="col-lg-8"><input type="text" maxlength="30" name="ref" class="p-1 col-lg-4" value="0" placeholder="Enter Reference No.">
      </div></div></div>

  </div>
  <div class="row">
      <div class="d-flex justify-content-center col-lg-12 col-md-12 p-3 pt-5">
        <div class="btn bg-secondary m-5 p-2">
          <a id="back" class="text-white p-3" href="<?php base_url()?>dashboard_adm" style="text-decoration:none;">Back</a>
        </div>
          <input class="btn bg-success text-light m-5" type="submit" value="Search" name="apply">
      </div>
    </div>
</form><br/><br/>
</div>
        </body>
        <script>
function reset()
{
  document.getElementById("application").reset();
}
function show(x)
{
  //var x = document.getElementById("search");
  if(x==2)
  {
    document.getElementById("2").style.display = "block";
    document.getElementById("3").style.display = "none";
    document.getElementById("1").style.display = "none";
  }
  if(x==3)
  {
    document.getElementById("1").style.display = "block";
    document.getElementById("2").style.display = "none";
    document.getElementById("3").style.display = "none";
  }
  if(x==4)
  {
    document.getElementById("3").style.display = "block";
    document.getElementById("2").style.display = "none";
    document.getElementById("1").style.display = "none";
  }
}
</script>
<script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script> 
</html>