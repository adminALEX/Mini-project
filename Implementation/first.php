<?php
$fname=$_POST['fname'];
$uname=$_POST['uname'];
$aadhar=$_POST['aadhar'];
$ph_no=$_POST['ph_no'];
$pass=$_POST['pass'];
$con_pass=$_POST['con_pass'];


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


else{
  if($pass != $con_pass){
    echo 'password does not match';
        header("Location: reg1.php");
        header("pragma: 499");
      exit();
   
  }
$sql = $conn->prepare("INSERT INTO reg (fname, uname,aadhar,ph_no,pass,con_pass) VALUES (?,?,?,?,?,?)");
$sql->bind_param("ssiiss", $fname,$uname,$aadhar,$ph_no,$pass,$con_pass);
$sql->execute();
header("Location: index.php");
exit();
// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
$sql->close();
$conn->close();
}
?>