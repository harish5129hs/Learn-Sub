<?php 

 include("dbcon.php");
 $email =mysqli_real_escape_string($conni,$_POST['username']);
 $query1 ="select * from  user where username = '$email'";


  ////mysql_select_db("prof");
 $result = mysqli_query($conni,$query1);
 if(!$result){
    die("error".mysqli_error($conni));
  }


 $r = mysqli_fetch_assoc($result);

 if($r){
    echo 1;
 	 
 } 
 else{
    echo 0;
 }         
                 
?>
