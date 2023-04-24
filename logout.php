<?php
session_start(); // start the session

// unset all session variables
$_SESSION = array();

// destroy the session
session_destroy();

// redirect to the homepage
header("Location: index.php");
exit;
?>
