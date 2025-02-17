<?php

$host = "localhost";
$db_name = "online_course";
$db_user = "root";
$db_pass = '';

try {
    $conn = New PDO("sql:host=$host;dbname=$db_name;charset=utf8",$db_user,$db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection fail".$e->getMesage());
}