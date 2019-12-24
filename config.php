<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("596705262876-13pub7ku2p3a8t58r59a2p23qqejs6p0.apps.googleusercontent.com");
	$gClient->setClientSecret("ksc5UB9QlZX8a62Wb6cDii0J");
	$gClient->setApplicationName("final resumer");
	$gClient->setRedirectUri("http://localhost/Resume/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
