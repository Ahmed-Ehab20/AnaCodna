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
    <title>Add Exam</title>
    <link rel="stylesheet" href="article.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<section class ="a">
<br><center><h1>Add your test here</h1></center><bR>
<div class="comment-box">


<form action="" method="POST">
   
    <div class="form-group">
      <label for="header">Add Exam Category</label>
      <input type="text" id="examcategory" name="examcategory" required>
    </div>
    
    <div class="form-group">
      <label for="header1">Exam time (minutes)</label>
      <input type="text" id="examtime" name="examtime" required>
    </div>

    <div class="form-group">
      <input type="submit" name="submit" value="Submit">
    </div>
</form>
</div>
</section>
<table>
 <tr>
 <th>#</th>
 <th>Exam Name</th>
 <th>Exam Time</th>
 <th>Edit</th>
 <th>Delete</th>
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
            <td>Edit</td>
            <td><a href="deletetest.php?id=<?php echo["id"];?>">Delete</a></td>
            </tr>
            <?php
    }
    ?>
 </table>
<?php
if(isset($_POST["submit"]))
{
    mysqli_query($con,"insert into exam_category values(NULL,'$_POST[examcategory]','$_POST[examtime]')") or die(mysqli_error($con));
    ?>
    <script type="text/javascript">
    alert("Exam Added Successfully");
    window.location.href=window.location.href;
    </script>
    <?php
}
?>

</body>
</html>