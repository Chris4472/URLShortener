<?php
echo buildNavigationBar();

function buildNavigationBar(): string {
    return '<head>
                <link rel="stylesheet" href="header.css">
            </head>

            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul></br></br>';
}

?>