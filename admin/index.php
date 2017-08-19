<?php
	require_once '../src/auth.php';
	session_start();
	$auth = new auth();
	if (isset($_SESSION['logged_in'])) {
		echo "<h2>WELCOME</h2><hr>";
		var_dump($_SESSION);
        echo "<hr>";
        echo "<a href='user.php'>User</a><br>";
        echo "<a href='berita.php'>Berita</a><br>";
        echo "<a href='lib/logout.php'>logout</a><br>";
	} else {
		// header('Location: login.php');
	}

?>