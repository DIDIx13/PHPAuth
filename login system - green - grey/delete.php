<?php include("name.php"); ?>
<html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Delete Account</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
  
  <link rel="stylesheet" href="style.css" type="text/css">

</head>

<body>

	<div id="header">
		<br>
		<h1><?php Echo"$name"; ?></h1>
	</div>

	<div id="login">

		<h2><span class="fontawesome-lock"></span>Delete Account</h2>

		<form action="deletecheck.php" method="POST">

			<fieldset>

				<p><input  name="userde" id="userde" type="text" placeholder="Username" maxlength="20" minlength="4"></p> 
				<p><input  name="passde" id="passde" type="password" placeholder="Password" maxlength="65" minlength="4"></p> 
				<p><input  name="passdex" id="passdex" type="password" placeholder="Re-Enter Password" maxlength="65" minlength="4"></p> 
				<p><h4>You dont want to delete your account anymore? <a href="index.php">Login</a></h4></p>

				<p><button id="register" value="Register">Delete</button></p>

			</fieldset>

		</form>

	</div> <!-- end login -->

</body>	
</html>