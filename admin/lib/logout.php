<?php
	session_start();
	require_once '../../src/auth.php';
	$auth = new auth();
	$auth->logout();
	header('Location: ../login.php');
?>