
<?php
	require_once '../src/auth.php';
	session_start();
	$auth = new auth();
	if (isset($_SESSION['logged_in'])) {
		header('Location: index.php');
	} else { ?>
		<form action="lib/postLogin.php"  method="post">

        <input name="username" type="text" class="form-control" placeholder="Username"/><br>


        <input name="password" type="password" class="form-control" placeholder="Password"/><br>
        <a href="#" >Register</a><br>

        <input type="submit" value="Log In">
</div>
</form>
	<?php }

?>