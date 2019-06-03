<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/home-2.css"/>
		<link rel="stylesheet" href="css/modal-2.css"/>

		<title>Skills</title>
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
			<div class="col student-info bor-red">
				<div class="row heading skill"><h3>Skills</h3>
				</div>

				<div class="col padding"></div>

				<div class="col dataform tag">
					<h4 class="font-weight-h4">What skills do you have?</h4>
					<div class="row skill-input">
						<form role="form" novalidate="novalidate" id="skills" name="skills" enctype="multipart/form-data" method="post" action="skills-submit.php">
							
							<input class="form-control skills-in " id="skill"index="2" name="skill-input" placeholder="Ex: C Programming Language" value="" type="text">
						
							<div class="add-skills-rating-container" style="display: block;">
							    <div id="rating_question">How would you rate yourself at this ?</div>
							    <div class="skills_edit_cancel" style="display: none;">(×)Cancel
							    </div>
							    <div class="rating-container">
							        <input class="btn btn-primary rating-value" value="Beginner" name="rating" readonly="readonly" type="submit">
							        <input class="btn btn-primary rating-value" value="Intermediate" name="rating" readonly="readonly" type="submit">
							        <input class="btn btn-primary rating-value" value="Advanced" name="rating" readonly="readonly" type="submit">
							    </div>
						    </div>

						    <div class="button-container btn-pos">
								<a href="work-exp.php" class="previous">PREVIOUS</a>
								<input type="submit" class="next-button_container" id="personal-detail-submit" tabindex="" value="Done" type="submit">
							</div>
					    </form>
					</div>
					
				</div>
			</div>

				<div class="col padding"></div>
		</div>

		<script src="js/skill-selector.js" type="text/javascript" charset="utf-8" async defer></script>
	</body>
	</html>
