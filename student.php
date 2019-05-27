<!DOCTYPE html>
<html>
	<head>

		<link rel="stylesheet" href="css/home.css"/>
		<link rel="stylesheet" href="css/modal.css"/>
		<title>Student details</title>
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
			<div class="col student-info">
				<div class="row heading"><h3>Personal details</h3>
				</div>
				<div class="row empty"></div>

				<div class="col padding"></div>

				<div class="col dataform">
					<form role="form" novalidate="novalidate" id="personal_details" name="registration" enctype="multipart/form-data" method="POST">

					    <div class="row form-group">
					        <label for="name" class="control-label">Name*:</label>
					        <div class="input-group">
					            <select class="form-control salutation" id="salutation" tabindex="1" name="salutation">
					                <option value="" hidden="">Title</option>
					                <option value="mr">Mr.</option>
					                <option value="mrs">Mrs.</option>
					                <option value="ms">Ms.</option>
					            </select>
					            <input class="form-control first_name" id="first_name" tabindex="2" name="first_name" placeholder="First Name" value="" type="text">
					            <input class="form-control last_name" id="last_name" tabindex="3" name="last_name" placeholder="Last Name" value="" type="text">
        					</div>
    					</div>
					    <div class="row form-group">
					        <label for="number" class="control-label">Mobile Number*:</label>
					        <div class="input-group">
					            <input type="number"  class="wid form-control mobile-number" tabindex="6" id="phone_primary" name="phone_primary" placeholder="Your 10 digit mobile number " value="">
					        </div>
					    </div>

					    <div class="row form-group">
					        <label for="email" class="control-label">Email*:</label>
					        <div class="input-group">
					            <input type="text" class="wid form-control" id="email" tabindex="" name="email" placeholder="random@random.com" value="" autocomplete="off">	
					        </div>
					    </div>

					    <div class="row form-group">
					        <label for="current_city" class="control-label">Current City*:</label>
					        <div class="input-group">
					            <input type="text" class="wid form-control" id="current_city" tabindex="" name="current_city" placeholder="Start typing.." value="" autocomplete="off">	
					        </div>
					    </div>
					    
					    <div class="row button_container">
	                        <input name="submit" class="next-button_container" id="personal-detail-submit" tabindex="9" value="NEXT" type="submit">
					    </div>
					</form>
				</div>

				<div class="col padding"></div>

			</div>
		</div>
	</body>
	</html>