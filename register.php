<?php
$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$city = $_POST["city"];
$con = mysqli_connect("localhost","root","") or die ("Error : Can't Connect to Server");
$db = mysqli_select_db($con,"anacodna") or die ("Error : Can't Connect to Server");
$insertUser = "INSERT INTO users(name,username,email,password,city) values('$name','$username','$email','$password','$city')";
$result = mysqli_query ($con,$insertUser);
if ($result){
    header("Location:index.php");
}else{
    echo "Error : ".mysqli_error($con);
}

?>