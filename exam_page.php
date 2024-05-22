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
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<nav>
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
    <!DOCTYPE html>
<html>
<head>
	<title>MCQ Questions</title>
	<style type="text/css">
		h1 {
			text-align: center;
			color: white;
			margin-top: 50px;
		}
		form {
			margin-top: 30px;
			text-align: center;
		}
		input[type="radio"] {
			margin-right: 10px;
		}
		input[type="submit"] {
			margin-top: 20px;
			padding: 10px 20px;
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<h1>MCQ Questions</h1>
	<div class="row" style="...">
  <div class="col-lg-6 col-lg-push-3" style="...">
  <br>
  <div class="row">
    <br>
    <div class="col-lg-2 col-lg-push-10">
      <div id="current_que" style="float:left"></div>
      <div style="float:left"></div>
      <div id="total_que" style="float:left"></div>
  </div>
  <div class="row" style="margin-top: 30px">
  <div class="row">
    <div class="col-lg-10 col-lg-push-1" style="min-height: 300px; background-color:white" id="load_questions">
  </div>
  </div>
  </div>
  <div class="row" style="margin-top:10px">
  <div class="col-lg-6 col-lg-push-3" style="min-height: 50px">
  <div class="col-lg-12 text-center">
    <input type="button" value="previous" onclick="load_previous();">&nbsp;
    <input type="button" value="next" onclick="load_next();">
  </div>
  </div>
  </div>
  </div>
<script type="text/javascript">
  function load_total_que()
  {
    var xmlhttp =new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
    {
      if (xmlhttp.readystate==4 && xmlhttp.status==200)
      {
        document.getElementById("total_questions").innerHTML=xmlhttp.responseText;
      }
    };
    xmlhttp.open("GET","forajax/load_total_questions.php",true);
    xmlhttp.send(null);
  }
  var questionno="1";
  load_questions(questionno);
  function load_questions(questionno)
  {
    document.getElementById("current_que").innerHTML=questionno;
    var xmlhttp =new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
    {
      if (xmlhttp.readystate==4 && xmlhttp.status==200)
      {
        if(xmlhttp.responeText=="over")
        {
          window.location="result.php";
        }
        else{
          document.getElementById("load_questions").innerHTML=xmlhttp.responseText;
          load_total_que();
        }
      }
    };
    xmlhttp.open("GET","forajax/load_questions.php?questionno="+questionno,true);
    xmlhttp.send(null);
  }
  function load_previous()
  {
    if(questionno=="1")
    {
      load_questions(questionno);
    }
    else{
      questionno=eval(questionno)-1;
      load_questions(questionno);
    }
  }
  function load_next()
  {
    if(questionno=="1")
    {
      load_questions(questionno);
    }
    else{
      questionno=eval(questionno)+1;
      load_questions(questionno);
    }

  }
  </script>
</body>
</html>

</body>
</html>