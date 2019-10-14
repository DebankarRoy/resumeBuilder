<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("81847069944-sb4mhunqemhfd0410j3obtftbh1ri8hd.apps.googleusercontent.com");
	$gClient->setClientSecret("yXAIoAK7j3fkvHFRBRNYgW3J");
	$gClient->setApplicationName("resumer login");
	$gClient->setRedirectUri("http://localhost/Resume/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
