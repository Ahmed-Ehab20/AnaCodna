<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>C++ level 2 Quiz</title>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="../content.css">
	<link rel="stylesheet" href="../quize.css">
	<!-- RESPONSIVE OF NAV , IMPROVE FOOTER AND SEARCH BAR STYLE -->

	<style>
		/* RESPONSIVE OF ALL PAGE  */
		/* NOTE : DON'T CHANGE THE NAME 'style ' IF CHANGED BROWSER DON'T READET  */
		@import "../CSS/style.css";
	</style>
</head>

<body>


	<nav class="nav" id="nav">
	<div class="container nav_container">
          <a href="index.php"><img src="../images/a logo.png"></a>
          <ul class="nav_menu">
               <li><a href="../index.php">Home</a></li>
                <li><a href="../newabout.php">About</a></li>
                <li><a href="../pro.php">Project</a></li>
	</nav>
	<section class="quize-box">
		<div class="quizeContainer">
			<?php
			session_start();
			?>
			<?php
			include '../config.php';
			$q1 = '';
			$q2 = '';
			$q3 = '';
			$q4 = '';
			$q5 = '';
			if ($q1 == '' || $q2 == '' || $q3 == '' || $q4 == '' || $q5 == '')
				$q1 = $_POST['q1'];
			$q2 = $_POST['q2'];
			$q3 = $_POST['q3'];
			$q4 = $_POST['q4'];
			$q5 = $_POST['q5'];

			if ($q1 == '' || $q2 == '' || $q3 == '' || $q4 == '' || $q5 == '') {
				echo '<h2 class="quize-header">Please answer all questions.</h2>';
			} else {
				$score = 0;
				if ($q1 == 1) { // 1st option is correct
					$score++;
				}
				if ($q2 == 2) { // 2nd option is correct
					$score++;
				}
				if ($q3 == 2) { // 2nd option is correct
					$score++;
				}
				if ($q4 == 2) { //2nd option is correct
					$score++;
				}
				if ($q5 == 1) { //1st option is correct
					$score++;
				}
				$score = $score	/ 5 * 100;
				if ($score < 50) {
					echo '<h2 class="quize-header">You need to score at least 50% to pass the exam.</h2>';
					echo '<h3 class="quize-titleheader"><a href="pyQuize2Cplus.php"> Try again </a></h3>';

					require "../connection.php";
				    $email = $_SESSION['email'];
				    $sql ="UPDATE `usertable` SET `score_Cplusplus`='$score' WHERE email = '$email'";
				    $result = mysqli_query($con, $sql);
				} else {
					echo '<h2 class="quize-header">You have passed the exam and scored ' . $score . '%.</h2>';
					echo '<h3 class="quize-titleheader">     <a href="../pro.php"> got to project </a></h3>';
					echo '<h3 class="quize-titleheader">     <a href="../user_level/level2Cplus.php"> finish the level </a></h3>';

				}

			}

			?>


		</div>
	</section>


	<script src="./main.js"></script>

	<script>
		// MOBILE MENU SCRIPT 
		function toggleMobileMenu(menu) {
			menu.classList.toggle('open');
		}
	</script>


</body>

</html>