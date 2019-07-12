<?php

$key_role = $_POST['key_role'];
$company_name = $_POST['company_name'];
$experience = $_POST['experience'];
$address = $_POST['address'];
$salary = $_POST['salary'];
$emp_type = $_POST['emp_type'];
$email = $_POST['email'];
$job_description = $_POST['job_description'];
$company_profile = $_POST['company_profile'];

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

$sql = "INSERT INTO post (key_role,company_name, experience, address, salary, emp_type, email, job_description, company_profile)
VALUES ('$key_role', '$company_name', '$experience', '$address', '$salary', '$emp_type', '$email', '$job_description', '$company_profile')";

if (mysqli_query($conn, $sql)) {
    echo "<h1>Thank you for Posting Job</h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 

<meta http-equiv="refresh" content="1;URL=eindex.php" />