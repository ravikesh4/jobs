<?php

// $name = $_POST['name'];
$key_role = $_POST['key'];
$company_name = $_POST['company'];
$email = $_POST['email'];
// $msg = $_POST['msg'];
// $file = $_FILES['file']['name'];

$servername = "localhost";
$username = "root";
$password = "";

$dbname = "jobs";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO applied (key_role, company_name, email)
VALUES ('$key_role', '$company_name', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "<h1>Thank you for Contacting With Us. We will contact with you soon.</h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 

<meta http-equiv="refresh" content="0;URL=index1.php" />