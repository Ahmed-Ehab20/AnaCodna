<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anacodna";

$header=$_POST["header"];
$header1=$_POST["header1"];
$intro=$_POST["intro"];
$header2=$_POST["header2"];
$paragraph2=$_POST["paragraph2"];
$photo2=$_POST["photo1"];
$header3=$_POST["header3"];
$paragraph3=$_POST["paragraph3"];
$photo3=$_POST["photo2"];
$header4=$_POST["header4"];
$paragraph4=$_POST["paragraph4"];
$photo4=$_POST["photo3"];
$con_header=$_POST["con_header"];
$conclusion=$_POST["conclusion"];
$article_date=$_POST["article_date"];

$conn = new mysqli($servername, $username, $password, $dbname);


$stmt=$conn->prepare("insert into teachcontent (header,header1,intro,
                                           header2,paragraph2,photo1,
                                           header3,paragraph3,photo2,
                                           header4,paragraph4,photo3,
                                           con_header,conclusion,article_date)
                                           values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

$stmt->bind_param("ssssssssssssssss",$header,$header1,$intro,$header2,$paragraph2,$photo1,$header3,$paragraph3,$photo2,
                                     $header4,$paragraph4,$photo3,$con_header,$conclusion,$article_date);

$insert = $stmt->execute(); 
if($insert)
{
header('location: teach_add.php');
}
?>