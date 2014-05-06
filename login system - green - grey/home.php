<?php
if(!isset($_COOKIE['ID_my_site'])){
	   header("location: login.php");
		exit();
}

?>
<?php include("name.php"); ?>
<!doctype html>
<html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>WiWeb - Home</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">

  <link rel="stylesheet" href="home-style.css" type="text/css">

</head>

<body>

	<div id="header">
		<br>
		<h1><?php Echo"$name"; ?></h1>
	</div>
	<div id="navbar">

	</div>
	<div id="body">

	</div>
	<div id="footer">

	</div>

</body>
</html>
