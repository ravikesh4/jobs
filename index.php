<?php
    include_once('header.php');
?>
    <div class="header">
        <form method="POST" action="search.php">
            <h1 class="main">Find A <span>Job</span> You Will <span> Love</span></h1>
            <div class="form-box">
                <input type="text" class="search-field skills" name="key" placeholder="Skills, Keywords..." />
                <input type="text" class="search-field location" name="location" placeholder="Location" />
                <button class="search-btn" type="submit">Search</button>
            </div>
        </form>

    </div>
    <div class="find container">
        <h1 class="left">Find the right job for you</h1>
        <div class="left">
            <h5 class="right">Suggested Searches</h5>
            <a href="jobs.php">
                <button type="button" class="btn btn-outline-success">Sales</button>
                <button type="button" class="btn btn-outline-success">Engineering</button>
                <button type="button" class="btn btn-outline-success">finance</button>
                <button type="button" class="btn btn-outline-success">Healthcare Service</button>
                <button type="button" class="btn btn-outline-success">Marketing</button>
                <button type="button" class="btn btn-outline-success">Information Technology</button>
                <button type="button" class="btn btn-outline-success">Administrative</button>
                <button type="button" class="btn btn-outline-success">Human Resources</button>
                <button type="button" class="btn btn-outline-success">Operations</button>
                <button type="button" class="btn btn-outline-success">Consulting</button>
                <button type="button" class="btn btn-outline-success">Entrepreneurship</button>
                <button type="button" class="btn btn-outline-success">Legal</button>
                <button type="button" class="btn btn-outline-success">Media and Communications</button>
                <button type="button" class="btn btn-outline-success">Purchasing</button>
                <button type="button" class="btn btn-outline-success">Research</button>
                <button type="button" class="btn btn-outline-success">Education</button>
            </a>
        </div>
    </div>
    <hr>
    <div class="find container">
        <h1 class="left">Post your job for millions of people to see</h1>
        <div class="right post">
            <a href="jobpost.html" class="btn btn-outline-success post">Post A Job</a>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>

<?php
    include_once('footer.php');
?>