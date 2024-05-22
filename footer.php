<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

.footer {
    background-color: #f8f8f800;
    padding: 20px;
    text-align: center;
  }
  
  .footer p {
    margin: 0;
    color: #dee0e8;
  }
  
  .footer-links,
  .social-icons {
    list-style-type: none;
    padding: 0;
    margin-top: 10px;
  }
  
  .footer-links li,
  .social-icons li {
    display: inline;
    margin: 0 10px;
  }
  
  .footer-links li a,
  .social-icons li a {
    text-decoration: none;
    color: #dee0e8;
  }
  
  .logo {
    width: 110px;
    height: auto;
    margin-bottom: 10px;
  }

  footer ul li a:hover{
    color: rgb(99, 159, 255);
    transition: 0.6s;
}
  
  /* Responsive Styles */
  @media only screen and (max-width: 600px) {
    .footer {
      padding: 10px;
    }
  
    .footer p {
      font-size: 14px;
    }
  
    .footer-links,
    .social-icons {
      margin-top: 5px;
    }
  
    .footer-links li,
    .social-icons li {
      margin: 0 5px;
    }
  
    .logo {
      max-width: 80%;
    }
  }
</style>
</head>

<body>
    
<footer class="footer">
  <div class="container">
    <p> 2023 AnaCodna. All rights reserved.</p>
    <ul class="social-icons">
    <li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
    <li><a href="#"><i class="uil uil-instagram-alt"></i></a></li>
    <li><a href="#"><i class="uil uil-twitter"></i></a></li>
    <li><a href="#"><i class="uil uil-linkedin-alt"></i></a></li>
    </ul>
    <ul class="footer-links">
    <li><a href="index.php">Home</a></li>
    <li><a href="newabout.php">About</a></li>
    <li><a href="pro.php">Project</a></li>
    <li><a href="forum/forum.php">Forum</a></li>
    </ul>
  </div>
</footer>
    
</body>
</html>