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

	//var_dump($userData);
	$_SESSION['ac_password'] = $userData['id'];
	$_SESSION['ac_email'] = $userData['email'];
	//$_SESSION['gender'] = $userData['gender'];
	//$_SESSION['picture'] = $userData['picture'];
	$last_name = $userData['familyName'];
	$first_name = $userData['givenName'];
	$_SESSION['ac_name']=$first_name.$last_name;	

	//echo $email.$name;

	header('Location: register-submit.php');
	exit();
?>