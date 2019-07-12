<?php

$company_name = $_POST['company_name'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$person_name = $_POST['person_name'];
$mobile = $_POST['mobile'];
$designation = $_POST['designation'];
$address = $_POST['address'];
// $company_profile = $_POST['company_profile'];

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

$sql = "INSERT INTO employer (company_name, email, pwd, person_name, mobile, designation, address)
VALUES ('$company_name', '$email', '$pwd', '$person_name', '$mobile', '$designation', '$address')";

if (mysqli_query($conn, $sql)) {
    echo "<h1>Thank you for Registering</h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 

<meta http-equiv="refresh" content="1;URL=elogin.php" />