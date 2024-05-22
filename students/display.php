<?php
session_start();
if (!(isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'user')) {
    header("Location: /anacodna/index.php");
    exit();
}

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'anacodna';
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>teacher upload</title>
    <link rel="stylesheet" href="/anacodna/teach/teach.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<br><br><br>
<h1><center>Click on the file to download</center></h1>
<section class="viewfile">
<?php
if(isset($_POST['teacherId'])){


$teacher_id=$_POST['teacherId'];
        $query = "SELECT name_file, description FROM files WHERE teacher_id = '$teacher_id'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            echo '<h2>Uploaded Files:</h2>';
            echo '<ul>';

            while ($row = mysqli_fetch_assoc($result)) {
                $file_name = $row['name_file'];
                $description = $row['description'];
                echo '<div class="viewf"><li><a href="../teach/files/' . $file_name . '" download>' . $file_name . '</a> - ' . $description . '</li></div>';
            }

            echo '</ul>';
        } else {
            echo 'No files uploaded yet.';
        }
    }else{
        header("Location:teacher_submit.php");
    }

?>
</section>
<center><a href="teacher_submit.php" class="btn btn-primary">Back to Teachers page</a></center>

</body>
</html>
