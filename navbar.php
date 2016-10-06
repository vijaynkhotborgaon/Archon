<?php 
 $actual_link = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
 $end = end(explode('/', $actual_link));
 
?>






<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li class="dropdown <?php if(($end=='index.php')||($end=='about_us.php') ||($end=='leadership.php') ||($end=='mission.php')){?>active<?php }?>">
          <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Home</b> <span class="caret"></span></a>
          <div class="dropdown">
           <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
           
            <li><a href="about_us.php">About Us</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="leadership.php">Leadership</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="mission.php">Mission Vision Values</a></li>
          </ul>
		  </div>
        </li>
		
		<li class="dropdown <?php if(($end=='products.php')||($end=='routing.php') ||($end=='wireless.php') ||($end=='network_security.php')||($end=='application_security.php')||($end=='management.php')){?>active<?php }?>">
		<a href="products.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Products</b> <span class="caret"></span></a>
		 <div class="dropdown" >
            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                <li><a href="server_storage.php">Server Storage</a></li>
				 <li role="separator" class="divider"></li>
               
                <li class="dropdown-submenu">
                    <a tabindex="-1" href="#">Networking</a>
					<hr style="width: 100%; color: black; background-color:#E5E5E5;margin-top:10px;" />
					
					
                    <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="routing.php">Routing & Switching</a></li>
						 <li role="separator" class="divider"></li>
						 
                      <li><a href="wireless.php">Wireless</a></li>
					   <li role="separator" class="divider"></li>
                        <li><a href="network_security.php">Network Security</a></li>
						 <li role="separator" class="divider"></li>
						<li><a href="application_security.php">Application Delivery Controllers</a></li>
						 <li role="separator" class="divider"></li>
						<li><a href="management.php">Management</a></li>
						
                    </ul>
                </li>
				<li><a href="enterprise_software.php">Enterprise Software</a></li>
				 <li role="separator" class="divider"></li>
				<li><a href="access.php">Access</a></li>
                
            </ul>
        </div>
		</li>
  <li role="presentation" class="<?php if($end=='services.php'){?>active<?php }?>"><a href="services.php"><b>Services</b></a></li>
  
  <li role="presentation"><a href="solutions.php">Solutions</a></li>
  <li role="presentation"><a href="case_studies.php">Case Studies</a></li>
  <li role="presentation"><a href="our_clients.php">Client Corner</a></li>
   <li role="presentation" class="<?php if($end=='contact_us.php'){?>active<?php }?>"><a href="contact_us.php"><b>Contact Us</b></a></li>
      
	  
	  
	  
	  
	  
	  
	  
	  </ul>
    
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
