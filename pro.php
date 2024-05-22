<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>project</title>
    <link rel="stylesheet" href="project.css">
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
            </div>
            <div class="header_right">
                <div class="header_right-image">
                </div>
            </div>
        </div>
    </header>

   



    <br>
    
    <section class="cards" id ="project">
        <h1><center>Projects</center></h1>
        <hr>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-c"></i>
                </div>
                <div class="info">
                    <h3>C programming</h3>
                    <p>learn to C <a href="c_proj.php" class="project-btn">click here</a></p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-c">++</i>
                </div>
                <div class="info">
                    <h3>C++ programming</h3>
                    <p>learn to C++ <a href="c++_proj.php" class="project-btn">click here</a></p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fa-brands fa-python"></i>
                </div>
                <div class="info">
                    <h3>Python programming</h3>
                    <p>learn to Python <a href="python_proj.php" class="project-btn">click here</a></p>
                </div>
            </div>
        </div>
    </section>


    <br> 















    <script src="./main.js"></script>

    <?php include 'footer.php';?>

    
</body>
</html>