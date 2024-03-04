# URLShortener
 Small project to create a URL shortener

I used WAMP to locally host the project and MySql Workbench for the database. The below MySQL script must be run to create the database and table.

Versions
WAMP  - 3.3.1 
PHP   - 8.2.3 
MySQL - 5.7.31


CREATE DATABASE url_shorterner;

CREATE TABLE urls (
    id int(11) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    long_url varchar(2000) NOT NULL,
    short_url varchar(255) NOT NULL
);


New Urls can be added from the home page at /home.php
These can be viewed as an admin from /admin.php
To use the Url Shorterner you can go to localhost/?s='short_url'