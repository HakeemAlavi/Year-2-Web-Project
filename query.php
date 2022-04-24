<?php
$servername = 'localhost';

  $username = 'root';

  $serverpass = '';

  $databasename = 'webproject';

// Create connection
$conn = mysqli_connect($servername, $username, $serverpass, $databasename);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT firstname, lastname , email, password, biodata, remail FROM user";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo " - Name: " . $row["firstname"]. " " . $row["lastname"]."<br><br>"." - E-mail: " . $row["email"]."<br><br>"." - Password: " . $row["password"]. "<br><br>"." - Biodata: " . $row["biodata"]. "<br><br>"." - Recepient's E-mail: " . $row["remail"]."<br><br><br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>

