<?php
    session_start();
    $email = $_SESSION['email'];
    if (!isset($_SESSION['email']) && empty($_SESSION['email']) ) {
        echo ('<meta http-equiv="refresh" content="0; URL=login.php">');
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Auto Jobs</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index1.php"><img src="logo.png" alt="Autojobs LOGO" width="100"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index1.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jobs1.php">JOBS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ucontact.php">CONTACT US</a>
                </li>
                </ul>
            <form class="form-inline" action="uprofile.php">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php echo $email ?></button>
            </form>
            <form class="form-inline" action="logout.php">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
            </form>
        </div>
    </nav>