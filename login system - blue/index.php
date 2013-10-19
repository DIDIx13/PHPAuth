<?php include("name.php"); ?>
<!doctype html>
<html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Login</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
  
  <link rel="stylesheet" href="style.css" type="text/css">

</head>

<body>

	<div id="header">
		<br>
		<h1><?php Echo"$name"; ?></h1>
	</div>

	<div id="login">

		<h2><span class="fontawesome-lock"></span>Sign In</h2>

		<form action="check.php" method="POST">

			<fieldset>

				<p><input  name="user" id="user" type="text" placeholder="Username" maxlength="20" minlength="4"></p> <!-- JS because of IE support; better: placeholder="username" -->
				<p><input name="pass" id="pass" type="password" placeholder="Password" maxlength="65" minlength="4"></p> <!-- JS because of IE support; better: placeholder="password" -->
				<p><h4>Any questions or suggestions? <a href="contactus.php">Ask or tell them</a></h4></p>
				<p><h4>Forgot your password? <a href="forgotpass.php">Find It</a></h4></p>
				<p><h4>No Account yet? <a href="register.php">Register</a></h4></p>
				<p><button id="login" value="Sign In">Sign In</button></p>

			</fieldset>

		</form>

	</div> 

</body>	
</html>