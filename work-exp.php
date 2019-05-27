<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/home.css"/>
		<link rel="stylesheet" href="css/modal.css"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<title></title>
	</head>
	<body>

		<div class="row upper">
			<div class="col logo"></div>
			<div class="col mid"></div>
			<div class="col user"></div>
		</div>
		<div class="row lower">
			<div class="row slide">
				
				<img src="img/user.png" class="attr prof">
				<img src="img/mortarboard.png" class="attr edu">
				<img src="img/test.png" class="attr work">
				<img src="img/artificial-intelligence.png" class="attr skills">
				<img src="img/folder1.png" class="attr worksample">
			</div>
			<div class="col work-exp">
				<div class="row heading exp"><h3>Experinece</h3>
				</div>
				<div class="col padding"></div>
				<div class="col dataform">
					<div class="row dialouge2"><h3>Do you have any past internship or job experience?</h3></div>
					<div class="row discipline2" data-toggle="modal" data-target="#intern-modal" id="grad">Internship
						<i class="fa fa-plus education-fa-plus fa-x pos" aria-hidden="true"></i>
					</div>
					<div class="row discipline2" data-toggle="modal" data-target="#job-modal">job
						<i class="fa fa-plus education-fa-plus fa-x pos" aria-hidden="true"></i>
					</div>
					<div class="button-container">
						<a href="" class="previous">PREVIOUS</a>
						<a href="" class="skip previous">SKIP</a>
					</div>
				</div>

				<div class="container modal-intern">
					<div class="modal fade" id="intern-modal">
						<div class="modal-dialouge">
							<div class="modal-content">
								<div class="modal-body">
									<div class="modal-conts">
										<div class="header-container">Graduation Details</div>
										<span class="close" aria-hidden="true" data-dismiss="modal">+</span>
										<div class="row empty"></div>
										<div class="col padding"></div>
										<div class="modal-dataform"></div>
										<div class="padding"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col padding"></div>


		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>
	</html>