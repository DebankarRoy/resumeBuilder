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

    $blog=$_POST['blog'];
    $github = $_POST['github'];
    $playstore=$_POST['playstore'];
    $behance=$_POST['behance'];
    $other = $_POST['other'];

    $sql = "INSERT INTO work_samples (blog ,github ,playstore ,behance ,other)
        VALUES('$blog' ,'$github' ,'$playstore' ,'$behanace' ,'$other')";
        
    if(!mysqli_query($conn,$sql)){
        die("Error : ".$sql."<br>".mysqli_error($conn));
    }
    echo "Registration Successful";
    //header('Location: home.php');
    exit;
    mysqli_close($conn);
?> 
