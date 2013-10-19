<?php include("name.php"); ?>
<html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>New Password</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
  
  <link rel="stylesheet" href="style.css" type="text/css">

</head>

<body>

	<div id="header">
		<br>
		<h1><?php Echo"$name"; ?></h1>
	</div>

	<div id="login">

		<h2><span class="fontawesome-lock"></span>New Password</h2>

		<form action="newpassscheck1.php" method="POST">

			<fieldset>

				<p><input  name="userree" id="userree" type="text" placeholder="Username" maxlength="20" minlength="4"></p> 

				<p><input name="passreeo" id="passreeo" type="password" placeholder="Old password" maxlength="65" minlength="4"></p>

				<p><input name="passree" id="passree" type="password" placeholder="New password" maxlength="65" minlength="4"></p>

				<p><input name="passxree" id="passxree" type="password" placeholder="Re-Enter new password" maxlength="65" minlength="4"></p> 

				<p><h4>Dont want a new password? <a href="index.php">Login</a></h4></p>

				<p><button id="register" value="Register">Ok</button></p>

			</fieldset>

		</form>

	</div> <!-- end login -->

</body>	
</html>