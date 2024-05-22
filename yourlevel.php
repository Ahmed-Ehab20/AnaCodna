
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

<!--- navbar-->


<?php include 'nav.php';?>

<!--- -->


<section class="levels">

<h1><center>Your progress in all courses </center></h1>  
   <div class="main">
        <ul class="cards">
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/pyth.png" />
              </div>
              <div class="card_content">
                 <h2><?php echo "Your level in Python course is : ".$level_python ?></h2> 
                 <h2><?php echo "Your grade in Python course is : ".$score_python ?></h2>
              <div class="card_text">
                 
                          
                </div>
              </div>
            </div>
          </li>
      
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/clevel.png" >
               
              </div>
              <div class="card_content">
                 <h2><?php echo "Your level in C course is : ".$level_c ?></h2>
                 <h2><?php echo "Your grade in C course is : ".$score_c ?></h2>  
              <div class="card_text">
                 
                  
                  
                </div>
              </div>
            </div>
          </li>
      
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/levelc++.png" />
                
              </div>
              <div class="card_content">
                 <h2><?php echo "Your level in C++ course is : ".$level_Cplusplus ?></h2>
                 <h2><?php echo "Your grade in C++ course is : ".$score_cplusplus ?></h2> 
              <div class="card_text">
                 
                
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
</section>

    <script src="./main.js"></script>
    
</body>
</html>