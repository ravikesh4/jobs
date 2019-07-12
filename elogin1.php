<?php
    require_once('connection.php');
    $email = $pwd = '';

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $sql = "SELECT * FROM employer WHERE email='$email' AND pwd='$pwd'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $eid = $row["eid"];
            $email = $row["email"];
            session_start();
            $_SESSION['id'] = $id;
            $_SESSION['email'] = $email;

        }
        header("location: eindex.php");
    }
    else {
        echo "<script type='text/javascript'>alert('Invalid Username or Password')</script>";
        echo "<meta http-equiv='refresh' content='0;URL=elogin.php' />";
    }
?>