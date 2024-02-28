<?php
require_once __DIR__ . '/connection.php';

$longURL  = (string) $_GET["lurl"];
$shortURL = (string) $_GET["surl"];

$sql = "INSERT INTO urls (long_url, short_url)
VALUES ('$longURL', '$shortURL')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: home.php');
?>