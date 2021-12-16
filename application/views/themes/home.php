<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layouts/header_view');
$this->load->library('session');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>PVR Home</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
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
            background: linear-gradient(to right, rgb(253, 253, 253), rgb(196, 188, 188));
        }
        h3{
            color: #a5550b;
        }
        .button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        }

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color:black;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  background-color: #f1f1f1;
  height: 550px;
  width:500px;
  position:absolute;
  z-index: 1;
  right: 70px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
  .side{
    z-index: -1;
    width:200px;
    position:absolute;
    right: 220px;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
  
}


.holder { 
  background-color:lightblue;
  width:430px;
  height:350px;
  overflow:hidden;
  padding:10px;
  font-family:Helvetica;
}
.holder .mask {
  position: relative;
  left: 0px;
  top: 10px;
  width:400px;
  height:340px;
  overflow: hidden;
}
.holder ul {
  list-style:none;
  margin:0;
  padding:0;
  position: relative;
}
.holder ul li {
  padding:20px 0px;
}
.holder ul li a {
  color:darkred;
  text-decoration:none;
}
</style>
</head>
<body>



<!-- <div class="navbar">
  <a href="#" class="active">Home</a>
  <a href="#">Link</a>
  <a href="#">Link</a>
  <a href="#" class="right">Link</a>
</div> -->

<div style="height:650px;" class="">
  <h2 style="text-align:center; color:brown" class="mb-4 mt-4"><b>Welcome To Police Verification Reporting System</b></h2>
  <div class="main row">
      <div class="">
        <div style="text-align:center" class="mb-3">
          <div class="mt-5">
            <img class="mb-1" src="<?php echo base_url();?>/application/views/pics/admin.png" alt="Administrative image here" height="100" width="130">&nbsp;&nbsp;&nbsp;<br><br><br>
            <button class="button login_button"style="width:auto;" onclick="window.location.href = '<?php if($this->session->userdata('isloggedin')==True){echo base_url().'/Home/dashboard_adm';}else {echo base_url().'Home/admin_login'; } ?>'"><b>Administration Login</b></button>&nbsp;&nbsp;&nbsp;
            <!-- <button class="button login_button"style="width:auto;" onclick="window.location.href = '<?php// if($this->session->userdata('isloggedin')==True){echo base_url().'/Home/dashboard_adm';}else {echo base_url().'Home/superadmin_login'; } ?>'"><b>Superadmin Login</b></button> -->
          </div>
        </div>
      </div>
      <div class="side rounded-3">
        <h2 class="text-center mt-4 mb-4"><b>News Feed</b></h2>
        <div class="holder mx-auto h-75 rounded-3">
              <ul id="ticker01">
                    <li><span>10/10/2007</span><a href="#">The first thing that most Javascript programmers</a></li>
                    <li><span>10/10/2007</span><a href="#">End up doing is adding some code</a></li>
                    <li><span>10/10/2007</span><a href="#">The code that you want to run</a></li>
                    <li><span>08/10/2007</span><a href="#">Inside of which is the code that you want to run</a></li>
                    <li><span>08/10/2007</span><a href="#">Right when the page is loaded</a></li>
                    <li><span>05/10/2007</span><a href="#">Problematically, however, the Javascript code</a></li>
                    <li><span>04/10/2007</span><a href="#">The first thing that most Javascript programmers</a></li>
                    <li><span>04/10/2007</span><a href="#">End up doing is adding some code</a></li>
                    <li><span>04/10/2007</span><a href="#">The code that you want to run</a></li>
                    <li><span>03/10/2007</span><a href="#">Inside of which is the code that you want to run</a></li>
                    <li><span>03/10/2007</span><a href="#">Right when the page is loaded</a></li>
                    <li><span>01/10/2007</span><a href="#">Problematically, however, the Javascript code</a></li>
              </ul>
        </div>
      </div>
    </div>
</div>

<!-- <div class="footer">
  <h2>Footer</h2>
</div> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
  jQuery.fn.liScroll = function(settings) {
	settings = jQuery.extend({
		travelocity: 0.03
		}, settings);		
		return this.each(function(){
				var $strip = jQuery(this);
				$strip.addClass("newsticker")
				var stripHeight = 1;
				$strip.find("li").each(function(i){
					stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
				});
				var $mask = $strip.wrap("<div class='mask'></div>");
				var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");								
				var containerHeight = $strip.parent().parent().height();	//a.k.a. 'mask' width 	
				$strip.height(stripHeight);			
				var totalTravel = stripHeight;
				var defTiming = totalTravel/settings.travelocity;	// thanks to Scott Waye		
				function scrollnews(spazio, tempo){
				$strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
				}
				scrollnews(totalTravel, defTiming);				
				$strip.hover(function(){
				  jQuery(this).stop();
				},
				function(){
				  var offset = jQuery(this).offset();
				  var residualSpace = offset.top + stripHeight;
				  var residualTime = residualSpace/settings.travelocity;
				  scrollnews(residualSpace, residualTime);
				});			
		});	
};

$(function(){
    $("ul#ticker01").liScroll();
});
  </script>
</body>
<?php $this->load->view('layouts/footer_view'); ?>
</html>
