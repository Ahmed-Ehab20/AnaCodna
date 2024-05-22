
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="CSS/style_h.css">

</head>
<body>
<!--- navbar-->


<?php include 'nav.php';?>

<!--- -->


    <section>
<?php
$email = $_POST["email"];
$con = mysqli_connect("localhost","root","") or die ("Error : Can't Connect to Server");
$db = mysqli_select_db($con,"userform") or die ("Error : Can't Connect to Server");
$delete = mysqli_query($con,"delete FROM usertable where email = '$email'");
if ($delete!==false){
session_start();
session_unset();
session_destroy();
header('location: index.php');
exit();
}else{
	echo ("the row has not been deleted");
}

?>
</section>

</body>
</html>
