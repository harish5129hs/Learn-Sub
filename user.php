<?php
session_start();
include("dbcon.php");
$username = '';
if(isset($_SESSION['username'])){
	$username=$_SESSION['username'];
}

$sql = "select * from user where username = '$username' ";
$result = mysqli_query($conni,$sql);
if(!$result){
die("error".mysqli_error($conni));
}


$r = mysqli_fetch_assoc($result);
$name = $r['name'];
$namefull = explode(" ",$name);
$name = $namefull[0];

$count = $r['complete_count'];
$greater = $r['complete_greater'];
$sub = $r['complete_sub'];
$twosub = $r['complete_twosub'];
?>