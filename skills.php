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
		</style>
		
		<title>Skills</title>
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

                    /*echo $_SESSION['profileid'];
        			echo $_SESSION['profilename']; */            
                }
                else
                    {
                    	$flag=0;
                    	header('Location:/Resume/login.php');
               		}
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
					  	<a class="dropdown-item" href="home.php">Home</a>
					    <a class="dropdown-item" href="resumes.php">Resumes</a>
					    <a class="dropdown-item" href="logout.php">Logout</a>
					  </div>
					</div>

                    <?php
                        }
                    ?>

			</div>
		</div>
		<div class="row lower">
			<div class="row slide">
				
				<a href="education.php"><img src="img/mortarboard.png" class="attr edu"></a>
				<a href="work-exp.php"><img src="img/test.png" class="attr work"></a>
				<a href="skills.php"><img src="img/artificial-intelligence2.png" class="attr skills"></a>
				<a href="work-sample.php"><img src="img/folder1.png" class="attr worksample"></a>
				<a href="resume.php"><img src="img/resume.png" class="attr resume"></a>
			</div>


			<div id="up-arrow-container" class="row arrow-cont">
		        
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow education_details_element inactive filled"></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow experiences_element inactive" ></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow skills_element ml30" ></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow work_samples_element inactive" ></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow resume_element inactive" ></div>
		        </div>
		    </div>

		    <div id="mySidenav" class="sidenav">

			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			  <a href="home.php">Home</a>
			  <a href="resumes.php">Resumes</a>
			  <a href="logout.php">Logout </a>
			</div>

			<div id="menu-bar-open">
			  <span class="menu-bar" onclick="openNav()">&#9776;</span>
			</div>

			<div class="col student-info bor-red">
				<div class="row heading skill"><h3>Skills</h3>
				</div>

				<div class="col padding"></div>

				<div class="col dataform tag">
					<h4 class="font-weight-h4">What skills do you have?</h4>
					<div class="skills-container" id="skills-fetching">
						<div class="row">			
						</div>
					</div>
					<div class="row skill-input">
						<form role="form" novalidate="novalidate" id="skills" name="skills" enctype="multipart/form-data">
							
							<input class=" skills-in " id="skill"index="2" name="skill-input" placeholder="Ex: C Programming Language" value="" type="text">
						
							<div class="add-skills-rating-container" style="display: none;">
							    <div id="rating_question">How would you rate yourself at this ?</div>
							    <div class="skills_edit_cancel" style="display: none;">(×)Cancel
							    </div>
							    <div class="rating-container">
							        <button class="btn btn-primary rating-value" id="beginner" value="Beginner" name="rating" readonly="readonly" onclick="Submitskillbeginner()">Beginner</button>
							        <button class="btn btn-primary rating-value" id="intermediate" value="Intermediate" name="rating" readonly="readonly" onclick="Submitskillintermediate()">Intermediate</button>
							        <button class="btn btn-primary rating-value" id="advanced" value="Advanced" name="rating" readonly="readonly" onclick="Submitskilladvanced()">Advanced</button>
							    </div>
						    </div>
					    </form>

						    <div class="row button-container btn-pos btn-pos-skills">
								<a href="work-exp.php" class="previous">PREVIOUS</a>
								<a href="work-sample.php"><button class="next">NEXT</button></a>
							</div>  
					</div>
					
				</div>

				<div class="col padding"></div>
			</div>

				
		</div>

		<div class="row footer forskills">
			<div class="colp left">
				<span class="flaticon_text">icons by</span>
				<a href="https://www.flaticon.com/"><img src="img/flaticon-logo.svg" class="flaticon_img"></a>
			</div>
			<div class="colp right>">
				<span class="social_ids">Connect with me</span>
				<div class="social_id_img">
					<a href=""><img src="img/instagram.png" class="insta_img"></a>
					<a href=""><img src="img/linkedin.png" class="linkedin_img"></a>
				</div>
			</div>				
		</div>

		
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/navbar.js"></script>
		<script src="js/skill-submit.js"></script>
		<script src="js/skills-fetch.js"></script>


	</body>
	</html>
