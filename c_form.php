<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link rel="stylesheet" href="article.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            <!--font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>


<section class ="a">
<br><center><h1>Add your article here</h1></center><bR>
<div class="comment-box">


<form action="addc.php" method="POST">
   
    <div class="form-group">
      <label for="header">Title:</label>
      <input type="text" id="header" name="header" required>
    </div>
    
    <div class="form-group">
      <label for="header1">Header1:</label>
      <input type="text" id="header1" name="header1" required>
    </div>
    
    <div class="form-group">
      <label for="intro">Introduction:</label>
      <textarea id="intro" name="intro" required></textarea>
    </div>
    
    <div class="form-group">
      <label for="photo1">Add photo</label>
      <input type="file" id="photo1" name="photo1">
    </div>

    <div class="form-group">
      <label for="header2">Header2:</label>
      <input type="text" id="header2" name="header2" required>
    </div>
    
    <div class="form-group">
      <label for="paragraph2">paragraph:</label>
      <textarea id="paragraph2" name="paragraph2" required></textarea>
    </div>
    
    <div class="form-group">
      <label for="photo2">photo</label>
      <input type="file" id="photo2" name="photo2">
    </div>

    <div class="form-group">
      <label for="header3">Header3</label>
      <input type="text" id="header3" name="header3" required>
    </div>
    
    <div class="form-group">
      <label for="paragraph3">paragraph</label>
      <textarea id="paragraph3" name="paragraph3" required></textarea>
    </div>
    
    <div class="form-group">
      <label for="photo3">photo</label>
      <input type="file" id="photo3" name="photo3">
    </div>

    <div class="form-group">
      <label for="header1">Header3</label>
      <input type="text" id="header4" name="header4" required>
    </div>
    
    <div class="form-group">
      <label for="paragraph4">paragraph</label>
      <textarea id="paragraph4" name="paragraph4" required></textarea>
    </div>
    
    <div class="form-group">
      <label for="photo1">photo</label>
      <input type="file" id="photo4" name="photo4">
    </div>

    <div class="form-group">
      <label for="con_header">con_header:</label>
      <input type="text" id="con_header" name="con_header" required>
    </div>
    
    <div class="form-group">
      <label for="conclusion">conclusion:</label>
      <textarea id="conclusion" name="conclusion" required></textarea>
    </div>
    
    <div class="form-group">
      <label for="date_header">date_header:</label>
      <input type="text" id="date_header" name="date_header" required>
    </div>

    <div class="form-group">
      <input type="submit" value="Submit">
    </div>
</form>
</div>
</section>


<section class="del_edi">
<div class="form-box login">
                <form action="article_del.php" method="post" name="regform" class="del_form">

                    <h1>Delete an article</h1>
                    <br>
                    <div class="del">
                        <label>Enter article ID</label>S
                        <input type="text" name="id" required>
                        <br> <br>
                    </div>

                        <button type="delete" class="btn btn-primary">Delete</button>  
                </form>
            </div>
            </div>
</section>



</body>
</html>