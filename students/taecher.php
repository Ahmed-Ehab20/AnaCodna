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
    <title>Teacher List</title>
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
            $sql = "SELECT * FROM usertable WHERE user_type = 'teacher'";
            $result = $conn->query($sql);
                $i=0;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $sql3 = "SELECT * FROM submit WHERE teacher='".$row['id']."' and student='$user'";
                    $result3 = $conn->query($sql3);
                    if ($result3->num_rows > 0) {
                        $i++;
                        if($i==$result3->num_rows){
                            echo '<tr><td colspan="3"></td></tr>';
                        }
                    }else{
                    echo '<tr>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo "<td><form action='' method='post'><button class='btn btn-primary' name='teacherId' value='".$row['id']."'>Request</button></form></td>";
                    echo '</tr>';
                    $i++;
                    if($i==$result3->num_rows){
                        echo '<tr><td colspan="3">No More teachers found.</td></tr>';
                    }
                }

                }
            } else {
                echo '<tr><td colspan="3">No teachers found.</td></tr>';
            }
            
            ?>
        </tbody>
    </table>
</body>
</html>
<?php

if(isset($_POST['teacherId'])){
$teacher=$_POST['teacherId'];
$sql = "SELECT * FROM request WHERE teacher='$teacher' and student='$user'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 }else{

    $sql2 = "INSERT INTO request(teacher,student) VALUES('$teacher','$user');";
    $result2 = $conn->query($sql2);

 } 
}

?>
