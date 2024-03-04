<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/connection.php';
require_once __DIR__ . '/url.class.php';

echo 'Admin Page </br></br>';

$result = $conn->query("SELECT long_url, short_url FROM urls");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $urls[] = new Url($row["short_url"], $row["long_url"]);
    }
}

echo '<table><tr><th>Long URL</th><th>Short URL</th></tr>';

foreach ($urls as $url){
    echo "<tr><td><a>" . $url->getLongUrl() . "</a></td><td><a href='". $url->getLongUrl()."'>" . $url->getShortUrl() . "</a></td></tr><br>";
}

echo '</table>';

$conn->close();
?>