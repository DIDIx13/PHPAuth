<?php include("name.php"); ?>
<!doctype html>
<html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Forgot Password</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
  
  <link rel="stylesheet" href="style.css" type="text/css">

</head>

<body>

	<div id="header">
		<br>
		<h1><?php Echo"$name"; ?></h1>
	</div>

	<div id="login">

		<h2><span class="fontawesome-lock"></span>Forgot Password</h2>

		<form action="forgotpasscheck.php" method="POST">

			<fieldset>

				<p><input  name="userfo" id="userfo" type="text" placeholder="Username" maxlength="20" minlength="4"></p>
				<p><h4>You remembered your password? <a href="index.php">Login</a></h4></p>
				<p><button id="login" value="Sign In">Send</button></p>

			</fieldset>

		</form>

	</div> 

</body>	
</html>