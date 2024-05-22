<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anacodna";

$name=$_POST["name"];
$email=$_POST["email"];
$comment=$_POST["comment"];

$conn = new mysqli($servername, $username, $password, $dbname);


$stmt=$conn->prepare("insert into comment(name,email,comment)values(?,?,?)");
$stmt->bind_param("sss",$name,$email,$comment);
$insert = $stmt->execute(); 
if($insert)
{
header('location: python_content.php');
}
?>