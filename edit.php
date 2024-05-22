<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>

<?php include 'nav.php';?>


    <section class="head">
    <header>
      <div class="container header_container">
       <div class="header_left">
       <h1>Edit Your informatin</h1>
        <div class="edit">
        <form action="editcode.php" method="post">

            Name:<input type="text" name="name" required>


            Email:<input type="text" name="email" required>

            Password:<input type="text" name="password" required>
            
            City:<input type="text" name="city" required> 

            <button type="submit" name="update" value="Update Data" class="btn btn-primary">Edit</button>  

        </form>
    </div>
    </div>
</header>
</section>



    </body>
</body>
</html>