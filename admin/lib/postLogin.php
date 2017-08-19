<?php
	session_start();
	require_once '../../src/auth.php';
	// require_once '../../src/config.php';
	$auth = new auth();
	// $url = new url();
	// var_dump($auth);
	if($auth->login($_POST['username'],$_POST['password'])) {
		session_start();
		$data =  $auth->login($_POST['username'],$_POST['password']);
	}
	if (isset($_SESSION['logged_id'])) {
		header('Location: ../index.php');
	} else {
		header('Location: ../login.php');
} ?>