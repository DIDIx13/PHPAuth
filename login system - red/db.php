<?php
$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="database name"; // Database name 
$tbl_name="table name"; // Table name 

// Connect to server and select databse.
$db_handle = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$db_found = mysql_select_db("$db_name")or die("cannot select DB");
?>