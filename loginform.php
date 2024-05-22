<?php
session_start();
$email = $_POST["email"];
$password = $_POST["password"];
$con = mysqli_connect("localhost","root","") or die ("Error : Can't Connect to Server");
$db = mysqli_select_db($con,"anacodna") or die ("Error : Can't Connect to Server");
$login = "Select name,email,username,password,city FROM users WHERE  email='$email' and password='$password'";
$result = mysqli_query($con,$login);
$count = mysqli_fetch_array($result);
if(is_array($count)){
    $_SESSION["name"]=$count['name'];
    $_SESSION["username"]=$count['username'];
    $_SESSION["email"]=$count['email'];
     $_SESSION["password"]=$count['password'];
     $_SESSION["city"]=$count['city'];
}else
{
    echo "<h2>Invalid Email Or Password </h2>";
}
if(isset($_SESSION["password"])){
    header("Location:index.php");
}

?>