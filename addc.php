<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anacodna";

$header=$_POST["header"];
$header1=$_POST["header1"];
$intro=$_POST["intro"];
$photo1=$_POST["photo1"];
$header2=$_POST["header2"];
$paragraph2=$_POST["paragraph2"];
$photo2=$_POST["photo2"];
$header3=$_POST["header3"];
$paragraph3=$_POST["paragraph3"];
$photo3=$_POST["photo3"];
$header4=$_POST["header4"];
$paragraph4=$_POST["paragraph4"];
$photo4=$_POST["photo4"];
$con_header=$_POST["con_header"];
$conclusion=$_POST["conclusion"];
$date_header=$_POST["date_header"];

$conn = new mysqli($servername, $username, $password, $dbname);


$stmt=$conn->prepare("insert into c_article (header,header1,intro,photo1,
                                           header2,paragraph2,photo2,
                                           header3,paragraph3,photo3,
                                           header4,paragraph4,photo4,
                                           con_header,conclusion,date_header)
                                           values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

$stmt->bind_param("ssssssssssssssss",$header,$header1,$intro,$photo1,$header2,$paragraph2,$photo2,$header3,$paragraph3,$photo3,
                                     $header4,$paragraph4,$photo4,$con_header,$conclusion,$date_header);

$insert = $stmt->execute(); 
if($insert)
{
header('location: article.php');
}
?>