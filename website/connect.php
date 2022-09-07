<?php

$host = 'localhost';
$dbName = 'website';
$user = 'root';
$password = '';

$connectDataBase = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
if (!$connectDataBase) {
    echo "<script>alert('failed connection')</script>";
}
