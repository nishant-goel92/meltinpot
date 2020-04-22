<?php
session_start();
session_destroy();
$_SESSION['isLoggedOut'] = "true";
header('location:homepage.php');
?>