<?php
session_start();
header('location:sign_up.php');
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'meltinpot');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$psw = $_POST['psw'];

$s = " select * from users where email = '$email'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['isRegister'] = "false";
}
else {
	$reg = "insert into users(firstName, lastName, email, password) values ('$fname','$lname','$email','$psw')";
	mysqli_query($con,$reg);
	$_SESSION['isRegister'] = "true";
	echo "Registration successful";
	
}
	


?>