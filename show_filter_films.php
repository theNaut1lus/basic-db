<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "uts";

$made_before = $_POST["made_before"];
$made_after = $_POST["made_after"];

echo $made_after;
echo $made_before;

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from film where (year>=$made_after and year <= $made_before)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo $row["id"] . " : " . $row["name"] . " : " . $row["year"] . " : " . $row["duration"] . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();


?>