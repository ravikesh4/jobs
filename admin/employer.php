<?php
	include_once('header.php');
?>
	<h1 style="text-align: center">List Of Employers</h1><br>
	<table class="container table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">Employer Id</th>
	      <th scope="col">Company Name</th>
	      <th scope="col">Email</th>
	      <th scope="col">Person Name</th>
	      <th scope="col">Mobile</th>
	      <th scope="col">Designation</th>
	      <th scope="col">Address</th>
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

       
       $sql = "SELECT * FROM employer";
       $result = mysqli_query($conn, $sql);

       if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_assoc($result)) 
            { 
              echo "<TR>";
              echo "<TD>";
              echo $row["eid"];
              echo "<TD>";
              echo $row["company_name"];
              echo "<TD>";
              echo $row["email"];
              echo "<TD>";
              echo $row["person_name"];
              echo "<TD>";
              echo $row["mobile"];
              echo "<TD>";
              echo $row["designation"];
              echo "<TD>";
              echo $row["address"];
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