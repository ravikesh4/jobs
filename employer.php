   <?php
    include_once('eheader.php');
?>

    <br>
    <div class="container">
        <div class="job-image">
            <img src="https://previews.123rf.com/images/kitkana/kitkana1501/kitkana150100001/35073310-lots-of-people-icons-illustrations-all-connecting-together-.jpg" width="400" height="500" alt="Job Image">
        </div>
        <div class="job-form">
            <form action="employer1.php" method="POST">
                <h1 style="text-align: center">REGISTER</h1><br />
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputFname"></label>Company Name:</label>
                        <input type="text" name="company_name" class="form-control" id="inputFname" placeholder="Company Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email:</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <p></p>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword">Password:</label>
                        <input type="password" name="pwd" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword">Confirm Password:</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Confirm Password">
                    </div>
                </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputFname"></label>Contact Person's Name:</label>
                <input type="text" name="person_name" class="form-control" id="inputFname" placeholder="Contact Person's Name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputFname"></label>Mobile Number:</label>
                <input type="text" name="mobile" class="form-control" pattern="[0-9]{10}" id="inputFname" placeholder="Mobile Number">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputFname"></label>Designation:</label>
                <input type="text" name="designation" class="form-control" id="inputFname" placeholder="Designation">
            </div>
            <div class="form-group col-md-6">
                <label for="inputFname"></label>Office Address:</label>
                <input type="text" name="address" class="form-control" id="inputFname" placeholder="Office Address">
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
        <button type="submit" class="btn btn-primary">Sign Up</button></span>
        </form>
    </div>
    </div>
    <br><br><br>
    <div class="container">
        <h1 style="text-align: center">Why With Us:</h1><br>
        <div class="row ">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bringing together people from all over the world</h5>
                        <p class="card-text">The very need for websites is that of delivering information with the intent of bringing together people from all over the world for business, friendships and other public relations. With the rise in interactive online social medium,
                            reaching as many people as possible is mandatory.</p>
                        <!-- <p class="card-text btn btn-primary">Contact Directly</p> -->
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Unique Design</h5>
                        <p class="card-text">There are many website out there connecting different people, but at Evineon will guarantee you a cut above the others with our chic designs that will draw people in. We will take care of all your digital needs from website designing
                            to creating a unique and attractive logo for your company. </p>
                        <!-- <p class="card-text btn btn-primary">Contact Directly</p> -->
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">website of your dreams</h5>
                        <p class="card-text"> We at Evineon can grant you this by designing an aesthetic yet exceptional website, the website of your dreams. Some of the websites we have designed include icreatecenter, Bankloanmela, Digital Freak. Please check these websites
                            if you would like to see how we roll.</p>
                        <!-- <p class="card-text btn btn-primary">Contact Directly</p> -->
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
<?php
    include_once('footer.php');
?>
