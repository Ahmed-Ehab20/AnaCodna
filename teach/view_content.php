<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anacodna";


$conn = new mysqli($servername, $username, $password, $dbname);

// Retrieve content details from database
$id = $_GET['id'];
$sql = "SELECT * FROM teachcontent WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<h1>" . $row["header"] . "</h1>";
    echo "<h2>" . $row["header1"] . "</h2>";
    echo "<p>" . $row["intro"] . "</p>";
    echo "<h2>" . $row["header2"] . "</h2>";
    echo "<p>" . $row["paragraph2"] . "</p>";
   // echo "<img src='" . $row["photo1"] . "'>";
    echo "<h2>" . $row["header3"] . "</h2>";
    echo "<p>" . $row["paragraph3"] . "</p>";
  //  echo "<img src='" . $row["photo2"] . "'>";
    echo "<h2>" . $row["header4"] . "</h2>";
    echo "<p>" . $row["paragraph4"] . "</p>";
  //  echo "<img src='" . $row["photo3"] . "'>";
    echo "<h2>" . $row["con_header"] . "</h2>";
    echo "<p>" . $row["conclusion"] . "</p>";
    echo "<p>" . $row["article_date"] . "</p>";
  }
} else {
  echo "No content found.";
}

$conn->close();
?>
