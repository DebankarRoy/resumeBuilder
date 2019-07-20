<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/home-2.css"/>
		<link rel="stylesheet" href="css/modal-2.css"/>
		
		<title>Work Samples</title>
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
		<div class="row lower">
			<div class="row slide">
				
				<a href="student.php"><img src="img/user.png" class="attr prof-pic"></a>
				<a href="education.php"><img src="img/mortarboard.png" class="attr edu"></a>
				<a href="work-exp.php"><img src="img/test.png" class="attr work"></a>
				<a href="skills.php"><img src="img/artificial-intelligence.png" class="attr skills"></a>
				<a href="work-sample.php"><img src="img/folder2.png" class="attr worksample"></a>
				<a href="resume.php"><img src="img/resume.png" class="attr resume"></a>
			</div>


			<div id="up-arrow-container" class="row arrow-cont">
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow personal_details_element inactive filled"  >	
		           	</div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow education_details_element inactive filled"></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow experiences_element inactive" ></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow skills_element inactive" ></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow work_samples_element " ></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow resume_element inactive" ></div>
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

			<div class="col student-info bor-org colp">
				<div class="row heading sample"><h3>Work Samples</h3>
				</div>

				<div class="col padding mbl-view"></div>
				<div class="row empty"></div>
				<div class="col dataform ">
					<h4 class="font-weight-h4 padding-h4">Add your work sample links here (if any):</h4>
					<form role="form" novalidate="novalidate" id="work-samples" name="work-samples" enctype="multipart/form-data" method="POST" action = "submit/work-sample-submit2.php">
						<div class="row link-in">Blog Link:
							<input class="form-control link-input " id="skill"index="2" name="blog" placeholder="http://myblog.com" value="" type="text">
						</div>
						
						<div class="row link-in">GitHub Profile:
							<input class="form-control link-input " id="skill"index="2" name="github" placeholder="http://github.com/my_profile" value="" type="text">
						</div>

						<div class="row link-in">Play Store Developer A/c (Public Link):
							<input class="form-control link-input " id="skill"index="2" name="playstore" placeholder="http://play.google.com/store/apps/developer?id=myapps" value="" type="text">
						</div>

						<div class="row link-in">Behance Portfolio Link:
							<input class="form-control link-input " id="skill"index="2" name="behance" placeholder="http://behance.net/my_profile" value="" type="text">
						</div>

						<div class="row link-in">Other Portfolio Link:
							<input class="form-control link-input " id="skill"index="2" name="other" placeholder="http://myportfolio.com" value="" type="text">
						</div>
						
						
						<div class="button-container btn-pos">
							<a href="skills.php" class="previous">PREVIOUS</a>
							<input name="submit" class="next-button_container" id="personal-detail-submit" tabindex="7" value="NEXT" type="submit">
						</div>
					</form>
				</div>

				<div class="col padding mbl-view"></div>

			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/education-submit.js"></script>
		<script src="js/jQueryValidation.js"></script>
		<script src="js/form-validations.js"></script>
		<script src="js/abc.js"></script>
		<script>
			function openNav() {
			  document.getElementById("mySidenav").style.width = "250px";
			}

			function closeNav() {
			  document.getElementById("mySidenav").style.width = "0";
			}
		</script>
	</body>
	</html>