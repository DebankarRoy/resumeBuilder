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

    $deg_stat_pg=$_POST['degree_completion_status_pg'];
    $college_pg = $_POST['college_pg'];
    $start_year_pg=$_POST['start_year_pg'];
    $end_year_pg=$_POST['end_year_pg'];
    $degree_pg=$_POST['degree_pg'];    
    $stream_name_pg=$_POST['stream_pg'];
    $performance_scale_pg=$_POST['performance_scale_pg'];
    $performance_marks_pg=$_POST['performance_pg'];

    $sql = "INSERT INTO post_graduation(degree_status ,degree ,college ,start_year ,end_year ,stream ,performence_scale ,performence_marks)
        VALUES('$deg_stat_pg' ,'$degree_pg' ,'$college_pg' ,'$start_year_pg' ,'$end_year_pg' ,'$stream_name_pg' ,'$performance_scale_pg' ,'$performance_marks_pg')";
        
    if(!mysqli_query($conn,$sql)){
        die("Error : ".$sql."<br>".mysqli_error($conn));
    }
    echo "Registration Successful";

    exit;
    mysqli_close($conn);
?> 