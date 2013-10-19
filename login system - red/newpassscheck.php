<?php

include("db.php");

// Connect to server and select databse.
$db_handle = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$db_found = mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['userree']; 
$mypasswordo=md5($_POST['passreeo']); 
$mypassword=md5($_POST['passree']); 
$mypasswordx=md5($_POST['passxree']);

$query=mysql_query("SELECT * FROM $tbl_name WHERE username='$myusername'");
$numrows=mysql_num_rows($query);

if($numrows!=0){
	while($row=mysql_fetch_assoc($query)){
		$db_pass=$row['password'];
	}
if($mypasswordo==$db_pass){
if($mypassword==$mypasswordx){
$sql = "UPDATE $tbl_name SET password='$mypassword' WHERE username='$myusername' AND password='$mypasswordo'";
$res = mysql_query($sql);
	echo"Password updated<br><a href='index.php'>Login</a>";
	mysql_close($db_handle);
}else{
	echo"The new password must match to the retyped new password!<br><a href='newpass.php'>Back</a>";
	mysql_close($db_handle);
}
}else{
	echo"The Old password is incorrect<br><a href='newpass.php'>Back</a>";
	mysql_close($db_handle);
}
}
?>