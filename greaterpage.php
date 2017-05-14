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

		var total=0 , correct =0 , incorrect=0,num1,num2;
		
		$(document).ready(function(){
			$("#maingame").hide();
			$('#report').hide();
			$(".side").sideNav();
		    $('.modal-trigger').leanModal();
 			
		    //function for btn click
 			$('.mybtn2').on('click',function(){

 				var val = $(this).val();
 				console.log(val);
 				if(val=='one'){
	 					if(num1>num2){
						correctanswer();
						total++;
						correct++;
						$('#totalscore').html(total);
						$('#correctscore').html(correct);
					}
					else{
						incorrectanswer("You said "+num1+" is greater than "+num2);
						total++;
						incorrect++;
						$('#totalscore').html(total);
						$('#incorrectscore').html(incorrect)
					}
 				}
 				else{
 					if(val=='two'){
	 						if(num1<num2){
							correctanswer();
							total++;
							correct++;
							$('#totalscore').html(total);
							$('#correctscore').html(correct);
						}
						else{
							incorrectanswer("You said "+num2+" is greater than "+num1);
							total++;
							incorrect++;
							$('#totalscore').html(total);
							$('#incorrectscore').html(incorrect)
						}

 					}
 					else{
 						if(val=='eq'){
	 							if(num1==num2){
								correctanswer();
								total++;
								correct++;
								$('#totalscore').html(total);
								$('#correctscore').html(correct);
							}
							else{
								incorrectanswer("You said "+num1+" is equal to  "+num2);
								total++;
								incorrect++;
								$('#totalscore').html(total);
								$('#incorrectscore').html(incorrect)
							}
 						}
 					}
 				}
				

				if(total==8){
					gameends();
				}else{
				
				start();
				}
			
 			});
		});


		function correctanswer(){
			var audio = document.getElementById("audpass");
			audio.play();
			$('#correct').openModal();
		}

		function  incorrectanswer(useranswer) {
			var msg1 = "Please correct your mistake , and let's solve next question.";
			
			$('.mymsg').html(msg1);
			$('#usranswer').html(useranswer);
			
			var imgid = "images/no"+num1+".png";
			var imgsrc = "<img src='"+imgid+"' height='110px'>";
			$('#image1').html(imgsrc);

			var imgid = "images/no"+num2+".png";
			var imgsrc = "<img src='"+imgid+"' height='110px'>";
			$('#image2').html(imgsrc);

			if(num1==num2){
				$("#sign").html("=");
			}
			if(num1>num2){
				$("#sign").html(">");
			}
			if(num1<num2){
				$("#sign").html("<");
			}
			
			if((incorrect-correct)>0){
				$('.mymsg').html("You are not going great , let's revist tutorial.");
				$('.wrongclose').hide();
			}
			var audio1 = document.getElementById("audfail");
			audio1.play();
			$('#incorrect').openModal();
		}

		function startbtn(){
			$('#startbtn').hide();

			$("#maingame").fadeIn(500);
			start();
		}

		function start(){
			$('#btn1').html('');
			$('#btn2').html('');
			num1 = Math.floor((Math.random() * 9) + 1);
			num2 = Math.floor((Math.random() * 9) + 1);
			$('#btn1').html(num1);
			$('#btn2').html(num2);
			
			
		}

		

		function reset(){
			total=0;
			correct=0;
			incorrect=0;
			$('#totalscore').html(total);
			$('#incorrectscore').html(incorrect);
			$('#correctscore').html(correct);
			$('#report').hide();
			$('#gamescore').show();
			start();
		}

		function gameends(){
			$('#gamescore').hide();
			$('#totalscorerep').html(total);
			$('#incorrectscorerep').html(incorrect);
			$('#correctscorerep').html(correct);
			$('#report').show();
			var msgrep;
			if(correct>=5){
				$('#failtest').hide();
				$('.reportmsg').addClass("green-text");
				$.post("complete.php",{type:'great'},function(result){
					console.log(result);
				
				});
				
				if(correct>=7){
					msgrep="Your score was  excellent . <br><br> Well done!! .";
				}
				else{
					msgrep="Your score was  good . <br><br> Keep it up. ";
				}
			}
			else{
				$('.reportmsg').addClass("red-text");
				$('#successtest').hide();
				msgrep="You were unable to clear the test , <br><br>please practice more .";
			}

			$('.reportmsg').html(msgrep);
		}

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

	    		<h5 class="orange-text darken-3"><strong>Find Greater </strong>: Lets test your comparision skills and knowledge of numbers.</h5>
	    	</div>

	    </div>
	    <br><br>
	    <div class="margin8p center-align">
	    	<div class=" z-depth-2 white">

	    		<nav>
				    <div class="nav-wrapper">
				      <a href="#" class=" center">Greater Number</a>
				      <ul id="nav-mobile" class="right">
				      	<li><a class=" waves-light waves-effect" id="resetbtn" onclick="reset();">
				      		<strong><i class="fa fa-refresh " aria-hidden="true"></i> Reset</strong>
				      	</a></li>
				        <li><a  class="waves-light waves-effect modal-trigger" id="instructionbtn" href ="#help">
				        	<strong><i class="fa fa-info-circle " aria-hidden="true"></i> How to play</strong>
				        </a></li>
						
				      </ul>
				    </div>
			 	 </nav>
	    		<br>
	    		<div class="row flex section" id="gamescore">
	    			<div class="col s12 m9 borderright">
	    				<br>
	    				
	    				<div id="game" class="margin2p">
	    					<div id="startbtn">
	    					<br>
	    						<div class="contentofstart ">
	    							<h4 class="blue-text">Greater Number</h4>
	    							<br>
	    							<ul>
	    								<li>This is a test to check your Knowledge of numbers.</li>
	    							
	    							<li>You have to select the greater numberof given two.</li>
	    							
	    							<li>There will be 12 tries and to pass you have to get 8 correct.</li>
	    							</ul>
	    						</div>
	    						<br>
	    						<br>
	    						<button class="btn waves-effect waves-light orange btn-large hvr-float" onclick="startbtn();" >Start</button>
	    					</div>
	    					<div id="maingame">
	    						<h4 class="blue-text">Greater Number</h4>
	    						<br>
	    						<br>
	    						<br>
		    					
		    					<div class="row">
			    					<div class="col s12 m4" >
			    						<button class="btn waves-light waves-effect mybtn2 orange darken-3 hvr-float" id="btn1" value="one" ></button>
			    					</div>
			    					<div class="col s12 m4" >
			    						<button class="btn waves-light waves-effect mybtn2 yellow darken-2 hvr-float" id="btn2" value="two">
			    							
			    						</button>
			    					</div>
			    					<div class="col s12 m4" >
			    						<button class="btn waves-light waves-effect mybtn2 blue lighten-1 equalbtn hvr-float" id="equalbtn" value="eq" >Equal</button>
			    					</div>
		    					</div>
		    					<br>
		    					<p class="light green-text">Choose the the greater number</p>
							       


		    				</div>	
	    				</div>
	    			</div>
	    			<div class="col s12 m3 ">
	    				<h5 class="orange-text darken-3">Scores</h5>

	    				<div class="divider"></div>
	    				<br><br>
	    				<div class="section blue-text dar">
	    					
	    					
	    					<h5>
				          		 <span id="totalscore">0</span>/8
				           </h5><h6><i class="fa fa-dashboard " aria-hidden="true"></i> Total Attempts</h6>
				        </div>

				        
				        <div class="section green-text">
	    					
	    					
	    					<h5>
				          		 <span id="correctscore">0</span>
				           </h5>
				           <h6><i class="fa fa-check " aria-hidden="true"></i> Correct</h6>
				        </div>

				        
				        <div class="section red-text">
	    					
	    					
	    					<h5>
				          		 <span id="incorrectscore">0</span>
				           </h5>
				           <h6><i class="fa fa-close " aria-hidden="true"></i> Incorrect</h6>
				        </div>

				        


	    			</div>
	    		</div>
	    		<!-- gamescore ends -->

	    		<!-- report div starts -->
	    		<div id="report" class="center-align container">
	    				<br><br>
	    				<h4 class="blue-text text-darken-3 center-align"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Your Report</h4>
	    				<br><br>

	    				<h5 class="green-text">Scores</h5>
	    				<br>
	    				<div class="row scorereport">
	    					<div class="col s4 blue-text section">
	    						<h5>
				          		 <span id="totalscorerep">0</span>
				           		</h5>
				           		<h6><i class="fa fa-dashboard " aria-hidden="true"></i> Total</h6>

	    					</div>
	    					<div class="col s4 section green-text">
	    					
	    					
		    					<h5>
					          		 <span id="correctscorerep">0</span>
					           </h5>
					           <h6><i class="fa fa-check " aria-hidden="true"></i> Correct</h6>
				        	</div>
				        	<div class=" col s4 section red-text">
	    					
		    					
			    					<h5>
						          		 <span id="incorrectscorerep">0</span>
						           </h5>
						           <h6><i class="fa fa-close " aria-hidden="true"></i> Incorrect</h6>
					        </div>

	    				</div>

	    				<br><br><br><br>
	    				<h5 class="reportmsg"></h5>
	    				<br><br><br>
	    				<p class="light green-text">If you want to give test again , hit reset button.</p>
	    				<br>
	    				<br>
	    				<div class="row" id="successtest">
			    			<div class="col s6">
			    				<p class="light">Want to learn more properly ,<br> then revisit tutorial</p>
			    				<a href="basicgreaterpage.php">
			    					<button class="btn waves-effect waves-light orange lighten-2  hvr-float btn-large"  ><i class="fa fa-refresh" aria-hidden="true"></i> Revisit Tutorial</button>
			    				</a>
			    			</div>
		    			
			    			<div class="col s6">
				    				<p class="light">Happy with your performance ,<br> continue to our next test</p>
				    				<a href="start.php">
				    					<button class="btn waves-effect waves-light blue darken-2 hvr-float btn-large"  ><i class="fa fa-check" aria-hidden="true"></i> Finish Test</button>
				    				</a>
				    		</div>	
				    	</div>	

				    	<div id="failtest">
				    		<p class="red-text">Please revisit the tutorial ,<br> and learn properly.</p>
				    		<a href="basicgreaterpage.php">
			    					<button class="btn waves-effect waves-light orange darken-2  hvr-float btn-large"  ><i class="fa fa-refresh" aria-hidden="true"></i> Revisit Tutorial</button>
			    			</a>
				    	</div>
				    	<br>
				    	<br>
				    	<br>
	    			</div>
	    			<!-- report div ends -->
	    	</div>
	    </div>
	</div>

	<br><br><br>

	

  <div id="help" class="modal ">
	    <div class="modal-content">
	      <h4 class="blue-text">Instructions</h4>
	      <p>You have to tell which number is greater .<br>
	      	Just click the btn with greater number.
	      </p>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
	    </div>
  </div>

    <div id="correct" class="modal smallmodal center-align">
	    <div class="modal-content">
	      <h4 class="green-text"><i class="fa fa-check"></i> Correct answer</h4>
	      
	      <br>
	      
	      <img src ="images/correct.jpg"  height="150px" >

	      <h5 class="blue-text">Well done!!</h5>
	      <p>
	      	Your answer was correct.<br>
	      	Continue to next question.
	      </p>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
	    </div>
  </div>

  <div id="incorrect" class="modal smallmodal center-align">
	    <div class="modal-content">
	      <h4 class="red-text"><i class="fa fa-close"></i> Incorrect answer</h4>
	      
	      
	    	
	    	<h5 class="red-text text-lighten-2" id="usranswer"></h5>
	    	<br>

	    	<h6 class="green-text">Remember for next time</h6>
	    	<br>
	    	<div class="row">
	    		<div class="col s5" id="image1">
	    		</div>
	    		<div class="col s2 " >
	    		<br><br>
	    			<h4 id="sign"></h4>
	    		</div>
	    		<div class="col s5" id="image2">
	    		</div>

	    	</div>

	      	<br>
	      	<h6 class="blue-text text-darken-4 mymsg"></h6>
	    </div>

	    <div class="modal-footer">
	      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat wrongclose">Close</a>
	      <div class="left-align" style="float: left;">
	      	<a href="basicgreaterpage.php" class="waves-effect waves-green btn-flat left-align">Revisit tutorial</a>	
	      </div>	
	      
	    </div>
  </div>

  <div id="failed" class="modal smallmodal">
	    <div class="modal-content">
	      <h4 class="red-text"><i class="fa fa-close"></i> Failed!!</h4>
	      <p><br>
	      	Sorry you could not pass this round .<br>
	      	Please retry.
	      </p>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
	    </div>
  </div>

  <div id="passed" class="modal smallmodal">
	    <div class="modal-content">
	      <h4 class="green-text"><i class="fa fa-check"></i> Success..</h4>
	      <p><br>
	      	You have passed this round.<br>
	      	Continue to next round.
	      </p>
	    </div>
	    <div class="modal-footer">
	      <a href="start.php" class=" modal-action  waves-effect waves-green btn-flat">Continue</a>
	    </div>
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
   
  <!-- audios for use -->
 <audio src="audios/fail.mp3" id="audfail"></audio>
 <audio src="audios/right.mp3" id="audpass"></audio>       

	
</body>
</html>