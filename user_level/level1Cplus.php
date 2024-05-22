<?php
session_start();
?>
<?php
include '../config.php';
$email = $_SESSION['email'];
$level_Cplusplus = $_SESSION['level_Cplusplus'];
$check_email = "SELECT level_Cplusplus FROM usertable WHERE email = '$email'";
$res = mysqli_query($con, $check_email);
if($res == 3){
	$level_Cplusplus=3;
	$sql ="UPDATE `usertable` SET `level_Cplusplus`='$level_Cplusplus' WHERE email = '$email'";
	$result = mysqli_query($con, $sql);
}
else if($level_Cplusplus == 0){
	$level_Cplusplus=1;
	$sql ="UPDATE `usertable` SET `level_Cplusplus`='$level_Cplusplus' WHERE email = '$email'";
	$result = mysqli_query($con, $sql);
}
else if($res == 2){
	$level_Cplusplus=2;
	$sql ="UPDATE `usertable` SET `level_Cplusplus`='$level_Cplusplus' WHERE email = '$email'";
	$result = mysqli_query($con, $sql);
}
header('location: ../c++_content.php');
?>