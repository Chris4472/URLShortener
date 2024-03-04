<?php
require_once __DIR__ . '/connection.php';

$short_url = $_GET['s'];

$result = $conn->query("SELECT long_url FROM urls WHERE short_url='$short_url'");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        header('Location: '.$row['long_url']);
    }
}

$conn->close();
?>