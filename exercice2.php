<?php

$dbhost = 'localhost';
$dbport = '5432';
$dbname = 'php_postgre';
$dbuser = 'postgres';
$dbpassword = 12136270;

$dbconn = pg_connect("host=$dbhost port=$dbport dbname=$dbname user=$dbuser password=$dbpassword");

if (!$dbconn) {
    echo "Could not connect to database.\n";
    exit;
} else {
    echo "Connected to database.\n";
}

$query = "CREATE TABLE COMPANY (
                ID INT PRIMARY KEY NOT NULL,
                NAME TEXT NOT NULL,
                AGE INT NOT NULL,
                ADDRESS CHAR(50),
                SALARY REAL
            )";

$result = pg_query($dbconn, $query);

if (!$result) {
    echo "Error creating table.\n";
    exit;
} else {
    echo "Created table successfully.\n";
}

pg_close($dbconn);
?>