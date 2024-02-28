<?php
require_once __DIR__ . '/header.php';

echo 'Shortern a URL here! </br></br>';

echo buildURLShorterningForm();

function buildURLShorterningForm() {
    return '<form action="/add_short_url.php">
                <label for="lurl">Long URL:</label><br>
                <input type="text" id="lurl" name="lurl"><br>
                <label for="surl">Short URL:</label><br>
                <input type="text" id="surl" name="surl">
            </form>';
}

?>