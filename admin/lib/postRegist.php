<?php
	session_start();
	require_once '../../src/user.php';

	$user = new user();
    $user->username = $_POST['username'];
    $user->email = $_POST['email'];
    $user->fullname = $_POST['name'];
    $user->password = $_POST['password'];
    if($_POST['password'] == $_POST['conPassword']){

        $user->create();

    }
    header('Location: ../login.php');
?>

