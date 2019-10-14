<?php
	require_once "config.php";

	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']);
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		header('Location: login.php');
		exit();
	}

	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();

	$password = $userData['id'];
	$email = $userData['email'];
	//$_SESSION['gender'] = $userData['gender'];
	//$_SESSION['picture'] = $userData['picture'];
	$last_name = $userData['familyName'];
	$first_name = $userData['givenName'];
	$name=$first_name.$last_name;
	

	if(isset($userData['email']) && isset($userData['familyName']) && isset($userData['givenName']))
    {
		$hostname = "127.0.0.1";
		$username = "root";
		$db_password = "ralphubuntu";
		$db_name = "resume";

		$conn = mysqli_connect($hostname, $username, $db_password, $db_name);
		if(!$conn){
		die("connection failed : ".mysqli_connect_error());
		}

        $sql = "SELECT * FROM users WHERE email='$email'";
		$results = mysqli_query($conn, $sql);

		if (mysqli_num_rows($results) > 0) {

		  	$sql = "select * from users where email='$email' and password='$password'";
	        $result = mysqli_query($conn, $sql);
	        if (!$result) {
	           die("Error: " . $sql . "<br>" . mysqli_error($conn));
	           //echo("wrong password or email");
	        }
	        
	        while ($row=mysqli_fetch_array($result)) {
	            session_start();
	            $_SESSION['loggedin']=true;    
	            $_SESSION['id'] = $row['id'];
	            $_SESSION['name'] = $row['name'];
	            header('Location: home.php');
	            exit;
	        }	
		}
		else{ 

	        $sql = "INSERT INTO users (name, email, password)
	                VALUES('$name', '$email', '$password')";
	        $result=mysqli_query($conn,$sql);
	        if(!$result){
	            die("Error : ".$sql."<br>".mysqli_error($conn));
	        }

	        while ($row=mysqli_fetch_array($result)) {
	            session_start();
	            $_SESSION['loggedin']=true;    
	            $_SESSION['id'] = $row['id'];
	            $_SESSION['name'] = $row['name'];
	            header('Location: home.php');
	            exit;
	        }
        }   
    }

	//header('Location: index.php');
	exit();
?>