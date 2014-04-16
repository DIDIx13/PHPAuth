<?php

include("db.php");

// Connect to server and select databse.
$db_handle = mysql_connect("$host", "$username", "$password")or die("cannot connect");
$db_found = mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['userde'];
$password=md5($_POST['passde']);
$passwordx=md5($_POST['passdex']);

$query=mysql_query("SELECT * FROM $tbl_name WHERE username='$myusername'");
$numrows=mysql_num_rows($query);

if($numrows!=0){
	while($row=mysql_fetch_assoc($query)){
		$db_pass=$row['password'];
		$db_mail=$row['email'];
	}
if($password==$db_pass){
if($password==$passwordx){
mysql_query("DELETE FROM $tbl_name WHERE username='$myusername' AND password='$password' AND email='$db_mail'");
	$my_file = "$myusername.php";
	unlink($my_file);
	echo"Account Deleted<br><a href='index.php'>Login</a>";
	mysql_close($db_handle);
}else{
	echo"Both passwords must match!<br><a href='delete.php'>Back</a>";
	mysql_close($db_handle);
}
}else{
	echo"That password is not the same as the password of the user that was said in the username field<br><a href='delete.php'>Back</a>";
	mysql_close($db_handle);
}
}
?>
