<?php
session_start(); // Start session for user authentication

session_destroy();	// Destroy the session and redirect to the home page

header("Location: index.php");
exit();
?>
