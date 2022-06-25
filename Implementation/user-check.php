<?php
$conn = mysqli_connect("localhost","root","","sample");
if($conn)
echo "Connection established";
$result = mysqli($conn),"SELECT * FROM reg");
$data  = array();
while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

?>