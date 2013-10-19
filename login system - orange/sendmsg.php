<?php

include("db.php");

// username and password sent from form 
$email=$_POST['userse']; 
$msg=$_POST['msgse'];
$number=1;

$query=mysql_query("SELECT * FROM $tbl_name WHERE email='$email'");
$numrows=mysql_num_rows($query);

if($numrows!=0){
	while($row=mysql_fetch_assoc($query)){
		$user=$row['username'];
	}
if($number==1){
	mail('momueller@me.com',"Question or suggustion", "Dear Marc,

$user($email) wants to tell you :
	
$msg
	");

		echo"Mail Sent<br><a href='index.php'>Login</a>";
	}
}else{
	if($number==1){
	mail('yourmail',"Question or suggustion", "message");

		echo"Mail Sent<br><a href='index.php'>Login</a>";
	}
}

?>