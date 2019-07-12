<?php
    include_once('header.php');
?>

    <form class="container" action="signup1.php" method="POST">
        <h1 style="text-align: center">REGISTER</h1><br />
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputFname"></label>First Name:</label>
                <input type="text" name="fname" class="form-control" id="inputFname" placeholder="First Name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputLname"></label>Last Name:</label>
                <input type="text" name="lname" class="form-control" id="inputLname" placeholder="Last Name" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword">Password</label>
                <input type="password" name="pwd" class="form-control" id="inputPassword" placeholder="Password" required>
            </div>
        </div>

        
        <h4>Total Exeperience</h4>
        <div class="form-row">
            <div class="form-group col-md-3">
                <input type="text" name="year" class="form-control" placeholder="Year" id="inputYear" required>
            </div>
            <div class="form-group col-md-3">
                <input type="text" name="month" class="form-control" placeholder="Month" id="inputMonth" required>
            </div>
            <!-- <div class="form-group col-md-3">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" placeholder="Zip" id="inputZip">
            </div> -->

            <div class="form-group col-md-6">
                <input type="text" name="file" class="form-control" placeholder="give drive or any other resume uploaded link">

            </div>

        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Accept Term and Conditions
                </label>
            </div>
        </div>
        <span class="move"><button type="submit" class="btn btn-primary">Sign Up</button></span>
    </form>








<?php
    include_once('footer.php');
?>