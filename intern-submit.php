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

    $intern_profile=$_POST['intern_profile'];
    $intern_org = $_POST['intern_org'];
    $intern_loc= $_POST['intern_loc'];
    $start_int=$_POST['startdate_int'];
    $end_int=$_POST['enddate_int'];
    $description_int=$_POST['intern_description'];
    

    $sql = "INSERT INTO intern_details(intern_profile ,organization ,location ,start_date ,end_date ,description)
        VALUES('$intern_profile' ,'$intern_org' ,'$intern_loc' ,'$start_int', '$end_int' ,'$description_int')";
        
    if(!mysqli_query($conn,$sql)){
        die("Error : ".$sql."<br>".mysqli_error($conn));
    }
    echo "Registration Successful";

    exit;
    mysqli_close($conn);
?> 