<?php

$localhost = "localhost";
$DBname = "dashboard";
$DBuser = "root";
$DBpassword = "";

try {
    $conn = new PDO(
        "mysql:host=$localhost;dbname=$DBname",
        $DBuser,
        $DBpassword
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}