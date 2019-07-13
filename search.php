<?php
    include_once('header.php');
?>
    <br>


    <!-- <form class="container" style="justify-content: center">
        <h1 style="text-align: center">LOGIN</h1><br />
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary ">Submit</button>
    </form> -->


    <div class="container">
        <div class="filter">
            <form method="POST" action="search.php">
             <div class="form-box">
                <h4>Search Here</h4>
                <input type="text" class="search-field skills" name="key" placeholder="Skills, Keywords..." />
                <input type="text" class="search-field location" name="location" placeholder="Location" />
                <button class="search-btn" type="submit">Search</button>
            </div>
        </form>
        </div>

        <?php
        	$conn = mysqli_connect("localhost", "root", "" , "jobs");

        	$search = $_POST['key'];
        	$location = $_POST['location'];

        	if($search || $location) {
        		$show = "SELECT * FROM post WHERE key_role = '$search' || address = '$location'";
        		$result = mysqli_query($conn, $show);

        		 while ($row = mysqli_fetch_assoc($result)) 
                                { 
                                    echo "<div class='jobs'>";
                                    echo "<div class='shadow-lg p-3 mb-5 bg-white rounded'>";
                                  echo "<h2>" .$row["key_role"]. "</h2>";
                                  echo "<p><b>Company Name:</b> " .$row["company_name"]. "</p>";
                                  echo "<p><b>Experience:</b> " .$row["experience"]. "</p>";
                                  echo "<p><b>Address:</b> " .$row["address"]. "</p>";
                                  echo "<p><b>Salary:</b> " .$row["salary"]. "</p>";
                                  echo "<p class='short'> <b>Description:</b> " .$row["job_description"]. "</p>";
                                  echo "<p class='short'> <b>About Company:</b> " .$row["company_profile"]. "</p>";
                                ?>
                                  <!-- echo "<b>Job Id:</b><input type='text' name='id' value='" .$row["pid"]. "'>"; -->
                                  <a href="jobsearch.php?pid=<?php  echo $row['pid']; ?>" style="margin-left:10%" class="btn btn-primary search-btn" >Apply</a>
                                <?php
                                  echo "</div></div>";

                                  
                                }   
                              } else {
                                      echo "0 results";
                              }
                              mysqli_close($conn);
                          ?> 

	 </div>



    <br>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>