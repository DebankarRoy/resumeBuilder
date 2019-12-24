<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("596705262876-fthlaorre7bmog8co428hen1uc66g04t.apps.googleusercontent.com");
	$gClient->setClientSecret("DZ8Xt6_1NptX69z3Kl-d6kKD");
	$gClient->setApplicationName("resumer");
	$gClient->setRedirectUri("http://localhost/Resume/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
