<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'meltinpot');

$email = $_POST['email'];
$psw = $_POST['psw'];

$s = " select * from users where email = '$email' && password = '$psw' ";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){
	$r = mysqli_fetch_assoc($result);
	$_SESSION['sessionId'] = $r['firstName'];
	$_SESSION['userId'] = $r['email'];
	header('location:after_login.php');
}
else {
	$_SESSION['isLoggedOut'] = "signinfailed";
	header('location:sign_in.php');
	
}
	


?>