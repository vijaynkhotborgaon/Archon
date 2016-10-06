<!DOCTYPE html>

<?php 
session_start();

?>

<!-- saved from url=(0039)http://getbootstrap.com/examples/theme/ -->
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>
window.setInterval(function() {
$('#blinkText').toggle();
}, 3000);

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

<div class="container" style="padding:0px;">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin:0 auto;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img  src="http://cdn.hitachi-systems-mc.com/assets/media/homehero/back_noc_baner.png" alt="..." style="margin: 0 auto;" class="img-responsive center-block">
      <div class="carousel-caption">
       ...
      </div>
    </div>
    <div class="item">
      <img src="http://cdn.hitachi-systems-mc.com/assets/media/homehero/banner_employ.png" alt="..." style="margin: 0 auto;" class="img-responsive center-block">
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



<div class="container" style="background-color:#F1F1F1;">
<div class="row" style="margin:7px;">

<div class="col-lg-12 col-md-12">
    
<p><span class="glyphicon glyphicon-phone-alt"></span> +(91) -11- 49250700 / +(91) -11- 49250723 &nbsp;&nbsp;&nbsp;
          <span class="glyphicon glyphicon-envelope"></span>
         someone@archonit.com</p>

</div>

</div>
</div>



<div class="container" style="padding:0px;">
<div class="row" style="margin:10px;">

<div class="col-lg-12 col-md-12">
    
<a href="#" class="btn btn-success btn-xs">News/Events <span class="glyphicon glyphicon-play"></span> </a><span id="blinkText">&nbsp;&nbsp;&nbsp;Date here<a href="#" style="text-decoration:none;">&nbsp;Event link here</a></span>

</div>

</div>
</div>







<div class="container" style="background-color:#F1F1F1;padding-left:0px;padding-right:0px;padding-top:15px;">
<div class="row">
  <div class="col-lg-3 col-md-4">
    <div class="thumbnail">
      <img src="http://cdn.hitachi-systems-mc.com/assets/media/who-we-are.jpg" alt="...">
      <div class="caption">
        <h4>About Us</h4>
        <p>Located in the technological hub of Bangalore, Archon Consulting is a privately-owned IT Infrastructure services company.</p>
        <p><a href="#" class="btn btn-primary" role="button">Read More</a> </p>
      </div>
    </div>
  </div>
  
  <div class="col-lg-3 col-md-4">
    <div class="thumbnail">
      <img src="http://cdn.hitachi-systems-mc.com/assets/media/products-services.jpg" alt="...">
      <div class="caption">
        <h4>Information Services</h4>
        <p>Located in the technological hub of Bangalore, Archon Consulting is a privately-owned IT Infrastructure services company.</p>
        <p><a href="#" class="btn btn-primary" role="button">Read More</a> </p>
      </div>
    </div>
  </div>
  
  <div class="col-lg-3 col-md-4">
    <div class="thumbnail">
      <img src="http://cdn.hitachi-systems-mc.com/assets/media/corporate-social-responsibility.jpg" alt="...">
      <div class="caption">
        <h4>Corporate Responsibility</h4>
        <p>Located in the technological hub of Bangalore, Archon Consulting is a privately-owned IT Infrastructure services company.</p>
        <p><a href="#" class="btn btn-primary" role="button">Read More</a> </p>
      </div>
    </div>
  </div>
  
  <div class="col-lg-3 col-md-4">
    <div class="thumbnail">
      <img src="http://cdn.hitachi-systems-mc.com/assets/media/career.jpg" alt="...">
      <div class="caption">
        <h4>Join Our Team</h4>
        <p>Located in the technological hub of Bangalore, Archon Consulting is a privately-owned IT Infrastructure services company.</p>
        <p><a href="#" class="btn btn-primary" role="button">Read More</a> </p>
      </div>
    </div>
  </div>
</div>
</div>


<div class="container">
<div class="row" style="margin:10px;">

<div class="col-lg-12 col-md-12">
    


</div>

</div>
</div>





<div class="container">
<div class="row" style="margin:10px;">

<div class="col-lg-12 col-md-12">
    


</div>

</div>
</div>


<div class="container" style="background-color:#F1F1F1;padding-left:0px;padding-right:0px;padding:15px;">
<?php
if(isset($_SESSION['COMLEADMSG']) && $_SESSION['COMLEADMSG']==1 ) {
?>
<div id="system-message">
<div class="alert alert-message" style="background-color:#BDBDBD;">
<p style="color:green;"><b><i>Your message has been sent.</i></b></p>
</div>
</div>	
<?php
unset($_SESSION['COMLEADMSG']);
}
?>
<div class="row" >
  <div class="col-lg-12 col-md-12">
  <h4 style="">Start Conversation</h4>
<form data-toggle="validator" role="form" action="form_validation_conversation.php" method="post" enctype="multipart/form-data">
  <div class="form-group has-feedback">
    
	
    <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" required>
	<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  </div>
  
  
   <div class="form-group has-feedback">
    
    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" data-error="Bruh, that email address is invalid" required>
	<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    <div class="help-block with-errors"></div>
  </div>
  
  
  
  
  
  
  <div class="form-group has-feedback">
   
  
     
	   <textarea class="form-control"  pattern="^[_A-z0-9]{1,}$" rows="4" name="message" placeholder="Message" wrap="hard" id="message"  required></textarea>
  
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    
  </div>
 
 
  
  
 
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
	




      
    
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
  

</body></html>