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

    $deg_stat_ph=$_POST['degree_completion_status_ph'];
    $college_ph = $_POST['college_ph'];
    $start_year_ph=$_POST['start_year_ph'];
    $end_year_ph=$_POST['end_year_ph'];  
    $stream_name_ph=$_POST['stream_ph'];
    $performance_scale_ph=$_POST['performance_scale_ph'];
    $performance_marks_ph=$_POST['performance_ph'];

    $sql = "INSERT INTO phd(degree_status ,college ,start_year ,end_year ,stream ,performence_scale ,performence_marks)
        VALUES('$deg_stat_ph' ,'$college_ph' ,'$start_year_ph' ,'$end_year_ph' ,'$stream_name_ph' ,'$performance_scale_ph' ,'$performance_marks_ph')";
        
    if(!mysqli_query($conn,$sql)){
        die("Error : ".$sql."<br>".mysqli_error($conn));
    }
    echo "Registration Successful";



   // header('Location: work-exp.php');

    exit;
    mysqli_close($conn);
?> 