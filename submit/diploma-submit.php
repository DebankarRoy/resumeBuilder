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

    $deg_stat_dp=$_POST['degree_completion_status_dp'];
    $college_dp = $_POST['college_dp'];
    $start_year_dp=$_POST['start_year_dp'];
    $end_year_dp=$_POST['end_year_dp'];  
    $stream_name_dp=$_POST['stream_dp'];
    $performance_scale_dp=$_POST['performance_scale_dp'];
    $performance_marks_dp=$_POST['performance_dp'];

    $sql = "INSERT INTO diploma(degree_status ,college ,start_year ,end_year ,stream ,performence_scale ,performence_marks)
        VALUES('$deg_stat_dp' ,'$college_dp' ,'$start_year_dp' ,'$end_year_dp' ,'$stream_name_dp' ,'$performance_scale_dp' ,'$performance_marks_dp')";
        
    if(!mysqli_query($conn,$sql)){
        die("Error : ".$sql."<br>".mysqli_error($conn));
    }
    echo "Registration Successful";

    exit;
    mysqli_close($conn);
?> 