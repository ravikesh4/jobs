<?php
	include_once('header.php');
?>
	<h1 style="text-align: center">List Of Messages</h1><br>
	<table class="container table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">Conatct id</th>
	      <th scope="col">Name</th>
	      <th scope="col">Email</th>
	      <th scope="col">Message</th>
	      <th scope="col">Date Of Message</th>
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

       
       $sql = "SELECT * FROM contact";
       $result = mysqli_query($conn, $sql);

       if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_assoc($result)) 
            { 
              echo "<TR>";
              echo "<TD>";
              echo $row["cid"];
              echo "<TD>";
              echo $row["name"];
              echo "<TD>";
              echo $row["email"];
              echo "<TD>";
              echo $row["msg"];
              echo "<TD>";
              echo $row["date"];
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