<?php
session_start();

?>



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
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	
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

 
<div class="container">
<div class="row" style="margin:10px;">

<div class="col-lg-12 col-md-12">
    


</div>

</div>
</div>



<div class="container" style="background-color:#F1F1F1;padding:0px;">
<div class="row" style="padding:0px;">

<div class="col-lg-12 col-md-12">
    
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.9074032481567!2d77.64016891435377!3d12.977774018255298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16af7efea401%3A0xef76e9e09f00867a!2sArchon+Consulting+Systems+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1444374193141" width="1170" height="200" frameborder="0" style="border:0; margin-left:0px;" allowfullscreen></iframe>
</div>

</div>
</div>

<div class="container" style="padding-left:0px;padding-top:5px;">
<div class="row" style="">
  <div class="col-xs-12">
	 <h4><b>Contact Us</b></h4>
	 
   </div>
  
 
</div>
</div>

<div class="container" style="padding-left:0px;padding-top:5px;">
<div class="row" style="">
  <div class="col-xs-12">
	 <p>Are you looking for a technology partner who can help you design / deploy & manage your entire requirement of IT Infrastructure?</p>
	 <p>Thank you for showing interest in our services. Write to us on the enquiry form. We look forward to your suggestions and feedback.</p>
	 
   </div>
  
 
</div>
</div>



<div class="container" style="padding-left:0px;padding-right:0px;padding-top:15px;">

<?php
if(isset($_SESSION['COMLEADMSG']) && $_SESSION['COMLEADMSG']==1 ) {
?>
<div id="system-message">
<div class="alert alert-message" style="background-color:#BDBDBD;">
<p style="color:green;"><b><i>Your enquiry form has been submitted.</i></b></p>
</div>
</div>	
<?php
unset($_SESSION['COMLEADMSG']);
}
?>






<div class="row">
  <div class="col-md-6">
  <h4 style="">Enquiry Form</h4>



<form data-toggle="validator" role="form" action="enquiry_form_process.php" method="post" enctype="multipart/form-data">
  <div class="form-group has-feedback">
    
	
    <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" required>
	<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  </div>
  
  
   <div class="form-group has-feedback">
    
    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email Address" data-error="Bruh, that email address is invalid" required>
	<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    <div class="help-block with-errors"></div>
  </div>
  
   <div class="form-group has-feedback">
    
	
    <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="Phone" pattern="[0-9]{10}" required>
	<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  </div>
  
   <div class="form-group has-feedback">
    
	
    <input type="text" class="form-control" id="inputOrg" name="org" placeholder="Company/Organization" required>
	<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  </div>
  
  
  
  
  
  
  <div class="form-group has-feedback">
   
  
     
	   <textarea class="form-control"  pattern="^[_A-z0-9]{1,}$" rows="4" name="message" placeholder="Message" wrap="hard" id="message"  required></textarea>
  
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    
  </div>
 
 
  
  
 
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Send</button>
  </div>
</form>
	

  
  
  
  </div>
  <div class="col-md-6" style="background-color:#F1F1F1;padding:0px;">
  
   <img src="//cdn.hitachi-systems-mc.com/assets/media/banner_contact_small.jpg" class="img-responsive " alt="Responsive image" style="width:100%;height:auto;">
   <h5 style="margin:10px;"><I>You can contact us :</I><h5>
   <h4 style="margin:10px;">Archon Consulting Systems Pvt Ltd</h4>
   <p style="line-height: 70%;margin:10px;">#675, 1st Floor, 9th A Main, </p>
   <p style="line-height: 70%;margin:10px;">Old Syndicate Bank Road, Indiranagar, Bangalore – 560038</p>
   <p style="line-height: 70%;margin:10px;">Phone: 080-42229840</p>
   <p style="line-height: 70%;margin:10px;">Facsimile: 080-42229843</p>
   <p style="line-height: 70%;margin:10px;">Mail: sales@archonit.in / info@archonit.in<p>
  
  
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