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

    $deg_stat_s=$_POST['degree_completion_status_s'];
    $school_s = $_POST['school_s'];
    $end_year_s=$_POST['end_year_s'];
    $board_s=$_POST['board_s'];    
    $performance_scale_s=$_POST['performance_scale_s'];
    $performance_marks_s=$_POST['performance_s'];

    $sql = "INSERT INTO secondary(degree_status ,school ,end_year ,board ,performence_scale ,performence_marks)
        VALUES ('$deg_stat_s' ,'$school_s' ,'$end_year_s' ,'$board_s' ,'$performance_scale_s' ,'$performance_marks_s')";
        
    if(!mysqli_query($conn,$sql)){
        die("Error : ".$sql."<br>".mysqli_error($conn));
    }
    echo "Registration Successful";

    exit;
    mysqli_close($conn);
?> 