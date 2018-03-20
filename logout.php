<?php


session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: entry.php"); // Redirecting To Home Page
}
?>
