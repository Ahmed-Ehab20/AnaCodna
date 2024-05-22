<?php
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "exams";

$con = mysqli_connect($host, $user, $password,$dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
$id=$_GET["id"];
mysqli_query($con,"delete from exam_category where id=$id");
?>
<script type="text/javascript">
    window.location="test.php";
    </script>