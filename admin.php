<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/header.php';

echo 'Admin Page';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT long_url, short_url FROM urls";
$result = $conn->query($sql);

echo $result;

$conn->close();
?>