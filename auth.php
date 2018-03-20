<?php
session_start();
if(!isset($_SESSION["rollno"])){
header("Location: entry.php");
exit(); }
?>
