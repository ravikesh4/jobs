<?php
    include_once('header.php');
?>

    <form class="container sign" action="login1.php" method="POST">
        <h1 style="text-align: center">LOGIN FORM</h1>
        <div class="row sign1">
            <div class="form-group col-lg-4">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
        </div>
        <div class="row sign1">
            <div class="form-group col-lg-4">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="pwd" id="exampleInputPassword1" placeholder="Password">
            </div>
        </div>
        <span class="move"><button type="submit" class="btn btn-primary">Sign In</button></span>
    </form>
    <br><br>




<?php
    include_once('footer.php');
?>