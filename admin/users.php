<?php
	include_once('header.php');
?>
	<h1 style="text-align: center">List Of Users</h1><br>
	<table class="container table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">User Id</th>
	      <th scope="col">First</th>
	      <th scope="col">Last</th>
	      <th scope="col">Email</th>
	      <th scope="col">Experience Year</th>
	      <th scope="col">Experience Month</th>
	      <th scope="col">Resume</th>
	      <th scope="col">Date Of Join</th>
	      <!-- <th scope="col">Block</th> -->
	    </tr>
	  </thead>
	  <tbody>
	   

	  	<?php
       $conn = mysqli_connect("localhost", "root", "", "jobs");
       // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

       
       $sql = "SELECT * FROM users";
       $result = mysqli_query($conn, $sql);

       if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_assoc($result)) 
            { 
              echo "<TR>";
              echo "<TD>";
              echo $row["uid"];
              echo "<TD>";
              echo $row["fname"];
              echo "<TD>";
              echo $row["lname"];
              echo "<TD>";
              echo $row["email"];
              echo "<TD>";
              echo $row["exp_year"];
              echo "<TD>";
              echo $row["exp_month"];
              echo "<TD>";
              echo $row["resume"];
              echo "<TD>";
              echo $row["time"];
              echo "</TD></TR>";
              
              
            }   
          } else {
                  echo "0 results";
          }
          mysqli_close($conn);
      ?> 






	    
	  </tbody>
	</table>
</body>
</html>