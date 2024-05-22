<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Level 1 Quiz</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../content.css">
    <link rel="stylesheet" href="../quize.css">
    <!-- RESPONSIVE OF NAV , IMPROVE FOOTER AND SEARCH BAR STYLE -->
    <link rel="stylesheet" href="../CSS/responsive-nav.css">

    <style>
        /* RESPONSIVE OF ALL PAGE  */
        /* NOTE : DON'T CHANGE THE NAME 'style ' IF CHANGED BROWSER DON'T READET  */
        @import "../CSS/style.css";
    </style>
</head>

<body>


    <nav class="nav" id="nav">
        <div class="container nav_container">
            <div class="logo">
                <a href="../index.php"><img src="../images/a logo.png"></a>
            </div>

    </nav>

    <section class="quize-box">

    <div class="quizeContainer">
        <h1 class="quize-header">Python Level 1 Quiz</h1>
        <p class="quize-subtitle">Please fill the details and answers the all questions-</p>
        <form action="scorepython.php" method="post">
            <h3 class="quize-titleheader">Ques1 : Which type of Programming does Python support? </h3>
            <div class="form-group">
                <ol>
                    <li>
                        <input type="radio" name="q1" value="1" />object-oriented programming
                    </li>
                    <li>
                        <input type="radio" name="q1" value="2" />structured programming
                    </li>
                    <li>
                        <input type="radio" name="q1" value="3" />Both
                    </li>
                </ol>
            </div>
            <br />
            <div class="form-group">
                <h3 class="quize-titleheader">Ques2 :Is Python case sensitive when dealing with identifiers?</h3>
                <ol>
                    <li>
                        <input type="radio" name="q2" value="1" />Yes
                    </li>
                    <li>
                        <input type="radio" name="q2" value="2" />No
                    </li>
                    <li>
                        <input type="radio" name="q2" value="3" />machine dependent
                    </li>
                </ol>
            </div>
            <br />
            <div class="form-group">
                <h3 class="quize-titleheader">Ques3 : Which of the following is the correct extension of the Python file? </h3>
                <ol>
                    <li>
                        <input type="radio" name="q3" value="1" />.py
                    </li>
                    <li>
                        <input type="radio" name="q3" value="2" />.p
                    </li>
                    <li>
                        <input type="radio" name="q3" value="3" />.python
                    </li>
                </ol>
            </div>
            <div class="form-group">
                <h3 class="quize-titleheader">Ques4 : Which of the following isn't a part of Python</h3>
                <ol>
                    <li>
                        <input type="radio" name="q4" value="1" />Pointers
                    </li>
                    <li>
                        <input type="radio" name="q4" value="2" />Loops
                    </li>
                    <li>
                        <input type="radio" name="q4" value="3" />Dynamic Typing
                    </li>
                </ol>
            </div>
            <br />
            <div class="form-group">
                <h3 class="quize-titleheader">Ques5 :Which of the following character is used to give single-line comments in Python? </h3>
                <ol>
                    <li>
                        <input type="radio" name="q5" value="1" />//
                    </li>
                    <li>
                        <input type="radio" name="q5" value="2" />#
                    </li>
                    <li>
                        <input type="radio" name="q5" value="3" />!
                    </li>
                </ol>
            </div>
            <br />
            <div class="form-group">
                <button type="submit" value="Submit" name="submit" class="btn btn-primary" onclick="result()">
                    Submit
                </button>
            </div>
            <div class="form-group">
                <p id="result"></p>
            </div>
        </form>
    </div>
    </section>

    <!-- footer -->
    <footer class=" footer-bg ">
        <div class="container footer_container">
            <div class="footer-col ">
                <a href="index.html" class="footer_logo">
                    <h3 class="footer-header">AnaCodna</h3>
                </a>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, pariatur.
                </p>
            </div>

            <div class="footer-col">
                <h3 class="footer-header">Links</h3>
                <ul class="links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">About</a></li>
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="pro.php">Project</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3 class="footer-header">Privacy</h3>
                <ul class="privcay">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3 class="footer-header">Contact Us</h3>
                <div>
                    <a href="tel+123456789">Call Us</a>
                    <br>
                    <a href="mailto:example@gmail.com">Send Mail</a>
                </div>
            </div>

            <div class="socials">
                <ul class="socials">
                    <li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                    <li><a href="#"><i class="uil uil-instagram-alt"></i></a></li>
                    <li><a href="#"><i class="uil uil-twitter"></i></a></li>
                    <li><a href="#"><i class="uil uil-linkedin-alt"></i></a></li>
                </ul>
                <!-- FOR AUTO UPDATE THE YEAR OF COPYRIGHT -->
                <small class="copyright"> copyright © <script>
                        document.write(new Date().getFullYear())
                    </script> AnaCodna. All Rights Reserved.</small>

            </div>

        </div>
    </footer>

    <script src="./main.js"></script>

    <script>
        // MOBILE MENU SCRIPT 
        function toggleMobileMenu(menu) {
            menu.classList.toggle('open');
        }
    </script>

    <script>
        function result() {
            var xhr = new XMLHttpRequest();
            var q1 = document.getElementById("q1").value;
            var q2 = document.getElementById("q2").value;
            var q3 = document.getElementById("q3").value;
            var q4 = document.getElementById("q4").value;
            var q5 = document.getElementById("q5").value;
            xhr.onreadystatechange = function() {
                if (xhr.readystate == 4 && xhr.status == 200) {
                    docuemnt.getElementById("result").innerHTML = xhr.responseText;
                }
            }
            xhr.open("POST", "scorepython.php", true);
            xhr.send(null);
        }
    </script>
</body>

</html>