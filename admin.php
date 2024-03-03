<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/connection.php';

echo 'Admin Page </br></br>';

$sql = "SELECT long_url, short_url FROM urls";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table><tr><th>Long URL</th><th>Short URL</th></tr>';
    while($row = $result->fetch_assoc()) {
        echo "<tr><td><a>" . $row["long_url"]. "</a></td><td><a href='". $row["long_url"]."'>" . $row["short_url"] . "</a></td></tr><br>";
    }
    echo '</table>';
}


$conn->close();
?>