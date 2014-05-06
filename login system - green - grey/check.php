<?php

ob_start();
include("db.php");

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword
$myusername=$_POST['user'];
$mypassword=md5($_POST['pass']);

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
$hour = time() + 3600;

setcookie(ID_my_site, $_POST['user'], $hour);

setcookie(Key_my_site, $_POST['pass'], $hour);
header("location:home.php");
}
else {
echo "Wrong Username or Password<br><a href='index.php'>Back</a>";
}
ob_end_flush();

?>
