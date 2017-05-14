<?php 
include ('user.php');

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
	<link rel="stylesheet" href="css/hover.css">
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
<body">
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
	    	<br><br>
	    	<div class="section center-align">	
	    		
	    		<h3 class="blue-text">Welcome to learn subtraction.</h3>

	    		<h4 class="orange-text">Lets start learning.</h4>
	    	</div>

	    </div>
	    <br><br><br><br>
	    <div class="mycontainer center-align ">
	    	<div class="row center-align">
	    		<div class="col m3 center-align">
	    			<a href="basiccountpage.php">
	    			<button class="btn waves-effect waves-light mybtn light-blue lighten-1 hvr-float">
	    				<i class="fa fa-cogs" aria-hidden="true"></i><br>
	    			Count It
	    			</button></a>
	    			<p class="light">Step-1</p>
	    			<?php
	    				if($count=='y'){
	    					echo "<p class='green-text'><i class='fa fa-check'></i> Completed </p>";
	    				}
	    			?>

	    		</div>
	    		<div class="col m3 center-align">
	    			<a href="basicgreaterpage.php">
	    			<button class="btn waves-effect waves-light mybtn  orange hvr-float">
	    				<i class="fa fa-question-circle-o"  aria-hidden="true"></i><br>
	    			Find Greater
	    			</button></a>
	    			<p class="light">Step-2</p>
	    			<?php
	    				if($greater=='y'){
	    					echo "<p class='green-text'><i class='fa fa-check'></i> Completed </p>";
	    				}
	    			?>
	    		</div>
	    		<div class="col m3 center-align">
	    			<a href="subpage.php">
	    			<button class="btn waves-effect waves-light mybtn red hvr-float">
	    				<i class="fa fa-code" aria-hidden="true"></i><br>
	    			Basic Subtraction
	    			</button></a>
	    			<p class="light">Step-3</p>
	    			<?php
	    				if($sub=='y'){
	    					echo "<p class='green-text'><i class='fa fa-check'></i> Completed </p>";
	    				}
	    			?>
	    		</div>
	    		<div class="col m3 center-align">
	    			<a href="twodigitsubpage.php">
	    			<button class="btn waves-effect waves-light mybtn yellow darken-2 hvr-float">
	    				<i class="fa fa-flash" aria-hidden="true"></i><br>
	    			Two digit Subtraction
	    			</button></a>
	    			<p class="light">Step-4</p>
	    			<?php
	    				if($twosub=='y'){
	    					echo "<p class='green-text'><i class='fa fa-check'></i> Completed </p>";
	    				}
	    			?>
	    		</div>
	    	</div>
	    </div>
		<br><br><br><br>
	</div>








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