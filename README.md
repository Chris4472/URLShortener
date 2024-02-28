# URLShortener
 Small project to create a URL shortener

The project can be hosted using WAMP locally. The following MySQL script must be run to create the database and table, this can be done using MySQL Workbench.

CREATE DATABASE url_shorterner;

CREATE TABLE urls (
    id int(11) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    long_url varchar(2000) NOT NULL,
    short_url varchar(255) NOT NULL
);