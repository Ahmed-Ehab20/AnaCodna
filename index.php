<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style_h.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<!--- navbar-->


<?php include 'nav.php';?>

<!--- -->

    <header>
        <div class="container header_container">
            <div class="header_left">
                <h1>Programming has become an essential skill in today's digital world.</h1>
                <p> With technology permeating every aspect of our lives,
                    programming has become a fundamental tool for solving complex problems,
                    automating tasks, and creating innovative solutions.
                    In this article, we will discuss the importance of learning programming and how it can benefit you.
                </p>
                
                <a href="pro.php" class="btn btn-primary">Get Started</a>
            </div>
            <div class="header_right">
                <div class="header_right-image">
                    <img src="./images/header.svg">
                </div>
            </div>
        </div>
    </header>

<section class="t_cards"><center>

    <h1> Welcome to our programming courses!</h1>
     <h2>
         We offer a wide range of courses designed to help you develop your programming skills<br>
         and prepare you for a successful career in the field.
     </h2>

    <div class="t_card">
        <img src="images/tc.png" alt="Image 1">
        <div class="t_card-content">
        <h1>C</h1>
                    <p>
                        This beginner's course in C is designed to help you develop your fundamental programming skills
                        and give you a solid foundation in C programming.
                    </p>
        </div>
      </div>
      <div class="t_card">
        <img src="images/tc++.png" alt="Image 1">

        <div class="t_card-content">
        <h1>C++</h1>
                    <p>
                       This beginner's course in C++ is designed to help you develop fundamental programming skills
                       and give you a solid foundation in C++ programming. 
                    </p>
        </div>
      </div>
      <div class="t_card">
        <img src="images/tpy.png" alt="Image 1">
        <div class="t_card-content">
        <h1>Python</h1>
                    <p>
                    This beginner's course in Python is designed to help you develop fundamental programming skills
                    and give you a solid foundation in Python programming.</p>
        </div>
      </div>
    </div></center>

    </section>



<script src="./main.js"></script>


<?php include 'footer.php';?>

</body>
</html>