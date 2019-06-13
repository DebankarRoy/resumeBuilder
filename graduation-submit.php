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

    $deg_stat=$_POST['degree_completion_status_grad'];
    $college = $_POST['college'];
    $start_year=$_POST['start_year_clg'];
    $end_year=$_POST['end_year_clg'];
    $degree_name = $_POST['degree'];
    $stream_name=$_POST['stream_clg'];
    $performance_scale=$_POST['performance_scale_clg'];
    $performance_marks=$_POST['performance_clg'];

    $sql = "INSERT INTO graduation(degree_status ,college ,start_year ,end_year ,degree ,stream ,performence_scale ,performence_marks)
        VALUES('$deg_stat' ,'$college' ,'$start_year', '$end_year' ,'$degree_name' ,'$stream_name' ,'$performance_scale' ,'$performance_marks')";
        
    if(!mysqli_query($conn,$sql)){
        die("Error : ".$sql."<br>".mysqli_error($conn));
    }
    echo "Registration Successful";
    
    exit;
    mysqli_close($conn);
?> 
