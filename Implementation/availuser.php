<?php
$uname = $_POST['nameval'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM reg WHERE uname = '$uname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Name : " . $row["fname"]."<br>". "Username : " . $row["uname"]."<br>" ."Aadhar Number :" . $row["aadhar"]."<br>"."Phone :". $row["ph_no"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>