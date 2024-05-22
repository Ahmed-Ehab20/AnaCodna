<?php
session_start();
?>
<?php
include '../config.php';
$email = $_SESSION['email'];
$level_python = $_SESSION['level_python'];
$check_email = "SELECT level_python FROM usertable WHERE email = '$email'";
$res = mysqli_query($con, $check_email);
if($res == 3){
	$level_python=3;
	$sql ="UPDATE `usertable` SET `level_python`='$level_python' WHERE email = '$email'";
	$result = mysqli_query($con, $sql);
}
else if($level_python == 0){
	$level_python=1;
	$sql ="UPDATE `usertable` SET `level_python`='$level_python' WHERE email = '$email'";
	$result = mysqli_query($con, $sql);
}
else if($res == 2){
	$level_python=2;
	$sql ="UPDATE `usertable` SET `level_python`='$level_python' WHERE email = '$email'";
	$result = mysqli_query($con, $sql);
}
header('location: ../python_content.php');
?>