<?php
session_start();
session_destroy();
$_SESSION['isLoggedOut'] = "true";
header('location:sign_in.php');
?>