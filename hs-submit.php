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


    $deg_stat_ss=$_POST['degree_completion_status_ss'];
    $school = $_POST['school'];
    $end_year=$_POST['end_year_ss'];
    $board_ss=$_POST['board_ss'];    
    $stream_name_ss=$_POST['stream_ss'];
    $performance_scale_ss=$_POST['performance_scale_ss'];
    $performance_marks_ss=$_POST['performance_ss'];

    $sql = "INSERT INTO senior_secondary(degree_status ,school ,end_year ,board ,stream ,performence_scale ,performence_marks)
        VALUES('$deg_stat_ss' ,'$school' ,'$end_year' ,'$board_ss' ,'$stream_name' ,'$performance_scale_ss' ,'$performance_marks_ss')";
        
    if(!mysqli_query($conn,$sql)){
        die("Error : ".$sql."<br>".mysqli_error($conn));
    }
    echo "Registration Successful";

    exit;
    mysqli_close($conn);
?> 