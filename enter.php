<?php 

include ('user.php');

if($username!=''){
	header("location:start.php");
 
}



$msg = '';
if(isset($_GET['msg'])){
	if($_GET['msg']=="regsuccess"){
		$msg = "You have register successfully,  login to continue .";
	}
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
		});

		var flag ="y";

		function checkusername(){
			var username1 = $('#signinuser').val();
			console.log(username1);
			$('#unavalible').html("");

			$.post("usercheck.php",{username:username1},function(result){
				console.log(result);
				if(result==1){
					flag="n";
					console.log(flag);
					$('#unavalible').html("username already taken");
				}
				else{
					flag='y';
				}
			});
		}

		function submitcheck(){
			if(flag=="n"){
				return false;
			}
		}


		function login(){
			var user = $('#user').val();
			var pass = $('#pass').val();
			$('#loginerror').html();
			$.post("loginbackend.php",{username:user,password:pass},function(result){
				console.log(result);
				if(result==1){
					window.location="index.php";
				}
				else{
					$('#loginerror').html("invalid username or password");
				}
			});
		}


	</script>
</head>
<body class="red darken-1">
	<div class="navbar-fixed">
		<nav>
	    <div class="nav-wrapper light-blue lighten-1 indigo-text text-lighten-5">
	      <a href="index.php" class="brand-logo center">Learn Subtraction</a>
	      <a href="#" data-activates="sidebar " class="side button-collapse show-on-large"><i class="fa fa-bars pad10" aria-hidden="true"></i></a>
	      
	      <ul class="side-nav" id="sidebar">
	        <li><a href="index.php">Home</a></li>
    	  	<li><a href="start.php">Start</a></li>
	        <li><a href="countpage.php">Count It</a></li>
	        <li><a href="greaterpage.php"> Find Greater</a></li>
	        <li><a href="subpage.php">Basics of Subtraction</a></li>
	        <li><a href="subgamepage.php">Basic Subtraction Test</a></li>
	         <li><a href="twodigitsubpage.php">Basics of two digit Subtraction</a></li>
	        <li><a href="twodigitsubgamepage.php">Two digit Subtraction Test</a></li>
	       
	      </ul>
	    </div>
	  </nav>
    </div> 
    <div class="alldata ">
	    <div class="container center-align ">
	    <div class="holder z-depth-3 white">
	    	<div class="buttons blue lighten-3">
	    	
	    		<ul class="tabs blue lighten-5">
	    			<li class="tab col s6"><a href="#login">Login</a></li>
	    			<li class="tab col s6"><a href="#signup">Register</a></li>

	    		</ul>
	    	
	    	</div>
	    	<div class="info">

	    		<div id="login">
	    		<br>
	    			<h5 class="blue-text"> Welcome to LearnSub</h5>
	    		<br>
	    		<div class="green-text"><?php echo $msg;?></div>
	    		<br>
	    			<div class="input-field col s6 left-align">
			          <i class="fa fa-user prefix" aria-hidden="true"></i>
			          <input id="user" type="text" class="validate">
			          <label for="user">Username</label>
			        </div>
			        <div class="input-field col s6 left-align">
			          <i class="fa fa-lock prefix" aria-hidden="true"></i>
			          <input id="pass" type="password" class="validate">
			          <label for="pass">Password</label>
			        </div>

			        <br><div id="loginerror" class="red-text"></div>
			        <br>

			        <button class="btn waves-effect waves-light "  name="action" onclick="login()">Login</button>
	    		</div>
	    		<div id="signup">
		    		<br>
		    		<form  action="signupbackend.php" method="POST" onsubmit="return submitcheck();">
		    			<h5 class="blue-text"> Welcome to LearnSub</h5>
		    			<br><br>
		    			<div class="input-field col s6 left-align">
				          <i class="fa fa-user prefix" aria-hidden="true"></i>
				          <input id="signinname" type="text" class="validate" name="name" required>
				          <label for="signinname">Your Name</label>
				        </div>
		    			<div class="input-field col s6 left-align">
				          <i class="fa fa-user prefix" aria-hidden="true" ></i>
				          <input id="signinuser" type="text" class="validate" name = "username" required onblur="checkusername()">
				          <label for="signinuser">Choose Username(e.g John123)</label>
				          
				        </div>
				        <div id="unavalible" class="red-text"></div>

				        <div class="input-field col s6 left-align">
				          <i class="fa fa-lock prefix" aria-hidden="true" ></i>
				          <input id="signinpass" type="password" class="validate" name="pass" required>
				          <label for="signinpass">Choose Password</label>
				        </div>
				        <br><br>

				        <button class="btn waves-effect waves-light "  name="action">Register</button>
				    </form>    
	    		</div>

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