<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
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
    	<h1>Welcome To Your Profile <?php echo $_SESSION['name'] ?></h1>

<div class="info">
<h1>Personal Information.</h1>
 <?php
echo "Name : " . "<a href ='edit.php'>" . $_SESSION['name'] . "</a>";
echo "Email : " . "<a href ='edit.php'>".$_SESSION['email'] . "</a>";
echo "Password : ". "<a href ='edit.php'>" .$_SESSION['password'] . "</a>";

echo "City : " . "<a href ='edit.php'>" .$_SESSION['city'] . "</a>". "<br>";
?>
</div>
</div>
</header>
</section>


<section class="del_edi">
<div class="form-box login">
                <form action="delete.php" method="post" name="regform">

                    <h1>Delete your account</h1>
                    <p>Are you sure you want to delete your account?</p>
                    <br>
                    <div class="del">
                        <span class="icon"><i class='bx bxs-envelope' ></i></span>
                        <label>Enter Your Email </label>
                        <input type="email" name="email" required>
                        <br> <br>
                    </div>

                        <button type="delete" class="btn btn-primary">delete</button>  
                </form>
            </div>
            </div>
</section>

<script src="./main.js"></script>
<?php include 'footer.php';?>

</body>
</html>

