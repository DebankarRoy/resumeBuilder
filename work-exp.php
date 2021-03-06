<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  		rel="stylesheet">
      	<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/home-2.css"/>
		<link rel="stylesheet" href="css/modal-2.css"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<link rel="stylesheet" href="css/jquery-ui.min.css"/>

		

		<title>Experience</title>
		<link rel = "icon" href ="img/portfolio.png">
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

                    /*echo $_SESSION['profileid'];
        			echo $_SESSION['profilename'];  */          
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
				<a href="work-exp.php"><img src="img/test2.png" class="attr work"></a>
				<a href="skills.php"><img src="img/artificial-intelligence.png" class="attr skills"></a>
				<a href="work-sample.php"><img src="img/folder1.png" class="attr worksample"></a>
				<a href="resume.php"><img src="img/resume.png" class="attr resume"></a>
			</div>


			<div id="up-arrow-container" class="row arrow-cont">
		        
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow education_details_element inactive filled"></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow experiences_element " ></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow skills_element inactive" ></div>
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

			<div class="row data bor" onmouseover="showedit()" onmouseout="shownothing()">
				<div class="row info exp heading">
					<div class="datatitle">Experience</div>
				</div>

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


				<div class="row dialouge"><h4>Tell us bit about your Career</h4></div>
				
				<div class="col userinfo">
					<div class="row discipline" data-toggle="modal" data-target="#training-modal" >Training
						<i class="fa fa-plus education-fa-plus fa-x" aria-hidden="true"></i>
					</div>
					<div class="row discipline" data-toggle="modal" data-target="#project-modal" >Project
						<i class="fa fa-plus education-fa-plus fa-x" aria-hidden="true"></i>
					</div>
					<div class="row discipline" data-toggle="modal" data-target="#intern-modal" >Internship
						<i class="fa fa-plus education-fa-plus fa-x" aria-hidden="true"></i>
					</div>
					<div class="row discipline" data-toggle="modal" data-target="#job-modal">Job
						<i class="fa fa-plus education-fa-plus fa-x" aria-hidden="true"></i>
					</div>
					<div class="row discipline" data-toggle="modal" data-target="#achv-modal" >Any Other Achivement
						<i class="fa fa-plus education-fa-plus fa-x" aria-hidden="true"></i>
					</div>
					<div class="button-container">
						<a href="education.php" class="previous">PREVIOUS</a>
						<a href="skills.php"><button  class="next" >NEXT</button></a>
					</div>	
				</div>
				
			</div>
		</div>
		<div class="row footer">
			<div class="colp left">
				<span class="flaticon_text">icons by</span>
				<a href="https://www.flaticon.com/"><img src="img/flaticon-logo.svg" class="flaticon_img"></a>
			</div>
			<div class="colp right>">
				<span class="social_ids">Connect with me</span>
				<div class="social_id_img">
					<a href="https://www.instagram.com/ralph_since99/" target="_blank"><img src="img/instagram.png" class="insta_img"></a>
					<a href="https://www.linkedin.com/in/debankar-roy-ralph/" target="_blank"><img src="img/linkedin.png" class="linkedin_img"></a>
				</div>
			</div>				
		</div>

			<div class="container modal-training" >	
				<div class="modal fade" id="training-modal">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body">
									<div class="modal-conts tra">
										<div class="header-container exp">Training Details</div>
										<span class="close" aria-hidden="true" data-dismiss="modal">+</span>
										<form role="form" novalidate="novalidate" id="training_details" name="training" enctype="multipart/form-data">
											<div class="row empty"></div>
											<div class="col padding mbl-view"></div>
											<div class="col dataform">
										 		<div class="row prof">Training Program*:
										 			<div class="name-container">
										 				<input type="text" id="intern-role" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="training_prog" placeholder="Ex: Web Development" required="" aria-required="true" aria-invalid="true">
										 			</div>
										 		</div>

										 		<div class="row org">Organization*:
										 			<div class="name-container">
										 				<input type="text" id="organization" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="training_org" placeholder="Ex: Ungineering" required="" aria-required="true" aria-invalid="true">
										 			</div>
										 		</div>

										 		<div class="row location">Location*:
										 			<div class="name-container">
										 				<input type="text" id="location" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="training_loc" placeholder="Ex: Kolkata" required="" aria-required="true" aria-invalid="true">
										 			</div>
										 		</div>
							 					<div class=" row start-end-date">
							 						<div class="col date">Start Date
							 							<div class="name-container">
							 								<input type="text" id="start-date_training" tabindex="" class="input-name" autocomplete="off" isautocomplete="" name="startdate_tra" placeholder="Ex: starting date" required="" aria-required="true" aria-invalid="true">
						 								</div>
							 						</div>
							 						<div class="col date">End Date
							 							<div class="name-container">
							 								<input type="text" id="end-date_training" tabindex="" class="input-name" autocomplete="off" isautocomplete="" name="enddate_tra" placeholder="Ex: ending date" required="" aria-required="true" aria-invalid="true">
						 								</div>
						 								<div class="radio-btn">
						 									<input type="checkbox" id="training_present"><span class="ongoing">Currently Ongoing</span>
						 								</div>
							 						</div>
							 					</div>
								 				<div class="row description">Description:
								 					<div class="row desc-info">
								 						<textarea type="text" class="input-info " tabindex="8" id="experience_description" placeholder="Short description of work done (Max 250 char) " name="training_description" spellcheck="false" aria-invalid="false"></textarea>
								 					</div>
								 				</div>	
							 					<div class=" col btn-holder">
				 									<button class="next" onclick="Submittraining()">SUBMIT</button>
												</div>	
											</div>
											<div class="col padding mbl-view"></div>
										</form>
									</div>

							</div>
						</div>
					</div>
				</div>	
			</div>

			<div class="container modal-project" >	
				<div class="modal fade" id="project-modal">
					<div class="modal-dialog">
						<div class="modal-content pro">
							<div class="modal-body">
									<div class="modal-conts pro">
										<div class="header-container exp">Project Details</div>
										<span class="close" aria-hidden="true" data-dismiss="modal">+</span>
										<form role="form" novalidate="novalidate" id="project_details" name="project" enctype="multipart/form-data">
											<div class="row empty"></div>
											<div class="col padding mbl-view"></div>
											<div class="col dataform">
										 		<div class="row prof">Title*:
										 			<div class="name-container">
										 				<input type="text" id="intern-role" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="project_name" placeholder="Ex: Web Development" required="" aria-required="true" aria-invalid="true">
										 			</div>
										 		</div>
							 					<div class=" row start-end-date">
							 						<div class="col date">Start Date
							 							<div class="name-container">
							 								<input type="text" id="start-date_pro" tabindex="" class="input-name" autocomplete="off" isautocomplete="" name="startdate_pro" placeholder="Ex: starting date">
						 								</div>
							 						</div>
							 						<div class="col date">End Date
							 							<div class="name-container">
							 								<input type="text" id="end-date_pro" tabindex="" class="input-name" autocomplete="off" isautocomplete="" name="enddate_pro" placeholder="Ex: ending date">
						 								</div>
						 								<div class="radio-btn">
						 									<input type="checkbox" id="project_present">Currently working
						 								</div>
							 						</div>
							 					</div>
								 				<div class="row description">Description:
								 					<div class="row desc-info">
								 						<textarea type="text" class="input-info " tabindex="8" id="experience_description" placeholder="Short description of work done (Max 250 char) " name="project_description" spellcheck="false" ></textarea>
								 					</div>
								 				</div>
								 				<div class="row org">Project Link:
										 			<div class="name-container">
										 				<input type="text" id="organization" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="project_link" placeholder="Ex: http://myprojectlink.com" >
										 			</div>
										 		</div>	
							 					<div class=" col btn-holder">
					 									<button class="next" onclick="Submitproject()">SUBMIT</button>
													</div>	
											</div>
											<div class="col padding mbl-view"></div>
										</form>
									</div>

							</div>
						</div>
					</div>
				</div>	
			</div>

			<div class="container modal-intern" >	
				<div class="modal fade" id="intern-modal">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body">
								<div class="modal-conts">
									<div class="header-container exp">Internship</div>
									<span class="close" aria-hidden="true" data-dismiss="modal">+</span>
									<form role="form" novalidate="novalidate" id="intern_details" name="intern" enctype="multipart/form-data">
										<div class="row empty"></div>
										<div class="col padding mbl-view"></div>
										<div class="col dataform">
									 		<div class="row prof">Profile*:
									 			<div class="name-container">
									 				<input type="text" id="intern-role" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="intern_profile" placeholder="Ex: Sales & Marketing" required="" aria-required="true" aria-invalid="true">
									 			</div>
									 		</div>

									 		<div class="row org">Organization*:
									 			<div class="name-container">
									 				<input type="text" id="organization" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="intern_org" placeholder="Ex: Ungineering" required="" aria-required="true" aria-invalid="true">
									 			</div>
									 		</div>

									 		<div class="row location">Location*:
									 			<div class="name-container">
									 				<input type="text" id="location" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="intern_loc" placeholder="Ex: Kolkata or Work from home" required="" aria-required="true" aria-invalid="true">
									 			</div>
									 		</div>
						 					<div class=" row start-end-date">
						 						<div class="col date">Start Date
						 							<div class="name-container">
						 								<input type="text" id="start-date_intern" tabindex="" class="input-name" autocomplete="off" isautocomplete="" name="startdate_int" placeholder="Ex: starting date" required="" aria-required="true" aria-invalid="true">
					 								</div>
						 						</div>
						 						<div class="col date">End Date
						 							<div class="name-container">
						 								<input type="text" id="end-date_intern" tabindex="" class="input-name" autocomplete="off" isautocomplete="" name="enddate_int" placeholder="Ex: ending date" required="" aria-required="true" aria-invalid="true">
					 								</div>
					 								<div class="radio-btn">
					 									<input type="checkbox" id="intern_present">Currently Ongoing
					 								</div>
						 						</div>
						 					</div>
							 				<div class="row description">Description:
							 					<div class="row desc-info">
							 						<textarea type="text" class="input-info " tabindex="8" id="experience_description" placeholder="Short description of work done (Max 250 char) " name="intern_description" spellcheck="false" aria-invalid="false"></textarea>
							 					</div>
							 				</div>	
						 					<div class=" col btn-holder">
			 									<button class="next" onclick="Submitintern()">SUBMIT</button>
											</div>	
										</div>
										<div class="col padding mbl-view"></div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>

			<div class="container modal-job" >	
				<div class="modal fade" id="job-modal">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body">
								<div class="modal-conts">
									<div class="header-container exp">Job Details</div>
									<span class="close" aria-hidden="true" data-dismiss="modal">+</span>
									<form type="get" role="form" novalidate="novalidate" id="job_details" name="job" enctype="multipart/form-data">
										<div class="row empty"></div>
										<div class="col padding mbl-view"></div>
										<div class="col dataform">
									 		<div class="row prof">Profile*:
									 			<div class="name-container">
									 				<input type="text" id="intern-role" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="job_profile" placeholder="Ex: Sales & Marketing" required="" aria-required="true" aria-invalid="true">
									 			</div>
									 		</div>

									 		<div class="row org">Organization*:
									 			<div class="name-container">
									 				<input type="text" id="organization" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="job_org" placeholder="Ex: Ungineering" required="" aria-required="true" aria-invalid="true">
									 			</div>
									 		</div>

									 		<div class="row location">Location*:
									 			<div class="name-container">
									 				<input type="text" id="location" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="job_loc" placeholder="Ex: Kolkata or Work from home" required="" aria-required="true" aria-invalid="true">
									 			</div>
									 		</div>
						 					<div class=" row start-end-date">
						 						<div class="col date">Start Date
						 							<div class="name-container">
						 								<input type="text" id="start-date_job" tabindex="" class="input-name" autocomplete="off" isautocomplete="" name="startdate_job" placeholder="Ex: starting date" required="" aria-required="true" aria-invalid="true">
					 								</div>
						 						</div>
						 						<div class="col date">End Date
						 							<div class="name-container">
						 								<input type="text" id="end-date_job" tabindex="" class="input-name" autocomplete="off" isautocomplete="" name="enddate_job" placeholder="Ex: ending date" required="" aria-required="true" aria-invalid="true">
					 								</div>
					 								<div class="radio-btn" style="display: none">
					 									<input type="checkbox" id="job_present">Currently Ongoing 
					 								</div>
						 						</div>
						 					</div>
							 				<div class="row description">Description:
							 					<div class="row desc-info">
							 						<textarea type="text" class="input-info " tabindex="8" id="experience_description" placeholder="Short description of work done (Max 250 char) " name="job_description" spellcheck="false" required="" aria-required="true" aria-invalid="false"></textarea>
							 					</div>
							 				</div>	
						 					<div class=" col btn-holder">
			 									<button class="next" onclick="Submitjob()">SUBMIT</button>
											</div>	
										</div>
										<div class="col padding mbl-view"></div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			
			<div class="container achv-job" >	
				<div class="modal fade" id="achv-modal">
					<div class="modal-dialog">
						<div class="modal-content achv">
							<div class="modal-body">
								<div class="modal-conts achv">
									<div class="header-container exp">Achivements</div>
									<span class="close" aria-hidden="true" data-dismiss="modal">+</span>
									<form role="form" novalidate="novalidate" id="Achivements_details" name="Achivements" enctype="multipart/form-data">
										<div class="row empty mbl-view"></div>
										<div class="col padding"></div>
										<div class="col dataform">
											<div class="example">
							                    Example: <br>
							                    <ul>
							                        <li>Project leader in Swechha foundation’s Cleanliness Project in 2015 for Delhi region.
							                        </li>
							                    </ul>
							                </div>
							                <div class="row description">Description*:
							 					<div class="row desc-info">
							 						<textarea type="text" class="input-info " tabindex="8" id="achv_description" placeholder="Short description of work done (Max 250 char) " name="achv_description" spellcheck="false" required="" aria-required="true" aria-invalid="false"></textarea>
							 					</div>
							 				</div>
							 				<div class=" col btn-holder">
			 									<button class="next achv-submit" onclick="Submitachv()">SUBMIT</button>
											</div>
										</div>
										<div class="col padding mbl-view"></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>	
			</div>
	<body>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/picker.date.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/jQueryValidation.js"></script>
		<script src="js/work-exp-submit.js"></script>
		<script src="js/work-exp-fetch.js"></script>
		<script src="js/navbar.js"></script>

		<script >
			$(document).ready(function(){
				$("#start-date_pro").datepicker();
			});
			$(document).ready(function(){
				$("#end-date_pro").datepicker();
			});
			
			$(document).ready(function(){
				$("#start-date_training").datepicker();
			});
			$(document).ready(function(){
				$("#end-date_training").datepicker();
			});

			$(document).ready(function(){
				$("#start-date_intern").datepicker();
			});
			$(document).ready(function(){
				$("#end-date_intern").datepicker();
			});

			$(document).ready(function(){
				$("#start-date_job").datepicker();
			});
			$(document).ready(function(){
				$("#end-date_job").datepicker();
			});
		</script>

		<script>
		function showedit(){
			$('.abc').css("display","inline-block");
		}

		function shownothing(){
			$('.abc').css("display","none");
		}

	</script>



		<script>
		$('#job_present').click(function() {
		    if ($(this).is(':checked')) {
		      //return confirm("Are you sure?");
		      $('#end-date_job').prop('disabled', true);
		    }
		    else{
		    	$('#end-date_job').prop('disabled', false);

		    }
	  	});

	  	$('#training_present').click(function() {
		    if ($(this).is(':checked')) {
		      //return confirm("Are you sure?");
		      $('#end-date_training').prop('disabled', true);
		    }
		    else{
		    	$('#end-date_training').prop('disabled', false);

		    }
	  	});

	  	$('#intern_present').click(function() {
		    if ($(this).is(':checked')) {
		      //return confirm("Are you sure?");
		      $('#end-date_intern').prop('disabled', true);
		    }
		    else{
		    	$('#end-date_intern').prop('disabled', false);

		    }
	  	});

	  	$('#project_present').click(function() {
		    if ($(this).is(':checked')) {
		      //return confirm("Are you sure?");
		      $('#end-date_pro').prop('disabled', true);
		    }
		    else{
		    	$('#end-date_pro').prop('disabled', false);

		    }
	  	});

		</script>
	</body>
</html>
<!--<a href="https://www.flaticon.com">for icons</a> -->
