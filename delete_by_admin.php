<?php
$email = $_POST["email"];
$con = mysqli_connect("localhost","root","") or die ("Error : Can't Connect to Server");
$db = mysqli_select_db($con,"anacodna") or die ("Error : Can't Connect to Server");
$delete = mysqli_query($con,"delete FROM usertable where email = '$email'");
if ($delete!==false){
echo ("the row has been deleted");
header('location: admin.php');
exit();
}else{
    echo ("the row has not been deleted");
    header('location: admin.php');
}

?>