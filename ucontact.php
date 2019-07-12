<?php
    include_once('uheader.php');
?>

    <form class="container sign" action="send1.php" method="POST">
        <h1 style="text-align: center">CONTACT FORM</h1>
        <div class="row sign1">
            <div class="form-group col-lg-4">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
            </div>
        </div>
        <div class="row sign1">
            <div class="form-group col-lg-4">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
        </div>
        <div class="row sign1">
        <div class="form-group col-lg-4">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
        <span class="move"><button type="submit" class="btn btn-primary">Send</button></span>
    </form>
    <br><br>




<?php
    include_once('footer1.php');
?>