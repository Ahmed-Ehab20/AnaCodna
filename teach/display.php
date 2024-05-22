<?php
session_start();
if (!(isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'teacher')) {
    header("Location: /anacodna/index.php");
    exit();
}

include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>teacher upload</title>
    <link rel="stylesheet" href="teach.css">
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
if (isset($_SESSION['email'])) {
    $teacher_email = $_SESSION['email'];

    $query = "SELECT id FROM usertable WHERE email = '$teacher_email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $teacher_id = $row['id'];

        $query = "SELECT name_file, description FROM files WHERE teacher_id = '$teacher_id'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            echo '<h2>Uploaded Files:</h2>';
            echo '<ul>';

            while ($row = mysqli_fetch_assoc($result)) {
                $file_name = $row['name_file'];
                $description = $row['description'];
                echo '<div class="viewf"><li><a href="files/' . $file_name . '" download>' . $file_name . '</a> - ' . $description . '</li></div>';
            }

            echo '</ul>';
        } else {
            echo 'No files uploaded yet.';
        }
    } else {
        echo 'Error: Teacher not found in the database.';
    }
} else {
    echo 'Error: Teacher email not found.';
}
?>
</section>
<center><a href="teacher.php" class="btn btn-primary">Back to Teacher page</a></center>

</body>
</html>
