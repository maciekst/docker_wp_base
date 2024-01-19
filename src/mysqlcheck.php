<?php
$host = "mysql";
$db = "mydb";
$dbu = "mydbu";
$dbp = "mydbpass";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $dbu, $dbp);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection succesfull";
} catch(PDOException $e) {
    echo "Couldn't connect: " . $e->getMessage();
}

$conn = null;