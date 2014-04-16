<?php

include('profile.php');
include('name.php');
include('db.php');

// Connect to server and select databse.
$db_handle = mysql_connect("$host", "$username", "$password")or die("cannot connect");
$db_found = mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['userre'];
$myusermail=$_POST['mailre'];
$mypassword=md5($_POST['passre']);
$mypasswordx=md5($_POST['passxre']);

$query=mysql_query("SELECT * FROM $tbl_name WHERE username='$myusername'");
$numrows=mysql_num_rows($query);

$query2=mysql_query("SELECT * FROM $tbl_name WHERE email='$myusermail'");
$numrows2=mysql_num_rows($query2);

if($numrows2==0){
if($numrows==0){

if($mypassword==$mypasswordx){
if ($db_found) {

mysql_query("INSERT INTO $tbl_name (username,email,password) VALUES ('$myusername','$myusermail','$mypassword')");

mail($myusermail, "Welcome to $name <noreply>",
"Welcome $myusername to $name,

You signed up to $name with the username $myusername.

You can change your password at http://www.test.com/newpass.php or if you lost it
go to http://www.test.com/forgotpass.php .

We hope you enjoy your stay,

- your $name team
");

$link="$myusername.php";

echo "Records added to the database<br>Mail sent<br><a href='index.php'>Login</a>";

}
else {

print "Database NOT Found ";
mysql_close($db_handle);

}
}else{
	echo"Those passwords dont match<br><a href='register.php'>Back</a>";
}
}else{
	echo"That username already exists<br><a href='register.php'>Back</a>";
}
}else{
	echo"That email already exists<br><a href='register.php'>Back</a>";
}
?>
