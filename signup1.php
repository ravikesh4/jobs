<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$year = $_POST['year'];
$month = $_POST['month'];
$file = $_POST['file'];
// $file = $_FILES['file']['name'];
// $fileName=$_FILES["file"]["name"];
//   $fileSize=$_FILES["file"]["size"]/1024;
//   $fileType=$_FILES["file"]["type"];
//   $fileTmpName=$_FILES["file"]["tmp_name"];  






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

$sql = "INSERT INTO users (fname, lname, email, pwd, exp_year, exp_month, resume)
VALUES ('$fname', '$lname', '$email', '$pwd', '$year', '$month', '$file')";

if (mysqli_query($conn, $sql)) {
    echo "<h1>Thank you for Register, login using Email-id and Password</h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 

<meta http-equiv="refresh" content="0;URL=login.php" />