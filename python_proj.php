<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>python</title>
    <link rel="stylesheet" href="c_proj.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
            $city = $fetch['city'];}
            $_SESSION['email'] = $email;}

?>



  <!--- navbar-->


<?php include 'nav.php';?>

<!--- -->
    <header>
        <div class="container header_container">
            <div class="header_left">
                <h1>Python is a popular general-purpose programming language.</h1>
                <p>Welcome to the world of Python programming! Python is a popular high-level programming language used by developers,
                   data scientists, and machine learning engineers for various applications. With its simplicity, readability, and flexibility,
                   Python has become one of the most widely used programming languages in the world.
                </p>
         
            </div>
            <div class="header_right">
                <div class="header_right-image">
                    <img src="images/print_Hello_World__4_-removebg-preview.png">
                </div>
            </div>
        </div>
    </header>


    <section class="t_cards"><center>

    <h1>The most important programming terms you should learn.</h1>
 <h2>
 أهم المصطلحات البرمجية التي يجب ان تتعلمها في هذه المرحلة        
 </h2>

<div class="t_card">
    <div class="t_card-content">
    <h1>Algorithm</h1>
     <h2>مجموعة من التعليمات أو القواعد المصممة لحل مشكلة محددة </h2>
    </div>
  </div>
  <div class="t_card">
    <div class="t_card-content">
    <h1>Variable</h1>
     <h2>عبارة عن حاوية مسماة تخزن قيمة أو بيانات</h2>
    </div>
  </div>
  <div class="t_card">
    <div class="t_card-content">
    <h1>Function</h1>
     <h2>عبارة عن كود مجهّز، يتنفّذ فقط عندما تقوم بإستدعائه. </h2>
    </div>
  </div>
</div></center>

</section>

<section class="t_cards"><center>

<div class="t_card">
<div class="t_card-content">
<h1>Loops</h1>
 <h2>مجموعة من التعليمات أو القواعد المصممة لحل مشكلة محددة </h2>
</div>
</div>
<div class="t_card">
<div class="t_card-content">
<h1>conditions</h1>
<h2>هي هيكل برمجي ينفذ إجراءات مختلفة استنادًا إلى شرط محدد</h2>
</div>
</div>
<div class="t_card">
<div class="t_card-content">
<h1>Syntax</h1>
<h2>هي القواعد والهيكل التي تحدد التنسيق الصحيح للغة البرمجة </h2>
</div>
</div>
</div></center>

</section>


   
    
    <h1><center><br>Common question about Python.</center></h1>  

   <hr>

   <section class="row">
    <div class="card1">
        <h3>What is python?</h3>
        <p>  Python is an interpreted, object-oriented, high-level programming language with dynamic semantics
             developed by Guido van Rossum. It was originally released in 1991. </p>
    </div>
    <div class="card2">
        <h3>Why do we need to learn Python?</h3>
        <p>Python is highly versatile. You can use it for both small and complex tasks, and it is used across many different industries —
             from its more common applications in data science and software engineering to environments like mobile app development,
            artificial intelligence, and machine learning.</p>
    </div>

   </section>
   <section class="row">
    <div class="card1">
        <h3>How long to learn Python?</h3>
        <p>While you can start to write small scripts in Python after just a few days of study,
             you'll probably spend around four months gaining an essential ability in programming with Python.
             You'll have to spend years and build many projects to become a Python expert in even just one field.</p>
    </div>
    <div class="card2">
        <h3>Who uses Python?</h3>
        <p>Python is used by Intel, IBM, NASA, Pixar, Netflix, Facebook,
             JP Morgan Chase, Spotify, and a number of other massive companies.
             It's one of the four main languages at Google, while Google's YouTube is largely written in Python.</p>
    </div>

   </section>
   <section class="row">
    <div class="card1">
        <h3>What job can I do with Python?</h3>
        <p>    Python Developer. Becoming a Python developer is the most direct job out there for someone who knows the Python programming language,
            Product Manager,
            Data Analyst,
            Educator,
            Financial Advisors,
            Data Journalist.</p>
    </div>
    <div class="card2">
        <h3>Why do students use Python?</h3>
        <p>Python offers an interactive environment in which to explore procedural,
             functional and object oriented approaches to problem solving.
              Its high level data structures and clear syntax make it an ideal first language,
               while the large number of existing libraries make it suitable to tackle almost any programming tasks.</p>
    </div>
   </section>



   <br>   <br>    <br>   <br>    <br>   <br>  

   <section class="levels">

   <h1><center>Python learning process.</center></h1>  
   <div class="main">
        <ul class="cards">
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/python.jpg" />
              </div>
              <div class="card_content">
                <h2 class="card_title">How to Install Python?</h2>
                <div class="card_text">
                 
                          
                </div>
              </div>
            </div>
          </li>
      
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/concept 1.png" >
               
              </div>
              <div class="card_content">
                <h2 class="card_title">Concepts for beginners</h2>
                <div class="card_text">
                  
                  
                </div>
              </div>
            </div>
          </li>
      
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/print(Hello World)(2).png" />
                
              </div>
              <div class="card_content">
                <h2 class="card_title">level 1</h2>
                <div class="card_text">
                
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="main">
        <ul class="cards">
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/concept 2.png"/>
              </div>
              <div class="card_content">
                <h2 class="card_title">second level concepts</h2>
                <div class="card_text">
                
              

                </div>
              </div>
            </div>
          </li>
      
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/py level 2.png" />
                
              </div>
              <div class="card_content">
                <h2 class="card_title">Level 2</h2>
                <div class="card_text">
                  
                  
                </div>
              </div>
            </div>
          </li>
      
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/pythonfun.png" />
\              </div>
              <div class="card_content">
                <h2 class="card_title">Level 3</h2>
                <div class="card_text">

                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <br><br>
      <center><a href="python_content.php" class="btn btn-primary">Get Started</a></center>
    </section>






    <script src="./main.js"></script>

    <?php include 'footer.php';?>

    
</body>
</html>