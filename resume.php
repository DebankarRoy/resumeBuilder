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
		
		<title>Resume</title>
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
                   /* echo $_POST['activeprofileid'];
                    $abcd=$_SESSION['profileid'];
                      
                    echo $_SESSION['profileid'];
        			echo $_SESSION['profilename'];*/ 

        			if(isset($_POST['activeprofileid'])) {
        				$_SESSION['profileid']=$_POST['activeprofileid'];
        			}       
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
		<div id="mySidenav" class="sidenav">

			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			  <a href="home.php">Home</a>
			  <a href="resumes.php">Resumes</a>
			  <a href="logout.php">Logout </a>
		</div>
		<div id="menu-bar-open">
		  <span class="menu-bar" onclick="openNav()">&#9776;</span>
		</div>
		<div class="row lower-content">
			<div class="row slide resume-slide">
				
				<a href="education.php"><img src="img/mortarboard.png" class="attr edu"></a>
				<a href="work-exp.php"><img src="img/test.png" class="attr work"></a>
				<a href="skills.php"><img src="img/artificial-intelligence.png" class="attr skills"></a>
				<a href="work-sample.php"><img src="img/folder1.png" class="attr worksample"></a>
				<a href="resume.php"><img src="img/resume2.png" class="attr resume"></a>
			</div>


			<div id="up-arrow-container" class="row arrow-cont arrow-cont-resume">
		        
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow education_details_element inactive filled"></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow experiences_element inactive filled" ></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow skills_element inactive" ></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow work_samples_element inactive" ></div>
		        </div>
		        <div class="col arr awesome_nav_element_container">
		            <div class="up-arrow resume_element " ></div>
		        </div>
		    </div>
			<div class="col resume-col"></div>
			<div class="col resume-content">
				<div class="row personal-table" id="student-fetching">	
				</div>
				<div class="row education-table">
					<div class="col details-left"><h4>Education</h4></div>
					<div class="col details-right">

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
						<div class="row add-more">
						<a href="education.php"><span class="clr-blue">+ Add more info:</span></a>
					</div>
					</div>
				</div>
				<div class="row experience-table">
					<div class="col details-left"><h4>Experiences</h4></div>
					<div class="col details-right">
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

						<div class="row add-more">
							<a href="work-exp.php"><span class="clr-blue">+ Add more info:</span></a>
						</div>
					</div>
					
				</div>
				<div class="row skills-table">
					<div class="col details-left"><h4>Skills</h4></div>
					<div class="col details-right">
						<div class="skills-container" id="skills-fetching">
							<div class="row">
							</div>
						</div>
						<div class="row add-more mrg-one">
						<a href="skills.php"><span class="clr-blue ">+ Add more info:</span></a>
					</div>
					</div>
					
				</div>
				<div class="row samples-table">
					<div class="col details-left"><h4>Work Samples</h4></div>
					<div class="col details-right">
						<div class="row add-more" id="work-sample-fetching">
							<a href="work-sample.php"><span class="clr-blue">+ Add more info:</span></a>
						</div>
					</div>
				</div>
			<div class="col resume-col"></div>
			<div class="row resume-download"></div>
		</div>

	           <!-- Modal -->
	    <div class="modal fade" id="update_studentprofile" tabindex="-1" role="dialog" aria-labelledby="studentprofileTitle" aria-hidden="true">
	      <div class="modal-dialog modal-dialog-centered" role="document">
	        <div class="modal-content update-height">
	        
	            <div class="header-container update-clr">Student Details</div>
	            <span class="close" aria-hidden="true" data-dismiss="modal">+</span>

	            <div class="col data-update update-padding">
	            	<form role="form" novalidate="novalidate" id="update_profile" name="profile_update" enctype="multipart/form-data">
		                <div class="row form-group">
		                    <label for="name" class="control-label" id="x">Name:</label>
		                    <div class="input-group salutation">
		                        <input class="form-control name" id="update_name" tabindex="2" name="name" placeholder="Update your name" value="" type="text">
		                 
		                    </div>
		                </div>
		                <div class="row form-group">
		                    <label for="number" class="control-label">Mobile Number:</label>
		                    <div class="input-group">
		                        <input type="number"  class="wid form-control mobile-number" tabindex="4" id="update_mobile" name="phone_no" placeholder="Update mobile number " value="">
		                    </div>
		                </div>

		                <div class="row form-group">
		                    <label for="email" class="control-label">Email:</label>
		                    <div class="input-group">
		                        <input type="text" class="wid form-control" id="update_email" tabindex="5" name="email" placeholder="Update your email" value="" autocomplete="off">   
		                    </div>
		                </div>

		                <div class="row form-group">
		                    <label for="current_city" class="control-label">Current City:</label>
		                    <div class="input-group">
		                        <input type="text" class="wid form-control" id="update_city" tabindex="6" name="current_city" placeholder="Update your city" value="" autocomplete="off">    
		                    </div>
		                </div>
	                </form>
	            </div>
	            <div class="row">
	                <button type="button" class="btn btn-secondary update-btn-pos" data-dismiss="modal">Close</button>
	                <button type="button" class="btn btn-info update-btn-pos" id="update_stu" onclick="updatestudent()">Save changes</button>
	            </div>
	        </div>
	      </div>
	    </div>

	    <div class="row footer forresume">
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

	</body>


	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jQueryValidation.js"></script>
	<script src="js/student-fetch.js"></script>
	<script src="js/education-submit.js"></script>
	<script src="js/education-fetch.js"></script>
	<script src="js/work-exp-submit.js"></script>
	<script src="js/work-exp-fetch.js"></script>
	<script src="js/skill-submit.js"></script>
	<script src="js/skills-fetch.js"></script>
	<script src="js/work-sample-fetch.js"></script>
	<script src="js/navbar.js"></script>

	<script>
		$('document').ready(function(){
			$('.rmv-img').hide();
		})	
	</script>

	<script>
		function editprofile(id){
		  $("#hidden_user_id").val(id);
		  $.post("submit/student-submit.php", {
	            id: id
	        },
	        function (data, status) {
	            //alert(data);
	            //JSON.parse() parses a string, written in JSON format, and returns a JavaScript object.
	            var user = JSON.parse(data);
	           
	            //alert(user);
	            
	            $("#update_name").val(user.name);
	            $("#update_email").val(user.email_student);
	            $("#update_mobile").val(user.phone_number);
	            $("#update_city").val(user.city);
	            var a=user.id;
	            document.getElementById('update_stu').setAttribute( "onClick", 'updatestudent('+a+')'); 
    		}
    		);	 
		//$("#update_studentprofile").modal("show"); 
		}

		function updatestudent(updateid){
		    var frm = $('#update_studentprofile');
		    $('#update_studentprofile').validate({
		    rules: {
		      name: 'required', 
		      phone_no: 'required',
		      email: 'required',
		      current_city: 'required'
		    }
		  });

		    if($('#update_studentprofile').valid())
		    {
		     $.ajax({
		        type: "POST",
		        url: "submit/student-submit.php",
		        data: {updateid:updateid,frm.serialize(),}
		        success: function(data,status) {
		          //readRecordsstudent();
		            }
		        });
		    }
		     
		}
	</script>
</html>