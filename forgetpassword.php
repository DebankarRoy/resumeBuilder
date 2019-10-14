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

        <link rel="stylesheet" href="css/register-login.css">
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
                <b><label class="text">Recovering Account</label></b><br>
                
            </div>
            <div class="div5">
                <a href="register.php"><span class="user-tag"> New User</span></a>
            </div>  
        </div>
        <div class="col right">
            <div class="recovering-form-box">
                <form action="password-reset.php" id="recovering-form" enctype="multipart/form-data" method="GET">
                    <div class="email">
                        <div class="col3"><label for="email">Recovering Email</label></div>
                        <div class="col4"><input type="text" name="email" required id="email" placeholder="Enter your registered email"></div>
                    </div>
                    
                    <div class="submit">
                       <div class="col3"><label></label></div>
                        <div class="col4"><input type="submit" name="submit" value="send mail" class="submit-btn"></div>
                    </div>
                </form>
            </div>
        </div>

        
        <script src="js/jquery.min.js"></script>
        <script src="js/jQueryValidation.js"></script>
        <script src="js/form-validations.js"></script>
        <script>
            $('document').ready(function(){
              $('#email').on('blur', function(){
              var email = $('#email').val(); 
              console.log(email);
              $.ajax({
                  url: 'email-check.php',
                  type: 'get',
                  data: {
                    'email' : email,
                  },
                  success: function(response){
                    if (response == 'not_taken' ) {
                        console.log(response);
                      $('.submit-btn').hide();
                      alert("You don't have an account on this email");
                    }

                    else{
                      $('.submit-btn').show();
                    }
                  }
                });
            });
            });
        </script>
    </body>
</html>
