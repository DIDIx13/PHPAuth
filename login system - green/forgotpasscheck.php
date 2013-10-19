<?php

include("db.php");

// Connect to server and select databse.
$db_handle = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$db_found = mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$username=$_POST['userfo']; 
$number=1;

$query=mysql_query("SELECT * FROM $tbl_name WHERE username='$username'");
$numrows=mysql_num_rows($query);

$code=rand(100000,100000000);

if($numrows!=0){
	while($row=mysql_fetch_assoc($query)){
		$db_mail=$row['email'];
	}

	if($number==1){

	$sql = "UPDATE $tbl_name SET password='$code' WHERE username='$username' AND email='$db_mail'";
	$res = mysql_query($sql);

	mail("$db_mail","Forgot password <noreply>", "message");

	echo"Mail Sent<br><a href='index.php'>Login</a>";
	}
}else{
	echo"That username doesnt exist<br><a href='forgotpass.php'>Back</a>";
}

?>