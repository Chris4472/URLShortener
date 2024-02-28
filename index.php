<?php
require_once __DIR__ . '/connection.php';

$short_url = $_GET['s'];

$sql = "SELECT long_url FROM urls WHERE short_url='$short_url'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        header('Location: '.$row['long_url']);
    }
}

$conn->close();
?>