<?php
include ("user.php");

$type = $_POST['type'];

if($type=='count'){
	$sql = "UPDATE `user` SET `complete_count`='y' WHERE `username` = '$username' ";
	$result=mysqli_query($conni,$sql);
	if(!$result){
		die(mysqli_error($conni));
	}
	echo "true";

}
if($type=='great'){
	$sql = "UPDATE `user` SET `complete_greater`='y' WHERE `username` = '$username' ";
	$result=mysqli_query($conni,$sql);
	if(!$result){
		die(mysqli_error($conni));
	}
	echo "true";
}
if($type=='sub'){
	$sql = "UPDATE `user` SET `complete_sub`='y' WHERE `username` = '$username' ";
	$result=mysqli_query($conni,$sql);
	if(!$result){
		die(mysqli_error($conni));
	}
	echo "true";
}

if($type=='twosub'){
	$sql = "UPDATE `user` SET `complete_twosub`='y' WHERE `username` = '$username' ";
	$result=mysqli_query($conni,$sql);
	if(!$result){
		die(mysqli_error($conni));
	}
	echo "true";
}


?>