<?php

$dbhost = 'localhost'; 
$dbuser = 'root'; 
$dbpass = ''; 
$dbname='learnsub';
$conni = mysqli_connect("localhost",'root','','learnsub');
if(!$conni){
	die('could not connect'.mysql_error());
}

?>