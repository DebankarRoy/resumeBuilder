<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/home-2.css"/>
		<link rel="stylesheet" href="css/modal-2.css"/>
		<style>
			.colp{
				height: none;
				}
			/*html{
				background-color:  #F3F7F7;
			}*/
		</style>
		
		<title>Resume</title>
	</head>

	<body>
		
		<div class="row upper">
			<div class="col logo">
				<div class="col head-logo">
					<img src="img/hiring2.png" class="header-logo">
				</div>
				<div class="col head-text">
						<span class="re"><b>Re</b></span>
						<span class="sumer"><b>sumer</b></span>	
				</div>
			</div>
			<div class="col mid"></div>
			<div class="col user">


			<?php
                session_start();
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                    $flag=1;
                    $userid_loggedin=$_SESSION['id'];
                    //echo $userid_loggedin;
                    $user_loggedin=$_SESSION['name'];             
                }
                else
                    $flag=0;
            ?>



				<?php
                        if($flag==0)
                        {
                    ?>                 
				<div class="not_loggedin">
				  <span class="dropdown-toggle login-register" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    <b>Login/Register</b>
				  </span>
				  <div class="dropdown-menu">
				    <a class="dropdown-item" href="login.php">Login</a>
				    <a class="dropdown-item" href="register.php">Register</a>
				  </div>
				</div>

				<?php
                        }
                        else {
                    ?>
                    <div class="not_loggedin">
					  <span class="dropdown-toggle login-register" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <b><?php echo "$user_loggedin";?></b>
					  </span>
					  <div class="dropdown-menu">
					    <a class="dropdown-item" href="#">Resumes</a>
					    <a class="dropdown-item" href="logout.php">Logout</a>
					  </div>
					</div>

                    <?php
                        }
                    ?>

			</div>
		</div>
		<div id="mySidenav" class="sidenav">

			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			  <a href="">Manage Account</a>
			  <a href="#">Resumes</a>
			  <a href="#">Logout</a>
		</div>
		<div id="menu-bar-open">
		  <span class="menu-bar" onclick="openNav()">&#9776;</span>
		</div>
		<div class="row lower-content">
			<div class="row resume-download"></div>
			<div class="col resume-col"></div>
			<div class="col resume-content">
				<div class="row personal-table">
					<h2>name</h2>
					<span>email</span>
					<span>phone no<br></span>
					<span>place</span>
				</div>
				<div class="row education-table">
					<div class="col details-left"><h4>Education</h4></div>
					<div class="col details-right">

						<div class="row fetch phd-fetch" id="phd-fetching">
						</div>

						<div class="row fetch pg-fetch" id="postgrad-fetching">
						</div>
						
						<div class="row fetch" id="grad-fetching">
							
						</div>

						<div class="row fetch diploma-fetch" id="diploma-fetching">
						</div>

						<div class="row fetch ss-fetch" id="ss-fetching">
						</div>

						<div class="row fetch secon-fetch" id="secondary-fetching">
						</div>
					</div>
				</div>
				<div class="row experience-table">
					<div class="col details-left"><h4>Experiences</h4></div>
					<div class="col details-right">
						<div class="row fetch phd-fetch" id="job-fetching">
						</div>

						<div class="row fetch pg-fetch" id="intern-fetching">
						</div>
						
						<div class="row fetch" id="training-fetching">	
						</div>

						<div class="row fetch diploma-fetch" id="project-fetching">
						</div>

						<div class="row fetch ss-fetch" id="others-fetching">
						</div>
					</div>
				</div>
				<div class="row skills-table">
					<div class="col details-left"><h4>Skills</h4></div>
					<div class="col details-right">
						<div class="skills-container" id="skills-fetching">
						<div class="row">
						</div>
					</div>
					</div>
				</div>
				<div class="row samples-table">
					<div class="col details-left"><h4>Work Samples</h4></div>
					<div class="col details-right"></div>
				</div></div>
			<div class="col resume-col"></div>
		</div>

	</body>


	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jQueryValidation.js"></script>
	<script src="js/education-submit.js"></script>
	<script src="js/education-fetch.js"></script>
	<script src="js/work-exp-submit.js"></script>
	<script src="js/work-exp-fetch.js"></script>
	<script src="js/skill-submit.js"></script>
	<script src="js/skills-fetch.js"></script>
	<script src="js/navbar.js"></script>
</html>