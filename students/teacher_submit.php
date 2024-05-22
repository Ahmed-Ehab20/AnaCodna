<?php
session_start();
if (!(isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'user')) {
    header("Location: /anacodna/index.php");
    exit();
    
}
if(isset($_SESSION['user_id'])){
    $user=$_SESSION['user_id'];

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Teacher List</title>
    <link rel="stylesheet" href="stu.css">
</head>
<body>
<br><br>
<h1><center><a href="student.php" class="btn btn-primary">Back to student home</a></center></h1>
<br><br>
 <h1><center>Teacher List</center></h1>
 <br><br>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'anacodna';
            $conn = new mysqli($host, $username, $password, $database);
            if ($conn->connect_error) {
                die('Connection failed: ' . $conn->connect_error);
            }
            $sql = "SELECT * FROM submit WHERE student = '$user'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $sql3 = "SELECT * FROM usertable WHERE id='".$row['teacher']."';";
                    
                    $result3 = $conn->query($sql3);
                    
                    if ($result3->num_rows > 0) {
                        
                    while ($row3 = $result3->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row3['name'] . '</td>';
                    echo '<td>' . $row3['email'] . '</td>';
                    echo "<td><form action='display.php' method='post'><button class='btn btn-primary' name='teacherId' value='".$row3['id']."'>See Content</button></form></td>";
                    echo '</tr>';
                    }}
                }
            } else {
                echo '<tr><td colspan="3">No teachers found.</td></tr>';
            }
            
            ?>
        </tbody>
    </table>
</body>
</html>