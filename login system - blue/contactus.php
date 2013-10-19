<?php include("name.php"); ?>
<html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Contact Us</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
  
  <link rel="stylesheet" href="style.css" type="text/css">

</head>

<body>

	<div id="header">
		<br>
		<h1><?php Echo"$name"; ?></h1>
	</div>

	<div id="login">

		<h2><span class="fontawesome-lock"></span>Contact Us</h2>

		<form action="sendmsg.php" method="POST">

			<fieldset>

				<p><input  name="userse" id="userse" type="email" placeholder="Email" minlength="4"></p> <!-- JS because of IE support; better: placeholder="username" -->
				<p><textarea name="msgse" id="msgse" type="text" placeholder="Questions or Suggestions"></textarea></p>
				<p><h4>You want to delete your account? <a href="delete.php">Delete account here</a></h4></p>
				<p><h4>You forgot your question? Thats sad... well <a href="index.php">Login</a></h4></p>
				<p><button id="register" value="Register">Send</button></p>

			</fieldset>

		</form>

	</div> <!-- end login -->

</body>	
</html>