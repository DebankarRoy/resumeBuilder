<?php
    session_start();
    $hostname = "127.0.0.1";
    $username = "root";
    $db_password = "ralphubuntu";
    $db_name = "resume";
    
    $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
    if(!$conn){
        die("connection failed : ".mysqli_connect_error());
    }

     if(isset($_POST['blog'])){

        $userid_loggedin=$_SESSION['profileid'];
        $blog=$_POST['blog'];

        if ($blog!='') { 
            $sql = "INSERT INTO blog (blog ,profiles_id)
                VALUES('$blog' ,'$userid_loggedin')";
            }

        mysqli_query($conn,$sql);

    }

    if(isset($_POST['github'])){
        $userid_loggedin=$_SESSION['profileid'];
        $github = $_POST['github'];
        
        if ($github!='') { 
            $sql = "INSERT INTO github (github ,profiles_id)
                VALUES('$github' ,'$userid_loggedin')";
               
              
            if(!mysqli_query($conn,$sql)){
                die("Error : ".$sql."<br>".mysqli_error($conn));
            }
            echo "Registration Successful";
            //header('Location: /Resume/resume.php');
        }
    }

    if(isset($_POST['playstore'])){
        $userid_loggedin=$_SESSION['profileid'];
        $playstore=$_POST['playstore'];

        if ($playstore!='') { 
            $sql = "INSERT INTO playstore (playstore ,profiles_id)
                VALUES('$playstore' ,'$userid_loggedin')";
               
              
            if(!mysqli_query($conn,$sql)){
                die("Error : ".$sql."<br>".mysqli_error($conn));
            }
            echo "Registration Successful";
            //header('Location: /Resume/resume.php');
        }
    }

    if(isset($_POST['behance'])){
        $userid_loggedin=$_SESSION['profileid'];
        $behance=$_POST['behance'];

        if ($behance!='') { 
            $sql = "INSERT INTO behance (behance ,profiles_id)
                VALUES('$behance' ,'$userid_loggedin')";
               
              
            if(!mysqli_query($conn,$sql)){
                die("Error : ".$sql."<br>".mysqli_error($conn));
            }
            echo "Registration Successful";
            //header('Location: /Resume/resume.php');
        }
    }

    if(isset($_POST['other'])){
        $userid_loggedin=$_SESSION['profileid'];
        $other = $_POST['other'];

        if ($other!='') { 
            $sql = "INSERT INTO other_samples (other ,profiles_id)
                VALUES('$other' ,'$userid_loggedin')";
               
              
            if(!mysqli_query($conn,$sql)){
                die("Error : ".$sql."<br>".mysqli_error($conn));
            }
            echo "Registration Successful";
            //header('Location: /Resume/resume.php');
        }
    }

   header('Location: /Resume/resume.php'); 
    exit;
    mysqli_close($conn);
?> 
