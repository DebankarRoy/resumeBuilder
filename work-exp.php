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
				<a href="work-exp.php"><img src="img/test2.png" class="attr work"></a>
				<a href="skills.php"><img src="img/artificial-intelligence.png" class="attr skills"></a>
				<a href="work-sample.php"><img src="img/folder1.png" class="attr worksample"></a>

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
		            <div class="up-arrow experiences_element " ></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow skills_element inactive" ></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow work_samples_element inactive" ></div>
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

			<div class="row data bor">
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


				<div class="row dialouge"><h4>Tell us bit about your education</h4></div>
				
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
											<div class="col padding"></div>
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
						 									<input type="checkbox" id="present" >Currently Ongoing
						 								</div>
							 						</div>
							 					</div>
								 				<div class="row description">Description:
								 					<div class="row desc-info">
								 						<textarea type="text" class="input-info " tabindex="8" id="experience_description" placeholder="Short description of work done (Max 250 char) " name="training_description" spellcheck="false" aria-invalid="false"></textarea>
								 					</div>
								 				</div>	
							 					<div class=" col btn-holder">
				 									<button class="next" data-dismiss="modal" onclick="Submittraining()">SUBMIT</button>
												</div>	
											</div>
											<div class="col padding"></div>
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
											<div class="col padding"></div>
											<div class="col dataform">
										 		<div class="row prof">Title*:
										 			<div class="name-container">
										 				<input type="text" id="intern-role" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="project_name" placeholder="Ex: Web Development" required="" aria-required="true" aria-invalid="true">
										 			</div>
										 		</div>
							 					<div class=" row start-end-date">
							 						<div class="col date">Start Date
							 							<div class="name-container">
							 								<input type="text" id="start-date" tabindex="" class="input-name" autocomplete="off" isautocomplete="" name="startdate_pro" placeholder="Ex: starting date" required="" aria-required="true" aria-invalid="true">
						 								</div>
							 						</div>
							 						<div class="col date">End Date
							 							<div class="name-container">
							 								<input type="text" id="end-date" tabindex="" class="input-name" autocomplete="off" isautocomplete="" name="enddate_pro" placeholder="Ex: ending date" required="" aria-required="true" aria-invalid="true">
						 								</div>
						 								<div class="radio-btn">
						 									<input type="checkbox" id="present">Currently working
						 								</div>
							 						</div>
							 					</div>
								 				<div class="row description">Description:
								 					<div class="row desc-info">
								 						<textarea type="text" class="input-info " tabindex="8" id="experience_description" placeholder="Short description of work done (Max 250 char) " name="project_description" spellcheck="false" aria-invalid="false"></textarea>
								 					</div>
								 				</div>
								 				<div class="row org">Project Link:
										 			<div class="name-container">
										 				<input type="text" id="organization" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="project_link" placeholder="Ex: http://myprojectlink.com" required="" aria-required="true" aria-invalid="true">
										 			</div>
										 		</div>	
							 					<div class=" col btn-holder">
					 									<button class="next" data-dismiss="modal" onclick="Submitproject()">SUBMIT</button>
													</div>	
											</div>
											<div class="col padding"></div>
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
									<form role="form" novalidate="novalidate" id="intern_details" name="intern" enctype="multipart/form-data"
										<div class="row empty"></div>
										<div class="col padding"></div>
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
					 									<input type="checkbox" id="present">Currently Ongoing
					 								</div>
						 						</div>
						 					</div>
							 				<div class="row description">Description:
							 					<div class="row desc-info">
							 						<textarea type="text" class="input-info " tabindex="8" id="experience_description" placeholder="Short description of work done (Max 250 char) " name="intern_description" spellcheck="false" aria-invalid="false"></textarea>
							 					</div>
							 				</div>	
						 					<div class=" col btn-holder">
			 									<button class="next" data-dismiss="modal" onclick="Submitintern()">SUBMIT</button>
											</div>	
										</div>
										<div class="col padding"></div>
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
									<form role="form" novalidate="novalidate" id="job_details" name="job" enctype="multipart/form-data"
										<div class="row empty"></div>
										<div class="col padding"></div>
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
					 								<div class="radio-btn">
					 									<input type="checkbox" id="present">Currently Ongoing 
					 								</div>
						 						</div>
						 					</div>
							 				<div class="row description">Description:
							 					<div class="row desc-info">
							 						<textarea type="text" class="input-info " tabindex="8" id="experience_description" placeholder="Short description of work done (Max 250 char) " name="job_description" spellcheck="false" aria-invalid="false"></textarea>
							 					</div>
							 				</div>	
						 					<div class=" col btn-holder">
			 									<button class="next" data-dismiss="modal" onclick="Submitjob()">SUBMIT</button>
											</div>	
										</div>
										<div class="col padding"></div>
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
										<div class="row empty"></div>
										<div class="col padding"></div>
										<div class="col dataform">
											<div class="example">
							                    Example: <br>
							                    <ul>
							                        <li>Project leader in Swechha foundation’s Cleanliness Project in 2015 for Delhi region.
							                        </li>
							                    </ul>
							                </div>
							                <div class="row description">Description:
							 					<div class="row desc-info">
							 						<textarea type="text" class="input-info " tabindex="8" id="experience_description" placeholder="Short description of work done (Max 250 char) " name="achv_description" spellcheck="false" aria-invalid="false"></textarea>
							 					</div>
							 				</div>
							 				<div class=" col btn-holder">
			 									<button class="next" data-dismiss="modal" onclick="Submitachv()">SUBMIT</button>
											</div>
										</div>
										<div class="col padding"></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>	
			</div>
	<body>
		<script src="js/work-exp.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/picker.date.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		
		<script>
			function readRecordjob(){
				var readRecordjob = 'readRecordjob';
				$.ajax({
					url: 'submit/job-submit.php',
					type: 'POST',
					data: { readRecordjob:readRecordjob },
					success:function(data,status){
				 			$('#job-fetching').html(data);
				 			counter++;
						 }
				})
			}


			function DeleteRecordjob(deleteidjob){
				var conf = confirm("Are you sure?");
				if(conf == true) {
				$.ajax({
					url:"submit/job-submit.php",
					type:'POST',
					data: {  deleteidjob : deleteidjob },
					success:function(data, status){
						readRecordjob ();
						counter--;
					}
				});
				}
			}

			function readRecordintern(){
				var readRecordintern = 'readRecordintern';
				$.ajax({
					url: 'submit/intern-submit.php',
					type: 'POST',
					data: { readRecordintern:readRecordintern },
					success:function(data,status){
				 			$('#intern-fetching').html(data);
				 			
						 }
				})
			}


			function DeleteRecordintern(deleteidintern){
				var conf = confirm("Are you sure?");
				if(conf == true) {
				$.ajax({
					url:"submit/intern-submit.php",
					type:'POST',
					data: {  deleteidintern : deleteidintern },
					success:function(data, status){
						readRecordintern ();
						
					}
				});
				}
			}

			function readRecordtraining(){
				var readRecordtraining = 'readRecordtraining';
				$.ajax({
					url: 'submit/training-submit.php',
					type: 'POST',
					data: { readRecordtraining:readRecordtraining },
					success:function(data,status){
				 			$('#training-fetching').html(data);
				 			
						 }
				})
			}


			function DeleteRecordtraining(deleteidtraining){
				var conf = confirm("Are you sure?");
				if(conf == true) {
				$.ajax({
					url:"submit/training-submit.php",
					type:'POST',
					data: {  deleteidtraining: deleteidtraining },
					success:function(data, status){
						readRecordtraining ();
						
					}
				});
				}
			}

			function readRecordproject(){
				var readRecordproject = 'readRecordproject';
				$.ajax({
					url: 'submit/project-submit.php',
					type: 'POST',
					data: { readRecordproject:readRecordproject },
					success:function(data,status){
				 			$('#project-fetching').html(data);
				 			
						 }
				})
			}


			function DeleteRecordproject(deleteidproject){
				var conf = confirm("Are you sure?");
				if(conf == true) {
				$.ajax({
					url:"submit/project-submit.php",
					type:'POST',
					data: {  deleteidproject: deleteidproject },
					success:function(data, status){
						readRecordproject();
						
					}
				});
				}
			}

			function readRecordother(){
				var readRecordother = 'readRecordother';
				$.ajax({
					url: 'submit/other-achv-submit.php',
					type: 'POST',
					data: { readRecordother:readRecordother },
					success:function(data,status){
				 			$('#others-fetching').html(data);
				 			
						 }
				})
			}


			function DeleteRecordother(deleteidother){
				var conf = confirm("Are you sure?");
				if(conf == true) {
				$.ajax({
					url:"submit/other-achv-submit.php",
					type:'POST',
					data: {  deleteidother: deleteidother },
					success:function(data, status){
						readRecordother();
						
					}
				});
				}
			}


			$('document').ready(function() {
				readRecordjob();
				readRecordintern();
				readRecordtraining();
				readRecordproject();
				readRecordother();
				
			});
		</script>


		<script>
			function openNav() {
			  document.getElementById("mySidenav").style.width = "250px";
			}

			function closeNav() {
			  document.getElementById("mySidenav").style.width = "0";
			}
		</script>

		<script >
			$(document).ready(function(){
				$("#start-date").datepicker();
			});
			$(document).ready(function(){
				$("#end-date").datepicker();
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
			/*$(document).ready(function(){
				$("#start-date").datepicker();
			});

			$(document).ready(function(){
				$("#end-date").datepicker();
			});
			/*if ("#present"===true) {
				$("#end-date").datepicker()="false";
			}*/
			/*$(document).ready(function(){
				$('input[id="end-date"]').attr('disabled',false);
				if($('input[id="present"]').prop('checked')==true){
					$('input[id="end-date"]').attr('disabled', true);
				}
			})*/
		</script>

		<script>
			/*$(function(){
				$("present").change(function(){
					var st=this.checked;
					if(!st){
						$('#end-date').prop('disabled', true);
					}
					else{
						$('#end-date').prop('disabled',false);
					}
				})
			})
			//cursor: not-allowed;*/
		</script>
	</body>
</html>
<!--<a href="https://www.flaticon.com">for icons</a> -->
