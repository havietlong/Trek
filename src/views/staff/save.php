<?php

// Get the content data from the POST request
$content = $_POST['content'];
$title = $_POST['title']; 
$id_product = $_POST['id_product']; 
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trek";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors in the database connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id_product = $_GET['id_product'];
include_once 'connection/openConnect.php';
$sql = "SELECT * FROM product WHERE id_product = $id_product";
$description = mysqli_query($connect, $sql);
foreach($description as $description){
  $id_description = $description['id_description'];
}
// Check id 
$sql = "SELECT * FROM description WHERE id_description = $id_description";
$description = mysqli_query($conn, $sql);
$descriptionExistId = mysqli_num_rows($description);
// Insert the content data into the database
if($descriptionExistId == 0){
$sql = "INSERT INTO description (name_description, content_description, id_staff) VALUES ('$title', '$content',NULL)";
mysqli_query($conn, $sql);
}else{
$sql = "UPDATE description SET name_description = $title, content_description = $content, id_staff = NULL WHERE id_description = $id_description "; 
mysqli_query($conn, $sql); 
}

if ($conn->query($sql) === TRUE) {
  echo "Content saved successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
