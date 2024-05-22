<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>teacher upload</title>
    <link rel="stylesheet" href="teach.css">
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
                Upload your content
                Make it easier to access.  
                </p>
                <a href="View.php" class="btn btn-primary">View Your Pdf</a>

            </div>
            <div class="header_right">
                <div class="header_right-image">
                 
                </div>
            </div>
        </div>
    </header>

    <section class="uploads">
  <div class="file">
    <form class="" action="upload_file.php" method="post" enctype="multipart/form-data">
      <label for="file">Choose Your File</label><br>
      <input id="file" type="file" name="file" required><br><br>
      <label for="description">File Description</label><br>
      <textarea id="description" name="description"></textarea><br><br>
      <input id="upload" type="submit" name="submit" value="Upload">
    </form>
  </div>
</section>


  </body>
</html>
