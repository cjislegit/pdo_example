<?php

//Set up variables
$host = "localhost";
$user = "root";
$password = "123456";
$dbname = "proposes";

//Set DSN
$dsn = "mysql:host=$host;dbname=$dbname";

//Create PDO instance
$pdo = new PDO($dsn, $user, $password);

//PDO Query
$stmt = $pdo->query('SELECT * FROM post');

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row["title"] . "<br />";
}