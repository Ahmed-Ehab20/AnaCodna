<?php
session_start();
if (!(isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'teacher')) {
    header("Location: /anacodna/index.php");
    exit();
}
if(isset($_SESSION['user_id'])){
    $user=$_SESSION['user_id'];

}
?>
<?php
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'anacodna';
            $conn = new mysqli($host, $username, $password, $database);
            if ($conn->connect_error) {
                die('Connection failed: ' . $conn->connect_error);
            }

if(isset($_POST['userId'])){
$student=$_POST['userId'];
$sql = "SELECT * FROM submit WHERE teacher='$user' and student='$student';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 }else{
    $sql2 = "INSERT INTO submit(teacher,student) VALUES('$user','$student');";
    $result2 = $conn->query($sql2);
    $sql3 = "DELETE FROM request WHERE teacher='$user' AND student ='$student';";
    $result3 = $conn->query($sql3);
 }    


}

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>students</title>
    <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }
    
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f2f2f2;
      font-weight: bold;
    }
    
    tr:hover {
      background-color: #f5f5f5;
    }
    
    /* Optional: add additional styling */
    .highlight {
      background-color: #ffeeba;
      font-weight: bold;
    }
  </style>

<link rel="stylesheet" href="/anacodna/students/stu.css">


</head>
<body>



<br><br>
<h1><center><a href="teacher.php" class="btn btn-primary">Back to teacher home</a></center></h1>
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

            $sql = "SELECT * FROM request WHERE teacher= '$user'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    $sql2 = "SELECT * FROM usertable WHERE id = '".$row['student']."';";
                    $result2 = $conn->query($sql2);
                    if ($result2->num_rows > 0) {
                        while ($row2 = $result2->fetch_assoc()) {
                           echo "<td>".$row2['name']."</td>
                           <td>".$row2['email']."</td>";
                        }}   
                               
                    echo "<td><form action='' method='post'><button class='btn btn-primary' name='userId' value='".$row['student']."'>Submit Request</button></form></td>";
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="3">No Recuests found.</td></tr>';
            }
            
            ?>
        </tbody>
    </table>

</body>
</html>


