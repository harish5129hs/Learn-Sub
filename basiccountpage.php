<?<?php 
include("user.php");


if($username==''){
	header("location:enter.php");
 
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Learn Sutraction</title>
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	
	<script src="js/jquery.js" type="text/javascript" ></script>
	<script src="materialize/js/materialize.min.js" type="text/javascript"></script>

	<script type="text/javascript">

		$(document).ready(function(){
			$(".side").sideNav();
			$('.carousel.carousel-slider').carousel({full_width: true,indicators:true});
		});

	</script>
</head>
<body class="grey lighten-5">
	<div class="navbar-fixed">
		<nav>
	    <div class="nav-wrapper light-blue lighten-1 indigo-text text-lighten-5">
	      <a href="index.php" class="brand-logo center">Learn Subtraction</a>
	      <a href="#" data-activates="sidebar " class="side button-collapse show-on-large"><i class="fa fa-bars pad10" aria-hidden="true"></i></a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
	      	<li><i class="fa fa-user" aria-hidden="true"></i> Hello <?php echo $name ;?></li>
	        <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
	        
	      </ul>
    	  <ul class="side-nav" id="sidebar">
	        <li><a href="index.php">Home</a></li>
    	  	<li><a href="start.php">Start</a></li>
	        <li><a href="basiccountpage.php">Basics of Counting</a></li>
	        <li><a href="countpage.php">Count It</a></li>
	        <li><a href="basicgreaterpage.php">Basics of Find greater</a></li>
	        <li><a href="greaterpage.php"> Find Greater</a></li>
	        <li><a href="subpage.php">Basics of Subtraction</a></li>
	        <li><a href="subgamepage.php">Basic Subtraction Test</a></li>
	         <li><a href="twodigitsubpage.php">Basics of two digit Subtraction</a></li>
	        <li><a href="twodigitsubgamepage.php">Two digit Subtraction Test</a></li>
	        <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
	       </ul>
	    </div>
	  </nav>
    </div> 
    <div class="alldata ">
	    <div class="container">
	    	
	    	<div class="section center-align">	
	    		<br><br>
	    		<h4 class="blue-text">Welcome to learn subtraction.</h4>
	    		<br>

	    		<h5 class="orange-text darken-3"><strong>Basics of counting </strong>: Lets learn about numbers .</h5>
	    	</div>

	    </div>
	    <br><br>
	    <div class="margin8p center-align">
	    	<div class=" z-depth-2 white">

	    		<nav>
				    <div class="nav-wrapper">
				      <a href="#" class=" center">Learn the Numbers</a>
				      <ul id="nav-mobile" class="right">
				      	<li><a href="countpage.php" class=" waves-light waves-effect">
				      		 Continue To Numbers Test 	</a></li>
				        
						
				      </ul>
				    </div>
			 	 </nav>
	    		<br>
	    		
	    		<div class="contentofsub">
	    			<br><br>
	    			<h4 class="blue-text">Basics of Numbers </h4>

	    			<br><br>
	    			<h5 class="orange-text text-darken-4">Lets learn counting and numbers.<br>
	    			So are you ready to learn the dose of numbers</h5>

	    			
	    			<br><br>

	    			
	    			<img src="images/no1.png " class="responsive-img">
	    			<br><br>
	    			<img src="images/no2.png " class="responsive-img">
	    			<br><br>
	    			<img src="images/no3.png " class="responsive-img">
	    			<br><br>
	    			<img src="images/no4.png " class="responsive-img">
	    			<br><br>
	    			<img src="images/no5.png " class="responsive-img">
	    			<br><br>
	    			<img src="images/no6.png " class="responsive-img">
	    			<br><br>
	    			<img src="images/no7.png " class="responsive-img">
	    			<br><br>
	    			<img src="images/no8.png " class="responsive-img">
	    			<br><br>
	    			<img src="images/no9.png " class="responsive-img">
	    			<br><br>
	    			
	    			<br>
	    			<div class="video">
		    			<p class="light">
		    			Here is a video for your learning.
		    			</p>
		    			
		    			<video class="responsive-video" controls>
					   		 <source src="videos/count.mp4" type="video/mp4">
					 	</video>
					</div> 
					<br><br>
					<a href="countpage.php"><button class="btn waves-effect waves-light orange btn-large"  >Continue to Counting Test</button></a>	

					<br><br><br><br>
	    		</div>
	    			
	    </div>
	</div>

	<br><br><br>

	

 






	<footer class="page-footer ">
          <div class="container">
            <div class="row">
              <div class="col m6">
                <h5 class="white-text">Learn Subtraction</h5>
                <p class="grey-text text-lighten-4">A basic tool for learning Subtarction.</p>
              </div>
              <div class="col m4 offset-m2">
                <h5 class="white-text">Developed by :</h5>
                	<ul class="grey-text text-lighten-4">
                		<li><h6>Harish</h6></li>
                		<li><i class="fa fa-envelope" aria-hidden="true"></i> harishsaini739@gmail.com</li>
                	</ul>
                	
              </div>
            </div>

            </div>
            <div class=" section center-align pink accent-3 grey-text text-lighten-4">
            	
            built with <i class="fa fa-heart" aria-hidden="true"></i> for <i class="fa fa-google" aria-hidden="true"></i>
            
            </div>
           
            
          
          <div class="footer-copyright pink accent-4">
            <div class="container center-align grey-text text-lighten-4">
            © 2016 harish
            
            </div>
          </div>
    </footer>
        

	
</body>
</html>