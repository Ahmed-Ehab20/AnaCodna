<?php
session_start();
?>
<?php
include '../config.php';
$email = $_SESSION['email'];
$level_c = $_SESSION['level_c'];
$check_email = "SELECT level_c FROM usertable WHERE email = '$email'";
$res = mysqli_query($con, $check_email);
$level_c=3;
$sql ="UPDATE `usertable` SET `level_c`='$level_c' WHERE email = '$email'";
$result = mysqli_query($con, $sql);
header('location: ../c_content.php');
?>