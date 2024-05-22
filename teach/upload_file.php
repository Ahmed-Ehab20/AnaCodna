<?php
session_start();
include 'db.php';
if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'teacher') {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
        $file = $_FILES['file'];
        $description = $_POST['description'];
        $file_name = $file['name'];
        $file_tmp = $file['tmp_name'];
        $file_size = $file['size'];
        $file_error = $file['error'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $allowed_extensions = array('pdf','js','csv','ppt','pptx','doc', 'docx', 'txt','php','html','css','zip','rar','sql','png','jpeg ','gif','SVG','py','c','java');
        
        if (in_array($file_ext, $allowed_extensions)) {
            $destination = 'files/' . $file_name;
            
            if (move_uploaded_file($file_tmp, $destination)) {
                $teacher_email = $_SESSION['email'];
                $query = "SELECT id FROM usertable WHERE email = '$teacher_email'";
                $result = mysqli_query($conn, $query);
                
                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $teacher_id = $row['id'];
                    
                    $query = "INSERT INTO files (name_file, description, teacher_id) VALUES ('$file_name', '$description', '$teacher_id')";
                    $result = mysqli_query($conn, $query);
                    
                    if ($result) {
                        echo 'File uploaded successfully. Description: ' . $description;
                    } else {
                        echo 'Error occurred while inserting file details into the database.';
                    }
                } else {
                    echo 'Teacher not found in the database.';
                }
            } else {
                echo 'Error occurred while uploading the file.';
            }
        } else {
            echo 'Invalid file extension. Only ' . implode(', ', $allowed_extensions) . ' files are allowed.';
        }
    }
} else {
    echo 'Access denied. You must be logged in as a teacher.';
}
?>
