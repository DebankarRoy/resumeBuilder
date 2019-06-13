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

    $job_profile=$_POST['job_profile'];
    $job_org = $_POST['job_org'];
    $job_loc= $_POST['job_loc'];
    $start_job=$_POST['startdate_job'];
    $end_job=$_POST['enddate_job'];
    $description_job=$_POST['job_description'];
    

    $sql = "INSERT INTO job_details(job_profile ,organization ,location ,start_date ,end_date ,description)
        VALUES('$job_profile' ,'$job_org' ,'$job_loc' ,'$start_job', '$end_job' ,'$description_job')";
        
    if(!mysqli_query($conn,$sql)){
        die("Error : ".$sql."<br>".mysqli_error($conn));
    }
    echo "Registration Successful";

    exit;
    mysqli_close($conn);
?> 