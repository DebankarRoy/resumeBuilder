<?php

    $hostname = "127.0.0.1";
    $username = "root";
    $db_password = "ralphubuntu";
    $db_name = "resume";
    
    $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
    if(!$conn){
        die("connection failed : ".mysqli_connect_error());
    }

    $training_prog=$_POST['training_prog'];
    $training_org = $_POST['training_org'];
    $training_loc= $_POST['training_loc'];
    $start_year_tra=$_POST['startdate_tra'];
    $end_year_tra=$_POST['enddate_tra'];
    $description_tra=$_POST['training_description'];
    

    $sql = "INSERT INTO training_details(program_name ,organization ,location ,start_date ,end_date ,description)
        VALUES('$traing_prog' ,'$training_org' ,'$training_loc' ,'$start_year_tra', '$end_year_tra' ,'$description_tra')";
        
    if(!mysqli_query($conn,$sql)){
        die("Error : ".$sql."<br>".mysqli_error($conn));
    }
    echo "Registration Successful";

    exit;
    mysqli_close($conn);
?> 