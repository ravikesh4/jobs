<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
mysqli_connect("localhost", "root", "", "jobs");
// Selecting Database
// $db = mysqli_select_db("college", $connection);
session_start();// Starting Session
// Storing Session
$email=$_SESSION['email'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query("select email from users where email='$email'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['email'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: login.php'); // Redirecting To Home Page
}
?>