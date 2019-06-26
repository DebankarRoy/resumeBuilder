<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/home-2.css"/>
		<link rel="stylesheet" href="css/modal-2.css"/>
		<style>
			.form-control{
				border-radius: 0px;
			}

		</style>
		<title>Student details</title>
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
					    <b>ukn<?php $user ?></b>
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
				
				<a href="student.php"><img src="img/user2.png" class="attr prof-pic"></a>
				<a href="home.php"><img src="img/mortarboard.png" class="attr edu"></a>
				<a href="work-exp.php"><img src="img/test.png" class="attr work"></a>
				<a href="skills.php"><img src="img/artificial-intelligence.png" class="attr skills"></a>
				<a href="work-sample.php"><img src="img/folder1.png" class="attr worksample"></a>
			</div>


			<div id="up-arrow-container" class="row arrow-cont">
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow personal_details_element " >	
		           	</div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow education_details_element inactive"></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow experiences_element inactive"></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow skills_element inactive"></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow work_samples_element inactive"></div>
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

			<div class="col student-info">
				<div class="row heading"><h3>Personal details</h3>
				</div>
				<div class="row empty"></div>

				<div class="col padding"></div>


				<div class="col dataform">
					<form role="form" novalidate="novalidate" id="personal_details" name="registration" enctype="multipart/form-data" method="POST" action = "student-submit.php">
					    <div class="row form-group">
					        <label for="name" class="control-label" id="x">Name*:</label>
					        <div class="input-group salutation">
					            <select class="col sal " id="salutation" tabindex="1" name="salutation">
					                
					                <option value="mr">Mr.</option>
					                <option value="mrs">Mrs.</option>
					                <option value="ms">Ms.</option>
					            </select>
					            <input class="form-control name" id="name" tabindex="2" name="name" placeholder="Enter Your Name" value="" type="text">
					     
        					</div>
    					</div>
					    <div class="row form-group">
					        <label for="number" class="control-label">Mobile Number*:</label>
					        <div class="input-group">
					            <input type="number"  class="wid form-control mobile-number" tabindex="4" id="phone_primary" name="phone_no" placeholder="Your 10 digit mobile number " value="">
					        </div>
					    </div>

					    <div class="row form-group">
					        <label for="email" class="control-label">Email*:</label>
					        <div class="input-group">
					            <input type="text" class="wid form-control" id="email" tabindex="5" name="email" placeholder="random@random.com" value="" autocomplete="off">	
					        </div>
					    </div>

					    <div class="row form-group">
					        <label for="current_city" class="control-label">Current City*:</label>
					        <div class="input-group">
					            <input type="text" class="wid form-control" id="current_city" tabindex="6" name="current_city" placeholder="Start typing.." value="" autocomplete="off">	
					        </div>
					    </div>
					    
					    <div class="row button_container">
	                        <input name="submit" class="next-button_container" id="personal-detail-submit" tabindex="7" value="NEXT" type="submit">
					    </div>


					</form>
				</div>

				<div class="col padding"></div>
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

	
