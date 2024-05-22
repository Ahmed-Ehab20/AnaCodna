<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>teacher home</title>
    <link rel="stylesheet" href="/anacodna/project.css">
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
                <h1>You can put your content here.</h1>
                <p> 
                Post your content.<br>
                Upload your content.<br>
                Make it easier to access.  
                </p>
            </div>
            <div class="header_right">
                <div class="header_right-image">
                 
                </div>
            </div>
        </div>
    </header>

   
    
    <section class="cards1" id ="project">
        <div class="content">
            
            <div class="card">
                <div class="icon">
                <i class="fa fa-file-text" aria-hidden="true"></i>
             </div>
                <div class="info">
                    <h3>Upload Content</h3>
                    <p>Get started <a href="Upload.php" class="project-btn">click here</a></p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                <i class="fa fa-eye" aria-hidden="true"></i>
              </div>
                <div class="info">
                    <h3>View Content</h3>
                    <p>Get started <a href="View.php" class="project-btn">click here</a></p>
                </div>
                </div>

                <div class="card">
                <div class="icon">
                <i class="fa fa-users" aria-hidden="true"></i>
              </div>
                <div class="info">
                    <h3>Students</h3>
                    <p>Get started <a href="student.php" class="project-btn">click here</a></p>
                </div>
                </div>
        </div>
        
    </section> 



    <script src="/anacodna/main.js"></script>

    <?php include 'footer.php';?>
    
</body>
</html>
    



