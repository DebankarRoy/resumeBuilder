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
    //header('Location: home.php');

     //senior secondary education submit


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

    //secondary education submit

    $deg_stat_s=$_POST['degree_completion_status_s'];
    $school_s = $_POST['school_s'];
    $end_year_s=$_POST['end_year_s'];
    $board_s=$_POST['board_s'];    
    $performance_scale_ss=$_POST['performance_scale_s'];
    $performance_marks_ss=$_POST['performance_s'];

    $sql = "INSERT INTO secondary_details (degree_status ,school ,end_year ,board ,performence_scale ,performence_marks)
        VALUES ('$deg_stat_s' ,'$school_s' ,'$end_year_s' ,'$board_s' ,'$performance_scale_s' ,'$performance_marks_s')";
        
    if(!mysqli_query($conn,$sql)){
        die("Error : ".$sql."<br>".mysqli_error($conn));
    }
    echo "Registration Successful";


    //Post Graduation submission

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


    //Diploma submission

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


    //phd submission

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



    header('Location: work-exp.php');

    exit;
    mysqli_close($conn);
?> 


//onclick="submitgradForm()"