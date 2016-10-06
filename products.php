<!DOCTYPE html>
<!-- saved from url=(0039)http://getbootstrap.com/examples/theme/ -->
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/Drawing_1.png">
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
window.setInterval(function() {
$('#blinkText').toggle();
}, 1000);

jQuery(function($) {
$('.navbar .dropdown').hover(function() {
$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

}, function() {
$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

});

$('.navbar .dropdown > a').click(function(){
location.href = this.href;
});

});
</script>
	
	<style type="text/css">
	ul.nav a:hover { background-color:#31B0D5  !important;
                     color:white;	}
					 
	.carousel-inner{
  
  max-height: 350px !important;
}
.btn.btn-success {
    color: #ffffff;
    background-color: #5c90b8;
    background-image: linear-gradient(to bottom, #5c90b8, #5c90b8);
    border-color: #5c90b8 #5c90b8 #5c90b8;
}
.btn.btn-success:hover {
    color: #ffffff;
    background-color: #5c90b8;
    background-image: linear-gradient(to bottom, #5c90b8, #5c90b8);
    border-color: #5c90b8 #5c90b8 #5c90b8;
}

.form-inline .form-group input {
	width:250px;
}
ul.nav li.dropdown:hover > ul.dropdown-menu{
    display: block;
    margin: 0;
}


.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
	</style>

    <title>Archon</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./index_files/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./index_files/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document" style="margin-top:0px;">

  <?php include('header.php');?>

<div class="container-fluid" style="background-color:#f4f4f4;">


<div class="container" style="padding:0px;">
<?php include('navbar.php');?>

</div>

</div>







  
  

  <!-- Controls -->

 
<div class="container" >
<div class="row" style="margin:10px;">

<div class="col-lg-12 col-md-12">
    


</div>

</div>
</div>




    
<div class="container" style="padding:0px;">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin:0 auto;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" style="height:200px;">
    <div class="item active">
      <img  src="//cdn.hitachi-systems-mc.com/assets/media/offerings/offering_banner.jpg" alt="..." style="margin: 0 auto;width:100%;" class="img-responsive center-block">
      <div class="carousel-caption">
       ...
      </div>
    </div>
    <div class="item">
      <img src="//cdn.hitachi-systems-mc.com/assets/media/offerings/offering_banner1.jpg" alt="..." style="margin: 0 auto;width:100%;" class="img-responsive center-block">
      <div class="carousel-caption">
       ...
      </div>
    </div>
   
  </div>
  
  

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>

</div>



<div class="container" style="padding-left:0px;padding-right:0px;padding:15px;">
<div class="row" >
  <div class="col-lg-12 col-md-12">
  <h4 style=""><b>Offerings</b></h4>
  <p>Hitachi Systems Micro Clinic is a leading IT products and services provider. We plan, design and execute organizational IT strategies and manage mission-critical IT infrastructure for global clients across verticals including government, PSUs, BFSI, healthcare, hospitality, education, IT/ITES, and manufacturing and retail. We help clients extract maximum value from IT investments by leveraging our wealth of industrial and technical knowledge. At Hitachi Systems Micro Clinic, we ensure that the IT products and services delivered to our clients are reliable, cost effective and cutting-edge.</p>
  <p>For more information on our range of enterprise IT products and services, you may visit the dedicated pages given below. Or if you already know your requirements, you can Contact Us to discuss them in detail.</p>


      
    
  </div>
</div>
</div>


<div class="container" style="padding-left:0px;padding-right:0px;padding-top:15px;">
<div class="row" style="padding:3px;" >
  <div class="col-xs-6" style="background-color:#F1F1F1;">
	 
	  <div class="col-xs-5" style="background-color:#F1F1F1;padding-left:0px;"><img src="//cdn.hitachi-systems-mc.com/assets/media/offerings/p1.jpg" class="img-responsive " alt="Responsive image"></div>
	  
	  
	  <a href="#"><h4>Information Infrastructure ></h4></a>
	  <p style="margin-top:10px;">Build and manage a highly available and reliable information infrastructure that helps you realize mission-critical IT investments.</p>
	  
	  
	  
   </div>
  
  <div class="col-xs-6" style="border-left:20px solid white;background-color:#F1F1F1;">
	 
	  <div class="col-xs-5" style="background-color:#F1F1F1;padding-left:0px;"><img src="//cdn.hitachi-systems-mc.com/assets/media/offerings/p3.jpg" class="img-responsive " alt="Responsive image"></div>
	  
	  
	  <a href="#"><h4>Information Networking ></h4></a>
	  <p style="margin-top:10px;">Hitachi Systems Micro Clinic provides intelligent information networking solutions to help you simplify and streamline your computing environment.</p></br>
	  
	  
	  
   </div>
</div>
</div>

<div class="container" style="padding-left:0px;padding-right:0px;padding-top:15px;">
<div class="row" style="padding:3px;">
  <div class="col-xs-6" style="background-color:#F1F1F1;">
	  
	  <div class="col-xs-5" style="background-color:#F1F1F1;padding-left:0px;"><img src="//cdn.hitachi-systems-mc.com/assets/media/offerings/p2.jpg" class="img-responsive " alt="Responsive image"></div>
	  
	  
	  <a href="#"><h4>Information Availability ></h4></a>
	  <p style="margin-top:10px;">Leverage our information availability capabilities to gain continuous access to critical enterprise data when and where it is needed.</p>
	  
	  
	  
   </div>
  
  <div class="col-xs-6" style="border-left:20px solid white;background-color:#F1F1F1;" >
	 
	  <div class="col-xs-5" style="background-color:#F1F1F1;padding-left:0px;"><img src="//cdn.hitachi-systems-mc.com/assets/media/offerings/p4.jpg" class="img-responsive " alt="Responsive image"></div>
	  
	  
	  <a href="#"><h4>Information Security ></h4></a>
	  <p style="margin-top:10px;">Protect critical network security assets and adhere to compliance with cutting-edge information security solutions from Hitachi Systems Micro Clinic.</p>
	  
	  
	  
   </div>
</div>
</div>












  
  









<div class="container">
<div class="row" style="margin:10px;">

<div class="col-lg-12 col-md-12">
    


</div>

</div>
</div>









<?php include('footer.php');?>


    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./index_files/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./index_files/ie10-viewport-bug-workaround.js"></script>
  

<div id="global-zeroclipboard-html-bridge" class="global-zeroclipboard-container" title="" style="position: absolute; left: 0px; top: -9999px; width: 15px; height: 15px; z-index: 999999999;" data-original-title="Copy to clipboard">      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" width="100%" height="100%">         <param name="movie" value="/assets/flash/ZeroClipboard.swf?noCache=1444028580105">         <param name="allowScriptAccess" value="sameDomain">         <param name="scale" value="exactfit">         <param name="loop" value="false">         <param name="menu" value="false">         <param name="quality" value="best">         <param name="bgcolor" value="#ffffff">         <param name="wmode" value="transparent">         <param name="flashvars" value="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com">         <embed src="/assets/flash/ZeroClipboard.swf?noCache=1444028580105" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="100%" height="100%" name="global-zeroclipboard-flash-bridge" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com" scale="exactfit">                </object></div><svg xmlns="http://www.w3.org/2000/svg" width="1140" height="500" viewBox="0 0 1140 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="57" style="font-weight:bold;font-size:57pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thirdslide</text></svg></body></html>