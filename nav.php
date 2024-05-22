<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="nav.css">

</head>
<body>

<?php 
if(isset($_SESSION["email"])){
require "connection.php";
$email = $_SESSION['email'];
$check_email = "SELECT * FROM usertable WHERE email = '$email'";
$res = mysqli_query($con, $check_email);
if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            $name = $fetch['name'];
            $score_python = $fetch['score_python'];
            $score_c = $fetch['score_c'];
            $score_cplusplus = $fetch['score_cplusplus'];
            $level_Cplusplus = $fetch['level_Cplusplus'];
            $level_c = $fetch['level_c'];
            $level_python = $fetch['level_python'];
            $city = $fetch['city'];}
            $_SESSION['email'] = $email;
        }
?>

<?php 
if(isset($_SESSION["email"])){
require "connection.php";
$email = $_SESSION['email'];
$check_email = "SELECT * FROM usertable WHERE email = '$email'";
$res = mysqli_query($con, $check_email);
if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            $name = $fetch['name'];
            $city = $fetch['city'];
            $_SESSION['user_id'] = $fetch['id'];
            $userType = $fetch['user_type'];
        }
            $_SESSION['email'] = $email;
        }
?>
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
            <li><a href="index.php">Home</a></li>
            <li><a href="newabout.php">About</a></li>
            <li><a href="pro.php">Project</a></li>
            <li><a href="forum/forum.php">Forum</a></li>

            <?php
                if(isset($_SESSION["email"])){
                    if ($userType === "teacher") {
                        echo "<li><a href='teach/teacher.php'>Teacher</a></li>";
                    } elseif ($userType === "user") {
                        echo "<li><a href='./students/student.php'>Student</a></li>";
                    }
                    echo "<li><a href ='yourlevel.php'>" . "Progress" . "</a></li>";
                    echo "<li><a href='profile.php'>".$name."</a></li>";
                    echo "<li><a href='logout.php'>Logout</a></li>";
                    

                }else{
                    echo "<li><a href='login.php'>Login</a></li>";
                }
                ?>
            </ul>
            <h1 class="logo"><a href="index.php"><img src="images/a logo.png"></a></h1>
        </div>
    </nav>

</body>
</html>