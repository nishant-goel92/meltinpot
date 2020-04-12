<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'meltinpot');

$search = $_POST['search'];

$s = " select * from cuisines where cuisineName = '$search'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){
	$r = mysqli_fetch_assoc($result);
	$pageToDisplay = $r['cuisinePage'];
	header('location:'.$pageToDisplay);
}
else {
	header('location:error.php');
	
}
	


?>