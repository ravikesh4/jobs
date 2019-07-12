<?php
  include_once('eheader1.php');

  $email = $_SESSION['email'];
?>

<table class="table table-hover container">
  <thead>
    <tr>
      <th scope="col">Field</th>
      <th scope="col">Value</th>
    </tr>
  </thead>
  <tbody>
    <?php
       $conn = mysqli_connect("localhost", "root", "", "jobs");
       // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

       
       $sql = "SELECT * FROM employer where email='$email'";
       $result = mysqli_query($conn, $sql);

       if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_assoc($result)) 
            { 
              echo "<TR><TD>";
              echo "ID";
              echo "<TD>";
              echo $row["eid"];
              echo "</TD></TR>";
              echo "<TR><TD>";
              echo "Company Name";
              echo "<TD>";
              echo $row["company_name"];
              echo "</TD></TR>";
              echo "<TR><TD>";
              echo "Email";
              echo "<TD>";
              echo $row["email"];
              echo "</TD></TR>";
              echo "<TR><TD>";
              echo "Password";
              echo "<TD>";
              echo $row["pwd"];
              echo "</TD></TR>";
              
              echo "<TR><TD>";
              echo "Person Name";
              echo "<TD>";
              echo $row["person_name"];
              echo "</TD></TR>";
              echo "<TR><TD>";
              echo "Mobile Number";
              echo "<TD>";
              echo $row["mobile"];
              echo "</TD></TR>";
              echo "<TR><TD>";
              echo "Designation";
              echo "<TD>";
              echo $row["designation"];
              echo "</TD></TR>";
              echo "<TR><TD>";
              echo "Address";
              echo "<TD>";
              echo $row["address"];
              echo "</TD></TR>";
              echo "<TR><TD>";
              echo "Date of join";
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

<?php
  include_once('footer.php');
?>