
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_usermanagement</title>
    
    <link rel="stylesheet" href="profile.css">

</head>
<body>

<!--- navbar-->


<?php include 'nav.php';?>

<!--- -->
    <section class="head">
    <header>

    <div class="container header_container">
       <div class="header_left">
       <h1>Edit informatin</h1>
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
    <section class="del_edi">
<div class="form-box login">
                <form action="delete_by_admin.php" method="post" name="regform">

                    <h1>Delete User account</h1>
                    <br>
                    <div class="del">
                        <span class="icon"><i class='bx bxs-envelope' ></i></span>
                        <label>Enter user Email </label>
                        <input type="email" name="email" required>
                        <br> <br>
                    </div>

                        <button type="delete" class="btn btn-primary">delete</button>  
                </form>
            </div>
            </div>
</section>
</body>
</html>