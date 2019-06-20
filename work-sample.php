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
				<img src="img/folder2.png" class="attr worksample">
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
		    </div>


			<div class="col student-info bor-org colp">
				<div class="row heading sample"><h3>Work Samples</h3>
				</div>

				<div class="col padding"></div>

				<div class="col dataform ">
					<h4 class="font-weight-h4 padding-h4">Add your work sample links here (if any):</h4>
					<form role="form" novalidate="novalidate" id="work-samples" name="work-samples" enctype="multipart/form-data" method="POST" action = "work-sample-submit.php">
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
							<input class="form-control link-input " id="skill"index="2" name="behnace" placeholder="http://behance.net/my_profile" value="" type="text">
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

				<div class="col padding"></div>

			</div>
		</div>
	</body>
	</html>