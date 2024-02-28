<?php
require_once __DIR__ . '/config.php';

$longURL  = $_POST["lurl"];
$shortURL = $_POST["surl"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO urls (long_url, short_url)
VALUES ('$longURL', '$shortURL')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: index.php');
?>