<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "anacodna");

// Retrieve the content from the database
$query = "SELECT * FROM c_article";
$result = mysqli_query($conn, $query);

// Initialize an empty array to hold the content
$contentArray = array();

// Loop through the result set and append each row of content to the array
while ($row = mysqli_fetch_assoc($result)) {
    $contentArray[] = array(
        'header' => $row['header'],
        'header1' => $row['header1'],
        'intro' => $row['intro'],
        'code' => $row['code'],

        'photo1' => base64_encode($row['photo1']),
        'header2' => $row['header2'],
        'paragraph2' => $row['paragraph2'],
        'photo2' => base64_encode($row['photo2']),
        'header3' => $row['header3'],
        'paragraph3' => $row['paragraph3'],
        'photo3' => base64_encode($row['photo3']),
        'header4' => $row['header4'],
        'paragraph4' => $row['paragraph4'],
        'photo4' => base64_encode($row['photo4']),

        'header5' => $row['header5'],
        'paragraph5' => $row['paragraph5'],
        'header6' => $row['header6'],
        'paragraph6' => $row['paragraph6'],
        'header7' => $row['header7'],
        'paragraph7' => $row['paragraph7'],
        'header8' => $row['header8'],
        'paragraph8' => $row['paragraph8'],
        'header9' => $row['header9'],
        'paragraph9' => $row['paragraph9'],
        'header10' => $row['header10'],
        'paragraph10' => $row['paragraph10'],
        
    
        'article_date' => $row['article_date']
    );
}

// Output the content as a JSON object
echo json_encode($contentArray);

// Close the database connection
mysqli_close($conn);
?>