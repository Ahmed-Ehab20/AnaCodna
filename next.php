<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "anacodna";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT  header, header1 ,intro, header2, paragraph2, header3 , paragraph3 , header4 , paragraph4 ,
 con_header ,conclusion, date_header ,article_date FROM c_article WHERE (article_id=$num+1)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo 
        "<br><h1><center>".$row["header"]."</h1><br></center>".
        "<br><h1>".$row["header1"]."</h1><br>".
        "<br>".$row["intro"]."<br>".
        "<br><h2>".$row["header2"]."</h2>".
        $row["paragraph2"]."<br>".
        "<br><h2>".$row["header3"]."</h2>".
        $row["paragraph3"]."<br>".
        "<br><h2>".$row["header4"]."</h2>".
        $row["paragraph4"]."<br>".
        "<br><h1>".$row["con_header"]."</h1><br>".
        "<br>".$row["conclusion"]."<br>".
        "<br><h4>".$row["date_header"]."</h4>".
        $row["article_date"];
        
    }
} else {
    echo "0 results";
}
$conn->close();
?>