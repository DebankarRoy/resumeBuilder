<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/home-2.css"/>
		<link rel="stylesheet" href="css/modal-2.css"/>
		<style>
			.colp{
				height: none;
				}
		</style>
		
		<title>Skills</title>
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
                    //echo $userid_loggedin;
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
				<a href="work-exp.php"><img src="img/test.png" class="attr work"></a>
				<a href="skills.php"><img src="img/artificial-intelligence2.png" class="attr skills"></a>
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
		            <div class="up-arrow experiences_element inactive" ></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow skills_element " ></div>
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

			<div class="col student-info bor-red">
				<div class="row heading skill"><h3>Skills</h3>
				</div>

				<div class="col padding"></div>

				<div class="col dataform tag">
					<h4 class="font-weight-h4">What skills do you have?</h4>
					<div class="row skill-input">
						<form role="form" novalidate="novalidate" id="skills" name="skills" enctype="multipart/form-data">
							
							<input class=" skills-in " id="skill"index="2" name="skill-input" placeholder="Ex: C Programming Language" value="" type="text">
						
							<div class="add-skills-rating-container" style="display: none;">
							    <div id="rating_question">How would you rate yourself at this ?</div>
							    <div class="skills_edit_cancel" style="display: none;">(×)Cancel
							    </div>
							    <div class="rating-container">
							        <button class="btn btn-primary rating-value" value="Beginner" name="rating" readonly="readonly" onclick="Submitskill()">Beginner</button>
							        <button class="btn btn-primary rating-value" value="Intermediate" name="rating" readonly="readonly" onclick="Submitskill()">Intermediate</button>
							        <button class="btn btn-primary rating-value" value="Advanced" name="rating" readonly="readonly" onclick="Submitskill()">Advanced</button>
							    </div>
						    </div>
					    </form>

						    <div class="row button-container btn-pos btn-pos-skills">
								<a href="work-exp.php" class="previous">PREVIOUS</a>
								<a href="work-sample.php"><button class="next">NEXT</button></a>
							</div>  
					</div>
					
				</div>

				<div class="col padding"></div>
			</div>

				
		</div>

		<script src="js/skill-submit.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>
			function openNav() {
			  document.getElementById("mySidenav").style.width = "250px";
			}

			function closeNav() {
			  document.getElementById("mySidenav").style.width = "0";
			}
		</script>

		<script>
			$('document').ready(function(){
			  $('.skills-in').on('keyup',function(){
				var val =$('.skills-in').val();
				if(val!=''){
                        $('.add-skills-rating-container').show();
                    }else{
                        $('.add-skills-rating-container').hide();
                    }
			 });
			});
		</script>

	</body>
	</html>
