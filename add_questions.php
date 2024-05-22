<?php

$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "exams";

$con = mysqli_connect($host, $user, $password,$dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link rel="stylesheet" href="article.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            <!--font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class ="a">
    <br><center><h1>Add Questions to your Exams Here</h1></center><bR>
    <table>
 <tr>
 <th>#</th>
 <th>Exam Name</th>
 <th>Exam Time</th>
 <th>Select</th>
 </tr>
<?php
    $count=0;
    $res=mysqli_query($con,"select * from exam_category");
    while($row=mysqli_fetch_array($res))
    {
        $count=$count+1;
        ?>
         <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $row["category"];?></td>
            <td><?php echo $row["exam_time"];?></td>
            <td><a href="add_edit_question.php?id=<?php echo $row["id"];?>">Select</td>
            </tr>
            <?php
    }
    ?>
 </table>
</body>
</html>