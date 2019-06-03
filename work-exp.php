<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  		rel="stylesheet">
      	<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/home-2.css"/>
		<link rel="stylesheet" href="css/modal.css"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<link rel="stylesheet" href="css/jquery-ui.min.css"/>

		

		<title>Experience</title>
	</head>
	<body>

		<div class="row upper">
			<div class="col logo"></div>
			<div class="col mid"></div>
			<div class="col user"></div>
		</div>
		<div class="row lower">
			<div class="row slide">
				<img src="img/user.png" class="attr prof-pic">
				<img src="img/mortarboard.png" class="attr edu">
				<img src="img/test.png" class="attr work">
				<img src="img/artificial-intelligence.png" class="attr skills">
				<img src="img/folder1.png" class="attr worksample">

			</div>
			<div class="row data bor">
				<div class="row info exp heading">
					<div class="datatitle">Experience</div>
				</div>
				<div class="row dialouge"><h4>Tell us bit about your education</h4></div>
				<div class="colp padding"></div>
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
						<a href="home.php" class="previous">PREVIOUS</a>
						<a href="skills.php" class="next-container"><button class="next">Next</button></a>
					</div>	
				</div>
				<div class="colp padding"></div>
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
										<div class="row empty"></div>
										<div class="col padding"></div>
										<div class="col dataform">
									 		<div class="row prof">Training Program*:
									 			<div class="name-container">
									 				<input type="text" id="intern-role" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="college" placeholder="Ex: Web Development" required="" aria-required="true" aria-invalid="true">
									 			</div>
									 		</div>

									 		<div class="row org">Organization*:
									 			<div class="name-container">
									 				<input type="text" id="organization" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="college" placeholder="Ex: Ungineering" required="" aria-required="true" aria-invalid="true">
									 			</div>
									 		</div>

									 		<div class="row location">Location*:
									 			<div class="name-container">
									 				<input type="text" id="location" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="college" placeholder="Ex: Kolkata" required="" aria-required="true" aria-invalid="true">
									 			</div>
									 		</div>
						 					<div class=" row start-end-date">
						 						<div class="col date">Start Date
						 							<div class="name-container">
						 								<input type="text" id="start-date" tabindex="" class="input-name" autocomplete="off" isautocomplete="" name="startdate" placeholder="Ex: starting date" required="" aria-required="true" aria-invalid="true">
					 								</div>
						 						</div>
						 						<div class="col date">End Date
						 							<div class="name-container">
						 								<input type="text" id="end-date" tabindex="" class="input-name" autocomplete="off" isautocomplete="" name="enddate" placeholder="Ex: ending date" required="" aria-required="true" aria-invalid="true">
					 								</div>
					 								<div class="radio-btn">
					 									<input type="checkbox" id="present">Currently Ongoing
					 								</div>
						 						</div>
						 					</div>
							 				<div class="row description">Description:
							 					<div class="row desc-info">
							 						<textarea type="text" class="input-info " tabindex="8" id="experience_description" placeholder="Short description of work done (Max 250 char) " name="experience_description" spellcheck="false" aria-invalid="false"></textarea>
							 					</div>
							 				</div>	
						 					<div class=" col btn-holder">
				 									<a href="" class="next-container"><button class="next" data-dismiss="modal">Save</button></a>
												</div>	
										</div>
										<div class="col padding"></div>
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
										<div class="row empty"></div>
										<div class="col padding"></div>
										<div class="col dataform">
									 		<div class="row prof">Title*:
									 			<div class="name-container">
									 				<input type="text" id="intern-role" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="college" placeholder="Ex: Web Development" required="" aria-required="true" aria-invalid="true">
									 			</div>
									 		</div>
						 					<div class=" row start-end-date">
						 						<div class="col date">Start Date
						 							<div class="name-container">
						 								<input type="text" id="start-date" tabindex="" class="input-name" autocomplete="off" isautocomplete="" name="startdate" placeholder="Ex: starting date" required="" aria-required="true" aria-invalid="true">
					 								</div>
						 						</div>
						 						<div class="col date">End Date
						 							<div class="name-container">
						 								<input type="text" id="end-date" tabindex="" class="input-name" autocomplete="off" isautocomplete="" name="enddate" placeholder="Ex: ending date" required="" aria-required="true" aria-invalid="true">
					 								</div>
					 								<div class="radio-btn">
					 									<input type="checkbox" id="present">Currently working
					 								</div>
						 						</div>
						 					</div>
							 				<div class="row description">Description:
							 					<div class="row desc-info">
							 						<textarea type="text" class="input-info " tabindex="8" id="experience_description" placeholder="Short description of work done (Max 250 char) " name="experience_description" spellcheck="false" aria-invalid="false"></textarea>
							 					</div>
							 				</div>
							 				<div class="row org">Project Link:
									 			<div class="name-container">
									 				<input type="text" id="organization" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="college" placeholder="Ex: http://myprojectlink.com" required="" aria-required="true" aria-invalid="true">
									 			</div>
									 		</div>	
						 					<div class=" col btn-holder">
				 									<a href="" class="next-container"><button class="next" data-dismiss="modal">Save</button></a>
												</div>	
										</div>
										<div class="col padding"></div>
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
										<div class="row empty"></div>
										<div class="col padding"></div>
										<div class="col dataform">
									 		<div class="row prof">Profile*:
									 			<div class="name-container">
									 				<input type="text" id="intern-role" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="college" placeholder="Ex: Sales & Marketing" required="" aria-required="true" aria-invalid="true">
									 			</div>
									 		</div>

									 		<div class="row org">Organization*:
									 			<div class="name-container">
									 				<input type="text" id="organization" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="college" placeholder="Ex: Ungineering" required="" aria-required="true" aria-invalid="true">
									 			</div>
									 		</div>

									 		<div class="row location">Location*:
									 			<div class="name-container">
									 				<input type="text" id="location" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="college" placeholder="Ex: Kolkata or Work from home" required="" aria-required="true" aria-invalid="true">
									 			</div>
									 		</div>
						 					<div class=" row start-end-date">
						 						<div class="col date">Start Date
						 							<div class="name-container">
						 								<input type="text" id="start-date" tabindex="" class="input-name" autocomplete="off" isautocomplete="" name="startdate" placeholder="Ex: starting date" required="" aria-required="true" aria-invalid="true">
					 								</div>
						 						</div>
						 						<div class="col date">End Date
						 							<div class="name-container">
						 								<input type="text" id="end-date" tabindex="" class="input-name" autocomplete="off" isautocomplete="" name="enddate" placeholder="Ex: ending date" required="" aria-required="true" aria-invalid="true">
					 								</div>
					 								<div class="radio-btn">
					 									<input type="checkbox" id="present">Currently Ongoing
					 								</div>
						 						</div>
						 					</div>
							 				<div class="row description">Description:
							 					<div class="row desc-info">
							 						<textarea type="text" class="input-info " tabindex="8" id="experience_description" placeholder="Short description of work done (Max 250 char) " name="experience_description" spellcheck="false" aria-invalid="false"></textarea>
							 					</div>
							 				</div>	
						 					<div class=" col btn-holder">
				 									<a href="" class="next-container"><button class="next" data-dismiss="modal">Save</button></a>
												</div>	
										</div>
										<div class="col padding"></div>
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
										<div class="row empty"></div>
										<div class="col padding"></div>
										<div class="col dataform">
									 		<div class="row prof">Profile*:
									 			<div class="name-container">
									 				<input type="text" id="intern-role" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="college" placeholder="Ex: Sales & Marketing" required="" aria-required="true" aria-invalid="true">
									 			</div>
									 		</div>

									 		<div class="row org">Organization*:
									 			<div class="name-container">
									 				<input type="text" id="organization" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="college" placeholder="Ex: Ungineering" required="" aria-required="true" aria-invalid="true">
									 			</div>
									 		</div>

									 		<div class="row location">Location*:
									 			<div class="name-container">
									 				<input type="text" id="location" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="college" placeholder="Ex: Kolkata or Work from home" required="" aria-required="true" aria-invalid="true">
									 			</div>
									 		</div>
						 					<div class=" row start-end-date">
						 						<div class="col date">Start Date
						 							<div class="name-container">
						 								<input type="text" id="start-date" tabindex="" class="input-name" autocomplete="off" isautocomplete="" name="startdate" placeholder="Ex: starting date" required="" aria-required="true" aria-invalid="true">
					 								</div>
						 						</div>
						 						<div class="col date">End Date
						 							<div class="name-container">
						 								<input type="text" id="end-date" tabindex="" class="input-name" autocomplete="off" isautocomplete="" name="enddate" placeholder="Ex: ending date" required="" aria-required="true" aria-invalid="true">
					 								</div>
					 								<div class="radio-btn">
					 									<input type="checkbox" id="present">Currently Ongoing 
					 								</div>
						 						</div>
						 					</div>
							 				<div class="row description">Description:
							 					<div class="row desc-info">
							 						<textarea type="text" class="input-info " tabindex="8" id="experience_description" placeholder="Short description of work done (Max 250 char) " name="experience_description" spellcheck="false" aria-invalid="false"></textarea>
							 					</div>
							 				</div>	
						 					<div class=" col btn-holder">
				 									<a href="" class="next-container"><button class="next" data-dismiss="modal">Save</button></a>
											</div>	
										</div>
										<div class="col padding"></div>
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
							 						<textarea type="text" class="input-info " tabindex="8" id="experience_description" placeholder="Short description of work done (Max 250 char) " name="experience_description" spellcheck="false" aria-invalid="false"></textarea>
							 					</div>
							 				</div>
							 				<div class=" col btn-holder">
				 									<a href="" class="next-container"><button class="next" data-dismiss="modal">Save</button></a>
											</div>
										</div>
										<div class="col padding"></div>
									</div>

							</div>
						</div>
					</div>
				</div>	
			</div>



	<body>

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script >

			$(document).ready(function(){
				$("#start-date").datepicker();
			});

			$(document).ready(function(){
				$("#end-date").datepicker();
			});
			/*if ("#present"===true) {
				$("#end-date").datepicker()="false";
			}*/
			$(document).ready(function(){
				$('input[id="end-date"]').attr('disabled',false);
				if($('input[id="present"]').prop('checked')==true){
					$('input[id="end-date"]').attr('disabled', true);
				}
			})
		</script>

		<script type="text/javascript">
			$(function(){
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
			//cursor: not-allowed;
		</script>
	</body>
</html>
<!--<a href="https://www.flaticon.com">for icons</a> -->
