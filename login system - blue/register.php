<?php include("name.php"); ?>
<html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Register</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
  
  <link rel="stylesheet" href="style.css" type="text/css">

</head>

<body>

	<div id="header">
		<br>
		<h1><?php Echo"$name"; ?></h1>
	</div>

	<div id="login">

		<h2><span class="fontawesome-lock"></span>Register</h2>

		<form action="registercheck.php" method="POST">

			<fieldset>

				<p><input  name="userre" id="userre" type="text" placeholder="Username" maxlength="20" minlength="4"></p> <!-- JS because of IE support; better: placeholder="username" -->
				<p><input name="mailre" id="mailre" type="text" placeholder="Email" minlength="4"></p>
				<p><input name="passre" id="passre" type="password" placeholder="Password" maxlength="65" minlength="4"></p>
				<p><input name="passxre" id="passxre" type="password" placeholder="Re-Enter password" maxlength="65" minlength="4"></p> <!-- JS because of IE support; better: placeholder="password" -->
				<p><h4>You already have an account? Thats great! <a href="index.php">Login</a></h4></p>
				<p><button id="register" value="Register">Register</button></p>

			</fieldset>

		</form>

	</div> <!-- end login -->

</body>	
</html>