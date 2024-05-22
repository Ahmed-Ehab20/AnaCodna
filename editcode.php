<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   require "connection.php";
   
   // get values form input text and number
   
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $city = $_POST['city'];
   $encpass = password_hash($password, PASSWORD_BCRYPT);
           
   // mysql query to Update data
   $query ="UPDATE `usertable` SET `name`='$name',`email`='$email',`password`='$encpass',`city`='$city' WHERE email = '$email'";

   
   $result = mysqli_query($con, $query);
   
   if($result)
   {
       include_once 'logout-user.php';       
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($con);
}

?>
