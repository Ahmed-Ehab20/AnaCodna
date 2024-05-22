<?php
include 'db.php';

// Check if form is submitted
if (isset($_POST['submit'])) {
  $pdf=$_FILES['pdf']['name'];
  $pdf_type=$_FILES['pdf']['type'];
  $pdf_size=$_FILES['pdf']['size'];
  $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
  $pdf_store="pdf/".$pdf;

  // Check if uploaded file is a PDF
  if ($pdf_type != 'application/pdf') {
    die('Error: Only PDF files are allowed');
  }

  if (move_uploaded_file($pdf_tem_loc,$pdf_store)) {

    // Prepare SQL query
    $stmt = mysqli_prepare($conn, "INSERT INTO pdf (pdf_file) VALUES (?)");
    mysqli_stmt_bind_param($stmt, "s", $pdf);
    mysqli_stmt_execute($stmt);
    

    echo "File uploaded successfully";
  } else {
    echo "Error uploading file";
  }
}
?>
