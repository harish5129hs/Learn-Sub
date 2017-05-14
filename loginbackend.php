<?php 
session_start();
include("dbcon.php");


$username=mysqli_real_escape_string($conni,$_POST['username']);
$password=mysqli_real_escape_string($conni,$_POST['password']);


$query="select * from `user` where `username`='$username' and `password` = '$password' ";


$result=mysqli_query($conni,$query);
$r=mysqli_fetch_assoc($result);


if($r){
  $_SESSION['username']=$username;
  echo 1;
}
else{
  echo 0;
}

 
?>