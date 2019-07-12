<?php
    session_start();
    $email = $_SESSION['email'];
    if (!isset($_SESSION['email']) && empty($_SESSION['email']) ) {
        echo ('<meta http-equiv="refresh" content="0; URL=elogin.php">');
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Auto Jobs</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="eindex.php"><img src="logo.png" alt="Autojobs LOGO" width="100"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="eindex.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jobpost.php">NEW JOB POST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="econtact.php">CONTACT US</a>
                </li>
            </ul>
            <form class="form-inline" action="eprofile.php">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php echo $email ?></button>
            </form>
            <h1><i class="fas fa-user"></i></h1>
                <a href="logout.php" class="btn btn-outline-success my-2 my-sm-0">Logout</a>
            </div>
    </nav>
    <br>






<div class="container">




                        <?php
                           $conn = mysqli_connect("localhost", "root", "", "jobs");
                           // Check connection
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                           
                           $sql = "SELECT * FROM post where email='$email'";
                           $result = mysqli_query($conn, $sql);

                           if (mysqli_num_rows($result) > 0) {

                              while ($row = mysqli_fetch_assoc($result)) 
                                { 
                                    echo "<div class='index'>";
                                    echo "<div class='shadow-lg p-3 mb-5 bg-white rounded'>";
                                  echo "<h2><i class='fa fa-crown'></i>" .$row["key_role"]. "</h2>";
                                  echo "<p><b>Company Name:</b> " .$row["company_name"]. "</p>";
                                  echo "<p><i class='fa fa-briefcase'></i><b>Experience:</b> " .$row["experience"]. "</p>";
                                  echo "<p><i class='fa fa-map-marker'></i> <b>Address:</b> " .$row["address"]. "</p>";
                                  echo "<p><i class='fa fa-wallet'></i> <b>Salary:</b> " .$row["salary"]. "</p>";
                                  echo "<p class='short'><i></i> <b>Description:</b> " .$row["job_description"]. "</p>";
                                  echo "<p class='short'><i></i> <b>About Company:</b> " .$row["company_profile"]. "</p>";
                                  echo "<p><i class='fa fa-crown'></i>Job Id: " .$row["pid"]. "</p>";
                                  echo "</div></div>";
                                  
                                }   
                              } else {
                                      echo "0 results";
                              }
                              mysqli_close($conn);
                          ?> 


                          <div class="find container">
                            <h1 >Post a new job</h1>
                            <div>
                                <a href="jobpost.php" class="btn btn-outline-success post">Post A Job</a>
                            </div>
                        </div>




</div>



       <?php
    include_once('footer.php');
?>