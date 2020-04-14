<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'meltinpot');

if(isset($_SESSION['userId'])){
	$userId = $_SESSION['userId'];
} else{
	$userId = 'guest'.rand(1000,1999);
}

$total = $_SESSION['total'];
$addressLine = $_SESSION['street'].' ,'.$_SESSION['apt'];
$zip = $_SESSION['zip'];
$city = $_SESSION['city'];
$state = $_SESSION['state'];

$oq = "insert into orders(userId, total) values ('$userId','$total')";
mysqli_query($con,$oq);

$orderId = mysqli_insert_id($con);

foreach($_SESSION['products'] AS $product){
	$productId = $product['id'];
	$qty = $product['quantity'];
	$olq = "insert into orderline(orderId,userId,productId,quantity) values ('$orderId','$userId','$productId','$qty')";
	$sucess = mysqli_query($con,$olq);
	if(!$sucess){
		echo mysqli_error();
	}
}

$aq = "insert into address(orderId,userId,state,city,zip,addressLine) values ('$orderId','$userId','$state','$city','$zip','$addressLine')";

$sucess1 = mysqli_query($con,$aq);
if(!$sucess1){
		echo mysqli_error();
	}

$_SESSION['orderId'] = $orderId;

unset($_SESSION['products']);
unset($_SESSION['total']);
unset($_SESSION['city']);
unset($_SESSION['zip']);
unset($_SESSION['apt']);
unset($_SESSION['street']);
unset($_SESSION['state']);

header('location:success.php');
?>