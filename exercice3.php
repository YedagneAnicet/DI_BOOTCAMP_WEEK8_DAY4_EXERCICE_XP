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

$query = "SELECT * FROM COMPANY";

$result = pg_query($dbconn, $query);

if (!$result) {
    echo "Error fetching data\n";
    exit;
} else {
    echo "Successfully fetched data from database.\n";

}
echo "<table>";
echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Salary</th>
        </tr>";

while ($row = pg_fetch_assoc($result)) {

    $id = $row['id'];
    $name = $row['name'];
    $age = $row['age'];
    $address = $row['address'];
    $salary = $row['salary'];
    echo "<tr>
                <td>$id</td>
                <td>$name</td>
                <td>$age</td>
                <td>$address</td>
                <td>$salary</td>
            </tr>";
}
echo "</table>";

pg_close($dbconn);
?>