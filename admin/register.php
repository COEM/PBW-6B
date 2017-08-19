
<?php
	// require_once '../src/auth.php';
	session_start();
	// $auth = new auth();
	if (isset($_SESSION['logged_in'])) {
		header('Location: index.php');
	} else { ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>COWM news Admin Login</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <link href="../assets/css/auth.css" rel="stylesheet">



  </head>

  <body>

    <div class="container">

      <form action="lib/postRegist.php"  method="post" class="form-signin">
        <h2 class="form-signin-heading">Register Page</h2>
        
        <input name="username" type="text" class="form-control" placeholder="Username"/><br>
        <input name="email" type="email" class="form-control" placeholder="E-Mail"/><br>
        <input name="name" type="text" class="form-control" placeholder="Full name"/><br>

        <input name="password" type="password" class="form-control" placeholder="Password"/><br>
        <input name="conPassword" type="password" class="form-control" placeholder="Confirm Password"/><br>
       

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <br>
         <a href="login.php" class="btn btn-block btn-danger">Have Account</a><br>
      </form>

    </div>
  </body>
</html>

</div>
</form>
	<?php }

?>