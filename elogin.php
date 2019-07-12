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
        <a class="navbar-brand" href="index.php"><img src="logo.png" alt="Autojobs LOGO" width="100"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="employer.php">EMPLOYERS</a>
                </li>
            </ul>
            <form class="form-inline" action="elogin.php">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">SIGN IN</button>
            </form>
        </div>
    </nav>



   <form class="container sign" action="elogin1.php" method="POST">
        <h1 style="text-align: center">LOGIN FORM</h1>
        <div class="row sign1">
            <div class="form-group col-lg-4">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
        </div>
        <div class="row sign1">
            <div class="form-group col-lg-4">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
        </div>
        <span class="move"><button type="submit" class="btn btn-primary">Sign In</button></span>
    </form>
    <br><br>





    <?php
    include_once('footer.php');
?>
