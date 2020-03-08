<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/home-2.css"/>
		<link rel="stylesheet" href="css/modal-2.css"/>
		<style>
			html {
			    background-color: #E0F2F2;
			}
			.footer{
			    position: fixed;
			    bottom: 0;
			}
		</style>
		
		<title>Resumes</title>
		<link rel = "icon" href ="img/binder.png">
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
			  <a href="logout.php">Logout</a>
			</div>

			<div id="menu-bar-open">
			  <span class="menu-bar" onclick="openNav()">&#9776;</span>
			</div>

		<div class="body-part">
			<div class="triangle-left"></div>
			<div class="triangle-right"></div>
			<div class="triangle-left-up"></div>
			<div class="triangle-right-up"></div>
			<div class="row pad-row up"></div>
			<div class="" id="student-profile-fetching"></div>
			<div class="row pad-row lower-row"></div>
		</div>

		<div class="row footer">
			<div class="colp left">
				<span class="flaticon_text">icons by</span>
				<a href="https://www.flaticon.com/"><img src="img/flaticon-logo.svg" class="flaticon_img"></a>
			</div>
			<div class="colp right>">
				<span class="social_ids">Connect with me</span>
				<div class="social_id_img">
					<a href="https://www.instagram.com/ralph_since99/" target="_blank"><img src="img/instagram.png" class="insta_img"></a>
					<a href="https://www.linkedin.com/in/debankar-roy-ralph/" target="_blank"><img src="img/linkedin.png" class="linkedin_img"></a>
				</div>
			</div>				
		</div>



		<script src="js/jquery.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/student-fetch.js"></script>
		<script src="js/resumes-fetch.js"></script>
		<script src="js/education-fetch.js"></script>
		<script>
			function openNav() {
			  document.getElementById("mySidenav").style.width = "250px";
			}

			function closeNav() {
			  document.getElementById("mySidenav").style.width = "0";
			}
		</script>

		<script>
		    $(document).ready(function(){
		        $("#myModal").modal('show');
		    });
		</script>

</body>
</html>