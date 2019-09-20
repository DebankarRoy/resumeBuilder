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
		
		<title>Education</title>
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
                    $userid_loggedin=$_SESSION['userid'];
                    //echo $userid_loggedin;
                    $user_loggedin=$_SESSION['name'];  


                   /* echo $_SESSION['profileid'];
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
				
				<a href="education.php"><img src="img/mortarboard2.png" class="attr edu"></a>
				<a href="work-exp.php"><img src="img/test.png" class="attr work"></a>
				<a href="skills.php"><img src="img/artificial-intelligence.png" class="attr skills"></a>
				<a href="work-sample.php"><img src="img/folder1.png" class="attr worksample"></a>
				<a href="resume.php"><img src="img/resume.png" class="attr resume"></a>
			</div>


			<div id="up-arrow-container" class="row arrow-cont">
		        
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow education_details_element  filled"></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow experiences_element inactive" ></div>
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
			  <a href="">Manage Account</a>
			  <a href="#">Resumes</a>
			  <a href="#">Logout </a>
			</div>

			<div id="menu-bar-open">
			  <span class="menu-bar" onclick="openNav()">&#9776;</span>
			</div>

			<div class="row data">
				<div class="row info">
					<div class="datatitle">Education</div>
				</div>

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


				<div class="row dialouge">
					<h4 class="tell-us">Tell us bit about your education:</h4>
					<h4 class="add-little">Add a bit more:</h4>
				</div>
				
				<div class="col userinfo">
					<div class="row discipline" data-toggle="modal" data-target="#graduation-modal" id="grad">Graduation
						<i class="fa fa-plus education-fa-plus fa-x" aria-hidden="true"></i>
					</div>
					<div class="row discipline" id="seniorsecondary" data-toggle="modal" data-target="#hs-modal">XII(Higer Secondary)
						<i class="fa fa-plus education-fa-plus fa-x" aria-hidden="true"></i>
					</div>
					<div class="row discipline" id="secondary" data-toggle="modal" data-target="#secon-modal">X(Secondary)
						<i class="fa fa-plus education-fa-plus fa-x" aria-hidden="true"></i>
					</div>
					<div class="row discipline" data-toggle="modal" data-target="#post-graduation-modal">Post Graduation
						<i class="fa fa-plus education-fa-plus fa-x" aria-hidden="true"></i>
					</div>
					<div class="row discipline" data-toggle="modal" data-target="#diploma-modal">Diploma
						<i class="fa fa-plus education-fa-plus fa-x" aria-hidden="true"></i>
					</div>
					<div class="row discipline" data-toggle="modal" data-target="#phd-modal">PhD
						<i class="fa fa-plus education-fa-plus fa-x" aria-hidden="true"></i>
					</div>
					<div class="button-container">
						
						<a href="work-exp.php"><button  class="next edu-pg" >NEXT</button></a>
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
					<a href=""><img src="img/instagram.png" class="insta_img"></a>
					<a href=""><img src="img/linkedin.png" class="linkedin_img"></a>
				</div>
			</div>				
		</div>
		
			<div class="container modal-education" >	
				<div class="modal fade" id="graduation-modal">
					<div class="modal-dialog ">
						<div class="modal-content">
							<div class="modal-body">
									<div class="modal-conts">
										<div class="header-container">Graduation Details</div>
										<span class="close" aria-hidden="true" data-dismiss="modal">+</span>

										<form role="form" novalidate="novalidate" id="graduation_details" name="graduation" enctype="multipart/form-data">
											
											<div class="row empty"></div>
											<div class="col padding"></div>
											<div class="col dataform">
												<div class="row grad-stat">Graduation status*:
													<div class="row deg-container">
														<div class="deg degree_completion_status_container_pursuing">
															<input type="radio" id="degree_completion_status" name="degree_completion_status_grad" value="pursuing" ><span class="spcl" required="true">Pursuing</span>
															<br>
														</div>
														<div class="deg degree_completion_status_container_completed">
													 		<input type="radio" id="degree_completion_status" name="degree_completion_status_grad" value="completed">Completed
												 		</div>
											 		</div>
										 		</div>
										 		<div class="row collegename">College*:
										 			<div class="name-container">
										 				<input type="text" id="college" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="college" placeholder="Ex: Hindu College " required=""  aria-invalid="true">
										 			</div>
										 		</div>
										 		<div class="row course-duration">
										 			<div class="col start-year">Start year*:
										 				<div class="start-year-container">
										 					<select data-placeholder="Choose year..." id="start_year" name="start_year_clg" class="chosen-select form-control chosen-year" tabindex="-1" style="display:;">	 
										 						<option value="">Choose year</option>
										 						<option value="2020">2024</option>
											 					<option value="2019">2023</option>
										 						<option value="2020">2022</option>
											 					<option value="2019">2021</option>
										 						<option value="2020">2020</option>
											 					<option value="2019">2019</option>
											 					<option value="2018">2018</option>
											 					<option value="2017">2017</option>
											 					<option value="2016">2016</option>
											 					<option value="2015">2015</option>
											 					<option value="2014">2014</option>
											 					<option value="2013">2013</option>
											 					<option value="2012">2012</option>
											 					<option value="2011">2011</option>
											 					<option value="2010">2010</option>
											 					<option value="2009">2009</option>
											 					<option value="2008">2008</option>
											 					<option value="2007">2007</option>
											 					<option value="2006">2006</option>
											 					<option value="2005">2005</option>
											 					<option value="2004">2004</option>
											 					<option value="2003">2003</option>
											 					<option value="2002">2002</option>
											 					<option value="2001">2001</option>
											 					<option value="2000">2000</option>
											 					<option value="1999">1999</option>
											 					<option value="1998">1998</option>
											 					<option value="1997">1997</option>
											 					<option value="1996">1996</option>
											 					<option value="1995">1995</option>
											 					<option value="1994">1994</option>
											 					<option value="1993">1993</option>
											 					<option value="1992">1992</option>
											 					<option value="1991">1991</option>
											 					<option value="1990">1990</option>
											 					<option value="1989">1989</option>
											 					<option value="1988">1988</option>
											 					<option value="1987">1987</option>
											 					<option value="1986">1986</option>
											 					<option value="1985">1985</option>
											 					<option value="1984">1984</option>
											 					<option value="1983">1983</option>
											 					<option value="1982">1982</option>
											 					<option value="1981">1981</option>
											 					<option value="1980">1980</option>
										 					</select>
										 				</div>
										 			</div>
									 				<div class="col end-year">End Year*:
									 					<div class="end-year-container">
									 						<select data-placeholder="Choose year..." id="end_year input-type" name="end_year_clg" class="chosen-select form-control chosen-year" tabindex="-1" style="display:;">	 
										 						<option value="">Choose year</option>
										 						<option value="2020">2020</option>
											 					<option value="2019">2019</option>
											 					<option value="2018">2018</option>
											 					<option value="2017">2017</option>
											 					<option value="2016">2016</option>
											 					<option value="2015">2015</option>
											 					<option value="2014">2014</option>
											 					<option value="2013">2013</option>
											 					<option value="2012">2012</option>
											 					<option value="2011">2011</option>
											 					<option value="2010">2010</option>
											 					<option value="2009">2009</option>
											 					<option value="2008">2008</option>
											 					<option value="2007">2007</option>
											 					<option value="2006">2006</option>
											 					<option value="2005">2005</option>
											 					<option value="2004">2004</option>
											 					<option value="2003">2003</option>
											 					<option value="2002">2002</option>
											 					<option value="2001">2001</option>
											 					<option value="2000">2000</option>
											 					<option value="1999">1999</option>
											 					<option value="1998">1998</option>
											 					<option value="1997">1997</option>
											 					<option value="1996">1996</option>
											 					<option value="1995">1995</option>
											 					<option value="1994">1994</option>
											 					<option value="1993">1993</option>
											 					<option value="1992">1992</option>
											 					<option value="1991">1991</option>
											 					<option value="1990">1990</option>
											 					<option value="1989">1989</option>
											 					<option value="1988">1988</option>
											 					<option value="1987">1987</option>
											 					<option value="1986">1986</option>
											 					<option value="1985">1985</option>
											 					<option value="1984">1984</option>
											 					<option value="1983">1983</option>
											 					<option value="1982">1982</option>
											 					<option value="1981">1981</option>
											 					<option value="1980">1980</option>
										 					</select>
									 					</div>
									 				</div>
							 					</div>
							 					<div class="row degree-stream">
							 						<div class="col degree-name" id="input-type">Degree*:
							 							<div class="degree-name-container">
							 								<input type="text" id="degree" tabindex="4" class="deg-input" autocomplete="off" isautocomplete="" name="degree" placeholder="Ex: B.Sc (Hons.) " required="" aria-required="true" aria-invalid="true">
							 							</div>
							 						</div>
							 						<div class=" col stream-name" id="input-type">Stream:
							 							<div class="stream-container">
							 								<input type="text" id="stream" tabindex="5" class="stream-input" autocomplete="off" isautocomplete="" name="stream_clg" placeholder="Ex: Economics ">
							 							</div>
							 						</div>
							 					</div>
							 					<div class="row tips_education">
							 						<ul>
				 										<li class="list">Example: If your degree is B.Sc in Chemistry, then select Bachelor of Science (B.Sc) in <b>degree</b> and Chemistry in <b>streams</b>.
				 										</li>
				 									</ul>
							 					</div>
							 					<div class="row performence-scale">
							 						<div class="col per-scale">Performence Scale:
							 							<div class="scale-container">
							 								<select class="perfor-scale" id="performance-scale-college" tabindex="6" name="performance_scale_clg" aria-invalid="false">
							                                    <option value="" selected="">Percentage</option>
							                                    <option value="10">CGPA (Scale of 10)</option>
							                                    <option value="9">CGPA (Scale of 9)</option>
							                                    <option value="8">CGPA (Scale of 8)</option>
							                                    <option value="7">CGPA (Scale of 7)</option>
							                                    <option value="5">CGPA (Scale of 5)</option>
							                                    <option value="4">CGPA (Scale of 4)</option>
							                                </select>
							 							</div>
							 						</div>
							 						<div class="col per-num">Performence
							 							<div class="per-container">
							 								<input type="number" class="per-marks" id="performance-college" tabindex="7" name="performance_clg" placeholder="0.00" aria-invalid="false">
							 							</div>
							 						</div>
							 						
							 					</div>
							 					<div class=" col btn-holder">
					 									<button  class="next pos mt mb-5"  onclick="submitgrad()">SUBMIT</button>
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

			<div class="container modal-hs">
				<div class="modal fade" id="hs-modal">
					<div class="modal-dialog" >
						<div class="modal-content">
							<div class="modal-body">
								<div class="modal-conts">
									<div class="header-container">XII (Senior Secondary or Equivalent)</div>
									<span class="close" aria-hidden="true" data-dismiss="modal">+</span>
									<form role="form" novalidate="novalidate" id="senior-secondary_details" name="senior-secondary" enctype="multipart/form-data">
										<div class="row empty"></div>
										<div class="col padding"></div>
										<div class="col dataform">
											<div class="row hs-stat">Intermediate status*:
													<div class="row deg-container">
														<div class="deg degree_completion_status_container_pursuing">
															<input type="radio" id="degree_completion_status_pursuing" name="degree_completion_status_ss" value="pursuing" aria-required="true">Pursuing
														</div>
														<div class="deg degree_completion_status_container_completed">
													 		<input type="radio" id="degree_completion_status_completed" name="degree_completion_status_ss" value="completed">Completed
												 		</div>
											 		</div>
									 		</div>

									 		<div class="row schoolname">School*:
										 			<div class="name-container">
										 				<input type="text" id="school" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="school" placeholder="Ex: Krishnath College School " required="" aria-required="true" aria-invalid="true">
										 			</div>
									 		</div>

									 		<div class="row course-completion">Year of Completion*:
										 				<div class="year-container">
										 					<select data-placeholder="Choose year..." id="end_year_ss" name="end_year_ss" class="chosen-select 
										 					form-control chosen-year" tabindex="-1" style="display:;">	 
										 						<option value="">Choose year</option>
										 						<option value="2020">2020</option>
											 					<option value="2019">2019</option>
											 					<option value="2018">2018</option>
											 					<option value="2017">2017</option>
											 					<option value="2016">2016</option>
											 					<option value="2015">2015</option>
											 					<option value="2014">2014</option>
											 					<option value="2013">2013</option>
											 					<option value="2012">2012</option>
											 					<option value="2011">2011</option>
											 					<option value="2010">2010</option>
											 					<option value="2009">2009</option>
											 					<option value="2008">2008</option>
											 					<option value="2007">2007</option>
											 					<option value="2006">2006</option>
											 					<option value="2005">2005</option>
											 					<option value="2004">2004</option>
											 					<option value="2003">2003</option>
											 					<option value="2002">2002</option>
											 					<option value="2001">2001</option>
											 					<option value="2000">2000</option>
											 					<option value="1999">1999</option>
											 					<option value="1998">1998</option>
											 					<option value="1997">1997</option>
											 					<option value="1996">1996</option>
											 					<option value="1995">1995</option>
											 					<option value="1994">1994</option>
											 					<option value="1993">1993</option>
											 					<option value="1992">1992</option>
											 					<option value="1991">1991</option>
											 					<option value="1990">1990</option>
											 					<option value="1989">1989</option>
											 					<option value="1988">1988</option>
											 					<option value="1987">1987</option>
											 					<option value="1986">1986</option>
											 					<option value="1985">1985</option>
											 					<option value="1984">1984</option>
											 					<option value="1983">1983</option>
											 					<option value="1982">1982</option>
											 					<option value="1981">1981</option>
											 					<option value="1980">1980</option>
										 					</select>
										 				</div>
											</div>
											<div class="row boardname">Board*:
										 			<div class="name-container">
										 				<input type="text" id="board" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="board_ss" placeholder="Ex: WBCHSE " required="" aria-required="true" aria-invalid="true">
										 			</div>
									 		</div>

									 		<div class="row scl-performence-scale">
							 						<div class="col per-scale">Performence Scale:
							 							<div class="scale-container">
							 								<select class="perfor-scale" id="performance-scale-ss" tabindex="6" name="performance_scale_ss" aria-invalid="false">
							                                    <option value="" selected="">Percentage</option>
							                                    <option value="10">CGPA (Scale of 10)</option>
							                                    <option value="9">CGPA (Scale of 9)</option>
							                                    <option value="8">CGPA (Scale of 8)</option>
							                                    <option value="7">CGPA (Scale of 7)</option>
							                                    <option value="5">CGPA (Scale of 5)</option>
							                                    <option value="4">CGPA (Scale of 4)</option>
							                                </select>
							 							</div>
							 						</div>
							 						<div class="col per-num">Performence
							 							<div class="per-container">
							 								<input type="number" class="per-marks" id="performance-ss" tabindex="7" name="performance_marks_ss" placeholder="0.00" aria-invalid="false">
							 							</div>
							 						</div>		
						 					</div>

						 					<div class="row clg-stream">Stream*:
								 				<div class="stream-container">
								 					<select data-placeholder="Choose year..." id="stream-ss" name="stream_ss" class="chosen-select 
									 					form-control chosen-year" tabindex="-1" style="	display:;">	 
								 						<option value="">Choose stream</option>
								 						<option value="Science">Science</option>
									 					<option value="Arts">Arts</option>
									 					<option value="Commerce">Commerce</option>
								 					</select>
								 				</div>
											</div>

											<div class=" col btn-holder">
			 									<button  class="next pos mt mb-5" onclick="submitss()">SUBMIT</button>
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

			<div class="container modal-secon">
				<div class="modal fade" id="secon-modal">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body">
								<div class="secon-conts modal-conts">
									<div class="header-container">X(Secondary) Details		
									</div>
									<span class="close" aria-hidden="true" data-dismiss="modal">+</span>
									<form role="form" novalidate="novalidate" id="secondary_details" name="secondary" enctype="multipart/form-data">
										<div class="row empty"></div>
										<div class="col padding"></div>
										<div class="col dataform">
											<div class="row secon-stat">Matriculation status*:
													<div class="row deg-container">
														<div class="deg degree_completion_status_container_pursuing">
															<input type="radio" id="degree_completion_status_pursuing" name="degree_completion_status_s" value="pursuing" aria-required="true">Pursuing
														</div>
														<div class="deg degree_completion_status_container_completed">
															<input type="radio" id="degree_completion_status_completed" name="degree_completion_status_s" value="completed">Completed
														</div>
													</div>
											</div>

											<div class="row schoolname">School*:
													<div class="name-container">
														<input type="text" id="school" tabindex="" class="input-name" autocomplete="off" isautocomplete="" name="school_s" placeholder="Ex: Krishnath College School " required="" aria-required="true" aria-invalid="true">
													</div>
											</div>

											<div class="row course-completion">Year of Completion*:
														<div class="year-container">
															<select data-placeholder="Choose year..." id="start_year" name="end_year_s" class="chosen-select 
															form-control chosen-year" tabindex="-1" style="display:;">	 
																<option value="">Choose year</option>
																<option value="2020">2020</option>
																<option value="2019">2019</option>
																<option value="2018">2018</option>
																<option value="2017">2017</option>
																<option value="2016">2016</option>
																<option value="2015">2015</option>
																<option value="2014">2014</option>
																<option value="2013">2013</option>
																<option value="2012">2012</option>
																<option value="2011">2011</option>
																<option value="2010">2010</option>
																<option value="2009">2009</option>
																<option value="2008">2008</option>
																<option value="2007">2007</option>
																<option value="2006">2006</option>
																<option value="2005">2005</option>
																<option value="2004">2004</option>
																<option value="2003">2003</option>
																<option value="2002">2002</option>
																<option value="2001">2001</option>
																<option value="2000">2000</option>
																<option value="1999">1999</option>
																<option value="1998">1998</option>
																<option value="1997">1997</option>
																<option value="1996">1996</option>
																<option value="1995">1995</option>
																<option value="1994">1994</option>
																<option value="1993">1993</option>
																<option value="1992">1992</option>
																<option value="1991">1991</option>
																<option value="1990">1990</option>
																<option value="1989">1989</option>
																<option value="1988">1988</option>
																<option value="1987">1987</option>
																<option value="1986">1986</option>
																<option value="1985">1985</option>
																<option value="1984">1984</option>
																<option value="1983">1983</option>
																<option value="1982">1982</option>
																<option value="1981">1981</option>
																<option value="1980">1980</option>
															</select>
														</div>
											</div>
											<div class="row boardname">Board*:
													<div class="name-container">
														<input type="text" id="board" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="board_s" placeholder="Ex:WBBSE" required="" aria-required="true" aria-invalid="true">
													</div>
											</div>

											<div class="row scl-performence-scale">
													<div class="col per-scale">Performence Scale:
														<div class="scale-container">
															<select class="perfor-scale" id="performance-scale-college" tabindex="6" name="performance_scale_s" aria-invalid="false">
																<option value="" selected="">Percentage</option>
																<option value="10">CGPA (Scale of 10)</option>
																<option value="9">CGPA (Scale of 9)</option>
																<option value="8">CGPA (Scale of 8)</option>
																<option value="7">CGPA (Scale of 7)</option>
																<option value="5">CGPA (Scale of 5)</option>
																<option value="4">CGPA (Scale of 4)</option>
															</select>
														</div>
													</div>
													<div class="col per-num">Performence
														<div class="per-container">
															<input type="number" class="per-marks" id="performance-college" tabindex="7" name="performance_s" placeholder="0.00" aria-invalid="false">
														</div>
													</div>		
											</div>

											<div class=" col btn-holder">
												<button  class="next pos mt mb-4" onclick="submitsecondary()">SUBMIT</button>
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

			<div class="container modal-post-grad" >	
				<div class="modal fade" id="post-graduation-modal">
					<div class="modal-dialog">
						<div class="modal-content">
						
							<div class="modal-body">
									<div class="modal-conts">
										<div class="header-container">Post Graduation Details</div>
										<span class="close" aria-hidden="true" data-dismiss="modal">+</span>
										<form role="form" novalidate="novalidate" id="post-grad" name="post-graduation" enctype="multipart/form-data">
											<div class="row empty"></div>
											<div class="col padding"></div>
											<div class="col dataform">
												<div class="row grad-stat">Post Graduation status*:
													<div class="row deg-container">
														<div class="deg degree_completion_status_container_pursuing">
															<input type="radio" id="degree_completion_status_pursuing" name="degree_completion_status_pg" value="pursuing" aria-required="true">Pursuing
														</div>
														<div class="deg degree_completion_status_container_completed">
													 		<input type="radio" id="degree_completion_status_completed" name="degree_completion_status_pg" value="completed">Completed
												 		</div>
											 		</div>
										 		</div>
										 		<div class="row collegename">College*:
										 			<div class="name-container">
										 				<input type="text" id="college" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="college_pg" placeholder="Ex: Hindu College " required="" aria-required="true" aria-invalid="true">
										 			</div>
										 		</div>
										 		<div class="row course-duration">
										 			<div class="col start-year">Start year*:
										 				<div class="start-year-container">
										 					<select data-placeholder="Choose year..." id="start_year" name="start_year_pg" class="chosen-select form-control chosen-year" tabindex="-1" style="display:;">	 
										 						<option value="">Choose year</option>
										 						<option value="2020">2020</option>
											 					<option value="2019">2019</option>
											 					<option value="2018">2018</option>
											 					<option value="2017">2017</option>
											 					<option value="2016">2016</option>
											 					<option value="2015">2015</option>
											 					<option value="2014">2014</option>
											 					<option value="2013">2013</option>
											 					<option value="2012">2012</option>
											 					<option value="2011">2011</option>
											 					<option value="2010">2010</option>
											 					<option value="2009">2009</option>
											 					<option value="2008">2008</option>
											 					<option value="2007">2007</option>
											 					<option value="2006">2006</option>
											 					<option value="2005">2005</option>
											 					<option value="2004">2004</option>
											 					<option value="2003">2003</option>
											 					<option value="2002">2002</option>
											 					<option value="2001">2001</option>
											 					<option value="2000">2000</option>
											 					<option value="1999">1999</option>
											 					<option value="1998">1998</option>
											 					<option value="1997">1997</option>
											 					<option value="1996">1996</option>
											 					<option value="1995">1995</option>
											 					<option value="1994">1994</option>
											 					<option value="1993">1993</option>
											 					<option value="1992">1992</option>
											 					<option value="1991">1991</option>
											 					<option value="1990">1990</option>
											 					<option value="1989">1989</option>
											 					<option value="1988">1988</option>
											 					<option value="1987">1987</option>
											 					<option value="1986">1986</option>
											 					<option value="1985">1985</option>
											 					<option value="1984">1984</option>
											 					<option value="1983">1983</option>
											 					<option value="1982">1982</option>
											 					<option value="1981">1981</option>
											 					<option value="1980">1980</option>
										 					</select>
										 				</div>
										 			</div>
									 				<div class="col end-year">End Year*:
									 					<div class="end-year-container">
									 						<select data-placeholder="Choose year..." id="end_year input-type" name="end_year_pg" class="chosen-select form-control chosen-year" tabindex="-1" style="display:;">	 
										 						<option value="">Choose year</option>
										 						<option value="2020">2020</option>
											 					<option value="2019">2019</option>
											 					<option value="2018">2018</option>
											 					<option value="2017">2017</option>
											 					<option value="2016">2016</option>
											 					<option value="2015">2015</option>
											 					<option value="2014">2014</option>
											 					<option value="2013">2013</option>
											 					<option value="2012">2012</option>
											 					<option value="2011">2011</option>
											 					<option value="2010">2010</option>
											 					<option value="2009">2009</option>
											 					<option value="2008">2008</option>
											 					<option value="2007">2007</option>
											 					<option value="2006">2006</option>
											 					<option value="2005">2005</option>
											 					<option value="2004">2004</option>
											 					<option value="2003">2003</option>
											 					<option value="2002">2002</option>
											 					<option value="2001">2001</option>
											 					<option value="2000">2000</option>
											 					<option value="1999">1999</option>
											 					<option value="1998">1998</option>
											 					<option value="1997">1997</option>
											 					<option value="1996">1996</option>
											 					<option value="1995">1995</option>
											 					<option value="1994">1994</option>
											 					<option value="1993">1993</option>
											 					<option value="1992">1992</option>
											 					<option value="1991">1991</option>
											 					<option value="1990">1990</option>
											 					<option value="1989">1989</option>
											 					<option value="1988">1988</option>
											 					<option value="1987">1987</option>
											 					<option value="1986">1986</option>
											 					<option value="1985">1985</option>
											 					<option value="1984">1984</option>
											 					<option value="1983">1983</option>
											 					<option value="1982">1982</option>
											 					<option value="1981">1981</option>
											 					<option value="1980">1980</option>
										 					</select>
									 					</div>
									 				</div>
							 					</div>
							 					<div class="row degree-stream">
							 						<div class="col degree-name" id="input-type">Degree*:
							 							<div class="degree-name-container">
							 								<input type="text" id="degree" tabindex="4" class="deg-input" autocomplete="off" isautocomplete="" name="degree_pg" placeholder="Ex: MBA " required="" aria-required="true" aria-invalid="true">
							 							</div>
							 						</div>
							 						<div class=" col stream-name" id="input-type">Stream:
							 							<div class="stream-container">
							 								<input type="text" id="stream" tabindex="5" class="stream-input" autocomplete="off" isautocomplete="" name="stream_pg" placeholder="Ex: Finance ">
							 							</div>
							 						</div>
							 					</div>
							 					<div class="row tips_education">
							 						<ul>
				 										<li class="list">Example: If your degree is M.Sc in Chemistry, then select Master of Science (M.Sc) in <b>degree</b> and <b>Chemistry</b> in streams.
				 										</li>
				 									</ul>
							 					</div>
							 					<div class="row performence-scale">
							 						<div class="col per-scale">Performence Scale:
							 							<div class="scale-container">
							 								<select class="perfor-scale" id="performance-scale-college" tabindex="6" name="performance_scale_pg" aria-invalid="false">
							                                    <option value="" selected="">Percentage</option>
							                                    <option value="10">CGPA (Scale of 10)</option>
							                                    <option value="9">CGPA (Scale of 9)</option>
							                                    <option value="8">CGPA (Scale of 8)</option>
							                                    <option value="7">CGPA (Scale of 7)</option>
							                                    <option value="5">CGPA (Scale of 5)</option>
							                                    <option value="4">CGPA (Scale of 4)</option>
							                                </select>
							 							</div>
							 						</div>
							 						<div class="col per-num">Performence
							 							<div class="per-container">
							 								<input type="number" class="per-marks" id="performance-college" tabindex="7" name="performance_pg" placeholder="0.00" aria-invalid="false">
							 							</div>
							 						</div>	
							 					</div>
							 					<div class=" col btn-holder">
					 									<button  class="next pos mt mb-5" onclick="submitpostgrad()">SUBMIT</button>
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

			<div class="container modal-diploma" >	
				<div class="modal fade" id="diploma-modal">
					<div class="modal-dialog">
						<div class="modal-content">
						
							<div class="modal-body">
									<div class="modal-conts">
										<div class="header-container">Diploma Details</div>
										<span class="close" aria-hidden="true" data-dismiss="modal">+</span>
										<form role="form" novalidate="novalidate" id="diploma_details" name="diploma" enctype="multipart/form-data">
											<div class="row empty"></div>
											<div class="col padding"></div>
											<div class="col dataform">
												<div class="row grad-stat">Diploma status*:
													<div class="row deg-container">
														<div class="deg degree_completion_status_container_pursuing">
															<input type="radio" id="degree_completion_status_pursuing" name="degree_completion_status_dp" value="pursuing" aria-required="true">Pursuing
														</div>
														<div class="deg degree_completion_status_container_completed">
													 		<input type="radio" id="degree_completion_status_completed" name="degree_completion_status_dp" value="completed">Completed
												 		</div>
											 		</div>
										 		</div>
										 		<div class="row collegename">College*:
										 			<div class="name-container">
										 				<input type="text" id="college" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="college_dp" placeholder="Ex: IGNOU " required="" aria-required="true" aria-invalid="true">
										 			</div>
										 		</div>
										 		<div class="row course-duration">
										 			<div class="col start-year">Start year*:
										 				<div class="start-year-container">
										 					<select data-placeholder="Choose year..." id="start_year" name="start_year_dp" class="chosen-select form-control chosen-year" tabindex="-1" style="display:;">	 
										 						<option value="">Choose year</option>
										 						<option value="2020">2020</option>
											 					<option value="2019">2019</option>
											 					<option value="2018">2018</option>
											 					<option value="2017">2017</option>
											 					<option value="2016">2016</option>
											 					<option value="2015">2015</option>
											 					<option value="2014">2014</option>
											 					<option value="2013">2013</option>
											 					<option value="2012">2012</option>
											 					<option value="2011">2011</option>
											 					<option value="2010">2010</option>
											 					<option value="2009">2009</option>
											 					<option value="2008">2008</option>
											 					<option value="2007">2007</option>
											 					<option value="2006">2006</option>
											 					<option value="2005">2005</option>
											 					<option value="2004">2004</option>
											 					<option value="2003">2003</option>
											 					<option value="2002">2002</option>
											 					<option value="2001">2001</option>
											 					<option value="2000">2000</option>
											 					<option value="1999">1999</option>
											 					<option value="1998">1998</option>
											 					<option value="1997">1997</option>
											 					<option value="1996">1996</option>
											 					<option value="1995">1995</option>
											 					<option value="1994">1994</option>
											 					<option value="1993">1993</option>
											 					<option value="1992">1992</option>
											 					<option value="1991">1991</option>
											 					<option value="1990">1990</option>
											 					<option value="1989">1989</option>
											 					<option value="1988">1988</option>
											 					<option value="1987">1987</option>
											 					<option value="1986">1986</option>
											 					<option value="1985">1985</option>
											 					<option value="1984">1984</option>
											 					<option value="1983">1983</option>
											 					<option value="1982">1982</option>
											 					<option value="1981">1981</option>
											 					<option value="1980">1980</option>
										 					</select>
										 				</div>
										 			</div>
									 				<div class="col end-year">End Year*:
									 					<div class="end-year-container">
									 						<select data-placeholder="Choose year..." id="end_year input-type" name="end_year_dp" class="chosen-select form-control chosen-year" tabindex="-1" style="display:;">	 
										 						<option value="">Choose year</option>
										 						<option value="2020">2020</option>
											 					<option value="2019">2019</option>
											 					<option value="2018">2018</option>
											 					<option value="2017">2017</option>
											 					<option value="2016">2016</option>
											 					<option value="2015">2015</option>
											 					<option value="2014">2014</option>
											 					<option value="2013">2013</option>
											 					<option value="2012">2012</option>
											 					<option value="2011">2011</option>
											 					<option value="2010">2010</option>
											 					<option value="2009">2009</option>
											 					<option value="2008">2008</option>
											 					<option value="2007">2007</option>
											 					<option value="2006">2006</option>
											 					<option value="2005">2005</option>
											 					<option value="2004">2004</option>
											 					<option value="2003">2003</option>
											 					<option value="2002">2002</option>
											 					<option value="2001">2001</option>
											 					<option value="2000">2000</option>
											 					<option value="1999">1999</option>
											 					<option value="1998">1998</option>
											 					<option value="1997">1997</option>
											 					<option value="1996">1996</option>
											 					<option value="1995">1995</option>
											 					<option value="1994">1994</option>
											 					<option value="1993">1993</option>
											 					<option value="1992">1992</option>
											 					<option value="1991">1991</option>
											 					<option value="1990">1990</option>
											 					<option value="1989">1989</option>
											 					<option value="1988">1988</option>
											 					<option value="1987">1987</option>
											 					<option value="1986">1986</option>
											 					<option value="1985">1985</option>
											 					<option value="1984">1984</option>
											 					<option value="1983">1983</option>
											 					<option value="1982">1982</option>
											 					<option value="1981">1981</option>
											 					<option value="1980">1980</option>
										 					</select>
									 					</div>
									 				</div>
							 					</div>
							 					<div class="row dip-degree-stream">
							 						<div class=" col dip-stream-name" id="input-type">Stream:
							 							<div class="stream-container">
							 								<input type="text" id="stream" tabindex="5" class="stream-input" autocomplete="off" isautocomplete="" name="stream_dp" placeholder="Ex: Creative Writing ">
							 							</div>
							 						</div>
							 					</div>
							 					
							 					<div class="row performence-scale">
							 						<div class="col per-scale">Performence Scale:
							 							<div class="scale-container">
							 								<select class="perfor-scale" id="performance-scale-college" tabindex="6" name="performance_scale" aria-invalid="false">
							                                    <option value="" selected="">Percentage</option>
							                                    <option value="10">CGPA (Scale of 10)</option>
							                                    <option value="9">CGPA (Scale of 9)</option>
							                                    <option value="8">CGPA (Scale of 8)</option>
							                                    <option value="7">CGPA (Scale of 7)</option>
							                                    <option value="5">CGPA (Scale of 5)</option>
							                                    <option value="4">CGPA (Scale of 4)</option>
							                                </select>
							 							</div>
							 						</div>
							 						<div class="col per-num">Performence
							 							<div class="per-container">
							 								<input type="number" class="per-marks" id="performance-college" tabindex="7" name="performance_dp" placeholder="0.00" aria-invalid="false">
							 							</div>
							 						</div>
							 						
							 					</div>
							 					<div class=" col btn-holder">
					 								<button class="next pos mt mb-5" onclick="submitdiploma()">Submit</button>
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

			<div class="container modal-phd" >	
				<div class="modal fade" id="phd-modal">
					<div class="modal-dialog">
						<div class="modal-content">
						
							<div class="modal-body">
									<div class="modal-conts">
										<div class="header-container">PhD Details</div>
										<span class="close" aria-hidden="true" data-dismiss="modal">+</span>
										<form role="form" novalidate="novalidate" id="phd_details" name="phd" enctype="multipart/form-data">
											<div class="row empty"></div>
											<div class="col padding"></div>
											<div class="col dataform">
												<div class="row grad-stat">PhD status*:
													<div class="row deg-container">
														<div class="deg degree_completion_status_container_pursuing">
															<input type="radio" id="degree_completion_status_pursuing" name="degree_completion_status_ph" value="pursuing" aria-required="true">Pursuing
														</div>
														<div class="deg degree_completion_status_container_completed">
													 		<input type="radio" id="degree_completion_status_completed" name="degree_completion_status_ph" value="completed">Completed
												 		</div>
											 		</div>
										 		</div>
										 		<div class="row collegename">College*:
										 			<div class="name-container">
										 				<input type="text" id="college" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="college_ph" placeholder="Ex: IIT,KGP " required="" aria-required="true" aria-invalid="true">
										 			</div>
										 		</div>
										 		<div class="row course-duration">
										 			<div class="col start-year">Start year*:
										 				<div class="start-year-container">
										 					<select data-placeholder="Choose year..." id="start_year" name="start_year_ph" class="chosen-select form-control chosen-year" tabindex="-1" style="display:;">	 
										 						<option value="">Choose year</option>
										 						<option value="2020">2020</option>
											 					<option value="2019">2019</option>
											 					<option value="2018">2018</option>
											 					<option value="2017">2017</option>
											 					<option value="2016">2016</option>
											 					<option value="2015">2015</option>
											 					<option value="2014">2014</option>
											 					<option value="2013">2013</option>
											 					<option value="2012">2012</option>
											 					<option value="2011">2011</option>
											 					<option value="2010">2010</option>
											 					<option value="2009">2009</option>
											 					<option value="2008">2008</option>
											 					<option value="2007">2007</option>
											 					<option value="2006">2006</option>
											 					<option value="2005">2005</option>
											 					<option value="2004">2004</option>
											 					<option value="2003">2003</option>
											 					<option value="2002">2002</option>
											 					<option value="2001">2001</option>
											 					<option value="2000">2000</option>
											 					<option value="1999">1999</option>
											 					<option value="1998">1998</option>
											 					<option value="1997">1997</option>
											 					<option value="1996">1996</option>
											 					<option value="1995">1995</option>
											 					<option value="1994">1994</option>
											 					<option value="1993">1993</option>
											 					<option value="1992">1992</option>
											 					<option value="1991">1991</option>
											 					<option value="1990">1990</option>
											 					<option value="1989">1989</option>
											 					<option value="1988">1988</option>
											 					<option value="1987">1987</option>
											 					<option value="1986">1986</option>
											 					<option value="1985">1985</option>
											 					<option value="1984">1984</option>
											 					<option value="1983">1983</option>
											 					<option value="1982">1982</option>
											 					<option value="1981">1981</option>
											 					<option value="1980">1980</option>
										 					</select>
										 				</div>
										 			</div>
									 				<div class="col end-year">End Year*:
									 					<div class="end-year-container">
									 						<select data-placeholder="Choose year..." id="end_year input-type" name="end_year_ph" class="chosen-select form-control chosen-year" tabindex="-1" style="display:;">	 
										 						<option value="">Choose year</option>
										 						<option value="2020">2020</option>
											 					<option value="2019">2019</option>
											 					<option value="2018">2018</option>
											 					<option value="2017">2017</option>
											 					<option value="2016">2016</option>
											 					<option value="2015">2015</option>
											 					<option value="2014">2014</option>
											 					<option value="2013">2013</option>
											 					<option value="2012">2012</option>
											 					<option value="2011">2011</option>
											 					<option value="2010">2010</option>
											 					<option value="2009">2009</option>
											 					<option value="2008">2008</option>
											 					<option value="2007">2007</option>
											 					<option value="2006">2006</option>
											 					<option value="2005">2005</option>
											 					<option value="2004">2004</option>
											 					<option value="2003">2003</option>
											 					<option value="2002">2002</option>
											 					<option value="2001">2001</option>
											 					<option value="2000">2000</option>
											 					<option value="1999">1999</option>
											 					<option value="1998">1998</option>
											 					<option value="1997">1997</option>
											 					<option value="1996">1996</option>
											 					<option value="1995">1995</option>
											 					<option value="1994">1994</option>
											 					<option value="1993">1993</option>
											 					<option value="1992">1992</option>
											 					<option value="1991">1991</option>
											 					<option value="1990">1990</option>
											 					<option value="1989">1989</option>
											 					<option value="1988">1988</option>
											 					<option value="1987">1987</option>
											 					<option value="1986">1986</option>
											 					<option value="1985">1985</option>
											 					<option value="1984">1984</option>
											 					<option value="1983">1983</option>
											 					<option value="1982">1982</option>
											 					<option value="1981">1981</option>
											 					<option value="1980">1980</option>
										 					</select>
									 					</div>
									 				</div>
							 					</div>
							 					<div class="row dip-degree-stream">
							 						<div class=" col dip-stream-name" id="input-type">Stream:
							 							<div class="stream-container">
							 								<input type="text" id="stream" tabindex="5" class="stream-input" autocomplete="off" isautocomplete="" name="stream_ph" placeholder="Ex: Bussiness Studies ">
							 							</div>
							 						</div>
							 					</div>
							 					
							 					<div class="row performence-scale">
							 						<div class="col per-scale">Performence Scale:
							 							<div class="scale-container">
							 								<select class="perfor-scale" id="performance-scale-college" tabindex="6" name="performance_scale_ph" aria-invalid="false">
							                                    <option value="" selected="">Percentage</option>
							                                    <option value="10">CGPA (Scale of 10)</option>
							                                    <option value="9">CGPA (Scale of 9)</option>
							                                    <option value="8">CGPA (Scale of 8)</option>
							                                    <option value="7">CGPA (Scale of 7)</option>
							                                    <option value="5">CGPA (Scale of 5)</option>
							                                    <option value="4">CGPA (Scale of 4)</option>
							                                </select>
							 							</div>
							 						</div>
							 						<div class="col per-num">Performence
							 							<div class="per-container">
							 								<input type="number" class="per-marks" id="performance-college" tabindex="7" name="performance_ph" placeholder="0.00" aria-invalid="false">
							 							</div>
							 						</div>	
							 					</div>
							 					<div class=" col btn-holder">
					 								<button class="next pos mt mb-5" onclick="submitphd()">SUBMIT</button>
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
	</body>
	
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jQueryValidation.js"></script>
		<script src="js/education-submit.js"></script>
		<script src="js/education-fetch.js"></script>
		<script src="js/navbar.js"></script>
		
		<script>
			$('document').ready(function(){
				if(secondary=='1'){
                        $('#secondary').hide();
                    }
			 });			
		</script>
		<script>
			$('document').ready(function(){
				if(seniorsecondary=='1'){
                        $('#seniorsecondary').hide();
                    }
			 });			
		</script>	
	
</html>
<!--<a href="https://www.flaticon.com">for icons</a> -->
