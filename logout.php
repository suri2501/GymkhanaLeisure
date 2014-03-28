<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['name']);
// Delete all session variables
// session_destroy();
mysql_close();
// Jump to login page
header('Location: ./');

?>