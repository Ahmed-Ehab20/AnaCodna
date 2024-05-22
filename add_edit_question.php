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
<?php
$id=$_GET['id'];
$exam_category='';
$res=mysqli_query($con,"select * from exam_category where id=$id");
while($row=mysqli_fetch_array($res))
{
    $exam_category=$row["category"];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add</title>
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
    <br><center><h1>Add Questions to <?php echo"<font color='red'>".$exam_category."</font>";?></h1></center><bR>
    <div class="comment-box">
    <form action="" method="POST">

    <div class="form-group">
      <label for="header">Add Question</label>
      <input type="text" id="question" name="question" required>
    </div>
    
    <div class="form-group">
      <label for="header1">Option 1</label>
      <input type="text" id="opt1" name="opt1" required>
    </div>

    <div class="form-group">
      <label for="header1">Option 2</label>
      <input type="text" id="opt2" name="opt2" required>
    </div>

    <div class="form-group">
      <label for="header1">Option 3</label>
      <input type="text" id="opt3" name="opt3" required>
    </div>

    <div class="form-group">
      <label for="header1">Option 4</label>
      <input type="text" id="opt4" name="opt4" required>
    </div>

    <div class="form-group">
      <label for="header1">Answer</label>
      <input type="text" id="answer" name="answer" required>
    </div>

    <div class="form-group">
      <input type="submit" name="submit" value="Add Question">
    </div>
</form>
</div>
</section>


<?php
if(isset($_POST["submit"]))
{
    $loop=0;

    $count=0;
    $res=mysqli_query($con,"select * from questions where category='$exam_category' order by id asc") or die (mysqli_error($con));
    
    $count=mysqli_num_rows($res);
    if($count==0)
    {

    }
    else{
        while ($row=mysqli_fetch_array($res))
        {
            $loop=$loop+1;
            mysqli_query($con,"update questions set question_no='$loop' where id =$row[id]");
        }
    }
    $loop=$loop+1;
    mysqli_query($con,"insert into questions values (NULL,'$loop','$_POST[question]','$_POST[opt1]','$_POST[opt2]','$_POST[opt3]','$_POST[opt4]','$_POST[answer]','$exam_category')") or die (mysqli_error($con));
    ?>
    <script type="text/javascript">
        alert("question added successfully");
        window.location.href=window.location.href;
        </script>
        <?php

}
?>

</body>
</html>