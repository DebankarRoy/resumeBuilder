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
    $sal=$_POST['salutation'];
    $first_name = $_POST['first_name'];
    $last_name=$_POST['last_name'];
    $phone_no=$_POST['phone_no'];
    $email = $_POST['email'];
    $current_city=$_POST['current_city'];
    $sql = "INSERT INTO profiles (salutation,first_name,last_name,email_student,phone_number,city)
            VALUES('$sal','$first_name','$last_name','$email','$phone_no','$current_city')";
    if(!mysqli_query($conn,$sql)){
        die("Error : ".$sql."<br>".mysqli_error($conn));
    }
    //echo "Registration Successful";
    header('Location: home.php');
    exit;
    mysqli_close($conn);
?> 
