<?php
session_start();
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "exams";

$con = mysqli_connect($host, $user, $password,$dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
$total_que=0;
$res1=mysqli_query($con,"select * from questions where category='$_session[exam_category]'");
$total_que=mysqli_num_rows($res1);
echo $total_que;
?>