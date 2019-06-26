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

    $project=$_POST['project_name'];
    $start_pro=$_POST['startdate_pro'];
    $end_pro=$_POST['enddate_pro'];
    $description_pro=$_POST['project_description'];
    $project_link=$_POST['project_link'];
    

    $sql = "INSERT INTO project_details (project_name ,start_date ,end_date ,description ,link)
        VALUES('$project' ,'$start_pro', '$end_pro' ,'$description_pro' ,'$project_link')";
        
    if(!mysqli_query($conn,$sql)){
        die("Error : ".$sql."<br>".mysqli_error($conn));
    }
    echo "Registration Successful";

    exit;
    mysqli_close($conn);
?> 