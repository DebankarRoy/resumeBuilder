<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      	<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/home.css"/>
		<link rel="stylesheet" href="css/modal.css"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		

		

		<title>Homepage</title>
	</head>
		<div class="row upper">
			<div class="col logo"></div>
			<div class="col mid"></div>
			<div class="col user"></div>
		</div>
		<div class="row lower">
			<div class="row slide">
				<img src="img/music-control-settings-button.png" class="attr pref">
				<img src="img/user.png" class="attr prof">
				<img src="img/mortarboard.png" class="attr edu">
				<img src="img/test.png" class="attr work">
				<img src="img/artificial-intelligence.png" class="attr skills">
				<img src="img/folder1.png" class="attr worksample">

			</div>
			<div class="row data">
				<div class="row info">
					<div class="datatitle">Education</div>
				</div>
				<div class="row dialouge"><h4>Tell us bit about your education</h4></div>
				<div class="colp padding"></div>
				<div class="col userinfo">
					<div class="row discipline" data-toggle="modal" data-target="#graduation-modal" id="grad">Graduation
						<i class="fa fa-plus education-fa-plus fa-x" aria-hidden="true"></i>
						
					</div>
					<div class="row discipline" data-toggle="modal" data-target="#collegeModal">XII(Higer Secondary)
						<i class="fa fa-plus education-fa-plus fa-x" aria-hidden="true"></i>
					</div>
					<div class="row discipline" data-toggle="modal" data-target="#collegeModal">X(Secondary)
						<i class="fa fa-plus education-fa-plus fa-x" aria-hidden="true"></i>
					</div>
					<div class="row discipline" data-toggle="modal" data-target="#collegeModal">Post Graduation
						<i class="fa fa-plus education-fa-plus fa-x" aria-hidden="true"></i>
					</div>
					<div class="row discipline" data-toggle="modal" data-target="#collegeModal">Diploma
						<i class="fa fa-plus education-fa-plus fa-x" aria-hidden="true"></i>
					</div>
					<div class="row discipline" data-toggle="modal" data-target="#collegeModal">PhD
						<i class="fa fa-plus education-fa-plus fa-x" aria-hidden="true"></i>
					</div>
					<div class="button-container">
						<a href="" class="previous">PREVIOUS</a>
						<a href="" class="next-container"><button class="next">Next</button></a>
					</div>	
				</div>
				<div class="colp padding"></div>
			</div>
		</div>
			<div class="container modal-education">	
				<div class="modal fade" id="graduation-modal">
					<div class="modal-dialog">
						<div class="modal-content">
						
							<div class="modal-body">
									<div class="modal-conts">
										<div class="header-container">Graduation Details</div>
										<button class="close-btn" data-dismiss="modal"><span class="close" aria-hidden="true">+</span></button>
										<div class="row empty"></div>
										<div class="col padding"></div>
										<div class="col dataform">
											<div class="row grad-stat">Graduation status*:
												<div class="row deg-container">
													<div class="deg degree_completion_status_container_pursuing">
														<input type="radio" id="degree_completion_status_pursuing" name="degree_completion_status" value="pursuing" aria-required="true">Pursuing
													</div>
													<div class="deg degree_completion_status_container_completed">
												 		<input type="radio" id="degree_completion_status_completed" name="degree_completion_status" value="completed">Completed
											 		</div>
										 		</div>
									 		</div>
									 		<div class="row collegename">College*:
									 			<div class="name-container">
									 				<input type="text" id="college" tabindex="1" class="input-name" autocomplete="off" isautocomplete="" name="college" placeholder="Ex: Hindu College " required="" aria-required="true" aria-invalid="true">
									 			</div>
									 		</div>
									 		<div class="row course-duration">
									 			<div class="col start-year">Start year*:
									 				<div class="start-year-container">
									 					<select data-placeholder="Choose year..." id="start_year" name="start_year" class="chosen-select form-control chosen-year" tabindex="-1" style="display:;">	 
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
								 						<select data-placeholder="Choose year..." id="end_year input-type" name="end_year" class="chosen-select form-control chosen-year" tabindex="-1" style="display:;">	 
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
						 								<input type="text" id="stream" tabindex="5" class="stream-input" autocomplete="off" isautocomplete="" name="stream" placeholder="Ex: Economics ">
						 							</div>
						 						</div>
						 					</div>
						 					<div class="row tips_education">
						 						<ul>
						 							<li>Example: If your degree is B.Sc in Chemistry, then select Bachelor of Science (B.Sc) in <b>degree</b> and Chemistry in <b>streams</b>.
						 							</li>
						 						</ul>
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
						 								<input type="number" class="per-marks" id="performance-college" tabindex="7" name="performance" placeholder="0.00" aria-invalid="false">
						 							</div>
						 						</div>
						 						<div class="btn-holder">
				 									<a href="" class="next-container"><button class="close next" data-dismiss="modal">Save</button></a>
												</div>
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

	</body>
</html>
<!--<a href="https://www.flaticon.com">for icons</a> -->