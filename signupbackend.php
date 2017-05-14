<?php
   

   include("dbcon.php");
    
   
 
   $name = $_POST["name"];
   $username = $_POST["username"];
   $pass = $_POST["pass"];

   
  
   $query = "INSERT INTO `learnsub`.`user` (`username`, `name`, `password`, `completed`, `complete_count`, `complete_greater`, `complete_sub`, `complete_twosub`) VALUES (?, ?, ?, 'n', 'n', 'n', 'n','n');";
      
   if(!($stmt = mysqli_prepare($conni , $query))){
    die("Prepare failed:" . mysqli_error($conni));
  }
  if(!(mysqli_stmt_bind_param($stmt,'sss',$username,$name,$pass))){
     die("Binding failed:" . mysqli_error($conni));
  }
  if (!mysqli_stmt_execute($stmt)) {
    die("Execution failed:" . mysqli_error($conni));
  } 
  else{

   header("location:enter.php?msg=regsuccess");
   
   }
   mysqli_close($conni); 
?>

