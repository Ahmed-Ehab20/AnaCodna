<?php
session_start();
if (!(isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'teacher')) {
    header("Location: /anacodna/index.php");
    exit();
}
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
            <li><a href="/anacodna/index.php">Home</a></li>
                <li><a href="/anacodna/newabout.php">About</a></li>
                <li><a href="/anacodna/pro.php">Project</a></li>
                <li><a href="/anacodna/forum/forum.php">Forum</a></li>

            <?php
                if(isset($_SESSION["email"])){
                    if ($userType === "teacher") {
                        echo "<li><a href='teacher.php'>Teacher</a></li>";
                    } elseif ($userType === "user") {
                        echo "<li><a href='./students/student.php'>Student</a></li>";
                    }
                    echo "<li><a href ='/anacodna/yourlevel.php'>" . "Progress" . "</a></li>";
                    echo "<li><a href='/anacodna/profile.php'>".$name."</a></li>";
                    echo "<li><a href='/anacodna/logout.php'>Logout</a></li>";


                }else{
                    echo "<li><a href='/anacodna/login.php'>Login</a></li>";
                }
                ?>
            </ul>
            <h1 class="logo"><a href="/anacodna/index.php"><img src="/anacodna/images/a logo.png"></a></h1>
        </div>
    </nav>

</body>
</html>