<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="content.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
 
</head>
<body>

    <nav>
        <div class="container nav_container">
            <a href="index.php"><img src="images/a logo.png"></a>
                <ul class="nav_menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="newabout.php">About</a></li>
                <li><a href="pro.php">Project</a></li>
              <?php
                if(isset($_SESSION["email"])){
                    echo "<li><a href='profile.php'>MyProfile</a></li>";
                    echo "<li><a href='logout.php'>Logout</a></li>";
                }else{
                    echo "<li><a href='login.php'>Login</a></li>";
                }
                ?>

            </ul>
            <button id="menu-btn"><i class="uil uil-bars"></i></button>
            <button id="menu-btn-close"><i class="uil uil-multiply"></i></button>

        </div>
    </nav>

    <header>
        <div class="container header_container">
            <div class="header_left">
                <br><br>
                <h1>Programing</h1>
                <p>A programming language is a formal language designed to communicate instructions to a computer. 
                    It allows software developers to write code that can be executed by a computer to perform specific tasks or solve problems. 
                    Programming languages have their own syntax and grammar,
                    and each language has a unique set of rules and commands that programmers use to create computer programs
                </p>
                <a href="index.html" class="btn btn-primary">Get Started</a>
            </div>
            <div class="header_right">
                <div class="header_right-image">
                    <img src="images/con 1.png">
                </div>
            </div>
        </div>
    </header>

    
    <script src="./main.js"></script>

    <br>   


    <section class="content">

<br>
<script src ="http://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "content");

// Retrieve the content from the database
$result = $conn->query("SELECT * FROM article");

// Check if there is more content to display
if ($result->num_rows > 0) {
    // Calculate the current position in the result set
    $position = isset($_GET['position']) ? $_GET['position'] : 0;


    // Move the result set pointer to the current position
    $result->data_seek($position);

    // Retrieve the next row of data
    $row = $result->fetch_assoc();

    // Display the content
    echo 
        "<br><h1><center>".$row["header"]."</h1><br></center>".
        "<br><h1>".$row["header1"]."</h1><br>".
        "<br>".$row["intro"]."<br>".
        "<br><h2>".$row["header2"]."</h2>".
        $row["paragraph2"]."<br>".
        "<br><h2>".$row["header3"]."</h2>".
        $row["paragraph3"]."<br>".
        "<br><h2>".$row["header4"]."</h2>".
        $row["paragraph4"]."<br>".
        "<br><h1>".$row["con_header"]."</h1><br>".
        "<br>".$row["conclusion"]."<br>".
        "<br><h1>".$row["date_header"]."</h1><br>".
        "<br><h1>".$row["article_date"]."</h1>"
        ;

    // Display the "Next" button
    echo '<br>';
    echo '<a href="?position=' . ($position + 1) . '"> Next </a>';
    echo '<a href="?position=' . ($position - 1) . '">Previous</a>';
}

// Close the database connection
$conn->close();
?>
</section>


<!--insert comments-->

<section class ="a">
<center><h1>Your comment give us more than what you think!</h1></center><bR>
<div class="comment-box">

  <h3>Leave a Comment</h3>
  <form action="addcomment.php" method="POST">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea id="comment" name="comment" required></textarea>
    </div>
    
    <div class="form-group">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</section>



<!--display commments -->



<section class="content1">
<div class="icon">
<i class="fa-solid fa-users-line" style="color: #0066cc;"></i>
</div>
<h1><center>USERS COMMENTS :<center></h1><br>

<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "content";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name,comment,com_date FROM comment ORDER BY id DESC LIMIT 5  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<table><tr><td><h1>".
        $row["name"]."</td><td></h1>".
        "<p>".$row["comment"]."</p>".
        "<p>".$row["com_date"].
        "</p></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

</section>





    <footer>
        <div class="container footer_container">
            <div class="footer_1">
                <a href="index.html" class="footer_logo"><h4>AnaCodna</h4></a>
                <ul class="socials">
                <li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                <li><a href="#"><i class="uil uil-instagram-alt"></i></a></li>
                <li><a href="#"><i class="uil uil-twitter"></i></a></li>
                <li><a href="#"><i class="uil uil-linkedin-alt"></i></a></li>
            </ul>
            </div>

            <div class="footer_2">
                <h4>Links</h4>
                <ul class="links">
                <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">About</a></li>
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="pro.php">Project</a></li>
                </ul>
            </div>

            <div class="footer_3">
                <h4>Privacy</h4>
                <ul class="privcay">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="tel+123456789">Call Us</a></li>
                    <li> <a href="mailto:example@gmail.com">Send Mail</a></li>

                </ul>
            </div>
            </div>

     
        </div>
    </footer>
    
</body>
</html>