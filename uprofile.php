<?php
  include_once('uheader.php');
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

       
       $sql = "SELECT * FROM users where email='$email'";
       $result = mysqli_query($conn, $sql);

       if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_assoc($result)) 
            { 
              echo "<TR><TD>";
              echo "UID";
              echo "<TD>";
              echo $row["uid"];
              echo "</TD></TR>";
              echo "<TR><TD>";
              echo "Name";
              echo "<TD>";
              echo $row["fname"]. ' ' .  $row["lname"];
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
              echo "Experience Year";
              echo "<TD>";
              echo $row["exp_year"];
              echo "</TD></TR>";
              echo "<TR><TD>";
              echo "Experience Month";
              echo "<TD>";
              echo $row["exp_month"];
              echo "</TD></TR>";
              echo "<TR><TD>";
              echo "Resume.";
              echo "<TD>";
              echo $row["resume"];
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
  include_once('footer1.php');
?>