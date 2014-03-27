<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="9475618023"; // Mysql password 
$db_name="gymkhana_leisures"; // Database name
$table1='users';
$table2="forum_question";
$table3="forum_answer";

// Connect to server and select databse.
$conn = mysql_connect("$host", "$username", "$password")or die(mysql_error()); 
mysql_select_db($db_name,$conn)or die("cannot select DB".mysql_error());

?>