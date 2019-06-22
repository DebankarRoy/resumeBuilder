<?php
    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
           header("Location: home.php");
    }
?>

<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link rel="stylesheet" href="/social_media/css/register-login.css">
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
            <div class="row user">
                <b><label class="text">Existing User</label></b><br>
                <b><label class="text">Log-in</label></b>
            </div>
            <div class="div5">
                <a href="login.php"><span class="user-tag"> New User</span></a>
            </div>  
        </div>
        <div class="col right">
            <div class="create-ac">
                <p>Log-in</p>
            </div>
            <div class="form-box">
                <form action="register_submit.php" method="POST">
                    <div class="email">
                        <div class="col3"><label for="email">Email</label></div>
                        <div class="col4"><input type="text" name="email" required id="email"></div>
                    </div>
                    <div class="password">
                        <div class="col3"><label for="password1">Password</label></div>
                        <div class="col4"><input type="password" name="password" required id="password1"></div>
                    </div>
                    <div class="submit">
                       <div class="col3"><label></label></div>
                        <div class="col4"><input type="submit" name="submit" value="Log-in"></div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
