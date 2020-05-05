<?php
	session_start();

    if(isset($_POST['token']) && isset($_POST['password']))
    {
    	$token=$_POST['token'];
    	$password=$_POST['password'];
		$token_new=bin2hex(random_bytes(15));
		$pass=password_hash($password, PASSWORD_BCRYPT);

		include "conn.php";
		$sql = " UPDATE users SET  password='$pass', `token`='$token_new'where token='$token' "; 
	    if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        //else
        //	echo "not ";
        echo "Password reset Successful";
        header('Location:/Resume/login.php');

	
    }
?>