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
    $skill=$_POST['skill-input'];
    $rating = $_POST['rating'];
   
    $sql = "INSERT INTO skills (skill ,rating)
            VALUES('$skill' ,'$rating')";
    if(!mysqli_query($conn,$sql)){
        die("Error : ".$sql."<br>".mysqli_error($conn));
    }
    //echo "Registration Successful";
    header('Location: home.php');
    exit;
    mysqli_close($conn);
?> 
