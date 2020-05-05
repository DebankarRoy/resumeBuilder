<?php
    session_start();
    $token=$_GET['token'];
    include "conn.php";

    $sql = "SELECT * FROM users WHERE token='$token'";
	$results = mysqli_query($conn, $sql);
	if (mysqli_num_rows($results) ==0)
	{
		?>
			<script>
				alert("You're not authorized");
				location.replace("login.php");
			</script>
		<?php	
	}
    
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
           header("Location: student.php");
    }
?>

<html>
    <head>
        <title>Account Recover</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link rel="stylesheet" href="/social_media/css/register-login.css">
        <link rel = "icon" href ="img/resume2.png">
    </head>
    <body>
        <div class="col left">
            <div class="row logo">
                <div class="logo-img">
                    <img src="img/hiring2.png" alt="resumer logo">
                </div>
                <div class="logo-text">
                    <div class="col head-text">
                        <span class="re"><b>Re</b></span>
                        <span class="sumer"><b>sumer</b></span> 
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col right">
            <div class="create-ac">
                <p>Set New Password</p>
            </div>
            <div class="form-box">
                <form action="password_update.php" enctype="multipart/form-data" id="register-form" method="POST">
                    <div class="password">
                        <div class="col3"><label for="password1">New Password</label></div>
                        <div class="col4"><input type="password" name="password" required id="password1"></div>
                    </div>
                    <div class="password">
                        <div class="col3"><label for="password2">Confirm Password</label></div>
                        <div class="col4"><input type="password" name="confirmpassword" required id="password2"></div>
                    </div>
                    <div class="token">
                        <input type="hidden" name="token" value="<?php echo$token;?>" >
                    </div>
                    <div class="submit">
                       <div class="col3"><label></label></div>
                        <div class="col4"><input type="submit" class="submit-btn" name="submit" value=" Submit"></div>
                    </div>
                </form>
            </div>

            
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/jQueryValidation.js"></script>
        <script src="js/form-validations.js"></script>
        <script src="js/unique-email-checker.js"></script>
    </body>
</html>

